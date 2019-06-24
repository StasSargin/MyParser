<?php

require_once 'vendor/autoload.php';

function request($url, $postdata = null, $cookiefile = 'tmp/cookie.txt'){

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/33.0.1750.154 Safari/537.36');

    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookiefile);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookiefile);

    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt($ch, CURLOPT_PROXY, '41.188.5.110:8080');
    curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_HTTP);

    curl_setopt($ch, CURLOPT_TIMEOUT, 9);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 6);

    if ($postdata){
        curl_setopt($ch, CURL_POSTFIELDS, $postdata);

    }

    $html = curl_exec($ch);
    curl_close($ch);
    return $html;


}

file_put_contents('tmp/cookie.txt', '');

// $html = request('https://www.lostfilm.tv/login'); - get

$post = [
    'act' => 'users',
    'type' => 'login',
    'mail' => ' ',
    'pass' => ' ',
    'need_captcha' => '',
    'captcha' => '',
    'rem' => '1'
];

$html = request('https://www.lostfilm.tv/login', $post);

echo $html;

