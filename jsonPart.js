// var httpRequest;

<<<<<<< HEAD
// var handleResponse = function() {
//     if ((httpRequest.readState === XMLHttpRequest.DONE) &&
//     (httpRequest.status === 200)) {

//     // This will give you the data given
//     //console.log(httpRequest.responseText);
    
=======
//PRE:
//POST:
// var handleResponse = function(){
//     if (httpRequest.readyState == XMLHttpRequest.DONE && httpRequest.status == 200){
// 	var infoString = httpRequest.responseText;
// 	console.log(infoString);

// 	var infoObject = JSON.parse(infoString);
// 	console.log(infoObject);
//     }
// }



// //PRE: the id of the element clicked on
// //POST: changes the contents of the 'personInfo' div to contain
// //      the information about the matching name
// var displayInfo = function(event){
//     var name = event.target.textContent;
//     console.log(name.innerHTML);

//     httpRequest = new XMLHttpRequest();
//     httpRequest.onreadystatechange = handleResponse;
//     httpRequest.open('GET', 'http://cs.roanoke.edu/~kilhalverson/website/dummy.json', true);
//     httpRequest.send();
    

// }

// var init = function(){

// }
// var handleResponse = function() {
//     if ((httpRequest.readState === XMLHttpRequest.DONE) &&
//     (httpRequest.status === 200)) {

//     // This will give you the data given
//     //console.log(httpRequest.responseText);
    
>>>>>>> 45a49020fffb63d8b6c1128ed915ccdbaf886bab
//     uselessObject = JSON.parse(httpRequest.responseText)
//     var theDiv = document.getElementById('thDiv')
//     var textNode = document.creatTextNode(uselessObject.aString);

//     // This tells you that you are ready when clicked.
//     // console.log('I am ready');
//     }
// }

// var buttonClicked = function () {
//     console.log('button clicked')
//     httpRequest.send();
// }

// var init = function () {
//     var theButton = document.getElementById('theButton');
//     theButton.addEventListener('click', buttonClicked)

//     httpRequest = new XMLHttpRequest();
//     httpRequest.onreadystatechange = handleResponse;
//     httpRequest.open('GET', "https://home/stephanie/public_html/project/dataStorage.json", true);
    
// }
<<<<<<< HEAD

var namespace = {};

namespace.xhtml = new XMLHttpRequest();

namespace.url = "adminTable.json"
=======
>>>>>>> 45a49020fffb63d8b6c1128ed915ccdbaf886bab

