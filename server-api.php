<?php
require "./config_recapcha.php";
require "./get_ip_details.php";


$ALL_REPORT_LOGS = fopen("./ALL_REPORT_LOGS/REPORT_CAPCHA.txt", "a") or die("Unable to open file!");

if ($_SERVER["REQUEST_METHOD"] == "POST") {  
	$token = $_POST["token"];
	$ips = $_POST["ip"];
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://challenges.cloudflare.com/turnstile/v0/siteverify');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
		'secret' => $secret_key,
		'response' => $token,
		'remoteip' => $ips,
	]));
	$output = curl_exec($ch);
	curl_close($ch);
	$response = json_decode($output, true);
	if($response['success']){
		$txt = $ip . " | SUCCES CHALLENGE ACCES WEBSITE | " . $datex_ .  " | "  .   $country . " | "  .$region. " | "  . $city . " | "  .  $isp  . " | "  . $proxy . " | "  . $hosting . " | "  . $org .  " | ". $as ."\n";
		fwrite($ALL_REPORT_LOGS, $txt);
		fclose($ALL_REPORT_LOGS);
		echo  true;
	}elseif ($response['error-codes'][0] == 'timeout-or-duplicate') {
		$txt = $ip . " | ERROR CHALLENGE ACCES WEBSITE | " . $datex_ .  " | "  .   $country . " | "  .$region. " | "  . $city . " | "  .  $isp  . " | "  . $proxy . " | "  . $hosting . " | "  . $org .  " | ". $as ."\n";
		fwrite($ALL_REPORT_LOGS, $txt);
		fclose($ALL_REPORT_LOGS);
		echo  false;
	}
}

