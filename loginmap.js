// The Map Functionality


var createMarker = function(aLatitude, aLongitude,  aCity, aState, jobTitle,
			    aName, nameID, map) {

    var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h3 id="thirdHeading" class="thirdHeading">var aName</h1>'+
      '<div id="bodyContent">'+
	'<p value=jobTitle></p>'+ '<p value=aCity + ", " + aState></p>'+
	'<p><a href="userPage.php">See More Info</a></p>' + 
      '</div>'+
      '</div>';
    //ASSERT: what is to be in the text box for this marker 

    var myLatlng = new google.maps.LatLng(aLatitude, aLongitude); 
    //ASSERT: creates the lat and long for the marker
    
    var marker = new google.maps.Marker({
	position: myLatlng,
    });
    //ASSERT: creates the marker for the given parameters latitude and longitude
    
    var infowindow = new google.maps.InfoWindow({
	content: contentString
    });
    //ASSERT: creates the actual text box for the marker

    marker.addListener('click', function() {
	infowindow.open(map, marker);
    });
    //ASSERT: makes it capable to click on the marker to see text box

    marker.setMap(map);    

}


// PRE: takes the latitude, longitude, city, state, job title, name, and nameID
//       of one given entry/person.
// POST: creates the map with all of the markers on the map created. 
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

    return (map);
    
    // =======================================================
    
    
    //Use Javascript to make an AJAX call to PHP asking for the
    //cities and states of everyone in the database

    //PHP will gather the information, put them into an array of objects
    //use json_encode on this

    //Echo this/somehow send it back to Javascript

    //Do the whole Javascript JSON parse thing

    //Convert to latitude and longitude
    //Place marker on the map.
    
    //Use a for loop, using the function createMarker function
    
    // To add the marker to the map, call setMap();

    
}



$(document).ready(function(){   
    $.ajax({
	url: 'getMapInfo.php',
	type: 'POST',
	success: function(response){

	    var everyone = JSON.parse(response);
	    console.log(everyone);

	    console.log(everyone[0]['name']);

	    map = myMap();
	    
	    for(var i = 0; i < everyone.length; i++){
		createMarker(everyone[i]['latitude'], everyone[i]['longitude'],
			     everyone[i]['city'], everyone[i]['state'],
			     everyone[i]['title'], everyone[i]['name'],
		      everyone[i]['id'], map);
	    }


	}
	//ASSERT: http request is made sending over
	//        the user information
    });
    


});
