

//Author: Kimi Halverson
//Sign up Validation

//var test = $('#aTest').val();
//var aName = $("#name").val();

$(document).ready(function(){
    $("#signupButton").click(function(){
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var password = document.getElementById("password").value;

	var userObject =
	    {
		"name": name,
		"email": email,
		"password": password
	    }
	var userString = JSON.stringify(userObject);

	$.ajax({
	    url: 'signupValid.php',
	    data: {aUser: userString},
	    type: 'POST',
	    success: function(response){
		alert(response);
	    }
	});
	
	console.log(name);
	console.log(email);
	console.log(password);
	
    });
});
