<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'autoload.php';

$article = new Article();
$article->create(
    'Новая запись',
    'Небольшое описание записи',
    'Большое описание записи',
    'John'
);