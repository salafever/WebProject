var httpRequest;

var handleResponse = function() {
    if ((httpRequest.readState === XMLHttpRequest.DONE) &&
    (httpRequest.status === 200)) {

    // This will give you the data given
    //console.log(httpRequest.responseText);
    
    uselessObject = JSON.parse(httpRequest.responseText)
    var theDiv = document.getElementById('thDiv')
    var textNode = document.creatTextNode(uselessObject.aString);

    // This tells you that you are ready when clicked.
    // console.log('I am ready');
    }
}

var buttonClicked = function () {
    console.log('button clicked')
    httpRequest.send();
}

var init = function () {
    var theButton = document.getElementById('theButton');
    theButton.addEventListener('click', buttonClicked)

    httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = handleResponse;
    httpRequest.open('GET', "https://home/stephanie/public_html/project/dataStorage.json", true);
    
}

