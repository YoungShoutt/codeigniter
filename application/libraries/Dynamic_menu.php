<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Dynmic_menu.php
 */
class Dynamic_menu
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
    $count_notif = $this->ci->db->query("	SELECT count(DISTINCT(c.no_transaction)) as numrows
    FROM
      user a 
      JOIN t_empl b ON b.nik = a.id_kary
      JOIN user_dyn_menu d ON d.user_id = a.user_id and d.show_menu='1'
      JOIN t_reminder c ON d.id = c.target_reminder 
    -- WHERE
  WHERE
    a.user_id = '$id' 
    AND c.STATUS = '0'  ");
    $b = $count_notif->row();
    if($b){
      $c = $b->numrows;
    }else{
      $c="0";
    }
    $html = '<nav class="top-bar" data-options="is_hover:false">
                  <ul class="title-area">
                    <!-- Title Area -->
                    <li class="name">
                      <h1>
                        <a href=' . base_url("index.php/welcome/home") . '>
                        Simple CI Versi 1.0
                        </a>
                      </h1>
                    </li>
                    <li class="toggle-topbar menu-icon"><a href="#">Menu</a></li>
                  </ul> 
                  <section class="top-bar-section">
                    <!-- Right Nav Section -->
                    <ul class="left">
                      <li class="divider"></li>
                      <li><a style="background-color: red; color:yellow; border-radius: 80px;" id="reminder_cek">'. $c .'</a></li>
                      <li class="divider"></li>
                      <li><a href=' . base_url("index.php/welcome/home") . '>HOME</a></li>
                      ';
    
    // $html ='<li class="divider"></li>
    // <li><a href=' . base_url("index.php/welcome/home") . '>HOME</a></li>';
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
    $query = $this->ci->db->query("SELECT a.title,a.id,b.show_menu 
      FROM dyn_groups a,user_dyn_menu b where a.id=b.id AND b.show_menu = '1' 
      AND b.user_id='$id' ORDER BY urut ASC");
    foreach ($query->result() as $key) {
      $html .= '<li class="has-dropdown"><a href="javascript:void(0)">' . ucwords(($key->title)) . '</a> ';
      $html .= '<ul class="dropdown">';
      $query1 = $this->ci->db->query("SELECT * FROM user_dyn_menu a,dyn_menu b WHERE a.id = b.id AND b.grup_id='$key->id' AND show_menu = '1' AND a.user_id = '$id' and parent_id ='0' ORDER BY urut ASC");

      foreach ($query1->result() as $key1) {
        //######## LEVEL 1
        if ($key1->is_parent) {
          $html .= '<li class="has-dropdown"><a href="javascript:void(0)">' . ucwords(strtolower($key1->title)) . '</a>';
          $html .= '<ul class="dropdown">';

          //##########  LEVEL 2 #########
          $query2 = $this->ci->db->query("SELECT * FROM user_dyn_menu a,dyn_menu b WHERE a.id = b.id AND a.user_id='$id' AND a.show_menu='1' AND b.parent_id='$key1->id' ORDER BY urut ASC ");
          foreach ($query2->result() as $key2) {
            //######## LEVEL 1
            if ($key2->is_parent) {
              $html .= '<li class="has-dropdown"><a href="javascript:void(0)">' . ucwords(strtolower($key2->title)) . '</a>';
              $html .= '<ul class="dropdown">';

              //##########  LEVEL 3 #########
              $query3 = $this->ci->db->query("SELECT * FROM user_dyn_menu a,dyn_menu b WHERE a.id = b.id AND a.user_id='$id' AND a.show_menu='1' AND b.parent_id='$key2->id' ORDER BY urut ASC");
              foreach ($query3->result() as $key3) {
                //######## LEVEL 1
                if ($key3->is_parent) {
                  $html .= '<li class="has-dropdown"><a href="javascript:void(0)">' . ucwords(strtolower($key3->title)) . '</a>';
                } else {
                  $html .= "<li>" . anchor("" . $key3->module_name . "", "" . ucwords(strtolower($key3->title)) . "") . "</li>";
                }
              }

              $html .= '</ul>';
              $html .= '</li>';
              //##########  end LEVEL 3 #########

            } else {
              $html .= "<li>" . anchor("" . $key2->module_name . "", "" . ucwords(strtolower($key2->title)) . "") . "</li>";
            }
          }

          $html .= '</ul>';
          $html .= '</li>';
          //########## END LEVEL 2 #########

        } else {
          $html .= "<li>" . anchor("" . $key1->module_name . "", "" . ucwords(strtolower($key1->title)) . "") . "</li>";
        }
      }
      $html .= '</ul>';
      $html .= '</li>';
    }
  //   $count_notif = $this->ci->db->query("SELECT
  //   COUNT(distinct(a.no_transaction)) AS numrows 
  // FROM
  //   t_reminder a
  //    join t_empl b on b.jabatan = a.target_reminder
  //    join user c on b.nik = c.id_kary
  //    where c.user_id = '$id' 	AND a.status ='0'  ");
  //     $b = $count_notif->row();
  //     $c = $b->numrows;
      
    $html .= '</ul>';
    $html .= '<ul class="right">
          <li class="has-dropdown">
            <a href="#">Welcome,<b>' . $nama . '&nbsp;</b>  </span></a>
            <ul class="dropdown">';

    if ($id == 1 ) {
      $html .= '<li><a href=' . base_url("index.php/admin/admin_new") . '>Admin</a></li>
              <li><a href=' . base_url("index.php/admin/add_form") . '>Add form</a></li>
              <li><a href=' . base_url("index.php/provinsi/mst_provinsi") . '>Add Provinsi</a></li>
              <li><a href=' . base_url("index.php/kabupaten/mst_kabupaten") . '>Add Kota/Kabupaten</a></li>
              <li><a href=' . base_url("index.php/kecamatan/mst_kecamatan") . '>Add Kecamatan</a></li>
              <li><a href=' . base_url("index.php/desa/mst_desa") . '>Add Desa</a></li>
              <li><a href=' . base_url("index.php/rtrw/mst_rtrw") . '>Add RT/RW</a></li>
              <li><a href=' . base_url("index.php/admin/log_aktivitas") . '>Log Activity</a></li>';
    }
    $html .= '<li><a href=' . base_url("index.php/admin/GantiPassword") . '>Change Password</a></li>
              <li><a onclick="voluntaryLogoutAll()" href="javascript:void(0)">Log Out</a></li>
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
