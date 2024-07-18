<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Admin_new_cetak extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin_new');
		$this->load->helper('url');
		$this->load->library('Dynamic_menu');
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
		$data1['xxx'] = $this->m_admin_new->load_group();
		$this->load->view('head_dynamic', $data);
		$this->load->view('form_permintaan', $data1);
	}

	function form_pendaftaran()
	{

		$grup = $this->input->get("grup");
		$no_id = $this->input->get("no_id");
		//echo $jenis;
		$this->load->helper('admin/fpdf_pendaftaran');
		$pdf = new fpk('L', 'mm', 'A4');
		$query = $this->db->query("SELECT
										a.id as menu_utama,a.title as nama_menu  ,'' as checklist1,
										b.id as sub_menu_1,b.title as submenu_nama_1,'' as checklist2,
										c.id as sub_menu_2,c.title as submenu_nama_2,'' as checklist3,
										d.id as sub_menu_3,d.title as submenu_nama_3,'' as checklist4
									FROM
										dyn_menu a 
										LEFT JOIN (SELECT * FROM dyn_menu b WHERE b.title!='') AS b ON b.parent_id=a.id
										LEFT JOIN (SELECT * FROM dyn_menu c WHERE c.title!='') AS c ON c.parent_id=b.id
										LEFT JOIN (SELECT * FROM dyn_menu d WHERE d.title!='') AS d ON d.parent_id=c.id
									WHERE
										a.parent_id = '0' and a.grup_id like '$grup%'");



		$pdf->AddPage();

		$pdf->AddFont('times', '', 'times.php');
		$pdf->SetFont('times', '', 8);
		$pdf->SetLineWidth(0.1);
		$i = 1;
		foreach ($query->result() as $key) {
			$cur_menu_utama = $key->nama_menu;
			$cur_submenu_1 	= $key->submenu_nama_1;
			$cur_submenu_2 	= $key->submenu_nama_2;
			$cur_submenu_3 	= $key->submenu_nama_3;
			//#########MENU UTAMA 
			if ($cur_menu_utama && !$prev_menu_utama) {
				$nama_menu 	= $key->nama_menu . '  [  ]';
				$id_menutama = $key->menu_utama . ' - ';
				$pdf->SetFillColor(236, 239, 237);
			} else if ($cur_menu_utama != $prev_menu_utama) {
				$nama_menu = $key->nama_menu . '  [  ]';
				$id_menutama = $key->menu_utama . ' - ';
				$pdf->SetFillColor(236, 239, 237);
			} else {
				$nama_menu = '';
				$id_menutama = "";
				$pdf->SetFillColor(255, 255, 255);
			}
			$cellx3 = $pdf->getX();
			$celly3 = $pdf->getY();
			$pdf->setXY($cellx3, $celly3);
			$pdf->Cell(18, 5, $id_menutama . $nama_menu, 0, 1, 'C', TRUE);
			$pdf->SetFillColor(255, 255, 255);
			//#########SUBMENU 1
			if ($cur_submenu_1 && !$prev_submenu_1) {
				$nama_submenu1 = $key->submenu_nama_1 . '  [  ]';
				$id_submenu1 = $key->sub_menu_1 . ' - ';
				$pdf->SetFillColor(236, 239, 237);
			} else if ($cur_submenu_1 != $prev_submenu_1) {
				$nama_submenu1 = $key->submenu_nama_1 . '  [  ]';
				$id_submenu1 = $key->sub_menu_1 . ' - ';
				$pdf->SetFillColor(236, 239, 237);
			} else {
				$nama_submenu1 = '';
				$id_submenu1 = "";
				$pdf->SetFillColor(255, 255, 255);
			}
			$cellx3 = $pdf->getX();
			$celly3 = $pdf->getY() - 5;
			$pdf->setXY($cellx3 + 30, $celly3);
			$pdf->Cell(50, 5, $id_submenu1 . $nama_submenu1, 0, 1, 'L', TRUE);
			$pdf->SetFillColor(255, 255, 255);

			$prev_menu_utama = $cur_menu_utama;
			$prev_submenu_1 = $cur_submenu_1;
			//#########SUBMENU 2
			if ($cur_submenu_2 && !$prev_submenu_2) {
				$nama_submenu2 = $key->submenu_nama_2 . '  [  ]';
				$id_submenu2 = $key->sub_menu_2 . ' - ';
				$pdf->SetFillColor(236, 239, 237);
			} else if ($cur_submenu_2 != $prev_submenu_2) {
				$nama_submenu2 = $key->submenu_nama_2 . '  [  ]';
				$id_submenu2 = $key->sub_menu_2 . ' - ';
				$pdf->SetFillColor(236, 239, 237);
			} else {
				$nama_submenu2 = '';
				$id_submenu2 = '';
				$pdf->SetFillColor(255, 255, 255);
			}
			$cellx3 = $pdf->getX();
			$celly3 = $pdf->getY() - 5;
			$pdf->setXY($cellx3 + 90, $celly3);
			$pdf->Cell(80, 5, $id_submenu2 . $nama_submenu2, 0, 1, 'L', TRUE);
			$pdf->SetFillColor(255, 255, 255);

			$prev_menu_utama = $cur_menu_utama;
			$prev_submenu_1 = $cur_submenu_1;
			$prev_submenu_2 = $cur_submenu_2;
			//#########SUBMENU 3
			if ($cur_submenu_3 && !$prev_submenu_3) {
				$nama_submenu3 = $key->submenu_nama_3 . '  [  ]';
				$id_submenu3 = $key->sub_menu_3 . ' - ';
				$pdf->SetFillColor(236, 239, 237);
			} else if ($cur_submenu_3 != $prev_submenu_3) {
				$nama_submenu3 = $key->submenu_nama_3 . '  [  ]';
				$id_submenu3 = $key->sub_menu_3 . ' - ';
				$pdf->SetFillColor(236, 239, 237);
			} else {
				$nama_submenu3 = '';
				$id_submenu3 = '';
				$pdf->SetFillColor(255, 255, 255);
			}
			$cellx3 = $pdf->getX();
			$celly3 = $pdf->getY() - 5;
			$pdf->setXY($cellx3 + 185, $celly3);
			$pdf->Cell(80, 5, $id_submenu3 . $nama_submenu3, 0, 1, 'L', TRUE);
			$pdf->SetFillColor(255, 255, 255);

			$prev_menu_utama = $cur_menu_utama;
			$prev_submenu_1 = $cur_submenu_1;
			$prev_submenu_2 = $cur_submenu_2;
			$prev_submenu_3 = $cur_submenu_3;
		}
		$pdf->Output();
	}

	function export()
	{

		$this->load->dbutil();
		header("Content-Type: application/force-download");
		header("Content-Type: application/octet-stream");
		header("Content-Type: application/download");
		header("Content-Disposition: attachment;filename=menu.csv");
		header("Content-Transfer-Encoding: binary");
		$grup = $this->input->get("grup");
		$no_id = $this->input->get("no_id");

		$query = $this->db->query("SELECT
										a.id as menu_utama,a.title as nama_menu  ,'' as checklist1,
										b.id as sub_menu_1,b.title as submenu_nama_1,'' as checklist2,
										c.id as sub_menu_2,c.title as submenu_nama_2,'' as checklist3,
										d.id as sub_menu_3,d.title as submenu_nama_3,'' as checklist4
									FROM
										dyn_menu a 
										LEFT JOIN (SELECT * FROM dyn_menu b WHERE b.title!='') AS b ON b.parent_id=a.id
										LEFT JOIN (SELECT * FROM dyn_menu c WHERE c.title!='') AS c ON c.parent_id=b.id
										LEFT JOIN (SELECT * FROM dyn_menu d WHERE d.title!='') AS d ON d.parent_id=c.id
									WHERE
										a.parent_id = '0' and a.grup_id like '$grup%' ORDER BY a.grup_id,a.id ASC,b.id ASC,c.id ASC,d.id ASC");
		$delimiter = ";";
		$newline = "\r\n";
		$data = $this->dbutil->csv_from_result($query, $delimiter, $newline);
		echo $data;
	}
}

/* End of file admin.php */
/* Location: ./application/modules/admin/controllers/admin.php */
