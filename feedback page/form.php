<!-- Navigation bar-->
<?php 
	include_once("../navbar.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>FeedBack</title>
<!--Script for the checkbox-->
<script>
window.onload = function () {
    var myform = document.getElementById("feedbackForm");
    myform.onsubmit = function () {
        if (this.emailCB.checked && this.email.value == "") {
            alert("Please enter a valid Email address to receive updates.");
            this.email.focus();
            return false;
        }
        
        return true; //let the user proceed
    }
}
</script>

	<h1 class="form-signin-heading">Customer Feedback</h1>
    
    <link rel="stylesheet" type="text/css" href="../css/feedback.css">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css" />
    
    <style>
	body{
	  position:relative;
	  overflow-x:hidden;
	  overflow-y:scroll;
  }
	</style>
</head>

<body>

<div class="content1" >
 <form name="feedbackForm" id="feedbackForm" action="contact.php" method="post" class="form-signup" enctype="multipart/form-data">
 
    <label class="lbl"  for="name"> Name: </label></br>
    <input type="text" id="name" name="name" placeholder="Enter name..." required><br/>

    <label class="lbl" >Email Address:</label></br>
    <input type="email" name="email" placeholder="Enter a valid email address"><br/>
    
	<label class="lbl" >Comments:</label></br>
	<textarea class="tArea" name="comment" id="comment" cols="" rows="" placeholder="Enter comment here..."></textarea><br/>
   	<br>
    
    <!--Photo input-->
	<input type="hidden" name="MAX_FILE_SIZE" value="2000000">
	<input name="userfile" type="file" id="userfile" class="filestyle" data-buttonName="btn-primary"> 
	<br>
     
    <input type="checkbox" name="emailCB" id="emailCB" /> I would like to receive updates by email 
    <br>
    <br>
    <!--Star Rating-->
	<div class="stars">
        <input type="radio" name="rating" class="star-1" id="star-1" value="1"/>
        <label class="star-1" for="star-1">1</label>
        <input type="radio" name="rating" class="star-2" id="star-2" value="2"/>
        <label class="star-2" for="star-2">2</label>
        <input type="radio" name="rating" class="star-3" id="star-3" value="3"/>
        <label class="star-3" for="star-3">3</label>
        <input type="radio" name="rating" class="star-4" id="star-4" value="4"/>
        <label class="star-4" for="star-4">4</label>
        <input type="radio" name="rating" class="star-5" id="star-5" value="5"/>
        <label class="star-5" for="star-5">5</label>
        <span></span>
    </div>
    </br>
	<center>
    <input type="submit" value="Submit" name="submit" class="btn btn-danger" onClick="display()"></center>
    
    <!-- displaying the alert box comment and rating-->
    <script>
	function display(){
	var comment = document.getElementById("comment").value;
	var rating = document.feedbackForm.rating.value;
	
	alert("Summary of your rating \n " + comment + " \n" + "Rating " + rating + " stars" );
	}

	</script>
  	</form>
</div>


</body>

<footer style="position:relative;right:50px;bottom:-50px">
<?php 
	include_once("../footer.php");
?>
</footer>

</html>

