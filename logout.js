
$(document).ready(function(){
    $("#logoutButton").click(function(){

	$.ajax({
	    url: 'clearCookie.php',
	    type: 'POST',
	    success: function(response){
	
	    }
	});
  

    });

});
