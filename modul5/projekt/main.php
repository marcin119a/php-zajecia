<?php
include_once "vendor/autoload.php";

use Symfony\Component\Yaml;

use Parser\ParserHtml;
$parser = new ParserHtml();
var_dump($parser->getFlats());
