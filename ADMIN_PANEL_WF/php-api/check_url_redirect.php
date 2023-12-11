<?php
header('Content-Type: application/json');
$file_path = '../../REDIRECT/redirect.txt';
$file_lines = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if ($file_lines !== false) {
    $jsonData = json_encode($file_lines);
    echo $jsonData;
} else {
    echo 'Eroare la citirea fișierului.';
}
?>
