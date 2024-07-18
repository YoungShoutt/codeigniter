<?php
class mst_karyawan extends CI_Controller {
	function __construct() {
		parent::__construct();
		if ($this->session->userdata('isLogin') == FALSE) {
			redirect('index.php/login/login/login_form');
		} else {
			$this->load->model('login/m_login');
		}
		$this->load->model('m_mst_karyawan');
	}

	function index() {
		$data['level'] = $this->session->userdata('level');
		$data['pengguna'] = $this->m_login->dataPengguna($this->session->userdata('username'));
		$this->load->view('head_dynamic', $data);
		$this->load->view('mst_karyawan_view', $data);
	}

	function cek_kode(){
		$kode_karyawan = $this->input->post('kode_karyawan');
		$this->m_mst_karyawan->cek_kode($kode_karyawan);
	}

	function entry_data() {
		$kode_karyawan		= $this->input->post('kode_karyawan')? $this->input->post('kode_karyawan'):'';
		$nama_karyawan		= $this->input->post('nama_karyawan')? $this->input->post('nama_karyawan'):'';
		$posisi_karyawan	= $this->input->post('posisi_karyawan')? $this->input->post('posisi_karyawan'):'';
		
		$username		= $this->session->userdata('username');
		$flagdeleted	= '0';
		$lastupdate		= date('Y-m-d H:i:s');
		$ipaddress		= $this->input->ip_address();
		$data = array(
			'nik'		=> $kode_karyawan,
			'nama'		=> $nama_karyawan,
			'jabatan'		=> $posisi_karyawan,
			
			'lastupdate'	=> $lastupdate,
			'username'		=> $username,
			'flagdeleted'	=> $flagdeleted,
			'ipaddress'		=> $ipaddress
		);
		$this->m_mst_karyawan->entry_data($data, $kode_karyawan);
	}

	function grid_view() {
		$search_kode_karyawan	= empty($_GET['search_kode_karyawan']) ? "" : $_GET['search_kode_karyawan'];
		$page		= $_GET['page']; // get the requested page 
		$limit	= $_GET['rows']; // get how many rows we want to have into the grid 
		$sidx		= $_GET['sidx']; // get index row - i.e. user click to sort 
		$sord		= $_GET['sord']; // get the direction
		if (!$sidx) $sidx = 1;
		$data	= $this->m_mst_karyawan->record_grid_view_count($search_kode_karyawan);
		$a 		= $data->row();
		$count 	= $a->a;
			$count > 0 ? $total_pages = ceil($count / $limit) : $total_pages = 0;
				if ($page > $total_pages) $page = $total_pages;
					$start 	= $limit * $page - $limit;
				if ($start < 0) $start = 0;

		$select				= $this->m_mst_karyawan->record_grid_view_data($start, $limit, $sidx, $sord, $search_kode_karyawan);
		$responce			= new stdClass();
		$responce->page	= $page;
		$responce->total	= $total_pages;
		$responce->records= $count;
		$i = 0;
		foreach ($select as $line) {
			$responce->rows[$i]['nik'] = $line->nik;
			$responce->rows[$i]['cell'] = array(
				$line->nik,
				$line->nama,
				$line->jabatan,
			);
			$i++;
		}
		echo json_encode($responce);
	}
	
	function edit() {
		$oper 				= $this->input->post('oper'); 
		$kode_karyawan		= $this->input->post('nik')? $this->input->post('nik'):'';
		$nama_karyawan		= $this->input->post('nama')? $this->input->post('nama'):'';
		$posisi_karyawan	= $this->input->post('jabatan')? $this->input->post('jabatan'):'';

		$username		= $this->session->userdata('username');
		$lastupdate		= date('Y-m-d H:i:s');
		$ipaddress		= $this->input->ip_address();
		
		if($oper == "edit") {
			$data = array(
				'nama'		=> $nama_karyawan,
				'jabatan'		=> $posisi_karyawan,

				'lastupdate'	=> $lastupdate,
				'username'		=> $username,
				'flagdeleted'	=> '0',
				'ipaddress'		=> $ipaddress
			);
		} else if($oper == "del") {
			$data = array(
				'lastupdate'	=> $lastupdate,
				'username'		=> $username,
				'flagdeleted'	=> '1',
				'ipaddress'		=> $ipaddress
			);
		} 
		$this->m_mst_karyawan->edit($data, $kode_karyawan);
	}
}