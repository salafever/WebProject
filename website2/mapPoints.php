

<?php

class Location{
    public $city;
    public $state;
}


$database = simplexml_load_file("database.xml");

$objectArray[];

foreach ($database->alum as $anAlum){
    $newLocation = new Location();
    $newLocation->city = $anAlum->city;
    $newLocation->state = $anAlum->state;

    $objectArray[] = $newLocation;
}

echo $objectArray[];



?>