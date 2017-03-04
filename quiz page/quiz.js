var marks=0;
var correct=0;
var submission = false;
//var flag = false;

//function to display answer and calculate marks
function quiz () {
	if(!submission){
	    alert("Time Out!");
	  //  flag = true;
	}

	//get choosen answes
	var a1=document.querySelector('input[name=q1]:checked').value;
	var a2=document.querySelector('input[name=q2]:checked').value;
	var a3=document.querySelector('input[name=q3]:checked').value;
	var a4=document.querySelector('input[name=q4]:checked').value;
	var a5=document.querySelector('input[name=q5]:checked').value;
	var a6=document.querySelector('input[name=q6]:checked').value;
	var a7=document.querySelector('input[name=q7]:checked').value;
	var a8=document.querySelector('input[name=q8]:checked').value;
	var a9=document.querySelector('input[name=q9]:checked').value;
	var a10=document.querySelector('input[name=q10]:checked').value;
	marks = 0;
	correct = 0;
	//checks answers
	if(a1=="b"){
		document.getElementById('answer1').innerHTML = "&#10004";
		//document.getElementById('answer1').style.Color = "#ff1a1a";
		document.getElementById('qs1').style.backgroundColor = "#00b33c";

		marks += 2;
		correct++;
	}else{
		
		document.getElementById('answer1').innerHTML = "&#10006";
		//document.getElementById('answer1').style.Color = "#ff1a1a";
		document.getElementById('qs1').style.backgroundColor = "#ff5c33";

		marks -= 1;
	}
	if(a2=="a"){
		document.getElementById('answer2').innerHTML = "&#10004";
		document.getElementById('qs2').style.backgroundColor = "#00b33c";
		marks += 2;
		correct++;
	}else{
		document.getElementById('answer2').innerHTML = "&#10006";
		document.getElementById('qs2').style.backgroundColor = "#ff5c33";
		marks -= 1;
	}
	if(a3=="c"){
		document.getElementById('answer3').innerHTML = "&#10004";
		document.getElementById('qs3').style.backgroundColor = "#00b33c";
		marks += 2;
		correct++;
	}else{
		document.getElementById('answer3').innerHTML = "&#10006";
		document.getElementById('qs3').style.backgroundColor = "#ff5c33";
		marks -= 1;
	}
	if(a4=="b"){
		document.getElementById('answer4').innerHTML = "&#10004";
		document.getElementById('qs4').style.backgroundColor = "#00b33c";
		marks += 2;
		correct++;
	}else{
		document.getElementById('answer4').innerHTML = "&#10006";
		document.getElementById('qs4').style.backgroundColor = "#ff5c33";
		marks -= 1;
	}
	if(a5=="c"){
		document.getElementById('answer5').innerHTML = "&#10004";
		document.getElementById('qs5').style.backgroundColor = "#00b33c";
		marks += 2;
		correct++;
	}else{
		document.getElementById('answer5').innerHTML = "&#10006";
		document.getElementById('qs5').style.backgroundColor = "#ff5c33";
	}
	if(a6=="a"){
		document.getElementById('answer6').innerHTML = "&#10004";
		document.getElementById('qs6').style.backgroundColor = "#00b33c";
		marks += 2;
		correct++;
	}else{
		document.getElementById('answer6').innerHTML = "&#10006";
		document.getElementById('qs6').style.backgroundColor = "#ff5c33";
		marks -= 1;
	}
	if(a7=="c"){
		document.getElementById('answer7').innerHTML = "&#10004";
		document.getElementById('qs7').style.backgroundColor = "#00b33c";
		marks += 2;
		correct++;
	}else{
		document.getElementById('answer7').innerHTML = "&#10006";
		document.getElementById('qs7').style.backgroundColor = "#ff5c33";
		marks -= 1;
	}
	if(a8=="a"){
		document.getElementById('answer8').innerHTML = "&#10004";
		document.getElementById('qs8').style.backgroundColor = "#00b33c";
		marks += 2;
		correct++;
	}else{
		document.getElementById('answer8').innerHTML = "&#10006";
		document.getElementById('qs8').style.backgroundColor = "#ff5c33";
		marks -= 1;
	}
	if(a9=="b"){
		document.getElementById('answer9').innerHTML = "&#10004";
		document.getElementById('qs9').style.backgroundColor = "#00b33c";
		marks += 2;
		correct++;
	}else{
		document.getElementById('answer9').innerHTML = "&#10006";
		document.getElementById('qs9').style.backgroundColor = "#ff5c33";
		marks -= 1;
	}
	if(a10=="a"){
		document.getElementById('answer10').innerHTML = "&#10004";
		document.getElementById('qs10').style.backgroundColor = "#00b33c";
		marks += 2;
		correct++;
	}else{
		document.getElementById('answer10').innerHTML = "&#10006";
		document.getElementById('q10').style.backgroundColor = "#ff5c33";
		marks -= 1;


	}

	document.getElementById('player').innerHTML="Your Marks :    " + marks
	+"<br/><br/>Correct Answers :  " + correct
	+"<br/><br/>Incorrect Answers : " + (10-correct);

	//changes the background color according to total marks
    	if (marks <= 0) {
		
		document.getElementById('aa').style.backgroundColor = "#ff3300";
		//document.body.style.backgroundColor = "pink";
	} else{
		if (marks>0 && marks <=10) {
			
			document.getElementById('aa').style.backgroundColor = "#ffffcc";
			//document.body.style.backgroundColor = "khaki";
		} else{
			
			document.getElementById('aa').style.backgroundColor = "#99ffbb";
			//document.body.style.backgroundColor = "MediumSeaGreen";
		};
		
	};
    
	//set deafults when reset button is clicked
	$("#quizReset").click(function(){
		//document.body.style.backgroundColor = "MediumSeaGreen";
		document.getElementById('qs2').style.backgroundColor = "#fff";
		document.getElementById('qs1').style.backgroundColor = "#fff";
		document.getElementById('qs3').style.backgroundColor = "#fff";
		document.getElementById('qs4').style.backgroundColor = "#fff";
		document.getElementById('qs5').style.backgroundColor = "#fff";
		document.getElementById('qs6').style.backgroundColor = "#fff";
		document.getElementById('qs7').style.backgroundColor = "#fff";
		document.getElementById('qs8').style.backgroundColor = "#fff";
		document.getElementById('qs9').style.backgroundColor = "#fff";
		document.getElementById('qs10').style.backgroundColor = "#fff";
		marks=0;
		correct=0;
		$("#player").text("");
		submission = false;
		//flag = false;
		timeHandler=setTimeout(quiz,50000);
	});
}

//sets a timer for the quiz
var timeHandler=setTimeout(quiz,50000);

document.getElementById("quizSubmit").onclick=function() {
	clearInterval(timeHandler);
	submission=true;
	quiz();



};




function startTimer(duration, display) {

    
    var start = Date.now(),
    diff,
    seconds;
    function timer() {

        // get the number of seconds that have elapsed since
        // startTimer() was called
        diff = duration - (((Date.now() - start) / 1000) | 0);

        // does the same job as parseInt truncates the float
        seconds = (diff % 60) | 0;

        seconds = seconds < 10 ? "0" + seconds : seconds;
    //    if (flag)
      //      return;

        display.textContent = ":" + seconds;

        if(seconds=0){
        	return;
        }

        if (diff <= 0) {
            // add one second so that the count down starts at the full duration
            // example 05:00 not 04:59
          
         
          //start = Date.now() + 1000;
         // document.getElementById('#time').innerHTML("null");
          clearInterval(myVar);
           document.getElementByClassName('.time').innerHTML("null");


            
        }
    };
    // we don't want to wait a full second before the timer starts
    timer();
    var myVar = setInterval(timer, 1000);
}



window.onload = function () {
 //   if (flag)
      //  return;

        var seconds = 50,
        display = document.querySelector('#time');
        startTimer(seconds, display);
    
    };