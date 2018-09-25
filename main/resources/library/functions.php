<?php
require_once(dirname(__FILE__).'/../config.php');

function getOwner(){
  if(isset($_SESSION['access_token'])){
    $params = array('access_token' => $_SESSION['access_token']);
    global $meli;
    $result = $meli->get('/users/me', $params);
    return $result['body'];
  }
  return false;
}

function getVisitUser($userId, $from, $to){
  if(isset($from) && isset($to)){
    $params = array(
      'date_from' => $from,
      'date_to' => $to
    );
    global $meli;
    $result = $meli->get('users/'.$userId.'/items_visits', $params);
    var_dump($result);
    return $result['body']->total_visits;
  }
  return false;
}
