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

      $usercookie = $_COOKIE['usercookie'];

      $database = simplexml_load_file("database.xml");

foreach($database->alum as $anAlum){
    if($usercookie == $anAlum->usercookie){
        $name = $anAlum->name;
        $email = $anAlum->email;
        
        $city = $anAlum->city;
        $state = $anAlum->state;


        $advdeg = $anAlum->advdeg;
        $jobtitle = $anAlum->jobtitle; 
        $workphone = $anAlum->workphone; 
        $linkedin = $anAlum->linkedin; 


        $ma1 = $anAlum->ma1;
        $ma2 = $anAlum->ma2;
        $ma3 = $anAlum->ma3;
        $mi1 = $anAlum->mi1;
        $mi2 = $anAlum->mi2;
        $mi3 = $anAlum->mi3;

        $gradMon = $anAlum->gradMon;
        $gradYear = $anAlum->gradYear;


        $desc = $anAlum->desc; 
    }
}

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
	<p class="textProp">City: </p>
	<input class="theInput" name="city" type="text" value="<?php echo $city?>"></input>
	<br/>
	<p class="textProp">State: </p>
	<input class="theInput" name="state" type="text" value="<?php echo $state?>"></input>
	<br/>
    </div>

      <!-- User gives their majors and minors -->
      <p id="question">What were all your majors and minors that you graduated with?</p>
     
    
	<div id="textMaj">
    <p class="textProp">Major 1: </p>
    <input class="theInput" name="ma1" type="text" value="<?php echo $ma1?>"></input>
    <br/>
    <p class="textProp">Major 2: </p>
    <input class="theInput" name="ma2" type="text" value="<?php echo $ma2?>"></input>
    <br/>
    <p class="textProp">Major 3: </p>
    <input class="theInput" name="ma3" type="text" value="<?php echo $ma3?>"></input>
	</div>

	<div id="textMin">
    <p class="textProp">Minor 1: </p>
    <input class="theInput" name="mi1" type="text" value="<?php echo $mi1?>"></input>
    <br/>
    <p class="textProp">Minor 2: </p>
    <input class="theInput" name="mi2" type="text" value="<?php echo $mi2?>"></input>
    <br/>
    <p class="textProp">Minor 3: </p>
    <input class="theInput" name="mi3" type="text" value="<?php echo $mi3?>"></input>
	</div>
    

    <!-- User inputs advanged degree -->
    <p class="textProp">Advanced Degree: </p>
    <input type="text" name="advdeg" type="text" value="<?php echo $advdeg?>"></input>
    <br/>

    <!--User inputs Grad Date -->
    <div id="textGradDate">
	<p class="textProp">Graduation Date (Mon/Year): </p>
	<input type="text" name="gradMon" value="<?php echo $gradMon?>"></input>
	<input type="text" name="gradYear" value="<?php echo $gradYear?>"></input>
    </div>

    <!--User inputs Job information-->
    <p class="textProp">Job Title: </p>
    <input class="theInput" name="jobtitle" type="text" value="<?php echo $jobtitle?>"></input>
    <br/>

    <p class="textProp">Work Phone: </p>
    <input class="theInput" name="workphone" type="text" value="<?php echo $workphone?>"></input>
    <br/>

    <p class="textProp">LinkedIn: </p>
    <input class="theInput" name="linkedin" type="text" value="<?php echo $linkedin?>"></input>
    <br/>

    <p class="textProp">Job Description: </p>
    <input class="theInput" name="desc" type="text" value="<?php echo $desc?>"></input>
    <br/>
    
    <!-- Submit Button -->
    <input type="submit" value="Submit"></input>     
    
    </div>
    
</form>
   
    <script src="buttons.js"></script>
    
  </body>
</html>
