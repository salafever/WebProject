// The Map Functionality

// PRE: takes the latitude, longitude, city, state, job title, name, and nameID
//       of one given entry/person.
// POST: creates the marker on the map for the person given and creates the
//        box for the individual. 
var createMarker = function (aLatitude, aLongitude, aCity, aState, jobTitle,
			     aName, nameID) {

    var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">aName</h1>'+
      '<div id="bodyContent">'+
	'<p>jobTitle</p>'+ '<p>aCity + ", " + aState</p>'+
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
    
}

// PRE: The map function was called inside the html pages.
// POST: creates the map with all of the markers on the map created. 
var myMap = function(var aLatitude, var aLongitude, var aCity,
		     var aState, var jobTitle, var aName, var nameID) {

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
    marker.setMap(map);

    
}



$document.ready(function({

    $.ajax({
	url: 'signupValid.php',
	data: {'aUser': userString},
	type: 'POST',
	success: function(response){
	    //alert(response);
	}
	//ASSERT: http request is made sending over
	//        the user information
    });
    


});
