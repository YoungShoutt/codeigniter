<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class m_log extends CI_Model
{
    function save_log($data)
    {
        $this->db->insert('log_activity', $data);
    }
}
