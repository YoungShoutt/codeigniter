<?php
class m_mst_jnskulit extends CI_Model
{

	function cek_kode($kode_jnskulit)
	{
		$a = $this->db->query("SELECT COUNT(*) AS num_rows FROM m_jnskulit WHERE kode = '$kode_jnskulit' ");
		$b = $a->row();
		$c = $b->num_rows;
		if ($c > 0) {
			$d = $this->db->query("SELECT COUNT(*) AS num_rows FROM m_jnskulit WHERE kode = '$kode_jnskulit' AND flagdeleted = '1'");
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

	function entry_data($data, $kode_jnskulit)
	{
		$this->db->insert('m_jnskulit', $data);
		echo json_encode("success");
		log_activity($this->session->userdata('username'), 'Simpan', $this->session->userdata('username') . ' Telah menyimpan data di Master Jenis Kulit dengan Kode Jenis Kulit =' . $kode_jnskulit);
	}


	function record_grid_view_count($search_kode_jnskulit)
	{
		$result = $this->db->query("SELECT count(*) as a 
			FROM m_jnskulit
			WHERE (kode LIKE '%$search_kode_jnskulit%' OR jnskulit  LIKE '%$search_kode_jnskulit%') AND flagdeleted ='0' ");
		return $result;
	}
	function record_grid_view_data($start, $limit, $sidx, $sord, $search_kode_jnskulit)
	{
		$result = $this->db->query("SELECT * 
			FROM m_jnskulit	
			WHERE (kode LIKE '%$search_kode_jnskulit%' OR jnskulit LIKE '%$search_kode_jnskulit%') AND flagdeleted ='0' ORDER BY $sidx $sord LIMIT $start,$limit ")->result();
		return $result;
	}


	function edit($data, $kode_jnskulit)
	{
		$this->db->where('kode', $kode_jnskulit);
		$this->db->update('m_jnskulit', $data);
		echo json_encode("success");
		if ($data['flagdeleted'] == '0') {
			log_activity($this->session->userdata('username'), 'Edit', $this->session->userdata('username') . ' Telah telah mengedit data di Master Jenis Kulit dengan Kode Jenis Kulit =' . $kode_jnskulit);
		} else {
			log_activity($this->session->userdata('username'), 'Hapus', $this->session->userdata('username') . ' Telah menghapus data di Master Jenis Kulit dengan Kode Jenis Kulit =' . $kode_jnskulit);
		}
	}
}
