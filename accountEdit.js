
//Author: Kimi Halverson
//Update Account

namespace = {};
namespace.userInformation;

$(document).ready(function(){

    $.ajax({
	url: 'getUserInfo.php',
	type: 'POST',

	success: function(response){
	     
	    var newObj = JSON.parse(response);

	    console.log("yo");
	    console.log(newObj);
	    	    
	    document.getElementById('name').value = newObj['name'];
	    document.getElementById('email').value = newObj['email'];
	    document.getElementById('city').value = newObj['city'];
	    document.getElementById('state').value = newObj['state'];
	    
	    document.getElementById('ma1').value = newObj['ma1'];
	    document.getElementById('ma2').value = newObj['ma2'];
	    document.getElementById('ma3').value = newObj['ma3'];
	    document.getElementById('mi1').value = newObj['mi1'];
	    document.getElementById('mi2').value = newObj['mi2'];
	    document.getElementById('mi3').value = newObj['mi3'];
	    
	    document.getElementById('title').value = newObj['title'];
	    document.getElementById('phone').value = newObj['phone'];
	    document.getElementById('linkedin').value = newObj['linkedin'];
	    document.getElementById('desc').value = newObj['desc'];
	    document.getElementById('advanced').value = newObj['advanced'];

	    document.getElementById('gradMon').value = newObj['gradMon'];
	    document.getElementById('gradYear').value = newObj['gradYear'];
	   
	}
    });


    $("#updateAccSett").click(function(){
	//ASSERT: the account update button has been clicked
	
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var city = document.getElementById("city").value;
	var state = document.getElementById("state").value;

	var ma1 = document.getElementById("ma1").value;
	var ma2 = document.getElementById("ma2").value;
	var ma3 = document.getElementById("ma3").value;
	var mi1 = document.getElementById("mi1").value;
	var mi2 = document.getElementById("mi2").value;
	var mi3 = document.getElementById("mi3").value;
	
	var title = document.getElementById("title").value;
	var phone = document.getElementById("phone").value;
	var linkedin = document.getElementById("linkedin").value;

	var desc = document.getElementById("desc").value;
	var advanced = document.getElementById("advanced").value;

	var gradMon = document.getElementById("gradMon").value;
	var gradYear = document.getElementById("gradYear").value;

	//ASSERT: the input data taken from the account setting
	//        fields
	var updateObject =
	    {
		"name": name,
		"email": email,
		"city": city,
		"state": state,

		"ma1": ma1,
		"ma2": ma2,
		"ma3": ma3,

		"mi1": mi1,
		"mi2": mi2,
		"mi3": mi3,

		"title": title,
		"phone": phone,
		"linkedin": linkedin,

		"desc": desc,
		"advanced": advanced,

		"gradMon": gradMon,
		"gradYear": gradYear
	    }
	//ASSERT: information placed into a JSON object
	
	
	var updateString = JSON.stringify(updateObject);
	//ASSERT: the object is converted to a string
	
	$.ajax({
	    url: 'updateAccount.php',
	    data: {'aUser': updateString},
	    type: 'POST',
	    //ASSERT: http request is made sending over
	    //        the user information
	    success: function(Aresponse){
		window.location.href = 'accountSettings.html';
	    }
	});
	
    });
});
