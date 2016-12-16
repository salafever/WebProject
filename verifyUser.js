//Authentication
//Kimi Halverson

$(document).ready(function(){
    $.ajax({
	url: 'clearCookie.php',
	type: 'POST',
	success: function(response){
	    //ASSERT: the cookie was cleared for the user
	    


	    window.location.href = 'mainPage.html';
	}
    });
});
