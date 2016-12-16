
//Get information about the database for the administrator
//Kimi Halverson

$(document).ready(function(){
    $.ajax({
	url: 'getForAdmin.php',
	type: 'POST',	
	success: function(response){
	    var userArray = JSON.parse(response);

	};
    });
});
