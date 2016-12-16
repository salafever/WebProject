
<?php

//Grab information for administrator page
//Kimi Halverson


$xml = simplexml_load_file("database.xml");
//ASSERT: get the database

$admincookie;
foreach($xml->alum as $user){
    if($user->name == "Administrator"){
        //ASSERT: we found the administrator
        $admincookie = $user->usercookie;
    }
}

$currentcookie = $_COOKIE['usercookie'];
$userArray = array();
if(isset($_COOKIE['usercookie'])){
    if($admincookie == $currentcookie){
        //ASSERT: we're logged in as the admin
        foreach($xml->alum as $user){
            if($user->name != "Administrator"){
                $newUser = array(
                    "name"=>(string)$user->name,
                    "gradYear"=>(string)$user->gradYear,
                    "id" =>(string)$user->id
                );
                $userArray[] = $newUser;
            }
        }
        echo json_encode($userArray);
    }
    else{
        //ASSERT: we're logged in, just not as the user
        echo 1;
    }
}
else{
    //ASSERT: we're not logged in at all
    echo 0;
}


?>