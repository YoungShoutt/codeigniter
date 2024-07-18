<?php
class mst_provinsi extends CI_Controller {
	function __construct() {
		parent::__construct();
		if ($this->session->userdata('isLogin') == FALSE) {
			redirect('index.php/login/login/login_form');
		} else {
			$this->load->model('login/m_login');
		}
		$this->load->model('m_mst_provinsi');
	}

	function index() {
		$data['level'] = $this->session->userdata('level');
		$data['pengguna'] = $this->m_login->dataPengguna($this->session->userdata('username'));
		$this->load->view('head_dynamic', $data);
		$this->load->view('mst_provinsi_view', $data);
	}

	function cek_kode(){
		$kode_provinsi = $this->input->post('kode_provinsi');
		$this->m_mst_provinsi->cek_kode($kode_provinsi);
	}

	function entry_data() {
		$kode_provinsi		= $this->input->post('kode_provinsi')? $this->input->post('kode_provinsi'):'';
		$nama_provinsi		= $this->input->post('nama_provinsi')? $this->input->post('nama_provinsi'):'';
		
		$username		= $this->session->userdata('username');
		$flagdeleted	= '0';
		$lastupdate		= date('Y-m-d H:i:s');
		$ipaddress		= $this->input->ip_address();
		$data = array(
			'kdprov'		=> $kode_provinsi,
			'nmprov'		=> $nama_provinsi,
			
			'lastupdate'	=> $lastupdate,
			'username'		=> $username,
			'flagdeleted'	=> $flagdeleted,
			'ipaddress'		=> $ipaddress
		);
		$this->m_mst_provinsi->entry_data($data, $kode_provinsi);
	}

	function grid_view() {
		$search_kode_provinsi	= empty($_GET['search_kode_provinsi']) ? "" : $_GET['search_kode_provinsi'];
		$page		= $_GET['page']; // get the requested page 
		$limit	= $_GET['rows']; // get how many rows we want to have into the grid 
		$sidx		= $_GET['sidx']; // get index row - i.e. user click to sort 
		$sord		= $_GET['sord']; // get the direction
		if (!$sidx) $sidx = 1;
		$data	= $this->m_mst_provinsi->record_grid_view_count($search_kode_provinsi);
		$a 		= $data->row();
		$count 	= $a->a;
			$count > 0 ? $total_pages = ceil($count / $limit) : $total_pages = 0;
				if ($page > $total_pages) $page = $total_pages;
					$start 	= $limit * $page - $limit;
				if ($start < 0) $start = 0;

		$select				= $this->m_mst_provinsi->record_grid_view_data($start, $limit, $sidx, $sord, $search_kode_provinsi);
		$responce			= new stdClass();
		$responce->page	= $page;
		$responce->total	= $total_pages;
		$responce->records= $count;
		$i = 0;
		foreach ($select as $line) {
			$responce->rows[$i]['kdprov'] = $line->kdprov;
			$responce->rows[$i]['cell'] = array(
				$line->kdprov,
				$line->nmprov,
			);
			$i++;
		}
		echo json_encode($responce);
	}
	
	function edit() {
		$oper 				= $this->input->post('oper'); 
		$kode_provinsi		= $this->input->post('kdprov')? $this->input->post('kdprov'):'';
		$nama_provinsi		= $this->input->post('nama')? $this->input->post('nmprov'):'';

		$username		= $this->session->userdata('username');
		$lastupdate		= date('Y-m-d H:i:s');
		$ipaddress		= $this->input->ip_address();
		
		if($oper == "edit") {
			$data = array(
				'nmprov'		=> $nama_provinsi,

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
		$this->m_mst_provinsi->edit($data, $kode_provinsi);
	}
}