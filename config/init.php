<?php

define ("DEBUG", 0); //developing or production mode shows errors or hide it from user but writes them to the appropriate file
define("ROOT", dirname(__DIR__));
define ("WWW", ROOT.'/public');
define ("APP", ROOT.'/app');
define ("CORE", ROOT.'/vendor/shop/core');
define ("LIBS", ROOT.'/vendor/shop/core/libs');
define ("CACHE", ROOT.'/tmp/cache');
define ("CONF", ROOT.'/config');
define ("LAYOUT", "Novobud");

$app_path = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['PHP_SELF']}"; //http://ishop2.loc/public/index.php
$app_path = preg_replace("#[^/]+$#",'', $app_path ); //http://ishop2.loc/public/
$app_path = str_replace('/public/','', $app_path); //http://ishop2.loc

define("PATH", $app_path);
define("ADMIN", PATH.'/admin');

require_once ROOT.'/vendor/autoload.php';