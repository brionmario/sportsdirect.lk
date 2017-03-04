
//function to display results in the weekly poll
function getVote(vote) {
	var request;
	if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    request=new XMLHttpRequest();
  } else {  // code for IE6, IE5
  	request=new ActiveXObject("Microsoft.XMLHTTP");
  }
  request.onreadystatechange=function() {
  	if (request.readyState==4 && request.status==200) {
  		document.getElementById("poll_p").innerHTML=request.responseText;
  	}
  }
  request.open("GET","poll_vote.php?vote="+vote,true);
  request.send();
}

