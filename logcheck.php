<?php

   include("connect.php");

   session_start();
   $signuser = $_POST["signuser"];
   $password = $_POST["passwordsign"];
   
   //write sql querry
   $select="select UserName,Password from user where UserName='$signuser' and Password='$password'";
   
   //Execute select SQL Querry
   $result=mysqli_query($con,$select);
   
   //read sigle row of result set
   $row=mysqli_fetch_array($result);
   
   if($row['UserName']==$signuser){

         $_SESSION["userlog"] =$signuser;
         echo "<script type='text/javascript'>alert(' LOGIN SUCCESSFULL');</script>";
      //   header("Location: home.html");
       include("home.html");
   
   }else
   {
      

   
     echo "<script type='text/javascript'>alert(' !!!Invalid Username or Password (Please enter valid username and password)!!!');</script>";


      include("signin.php");
     //  header('Location:signin.php');

      
   }
   

   //close connection
   mysqli_close($con);
   
   ?>