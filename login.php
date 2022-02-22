<?php
/*
Author - Joshua Watkins
Title - ALBA Cruises
Since - 13/12/2021
*/
?>

<!DOCTYPE HTML>
<html>
	<head>
    	<title> DWI | Home </title>
    	<meta charset="utf-8" />
    	<meta name="viewport" content="width=device-width, initial-scale=1" />
    	<link rel="icon" href="images/logo-notxt.svg" type="image/x-icon" sizes="16x16">
    	<link type="text/css" rel="stylesheet" href="css/myStyleSheet.css" />
	</head>


	<body>  	
		<div id="page-container">
			<div id="content-wrap">
		<?php include('navigation.php'); ?>


		<div class="spacer"></div>
		<!-- Banner image for website -->
		<div class="banner"></div>

		<div class="login-wrapper">
			<div class="content-title">
				<h2> LOG IN </h2>
			</div>
			<div class="content-container">
				<form class="login-form">
					<label for="email"> Email </label>
					<input type="email">
					<label for="password"> Password </label>
					<input type="password">
					<a href="#"> Don't have an account? <strong> Register here! </strong></a>
					<button type="Submit"> Submit </button>
				</form>
			</div>

		</div>
		</div>
		<?php include('footer.php'); ?>
	</div>
    	<script src="js/myScripts.js"></script>  

	</body>
</html>





