
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

		var yearList = [];

		for(var i = 0; i < list.length; i++){
		    if(yearList.indexOf(list[i]['gradYear']) == -1){
			yearList.push(list[i]['gradYear']);
		    }
		}

		console.log(yearList);


		for(var i = 0; i < yearList.length; i++){
		    $("#container").append("<div id='class" + yearList[i] + " class='panel-heading panelHead'></div>");
		    $("#container").append("<div id='"+ yearList[i] +"' class='panel-body panelBody'></div>");
		}










		
	    }
	}
	//ASSERT: http request is made sending over
	//        the user information
    });







    
});
