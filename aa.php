<?php

$url="https://yandex.ru";

//$res=file_get_contents($url);

//print_r($res);

$curl=curl_init();
curl_setopt($curl,CURLOPT_URL,$url);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
$res=curl_exec($curl);

//print_r($res);
echo 'bye';dfasd
tetet
preg_match('#<title>(.*?)</title>#su',$res,$matches);
$title=$matches[1];
print_r($matches);
?>