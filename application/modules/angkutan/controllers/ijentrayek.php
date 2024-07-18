<?php
class ijentrayek extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('isLogin') == FALSE) {
            redirect('index.php/login/login/login_form');
        } else {
            $this->load->model('login/m_login');
        }
        $this->load->model('m_ijentrayek');
    }

    function index()
    {
        $data['level'] = $this->session->userdata('level');
        $data['pengguna'] = $this->m_login->dataPengguna($this->session->userdata('username'));
        $this->load->view('head_dynamic', $data);
        $this->load->view('ijentrayek_view', $data);
    }

    function autonumber_kode()
	{
		$tgl = $this->input->post('data');
		$bulan = SUBSTR($tgl, 4, 2);
		$tahun = SUBSTR($tgl, 0, 4);
		$query = $this->db->query("SELECT COUNT(*) AS num_rows FROM ang_dataijintrayek WHERE tgl = '$tgl' ")->result();
		echo json_encode($query);
	}


    // function cek_kode()
    // {
    //     $kode_nip = $this->input->post('kode_nip');
    //     $this->m_ijentrayek->cek_kode($kode_nip);
    // }

    function entry_data()
    {
        $kode_tanggal           = $this->input->post('kode_tanggal') ? $this->input->post('kode_tanggal') : '';
        $noijin_trayek          = $this->input->post('noijin_trayek') ? $this->input->post('noijin_trayek') : '';
        $kode_diberikan         = $this->input->post('kode_diberikan') ? $this->input->post('kode_diberikan') : '';
        $kode_alamat            = $this->input->post('kode_alamat') ? $this->input->post('kode_alamat') : '';
        $select_no_kend         = $this->input->post('select_no_kend') ? $this->input->post('select_no_kend') : '';
        $kode_daya              = $this->input->post('kode_daya') ? $this->input->post('kode_daya') : '';
        $select_pd_trayek       = $this->input->post('select_pd_trayek') ? $this->input->post('select_pd_trayek') : '';
        $trayek_read            = $this->input->post('trayek_read') ? $this->input->post('trayek_read') : '';
        $rutelintas_read        = $this->input->post('rutelintas_read') ? $this->input->post('rutelintas_read') : '';
        $rutelintas_kembali_read    = $this->input->post('rutelintas_kembali_read') ? $this->input->post('rutelintas_kembali_read') : '';
        $kode_tanggal_mulai     = $this->input->post('kode_tanggal_mulai') ? $this->input->post('kode_tanggal_mulai') : '';
        $kode_tanggal_akhir     = $this->input->post('kode_tanggal_akhir') ? $this->input->post('kode_tanggal_akhir') : '';

        $username        = $this->session->userdata('username');
        $flagdeleted     = '0';
        $lastupdate      = date('Y-m-d H:i:s');
        $ipaddress       = $this->input->ip_address();
        $data = array(
            'tgl'               => $kode_tanggal,
            'no_ijin_trayek'    => $noijin_trayek,
            'di_berikan'        => $kode_diberikan,
            'alamat'            => $kode_alamat,
            'no_kendaraan'      => $select_no_kend,
            'daya_angkut'       => $kode_daya,
            'kd_trayek'         => $select_pd_trayek,
            'trayek'            => $trayek_read,
            'rute_berangkat'    => $rutelintas_read,
            'rute_kembali'      => $rutelintas_kembali_read,
            'tgl_mulai_berlaku' => $kode_tanggal_mulai,
            'sampat_tgl'        => $kode_tanggal_akhir,

            'lastupdate'       => $lastupdate,
            'username'         => $username,
            'flagdeleted'      => $flagdeleted,
            'ipaddress'        => $ipaddress
        );
        $this->m_ijentrayek->entry_data($data, $noijin_trayek);
    }

    function grid_view()
    {
        $search_noijin_trayek    = empty($_GET['search_noijin_trayek']) ? "" : $_GET['search_noijin_trayek'];
        $page        = $_GET['page']; // get the requested page 
        $limit       = $_GET['rows']; // get how many rows we want to have into the grid 
        $sidx        = $_GET['sidx']; // get index row - i.e. user click to sort 
        $sord        = $_GET['sord']; // get the direction
        if (!$sidx) $sidx = 1;
        $data    = $this->m_ijentrayek->record_grid_view_count($search_noijin_trayek);
        $a         = $data->row();
        $count     = $a->a;
        $count > 0 ? $total_pages = ceil($count / $limit) : $total_pages = 0;
        if ($page > $total_pages) $page = $total_pages;
        $start     = $limit * $page - $limit;
        if ($start < 0) $start = 0;

        $select              = $this->m_ijentrayek->record_grid_view_data($start, $limit, $sidx, $sord, $search_noijin_trayek);
        $responce            = new stdClass();
        $responce->page      = $page;
        $responce->total     = $total_pages;
        $responce->records   = $count;
        $i = 0;
        foreach ($select as $line) {
            $responce->rows[$i]['lastupdate'] = $line->lastupdate;
            $responce->rows[$i]['cell'] = array(
                $line->lastupdate,
                $line->tgl,
                $line->no_ijin_trayek,
                $line->di_berikan,
                $line->alamat,
                $line->no_kendaraan,
                $line->no_uji,
                $line->merk_kendaraan,
                $line->thn_pembuatan,
                $line->no_mesin,
                $line->no_rangka,
                $line->daya_angkut,
                $line->kd_trayek,
                $line->trayek,
                $line->rute_berangkat,
                $line->rute_kembali,
                $line->tgl_mulai_berlaku,
                $line->sampat_tgl,
            );
            $i++;
        }
        echo json_encode($responce);
    }

    function edit()
    {
        $oper                   = $this->input->post('oper');
        $lastupdate_data        = $this->input->post('lastupdate') ? $this->input->post('lastupdate') : '';
        $kode_tanggal           = $this->input->post('kode_tanggal') ? $this->input->post('kode_tanggal') : '';
        $noijin_trayek          = $this->input->post('noijin_trayek') ? $this->input->post('noijin_trayek') : '';
        $kode_diberikan         = $this->input->post('kode_diberikan') ? $this->input->post('kode_diberikan') : '';
        $kode_alamat            = $this->input->post('kode_alamat') ? $this->input->post('kode_alamat') : '';
        $select_no_kend         = $this->input->post('select_no_kend') ? $this->input->post('select_no_kend') : '';
        $kode_daya              = $this->input->post('kode_daya') ? $this->input->post('kode_daya') : '';
        $select_pd_trayek       = $this->input->post('select_pd_trayek') ? $this->input->post('select_pd_trayek') : '';
        $trayek_read            = $this->input->post('trayek_read') ? $this->input->post('trayek_read') : '';
        $rutelintas_read        = $this->input->post('rutelintas_read') ? $this->input->post('rutelintas_read') : '';
        $rutelintas_kembali_read    = $this->input->post('rutelintas_kembali_read') ? $this->input->post('rutelintas_kembali_read') : '';
        $kode_tanggal_mulai     = $this->input->post('kode_tanggal_mulai') ? $this->input->post('kode_tanggal_mulai') : '';
        $kode_tanggal_akhir     = $this->input->post('kode_tanggal_akhir') ? $this->input->post('kode_tanggal_akhir') : '';

        $username         = $this->session->userdata('username');
        $lastupdate       = date('Y-m-d H:i:s');
        $ipaddress        = $this->input->ip_address();

        if ($oper == "edit") {
            $data = array(
                'tgl'               => $kode_tanggal,
                'no_ijin_trayek'    => $noijin_trayek,
                'di_berikan'        => $kode_diberikan,
                'alamat'            => $kode_alamat,
                'no_kendaraan'      => $select_no_kend,
                'daya_angkut'       => $kode_daya,
                'kd_trayek'         => $select_pd_trayek,
                'trayek'            => $trayek_read,
                'rute_berangkat'    => $rutelintas_read,
                'rute_kembali'      => $rutelintas_kembali_read,
                'tgl_mulai_berlaku' => $kode_tanggal_mulai,
                'sampat_tgl'        => $kode_tanggal_akhir,

                'lastupdate'      => $lastupdate,
                'username'        => $username,
                'flagdeleted'     => '0',
                'ipaddress'       => $ipaddress
            );
        } else if ($oper == "del") {
            $data = array(
                'lastupdate'    => $lastupdate,
                'username'      => $username,
                'flagdeleted'   => '1',
                'ipaddress'     => $ipaddress
            );
        }
        $this->m_ijentrayek->edit($data, $noijin_trayek, $lastupdate_data);
    }

    function find_no_kend()
    {
        $search            = $this->input->get('search');
        $page            = $this->input->get('page');
        $data_select    = $this->m_ijentrayek->find_no_kend_data($search, $page);
        $data_count        = $this->m_ijentrayek->find_no_kend_count($search);
        $format_data    = array(
            "results"             => $data_select->result(),
            "count_filtered"     => $data_count->num_rows()
        );
        echo json_encode($format_data);
    }
    function find_no_kend_detail()
    {
        $select_no_kend    = $this->input->post('select_no_kend');
        $data1            = $this->m_ijentrayek->find_no_kend_detail($select_no_kend);
        // $data				= array();
        if ($data1->num_rows() > 0) {
            foreach ($data1->result_array() as $row) {
                $data[] = $row;
            }
        }
        echo json_encode($data);
    }

    function find_pd_trayek()
    {
        $search            = $this->input->get('search');
        $page            = $this->input->get('page');
        $data_select    = $this->m_ijentrayek->find_pd_trayek_data($search, $page);
        $data_count        = $this->m_ijentrayek->find_pd_trayek_count($search);
        $format_data    = array(
            "results"             => $data_select->result(),
            "count_filtered"     => $data_count->num_rows()
        );
        echo json_encode($format_data);
    }
    function find_pd_trayek_detail()
    {
        $select_pd_trayek    = $this->input->post('select_pd_trayek');
        $data1            = $this->m_ijentrayek->find_pd_trayek_detail($select_pd_trayek);
        // $data				= array();
        if ($data1->num_rows() > 0) {
            foreach ($data1->result_array() as $row) {
                $data[] = $row;
            }
        }
        echo json_encode($data);
    }
}
