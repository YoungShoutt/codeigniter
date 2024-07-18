<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_new extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin_new');
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
		$per_page = 10;

		$this->load->library('pagination');
		$this->load->library('table');

		$page = ($this->uri->segment(4, 0) === FALSE) ? 0 : $this->uri->segment(4, 0);
		//echo $page;
		// ==== TABLE USER ===
		$template = array(
			'table_open'            => '<table border="1" cellpadding="4" cellspacing="0">',

			'thead_open'            => '<thead>',
			'thead_close'           => '</thead>',

			'heading_row_start'     => '<tr>',
			'heading_row_end'       => '</tr>',
			'heading_cell_start'    => '<th>',
			'heading_cell_end'      => '</th>',

			'tbody_open'            => '<tbody>',
			'tbody_close'           => '</tbody>',

			'row_start'             => '<tr>',
			'row_end'               => '</tr>',
			'cell_start'            => '<td>',
			'cell_end'              => '</td>',

			'row_alt_start'         => '<tr>',
			'row_alt_end'           => '</tr>',
			'cell_alt_start'        => '<td>',
			'cell_alt_end'          => '</td>',

			'table_close'           => '</table>'
		);

		$this->table->set_template($template);
		$this->table->set_heading('NIK', 'MENU ID', 'USERNAME', 'PASSWORD', '', '');
		$total_rows = $this->m_admin_new->count_user();
		$datauser = $this->m_admin_new->load_user($page, $per_page);
		$atts = array(
			'width'      => '1500',
			'height'     => '600',
			'scrollbars' => 'yes',
			'status'     => 'yes',
			'resizable'  => 'no',
			'screenx'    => '0',
			'screeny'    => '0',
			'class' 	   => 'bts bts-rounded bts-flat-primary'
		);
		foreach ($datauser->result() as $key) {
			$this->table->add_row(array($key->id_kary, $key->user_id, $key->username, $key->password, anchor_popup("index.php/admin/admin_new/menu?id=" . $key->user_id . "&nama=" . $key->username, "User Menu", $atts), anchor("index.php/admin/admin_new/delete_username?id=" . $key->user_id . "&nama=" . $key->username, "Delete", $atts)));
		}


		$data['daftar_user'] =   $this->table->generate();
		// ==== END TABLE USER ===

		// ==== PAGINATION ===
		$config['base_url'] = base_url('index.php/admin/admin_new/index');
		$config['total_rows'] = $total_rows->num_rows();
		$config['per_page'] = $per_page;
		$this->pagination->initialize($config);
		$data['pagination'] = $this->pagination->create_links();
		// ==== END PAGINATION ===

		$this->load->view('head_dynamic', $data);
		$this->load->view('admin_new', $data);
	}

	function menu()
	{
		$id = $this->input->get('id');
		$nama = $this->input->get('nama');
		$this->m_admin_new->populate_menu($id);
		$data = array('id' => $id, 'nama' => $nama);
		$this->load->view('headcss');
		$this->load->view('form_create', $data);
	}

	function simpan()
	{
		$user_id = $this->input->post('user_id');
		$menu_id = $this->input->post('menu_id');
		$value 	= $this->input->post('value');
		$this->m_admin_new->m_simpan($user_id, $menu_id, $value);
	}
	function tambah_user()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$nik = $this->input->post('nik');
		$pass = md5($password);
		// print_r($pass);
		$data = array(
			'username' => $username,
			'password' => $pass,
			'id_kary' => $nik
		);
		$this->m_admin_new->tambah_user($data);
	}
	function get_user()
	{
		$nik = $this->input->post('nik');
		$username = $this->input->post('username');
		$this->m_admin_new->get_user($nik, $username);
	}
	function getnik()
	{
		$nik = $this->input->post('nik');
		$username = $this->input->post('username');
		$this->m_admin_new->get_user($nik, $username);
	}
	function get_nik()
	{
		$nik = $this->input->post('nik');
		$data1 = $this->m_admin_new->get_nik($nik);
		$data = array();
		if ($data1->num_rows() > 0) {
			foreach ($data1->result_array() as $row) {
				$data[] = $row;
			}
		}
		echo json_encode($data);
	}
	function delete_username()
	{
		$id = $this->input->get('id');
		$nama = $this->input->get('nama');
		$this->m_admin_new->delete_username($id, $nama);
		redirect(base_url('index.php/admin/admin_new/index'));
	}
	function delete()
	{
		$id = $this->input->post('id');
		$this->m_admin_new->delete_username($id);
		redirect(base_url('index.php/admin/admin_new/index'));
	}
	function griduser()
	{
		$searchcode = $this->input->get('searchcode') ?  $this->input->get('searchcode') : '';
		$page = $_GET['page']; // get the requested page 
		$limit = $_GET['rows']; // get how many rows we want to have into the grid 
		$sidx = $_GET['sidx']; // get index row - i.e. user click to sort 
		$sord = $_GET['sord']; // get the direction
		if (!$sidx) $sidx = 1;
		$table = "user";
		$data = $this->m_admin_new->m_grid_count($table);
		$a = $data->row();
		$count = $a->a;
		$count > 0 ? $total_pages = ceil($count / $limit) : $total_pages = 0;
		if ($page > $total_pages) $page = $total_pages;
		$start = $limit * $page - $limit;
		if ($start < 0) $start = 0;

		$select = $this->m_admin_new->m_grid_select($start, $limit, $sidx, $sord, $searchcode);
		$responce = new stdClass();
		$responce->page = $page;
		$responce->total = $total_pages;
		$responce->records = $count;
		$i = 0;
		foreach ($select->result() as $a) {
			$responce->rows[$i]['user_id'] = $i;
			$responce->rows[$i]['cell'] = array(
				$a->nik,
				$a->user_id,
				$a->username,
				$a->password,
				$a->status,
				$a->last_login,
				$a->last_logout,
			);
			$i++;
		}
		echo json_encode($responce);
	}
}

/* End of file admin.php */
/* Location: ./application/modules/admin/controllers/admin.php */
