<?php
class m_mst_kabupaten extends CI_Model
{

	function cek_kode($kode_kabupaten)
	{
		$a = $this->db->query("SELECT COUNT(*) AS num_rows FROM t_kabupaten WHERE kdkab = '$kode_kabupaten' ");
		$b = $a->row();
		$c = $b->num_rows;
		if ($c > 0) {
			$d = $this->db->query("SELECT COUNT(*) AS num_rows FROM t_kabupaten WHERE kdkab = '$kode_kabupaten' AND flagdeleted = '1'");
			$e = $d->row();
			$f = $e->num_rows;
			if ($f > 0) {
				$data = array('status' => 'inactive');
				echo json_encode($data);
			} else {
				$data = array('status' => 'exist');
				echo json_encode($data);
			}
		} else if ($c == 0) {
			$data = array('status' => 'none');
			echo json_encode($data);
		} else {
			$data = array('status' => 'error');
			echo json_encode($data);
		}
	}

	function entry_data($data, $kode_kabupaten)
	{
		$this->db->insert('t_kabupaten', $data);
		echo json_encode("success");
		log_activity($this->session->userdata('username'), 'Simpan', $this->session->userdata('username') . ' Telah menyimpan data di Master Kabupaten dengan Kode kabupaten =' . $kode_kabupaten);
	}


	function record_grid_view_count($search_kode_kabupaten)
	{
		$result = $this->db->query("SELECT count(*) as a 
			FROM t_kabupaten
			WHERE (kdkab LIKE '%$search_kode_kabupaten%' OR nmkab  LIKE '%$search_kode_kabupaten%') AND flagdeleted ='0' ");
		return $result;
	}
	function record_grid_view_data($start, $limit, $sidx, $sord, $search_kode_kabupaten)
	{
		$result = $this->db->query("SELECT * 
			FROM t_kabupaten
			WHERE (kdkab LIKE '%$search_kode_kabupaten%' OR nmkab LIKE '%$search_kode_kabupaten%') AND flagdeleted ='0' ORDER BY $sidx $sord LIMIT $start,$limit ")->result();
		return $result;
	}
	function edit($data, $kode_kabupaten)
	{
		$this->db->where('kdkab', $kode_kabupaten);
		$this->db->update('t_kabupaten', $data);
		echo json_encode("success");
		if ($data['flagdeleted'] == '0') {
			log_activity($this->session->userdata('username'), 'Edit', $this->session->userdata('username') . ' Telah telah mengedit data di Master kabupaten dengan Kode kabupaten =' . $kode_kabupaten);
		} else {
			log_activity($this->session->userdata('username'), 'Hapus', $this->session->userdata('username') . ' Telah menghapus data di Master kabupaten dengan Kode kabupaten =' . $kode_kabupaten);
		}
	}

	function find_pd_provinsi_data($search, $page)
    {
        $limit = 10;
        $start = ($page > 1) ? ($page * $limit) - $limit : 0;
        $result = $this->db->query("SELECT kdprov AS id, CONCAT(kdprov,' - ',nmprov) AS text 
			FROM t_provinsi 
			WHERE (kdprov LIKE '%$search%' OR nmprov LIKE '%$search%')
			ORDER BY kdprov ASC LIMIT $start,$limit ");
        return $result;
    }
    function find_pd_provinsi_count($search)
    {
        $result = $this->db->query("SELECT kdprov AS id
			FROM t_provinsi
			WHERE (kdprov LIKE '%$search%' OR nmprov LIKE '%$search%') ");
        return $result;
    }
    function find_pd_provinsi_detail($select_pd_provinsi)
    {
        $result = $this->db->query("SELECT *
			FROM t_provinsi
			WHERE kdprov ='$select_pd_provinsi' AND flagdeleted = '0'");
        return $result;
    }
}
