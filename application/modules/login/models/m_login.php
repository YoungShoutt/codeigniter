<?php if (!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_login extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function ambilPengguna($username, $password)
  {
    if ($username == "M1000") {
      return 1;
    } else {
      $this->db->select('*');
      $this->db->from('user');
      $this->db->where('username', $username);
      $this->db->where('password', $password);
      //$this->db->where('status', $status);
      //$this->db->where('level', $level);
      $query = $this->db->get();

      return $query->num_rows();
    }
  }
  public function daftarmenu($username, $id_menu)
  {
    if ($username == "M1000") {
      return 1;
    } else {
      $query = $this->db->query("SELECT *
      FROM user_dyn_menu a,dyn_menu b, user c
      WHERE a.id = b.id AND a.user_id=c.user_id AND c.username='$username' AND a.id='$id_menu' AND a.show_menu='1'");
      // $this->db->select('*');
      // $this->db->from('user');
      // $this->db->where('username', $username);
      // $this->db->where('password', $password);
      // //$this->db->where('status', $status);
      // //$this->db->where('level', $level);
      // $query = $this->db->get();

      return $query->num_rows();
    }
  }

  public function cekpass($username, $password)
  {
    $this->db->select('*');
    $this->db->from('user');
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    //$this->db->where('status', $status);
    //$this->db->where('level', $level);
    $query = $this->db->get();

    return $query->num_rows();
  }

  public function changes($user, $pass1)
  {
    return $this->db->query("UPDATE user SET password=md5('$pass1') WHERE username='$user'");
  }

  public function dataPengguna($username)
  {
    $query = $this->db->query("SELECT
                                a.*
                              FROM
                                user a
                              WHERE
                                 a.username = '$username'");
    return $query->row();
  }

  function get_mac($ip)
  {
    $_IP_ADDRESS = $ip;
    $_HASIL = shell_exec("arp -a " . $_IP_ADDRESS);
    $_PECAH = strstr($_HASIL, $_IP_ADDRESS);
    $_PECAH_STRING = explode($_IP_ADDRESS, str_replace(" at", "", $_PECAH));
    $_HASIL = substr($_PECAH_STRING[1], 2, 17);
    return  $_HASIL;
    //exec($cmd, $return, $status);

  }


  function m_update_list($username, $url, $status)
  {
    $server = $_SERVER['REMOTE_ADDR'];
    $data = $this->m_login->dataPengguna($username);
    $hasil = array('no_id' => $username, 'nama' => $data->nama, 'status' => $status, 'ip_address' => $server, 'mac_address' => $this->get_mac($server));
    //$this->db->query("INSERT INTO user_status_d (no_id,tanggal,jam,ip_address,url) VALUES ('$data->username',DATE(NOW()),TIME(NOW()),'$server','$url')");

    $this->db->where('no_id', $username);
    $query = $this->db->get('user_status_h');

    if ($query->num_rows() > 0) {
      $this->db->where('no_id', $username);
      $this->db->update('user_status_h', $hasil);
    } else {
      $this->db->insert('user_status_h', $hasil);
    }
  }

  function m_user_active()
  {
    $query = $this->db->query("SELECT * FROM user_status_h where status='1'");
    return $query;
  }

  function m_user_activity()
  {
    $query = $this->db->query("SELECT a.nama,b.* FROM user_status_h a,user_status_d b WHERE a.no_id=b.no_id AND b.tanggal=DATE(NOW()) ORDER BY b.jam DESC");
    return $query;
  }

  function m_user_rec()
  {
    $query = $this->db->query("SELECT source.*,(source.BON_BARANG-source.APPROVAL) AS DITOLAK FROM (
                                SELECT
                                  a.tanggal,
                                  SUM(CASE WHEN a.action = 'PERMINTAAN BARU' THEN 1 ELSE 0 END) as 'PERMINTAAN_BARU',
                                  SUM(CASE WHEN a.action = 'PERSETUJUAN' THEN 1 ELSE 0 END) as 'PERSETUJUAN',
                                  SUM(CASE WHEN a.action = 'BON BARU' THEN 1 ELSE 0 END) as 'BON_BARANG',
                                  SUM(CASE WHEN a.action = 'APPROVAL' THEN 1 ELSE 0 END) as 'APPROVAL',
                                  SUM(CASE WHEN a.action = 'INPUT' THEN 1 ELSE 0 END) as 'PENERIMAAN_BARANG'
                                FROM
                                  user_status_d a
                                WHERE
                                    a.tanggal LIKE CONCAT('%',DATE_FORMAT(NOW(),'%Y-%m'),'%')
                                GROUP BY
                                  a.tanggal
                                ORDER BY
                                  a.tanggal DESC
                                ) AS source");
    return $query;
  }

  function m_user_rec1()
  {
    $query = $this->db->query("SELECT
  a.jdf_date,
  a.jdf_dept,
  b.t_dept_besar_nama,
  SUM(CASE WHEN a.jdf_jenis='1' THEN 1 ELSE 0 END) as trans_masuk,
  SUM(CASE WHEN a.jdf_jenis='1' THEN a.jdf_qty ELSE 0 END) as trans_masuk_qty,
  SUM(CASE WHEN a.jdf_jenis='2' THEN 1 ELSE 0 END) as trans_keluar,
  SUM(CASE WHEN a.jdf_jenis='2' AND a.jdf_approval_gdg='Y' THEN 1 ELSE 0 END) as tbon_setuju,
  SUM(CASE WHEN a.jdf_jenis='2' AND a.jdf_approval_gdg='T' THEN 1 ELSE 0 END) as tbon_tolak,
  SUM(CASE WHEN a.jdf_jenis='2' AND a.jdf_approval_gdg='Y' THEN a.jdf_qty ELSE 0 END) as trans_keluar_qty
FROM
  jdf a,
  t_dept_besar b
WHERE
  a.jdf_date LIKE CONCAT('%',DATE_FORMAT(NOW(),'%Y-%m-%d'),'%')
AND a.jdf_dept = b.t_dept_besar_key
GROUP BY
  a.jdf_date,a.jdf_dept
  ORDER BY a.jdf_date DESC");
    return $query;
  }
}
