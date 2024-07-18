<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_log_aktivitas extends CI_Model
{
    function m_grid_count($table)
    {
        $result = $this->db->query("SELECT count(*) as a from log_activity 
		left join user on user.username=log_activity.username
        left join t_empl on t_empl.nik=user.id_kary 
        where (log_activity.datetime like '%%' AND log_activity.log_activity like '%%')
         AND t_empl.nama like '%%'
        ");
        return $result;
    }
    function m_grid_select($start, $limit, $sidx, $sord,  $searchcode, $s_activity, $s_username)
    {
        $result = $this->db->query("SELECT log_activity.*,t_empl.nik,t_empl.nama,user.id_kary 
        from log_activity 
		left join user on user.username=log_activity.username
		left join t_empl on t_empl.nik=user.id_kary
        where (log_activity.datetime like '%$searchcode%' AND log_activity.log_activity like '%$s_activity%')
         AND t_empl.nama like '%$s_username%' 
        ORDER BY $sidx $sord LIMIT $start,$limit ");
        return $result;
    }

    public function m_find_select($search, $page, $table, $field1, $field2)
    {
        $limit = 10;
        $start = ($page > 1) ? ($page * $limit) - $limit : 0;
        $query = $this->db->query("SELECT user.username as id,concat(user.username,' - ',nama) as text 
        FROM user 
        join t_empl on user.id_kary =t_empl.nik
        where ((user.username LIKE '%$search%' OR concat(user.username,' - ',nama) LIKE '%$search%')) ORDER BY user.username 
        ASC LIMIT $start,$limit ");
        return $query;
    }
    public function m_find_count($search, $table, $field1, $field2)
    {
        $query = $this->db->query("SELECT user.username as id,concat(user.username,' - ',nama) as text 
        FROM user 
        join t_empl on user.id_kary =t_empl.nik
        where ((user.username LIKE '%$search%' OR concat(user.username,' - ',nama) LIKE '%$search%'))");
        return $query;
    }
    function get($field,$tabel,$value)
    {
        $query = $this->db->query("SELECT * 
        from $tabel 
        where $field ='$value'");
        return $query;
    }
    function get_nama($user)
    {
        $query = $this->db->query("SELECT * 
        from user
        join t_empl on user.id_kary=t_empl.nik 
        join t_dept on t_empl.kddept=t_dept.kddept 
        where user.username='$user'");
        return $query;
    }
    function log_a($user)
    {
        $query = $this->db->query("SELECT * 
        from   log_activity
              where username='$user'");
        return $query;
    }
}
