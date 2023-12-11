<?php
require "./get_ip_details.php";
$ALL_REPORT_LOGS = fopen("./ALL_REPORT_LOGS/IPS.txt", "a") or die("Unable to open file!");

if (isset($_GET['ids'])) {
    if (strlen($_GET['ids']) < 3) {
        $fullName = 'Customer';
    } else {

        $fullName = $_GET['ids'];
    }
} else {
    $fullName = 'Customer';
}
$datex_ = date('m/d/Y h:i:s', time());

$txt = $ip .  " | " . $fullName  .  " | " . $datex_ .  " | "  .   $country . " | "  .$region. " | "  . $city . " | "  .  $isp  . " | "  . $proxy . " | "  . $hosting . " | "  . $org .  " | ". $as .  " |  ACCES" .  "\n";
fwrite($ALL_REPORT_LOGS, $txt);
fclose($ALL_REPORT_LOGS);
?>