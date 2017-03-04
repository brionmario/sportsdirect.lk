<?php
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"WebTechDB");
	if(!$con){
			die("Failed to connect to the mysquli : ".mysqli_connect_error());
			}
			echo  "Connection Successful !" ;
			
?>