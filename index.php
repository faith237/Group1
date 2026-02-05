<?php

use App\FormatManager;
use App\HtmlFormat;
use App\TextFormat;

require_once __DIR__.'/vendor/autoload.php';

ini_set('display_errors', 1);


// $format = new TextFormat;
// $data = $format->getFormat("Hello text");
// var_dump($data);

// $format = new HtmlFormat;
// $data = $format->getFormat("Hello Html");
// var_dump($data);

$htmlFormat = new HtmlFormat;
$format = new FormatManager($htmlFormat);
$data = $format->getFormat("Hello Format Manager");
var_dump($data);