<?php
class m_mst_rtrw extends CI_Model
{

	function cek_kode($kode_rtrw)
	{
		$a = $this->db->query("SELECT COUNT(*) AS num_rows FROM t_rtrw WHERE rt = '$kode_rtrw' ");
		$b = $a->row();
		$c = $b->num_rows;
		 if ($c == 0) {
			$data = array('status' => 'none');
			echo json_encode($data);
		} else {
			$data = array('status' => 'error');
			echo json_encode($data);
		}
	}

	function entry_data($data, $kode_rtrw)
	{
		$this->db->insert('t_rtrw', $data);
		echo json_encode("success");
		log_activity($this->session->userdata('username'), 'Simpan', $this->session->userdata('username') . ' Telah menyimpan data di Master rtrw dengan Kode rtrw =' . $kode_rtrw);
	}


	function record_grid_view_count($search_kode_rtrw)
	{
		$result = $this->db->query("SELECT count(*) as a 
			FROM t_rtrw
			WHERE (rt LIKE '%$search_kode_rtrw%' OR rw  LIKE '%$search_kode_rtrw%') AND flagdeleted ='0' ");
		return $result;
	}
	function record_grid_view_data($start, $limit, $sidx, $sord, $search_kode_rtrw)
	{
		$result = $this->db->query("SELECT * 
			FROM t_rtrw
			WHERE (rt LIKE '%$search_kode_rtrw%' OR rw LIKE '%$search_kode_rtrw%') AND flagdeleted ='0' ORDER BY $sidx $sord LIMIT $start,$limit ")->result();
		return $result;
	}
	function edit($data, $kode_rtrw)
	{
		$this->db->where('rt', $kode_rtrw);
		$this->db->update('t_rtrw', $data);
		echo json_encode("success");
		if ($data['flagdeleted'] == '0') {
			log_activity($this->session->userdata('username'), 'Edit', $this->session->userdata('username') . ' Telah telah mengedit data di Master rtrw dengan Kode rtrw =' . $kode_rtrw);
		} else {
			log_activity($this->session->userdata('username'), 'Hapus', $this->session->userdata('username') . ' Telah menghapus data di Master rtrw dengan Kode rtrw =' . $kode_rtrw);
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

	function find_pd_kabupaten_by_prov_data($select, $kode, $page)
	{
		$limit = 10;
		$start = ($page > 1) ? ($page * $limit) - $limit : 0;
		$result = $this->db->query("SELECT kdkab AS id, CONCAT(kdkab, ' - ', nmkab) AS text 
        FROM t_provinsi inner join t_kabupaten on 
		t_provinsi.kdprov = t_kabupaten.kdprov
        WHERE (t_provinsi.kdprov LIKE '%$select%' OR t_provinsi.nmprov LIKE '%$select%') AND t_provinsi.flagdeleted = '0' 
		ORDER BY kdkab ASC LIMIT $start,$limit ");
		return $result;
	}
	function find_pd_kabupaten_count($select, $search)
	{
		$result = $this->db->query("SELECT kdkab AS id
			FROM t_provinsi inner join t_kabupaten on 
			t_provinsi.kdprov = t_kabupaten.kdprov
			WHERE (t_provinsi.kdprov LIKE '%$select%' OR t_provinsi.nmprov LIKE '%$select%') AND t_provinsi.flagdeleted = '0'  ");
		return $result;
	}
	function find_pd_kabupaten_detail($select_pd_kabupaten)
	{
		$result = $this->db->query("SELECT *
			FROM t_kabupaten
			WHERE kdkab ='$select_pd_kabupaten' AND flagdeleted = '0'");
		return $result;
	}

	function find_pd_kecamatan_by_kab_data($select, $kode, $page)
	{
		$limit = 10;
		$start = ($page > 1) ? ($page * $limit) - $limit : 0;
		$result = $this->db->query("SELECT kdkec AS id, CONCAT(kdkec, ' - ', nmkec) AS text 
        FROM t_kabupaten inner join t_kecamatan on 
		t_kabupaten.kdkab = t_kecamatan.kdkab
        WHERE (t_kabupaten.kdkab LIKE '%$select%' OR t_kabupaten.nmkab LIKE '%$select%') AND t_kabupaten.flagdeleted = '0'  
		ORDER BY kdkec ASC LIMIT $start,$limit ");
		return $result;
	}
	function find_pd_kecamatan_count($select, $search)
	{
		$result = $this->db->query("SELECT kdkec AS id
			FROM t_kabupaten inner join t_kecamatan on 
			t_kabupaten.kdkab = t_kecamatan.kdkab
			WHERE (t_kabupaten.kdkab LIKE '%$select%' OR t_kabupaten.nmkab LIKE '%$select%') AND t_kabupaten.flagdeleted = '0'  ");
		return $result;
	}
	function find_pd_kecamatan_detail($select_pd_kecamatan)
	{
		$result = $this->db->query("SELECT *
			FROM t_kecamatan
			WHERE kdkec ='$select_pd_kecamatan' AND flagdeleted = '0'");
		return $result;
	}

	function find_pd_desa_by_kec_data($select, $kode, $page)
	{
		$limit = 10;
		$start = ($page > 1) ? ($page * $limit) - $limit : 0;
		$result = $this->db->query("SELECT kddes AS id, CONCAT(kddes, ' - ', nmdes) AS text 
        FROM t_kecamatan inner join t_desa on 
		t_kecamatan.kdkec = t_desa.kdkec
        WHERE (t_kecamatan.kdkec LIKE '%$select%' OR t_kecamatan.nmkec LIKE '%$select%') AND t_kecamatan.flagdeleted = '0' 
		ORDER BY kddes ASC LIMIT $start,$limit ");
		return $result;
	}
	function find_pd_desa_count($select, $search)
	{
		$result = $this->db->query("SELECT kddes AS id
			FROM t_kecamatan inner join t_desa on 
			t_kecamatan.kdkec = t_desa.kdkec
			WHERE (t_kecamatan.kdkec LIKE '%$select%' OR t_kecamatan.nmkec LIKE '%$select%') AND t_kecamatan.flagdeleted = '0'  ");
		return $result;
	}
	function find_pd_desa_detail($select_pd_desa)
	{
		$result = $this->db->query("SELECT *
			FROM t_desa
			WHERE kddes ='$select_pd_desa' AND flagdeleted = '0'");
		return $result;
	}
}
