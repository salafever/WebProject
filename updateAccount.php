
<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$database = simplexml_load_file("database.xml");

$updatedUser = json_decode($_POST['updateUser'], true);


foreach ($database->alum as $anAlum){
    if($_COOKIE['usercookie'] == $anAlum->usercookie){
        //ASSERT: match the user's cookie with the one in the
        //        database
        $anAlum->name = $updatedUser['name'];
        $anAlum->email = $updatedUser['email'];
        $anAlum->city = $updatedUser['city'];
        $anAlum->state = $updatedUser['state'];
        $anAlum->ma1 = $updatedUser['ma1'];
        $anAlum->ma2 = $updatedUser['ma2'];
        $anAlum->ma3 = $updatedUser['ma3'];
        $anAlum->mi1 = $updatedUser['mi1'];
        $anAlum->mi2 = $updatedUser['mi2'];
        $anAlum->mi3 = $updatesUser['mi3'];

        $anAlum->title = $updatesUser['title'];
        $anAlum->phone = $updatesUser['phone'];
        $anAlum->linkedin = $updatesUser['linkedin'];
        $anAlum->desc = $updatesUser['desc'];
        $anAlum->advanced = $updatesUser['advanced'];
        
        $anAlum->gradMon = $updatedUser['gradMon'];
        $anAlum->gradYear = $updatedUser['gradYear'];
        //ASSERT: rewrite everything submitted into the database
    }
}

$database->asXML("database.xml");
header("Location: accountSettings.php");
//ASSERT: save XML and redirect

?>


