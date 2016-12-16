
<?php

//================================================

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

//================================================

for($i = 0; $i < $xml->count() and !$done; $i++){
    if($inputLogin != $adminEmail){
        if($inputLogin == $xml->alum[$i]->email &&
        password_verify($inputPass, $xml->alum[$i]->password)){
            //ASSERT: the user is not the admin and is verified
            
            
        }
    }
    else{
        //ASSERT: the user is the administrator
        if($inputLogin == $adminEmail && $inputPass == $adminPassword){

        }
    }
           
}



?>