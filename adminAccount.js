
//Get information about the database for the administrator
//Kimi Halverson

$(document).ready(function(){

    console.log(document.cookie);

    $.ajax({
	url: 'getForAdmin.php',
	type: 'POST', 
	success: function(response){
	    console.log(response);

	    if(response == 0){
		//redirect to the main page
		window.location.href = 'mainPage.html';
	    }
	    else if(response == 1){
		//redirect to the login page
		window.location.href = 'loggedIn.html';
	    }
	    else{
		//continue
		console.log('welcome to the admin page');


		var list = JSON.parse(response);

		












		
	    }
	}
	//ASSERT: http request is made sending over
	//        the user information
    });







    
});
