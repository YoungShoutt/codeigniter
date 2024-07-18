<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class GantiPassword extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_GantiPassword');
        $this->load->helper('url');
        if ($this->session->userdata('isLogin') == FALSE) {
            redirect('index.php/login/login/login_form');
        } else {
            $this->load->model('login/m_login');
            //$user = $this->session->userdata('username');
        }
    }
    public function index()
    {
        $data['level'] = $this->session->userdata('level');
        $data['pengguna'] = $this->m_login->dataPengguna($this->session->userdata('username'));
        $data['username'] = $this->session->userdata('username');
        $this->load->view('head_dynamic', $data);
        $this->load->view('GantiPassword_view', $data);
    }
    function newpass()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $new_password = $this->input->post('new_password');
        $pass = md5($password);
        $new_pass = md5($new_password);
        // print_r($pass);
        $data = array(
            'username' => $username,
            'password' => $pass,
            'new_pass' => $new_pass
        );
        $this->M_GantiPassword->ganti_pass($data);
    }
}
