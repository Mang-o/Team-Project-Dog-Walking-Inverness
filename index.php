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
		<script src="js/myScripts.js" defer></script>  
	</head>

	<body>  	
	
	<div id="page-container">
		<div id="content-wrap">
		<?php include('navigation.php'); ?>

		<div class="spacer"></div>
		<!-- Banner image for website -->
		<div class="banner"></div>


		<div class="search-wrapper">
            <input id="search-input" type="search" name="search" placeholder="Search...">               
            <button id="search-button" type="submit" name="search-submit"> <i class="fa fa-search" style="font-size:20px; color:white"></i> </button>
		</div>

		<div class="card-wrapper">

		<?php 
        /* Get booking information and display all results */
        include('php/getBooking.php');

        if(mysqli_num_rows($getBooking) > 0){
            while($bookingArray = mysqli_fetch_assoc($getBooking)){                          
        ?>

			<div class="card">
				<div class="card-title"> 
					<p> <?php echo $bookingArray['location'] ?> </p> 
					<p> <?php echo date("d/m/Y", strtotime($bookingArray['date']));?> - <?php echo $bookingArray['time'] ?> </p> 
				</div>
				<div class="card-image">
					<img src="<?php echo $bookingArray['imgSource'] ?>" alt="Park Image" style="width: 100%; object-fit: contain">
				</div>
				<div class="card-availability">
					<img src="images/avaiable-icon.svg" alt="Availability Icon">
					<p> <?php echo $bookingArray['availability']; ?></p>
				</div>
				<div class="card-button"> BOOK NOW </div>
			</div>

		<?php
		}
			}				
		?>

		</div>

		
</div>
		<?php include('footer.php'); ?>
</div>
    	

	</body>
</html>





