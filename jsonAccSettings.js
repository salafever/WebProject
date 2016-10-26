var jsonNameString = '["Josiah Crowley"]';

var jsonEverything = {"people": [

    	{"name": "Josiah Crowley",
	 "address1": "123 Waterloo Lane",
	 "address2": "",
	 "city": "Salem",
	 "state": "Virginia",
	 "zip": "24153",
	 "ma1": "Physics",
	 "ma2": "",
	 "ma3": "",
	 "mi1": "Math",
	 "mi2": "",
	 "mi3": "",
	 "grad": "May 2009",
	 "email": "jcrowley@gmail.com"}
]}

//PRE: The element was clicked on
//POST: A div will be populated with information on the
//      name that was clicked on
var displayInfo = function(event){
    var personDiv = document.getElementById('personInfo');

    
    console.log(event.target.textContent);

    console.log(jsonEverything);
}


//PRE: Window/webpage was loaded
//POST: Adds names to the div
var addToAdmin = function(){
    var classList = document.getElementById("2009");

    var JSONnames = JSON.parse(jsonNameString);

    for(var i = 0; i < JSONames.length; i++){
	var newLi = document.createElement("li");
	var newName = document.createTextNode(JSONames[i]);
	newLi.appendChild(newName);
	newLi.addEventListener('click', displayInfo);
	classList.appendChild(newLi);
    }
}


//PRE: The window is loaded on the webpage
//POST: Populates the admin page with the names
//      of the currently registered users
//      Also sets event listeners for each name
//      populated to so when they are clicked on
//      their information is displayed
var init = function(){
    addToAdmin();
}

window.addEventListener('load', init);


