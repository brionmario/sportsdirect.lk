<?php include_once"navbar2.php"; ?>   
<!DOCTYPE html>
<html>
	<head>
		<title>Sign-Up</title>
        <link rel="stylesheet" type="text/css" href="css/signup.css">
    	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style>
	body{
		overflow-y:scroll;
		overflow-x:hidden;
	}
	.footerClass{
		position:relative;
		top:100px;
	}
	</style>
	</head>
	<body>

		
		<form name='signup' action ='signUpProc.php' method="post";" class="form-signup">
        	<img src="images/mainlogo.png" class="img-responsive" alt="" />   
		    <h3 class="form-signin-heading">Sign Up</h3>
            <hr class="colorgraph">
            
		<label class="lbl" >Full Name :</label>
		<input class="form-control" type="text" id="fName"  name="fName" placeholder="Enter full name" required /> 	
        <br />
        
		<label class="lbl" >User Name :</label>
		<input class="form-control" type="text" id="uName"  name="uName"  placeholder="Enter user name" required />
        <br />
        
		<label class="lbl">password :</label>
		<input class="form-control" type="password" id="pw"  name="pw" placeholder="Enter password" required /> 
        <br />
        
		<label class="lbl" >Comfirm password :</label>
		<input class="form-control" type="password" id="cpw"  name="cpw" placeholder="Comfirm password" required />
        <br />
        
		<label class="lbl" >Email :</label>
		<input class="form-control" type="email" id="uemail"  name="uemail" placeholder="Enter email" required/>
        <br />
        
		<label class="lbl" >Address :</label>
		<input class="form-control" type="text" id="uaddress"  name="uaddress" placeholder="Enter address" required/>
		<br><br>
        <div style="position:relative;left:90px">             
           	<input class="btn btn-lg btn-primary btn-block" type = "submit" value = "Sign up" name="submit" style="width:50%">
                     
           	<input class="btn btn-lg btn-primary btn-block" type="reset" name="Reset" style="width:50%">
         </div>  
      </form>
      
	</body>
    <footer class="footerClass">
    <?php include_once"footer2.php"; ?>   
    </footer>
</html>
