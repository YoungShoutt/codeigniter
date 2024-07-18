<?php
class m_mst_provinsi extends CI_Model
{

	function cek_kode($kode_provinsi)
	{
		$a = $this->db->query("SELECT COUNT(*) AS num_rows FROM t_provinsi WHERE kdprov = '$kode_provinsi' ");
		$b = $a->row();
		$c = $b->num_rows;
		if ($c > 0) {
			$d = $this->db->query("SELECT COUNT(*) AS num_rows FROM t_provinsi WHERE kdprov = '$kode_provinsi' AND flagdeleted = '1'");
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

	function entry_data($data, $kode_provinsi)
	{
		$this->db->insert('t_provinsi', $data);
		echo json_encode("success");
		log_activity($this->session->userdata('username'), 'Simpan', $this->session->userdata('username') . ' Telah menyimpan data di Master provinsi dengan Kode provinsi =' . $kode_provinsi);
	}


	function record_grid_view_count($search_kode_provinsi)
	{
		$result = $this->db->query("SELECT count(*) as a 
			FROM t_provinsi
			WHERE (kdprov LIKE '%$search_kode_provinsi%' OR nmprov  LIKE '%$search_kode_provinsi%') AND flagdeleted ='0' ");
		return $result;
	}
	function record_grid_view_data($start, $limit, $sidx, $sord, $search_kode_provinsi)
	{
		$result = $this->db->query("SELECT * 
			FROM t_provinsi	
			WHERE (kdprov LIKE '%$search_kode_provinsi%' OR nmprov LIKE '%$search_kode_provinsi%') AND flagdeleted ='0' ORDER BY $sidx $sord LIMIT $start,$limit ")->result();
		return $result;
	}


	function edit($data, $kode_provinsi)
	{
		$this->db->where('kdprov', $kode_provinsi);
		$this->db->update('t_provinsi', $data);
		echo json_encode("success");
		if ($data['flagdeleted'] == '0') {
			log_activity($this->session->userdata('username'), 'Edit', $this->session->userdata('username') . ' Telah telah mengedit data di Master provinsi dengan Kode provinsi =' . $kode_provinsi);
		} else {
			log_activity($this->session->userdata('username'), 'Hapus', $this->session->userdata('username') . ' Telah menghapus data di Master provinsi dengan Kode provinsi =' . $kode_provinsi);
		}
	}
}
