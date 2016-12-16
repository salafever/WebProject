
<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$database = simplexml_load_file("database.xml");

$updatedUser = json_decode($_POST['aUser'], true);

echo $updatedUser['city'];





foreach ($database->alum as $anAlum){
    if($_COOKIE['usercookie'] == $anAlum->usercookie && $anAlum->name != "Administrator"){
        //ASSERT: match the user's cookie with the one in the
        //        database
        $anAlum->city = $updatedUser['city'];
        $anAlum->state = $updatedUser['state'];

        $anAlum->ma1 = $updatedUser['ma1'];
        $anAlum->ma2 = $updatedUser['ma2'];
        $anAlum->ma3 = $updatedUser['ma3'];
        $anAlum->mi1 = $updatedUser['mi1'];
        $anAlum->mi2 = $updatedUser['mi2'];
        $anAlum->mi3 = $updatedUser['mi3'];

        $anAlum->title = $updatedUser['title'];
        $anAlum->phone = $updatedUser['phone'];
        $anAlum->linkedin = $updatedUser['linkedin'];
        $anAlum->desc = $updatedUser['desc'];
        $anAlum->advanced = $updatedUser['advanced'];
        
        $anAlum->gradMon = $updatedUser['gradMon'];
        $anAlum->gradYear = $updatedUser['gradYear'];
        //ASSERT: rewrite everything submitted into the database
    }
}

$database->asXML("database.xml");

//ASSERT: save XML and redirect

?>


