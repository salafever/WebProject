

//Kimi Halverson


$(document).ready(function(){



    $("loginButton").click(function(){

	var login = document.getElementById("").value;
	var password = document.getElementById("").value;
	//ASSERT: take the username and password from the
	//        user

	var userObject =
	    {
		"login": login,
		"password": password
	    }
	//ASSERT: place into a JSON object

	var userString = JSON.stringify(userObject);
	
	$.ajax({
	    url: 'loginValid.php',
	    data: {'login': userString},



	});
	
	//Send the login/pass to the php script
	//Returns the cookie id if the login matches

	//Set the document.cookie to the new id

	//Redirect to "loggedIn.html"

    });
});
