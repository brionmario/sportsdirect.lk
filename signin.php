



<!DOCTYPE html>
<html>
	<head>
    
	<link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	
	<title>Log-In</title>
    <style>
	.nav{
		position:relative;
		
		}
	.wrapper{
		position:relative;
	}
	body{
		position:relative;
		overflow-y:scroll;
		overflow-x:hidden;
	}
		
	}
	</style>
    <div class="nav">
    <?php include_once"navbar2.php"; ?>    
    </div>
	</head>
    
	<body>
    <div class = "container">
	<div class="wrapper">
		<form name='sign' action="logcheck.php" method="post" name="Login_Form" class="form-signin">
        <img src="images/mainlogo.png" class="img-responsive" alt="" />   
		    <h3 class="form-signin-heading">Welcome Back! Please Sign In</h3>
			  <hr class="colorgraph"><br>
			  
		<input id="signuser" type="text" class="form-control" name="signuser" placeholder="Username" required autofocus />
		<input id="passwordsign" type="password" class="form-control" name="passwordsign" placeholder="Password" required/>
			 
		<button class="btn btn-lg btn-primary btn-block"  name="Login" value="Login" type="Submit">Login</button>
		<button class="btn btn-lg btn-primary btn-block"  name="reset" value="Reset" type="reset">Reset</button>
		<button class="btn btn-lg btn-primary btn-block" onClick="document.location.href='signup.php'" type="button"  >Sign Up</button>
		</form>
        
	</div>
</div>
</body>

<footer>
<?php include_once"footer2.php"; ?>  
</footer>
</html>