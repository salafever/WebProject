
<?php

$success = 0;
$successAdmin = 1;
$failure = 2;
$status = $failure;

$xml = simplexml_load_file("database.xml");
//ASSERT: open the database

foreach($xml->alum as $aUser){
    if($aUser->name == "Administrator"){
        $adminAccount = $aUser;
        $adminEmail = $aUser->email;
        $adminPassword = $aUser->password;
    }
}
//ASSERT: define the email and password for the administrator

$loginUser = json_decode($_POST['login'], true);
//ASSERT: get the user information from the client
$inputLogin = $loginUser['login'];
$inputPass = $loginUser['password'];

$done = false;

//ASSERT: to change if we have a verified user
for($i = 0; $i < $xml->count() and !$done; $i++){
    if($inputLogin == $xml->alum[$i]->email && password_verify($inputPass, $xml->alum[$i]->password) && $inputLogin != $adminEmail){
        //ASSERT: the user/pass is verified
        $duplicate = true;
        while($duplicate){
            //ASSERT: there is a duplicate cookie in the database
            $new_cookie = random_int(1, 10000);
            $new_Admin_cookie = random_int(1, 10000);
            if($new_cookie != $new_Admin_cookie){
                foreach($xml->alum as $checkUser){
                    if($new_cookie == $checkUser->usercookie or
                       $new_Admin_cookie == $checkUser->usercookie){
                        //ASSERT: we found a duplicate of the cookies id
                        $duplicate = false;
                    }
                }
                if($duplicate == false){
                    //ASSERT: no duplicate was found
                    setcookie('usercookie', $new_cookie, false);
                    $xml->alum[$i]->usercookie = $_COOKIE['usercookie'];
                    $xml->asXML("database.xml");
                }
            }
        }
        $done = true;
        $status = $success;
        //ASSERT: a cookie is set for the user, and we send back a 0
    }
    else if($inputLogin == $adminEmail && $inputPass == $adminPassword){
        //ASSERT: the administrator is attempting to log in and is
        //        verified
        $duplicate = true;
        while($duplicate){
            //ASSERT: there is a duplicate cookie in the database
            $other_cookie = random_int(0, 10000);
            foreach($xml->alum as $checkUser){
                if($other_cookie == $checkUser->usercookie){
                    //ASSERT: we found a duplicate of the cookie id
                    $duplicate = false;
                }
            }
            if($duplicate == false){
                //ASSERT: no duplicate was found
                setcookie('usercookie', $new_cookie, false);
                $aUser->usercookie = $new_cookie;
                $xml->asXML("database.xml");
            }
        }
        $done = true;
        $status = $successAdmin;
    }
}

echo $status;

?>