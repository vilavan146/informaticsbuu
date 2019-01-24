<?php
$access_token = 'q+tGG3GTprNr9HAysOo0y2n6H4pVycQZ9n28wziruNV1jETgNPnSS41e6XC/klmPEsGSSZchbGcNpUBc6bIq2rdCr6lccp/WxvqYiPGtU/MtjxuGtmRN8GE6J0z6XJYTu2aXJQn+Ttkck35RvPU4PAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
