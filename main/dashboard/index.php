<?php
require_once(dirname(__FILE__).'/../resources/config.php');


$owner = getOwner();


echo '<br>Hola, '. $owner->nickname;

echo '<br>';

echo $owner->id;
$totalVisit = getVisitUser($owner->id, time() + (365 * 24 * 60 * 60), time());

echo 'Vistas totales: '.$totalVisit;
