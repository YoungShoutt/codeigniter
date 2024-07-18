<?php

//convert numbers to currency format

function log_activity( $username,$type, $desc)
{
    $CI = &get_instance();
    $data = array(
        "username" => $username,
        "type" => $type,
        "log_activity" => $desc,
        "ipaddress" => $_SERVER['REMOTE_ADDR'],
        "datetime" => date('Y-m-d H:i:s')
    );
    $CI->load->model('m_log');
    $CI->m_log->save_log($data);
}
