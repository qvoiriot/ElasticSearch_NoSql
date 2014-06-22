<?php

require 'vendor/autoload.php';

$client = new Elasticsearch\Client();

$deleteParams['index'] = array('epsi');

$client->indices()->delete($deleteParams);

?>
