<?php
// composer autoloader
require(implode(DIRECTORY_SEPARATOR, array(
    __DIR__,
    'vendor',
    'autoload.php'
)));

use CiscoXML\CiscoXMLService;
use CiscoXML\Forms\CiscoIPPhoneText;
use CiscoXML\Forms\CiscoIPPhoneMenu;

// implementation
echo "\n=text=====\n";
$textobj = new CiscoIPPhoneText();
$textobj->setTitle("Text Title");
$textobj->setPrompt("Prompt Message");
$textobj->setText("This is where body text can be inserted for displaying custom data");
echo $textobj->toXML();
echo "============\n";
echo "\n=menu item=====\n";
$menuobj = new CiscoIPPhoneMenu();
$menuobj->setTitle("Menu Title");
$menuobj->setPrompt("Prompt Message");
$menuobj->addItem("Item1", "http://example.com/URL1.php");
$menuobj->addItem("Item2", "http://example.com/URL2.php");
echo $menuobj->toXML();
echo "============\n";
?>
