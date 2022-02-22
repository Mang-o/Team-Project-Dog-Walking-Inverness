<?php
/*
Author - Joshua Watkins
Title - Local Theatre Website
Version - 1.5
Since - 22/05/2021
*/
?>

<head>
    <link type="text/css" rel="stylesheet" href="css/navBarStyles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>


<nav class="mainNav">
    <div class="navWrapper">
        <!-- Holds the display for mobile devices -->
        <div class="collapsedUI">
            <a href="index.php"> <img id="collapsedUILogo" src="images/logo.svg" alt="Local Theatr Logo" Height="45" /> </a>
            <button class="hamburger"><i class="fa fa-bars" style="font-size:20px; color:white"></i></button>
        </div>

        <!-- Navigation display changes based on user -->
        <a href="index.php"> <img id="brandLogo" src="images/logo.svg" alt="Local Theatr Logo" Height="60" /> </a>
	    <div class="navContent">
		    <ul>
		    	<li> <a href="index.php"> HOME </a> </li>
			    <li> <a href="about.php"> ABOUT </a> </li>
		    	<li> <a href="contact.php"> CONTACT </a> </li>
                <li> <a href="#"> BLOG </a> </li>
                <li> <a href="#">       </a> </li>
		    </ul>
            <ul>
                <li> <a href="#">       </a> </li>
                <li> <a href="#"> REGISTER </a> </li>
                <li> <a href="login.php"> LOGIN </a> </li>
            </ul>	
           
    </div>
</nav>


<script type="text/javascript">
    const currentLocation = location.href;
    const menuItem = document.querySelectorAll('a');
    const menuLength = menuItem.length

    for(let i = 0; i<menuLength; i++){
	    if(menuItem[i].href === currentLocation){
		    menuItem[i].className = "active"
	    }
    }
</script> 