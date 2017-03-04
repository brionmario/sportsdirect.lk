<body>
<?php
$con=mysqli_connect("localhost","root","","sportsdirect");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
//if submit button is pressed and image has been uploaded
if(isset($_POST['submit']) && $_FILES['userfile']['size'] > 0)
{
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}

$sql="INSERT INTO feedback (name, email, comment, rating, picture)
VALUES
('$_POST[name]','$_POST[email]','$_POST[comment]','$_POST[rating]','$content')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);
include_once("thanks.php");

//if an image is not uploaded
}else{
	
	$sql="INSERT INTO feedback (name, email, comment, rating)
VALUES
('$_POST[name]','$_POST[email]','$_POST[comment]','$_POST[rating]')";

if (!mysqli_query($con,$sql))
  {
  die('Error: ' . mysqli_error($con));
  }

mysqli_close($con);

include_once("thanks.php");
}
?>
</body>
