<?php
date_default_timezone_set('Asia/Kolkata');
$imageData = $_POST['cat'];
if (!empty($_POST['cat'])) {
    error_log("Received . " . $_POST['cat'], 3, "Log.log");
    $filteredData = substr($imageData, strpos($imageData, ",") + 1);
    $unencodedData = base64_decode($filteredData);
    $fp = fopen("cam" . date('dMYHis') . ".png", 'wb');
    fwrite($fp, $unencodedData);
    fclose($fp);
    exit();
}
?>
