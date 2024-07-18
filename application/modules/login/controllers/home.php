<?php if(!defined('BASEPATH')) exit('Hacking Attempt. Keluar dari sistem.');

class Home extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    
     $this->load->library(array('session'));
     
     $this->load->helper('url');
     
     $this->load->model('m_login');
    
     $this->load->database();
     
  }
  
  
  public function index()
  {
    if($this->session->userdata('isLogin') == FALSE)
    {
      redirect('login/login_form');
    }else 
    {
    
      $this->load->model('m_login');
      
      $user             = $this->session->userdata('username');
      $data['level']    = $this->session->userdata('level');        
      $data['pengguna'] = $this->m_login->dataPengguna($user);
      
      $this->load->view('home_v', $data);
    }
  } 

  function update_list(){
    $username = $this->session->userdata('username');
    $url = $this->input->post('url');
   //$this->m_login->m_update_list($username,$url);
  }

  function user_active(){
  // $data['user'] = $this->m_login->m_user_active();
   //$data['user1'] = $this->m_login->m_user_activity();
  // $data['rec'] = $this->m_login->m_user_rec();
  // $data['dept_rec'] = $this->m_login->m_user_rec1();
   //$this->load->view('user_active_tbl_view',$data);
  }

  function user_activity(){
   $data['user'] = $this->m_login->m_user_activity();
   $this->load->view('user_active_tbl_view1',$data);
  }

  function user_active1(){
   //$this->load->view('headtable');
   //$this->load->view('user_active_view');
  }

  function get_notif(){
        
        $user = $this->input->post('username');
        $dept = $this->get_dept($user);
        $memo_in_notif = $this->db->query("SELECT a.*,b.base_name FROM t_memo a,base b WHERE (a.memo_tindakan=0 OR a.memo_tindakan IS NULL) AND b.base_no=a.memo_user_pengadu AND memo_dept_dituju='$dept'");
        $data = array(
                      'notif' => $memo_in_notif->num_rows(),
                      'isi'   => $memo_in_notif->result()
                      );
        echo json_encode($data);
  }
  function get_notif_balas(){
        
        $memo_id = $this->input->post('memo_id');
        $memo_in_notif = $this->db->query("SELECT
                                            memo_user_pengadu,
                                            memo_user_dituju,
                                            base_name,
                                            memo_isi,
                                            memo_isi_tindakan,memo_tanggal,memo_jam,memo_tindakan_datetime
                                          FROM
                                            t_memo,base
                                          WHERE
                                            memo_id = '$memo_id'
                                          AND memo_user_dituju=base_no");
        $data = array(
                      'notif' => $memo_in_notif->num_rows(),
                      'isi'   => $memo_in_notif->result()
                      );
        echo json_encode($data);
  }

  function get_dept($user){
    $que = $this->db->query("SELECT base_dept FROM base WHERE base_no='$user' AND base_out_date='0000-00-00'")->row();
    return $que->base_dept;
  }

}
?>