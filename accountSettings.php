<!DOCTYPE html>
<html>
  <head>

    <link type="text/css" rel="stylesheet" href="stylesheet.css">
    <link type="text/css" rel="stylesheet" href="homeBody.css">
    <link type="text/css" rel="stylesheet" href="mainLogin.css"> 
   
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">
    
    <title>Account Settings</title>
  </head>
  <body>

    <!-- Header tab -->
    <div id="header">
      <p id="welcomeNote">Welcome!</p>
      <h1 id="nameOfPage">Account Settings</h1>
      <div id="userLogin">
	<button type="button" onclick="toMainPage()">Log Out</button>
      </div>
    </div>

    <!-- Info Paragraph for User to see -->
    <div id="infoDiv">
      <p id="infoParagraph">Hello Alumni! Welcome to the Physics Department Alumni website where you can connect with Physics Alumni of all years. This website allows you to input your information to further connect with others around the country. Check out the map to see where other Alumni are at the moment!</p>
    </div>

    <div id="bodyDiv">

      <?php

      $database = simplexml_load_file("database.xml");


      ?>
      

     
      <!-- User Inputs their Name -->
      <div id="textName">
	<p class="textProp">Name: </p>
	<input class="theInput" type="text" value=></input>
	<p class="textProp">Email: </p>
	<input class="theInput" type="text"></input>
      </div>

      <!-- User Inputs Address -->
      <div id="textAddress">
	<p class="textProp">Street Address 1: </p>
	<input class="theInput" type="text"></input>
	<br/>
	<p class="textProp">Street Address 2: </p>
	<input class="theInput" type="text"></input>
	<br/>
	<p class="textProp">City: </p>
	<input class="theInput" type="text"></input>
	<br/>
	<p class="textProp">State: </p>
	<input class="theInput" type="text"></input>
	<br/>
	<p class="textProp">Zip Code: </p>
	<input class="theInput" type="text"></input>
      </div>

      <!-- User gives their majors and minors -->
      <p id="question">What were all your majors and minors that you graduated with?</p>
      
      <div id="divMinMaj">
	<div id="textMaj">
	  <p class="textProp">Major 1: </p>
	  <input class="theInput" type="text"></input>
	  <br/>
	  <p class="textProp">Major 1: </p>
	  <input class="theInput" type="text"></input>
	  <br/>
	  <p class="textProp">Major 1: </p>
	  <input class="theInput" type="text"></input>
	</div>

	<div id="textMin">
	  <p class="textProp">Minor 1: </p>
	  <input class="theInput" type="text"></input>
	  <br/>
	  <p class="textProp">Minor 2: </p>
	  <input class="theInput" type="text"></input>
      <br/>
      <p class="textProp">Minor 3: </p>
      <input class="theInput" type="text"></input>
	</div>
      </div>

      <!--User inputs Grad Date -->
      <div id="textGradDate">
	<p class="textProp">Graduation Date (Mon/Year): </p>
	<input type="text"></input>
	<input type="text"></input>
      </div>

      <!-- Submit Button -->
      <button id="submitButton" type="button">Submit</button>     
  
    </div>

    <script src="jsonAccSettings.js"></script>
    <script src="buttons.js"></script>
    
  </body>
</html>
