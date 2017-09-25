<?php
$access_token ='17PM+HYIz7F2ncilultvHjsI/WgZJAgwTPEsWRw58pAiO73LDeqbwRizOP9nf2J0ctpMJukP8X6r4LLs0M2ILdVl660EdacLD5Q6xQmEHc4z3FtUXYUzn9qqhUQpHPM2iWCaqTOjI4/FEJQqVr2LbQdB04t89/1O/w1cDnyilFU=';

// Get POST body content
$content = file_get_contents('php://input');
// Parse JSON
$events = json_decode($content, true);
print_r($events);
