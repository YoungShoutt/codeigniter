<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Add_form extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_add_form');
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
        $sql = $this->db->query("SELECT * FROM dyn_groups ");
        $data['title'] = $sql->result();

        $data['level'] = $this->session->userdata('level');
        $data['pengguna'] = $this->m_login->dataPengguna($this->session->userdata('username'));
        $this->load->view('head_dynamic', $data);
        $this->load->view('add_form', $data);
    }
    function find()
    {
        $search = $this->input->get('search');
        $page = $this->input->get('page');
        $table = $this->input->get('table');
        $field1 = $this->input->get('field1');
        $field2 = $this->input->get('field2');
        $data_select     = $this->m_add_form->m_find_select($search, $page, $table, $field1, $field2);
        $data_count     = $this->m_add_form->m_find_count($search, $table, $field1, $field2);
        $format_data = array(
            "results" => $data_select->result(),
            "count_filtered" => $data_count->num_rows()
        );
        echo json_encode($format_data);
    }
    function listtree1()
    {

        $page = $_GET['page']; // get the requested page 
        $limit = $_GET['rows']; // get how many rows we want to have into the grid 
        $sidx = $_GET['sidx']; // get index row - i.e. user click to sort 
        $sord = $_GET['sord']; // get the direction
        if (!$sidx) $sidx = 1;

        # Untuk Single Searchingnya #
        //if there is no search request sent by jqgrid, $where should be empty
        $searchString = isset($_GET['search_grup']) ? $_GET['search_grup'] : false;

        $title = $this->input->get('title');
        $data = $this->m_add_form->proses_count($searchString);
        if ($this->input->get('title')) {
            $data = $this->m_add_form->proses_count2($title);
        } else {
            $data = $this->m_add_form->proses_count($searchString);
        }
        $a = $data->row();
        $count = $a->a;
        $count > 0 ? $total_pages = ceil($count / $limit) : $total_pages = 0;
        if ($page > $total_pages) $page = $total_pages;
        $start = $limit * $page - $limit;
        if ($start < 0) $start = 0;
        if ($this->input->get('title')) {
            $select = $this->m_add_form->proses_data2($searchString, $title, $start, $limit, $sidx, $sord);
        } else {
            $select = $this->m_add_form->proses_data($searchString, $start, $limit, $sidx, $sord);
        }
        $responce = new stdClass();
        $responce->page = $page;
        $responce->total = $total_pages;
        $responce->records = $count;
        $i = 0;
        foreach ($select as $a) {
            $responce->rows[$i]['id'] = $a->id;
            $responce->rows[$i]['cell'] = array(
                $a->id,
                $a->urut,
                $a->title,
                $a->module_name,
                $a->is_parent,
            );
            $i++;
        }
        echo json_encode($responce);
    }
    function listtree2()
    {

        $page = $_GET['page']; // get the requested page 
        $limit = $_GET['rows']; // get how many rows we want to have into the grid 
        $sidx = $_GET['sidx']; // get index row - i.e. user click to sort 
        $sord = $_GET['sord']; // get the direction
        if (!$sidx) $sidx = 1;

        # Untuk Single Searchingnya #
        //if there is no search request sent by jqgrid, $where should be empty
        $searchField = isset($_GET['searchField']) ? $_GET['searchField'] : false;
        $searchString = isset($_GET['id']) ? $_GET['id'] : false;
        if ($_GET['_search'] == 'true') {
            $where = array($searchField => $searchString);
        }

        $data = $this->m_add_form->parent_count($searchString);
        $a = $data->row();
        $count = $a->a;
        $count > 0 ? $total_pages = ceil($count / $limit) : $total_pages = 0;
        if ($page > $total_pages) $page = $total_pages;
        $start = $limit * $page - $limit;
        if ($start < 0) $start = 0;

        $select = $this->m_add_form->parent_data($searchString, $start, $limit, $sidx, $sord);
        $responce = new stdClass();
        $responce->page = $page;
        $responce->total = $total_pages;
        $responce->records = $count;
        $i = 0;
        foreach ($select as $a) {
            $responce->rows[$i]['id'] = $a->id;
            $responce->rows[$i]['cell'] = array(
                $a->id,
                $a->urut,
                $a->title,
                $a->module_name,
                $a->is_parent,
            );
            $i++;
        }
        echo json_encode($responce);
    }
    function simpanadd()
    {
        $id                     = $this->input->post('id');
        $sort                   = $this->input->post('sort');
        $parent                 = $this->input->post('parent');
        $title                  = $this->input->post('title');
        $url                    = $this->input->post('url');
        $parent_id              = $this->input->post('parent_id');
        $grup1                  = $this->input->post('grup1');
        $data = array(
            "id"                        => $id,
            "urut"                      => $sort,
            "grup_id"                   => $grup1,
            "parent_id"                 => $parent_id,
            "is_parent"                 => $parent,
            "title"                     => $title,
            "url"                       => '#',
            "module_name"               => $url,
        );
        $this->m_add_form->simpan($data);
    }
    function editlist()
    {
        $id                     = $this->input->post('id');
        $sort                   = $this->input->post('sort');
        $parent                 = $this->input->post('is_parent');
        $title                  = $this->input->post('title');
        $url                    = $this->input->post('url');
        $data = array(
            "id"                        => $id,
            "urut"                      => $sort,
            "is_parent"                 => $parent,
            "title"                     => $title,
            "url"                       => '#',
            "module_name"               => $url,
        );
        $this->m_add_form->edit($data);
    }
    function delete()
    {
        $id                     = $this->input->post('id');
        $data = array(
            "id"                        => $id,
        );
        $this->m_add_form->m_delete($data);
    }
    function read()
    {
        $id = $this->input->post('id');
        $data1 = $this->m_add_form->read($id);
        $data = array();
        if ($data1->num_rows() > 0) {
            foreach ($data1->result_array() as $row) {
                $data[] = $row;
            }
        }
        echo json_encode($data);
    }
    // ----------------------------------------------------
    // '''''''''''''''''''''''''''''''''''''''''''
    // -------------------------------------------------

}
