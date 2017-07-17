<?php
$access_token = '9zbW0SvzAKBG49EaSu5o16HsL/4wmWsXTv/jXd/Z8HDjs/Ox1l2forTeK7Y9FdukraX7n30uJ/mVDxxX9wglJVorxa3UgSiPE93f5Q1UbEZHBYl6gNrwRlLfFhh2DXjyGLeNK54IJXhvgK67uLXe4wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;