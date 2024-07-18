<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		if($this->session->userdata('isLogin') == FALSE)
			{
			 redirect('index.php/login/login/login_form');
			}else{
			 $this->load->model('login/m_login');
				//$user = $this->session->userdata('username');
			}

	}

	public function index()
	{
		/**/
            $user = $this->session->userdata('username');
            
         $data['pengguna'] = $this->m_login->dataPengguna($user);
			

        	$data['pageTitle'] = 'HOME || PARASAYU SPA';
			$this->load->view('head_dynamic',$data);
			$this->load->view('home',$data);
	}


    function base($field,$no_kar){
        $que = $this->db->query("SELECT $field as a from base WHERE base_no='$no_kar'")->row();
        return $que->a;
    }
	function get_reminder()
	{
		$user = $this->session->userdata('username');
		$data1 = $this->db->query("SELECT
		COUNT(
		DISTINCT ( c.no_transaction )) AS numrows ,type_transaction
	  FROM
	  user a
	  JOIN t_empl b ON b.nik = a.id_kary
	  JOIN t_reminder c ON b.jabatan = c.target_reminder
	  
	  WHERE
		a.username = '$user' 
		AND c.STATUS = '0' GROUP BY c.type_transaction");
	   $data = array();
	   if ($data1->num_rows() > 0) {
		  foreach ($data1->result_array() as $row) {
			 $data[] = $row;
		  }
	   }
	   echo json_encode($data);
	}


}
