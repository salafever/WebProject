<?php

$success = 0;
$successAdmin = 1;
$failure = 2;



//Randomize cookie_ints for admin and user all the time
//Look through the list first and try to make sure there
//is no duplicate


error_reporting(E_ALL);
ini_set('display_errors', '1');

$loginUser = json_decode($_POST['login'], true);

$adminName = "Admin";
$adminPassword = "password";
//ASSERT: define the administrator user/pass

$xml = simplexml_load_file("database.xml");

$inputLogin = $loginUser['login'];
$inputPass = $loginUser['password'];


foreach($xml->user as $aUser){
    if($inputLogin == $aUser->email && $inputPass == $aUser->password){
        $new_cookie = random_int(0, 10000);

        if(//the cookie is unique){
            setcookie('usercookie', $aUser->usercookie, false);
            $aUser->usercookie = $new_cookie;
            }

      
        echo 0;
        //ASSERT: a cookie is set for the user, and we send back a 0
    }
    else if($inputLogin == $adminName && $inputPass == $adminPassword){
        $new_cookie = random_int(0, 10000);
        
        if(//the cookie is unique){
            setcookie('usercookie', $aUser->usercookie, false);
            $aUser->usercookie = $new_cookie;
            }
        
       
        echo 1;
    else{
        echo 2;
    }
}

?>