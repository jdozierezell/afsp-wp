<?php
// composer autoload
// require __DIR__ . '/vendor/autoload.php';

// if you are not using composer
require_once 'algoliasearch-client-php-master/autoload.php';

echo 'foo';

$file = file_get_contents('merged.json');
$batch = json_decode($file, true);

$client = \Algolia\AlgoliaSearch\SearchClient::create('BONWJFMMRS', '1c59c2fc48ff2c40b1934b48f45a77f5');
$index = $client->initIndex('Donor Drive');
$batch = json_decode(file_get_contents($batch), true);

echo '<pre>';
echo var_dump($file);
echo var_dump($batch);
echo '</pre>';


$index->saveObjects($batch, ['autoGenerateObjectIDIfNotExist' => true]);

echo ' bar';

// $index->setSettings(
//   [
//     'searchableAttributes' => [
//       'name',
//       'venue',
//       'city',
//       'state'
//     ]
//   ]
// );