//Author: Kimi Halverson

var buttonNamespace = {};

//PRE: The Account Settings button was clicked
//POST: Redirects the user to the Account Settings Page
buttonNamespace.toAccountSettings = function(){
    window.location.href = 'accountSettings.html';
}

//PRE: Button was clicked
//POST: Redirects the user to the main page
buttonNamespace.toMainPage = function(){
    window.location.href = 'mainPage.html';
}

//PRE: Login button was clicked
//POST: Redirects the user to the logged in version
//      of the main page.
buttonNamespace.toLoggedIn = function(){
    window.location.href = 'loggedIn.html';
}

//PRE: Signup button was clicked
//POST: Redirects the user to the sign up account page.
buttonNamespace.toSignup = function(){
    window.location.href = 'signUp.html';
}
