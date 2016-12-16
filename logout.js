//Log out js
//Kimi Halverson

$(document).ready(function(){
    $("#logoutButton").click(function(){
	//ASSERT: the user pressed the log out button
	$.ajax({
	    url: 'clearCookie.php',
	    type: 'POST',
	    success: function(response){
		//ASSERT: the cookie was cleared for the user
		window.location.href = 'mainPage.html';
	    }
	});
    });
});
