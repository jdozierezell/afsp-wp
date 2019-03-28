<?php 

$source_url = 'https://api.donordrive.com/afsp/export/afsp-web-export.xml';
$filename = '../imports/donor-drive.xml';

if(!file_exists($filename)) {
    echo 'File not found.';
}

$fp = fopen($filename, 'w');

if(!$fp) {
    echo 'File open failed.';
}

$ch = curl_init($source_url);
curl_setopt($ch, CURLOPT_FILE, $fp);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('donordrive-email: jdozier-ezell@afsp.org','donordrive-password: RBe[@3s6Gu"q:@4t'));
$data = curl_exec($ch);

if(curl_errno($ch))
{
    echo 'error:' . curl_error($ch);
} else {
    echo 'success';
}

// include 'merge-events.php';

?>