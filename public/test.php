<?php
/**
 *
 *
 */

//
require_once '../vendor/autoload.php';

//
use Javanile\Liberty\Framework;

//
Framework::setDebug(true);

//
$app = Framework::parseYaml('../illusionist.yml');

//
echo '<pre>';

var_dump($app);
