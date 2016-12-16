

//Script to let the user/admin see the information
//Kimi Halverson

$(document).ready(function(){

    var url = window.location.href;
    var id = url.substring(url.indexOf("=") + 1);
    //get the id from the url
    
    $.ajax({
	url: 'getInfo.php',
	data: {'id': id},
	type: 'POST',
	//send an ajax request

	success: function(response){
	    //populate the html with the info
	    
	    var newObj = JSON.parse(response);
	    
	    document.getElementById('name').innerHTML = newObj['name'];
	    document.getElementById('email').innerHTML = newObj['email'];
	    document.getElementById('city').innerHTML = newObj['city'];
	    document.getElementById('state').innerHTML = newObj['state'];
	    
	    document.getElementById('ma1').innerHTML = newObj['ma1'];
	    document.getElementById('ma2').innerHTML = newObj['ma2'];
	    document.getElementById('ma3').innerHTML = newObj['ma3'];
	    document.getElementById('mi1').innerHMTL = newObj['mi1'];
	    document.getElementById('mi2').innerHTML = newObj['mi2'];
	    document.getElementById('mi3').innerHTML = newObj['mi3'];
	    
	    document.getElementById('title').innerHTML = newObj['title'];
	    document.getElementById('phone').innerHTML = newObj['phone'];
	    document.getElementById('linkedin').innerHTML = newObj['linkedin'];
	    document.getElementById('desc').innerHTML = newObj['desc'];
	    document.getElementById('advanced').innerHTML = newObj['advanced'];

	    document.getElementById('gradMon').innerHTML = newObj['gradMon'];
	    document.getElementById('gradYear').innerHTML = newObj['gradYear'];
	   
	}
    });

});
