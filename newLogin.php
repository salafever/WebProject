
<?php


//PRE: New cookie is a randomized int
//POST: returns true if there's a duplicate int
//      in the database
function checkDuplicate($new_cookie){
    $duplicate = false;
    foreach($xml->alum as $user){
        if($new_cookie == $checkUser->usercookie){
            $duplicate = true;
        }
    }
    return($duplicate);
}

//================================================

$xml = simplexml_load_file("database.xml");
//ASSERT: open the database

foreach($xml->alum as $aUser){
    if($aUser->name == "Administrator"){
        $adminEmail = $aUser->email;
        $adminPassword = $aUser->password;
    }
}

//================================================

$loginUser = json_decode($_POST['login'], true);
//ASSERT: get the user information from the client
$inputLogin = $loginUser['login'];
$inputPass = $loginUser['password'];

//================================================

$status;
$done = false;
for($i = 0; $i < $xml->count() and !$done; $i++){
    if($inputLogin != $adminEmail){
        if($inputLogin == $xml->alum[$i]->email &&
        password_verify($inputPass, $xml->alum[$i]->password)){
            //ASSERT: the user is not the admin and is verified

            $duplicate = true;
            while($duplicate == true){
                $new_cookie = random_int(1, 10000);
                if(!checkDuplicate($new_cookie)){
                    setcookie('usercookie', $new_cookie, false);
                    $xml->alum[$i]->usercookie = $_COOKIE['usercookie'];
                    $status = 0;
                    $done = true;
                    $xml->asXML("database.xml");
                    $duplicate = false;
                }
            }
        }
        else{
            $status = 2;
        }
    }
    else{
        //ASSERT: the user is the administrator
        if($inputLogin == $adminEmail && $inputPass == $adminPassword){
            $status = 1;
            $done = true;
        }
        else{
            $status = 2;
        }
    }
}

echo $status;


?>