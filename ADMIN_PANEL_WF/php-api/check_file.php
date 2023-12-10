<?php
header('Content-Type: application/json');
$file_path = '../../ALL_REPORT_LOGS/REPORT_CAPCHA.txt';
$file_lines = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if ($file_lines !== false) {
    $result = []; // Initializează array-ul înainte de bucla foreach
    foreach ($file_lines as $line) {
        $line_parts = explode('|', $line);
        $line_parts = array_map('trim', $line_parts);
        $line_data = [
            'ip' => $line_parts[0],
            'status' => $line_parts[1],
            'timestamp' => $line_parts[2],
            'country' => $line_parts[3],
            'code' => $line_parts[4],
            'city' => $line_parts[5],
            'company' => $line_parts[6],
            'proxy_detected' => $line_parts[7],
            'hostinger_detected' => $line_parts[8],
            'company2' => $line_parts[9],
            'as_number' => $line_parts[10],
        ];
        $result[] = $line_data;
    }
    $jsonData = json_encode($result);
    echo $jsonData;
} else {
    echo 'Eroare la citirea fișierului.';
}
?>
