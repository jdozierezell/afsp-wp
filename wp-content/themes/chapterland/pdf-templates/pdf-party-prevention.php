<?php 

// require 'pdfcrowd.php';

require 'docraptor-php-0.3.0/autoload.php';

$partyPrevention = $_POST['html'];

$configuration = DocRaptor\Configuration::getDefaultConfiguration();
$configuration->setUsername("nnuiFL08ehM6NeY2NhU");
// $configuration->setDebug(true);
$docraptor = new DocRaptor\DocApi();

$doc = new DocRaptor\Doc();
$doc->setTest(false);
$prince_options = new DocRaptor\PrinceOptions(); 
$prince_options->setMedia('print');
$doc->setDocumentContent($partyPrevention);
$doc->setName("Party_for_Prevention_Flyer.pdf");
$doc->setDocumentType("pdf");
$create_response = $docraptor->createDoc($doc);
header('Content-Description: Party for Prevention Flyer');
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename=Party_for_Prevention_Flyer.pdf');
header('Content-Transfer-Encoding: binary');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
header('Content-Length: ' . strlen($create_response));
ob_clean();
flush();
echo($create_response);

?>    