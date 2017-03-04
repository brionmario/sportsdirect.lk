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
if(isset($_GET['id'])){
$id = mysql_real_escape_string($_GET['id']);
$query = mysql_query("SELECT picture FROM feedback WHERE 'id' = '$id'");
while($row = mysql_fetch_assoc($query))
{
	$imageData = $row["picture"];
}
header("content-type : image/jpeg");
echo $imageData;
}else{
	echo "error";
}
$conn->close();
?>
