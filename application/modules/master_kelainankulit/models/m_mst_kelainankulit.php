<?php
class m_mst_kelainankulit extends CI_Model
{

	function cek_kode($kode_kelainankulit)
	{
		$a = $this->db->query("SELECT COUNT(*) AS num_rows FROM m_kelainankulit WHERE kode = '$kode_kelainankulit' ");
		$b = $a->row();
		$c = $b->num_rows;
		if ($c > 0) {
			$d = $this->db->query("SELECT COUNT(*) AS num_rows FROM m_kelainankulit WHERE kode = '$kode_kelainankulit' AND flagdeleted = '1'");
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

	function entry_data($data, $kode_kelainankulit)
	{
		$this->db->insert('m_kelainankulit', $data);
		echo json_encode("success");
		log_activity($this->session->userdata('username'), 'Simpan', $this->session->userdata('username') . ' Telah menyimpan data di Master Jenis Kulit dengan Kode Jenis Kulit =' . $kode_kelainankulit);
	}


	function record_grid_view_count($search_kode_kelainankulit)
	{
		$result = $this->db->query("SELECT count(*) as a 
			FROM m_kelainankulit
			WHERE (kode LIKE '%$search_kode_kelainankulit%' OR kelainankulit  LIKE '%$search_kode_kelainankulit%') AND flagdeleted ='0' ");
		return $result;
	}
	function record_grid_view_data($start, $limit, $sidx, $sord, $search_kode_kelainankulit)
	{
		$result = $this->db->query("SELECT * 
			FROM m_kelainankulit	
			WHERE (kode LIKE '%$search_kode_kelainankulit%' OR kelainankulit LIKE '%$search_kode_kelainankulit%') AND flagdeleted ='0' ORDER BY $sidx $sord LIMIT $start,$limit ")->result();
		return $result;
	}


	function edit($data, $kode_kelainankulit)
	{
		$this->db->where('kode', $kode_kelainankulit);
		$this->db->update('m_kelainankulit', $data);
		echo json_encode("success");
		if ($data['flagdeleted'] == '0') {
			log_activity($this->session->userdata('username'), 'Edit', $this->session->userdata('username') . ' Telah telah mengedit data di Master Jenis Kulit dengan Kode Jenis Kulit =' . $kode_kelainankulit);
		} else {
			log_activity($this->session->userdata('username'), 'Hapus', $this->session->userdata('username') . ' Telah menghapus data di Master Jenis Kulit dengan Kode Jenis Kulit =' . $kode_kelainankulit);
		}
	}
}
