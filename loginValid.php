//Author: Kimi Halverson

<?php

$adminName = "Admin";
$adminPassword = "password";
//ASSERT: define the administrator user/pass

$xml = simplexml_load_file("users.xml");

if(isset($_POST['login']) && isset($_POST['password'])){
    //ASSERT: both text fields are not NULL
    foreach($xml->user as $aUser){
        if($_POST['login'] == $aUser->email && $_POST['password'] == $aUser->password){
            setcookie('usercookie', $aUser->cookie, false);
            header("Location: loggedIn.html");
            //ASSERT: set a cookie to remember us being logged in,
            //        then redirects us over
        }
        else if($_POST['login'] == $adminName && $_POST['password'] == $adminPassword){
            setcookie('usercookie', $aUser->cookie, false);
            header("Location: adminPage.php");
            //ASSERT: set a cookie to remember the administrator being
            //        logged in, so we get redirected.
        }
        else{
            header("Location: mainPage.php?attempt=0");
            //ASSERT: redirects back to the mainpage with a
            //        parameter to indicate we failed so we can
            //        alert the user.
        }
    }
}
else{
    echo "Please fill in both text fields to login.";
}

?>