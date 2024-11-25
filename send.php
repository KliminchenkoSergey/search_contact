<?php

require_once (__DIR__.'/crest.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

$params = array(
    'id' => $_REQUEST['id']
);


$request = CRest::call('crm.contact.get', $params);
$name = $request['result']['NAME'];
$last_name = $request['result']['LAST_NAME'];

$person = array(
  'name' => $name,
  'last_name' => $last_name,
);

$_SESSION['person'] = $person;

  header('Location: index.php');
  exit;
}



?>