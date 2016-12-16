
<?php

//Checks if those who aren't logged in get redirected
//Kimi Halverson


$loggedout = 0;
$loggedin = 1;
$isadmin = 2;

$xml = simplexml_load_file("database.xml");

foreach($xml->alum as $aUser){
    if($aUser->name == "Administrator"){
        $admincookie = $aUser->usercookie;
    }
}

$status = 0;
if(isset($_COOKIE['usercookie'])){
    if($_COOKIE['usercookie'] == $adminCookie){
        $status = $isadmin;
    }
    else{
        $status = $loggedin;
    }
}
else{
    $status = $loggedout;
}

echo $status;



?>