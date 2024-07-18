<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Log_aktivitas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_log_aktivitas');
        $this->load->helper('url');
        if ($this->session->userdata('isLogin') == FALSE) {
            redirect('index.php/login/login/login_form');
        } else {
            $this->load->model('login/m_login');
            //$user = $this->session->userdata('username');
        }
        $this->load->helper('pdf_log');
    }
    public function index()
    {
        $data['title'] = "Log Activity";

        $data['level'] = $this->session->userdata('level');
        $data['pengguna'] = $this->m_login->dataPengguna($this->session->userdata('username'));
        $this->load->view('head_dynamic', $data);
        $this->load->view('log_aktivitas_view', $data);
    }
    public function gridlog()
    {
        $searchcode = $this->input->get('search_code') ?  $this->input->get('search_code') : '';
        $s_activity = $this->input->get('s_activity') ?  $this->input->get('s_activity') : '';
        $s_username = $this->input->get('s_username') ?  $this->input->get('s_username') : '';
        $page = $_GET['page']; // get the requested page 
        $limit = $_GET['rows']; // get how many rows we want to have into the grid 
        $sidx = $_GET['sidx']; // get index row - i.e. user click to sort 
        $sord = $_GET['sord']; // get the direction
        if (!$sidx) $sidx = 1;
        $table = "log_activity";
        $data = $this->m_log_aktivitas->m_grid_count($table);
        $countrow =  $this->db->query("SELECT 
        count(*) as a
        from log_activity 
		left join user on user.username=log_activity.username
		left join t_empl on t_empl.nik=user.id_kary
        where (log_activity.datetime like '%$searchcode%' AND log_activity.log_activity like '%$s_activity%')
         AND t_empl.nama like '%$s_username%' ");
        $a = $countrow->row();
        $count = $a->a;
        $count > 0 ? $total_pages = ceil($count / $limit) : $total_pages = 0;
        if ($page > $total_pages) $page = $total_pages;
        $start = $limit * $page - $limit;
        if ($start < 0) $start = 0;

        $select = $this->m_log_aktivitas->m_grid_select($start, $limit, $sidx, $sord, $searchcode, $s_activity, $s_username);
        $responce = new stdClass();
        $responce->page = $page;
        $responce->total = $total_pages;
        $responce->records = $count;
        $i = 0;
        foreach ($select->result() as $a) {
            $responce->rows[$i]['user_id'] = $i;
            $responce->rows[$i]['cell'] = array(
                $a->id,
                $a->username,
                $a->nama,
                $a->type,
                $a->log_activity,
                $a->datetime,
                $a->ipaddress,
            );
            $i++;
        }
        echo json_encode($responce);
    }
    function find()
    {
        $search = $this->input->get('search');
        $page = $this->input->get('page');
        $table = $this->input->get('table');
        $field1 = $this->input->get('field1');
        $field2 = $this->input->get('field2');
        $data_select     = $this->m_log_aktivitas->m_find_select($search, $page, $table, $field1, $field2);
        $data_count     = $this->m_log_aktivitas->m_find_count($search, $table, $field1, $field2);
        $format_data = array(
            "results" => $data_select->result(),
            "count_filtered" => $data_count->num_rows()
        );
        echo json_encode($format_data);
    }
    public function export()
    {
        $user    = $this->input->get('user') ? $this->input->get('user') : '';
        $date_from    = $this->input->get('date_from') ? $this->input->get('date_from') : '';
        $date_to    = $this->input->get('date_to') ? $this->input->get('date_to') : '';
        $tanggal_from = SUBSTR($date_from, 8, 2);
        $tanggal_to = SUBSTR($date_to, 8, 2);
        $bulan_from = SUBSTR($date_from, 5, 2);
        $bulan_to = SUBSTR($date_to, 5, 2);
        $tahun_from = SUBSTR($date_from, 0, 4);
        $tahun_to = SUBSTR($date_to, 0, 4);

        if($bulan_from =='01' )
        {
            $bulan1 = "Januari";
        }
        else if ($bulan_from =='02' ) {
            $bulan1 = "Februari";
        }
        else if ($bulan_from =='03' ) {
            $bulan1 = "Maret";
        }
        else if ($bulan_from =='04' ) {
            $bulan1 = "April";
        }
        else if ($bulan_from =='05' ) {
            $bulan1 = "Mei";
        }
        else if ($bulan_from =='06' ) {
            $bulan1 = "Juni";
        }
        else if ($bulan_from =='07' ) {
            $bulan1 = "Juli";
        }
        else if ($bulan_from =='08' ) {
            $bulan1 = "Agustus";
        }
        else if ($bulan_from =='09' ) {
            $bulan1 = "September";
        }
        else if ($bulan_from =='10' ) {
            $bulan1 = "Oktober";
        }
        else if ($bulan_from =='11' ) {
            $bulan1 = "Nopember";
        }
        else if ($bulan_from =='12' ) {
            $bulan1 = "Desember";
        }
        if($bulan_to =='01' )
        {
            $bulan2 = "Januari";
        }
        else if ($bulan_to =='02' ) {
            $bulan2 = "Februari";
        }
        else if ($bulan_to =='03' ) {
            $bulan2 = "Maret";
        }
        else if ($bulan_to =='04' ) {
            $bulan2 = "April";
        }
        else if ($bulan_to =='05' ) {
            $bulan2 = "Mei";
        }
        else if ($bulan_to =='06' ) {
            $bulan2 = "Juni";
        }
        else if ($bulan_to =='07' ) {
            $bulan2 = "Juli";
        }
        else if ($bulan_to =='08' ) {
            $bulan2 = "Agustus";
        }
        else if ($bulan_to =='09' ) {
            $bulan2 = "September";
        }
        else if ($bulan_to =='10' ) {
            $bulan2 = "Oktober";
        }
        else if ($bulan_to =='11' ) {
            $bulan2 = "Nopember";
        }
        else if ($bulan_to =='12' ) {
            $bulan2 = "Desember";
        }
        $pdf = new pdf_log('P', 'mm', 'A4');
        $pdf->AddPage();

        $pdf->SetFont('Times', 'B', 11);
        $pdf->SetTextColor(0, 0, 0);
        $pdf->setXY(15, 28);
        $pdf->Cell(15, 7,  "Progress Entry Data", 0, 1,  'L', false);
        $pdf->SetFont('Times', '', 9);
        $pdf->setXY(15, 35);
        $pdf->Cell(15, 5,  "Date From    : " , 0, 0,  'L', false);
        $pdf->setXY(35, 35);
        $pdf->Cell(35, 5, $tanggal_from." ". $bulan1 . " ". $tahun_from , 0, 1,  'L', false);
        $pdf->setXY(15, 40);
        $pdf->Cell(15, 5,  "Date To        : " , 0, 0,  'L', false);
        $pdf->setXY(35, 40);
        $pdf->Cell(35, 5, $tanggal_to." ". $bulan2 . " ". $tahun_to , 0, 1,  'L', false);
        $pdf->setXY(15, 45);
        $pdf->Cell(15, 5,  "Username     : " , 0, 0,  'L', false);
        $pdf->setXY(35, 45);
        $pdf->Cell(35, 5, $user , 0, 1,  'L', false);
        $pdf->setXY(15, 50);
        $pdf->Cell(15, 5,  "Name            : " , 0, 0,  'L', false);
        $pdf->setXY(35, 50);
        $name = $this->m_log_aktivitas->get_nama($user);
        foreach ($name->result() as $name) {
            $pdf->Cell(35, 5, $name->nama , 0, 1,  'L', false);
        
        $pdf->setXY(15, 55);
        $pdf->Cell(15, 5,  "Departement : " , 0, 0,  'L', false);
        $pdf->setXY(35, 55);
        // foreach ($name->result() as $name) {
            $pdf->Cell(35, 5, $name->nmdept , 0, 1,  'L', false);
        // }
        }

        $pdf->setXY(10, 60);
        $pdf->Cell(7, 5, 'No', 1, 0, 'L', FALSE);
        $pdf->setXY(17, 60);
        $pdf->Cell(20, 5, 'Username', 1, 0, 'L', FALSE);
        $pdf->setXY(37, 60);
        $pdf->Cell(25, 5, 'Type', 1, 0, 'L', FALSE);
        $pdf->setXY(62, 60);
        $pdf->Cell(92, 5, 'Activity', 1, 0, 'L', FALSE);
        $pdf->setXY(154, 60);
        $pdf->Cell(46, 5, 'Date', 1, 1, 'L', FALSE);
        $no = 1;
        $pdf->SetWidths(array(7, 20, 25, 92, 46));
        $log_ac = $this->m_log_aktivitas->log_a($user);
        foreach ($log_ac->result() as $b) {
           $pdf->setX(10);
           $pdf->Row(array($no, $b->username, $b->type,$b->log_activity, $b->datetime ));
           $no++;
        }


        // =======================================================================================
        $pdf->output('I', 'Report Log.pdf');
    }
}
