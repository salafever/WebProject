
<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

$database = simplexml_load_file("database.xml");

foreach ($database->alum as $anAlum){
    if($_COOKIE['usercookie'] == $anAlum->usercookie){
        //ASSERT: match the user's cookie with the one in the
        //        database
        $anAlum->name = $_POST['name'];
        $anAlum->email = $_POST['email'];
        $anAlum->address1 = $_POST['address1'];
        $anAlum->address2 = $_POST['address2'];
        $anAlum->city = $_POST['city'];
        $anAlum->state = $_POST['state'];
        $anAlum->zip = $_POST['zip'];
        $anAlum->ma1 = $_POST['ma1'];
        $anAlum->ma2 = $_POST['ma2'];
        $anAlum->ma3 = $_POST['ma3'];
        $anAlum->mi1 = $_POST['mi1'];
        $anAlum->mi2 = $_POST['mi2'];
        $anAlum->mi3 = $_POST['mi3'];

        $anAlum->gradMon = $_POST['gradMon'];
        $anAlum->gradYear = $_POST['gradYear'];
        //ASSERT: rewrite everything submitted into the database
    }
}

$database->asXML("database.xml");
header("Location: accountSettings.php");
//ASSERT: save XML and redirect

?>


