<?php
class m_ijentrayek extends CI_Model
{

    // function cek_kode($noijin_trayek)
    // {
    //     $a = $this->db->query("SELECT COUNT(*) AS num_rows FROM ang_dataijintrayek WHERE no_ijin_trayek = '$noijin_trayek' ");
    //     $b = $a->row();
    //     $c = $b->num_rows;
    //     if ($c > 0) {
    //         $d = $this->db->query("SELECT COUNT(*) AS num_rows FROM ang_dataijintrayek WHERE no_ijin_trayek = '$noijin_trayek' AND flagdeleted = '1'");
    //         $e = $d->row();
    //         $f = $e->num_rows;
    //         if ($f > 0) {
    //             $data = array('status' => 'inactive');
    //             echo json_encode($data);
    //         } else {
    //             $data = array('status' => 'exist');
    //             echo json_encode($data);
    //         }
    //     } else if ($c == 0) {
    //         $data = array('status' => 'none');
    //         echo json_encode($data);
    //     } else {
    //         $data = array('status' => 'error');
    //         echo json_encode($data);
    //     }
    // }

    function entry_data($data, $noijin_trayek)
    {
        $this->db->insert('ang_dataijintrayek', $data);
        echo json_encode("success");
        log_activity($this->session->userdata('username'), 'Simpan', $this->session->userdata('username') . ' Telah menyimpan data di Data Ijin Trayek dengan Kode No. Ijin Trayek =' . $noijin_trayek);
    }


    function record_grid_view_count($search_noijin_trayek)
    {
        $result = $this->db->query("SELECT count(*) as a 
			FROM ang_dataijintrayek
                LEFT JOIN mst_kendaraan ON ang_dataijintrayek.no_kendaraan = mst_kendaraan.no_polisi
                LEFT JOIN t_provinsiON ang_dataijintrayek.kdprov = mst_trayek.kdprov
                LEFT JOIN mst_merkkendaraan on mst_kendaraan.kd_merk=mst_merkkendaraan.kd_merk
			WHERE (ang_dataijintrayek.no_ijin_trayek LIKE '%$search_noijin_trayek%') AND ang_dataijintrayek.flagdeleted ='0' ");
        return $result;
    }
    function record_grid_view_data($start, $limit, $sidx, $sord, $search_noijin_trayek)
    {
        $result = $this->db->query("SELECT 
                ang_dataijintrayek.*,
                mst_kendaraan.no_uji,
                mst_merkkendaraan.merk_kendaraan,
                mst_kendaraan.thn_pembuatan,
                mst_kendaraan.no_mesin,
                mst_kendaraan.no_rangka,
                mst_trayek.nmprov,
                mst_trayek.rute_berangkat,
                mst_trayek.rute_kembali
			FROM ang_dataijintrayek
                LEFT JOIN mst_kendaraan ON ang_dataijintrayek.no_kendaraan = mst_kendaraan.no_polisi
                LEFT JOIN t_provinsiON ang_dataijintrayek.kdprov = mst_trayek.kdprov	
                LEFT JOIN mst_merkkendaraan on mst_kendaraan.kd_merk=mst_merkkendaraan.kd_merk         
			WHERE (ang_dataijintrayek.no_ijin_trayek LIKE '%$search_noijin_trayek%') AND ang_dataijintrayek.flagdeleted ='0' ORDER BY $sidx $sord LIMIT $start,$limit ")->result();
        return $result;
    }


    function edit($data, $noijin_trayek, $lastupdate_data)
    {
        $this->db->where('lastupdate', $lastupdate_data);
        $this->db->update('ang_dataijintrayek', $data);
        echo json_encode("success");
        if ($data['flagdeleted'] == '0') {
            log_activity($this->session->userdata('username'), 'Edit', $this->session->userdata('username') . ' Telah telah mengedit data di Data Ijin Trayek dengan Kode No. Ijin Trayek =' . $noijin_trayek);
        } else {
            log_activity($this->session->userdata('username'), 'Hapus', $this->session->userdata('username') . ' Telah menghapus data di Data Ijin Trayek dengan Kode No. Ijin Trayek =' . $noijin_trayek);
        }
    }


    function find_no_kend_data($search, $page)
    {
        $limit = 10;
        $start = ($page > 1) ? ($page * $limit) - $limit : 0;
        $result = $this->db->query("SELECT kdprov AS id, CONCAT(kdprov,' - ',nmprov) AS text 
			FROM t_provinsi 
			WHERE (kdprov LIKE '%$search%' OR nmprov LIKE '%$search%') 
			ORDER BY kdprov ASC LIMIT $start,$limit ");
        return $result;
    }
    /*Perintah untuk menampilkan hasil dari browse tabel lain*/
    function find_no_kend_count($search)
    {
        $result = $this->db->query("SELECT kdprov AS id
			FROM t_provinsi 
			WHERE (kdprov LIKE '%$search%' OR nmprov LIKE '%$search%') ");
        return $result;
    }
    function find_no_kend_detail($select_no_kend)
    {
        $result = $this->db->query("SELECT *
			FROM t_provinsi 
			WHERE kdprov ='$select_no_kend' AND t_provinsi.flagdeleted = '0'");
        return $result;
    }


    function find_pd_trayek_data($search, $page)
    {
        $limit = 10;
        $start = ($page > 1) ? ($page * $limit) - $limit : 0;
        $result = $this->db->query("SELECT kdprov AS id, CONCAT(kdprov,' - ',nmprov) AS text 
			FROM t_provinsi 
			WHERE (kdprov LIKE '%$search%' OR nmprov LIKE '%$search%')
			ORDER BY kdprov ASC LIMIT $start,$limit ");
        return $result;
    }
    function find_pd_trayek_count($search)
    {
        $result = $this->db->query("SELECT kdprov AS id
			FROM t_provinsi
			WHERE (kdprov LIKE '%$search%' OR nmprov LIKE '%$search%') ");
        return $result;
    }
    function find_pd_trayek_detail($select_pd_trayek)
    {
        $result = $this->db->query("SELECT *
			FROM t_provinsi
			WHERE kdprov ='$select_pd_trayek' AND flagdeleted = '0'");
        return $result;
    }
}
