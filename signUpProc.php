<?php
    if(isset($_POST["submit"])){
      
      session_start();
	$fName = $_POST["fName"];
	$uName = $_POST["uName"];
	$password = $_POST["pw"];
	$cpassword=$_POST["cpw"];
	$address = $_POST["uaddress"];
	$useremail = $_POST["uemail"];
        
   
          if($password==$cpassword){
	
		include("connect.php");
		
		
		
		
		 $check="select UserName from user where UserName='$uName'";

   //Execute select SQL Querry
   $logPermition=mysqli_query($con,$check);

    
   //read sigle row of result set
   $row=mysqli_fetch_array($logPermition);

     
        if($row['UserName']==$uName){
            echo "<script type='text/javascript'>confirm('The username you selected has already been taken.Please select a different username and try again!');</script>";
include "signup.php";

	
        }else{

		
		
		 
		$query ="INSERT INTO `user` (`FullName`, `UserName`, `Password`, `Email`, `Address`) VALUES ('$fName', '$uName', '$password', '$useremail', '$address')";
		$result = mysqli_query($con,$query);
		if(!$result)
			
		
			echo "Registration Successful";
			//include("signin.php");
              header('Location:signin.php');
			mysqli_close($con);
		}
		}else{
                echo "<script type='text/javascript'>alert('!!!Confirm Password Is Wrong!!! ');</script>";
                include("signup.php");
             
                  }

}else{
echo "failed";
 //header("signin.php");
}
//mysqli_close($con);

?>