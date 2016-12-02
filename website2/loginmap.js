var myMap = function() {

    var mapOptions = {
        zoom: 4,
	center: new google.maps.LatLng(37.850033, -95.6500523),
	//ASSERT: positioning of the map
	
	scrollwheel: false,
	draggable: false,
	disableDefaultUI: true,
	//ASSERT: turn off zoom/drag control and remove the
	//        interface
	
        styles: [{"stylers":[{"visibility":"off"}]},{"featureType":"water","stylers":[{"visibility":"on"},{"color":"#2f343b"}]},{"featureType":"landscape","stylers":[{"visibility":"on"},{"color":"#cccccc"}]},{"featureType":"administrative","elementType":"geometry","stylers":[{"visibility":"on"},{"color":"#2f343b"},{"weight":0}]}]
	//ASSERT: style of the map
    };

    var mapCanvas = document.getElementById("map");
    //ASSERT: get the element of the map div

    var map = new google.maps.Map(mapCanvas, mapOptions);
    //ASSERT: create a map object


    var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
      '<div id="bodyContent">'+
      '<p>BLAH BLAH BLAH</p>'+
      '</div>'+
      '</div>';


    var myLatlng = new google.maps.LatLng(37.3860517, -122.0838511); 
    
    var marker = new google.maps.Marker({
	position: myLatlng,
	title:"Hello World!"
    });

    var infowindow = new google.maps.InfoWindow({
	content: contentString
    });

    marker.addListener('click', function() {
	infowindow.open(map, marker);
    });

    //Use Javascript to make an AJAX call to PHP asking for the
    //cities and states of everyone in the database

    //PHP will gather the information, put them into an array of objects
    //use json_encode on this

    //Echo this/somehow send it back to Javascript

    //Do the whole Javascript JSON parse thing

    //Convert to latitude and longitude
    //Place marker on the map.

    //Use a for loop
    
    // To add the marker to the map, call setMap();
    marker.setMap(map);

    
}
