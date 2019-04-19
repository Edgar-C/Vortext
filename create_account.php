<?php 
/*
replace array values with unique code from random generated variables
$rand = 15 random chars
$username = "r".$rand
*/

$data = http_build_query(array("username"  => $username,"email" => "geakc","pass1" => "chan"));
$url = "https://cloudcare.org/sign1up";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

$output = curl_exec($ch);
curl_close($ch);
?>
