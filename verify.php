<?php
$access_token = '17PM+HYIz7F2ncilultvHjsI/WgZJAgwTPEsWRw58pAiO73LDeqbwRizOP9nf2J0ctpMJukP8X6r4LLs0M2ILdVl660EdacLD5Q6xQmEHc4z3FtUXYUzn9qqhUQpHPM2iWCaqTOjI4/FEJQqVr2LbQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;