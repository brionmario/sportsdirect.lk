
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" class="no-js">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Testimonials</title>
		<link rel="stylesheet" type="text/css" href="css/testimonials.css" />
		<link rel="stylesheet" type="text/css" href="css/quotes.css" />
		<script src="js/modernizr.custom.js"></script>
            
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
	<?php include_once("../navbar.php"); ?>
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
                
                <!-- 1st Comment-->
					<div class="cbp-qtcontent">
						<img src="images/avatar.png" alt="img01" />
                        <blockquote>
						
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
        //echo "Name: " . $row["name"] ."<br>"; echo  "Comment: " . $row["comment"]. "<br>" ."<br>";
		echo  "<p>{$row["comment"]}</p>";
		echo  "<footer>{$row["name"]}</footer>";
    }
} else {
    echo "0 results";
}
						$conn->close();
?>
						</blockquote>
                        
					</div>
                    
                    <!-- 2nd Comment-->
					<div class="cbp-qtcontent">
						<img src="images/avatar.png" alt="img02" />
						<blockquote>
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
        //echo "Name: " . $row["name"] ."<br>"; echo  "Comment: " . $row["comment"]. "<br>" ."<br>";
		echo  "<p>{$row["comment"]}</p>";
		echo  "<footer>{$row["name"]}</footer>";
    }
} else {
    echo "0 results";
}
						$conn->close();
?>
					</blockquote>
					</div>
                    <!-- 3rd Comment-->
					<div class="cbp-qtcontent">
						<img src="images/avatar.png" alt="img03" />
						<blockquote>
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
        //echo "Name: " . $row["name"] ."<br>"; echo  "Comment: " . $row["comment"]. "<br>" ."<br>";
		echo  "<p>{$row["comment"]}</p>";
		echo  "<footer>{$row["name"]}</footer>";
    }
} else {
    echo "0 results";
}
						$conn->close();
?>
						</blockquote>
					</div>
                    <!-- 4th Comment-->
					<div class="cbp-qtcontent">
						<img src="images/avatar.png" alt="img04" />
						<blockquote>
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
        //echo "Name: " . $row["name"] ."<br>"; echo  "Comment: " . $row["comment"]. "<br>" ."<br>";
		echo  "<p>{$row["comment"]}</p>";
		echo  "<footer>{$row["name"]}</footer>";
    }
} else {
    echo "0 results";
}
						$conn->close();
?>
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
    
	<footer >
	<?php include_once("../footer.php"); ?>
	</footer>
</div>
</html>
