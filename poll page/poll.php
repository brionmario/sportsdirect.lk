<!-- Adds Header and Navigation to this web page. -->
<?php

include_once"../navbar.php";


?>
<?php
	echo "<title>Poll</title>"; // Overrides default page title
	session_start();
	include("connect.php");

 $qq=($_SESSION["userlog"]);
	 $query ="UPDATE user SET pole=1 WHERE UserName='$qq'" ;
		$result = mysqli_query($con,$query);
		if($result){


			echo "<script type='text/javascript'>alert('User Account Update Successfull ');</script>";

			mysqli_close($con);

		}else{
                echo "<script type='text/javascript'>alert('!!!User Account Update Unsuccessfull!!! ');</script>";


                  }





?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/login.css">

	<title>LOGIN</title>
	<style>
	body{
		position:relative;
		overflow-x:hidden;
		overflow-y:scroll;
	}
	</style>
</head>
<body>
 <div class = "container">

<center>
<form class="form-signin" style="position:relative ; top:100px">
<div id="poll_p" class="startingSection">
<h1 id="top" class="form-signin-heading">Weekly Poll</h1>
<hr class="colorgraph">
	<h4 class="form-signin-heading>"Which sport would you like the most?</h4><br>
<table>
<tr><td>
	<input type="radio" name="vote" value="0" onClick="getVote(this.value)"> Cricket<br><br></td>
    </tr>
    <tr><td>
	<input type="radio" name="vote" value="1" onClick="getVote(this.value)"> Football<br><br></td>
    </tr>
    <tr><td>
	<input type="radio" name="vote" value="2" onClick="getVote(this.value)"> Badminton<br><br></td>
    </tr>
    <tr><td>
	<input type="radio" name="vote" value="3" onClick="getVote(this.value)"> Rugby<br><br></td>
    </tr>
    <tr><td>
	<input type="radio" name="vote" value="4" onClick="getVote(this.value)"> Other<br><br></td>
    </tr>
    </table>

	<script type="text/javascript" src="scripts.js"></script>

</form>
</div>
</center>
</div>
<br><br><br><br><br><br><br><br><br><br>
<!-- Adds Footer to this web page. -->
</body>
</html>

<?php



include_once"../footer.php";


?>