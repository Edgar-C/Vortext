<?php
$data = http_build_query(array(
"email" => "geakc",
"password" => "chan"
));

$url = "https://cloudcare.org/log1in.php";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch , CURLOPT_COOKIEJAR, 'cookie');

$output = curl_exec($ch);
curl_close($ch);
?>
