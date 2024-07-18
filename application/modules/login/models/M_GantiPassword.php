<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_GantiPassword extends CI_Model
{
    function ganti_pass($data)
    {
        $username           = $data['username'];
        $password           = $data['password'];
        $new_pass           = $data['new_pass'];
        $a = $this->db->query("SELECT COUNT(*) AS num_rows from user WHERE username = '$username' ");
        $b = $a->row();
        $c = $b->num_rows;
        if ($c > 0) {
            $d = $this->db->query("SELECT COUNT(*) AS num_rows from user WHERE username = '$username' 
            AND password='$password' ");
            $e = $d->row();
            $f = $e->num_rows;
            if ($f > 0) {
                $new_passdata = array(
                    'password' => $new_pass,
                );
                $this->db->where('username', $username);
                $this->db->update('user', $new_passdata);
                $data = array(
                    'status' => 'success',
                );
                echo json_encode($data);
            } else {
                $data = array(
                    'status' => 'wrongpass',
                );
                echo json_encode($data);
            }
        } else {
            $data = array(
                'status' => 'nouser',
            );
            echo json_encode($data);
        }
    }
}
