
<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$cookie_int = random_int(0, 10000);
$signupUser = json_decode($_POST['aUser'], true);
print_r($signupUser);

$name = $signupUser['name'];
$email = $signupUser['email'];
$password  = $signupUser['password'];
//ASSERT: gather data from form fields

$xml = simplexml_load_file("users.xml");
$newUser = $xml->addChild('user');
$newUser->addChild('name', $name);
$newUser->addChild('password', $password);
$newUser->addChild('email', $email);
$newUser->addChild('cookie', $cookie_int);
$xml->asXML("users.xml");
//ASSERT: add everything to the user xml


$xml = simplexml_load_file("database.xml");
$newAlum = $xml->addChild('alum');
$newAlum->addChild('name', $name);
$newAlum->addChild('email', $email);
$newAlum->addChild('city', "");
$newAlum->addChild('state', "");
$newAlum->addChild('ma1', "");
$newAlum->addChild('ma2', "");
$newAlum->addChild('ma3', "");
$newAlum->addChild('mi1', "");
$newAlum->addChild('mi2', "");
$newAlum->addChild('mi3', "");

$newAlum->addChild("title", "");
$newAlum->addChild("phone", "");
$newAlum->addChild("linkedin", "");
$newAlum->addChild("desc", "");
$newAlum->addChild("advanced", "");

$newAlum->addChild('gradMon', "");
$newAlum->addChild('gradYear', "");
$newAlum->addChild('usercookie', $cookie_int);
//ASSERT: fill the rest of the database with empty


$xml->asXML("database.xml");
//ASSERT: add information to the database



?>