

<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
$xml = simplexml_load_file("users.xml");

if(isset($_POST['login']) && isset($_POST['password'])){
    foreach($xml->user as $aUser){
        echo "given email: " . $email . "<br/>";
        echo "current email: " . $aUser->email . "<br/>";
        if($_POST['login'] == $aUser->email && $_POST['password'] == $aUser->password){
            echo "Correct!";
            setcookie('usercookie', $aUser->cookie, false);
        }
        else{
            echo "Incorrect login and/or password.";
        }
    }
}
else{
    echo "Please fill in both text fields to login.";
}





?>