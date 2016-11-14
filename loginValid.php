

<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');
$xml = simplexml_load_file("users.xml");

if(isset($_POST['login']) && isset($_POST['password'])){
    foreach($xml->user as $aUser){
        if($_POST['login'] == $aUser->email && $_POST['password'] == $aUser->password){
            echo "Correct!";
            setcookie('usercookie', $aUser->cookie, false);
            header("Location: loggedIn.html");
        }
        else{
            echo "Incorrect login and/or password.";
            setcookie('failedattempt', 0, false);
            header("Location: mainPage.php");
        }
    }
}
else{
    echo "Please fill in both text fields to login.";
}





?>