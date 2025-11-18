<?php
// Get IP Address
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ipaddress = $_SERVER['REMOTE_ADDR'];
}

// Get User Agent (browser info)
$useragent = $_SERVER['HTTP_USER_AGENT'];

// Optional: extract browser name if you want a $browser variable
$browser = $useragent; // or parse it separately if needed

// File to store data
$file = "ip.txt";

// Write data
$fp = fopen($file, "a");

// Add a line break for readability
fwrite($fp, "IP: " . $ipaddress . " | Browser: " . $browser . "\n");

fclose($fp);
?>
