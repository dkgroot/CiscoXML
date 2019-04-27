ORIGINAL AUTHOR
Tyler Winfield <contact>
See: https://www.phpclasses.org/package/6718-PHP-Generate-XML-for-services-of-Cisco-IP-phones.html

Has been adapted to composer.phar style to fit into projects easily.

INSTALLATION:
------------------------
Copy the 'lib' folder into any folder available to php includes.  The include_path folders can be configured in php.ini if not already setup.
PHP v5 required at minimum to run the framework.

REQUIREMENTS
* composer
* php >= 5.3

USAGE:
------------------------
simply run:
* composer.json:
```
    "repositories": [
        {
            "url": "https://github.com/dkgroot/CiscoXML.git",
            "type": "git"
        }
    ],
    "require-dev": {
        "dkgroot/ciscoxml": "dev-master"
    }
```
and update composer using
```
composer update -o
```
Once all framework files are copied to an appropriate install location, the following will make the framework available to the script:
```
<?
require(implode(DIRECTORY_SEPARATOR, array(
    __DIR__,
    'vendor',
    'autoload.php'
)));

use CiscoXML\Forms\CiscoIPPhoneText;
.....
?>
```

EXAMPLE:
------------------------
code:
```
<?php
require(implode(DIRECTORY_SEPARATOR, array(
    __DIR__,
    'vendor',
    'autoload.php'
)));

use CiscoXML\Forms\CiscoIPPhoneText;

$obj = new CiscoIPPhoneText();
$obj->setTitle("Text Title");
$obj->setPrompt("Prompt Message");
$obj->setText("This is where body text can be inserted for displaying custom data");
echo $obj->toXML();
?>
```

output:
```
<?xml version="1.0" encoding="utf-8"?>
<CiscoIPPhoneText>
  <Title>Text Title</Title>
  <Prompt>Prompt Message</Prompt>
  <Text>This is where body text can be inserted for displaying custom data</Text>
</CiscoIPPhoneText>
```
