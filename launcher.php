<?php

require 'vendor/autoload.php';

$client = new Elasticsearch\Client();

$params = array();
$params['index'] = 'epsi';
$params['type']  = 'memories';

$pdfArray = array("/ElasticSearch_NoSql/memories/M13_LEROUX.pdf", "/ElasticSearch_NoSql/memories/M13_LEAUTE.pdf", "/ElasticSearch_NoSql/memories/M13_LEZER.pdf", "/ElasticSearch_NoSql/memories/M13_NOIRAUD.pdf", "/ElasticSearch_NoSql/memories/M13_POIRIER.pdf", "/ElasticSearch_NoSql/memories/M13_TALEC.pdf", "/ElasticSearch_NoSql/memories/M13_TEYSSIER.pdf");

foreach ($pdfArray as $pdf) {
  exec('/usr/local/bin/pdftotext -enc UTF-8 '.$pdf);

  $name = explode('.', $pdf);
  $nametxt = $name[0];
  $bodyContent .= file_get_contents($nametxt.'.txt');

}

$params['body']  = array('content' => $bodyContent);

$ret = $client->index($params);

?>
