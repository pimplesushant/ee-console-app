<?php
require_once __DIR__ . '/vendor/autoload.php';
use Symfony\Component\Console\Application;
use Console\CsvCommand;

$app = new Application('Convert JSON to CSV from Command Line / Console', 'v1.0');
$app -> add(new CsvCommand());
$app -> run();