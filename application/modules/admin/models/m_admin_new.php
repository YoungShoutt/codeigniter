<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_admin_new extends CI_Model
{

	function load_group()
	{
		$query = $this->db->query("SELECT a.id,a.title,b.show_menu FROM dyn_groups a,user_dyn_menu b where a.id=b.id");
		return $query->result();
	}
	function getMenu1($id)
	{
		$query = $this->db->query("SELECT a.*,b.show_menu FROM dyn_menu a,user_dyn_menu b WHERE  a.id=b.id AND a.grup_id='1' and parent_id ='0'");
		return $query;
	}
	function getMenu2($id)
	{
		$query = $this->db->query("SELECT a.*,b.show_menu FROM dyn_menu a,user_dyn_menu b WHERE  a.parent_id='$id' AND a.id=b.id");
		return $query;
	}

	function m_simpan($user_id, $menu_id, $value)
	{
		$this->db->query("UPDATE user_dyn_menu SET show_menu='$value' WHERE user_id='$user_id' AND id='$menu_id'");
	}

	function count_user()
	{
		$query = $this->db->query("SELECT user_id,username,password,id_kary FROM user");
		return $query;
	}

	function load_user($page, $per_page)
	{
		$query = $this->db->query("SELECT user_id,username,password,id_kary FROM user LIMIT $page,$per_page ");
		return $query;
	}

	function populate_menu($id)
	{
		$this->db->query("INSERT INTO user_dyn_menu
							SELECT a.user_id,a.id,a.show_menu FROM (
							SELECT '$id' as user_id,id,'0' as show_menu FROM dyn_groups
							UNION ALL
							SELECT '$id',id,'0' FROM dyn_menu
							) as a WHERE NOT EXISTS(SELECT b.user_id,b.id
												FROM user_dyn_menu b
											WHERE b.id = a.id AND a.user_id=b.user_id)
						");
	}
	function tambah_user($data)
	{
		$this->db->insert('user', $data);
		echo json_encode("succes");
	}
	function get_user($nik, $username)
	{
		$this->db->query("SELECT * FROM user WHERE username='$username' or id_kary='$nik'  ");
		$a = $this->db->query("SELECT COUNT(*) AS num_rows from user WHERE username='$username' or id_kary='$nik' ");
		$b = $a->row();
		$c = $b->num_rows;
		if ($c > 0) {
			$data = array(
				'status' => 'exist'
			);
			echo json_encode($data);
		} else {
		}
	}
	function get_nik($nik)
	{
		$query = $this->db->query("SELECT * from  t_empl where nik='$nik' AND flagdeleted='0'");
		return $query;
	}
	function grid_count()
	{
		$result = $this->db->query("SELECT count(*) as a
		from dyn_menu 
		  ");
		return $result;
	}
	function grid_select()
	{
		$result = $this->db->query("SELECT *
		from dyn_menu 
		  ");
		return $result;
	}
	function recCount()
	{
		$result = $this->db->query("SELECT count(*) as a from dyn_menu");
		return $result;
	}
	function m_delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('dyn_menu');
	}
	function add_form($data)
	{
		$this->db->insert('dyn_menu', $data);
	}
	function edit_form($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('dyn_menu', $data);
	}
	function delete_username($id)
	{
		$this->db->where('user_id', $id);
		$this->db->delete('user');
	}
	function m_grid_count($table)
	{
		$result = $this->db->query("SELECT count(*) as a from $table ");
		return $result;
	}
	function m_grid_select($start, $limit, $sidx, $sord,  $searchcode)
	{
		$result = $this->db->query("SELECT user.*,t_empl.nik from user 
		left join t_empl on user.id_kary=t_empl.nik
		 where user.id_kary like '%$searchcode%' 
     ORDER BY $sidx $sord LIMIT $start,$limit ");
		return $result;
	}
}

/* End of file m_admin.php */
/* Location: ./application/modules/admin/models/m_admin.php */
