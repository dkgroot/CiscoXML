<?php
// composer autoloader
require(implode(DIRECTORY_SEPARATOR, array(
    __DIR__,
    'vendor',
    'autoload.php'
)));

use CiscoXML\CiscoXMLService;
use CiscoXML\Forms\CiscoIPPhoneText;

// implementation
$obj = new CiscoIPPhoneText();
$obj->setTitle("Text Title");
$obj->setPrompt("Prompt Message");
$obj->setText("This is where body text can be inserted for displaying custom data");
echo $obj->toXML();
?>
