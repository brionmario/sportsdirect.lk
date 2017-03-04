
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thanks</title>

<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="../css/thanks.css">
<script>setTimeout(function(){window.location.href='../home.html'},5000);</script>
<script src="../splash page/js/splash.js" type="text/javascript"></script>
<style>
#sdLogo{
	position:relative;
	top:250px;
}
</style>
</head>

<body onload="fadeIn()">

<!--Audio Clip-->
<audio autoplay>
  <source src="../splash page/splash.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>

<div id="sdLogo"  class="logo" align="center">
<h1 id="welcome" >T H A N K S &emsp; F O R &emsp; S H O P P I N G &emsp; A T</h1><br />
	<img id="logoImg" src="../splash page/images/logo.png" alt="logo" /><br /> 
    <!--Destroys the session-->
	<?php
	session_destroy();
	header("../shopping cart/thanks.php");
	?>   
</div>

</div>
</body>
</html>
