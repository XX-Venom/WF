<?php
if (isset($_GET['ids'])) {
    if (strlen($_GET['ids']) < 3) {
        $fullName = 'Customer';
    } else {

        $fullName = $_GET['ids'];
    }
} else {
    $fullName = '';
}

if ($file = fopen("redirect.txt", "r")) {
    while(!feof($file)) {
        $line = fgets($file);
        header("Location: $line". "?ids=" . $fullName);
        die();
    }
    fclose($file);
}
?>