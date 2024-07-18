<?php
class mst_kecamatan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('isLogin') == FALSE) {
			redirect('index.php/login/login/login_form');
		} else {
			$this->load->model('login/m_login');
		}
		$this->load->model('m_mst_kecamatan');
	}

	function index()
	{
		$data['level'] = $this->session->userdata('level');
		$data['pengguna'] = $this->m_login->dataPengguna($this->session->userdata('username'));
		$this->load->view('head_dynamic', $data);
		$this->load->view('mst_kecamatan_view', $data);
	}

	function cek_kode()
	{
		$kode_kecamatan = $this->input->post('kode_kecamatan');
		$this->m_mst_kecamatan->cek_kode($kode_kecamatan);
	}

	function entry_data()
	{
		$select_pd_provinsi     = $this->input->post('select_pd_provinsi') ? $this->input->post('select_pd_provinsi') : '';
		$select_pd_kabupaten     = $this->input->post('select_pd_kabupaten') ? $this->input->post('select_pd_kabupaten') : '';
		$kode_kecamatan		= $this->input->post('kode_kecamatan') ? $this->input->post('kode_kecamatan') : '';
		$nama_kecamatan		= $this->input->post('nama_kecamatan') ? $this->input->post('nama_kecamatan') : '';

		$username		= $this->session->userdata('username');
		$flagdeleted	= '0';
		$lastupdate		= date('Y-m-d H:i:s');
		$ipaddress		= $this->input->ip_address();
		$data = array(
			'kdprov'	=> $select_pd_provinsi,
			'kdkab'		=> $select_pd_kabupaten,
			'kdkec'		=> $kode_kecamatan,
			'nmkec'		=> $nama_kecamatan,

			'lastupdate'	=> $lastupdate,
			'username'		=> $username,
			'flagdeleted'	=> $flagdeleted,
			'ipaddress'		=> $ipaddress
		);
		$this->m_mst_kecamatan->entry_data($data, $kode_kecamatan);
	}

	function grid_view()
	{
		$search_kode_kecamatan	= empty($_GET['search_kode_kecamatan']) ? "" : $_GET['search_kode_kecamatan'];
		$page		= $_GET['page']; // get the requested page 
		$limit		= $_GET['rows']; // get how many rows we want to have into the grid 
		$sidx		= $_GET['sidx']; // get index row - i.e. user click to sort 
		$sord		= $_GET['sord']; // get the direction
		if (!$sidx) $sidx = 1;
		$data	= $this->m_mst_kecamatan->record_grid_view_count($search_kode_kecamatan);
		$a 		= $data->row();
		$count 	= $a->a;
		$count > 0 ? $total_pages = ceil($count / $limit) : $total_pages = 0;
		if ($page > $total_pages) $page = $total_pages;
		$start 	= $limit * $page - $limit;
		if ($start < 0) $start = 0;

		$select				= $this->m_mst_kecamatan->record_grid_view_data($start, $limit, $sidx, $sord, $search_kode_kecamatan);
		$responce			= new stdClass();
		$responce->page		= $page;
		$responce->total	= $total_pages;
		$responce->records	= $count;
		$i = 0;
		foreach ($select as $line) {
			$responce->rows[$i]['kdkec'] = $line->kdkec;
			$responce->rows[$i]['cell'] = array(
				$line->kdprov,
				$line->kdkab,
				$line->kdkec,
				$line->nmkec,
			);
			$i++;
		}
		echo json_encode($responce);
	}

	function edit()
	{
		$oper 					= $this->input->post('oper');
		$select_pd_provinsi		= $this->input->post('kdprov') ? $this->input->post('kdprov') : '';
		$select_pd_kabupaten	= $this->input->post('kdkab') ? $this->input->post('kdkab') : '';
		$kode_kecamatan			= $this->input->post('kdkec') ? $this->input->post('kdkec') : '';
		$nama_kecamatan			= $this->input->post('nama') ? $this->input->post('nmkec') : '';

		$username		= $this->session->userdata('username');
		$lastupdate		= date('Y-m-d H:i:s');
		$ipaddress		= $this->input->ip_address();

		if ($oper == "edit") {
			$data = array(
				'kdprov'	=> $select_pd_provinsi,
				'kdkab'		=> $select_pd_kabupaten,
				'kdkec'		=> $kode_kecamatan,
				'nmkec'		=> $nama_kecamatan,

				'lastupdate'	=> $lastupdate,
				'username'		=> $username,
				'flagdeleted'	=> '0',
				'ipaddress'		=> $ipaddress
			);
		} else if ($oper == "del") {
			$data = array(
				'lastupdate'	=> $lastupdate,
				'username'		=> $username,
				'flagdeleted'	=> '1',
				'ipaddress'		=> $ipaddress
			);
		}
		$this->m_mst_kecamatan->edit($data, $kode_kecamatan);
	}

	function find_pd_provinsi()
	{
		$search         = $this->input->get('search');
		$page           = $this->input->get('page');
		$data_select    = $this->m_mst_kecamatan->find_pd_provinsi_data($search, $page);
		$data_count     = $this->m_mst_kecamatan->find_pd_provinsi_count($search);
		$format_data    = array(
			"results"             => $data_select->result(),
			"count_filtered"     => $data_count->num_rows()
		);
		echo json_encode($format_data);
	}
	function find_pd_provinsi_detail()
	{
		$select_pd_provinsi    = $this->input->post('select_pd_provinsi');
		$data1            = $this->m_mst_kecamatan->find_pd_provinsi_detail($select_pd_provinsi);
		// $data				= array();
		if ($data1->num_rows() > 0) {
			foreach ($data1->result_array() as $row) {
				$data[] = $row;
			}
		}
		echo json_encode($data);
	}


	function find_pd_kabupaten_by_prov_data()
	{
		$select   		= $this->input->post('select_pd_provinsi');
		$search         = $this->input->get('search');
		$page           = $this->input->get('page');
		$data_select    = $this->m_mst_kecamatan->find_pd_kabupaten_by_prov_data($select, $search, $page);
		$data_count     = $this->m_mst_kecamatan->find_pd_kabupaten_count($select, $search);
		$format_data    = array(
			"results"            => $data_select->result(),
			"count_filtered"     => $data_count->num_rows()
		);

		echo json_encode($format_data);
	}

	function find_pd_kabupaten_detail()
	{
		$select_pd_kabupaten    = $this->input->post('select_pd_kabupaten');
		$data1            = $this->m_mst_kecamatan->find_pd_kabupaten_detail($select_pd_kabupaten);
		// $data				= array();
		if ($data1->num_rows() > 0) {
			foreach ($data1->result_array() as $row) {
				$data[] = $row;
			}
		}
		echo json_encode($data);
	}
}
