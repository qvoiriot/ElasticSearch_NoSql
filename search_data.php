<?php

require 'vendor/autoload.php';

$client = new Elasticsearch\Client();
$get_search = $_POST['search'];

$searchParams['index'] = 'epsi';
$searchParams['type']  = 'memories';
$searchParams['body']['query']['match']['content'] =  $get_search;

$results = $client->search($searchParams);

echo json_encode($results);

?>
