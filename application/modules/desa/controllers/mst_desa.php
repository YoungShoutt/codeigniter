<?php
class mst_desa extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('isLogin') == FALSE) {
			redirect('index.php/login/login/login_form');
		} else {
			$this->load->model('login/m_login');
		}
		$this->load->model('m_mst_desa');
	}

	function index()
	{
		$data['level'] = $this->session->userdata('level');
		$data['pengguna'] = $this->m_login->dataPengguna($this->session->userdata('username'));
		$this->load->view('head_dynamic', $data);
		$this->load->view('mst_desa_view', $data);
	}

	function cek_kode()
	{
		$kode_desa = $this->input->post('kode_desa');
		$this->m_mst_desa->cek_kode($kode_desa);
	}

	function entry_data()
	{
		$select_pd_provinsi     = $this->input->post('select_pd_provinsi') ? $this->input->post('select_pd_provinsi') : '';
		$select_pd_kabupaten     = $this->input->post('select_pd_kabupaten') ? $this->input->post('select_pd_kabupaten') : '';
		$select_pd_kecamatan     = $this->input->post('select_pd_kecamatan') ? $this->input->post('select_pd_kecamatan') : '';
		$kode_desa		= $this->input->post('kode_desa') ? $this->input->post('kode_desa') : '';
		$nama_desa		= $this->input->post('nama_desa') ? $this->input->post('nama_desa') : '';

		$username		= $this->session->userdata('username');
		$flagdeleted	= '0';
		$lastupdate		= date('Y-m-d H:i:s');
		$ipaddress		= $this->input->ip_address();
		$data = array(
			'kdprov'	=> $select_pd_provinsi,
			'kdkab'		=> $select_pd_kabupaten,
			'kdkec'		=> $select_pd_kecamatan,
			'kddes'		=> $kode_desa,
			'nmdes'		=> $nama_desa,

			'lastupdate'	=> $lastupdate,
			'username'		=> $username,
			'flagdeleted'	=> $flagdeleted,
			'ipaddress'		=> $ipaddress
		);
		$this->m_mst_desa->entry_data($data, $kode_desa);
	}

	function grid_view()
	{
		$search_kode_desa	= empty($_GET['search_kode_desa']) ? "" : $_GET['search_kode_desa'];
		$page		= $_GET['page']; // get the requested page 
		$limit		= $_GET['rows']; // get how many rows we want to have into the grid 
		$sidx		= $_GET['sidx']; // get index row - i.e. user click to sort 
		$sord		= $_GET['sord']; // get the direction
		if (!$sidx) $sidx = 1;
		$data	= $this->m_mst_desa->record_grid_view_count($search_kode_desa);
		$a 		= $data->row();
		$count 	= $a->a;
		$count > 0 ? $total_pages = ceil($count / $limit) : $total_pages = 0;
		if ($page > $total_pages) $page = $total_pages;
		$start 	= $limit * $page - $limit;
		if ($start < 0) $start = 0;

		$select				= $this->m_mst_desa->record_grid_view_data($start, $limit, $sidx, $sord, $search_kode_desa);
		$responce			= new stdClass();
		$responce->page		= $page;
		$responce->total	= $total_pages;
		$responce->records	= $count;
		$i = 0;
		foreach ($select as $line) {
			$responce->rows[$i]['kddes'] = $line->kddes;
			$responce->rows[$i]['cell'] = array(
				$line->kdprov,
				$line->kdkab,
				$line->kdkec,
				$line->kddes,
				$line->nmdes,
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
		$select_pd_kecamatan	= $this->input->post('kdkec') ? $this->input->post('kdkec') : '';
		$kode_desa			= $this->input->post('kddes') ? $this->input->post('kddes') : '';
		$nama_desa			= $this->input->post('nama') ? $this->input->post('nmdes') : '';

		$username		= $this->session->userdata('username');
		$lastupdate		= date('Y-m-d H:i:s');
		$ipaddress		= $this->input->ip_address();

		if ($oper == "edit") {
			$data = array(
				'kdprov'	=> $select_pd_provinsi,
				'kdkab'		=> $select_pd_kabupaten,
				'kdkec'		=> $select_pd_kecamatan,
				'kddes'		=> $kode_desa,
				'nmdes'		=> $nama_desa,

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
		$this->m_mst_desa->edit($data, $kode_desa);
	}

	function find_pd_provinsi()
	{
		$search         = $this->input->get('search');
		$page           = $this->input->get('page');
		$data_select    = $this->m_mst_desa->find_pd_provinsi_data($search, $page);
		$data_count     = $this->m_mst_desa->find_pd_provinsi_count($search);
		$format_data    = array(
			"results"             => $data_select->result(),
			"count_filtered"     => $data_count->num_rows()
		);
		echo json_encode($format_data);
	}
	function find_pd_provinsi_detail()
	{
		$select_pd_provinsi    = $this->input->post('select_pd_provinsi');
		$data1            = $this->m_mst_desa->find_pd_provinsi_detail($select_pd_provinsi);
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
		$data_select    = $this->m_mst_desa->find_pd_kabupaten_by_prov_data($select, $search, $page);
		$data_count     = $this->m_mst_desa->find_pd_kabupaten_count($select, $search);
		$format_data    = array(
			"results"            => $data_select->result(),
			"count_filtered"     => $data_count->num_rows()
		);

		echo json_encode($format_data);
	}
	function find_pd_kabupaten_detail()
	{
		$select_pd_kabupaten    = $this->input->post('select_pd_kabupaten');
		$data1            = $this->m_mst_desa->find_pd_kabupaten_detail($select_pd_kabupaten);
		// $data				= array();
		if ($data1->num_rows() > 0) {
			foreach ($data1->result_array() as $row) {
				$data[] = $row;
			}
		}
		echo json_encode($data);
	}

	function find_pd_kecamatan_by_kab_data()
	{
		$select   		= $this->input->post('select_pd_kabupaten');
		$search         = $this->input->get('search');
		$page           = $this->input->get('page');
		$data_select    = $this->m_mst_desa->find_pd_kecamatan_by_kab_data($select, $search, $page);
		$data_count     = $this->m_mst_desa->find_pd_kabupaten_count($select, $search);
		$format_data    = array(
			"results"            => $data_select->result(),
			"count_filtered"     => $data_count->num_rows()
		);

		echo json_encode($format_data);
	}
	function find_pd_kecamatan_detail()
	{
		$select_pd_kecamatan    = $this->input->post('select_pd_kecamatan');
		$data1            = $this->m_mst_desa->find_pd_kecamatan_detail($select_pd_kecamatan);
		// $data				= array();
		if ($data1->num_rows() > 0) {
			foreach ($data1->result_array() as $row) {
				$data[] = $row;
			}
		}
		echo json_encode($data);
	}
	
}
