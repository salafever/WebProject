
//Get information about the database for the administrator
//Kimi Halverson

$(document).ready(function(){

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
		
		var list = JSON.parse(response);
		var yearList = [];

		for(var i = 0; i < list.length; i++){
		    //ASSERT: grab all years without duplication
		    if(yearList.indexOf(list[i]['gradYear']) == -1){
			yearList.push(list[i]['gradYear']);
		    }
		}

		for(var i = 0; i < yearList.length; i++){
		    //ASSERT: iterate and append the proper year containers without duplication
		    $("#container").append("<div id='class" + yearList[i] + "' class='panel-heading panelHead'></div>");
		    $("#container").append("<div id='"+ yearList[i] +"' class='panel-body panelBody'></div>");
		}

		for(var i = 0; i< yearList.length; i++){
		    //ASSERT: append the name of the class to the year divs
		    $("#class"+yearList[i]).append("<p>Class of " + yearList[i] + "</p>");
		}
		
		for(var i = 0; i < list.length; i++){
		    //ASSERT: get each name and append to the corresponding year divs
		    var year = list[i]['gradYear'];
		    var id = list[i]['id'];
		    var name = list[i]['name'];
		    console.log(id);
		    $("#" + year).append("<a href='userPage.html?id=" + id + "'>" + name + "</a>");
		    $("#" + year).append("</br>");
		}	
	    }
	}
    });
});
