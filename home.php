<?php
include "config.php";

if(!isset($_SESSION['username']))
{
	header('location: index.php');
}
?>

<!doctype html>
<html lang = "en">
<head>
<meta charset="utf-8">
<title>Homepage</title>
	
	<link href = "css/style.css" type = "text/css" rel = "stylesheet">
</head>

<body>
	<header>
		<div class = "tint">
			<div class = "container">
	  			<h1></h1>
				<a href = "#" class = "btn" >Get Started</a>
		  	</div>
			<div class = "Sign_In">
  				<a href = "#" onClick="location.href='singin.html'" class = "SignIn">Sign In</a>
				<h2 style="display:inline;">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp|</h2>
				<a href = "#" onClick="location.href='singio.html'" class = "SignUp">Sign Up</a>
			</div>
			<div class = "Logo">
				<img src = "Logo/Logo White.png" width="150" height="150" alt = "Bonono" />
			</div>
	  	</div>
	</header>
</body>
</html>