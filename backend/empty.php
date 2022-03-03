<?php

header('HTTP/1.1 200 OK');

if (
	(isset($_GET['cors'])) && 
 	(isset($_SERVER['HTTP_ORIGIN'])) &&
	(preg_match('/http(s?):\/\/speedtest.*nutrinet\.io$/', $_SERVER['HTTP_ORIGIN']))
   ) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Methods: GET, POST');
    header('Access-Control-Allow-Headers: Content-Encoding, Content-Type');
    header('Vary: Origin');
}

header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0, s-maxage=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
header('Connection: keep-alive');
