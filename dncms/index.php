<?php
error_reporting(E_ALL ^ E_NOTICE);
ini_set('date.timezone', 'America/Los_Angeles');

require '../../dncms-src/Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

require '../../dncms-src/db.php';
require '../../dncms-src/routes.php';

$app->run();

?>
