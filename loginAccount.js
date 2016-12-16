

//Kimi Halverson

var namespace ={};
namespace.success = 0;
namespace.successAdmin = 1;
namespace.failure = 2;

namespace.response;


$(document).ready(function(){
    
    $("#loginButton").on('click', function(){	
	var login = document.getElementById("email").value;
	var password = document.getElementById("password").value;
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
	    url: 'newLogin.php',
	    data: {'login': userString},
	    type: 'POST',
	    success: function(response){
		console.log(response);

		//ASSERT: we got a successful response that we store
		namespace.response = response;
	    }
	});

	if(namespace.response == namespace.success){
	    console.log("verified");
	    //ASSERT: the user was verified
	    window.location.href = 'loggedIn.html';
	}
	else if(namespace.response == namespace.successAdmin){
	    //ASSERT: the user was verified as an administrator
	    window.location.href = 'adminPage.html';
	}
	else if(namespace.response == namespace.failure){
	    //ASSERT: the user was unverified
	    window.location.href = 'mainPage.html';
	    console.log("Invalid");
	}
	

    });

});
