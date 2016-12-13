
//Author: Kimi Halverson
//Update Account

$(document).ready(function(){




    $("#submitButt").click(function(){
	//ASSERT: the sign up button has been clicked
	
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var city = document.getElementById("city").value;
	var state = document.getElementById("state").value;





	
	//ASSERT: the input data taken from the name, email, password
	
	var userObject =
	    {
		"name": name,
		"email": email,
		"password": password
	    }
	//ASSERT: information placed into a JSON object
	
	var userString = JSON.stringify(userObject);
	//ASSERT: the object is converted to a string
	
	$.ajax({
	    url: 'signupValid.php',
	    data: {'aUser': userString},
	    type: 'POST'
	    //ASSERT: http request is made sending over
	    //        the user information
	});
	
	// console.log(name);
	// console.log(email);
	// console.log(password);
	
    });
});
