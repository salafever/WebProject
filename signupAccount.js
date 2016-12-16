var namespace = {};
namespace.success = "\n0";
namespace.response;

//Sign up Validation

$(document).ready(function(){
    
    $("#submitButt").on('click',function(){
	//ASSERT: the sign up button has been clicked

	var checkedBox = document.getElementById("theCheckbox").checked;
	
	if (checkedBox) {
	    var name = document.getElementById("name").value;
	    var email = document.getElementById("email").value;
	    var password = document.getElementById("password").value;
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
		type: 'POST',
		success: function(response){
		    namespace.response = response;
		}
		//ASSERT: http request is made sending over
		//        the user information
	    });

	    window.location.href = 'mainPage.html';
	    // if (namespace.response == namespace.success) {
	    // 	window.location.href = 'mainPage.html';
	    // }
	}
	else {
	    alert("Please check disclaimer.");
	}

    });
			 
    
});
