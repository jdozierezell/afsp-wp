<?php
// composer autoload
require __DIR__ . '/vendor/autoload.php';

// if you are not using composer
// require_once 'path/to/algolia/folder/autoload.php';

$client = Algolia\AlgoliaSearch\SearchClient::create(
  'BONWJFMMRS',
  '1c59c2fc48ff2c40b1934b48f45a77f5'
);

$index = $client->initIndex('Donor Drive');
$batch = json_decode(file_get_contents('merged.json'), true);
$index->saveObjects($batch, ['autoGenerateObjectIDIfNotExist' => true]);

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