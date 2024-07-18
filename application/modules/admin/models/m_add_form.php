<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_add_form extends CI_Model
{
    public function m_find_select($search, $page, $table, $field1, $field2)
    {
        $limit = 10;
        $start = ($page > 1) ? ($page * $limit) - $limit : 0;
        $query = $this->db->query("SELECT $field1 as id,$field2 as text FROM $table where (($field1 LIKE '%$search%' OR $field2 LIKE '%$search%')) ORDER BY $field1 ASC LIMIT $start,$limit ");
        return $query;
    }
    public function m_find_count($search, $table, $field1, $field2)
    {
        $query = $this->db->query("SELECT $field1 as id,$field2 as text FROM $table where (($field1 LIKE '%$search%' OR $field2 LIKE '%$search%'))");
        return $query;
    }
    function proses_count($searchString)
    {
        $result = $this->db->query("SELECT count(*) as a FROM dyn_menu WHERE parent_id='0'  AND grup_id='$searchString'  ");
        return $result;
    }
    function proses_count2($title)
    {
        $result = $this->db->query("SELECT count(*) as a FROM dyn_menu WHERE  title like '%$title%'  ");
        return $result;
    }

    function proses_data($searchString, $start, $limit, $sidx, $sord)
    {
        $result = $this->db->query("SELECT * FROM dyn_menu WHERE  parent_id='0'  AND grup_id='$searchString'  ORDER BY $sidx $sord LIMIT $start, $limit")->result();
        return $result;
    }
    function proses_data2($searchString, $title, $start, $limit, $sidx, $sord)
    {
        $result = $this->db->query("SELECT * FROM dyn_menu WHERE  title like '%$title%' ORDER BY $sidx $sord LIMIT $start, $limit")->result();
        return $result;
    }
    function parent_count($searchString)
    {
        $result = $this->db->query("SELECT count(*) as a FROM dyn_menu WHERE parent_id='$searchString'   ");
        return $result;
    }

    function parent_data($searchString, $start, $limit, $sidx, $sord)
    {
        $result = $this->db->query("SELECT * FROM dyn_menu WHERE parent_id='$searchString'    ORDER BY $sidx $sord LIMIT $start, $limit")->result();
        return $result;
    }
    function simpan($data)
    {
        $id                 = $data['id'];
        $urut               = $data['urut'];
        $grup_id            = $data['grup_id'];
        $parent_id          = $data['parent_id'];
        $is_parent          = $data['is_parent'];
        $title              = $data['title'];
        $url                = $data['url'];
        $module_name         = $data['module_name'];
        $sql = $this->db->insert_string('dyn_menu', $data) . " ON DUPLICATE KEY UPDATE 
                                            id 		    = '$id',
                                            urut        = '$urut',
                                            grup_id     = '$grup_id',
                                            parent_id   = '$parent_id',
                                            is_parent 	= '$is_parent',
                                            title 		= '$title',
                                            url 		= '$url',
                                            module_name = '$module_name'";
        $this->db->query($sql);
        $response = array(
            "status"     => "success"
        );
        echo json_encode($response);
    }
    function edit($data)
    {
        $id                 = $data['id'];
        $this->db->where('id', $id);
        $this->db->update('dyn_menu', $data);
    }
    function m_delete($data)
    {
        $id                 = $data['id'];
        $this->db->where('id', $id);
        $this->db->delete('dyn_menu');
        $response = array(
            "status"     => "success"
        );
        echo json_encode($response);
    }
    function read($id)
    {
        $query = $this->db->query("SELECT * from dyn_menu where id='$id'");
        return $query;
    }
}
