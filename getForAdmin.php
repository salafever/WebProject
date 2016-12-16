

<?php

$xml = simplexml_load_file("database.xml");
//ASSERT: get the database


$userArray = array();
foreach($xml->alum as $user){
    if($user->name!= "Administrator"){
        $newUser = array(
            "name" => (string)$user->name;
            "gradYear"=> (string)$user->gradYear;
        );
    }
}

echo json_encode($userArray);

?>