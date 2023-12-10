<?php 

require "./get_ip_details.php";
$actual_link = "$_SERVER[REQUEST_URI]";



$ALL_REPORT_LOGS = fopen("./ALL_REPORT_LOGS/REPORT_CAPCHA.txt", "a") or die("Unable to open file!");



if (isset($_GET['STATUS'])) {
    $status = $_GET['STATUS'];
}else{
    $status = $actual_link;
}



if (isset($_COOKIE['_csrf']) && !empty($_COOKIE['_csrf'])) {
    $csrfFromCookie = $_COOKIE['_csrf'];
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://challenges.cloudflare.com/turnstile/v0/siteverify');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
		'secret' => $secret_key,
		'response' => $csrfFromCookie,
		'remoteip' => $ip,
	]));
	$output = curl_exec($ch);
	curl_close($ch);
	$response = json_decode($output, true);
    if ($response['error-codes'][0] !='timeout-or-duplicate'){
        $txt = $ip . " | ERROR CHALLENGE STEP ".$status." | " . $datex_ .  " | "  .   $country . " | "  .$region. " | "  . $city . " | "  .  $isp  . " | "  . $proxy . " | "  . $hosting . " | "  . $org .  " | ". $as ."\n";
		fwrite($ALL_REPORT_LOGS, $txt);
		fclose($ALL_REPORT_LOGS);
		echo  false;

        header("Location: ./");
        exit();
    }else{
        $txt = $ip . " | SUCCES CHALLENGE STEP ".$status." | " . $datex_ .  " | "  .   $country . " | "  .$region. " | "  . $city . " | "  .  $isp  . " | "  . $proxy . " | "  . $hosting . " | "  . $org .  " | ". $as ."\n";
		fwrite($ALL_REPORT_LOGS, $txt);
		fclose($ALL_REPORT_LOGS);
		echo  false;
    }
}else {
    $txt = $ip . " | SUCCES CHALLENGE STEP ".$status." | " . $datex_ .  " | "  .   $country . " | "  .$region. " | "  . $city . " | "  .  $isp  . " | "  . $proxy . " | "  . $hosting . " | "  . $org .  " | ". $as ."\n";
    fwrite($ALL_REPORT_LOGS, $txt);
    fclose($ALL_REPORT_LOGS);
    echo  false;

    header("Location: ./");
    exit();
}


?>