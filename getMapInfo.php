
<?php

$xml = simplexml_load_file("database.xml");



foreach($xml->alum as $user){

    $city = $user->city;
    $state = $user->state;
  
    $json_map = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=".$city.",+".$state."&key=AIzaSyBk1nN7imlVJ6Y_HVB3RThyCpBkl0e78nc");
    $map_info= json_decode($json_map);
    $lat = $map_info->results[0]->geometry->location->lat;
    $long = $map_info->results[0]->geometry->location->lng;
    //ASSERT: make a GEOCODE request to Google Maps, which returns to us a JSON
    //        file that we parse to get the latitude and longitude

    echo "lat is " . $lat;
    echo "long is " . $long;


}



$city = "Salem";
$state = "Virginia";



?>