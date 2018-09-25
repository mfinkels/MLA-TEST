<?php
session_start();

$config = array(
'db' => array(
  'ezflow' => array(
  'dbname' => 'oldla6bw_ezflow',
  'username' => 'oldla6bw_megaten',
  'password' => 'Misionesal100',
  'host' => 'localhost'
  )
),

'urls' => array(
'baseUrl' => 'https://ezflow.com.ar/ezflow/ml/'
)
);


require_once(dirname(__FILE__).'/library/functions.php');
require_once(dirname(__FILE__).'/library/ml/Meli/meli.php');

define('LIBRARY_PATH', realpath(dirname(__FILE__) . '/library'));
define('TEMPLATE_PATH', realpath(dirname(__FILE__) . '/template'));
define('ASSETS_PATH', realpath(dirname(__FILE__) . '../assets'));

$meli = new Meli('8599425088244127', '8vExx4EFjpw3gGfbw7M52UIAXot0aJ32');


/*
Error reporting.
*/
ini_set('error_reporting', 'true');
error_reporting(E_ALL|E_STRCT);
