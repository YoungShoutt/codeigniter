<?php
class m_mst_karyawan extends CI_Model
{

	function cek_kode($kode_karyawan)
	{
		$a = $this->db->query("SELECT COUNT(*) AS num_rows FROM t_empl WHERE nik = '$kode_karyawan' ");
		$b = $a->row();
		$c = $b->num_rows;
		if ($c > 0) {
			$d = $this->db->query("SELECT COUNT(*) AS num_rows FROM t_empl WHERE nik = '$kode_karyawan' AND flagdeleted = '1'");
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

	function entry_data($data, $kode_karyawan)
	{
		$this->db->insert('t_empl', $data);
		echo json_encode("success");
		log_activity($this->session->userdata('username'), 'Simpan', $this->session->userdata('username') . ' Telah menyimpan data di Master Karyawan dengan Kode Karyawan =' . $kode_karyawan);
	}


	function record_grid_view_count($search_kode_karyawan)
	{
		$result = $this->db->query("SELECT count(*) as a 
			FROM t_empl
			WHERE (nik LIKE '%$search_kode_karyawan%' OR nama  LIKE '%$search_kode_karyawan%') AND flagdeleted ='0' ");
		return $result;
	}
	function record_grid_view_data($start, $limit, $sidx, $sord, $search_kode_karyawan)
	{
		$result = $this->db->query("SELECT * 
			FROM t_empl	
			WHERE (nik LIKE '%$search_kode_karyawan%' OR nama LIKE '%$search_kode_karyawan%') AND flagdeleted ='0' ORDER BY $sidx $sord LIMIT $start,$limit ")->result();
		return $result;
	}


	function edit($data, $kode_karyawan)
	{
		$this->db->where('nik', $kode_karyawan);
		$this->db->update('t_empl', $data);
		echo json_encode("success");
		if ($data['flagdeleted'] == '0') {
			log_activity($this->session->userdata('username'), 'Edit', $this->session->userdata('username') . ' Telah telah mengedit data di Master Karyawan dengan Kode Karyawan =' . $kode_karyawan);
		} else {
			log_activity($this->session->userdata('username'), 'Hapus', $this->session->userdata('username') . ' Telah menghapus data di Master Karyawan dengan Kode Karyawan =' . $kode_karyawan);
		}
	}
}
