

<?php

//Kimi Halverson
//PHP Script to get a user from the database given the name

$database = simplexml_load_file("database.xml");
//ASSERT: load up the database

$foundUser;
//ASSERT: to store the user we're looking for

/* foreach($database->alum as $anAlum){ */
/*     if($_POST['cookie'] == true){ */
/*         $usercookie = $_COOKIE['usercookie']; */
/*         if($usercookie == $anAlum->usercookie){ */
/*             $foundUser = $anAlum; */
/*         } */
/*     } */
/*     else if{ */
/*         if($_POST['name'] == $anAlum->name){ */
/*             $foundUser = $anAlum; */
/*             //ASSERT: there's a name that matches in the */
/*             //        database */
/*         } */
/*     } */
/* } */


foreach($database->alum as $anAlum){
    if ($_COOKIE['usercookie'] == $anAlum->usercookie){
        $foundUser = $anAlum;
    }
}

$name  = $foundUser->name;
$email = $foundUser->email;
$city = $foundUser->city;
$state = $foundUser->state;
$ma1 = $foundUser->ma1;
$ma2 = $foundUser->ma2;
$ma3 = $foundUser->ma3;
$mi1 = $foundUser->mi1;
$mi2 = $foundUser->mi2;
$mi3 = $foundUser->mi3;
    
$title = $foundUser->title;
$phone = $foundUser->phone;
$linkedin = $foundUser->linkedin;
$desc = $foundUser->desc;
$advanced = $foundUser->advanced;
    
$gradMon = $foundUser->gradMon;
$gradYear = $foundUser->gradYear;


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