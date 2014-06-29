<?php

require 'vendor/autoload.php';

$client = new Elasticsearch\Client();
$get_search = $_POST['search'];

$searchParams['index'] = 'epsi';
$searchParams['type']  = 'memories';
$searchParams['body']['query']['match']['content'] =  $get_search;

$results = $client->search($searchParams);

function jsonRemoveUnicodeSequences($results) {
  return preg_replace("/\\\\n/", "<br />", json_encode($results));
  return preg_replace("/\\\\u([a-f0-9]{4})/e", "iconv('UCS-4LE','UTF-8',pack('V', hexdec('U$1')))", json_encode($results));
}

print jsonRemoveUnicodeSequences($results);
?>
