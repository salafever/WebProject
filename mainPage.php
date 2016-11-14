<!-- Author: Kimi Halverson -->

<!DOCTYPE html>

<html>
  <head>

<?php

if(isset($_GET['attempt'])){
    //ASSERT: The user attempted to login and failed.
    echo "<p>Invalid username and/or password. Try again.</p>";
    unset($_GET['attempt']);
    //ASSERT: Unset the URL parameter until another attempt
    //        fails again.
}

?>

    <title>Roanoke College Physics</title>
    <link type="text/css" rel="stylesheet" href="homeBody.css">
    <link type="text/css" rel="stylesheet" href="mainLogin.css">

    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    
  </head>
  <body>
    
    <div id="header">
      <div id="logo">
	<img id="theLogo" src="logo.png"></img>
      </div>
      
      <p id="welcomeNote">Welcome!</p>
      
      <div id="userLogin">

	<form action="loginValid.php" method="post">
	  Login: <input style="width: 50px;" type="text" name="login"></input>
	  <br/>
	  Password: <input style="width: 50px;" type="text" name="password"></input>
          </br>
	  <input type="submit" value="Submit">
	  
	</form>

	<button type="button" onclick="toSignup()">Sign up</button>
	
      </div>
      
    </div>
 

    <div id="infoDiv">
      <p id="infoParagraph">Hello Alumni! Welcome to the Physics Department Alumni website where you can connect with Physics Alumni of all years. This website allows you to input your information to further connect with others around the country. Check out the map to see where other Alumni are at the moment!</p>
    </div>

     
     <div id="map" style="margin: auto; width:60%; height: 400px"></div>

    


  </body>
  <script src="buttons.js"></script>
  <script src="mainmap.js"></script>
        
  <script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>


     
</html>
