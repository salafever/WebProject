
<?php



$usercookie = $_COOKIE['usercookie'];

$database = simplexml_load_file("database.xml");

foreach($database->alum as $anAlum){
    if($usercookie == $anAlum->usercookie){
        $name = $anAlum->name;
        $email = $anAlum->email;
        $city = $anAlum->city;
        $state = $anAlum->state;
        $ma1 = $anAlum->ma1;
        $ma2 = $anAlum->ma2;
        $ma3 = $anAlum->ma3;
        $mi1 = $anAlum->mi1;
        $mi2 = $anAlum->mi2;
        $mi3 = $anAlum->mi3;

        $title = $anAlum->title;
        $phone = $anAlum->phone;
        $linkedin = $anAlum->linkedin;
        $desc = $anAlum->desc;
        $advanced = $anAlum->advanced;

        $gradMon = $anAlum->gradMon;
        $gradYear = $anAlum->gradYear;
    }
}


?>