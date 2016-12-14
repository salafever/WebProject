
<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$cookie_int = random_int(0, 10000);
$user_id = random_int(0, 10000);

$signupUser = json_decode($_POST['aUser'], true);


$name = $signupUser['name'];
$email = $signupUser['email'];
$password  = $signupUser['password'];
//ASSERT: gather data from form fields

$xml = simplexml_load_file("database.xml");
$newAlum = $xml->addChild('alum');

$newAlum->addChild('name', $name);
$newAlum->addChild('email', $email);
$newAlum->addChild('password', $password);
$newAlum->addChild('usercookie', $cookie_int);
$newAlum->addChild('id', $user_id);
//ASSERT: Include the name, email, password, and the random
//        cookie. Also is the id of the user.


$newAlum->addChild('city', "");
$newAlum->addChild('state', "");
//ASSERT: city and state for the coordinates of each user

$newAlum->addChild('ma1', "");
$newAlum->addChild('ma2', "");
$newAlum->addChild('ma3', "");
$newAlum->addChild('mi1', "");
$newAlum->addChild('mi2', "");
$newAlum->addChild('mi3', "");
//ASSERT: the majors and minors of the user


$newAlum->addChild("title", "");
$newAlum->addChild("phone", "");
$newAlum->addChild("linkedin", "");
$newAlum->addChild("desc", "");
$newAlum->addChild("advanced", "");
//ASSERT: User's job title, phone number, linked in url,
//        job description, room for advanced degree


$newAlum->addChild('gradMon', "");
$newAlum->addChild('gradYear', "");
//ASSERT: fill the rest of the database with empty


$xml->asXML("database.xml");
//ASSERT: add information to the database



?>