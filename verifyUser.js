//Authentication
//Kimi Halverson

$(document).ready(function(){
    $.ajax({
	url: 'checkAllUsers.php',
	type: 'POST',
	success: function(response){
	    console.log(response);

	    if(response == 0){
		window.location.href = 'mainPage.html';
	    }
	    else if(response == 2){
		window.location.href = 'adminPage.html';
	    }

	}
    });
});
