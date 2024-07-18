<?php if (!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class Login extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_login');
    //$this->load->library(array('form_validation','session'));
    $this->load->database();
    $data['pageTitle'] = 'LOGIN || Codeigniter';
    $this->load->view('headlogin', $data);
  }


  public function index()
  {
    $session = $this->session->userdata('isLogin', TRUE);

    if ($session == FALSE) {
      redirect('index.php/login/login/login_form');
    } else {
      redirect('index.php/welcome/home');
    }
  }


  public function login_form()
  {
    $this->form_validation->set_rules('username', 'Username', 'required|trim');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
    $this->form_validation->set_error_delimiters('<span style="color:red;" class="error">', '</span>');

    if ($this->form_validation->run() == FALSE) {
      //$this->load->view('form_login');
      $session = $this->session->userdata('isLogin');

      if ($session == FALSE) {
        $this->load->view('form_login');
      } else {
        redirect('index.php/welcome/home');
      }
    } else {
      $username  = $this->input->post('username');
      $password  = $this->input->post('password');
      if (empty($password)) {
        $tes = $this->db->query("SELECT * FROM user WHERE username='$username'");
        if ($tes->num_rows() > 0) {
          $x = $tes->row();
          if ($x->password == "") {
            redirect("login/ubah/" . $username);
          } else {
            echo " <script>
                    alert('Gagal Login: Cek username dan Password Anda ....');
                    history.go(-1);
                  </script>";
          }
        }
      } else {
        $cek       = $this->m_login->ambilPengguna($username, $password);

        if ($cek <> 0) {
          $this->session->set_userdata('isLogin', TRUE);
          $this->session->set_userdata('username', $username);
          /* 
              Start
              Helper Untuk menyimpan Log 
              log_activity(username,type,desc);
          */
          log_activity($username, 'Login', 'User Telah Login');
          /*
              End Helper
          */
          $data = array("last_login" => date('Y-m-d H:i:s'), "status" => "Online");
          $this->db->where('username', $username);
          $this->db->update('user', $data);
          redirect('index.php/welcome/home');
          //$this->db->query("UPDATE user SET status=1 where username='$username'");
        } else {
          echo " <script>
		            alert('Gagal Login: Cek username , password anda!');
		            history.go(-1);
		          </script>";
        }
      }
    }
  }


  public function ubah()
  {
    $var = $this->uri->segment(3);
    $this->load->view('ubah_pass');
  }

  public function change()
  {
    $user   = $this->input->post('user');
    $pass1  = $this->input->post('pass1');
    //$pass2  = $this->input->post('pass2');
    $this->m_login->changes($user, $pass1);
    //redirect('index.php');
    echo " <script>
                alert('Silakan login menggunakan password baru anda');
                window.location.replace(http://stackoverflow.com);
              </script>";
    redirect('login');
  }


  public function logout()
  {
    $username = $this->session->userdata('username');
    $data = array(
      "last_logout" => date('Y-m-d H:i:s'),
      "status" => "Offline"
    );
    log_activity($username, 'Logout', 'User Telah Logout');
    $this->db->where('username', $username);
    $this->db->update('user', $data);
    $this->session->sess_destroy();
    header("Cache-Control: no-cache, must-revalidate");
    header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    redirect("");
  }
}
