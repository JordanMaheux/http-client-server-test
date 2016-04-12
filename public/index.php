<?php

require __DIR__ . '/../vendor/autoload.php';

# TIP: Use the $_SERVER Sugerglobal to get all the data your need from the Client's HTTP Request.

# TIP: HTTP headers are printed natively in PHP by invoking header().
#      Ex. header('Content-Type', 'text/html');

$protocol_version = $_SERVER['SERVER_PROTOCOL'];
$res_body = array(
	'to' 		=> 'Pillr',
	'subject' 	=> 'Pillr Test Submission',
	'message' 	=> 'Hello, here is my test submission. I hope you like it.',
	'from' 		=> 'Jordan Maheux',
	'timeSent' 	=> date('D, d M Y H:i:s T')
);

header('Last-Modified: ' . date('D, d, M, Y, H:i:s T', getlastmod()));
header('Content-Type: application/json');
echo json_encode($res_body);