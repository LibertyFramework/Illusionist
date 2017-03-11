<?php
/**
 *
 *
 */

error_reporting(E_ALL);
ini_set('html_errors', true);
ini_set('display_errors', true);
ini_set('display_startup_errors', true);

require_once '../vendor/autoload.php';

$app = new \App\Illusionist();

$app->parse('../illusionist.yml');
