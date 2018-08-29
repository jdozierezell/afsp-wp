<?php
$source_url = 'https://api.donordrive.com/afsp/export/afsp-web-export.xml';
$filename = 'test.xml';



if(!file_exists($filename)) {
    echo 'File not found.';
}

$fp = fopen($filename, 'w');

if(!$fp) {
    echo 'File open failed.';
}

$ch = curl_init($source_url);
curl_setopt($ch, CURLOPT_FILE, $fp);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('donordrive-email: jdozier-ezell@afsp.org','donordrive-password: Afsp!2015'));
$data = curl_exec($ch);

libxml_use_internal_errors(true);
$xml = simplexml_load_file($filename);

if(!$xml) {
    echo "Failed loading XML\n";
    foreach(libxml_get_errors() as $error) {
        echo "\t", $error->message;
    }
}

$json = json_encode($xml);
$array = json_decode($json, true);

$keys = array_keys($array);

echo $array[$keys[0]];
echo $array['result']['row'][0]['customfieldcode1'];

foreach($array['result']['row'] as $data) {
    echo $data['customfieldcode1'];
    echo "\n\n";
}

print "<pre>";
print_r(array_values($array));
print "</pre>";


?>