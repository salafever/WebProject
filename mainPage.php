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
      <p id="infoParagraph">This is text that Dr. Fleenor will give us about the webpage. This will be about anything he wants. What the website and meant for, who is it meant for, what can the website do, etc. This will also tell you a little about the Physics Department as well. This little blerp will be on every single page along with a header with the tabs you can go to.</p>
    </div>
    
    <div id="theMap">
      <svg id="svgMAP" width="800px" height="800px">
	<image xlink:href="map.jpg" height="800px" width="800px"/>

      </svg>
    </div>


    


  </body>
  <script src="buttons.js"></script>
</html>
