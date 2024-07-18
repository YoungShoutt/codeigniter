<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Dynmic_menu.php
 */
class Dynamic_menu_settings
{

  private $ci;            // para CodeIgniter Super Global Referencias o variables globales
  private $id_menu        = 'id="menu"';
  private $class_menu     = 'class="dropdown"';
  private $class_parent   = 'class="parent"';
  private $class_last     = 'class="last"';
  // --------------------------------------------------------------------
  /**
   * PHP5        Constructor
   *
   */
  function __construct()
  {
    $this->ci = &get_instance();    // get a reference to CodeIgniter.
    $this->ci->load->helper('url');
  }
  // --------------------------------------------------------------------
  /**
   * build_menu($table, $id)
   *
   * Description:
   *
   * builds the Dynaminc dropdown menu
   * $table allows for passing in a MySQL table name for different menu tables.
   * $id is for the type of menu to display ie; topmenu, mainmenu, sidebar menu
   * or a footer menu.
   *
   * @param    string    the MySQL database table name.
   * @param    string    the type of menu to display.
   * @return    string    $html_out using CodeIgniter achor tags.
   */

  function build_menu($id, $nama)
  {


    // now we will build the dynamic menus.

    $html = '<nav class="top-bar" data-options="is_hover:false">
                 
                  <section class="top-bar-section">
                    <!-- Right Nav Section -->
                    <ul class="left">
                      <li class="divider"></li>';

    /*
         * check $id for the type of menu to display.
         *
         * ( 0 = top menu ) ( 1 = horizontal ) ( 2 = vertical ) ( 3 = footer menu ).
         */
    switch ($id) {
      case 0:            // 0 = top menu
        break;

      case 1:            // 1 = horizontal menu
        //$html_out .= "\t\t".'<ul '.$this->class_menu.'>'."\n";
        break;

      case 2:            // 2 = sidebar menu
        break;

      case 3:            // 3 = footer menu
        break;

      default:        // default = horizontal menu
        //$html_out .= "\t\t".'<ul '.$this->class_menu.'>'."\n";

        break;
    }

    // me despliega del query los rows de la base de datos que deseo utilizar
    $query = $this->ci->db->query("SELECT a.title,a.id,b.show_menu FROM dyn_groups a,user_dyn_menu b where a.id=b.id AND b.user_id='$id' ORDER BY urut ASC");
    foreach ($query->result() as $key) {
      $checked0 = ($key->show_menu) ? 'checked' : "";
      $id0 =   json_encode(array("id" => $id, "menu_id" => $key->id));
      $html .= "<li class='has-dropdown'><a><input type='checkbox' class='messageCheckbox' name='check_" . $key->id . "' onClick='checked_menu($id0)' $checked0> " . ucwords(strtolower($key->title)) . "</a> ";
      $html .= '<ul class="dropdown">';
      $query1 = $this->ci->db->query("SELECT * FROM user_dyn_menu a,dyn_menu b WHERE a.id = b.id AND b.grup_id='$key->id' AND a.user_id = '$id' and parent_id ='0'");

      foreach ($query1->result() as $key1) {
        //######## LEVEL 1
        $checked1 = ($key1->show_menu) ? 'checked' : "";
        if ($key1->is_parent && $key1->url == '#') {
          $id1 =   json_encode(array("id" => $id, "menu_id" => $key1->id));
          $html .= "<li class='has-dropdown'><a href='javascript:void(0)'><input type='checkbox' class='messageCheckbox' name='check_" . $key1->id . "' onClick='checked_menu($id1)' $checked1> " . ucwords(strtolower($key1->title)) . "</a>";
          $html .= '<ul class="dropdown">';

          //##########  LEVEL 2 #########
          $query2 = $this->ci->db->query("SELECT * FROM user_dyn_menu a,dyn_menu b WHERE a.id = b.id AND a.user_id='$id' AND b.parent_id='$key1->id' ");
          foreach ($query2->result() as $key2) {
            $checked2 = ($key2->show_menu) ? 'checked' : "";
            if ($key2->is_parent) {
              $id2 =   json_encode(array("id" => $id, "menu_id" => $key2->id));
              $html .= "<li class='has-dropdown'><a href='javascript:void(0)'><input type='checkbox' class='messageCheckbox' name='check_" . $key2->id . "' onClick='checked_menu($id2)' $checked2> " . ucwords(strtolower($key2->title)) . "</a>";
              $html .= '<ul class="dropdown">';

              //##########  LEVEL 3 #########
              $query3 = $this->ci->db->query("SELECT * FROM user_dyn_menu a,dyn_menu b WHERE a.id = b.id AND a.user_id='$id' AND b.parent_id='$key2->id' ");
              foreach ($query3->result() as $key3) {
                $id3 =   json_encode(array("id" => $id, "menu_id" => $key3->id));
                $checked3 = ($key3->show_menu) ? 'checked' : "";
                if ($key1->is_parent && $key1->url == '###') {
                  $html .= "<li class='has-dropdown'><a href='javascript:void(0)'><input type='checkbox' class='messageCheckbox' name='check_" . $key3->id . "' onClick='checked_menu($id3)' $checked3> " . ucwords(strtolower($key3->title)) . "</a>";
                } else {
                  $html .= "<li><a href='javascript:void(0)'><input type='checkbox' class='messageCheckbox' name='check_" . $key3->id . "' onClick='checked_menu($id3)' $checked3> " . ucwords(strtolower($key3->title)) . "</a></li>";
                }
              }

              $html .= '</ul>';
              $html .= '</li>';
              //##########  end LEVEL 3 #########

            } else {
              $id2 =   json_encode(array("id" => $id, "menu_id" => $key2->id));
              $html .= "<li><a href='javascript:void(0)'><input type='checkbox' class='messageCheckbox' name='check_" . $key2->id . "' onClick='checked_menu($id2)' $checked2> " . ucwords(strtolower($key2->title)) . "</a></li>";
            }
          }

          $html .= '</ul>';
          $html .= '</li>';
          //########## END LEVEL 2 #########

        } else {
          $id1 =   json_encode(array("id" => $id, "menu_id" => $key1->id));
          $html .= "<li><a href='javascript:void(0)'><input type='checkbox' class='messageCheckbox' name='check_" . $key1->id . "' onClick='checked_menu($id1)' $checked1> " . ucwords(strtolower($key1->title)) . "</a></li>";
        }
      }
      $html .= '</ul>';
      $html .= '</li>';
    }
    $html .= '</ul>';
    $html .= '<ul class="right">
          <li>
            <a href="#"><b>' . $nama . '</b></a>
            <ul class="dropdown">';

    $html .= '
            </ul>
          </li>
        </ul>
      </section>';
    $html .= '</nav>';
    // loop through and build all the child submenus.


    return $html;
  }


  /**
   * get_childs($menu, $parent_id) - SEE Above Method.
   *
   * Description:
   *
   * Builds all child submenus using a recurse method call.
   *
   * @param    mixed    $id
   * @param    string   $id usuario
   * @return   mixed    $html_out if has subcats else FALSE
   */
}
 
// ------------------------------------------------------------------------
// End of Dynamic_menu Library Class.
// ------------------------------------------------------------------------
/* End of file Dynamic_menu.php */
/* Location: ../application/libraries/Dynamic_menu.php */
