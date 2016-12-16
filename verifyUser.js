//Authentication
//Kimi Halverson

$(document).ready(function(){
    $.ajax({
	url: 'checkAllUsers.php',
	type: 'POST',
	success: function(response){
	    //ASSERT: the cookie was cleared for the user
	    console.log(response);



	}
    });
});
