<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Testimonials</title>
		<link rel="stylesheet" type="text/css" href="css/testimonials.css" />
		<link rel="stylesheet" type="text/css" href="css/quotes.css" />
		<script src="js/modernizr.custom.js"></script>
 
		<link rel="stylesheet" type="text/css" href="../css/loginButtons.css">
		<link rel="stylesheet" type="text/css" href="../css/menubar.css">
        
	<div class="logo">
		<center><img src="../images/mainlogo.png" alt="SportsDirect Logo" /></center>
    </div>
    
    <div id="buttons">
		<input type="submit" value="Sign Up" class="signup" />
		<input type="submit" value="Login" class="login" />
    </div>
    
    <style>
		div.products{
			border: 1px solid rgba(228, 228, 228, .5);
    		border-radius: 5px;
		}
		div.products:hover{
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		}

		.socialDiv{
			text-align:center;
			position:relative;
			left:550px;
			bottom:35px;
		}
		.footerAbout{
			position:relative;
			bottom:30px;
			left:10px;
			width:500px;
		}
	</style>
    
    <!--Navigation Menu -->
	<div id="menuDiv">
<br />
<nav align="center">
      <ul>
          <li class="menuText"><a href="#">HOME</a></li>
          <!--Products start here-->
          <li class="menuText"><a href="#">PRODUCTS</a>
              <ul>
                  <li class="menuSubText"><a href="#">Cricket</a>
                      <ul>
                          <li><a href="#">Gear</a></li>
                          <li><a href="#">Clothes</a></li>
                          <li><a href="#">Souvenirs</a></li>
                      </ul> 
                  </li>                   
                  <li class="menuSubText"><a href="#">Rugby</a>
                      <ul>
                          <li><a href="#">Gear</a></li>
                          <li><a href="#">Clothes</a></li>
                          <li><a href="#">Souvenirs</a></li>
                      </ul> 
                  </li>               
                  <li class="menuSubText"><a href="#">Football</a>
                       <ul>
                          <li><a href="#">Gear</a></li>
                          <li><a href="#">Clothes</a></li>
                          <li><a href="#">Souvenirs</a></li>
                      </ul> 
                  </li>
                  <li class="menuSubText"><a href="#">Badminton</a>
                  	  <ul>
                          <li><a href="#">Gear</a></li>
                          <li><a href="#">Clothes</a></li>
                          <li><a href="#">Souvenirs</a></li>
                      </ul>
                  </li>
                  <li class="menuSubText"><a href="#">Nutrition</a></li>
              </ul>
          </li>
          <!--Products ends here-->
          <li class="menuText"><a href="#">QUIZ</a></li>
          <li class="menuText"><a href="#">OUR TEAM</a></li>
          <li class="menuText"><a href="#">TESTIMONIALS</a></li>
          <li class="menuText"><a href="#">FEEDBACK</a></li>
          <li class="menuText"><a href="#">CONTACT US</a></li>
          
      </ul>
  </nav>
</div>
	<!-- Eng of the Navigation Menu -->
	<br />
	<br />
	</head>
    
	<body>
		<div class="container">
			<header class="clearfix" align="center">
				<span>Satisfied Customer</span>
				<h1>TESTIMONIALS</h1>
			</header>	
			<div class="main">
				<div id="cbp-qtrotator" class="cbp-qtrotator">
					
						<blockquote>
						  <p>
						  <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sportsdirect";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name, comment FROM feedback ORDER BY rand() LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"] ."<br>"; echo  "Comment: " . $row["comment"]. "<br>" ."<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</p>
</blockquote>

						  
						
					
						
					</div>
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/jquery.cbpQTRotator.min.js"></script>
		<script>
			$( function() {
				/*
				- how to call the plugin:
				$( selector ).cbpQTRotator( [options] );
				- options:
				{
					// default transition speed (ms)
					speed : 700,
					// default transition easing
					easing : 'ease',
					// rotator interval (ms)
					interval : 8000
				}
				- destroy:
				$( selector ).cbpQTRotator( 'destroy' );
				*/

				$( '#cbp-qtrotator' ).cbpQTRotator();

			} );
		</script>
	</body>
    
<div id="footerDiv">
	<footer class="footer" style="font-family:Roboto">
	<hr style="height:10px;border: 0;box-shadow: 0 15px 10px -15px #000 inset;" />
    <br />
    <div style="position:relative;z-index:999">
    	<center><label style="font-size:13px;color:#999;font-weight:bold">Jump To : </label>
    	<a href="../location page/location.php" class="footerLinks">Location | </a>
    	<a href="../sitemap page/sitemap.php" class="footerLinks">Sitemap | </a>
    	<a href="../poll page/weeklypoll.php" class="footerLinks">Weekly Poll </a></center>
    <center>
    <label style="font-size:11px;color:#444;font-weight:bold">© Copyright 2016 Team Scorpion | All Rights Reserved</label>
    </center>
    </div>
    
    <div class="socialDiv">
    	<label style="font-size:16px;color:#999;font-weight:500;">Connect With Us!</label><br />
        <label style="font-size:12px;color:#666;">Follow us for frequent updates!</label><br />
        
        <a href="https://www.facebook.com/sportdirectlk/" target="_blank">
        <img class="socialIco" src="../images/Social/facebook.png" alt="fb" /></a>
        <a href="https://twitter.com/sportsdirect_lk" target="_blank">
        <img class="socialIco" src="../images/Social/twitter.png" alt="twitter" /></a>
        <a href="https://plus.google.com/u/5/118251647785443544153" target="_blank">
        <img class="socialIco" src="../images/Social/g+.png" alt="g+" /></a>
    </div>
    
    <div class="footerAbout">
    	<img src="../images/teamLogo.png" />
        <div id="fAboutText" style="position:absolute;left:150px;bottom:0px">
        	<label style="font-size:13px;font-weight:400;color:#999">About Us:</label><br />
        	<label style="color:#666">We love our job and we are good at it.<br /> Come to us with your idea.<br />We will
        	make dream a reality.</label><br />
        	<a href="../team page/ourteam.html"  style="font-weight:500;color:#999;text-decoration:none">Meet Our Team</a>
        </div>
    </div>
    
	</footer>
</div>
</html>
