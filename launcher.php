<?php

require 'vendor/autoload.php';

$client = new Elasticsearch\Client();

$params = array();
$params['index'] = 'epsi';
$params['type']  = 'memories';

// transform pdf to txt memories
exec('/usr/local/bin/pdftotext -enc UTF-8 /www/memories/M13_LEAUTE.pdf');
exec('/usr/local/bin/pdftotext -enc UTF-8 /www/memories/M13_LEROUX.pdf');

//get the content of all .txt
$bodyContent = file_get_contents('/www/memories/M13_LEAUTE.txt');

//fake static data
$params['body']  = array('content' => $bodyContent);

$ret = $client->index($params);

?>
