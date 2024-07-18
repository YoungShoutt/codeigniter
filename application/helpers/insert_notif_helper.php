<?php

//convert numbers to currency format


function insert_notif( $data)
{
    $CI = &get_instance();
    $no_transaction  =$data['no_transaction']? $data['no_transaction']:'';
    $type_transaction  =$data['type_transaction']? $data['type_transaction']:'';
    $target_reminder  =$data['target_reminder']? $data['target_reminder']:'';
    $status  =$data['status']? $data['status']:'';
    $flagdeleted  =$data['flagdeleted'];
    $username  =$data['username'];
    $ipaddress  =$data['ipaddress'];
    $lastupdate  =$data['lastupdate'];
    $data = array(
        "no_transaction" => $no_transaction,
        "type_transaction" => $type_transaction,
        "target_reminder" => $target_reminder,
        "status" => 0,
        "flagdeleted" =>"0",
        "username" => $username,
        "ipaddress" => $_SERVER['REMOTE_ADDR'],
        "lastupdate" => date('Y-m-d H:i:s')
    );
    $CI->db->insert('t_reminder', $data);
	// echo json_encode("succes");
    // $CI->load->model('m_log');
    // $CI->m_log->save_log($data);
}
function update_notif( $data)
{
    $CI = &get_instance();
    $no_transaction  =$data['no_transaction']? $data['no_transaction']:'';
    $type_transaction  =$data['type_transaction']? $data['type_transaction']:'';
    $flagdeleted  =$data['flagdeleted'];
    $username  =$data['username'];
    $ipaddress  =$data['ipaddress'];
    $lastupdate  =$data['lastupdate'];
    $data = array(
        "status" => 1,
        "flagdeleted" =>"0",
        "username" => $username,
        "ipaddress" => $_SERVER['REMOTE_ADDR'],
        "lastupdate" => date('Y-m-d H:i:s')
    );
    $CI->db->where('type_transaction', $type_transaction);
    $CI->db->where('no_transaction', $no_transaction);
    $CI->db->update('t_reminder', $data);
	// echo json_encode("succes");
    // $CI->load->model('m_log');
    // $CI->m_log->save_log($data);
}
