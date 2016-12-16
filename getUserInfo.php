

<?php

//Kimi Halverson
//PHP Script to get a user from the database given the name

$database = simplexml_load_file("database.xml");
//ASSERT: load up the database

$foundUser;
//ASSERT: to store the user we're looking for


foreach($database->alum as $anAlum){
    if ($_COOKIE['usercookie'] == $anAlum->usercookie){
        $foundUser = $anAlum;
    }
}

$name  = (string)$foundUser->name;
$email = (string)$foundUser->email;
$city = (string)$foundUser->city;
$state = (string)$foundUser->state;
$ma1 = (string)$foundUser->ma1;
$ma2 = (string)$foundUser->ma2;
$ma3 = (string)$foundUser->ma3;
$mi1 = (string)$foundUser->mi1;
$mi2 = (string)$foundUser->mi2;
$mi3 = (string)$foundUser->mi3;
    
$title = (string)$foundUser->title;
$phone = (string)$foundUser->phone;
$linkedin = (string)$foundUser->linkedin;
$desc = (string)$foundUser->desc;
$advanced = (string)$foundUser->advanced;
    
$gradMon = (string)$foundUser->gradMon;
$gradYear = (string)$foundUser->gradYear;


$user = array(
    //ASSERT: create an array out of the
    //        info from the database
    "name"  => $name,
    "email" => $email,
    "city" => $city,
    "state" => $state,
    "ma1" => $ma1,
    "ma2" => $ma2,
    "ma3" => $ma3,
    "mi1" => $mi1,
    "mi2" => $mi2,
    "mi3" => $mi3,
    
    "title" => $title,
    "phone" => $phone,
    "linkedin" => $linkedin,
    "desc" => $desc,
    "advanced" => $advanced,
    
    "gradMon" => $gradMon,
    "gradYear" => $gradYear
);


echo json_encode($user);

?>