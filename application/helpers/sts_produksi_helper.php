<?php

//convert numbers to currency format


function log_produksi( $data_produksi)
{
    $CI = &get_instance();
    $ordersheetno  =$data_produksi['ordersheetno'];
    $dateproduksi  =$data_produksi['dateproduksi'];
    $kodeproduksi  =$data_produksi['kodeproduksi'];
    $stsproduksi  =$data_produksi['stsproduksi'];
    $weight  =$data_produksi['weight'];
    $qty_conversion  =$data_produksi['qty_conversion'];
    $unit_conversion  =$data_produksi['unit_conversion'];
    $unit  =$data_produksi['unit'];
    $qty  =$data_produksi['qty'];
    $itemcode  =$data_produksi['itemcode'];
    $salesorderno  =$data_produksi['salesorderno'];
    $pono  =$data_produksi['pono'];
    $flagdeleted  =$data_produksi['flagdeleted'];
    $username  =$data_produksi['username'];
    $ipaddress  =$data_produksi['ipaddress'];
    $lastupdate  =$data_produksi['lastupdate'];
    $data = array(
        "ordersheetno" => $ordersheetno,
        "dateproduksi" => $dateproduksi,
        "kodeproduksi" => $kodeproduksi,
        "stsproduksi" => $stsproduksi,
        "weight" => $weight,
        "qty_conversion" => $qty_conversion,
        "unit_conversion" => $unit_conversion,
        "unit" => $unit,
        "qty" => $qty,
        "itemcode" => $itemcode,
        "salesorderno" => $salesorderno,
        "pono" => $pono,
        "flagdeleted" =>"0",
        "username" => $username,
        "ipaddress" => $_SERVER['REMOTE_ADDR'],
        "lastupdate" => date('Y-m-d H:i:s')
    );
    $CI->db->insert('t_historyproduksi', $data);
	// echo json_encode("succes");
    // $CI->load->model('m_log');
    // $CI->m_log->save_log($data);
}
