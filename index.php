<?php
$json = file_get_contents('https://obscure-tundra-57006.herokuapp.com/webhook.php');
$opj = json_decode($json);
print_r($opj);
