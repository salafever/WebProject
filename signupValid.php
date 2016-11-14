


<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');


$name = $_POST['name'];
$email = $_POST['email'];
$password  = $_POST['password'];
//ASSERT: gather data from form fields

$xml = simplexml_load_file("users.xml");
$newUser = $xml->addChild('user');
$newUser->addChild('name', $name);
$newUser->addChild('password', $password);
$newUser->addChild('email', $email);
$xml->asXML("users.xml");
//ASSERT: add everything to the user xml


$xml = simplexml_load_file("database.xml");
$newAlum = $xml->addChild('alum');
$newAlum->addChild('name', $name);
$newAlum->addChild('email', $email);
$xml->asXML("database.xml");
//ASSERT: add information to the database



?>