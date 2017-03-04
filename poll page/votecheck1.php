<?php

	session_start();
	if(isset($_SESSION["userlog"]))
	{

	include("connect.php");
 $tsession =($_SESSION["userlog"]);

   //write sql querry

   $check="select UserName,pole from user where UserName='$tsession'";

   //Execute select SQL Querry
   $tempresult=mysqli_query($con,$check);

      //  echo "<script type='text/javascript'>alert('check 1');</script>";
   //read sigle row of result set
   $row=mysqli_fetch_array($tempresult);

       // echo "<script type='text/javascript'>alert('$row[pole]');</script>";
        if($row['pole']==1){
            echo "<script type='text/javascript'>alert('You Already Voted ');</script>";
        }



   if($row['pole']==0){
   
      
	$deadline = "2016-08-30";
	//get current date
	$todays_date = date("Y-m-d");

	//convert both dates to date data type
	$today = strtotime($todays_date);
	$expiration_date = strtotime($deadline);
	

if ($expiration_date >= $today){



     //  echo "<script type='text/javascript'>comfirm('check 2 ');</script>";
         header("Location:poll.php");
         
         }else{
           echo "<script type='text/javascript'>confirm('Sorry! The Poll deadline has expired. Please try again another time');</script>";
         //  header("Location:result.php");
           include_once"result.php";
         
         }

   }else{


     



   header("Location:pollalert.php");
    
   
   }
   
	mysqli_close($con);
    
	//prompt the user to login first
	}else{

       include_once("pleaselogin.php");

}
?>