<?php 
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient('17PM+HYIz7F2ncilultvHjsI/WgZJAgwTPEsWRw58pAiO73LDeqbwRizOP9nf2J0ctpMJukP8X6r4LLs0M2ILdVl660EdacLD5Q6xQmEHc4z3FtUXYUzn9qqhUQpHPM2iWCaqTOjI4/FEJQqVr2LbQdB04t89/1O/w1cDnyilFU=');
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => '0343cb56233dac2308244ab6f895204b']);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello');
$response = $bot->replyMessage('<replyToken>', $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
