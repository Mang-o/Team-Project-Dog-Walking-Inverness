<?php
/*
Author - Joshua Watkins
Title - ALBA Cruises
Since - 07/12/2021
*/
    
    include("DBConnect.php");

    $date = date("Y/m/d");
    
    #Get all available cruise results - Limit 21 (Show next 3 weeks of cruises)
    $getBooking = "SELECT * FROM DWIBooking WHERE date >= '$date' ORDER BY date ASC";
    $getBooking = mysqli_query($DB, $getBooking); 
?>