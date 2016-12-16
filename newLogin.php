
<?php

$xml = simplexml_load_file("database.xml");
//ASSERT: open the database

foreach($xml->alum as $aUser){
    if($aUser->name == "Administrator"){
        $adminEmail = $aUser->email;
        $adminPassword = $aUser->password;
    }
}
echo $adminEmail;

//================================================

$loginUser = json_decode($_POST['login'], true);
//ASSERT: get the user information from the client
$inputLogin = $loginUser['login'];
$inputPass = $loginUser['password'];




?>