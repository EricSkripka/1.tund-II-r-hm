<?php

  //GET ja POSTi muutujad
  //var_dump ($_GET);
  //echo "<br>";
  //var_dump ($_POST);
  
  $signupEmailError= "";  
 
  // on üldse olemas selline muutuja
  if(isset($_POST["signupEmail"] ) ) {

	  //jah on olemas
	  //kas on tühi
	  if( empty($_POST["signupEmail"] ) ) {
		  $signupEmailError="see väli on kohustuslik";
	  }
	
	
		   
  }
  
  $signupPasswordError= "";
	   if(isset($_POST["signupPassword"] ) ) {
		   
		   if( empty($_POST["signupPassword"]) ) {
		   $signupPasswordError= "see väli on kohustuslik";
	   }
	   
	   }
	   
	   
  
     else {
	 // siia jõuan siis kui parool oli olemas - isset
	 // parool ei olnud tühi -empty
	 
	 if (strlen($_POST["signupPassword"]) < 8 ) {
		 
		 $signupPasswordError = "Parool peab olema vähemalt 8 tähemärki pikk";
	 }
	 
	 
	 }
   
   
?>





<!DOCTYPE html>
<html>
<head>
<title>Logi sisse või loo kasutaja</title>
</head>
<body>

<h1>Logi sisse</h1>
<form method="post">

 <label>E-post<label/>
 <br>		
 <input name="loginEmail" type="text">
 <br><br>
 <input name="loginpassword" placeholder="parool" type="password">
 <br><br>
 
 <input type="submit" value="logi sisse">

<form/>


</body>
</html>

<h1>Loo kasutaja</h1>
<form method="post">

 <label>E-post<label/>
 <br>		
 <input name="signupEmail" type="text"> <?php echo $signupEmailError; ?>
 <br><br>
 <input name="signupPassword" placeholder="parool" type="password">
 <br><br>
 
 <input type="submit" value="loo kasutaja">

<form/>