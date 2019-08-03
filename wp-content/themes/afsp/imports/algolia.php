<?php
// composer autoload
// require __DIR__ . '/vendor/autoload.php';

// if you are not using composer
require_once 'algoliasearch-client-php-master/autoload.php';

$batch = json_decode(file_get_contents('merged.json'), true);

$client = \AlgoliaSearch\SearchClient(
  'BONWJFMMRS',
  '1c59c2fc48ff2c40b1934b48f45a77f5'
);

$index = $client->initIndex('Donor Drive');

echo '<pre>';
echo var_dump($batch[result][row]);
echo'</pre>';

$index->saveObjects($batch[result][row], ['autoGenerateObjectIDIfNotExist' => true]);

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