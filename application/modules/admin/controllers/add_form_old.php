<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Add_form extends CI_Controller
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
        $sql = $this->db->query("SELECT * FROM dyn_groups ");
        $data['title'] = $sql->result();

        $data['level'] = $this->session->userdata('level');
        $data['pengguna'] = $this->m_login->dataPengguna($this->session->userdata('username'));
        $this->load->view('head_dynamic', $data);
        $this->load->view('akses_data', $data);
    }
    function grid()
    {
        $page  = $this->input->get('page');
        $limit = $this->input->get('rows');
        $sidx  = $this->input->get('sidx');
        $sord  = $this->input->get('sord');

        if (!$sidx) $sidx = 1;

        # Untuk Single Searchingnya #
        $title = empty($_GET['title']) ? "" : $_GET['title']; //if there is no search request sent by jqgrid, $where should be empty
        $searchField = isset($_GET['searchField']) ? $_GET['searchField'] : false;
        $searchString = isset($_GET['searchString']) ? $_GET['searchString'] : false;
        if ($_GET['_search'] == 'true') {
            $where = array($searchField => $searchString);
        }

        $data = $this->m_admin_new->recCount(); // 
        $a = $data->row();
        $count = $a->a;
        $count > 0 ? $total_pages = ceil($count / $limit) : $total_pages = 0;
        if ($page > $total_pages) $page = $total_pages;
        $start = $limit * $page - $limit;
        if ($start < 0) $start = 0;
        $sql = $this->db->query("SELECT * FROM dyn_menu a WHERE grup_id like '%" . $searchString . "%' AND title like '%" . $title . "%'  ORDER BY $sidx $sord LIMIT $start, $limit");
        $data1 = $sql->result();
        $responce = new stdClass();
        $responce->page = $page;
        $responce->total = $total_pages;
        $responce->records = $count;
        $i = 0;
        foreach ($data1 as $line) {
            $sql = $this->db->query("SELECT * FROM dyn_groups WHERE urut like '$line->grup_id' ");
            $data4 = $sql->result();
            foreach ($data4 as $line4) {
                $grup = $line4->title;
            }
            $responce->rows[$i]['id']   = $line->id;
            switch ($line->is_parent) {
                case 1:
                    $parr = "YES";
                    break;
                case 0:
                    $parr = "NO";
                    break;
            }
            $responce->rows[$i]['cell'] = array(
                $line->id,
                $line->urut,
                $grup,
                $line->parent_id,
                $parr,
                $line->title,
                $line->module_name
            );


            $i++;
        }
        echo json_encode($responce);
    }
    function grid2()
    {
        $page  = $this->input->get('page');
        $limit = $this->input->get('rows');
        $sidx  = $this->input->get('sidx');
        $sord  = $this->input->get('sord');

        if (!$sidx) $sidx = 1;

        # Untuk Single Searchingnya #
        $parent_ = empty($_GET['parent']) ? "" : $_GET['parent']; //if there is no search request sent by jqgrid, $where should be empty
        $parent_id = empty($_GET['parent_id']) ? "" : $_GET['parent_id']; //if there is no search request sent by jqgrid, $where should be empty
        $searchField = isset($_GET['searchField']) ? $_GET['searchField'] : false;
        $searchString = isset($_GET['searchString']) ? $_GET['searchString'] : false;
        if ($_GET['_search'] == 'true') {
            $where = array($searchField => $searchString);
        }

        $data = $this->m_admin_new->recCount(); // 
        $a = $data->row();
        $count = $a->a;
        $count > 0 ? $total_pages = ceil($count / $limit) : $total_pages = 0;
        if ($page > $total_pages) $page = $total_pages;
        $start = $limit * $page - $limit;
        if ($start < 0) $start = 0;
        $sql = $this->db->query("SELECT * FROM dyn_menu a WHERE grup_id like '%" . $searchString . "%' AND title like '%" . $parent_ . "%' AND id like '%" . $parent_id . "%' ORDER BY $sidx $sord LIMIT $start, $limit");
        $data1 = $sql->result();
        $responce = new stdClass();
        $responce->page = $page;
        $responce->total = $total_pages;
        $responce->records = $count;
        $i = 0;
        foreach ($data1 as $line) {
            $sql = $this->db->query("SELECT * FROM dyn_groups WHERE urut like '$line->grup_id' ");
            $data4 = $sql->result();
            foreach ($data4 as $line4) {
                $grup = $line4->title;
            }
            $responce->rows[$i]['id']   = $line->id;
            switch ($line->is_parent) {
                case 1:
                    $parr = "YES";
                    break;
                case 0:
                    $parr = "NO";
                    break;
            }
            $responce->rows[$i]['cell'] = array(
                $line->id,
                $line->urut,
                $grup,
                $line->parent_id,
                $parr,
                $line->title,
                $line->module_name
            );


            $i++;
        }
        echo json_encode($responce);
    }
    function grid3()
    {
        $page  = $this->input->get('page');
        $limit = $this->input->get('rows');
        $sidx  = $this->input->get('sidx');
        $sord  = $this->input->get('sord');

        if (!$sidx) $sidx = 1;

        # Untuk Single Searchingnya #
        $parent_ = empty($_GET['parent_id']) ? "0" : $_GET['parent_id']; //if there is no search request sent by jqgrid, $where should be empty
        $searchField = isset($_GET['searchField']) ? $_GET['searchField'] : false;
        $searchString = isset($_GET['searchString']) ? $_GET['searchString'] : false;
        if ($_GET['_search'] == 'true') {
            $where = array($searchField => $searchString);
        }

        $data = $this->m_admin_new->recCount(); // 
        $a = $data->row();
        $count = $a->a;
        $count > 0 ? $total_pages = ceil($count / $limit) : $total_pages = 0;
        if ($page > $total_pages) $page = $total_pages;
        $start = $limit * $page - $limit;
        if ($start < 0) $start = 0;
        $sql = $this->db->query("SELECT * FROM dyn_menu  WHERE  parent_id LIKE '%$parent_%' ORDER BY $sidx $sord LIMIT $start, $limit");
        $data1 = $sql->result();
        $responce = new stdClass();
        $responce->page = $page;
        $responce->total = $total_pages;
        $responce->records = $count;
        $i = 0;
        foreach ($data1 as $line) {
            $sql = $this->db->query("SELECT * FROM dyn_groups WHERE urut like '$line->grup_id' ");
            $data4 = $sql->result();
            foreach ($data4 as $line4) {
                $grup = $line4->title;

                $responce->rows[$i]['id']   = $line->id;
                switch ($line->is_parent) {
                    case 1:
                        $parr = "YES";
                        break;
                    case 0:
                        $parr = "NO";
                        break;
                }
                $responce->rows[$i]['cell'] = array(
                    $line->id,
                    $line->urut,
                    $grup,
                    $line->parent_id,
                    $parr,
                    $line->title,
                    $line->module_name
                );
            }

            $i++;
        }
        echo json_encode($responce);
    }
    function grid4()
    {
        $page  = $this->input->get('page');
        $limit = $this->input->get('rows');
        $sidx  = $this->input->get('sidx');
        $sord  = $this->input->get('sord');

        if (!$sidx) $sidx = 1;

        # Untuk Single Searchingnya #
        $parent_ = empty($_GET['id']) ? "" : $_GET['id']; //if there is no search request sent by jqgrid, $where should be empty
        $searchField = isset($_GET['searchField']) ? $_GET['searchField'] : false;
        $searchString = isset($_GET['searchString']) ? $_GET['searchString'] : false;
        if ($_GET['_search'] == 'true') {
            $where = array($searchField => $searchString);
        }

        $data = $this->m_admin_new->recCount(); // 
        $a = $data->row();
        $count = $a->a;
        $count > 0 ? $total_pages = ceil($count / $limit) : $total_pages = 0;
        if ($page > $total_pages) $page = $total_pages;
        $start = $limit * $page - $limit;
        if ($start < 0) $start = 0;
        $sql = $this->db->query("SELECT * FROM dyn_menu a WHERE  parent_id like '%" . $parent_ . "%' ORDER BY id $sord LIMIT $start, $limit");
        $data1 = $sql->result();
        $responce = new stdClass();
        $responce->page = $page;
        $responce->total = $total_pages;
        $responce->records = $count;
        $i = 0;
        foreach ($data1 as $line) {
            $sql = $this->db->query("SELECT * FROM dyn_groups WHERE urut like '$line->grup_id' ");
            $data4 = $sql->result();
            foreach ($data4 as $line4) {
                $grup = $line4->title;

                $responce->rows[$i]['id']   = $line->id;
                switch ($line->is_parent) {
                    case 1:
                        $parr = "YES";
                        break;
                    case 0:
                        $parr = "NO";
                        break;
                }
                $responce->rows[$i]['cell'] = array(
                    $line->id,
                    $line->urut,
                    $grup,
                    $line->parent_id,
                    $line->is_parent,
                    $line->title,
                    $line->module_name
                );
            }

            $i++;
        }
        echo json_encode($responce);
    }
    function edit()
    {
        $oper = $this->input->post('oper');
        print_r($oper);
        if ($oper == 'del') {
            $id = $this->input->post('id');
            $this->m_admin_new->m_delete($id);
        } else if ($oper == 'add') {
            $id = $this->input->post('id');
            $urut = $this->input->post('urut');
            $grup_id = $this->input->post('grup_id');
            $parent_id = $this->input->post('parent_id');
            $is_parent = $this->input->post('is_parent');
            $title = $this->input->post('title');
            $module_name = $this->input->post('module_name');
            $data = array(
                'id' => $id,
                'urut' => $urut,
                'grup_id' => $grup_id,
                'parent_id' => $parent_id,
                'is_parent' => $is_parent,
                'title' => $title,
                'module_name' => $module_name
            );
            print_r($parent_id);
            $this->m_admin_new->tambah_form($data);
        } else if ($oper == 'edit') {
            $id = $this->input->post('id');
            $urut = $this->input->post('urut');
            $grup_id = $this->input->post('grup_id');
            $parent_id = $this->input->post('parent_id');
            $is_parent = $this->input->post('is_parent');
            $title = $this->input->post('title');
            $url = $this->input->post('url');
            $module_name = $this->input->post('module_name');
            $data = array(
                'id' => $id,
                'urut' => $urut,
                'grup_id' => $grup_id,
                'parent_id' => $parent_id,
                'is_parent' => $is_parent,
                'title' => $title,
                'module_name' => $module_name
            );
            $this->m_admin_new->edit_form($id, $data);
        }
    }
    function add_form()
    {
        $id = $this->input->post('id');
        $parent_id = $this->input->post('parent_id');
        $grup = $this->input->post('grup');
        $parent = $this->input->post('parent');
        $parent_title = $this->input->post('parent_title');
        $urut = $this->input->post('urut');
        $title = $this->input->post('title');
        $module_name = $this->input->post('module_name');
        $url = "#";
        $data = array(
            'id' => $id,
            'grup_id' => $grup,
            'parent_id' => $parent_id,
            'is_parent' => $parent,
            'urut' => $urut,
            'title' => $title,
            'url' => $url,
            'module_name' => $module_name
        );
        $this->m_admin_new->add_form($data);
        print_r($parent_id);
        print_r($data);
    }
}
