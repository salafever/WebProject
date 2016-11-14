//Author: Kimi Halverson



//PRE: The Account Settings button was clicked
//POST: Redirects the user to the Account Settings Page
var toAccountSettings = function(){
    window.location.href = 'accountSettings.php';
}

//PRE: Button was clicked
//POST: Redirects the user to the main page
var toMainPage = function(){
    window.location.href = 'mainPage.php';
}

//PRE: Login button was clicked
//POST: Redirects the user to the logged in version
//      of the main page.
var toLoggedIn = function(){
    window.location.href = 'loggedIn.html';
}

//PRE: Signup button was clicked
//POST: Redirects the user to the sign up account page.
var toSignup = function(){
    window.location.href = 'signup.html';
}
