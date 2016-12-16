
<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');


$xml = simplexml_load_file("database.xml");



$userArray = array();

foreach($xml->alum as $user){
    if($user->name != "Administrator"){
    
        $city = $user->city;
        $state = $user->state;

        $location = urlencode($city . " " . $state);

        
        $json_map = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?address=".$location."&key=AIzaSyBk1nN7imlVJ6Y_HVB3RThyCpBkl0e78nc");
        
        $map_info= json_decode($json_map, true);
        $lat = $map_info['results'][0]['geometry']['location']['lat'];
        $long = $map_info['results'][0]['geometry']['location']['lng'];
        //ASSERT: make a GEOCODE request to Google Maps, which returns to us a JSON
        //        file that we parse to get the latitude and longitude

        $newUser = array(
            "name" => (string)$user->name,
            "city" => (string)$user->city,
            "state" => (string)$user->state,
            "title"=> (string)$user->title,
            "id" => (string)$user->id,
            
            "latitude" => $lat,
            "longitude" => $long
        );

        $userArray[] = $newUser;
    }
}

echo json_encode($userArray);

?>