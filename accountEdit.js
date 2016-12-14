
//Author: Kimi Halverson
//Update Account

$(document).ready(function(){
    //ASSERT: the document loaded so we can populate the
    //        account
    
    $.ajax({
	url: 'getUserInfo.php',
	data: {'cookie': true},
	type: 'POST',
	//ASSERT: http request is made sending over
	//        the user information

	success: function(data){
	    var userInformation = response;
	}
    });
    

    console.log(userInformation);

    $("#submitButt").click(function(){
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
	
	var updateString = JSON.stringify(userObject);
	//ASSERT: the object is converted to a string
	
	$.ajax({
	    url: 'updateUser.php',
	    data: {'aUser': userString},
	    type: 'POST'
	    //ASSERT: http request is made sending over
	    //        the user information
	});
	
    });
});
