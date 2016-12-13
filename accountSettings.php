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

      ?>
      
<form action="populateAccount.php" method="post">
     
      <!-- User Inputs their Name -->
      <div id="textName">
	<p class="textProp">Name: </p>
	<input class="theInput" name="name" type="text" value="<?php echo $name?>"></input>
	<p class="textProp">Email: </p>
	<input class="theInput" name="email" type="text" value="<?php echo $email?>"></input>
      </div>

      <!-- User Inputs Address -->
      <div id="textAddress">
	<p class="textProp">Street Address 1: </p>
	<input class="theInput" name="address1" type="text" value="<?php echo $address1?>"></input>
	<br/>
	<p class="textProp">Street Address 2: </p>
	<input class="theInput" name="address2" type="text" value="<?php echo $address2?>"></input>
	<br/>
	<p class="textProp">City: </p>
	<input class="theInput" name="city" type="text" value="<?php echo $city?>"></input>
	<br/>
	<p class="textProp">State: </p>
	<input class="theInput" name="state" type="text" value="<?php echo $state?>"></input>
	<br/>
	<p class="textProp">Zip Code: </p>
	<input class="theInput" name="zip" type="text" value="<?php echo $zip?>"></input>
      </div>

      <!-- User gives their majors and minors -->
      <p id="question">What were all your majors and minors that you graduated with?</p>
      
      <div id="divMinMaj">
	<div id="textMaj">
	  <p class="textProp">Major 1: </p>
	  <input class="theInput" name="ma1" type="text" value="<?php echo $ma1?>"></input>
	  <br/>
	  <p class="textProp">Major 1: </p>
	  <input class="theInput" name="ma2" type="text" value="<?php echo $ma2?>"></input>
	  <br/>
	  <p class="textProp">Major 1: </p>
	  <input class="theInput" name="ma3" type="text" value="<?php echo $ma3?>"></input>
	</div>

	<div id="textMin">
	  <p class="textProp">Minor 1: </p>
	  <input class="theInput" name="ma1" type="text" value="<?php echo $mi1?>"></input>
	  <br/>
	  <p class="textProp">Minor 2: </p>
	  <input class="theInput" name="ma2" type="text" value="<?php echo $mi2?>"></input>
      <br/>
      <p class="textProp">Minor 3: </p>
      <input class="theInput" name="ma3" type="text" value="<?php echo $mi3?>"></input>
	</div>
      </div>

      <!--User inputs Grad Date -->
      <div id="textGradDate">
	<p class="textProp">Graduation Date (Mon/Year): </p>
	<input type="text" name="gradMon" value="<?php echo $gradMon?>"></input>
	<input type="text" name="gradYear" value="<?php echo $gradYear?>"></input>
      </div>

      <!-- Submit Button -->
      <input type="submit" value="Submit"></input>     
  
    </div>
    
</form>
   
    <script src="buttons.js"></script>
    
  </body>
</html>
