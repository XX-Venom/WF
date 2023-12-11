<?php
header('Content-Type: application/json');

$file_path = '../../REDIRECT/redirect.txt';

// Verifică dacă s-a primit un request de tip POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $newLine = $_POST['urls'];
    $file_handle = fopen($file_path, 'w');
    if ($file_handle !== false) {
        fwrite($file_handle, $newLine);
        fclose($file_handle);
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false, 'error' => 'Nu s-a putut deschide fișierul']);
    }
} else {
    echo json_encode(['success' => false, 'error' => 'Request invalid']);
}
?>
