
namespace = {};
namespace.everyone;

$(document).ready(function(){


    $.ajax({
	url: 'getAccounts.php',
	type: 'POST',
	success: function(response){
	    namespace.everyone = response;
	}
    });







});
