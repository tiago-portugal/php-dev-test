<?php
$url = 'https://www.example.com';
 
$curl = curl_init();
 
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HEADER, false);
 
$data = curl_exec($curl);
 
curl_close($curl);
