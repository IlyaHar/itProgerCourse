<?php
require_once 'inputFields.php';

$input = new InputEmail();

$input->addStyles([
    'background' => 'silver',
    'border' => 'solid black 1px',
    'border-radius' => '5px',
    'width' => '400px',
    'outline' => 'none',
    'padding' => '10px 10px 10px 10px',
    'color' => 'purple',
]);

$input->show();

