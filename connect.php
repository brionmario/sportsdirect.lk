<?php
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"SportsDirect");
	if(!$con){
			die("Failed to connect to the mysquli : ".mysqli_connect_error());
			}
			 //echo "<script type='text/javascript'>alert('Connection States : Good !');</script>";
			// echo  "Connection Successful !" ;
			
?>