<!-- Author: Kimi Halverson -->

<!DOCTYPE html>

<html>
  <head>
    <title>Roanoke College Physics</title>

    <link type="text/css" rel="stylesheet" href="homeBody.css">
    <link type="text/css" rel="stylesheet" href="mainLogin.css">

    
  </head>
  
  <body>

    <div id="header">
      <div id="logo">
	<img id="theLogo" src="logo.png"></img>
      </div>
      <p id="welcomeNote">Welcome, Admin!</p>
      
      <div id="userLogin">
	<button type="button" onclick="toMainPage()">Log Out</button>
      </div>
    </div>

    <div id="infoDiv">
      <p id="infoParagraph">Hello Alumni! Welcome to the Physics Department Alumni website where you can connect with Physics Alumni of all years. This website allows you to input your information to further connect with others around the country. Check out the map to see where other Alumni are at the moment!</p>
    </div>

    <div id="personList">
     <?php

     $database = simplexml_load_file("database.xml");

foreach($database->alum as $anAlum){
    echo "<div class='nameList'>";
    echo "<p> Class of " . $anAlum->gradYear . "</p>";
    echo "<p> Name: " . $anAlum->name . "</p>";
    echo "</div>";
}    

     ?>

    </div>

    
    
    <script src="buttons.js"></script>


  </body>
  
</html>
