<?php

if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

$datex_ = date('m/d/Y h:i:s', time());


$site_key = '0x4AAAAAAAON9sXaN--NRgyS';
$secret_key = '0x4AAAAAAAON9msmLtb8ROp4dQfbomF741o';



?>
