<?php

include_once"../navbar.php";


?>
<!-- Adds Title, Header and Navigation to this web page. -->
<!DOCTYPE html>
<html lang="en"-us>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <!--<link rel="stylesheet" href="css eke reference eka"> -->
 <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css"> 
  <!--<link rel="stylesheet" href="../css/login.css">-->
  

  <title>Quiz</title>
 <!-- <link rel="icon" href="title eke photo eka> -->
  <style>
  body{
	  position:relative;
	  overflow-x:hidden;
	  overflow-y:scroll;
  }
  </style>
</head>
<body >


   
	<header>
		<!-- <div id="headerLogo" class="container-fluid">
			<center><img src="img/logo.png"></center>
		</div> -->

		<div id="headerTitle" class="container-fluid">
		<!--	<h1 ><img src="mainlogo.png" alt="Sports Direct" /></h1>-->
		</div>  
	</header>



    <center>

        <div id="section5" class="container-fluid startingSection">
            <center>
                <h1 class="form-signin-heading" >Let's begin the quiz!</h1>
                <h2 class="form-signin-heading">You Have To Select Answers <strong>Within 50 seconds</strong>......</h2>
            </center><br />
            <div class="tcd"><h3 style="color:red">Submit within <span id="time"></span> Seconds</h3></div>
        <br />
            
            <form class="qform">
                <table id="aa">
                    <tr>
                        <td>
                            <div class="questions">
                                <div id="qs1" class="qs1">
                                    <span><strong>Question 1 : </strong></span></span> Who won the Asia Cup Cricket Tournament 2010  ?
                                </div><div><p id="answer1"></p></div>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>
                            &nbsp;&nbsp;&nbsp;<input type="radio" name="q1" value="a" checked> Srilanka&nbsp;&nbsp;
                            &nbsp;&nbsp;<input type="radio" name="q1" value="b"> India&nbsp;&nbsp;
                            &nbsp;&nbsp;<input type="radio" name="q1" value="c"> Australia
        </div><br /></td></tr>
        <tr>
            <td>

                <div class="questions">
                    <div id="qs2" class="qs2">
                        <strong>Question 2 : </strong> Who did Serena Williams beat to win 2015 Wimbledon final?
                    </div><div><p id="answer2"></p></div>
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;<input type="radio" name="q2" value="a" checked> Garbine Muguruza&nbsp;&nbsp;
                &nbsp;&nbsp;<input type="radio" name="q2" value="b"> Venus Williams&nbsp;&nbsp;
                &nbsp;&nbsp;<input type="radio" name="q2" value="c"> Awa Lvanocic
                </div><br />
            </td>
        </tr>
        <tr>
            <td>

                <div class="questions">
                    <div id="qs3" class="qs3">
                        <strong>Question 3 : </strong> The first World Cup for Soccer (Football) was held in which country in 1930?
                    </div><div><p id="answer3"></p></div>
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;<input type="radio" name="q3" value="a" checked> Brazil&nbsp;&nbsp;
                &nbsp;&nbsp;<input type="radio" name="q3" value="b"> Germany&nbsp;&nbsp;
                &nbsp;&nbsp;<input type="radio" name="q3" value="c"> Uruguay
                </div><br />
            </td>
        </tr>
        <tr>
            <td>

                <div class="questions">
                    <div id="qs4" class="qs4">
                        <strong>Question 4 : </strong>  The game of basketball was created in 1891 by whom?
                    </div><div><p id="answer4"></p></div>
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;<input type="radio" name="q4" value="a" checked> William G. Morgan &nbsp;&nbsp;
                &nbsp;&nbsp;<input type="radio" name="q4" value="b"> Dr.James Naismith&nbsp;&nbsp;
                &nbsp;&nbsp;<input type="radio" name="q4" value="c"> Berry Alan
                </div><br />
            </td>
        </tr>
        <tr>
            <td>

                <div class="questions">
                    <div id="qs5" class="qs5">
                        <strong>Question 5 : </strong> Which country will host 2015–Cricket World Cup ?
                    </div><div ><p id="answer5"></p></div>
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;<input type="radio" name="q5" value="a" checked> Australia&nbsp;&nbsp;
                &nbsp;&nbsp;<input type="radio" name="q5" value="b"> New Zealand&nbsp;&nbsp;
                &nbsp;&nbsp;<input type="radio" name="q5" value="c"> Both Australia and New Zealand
                </div><br />
            </td>
        </tr>
        <tr>
            <td>

                <div class="questions">
                    <div id="qs6" class="qs6">
                        <strong>Question 6 : </strong> Which country Won the Foot Ball Throphy which known as "EURO THROPHY" ?
                    </div><div><p id="answer6"></p></div>
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;<input type="radio" name="q6" value="a" checked> Portugal&nbsp;&nbsp;
                &nbsp;&nbsp;<input type="radio" name="q6" value="b"> Argentina&nbsp;&nbsp;
                &nbsp;&nbsp;<input type="radio" name="q6" value="c"> Brazil
                </div><br />
            </td>
        </tr>
        <tr>
            <td>

                <div class="questions">
                    <div id="qs7" class="qs7">
                        <strong>Question 7 : </strong> The proper name of the Rugby World Cup is?
                    </div><div><p id="answer7"></p></div>
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;<input type="radio" name="q7" value="a" checked> The Webb Ellis Cup&nbsp;&nbsp;
                &nbsp;&nbsp;<input type="radio" name="q7" value="b"> The Web Slinger Cup&nbsp;&nbsp;
                &nbsp;&nbsp;<input type="radio" name="q7" value="c"> Webb Ellis Cup
                </div><br />
            </td>
        </tr>
        <tr>
            <td>

                <div class="questions">
                    <div id="qs8" class="qs8">
                        <strong>Question 8 : </strong> which City and Country will host 2016 olympic games ?
                    </div><div><p id="answer8"></p></div>
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;<input type="radio" name="q8" value="a" checked> Rio de Janeiro, Brazil&nbsp;&nbsp;
                &nbsp;&nbsp;<input type="radio" name="q8" value="b"> Colombo, Srilanka&nbsp;&nbsp;
                &nbsp;&nbsp;<input type="radio" name="q8" value="c"> Tokio, Japan
                </div><br />
            </td>
        </tr>
        <tr>
            <td>

                <div class="questions">
                    <div id="qs9" class="qs9">
                        <strong>Question 9 : </strong> How many Olympic gold medals does Michael Phelps have now ?
                    </div><div ><p id="answer9"></p></div>
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;<input type="radio" name="q9" value="a" checked> 22&nbsp;&nbsp;
                &nbsp;&nbsp;<input type="radio" name="q9" value="b"> 18&nbsp;&nbsp;
                &nbsp;&nbsp;<input type="radio" name="q9" value="c"> 5
                </div><br />
            </td>
        </tr>
        <tr>
            <td>

                <div class="questions">
                    <div id="qs10" class="qs10">
                        <strong>Question 10 : </strong> What is the term for a zero score in tennis?
                    </div><div><p id="answer10"></p></div>
            </td>
        </tr>
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;<input type="radio" name="q10" value="a" checked> Love&nbsp;&nbsp;
                &nbsp;&nbsp;<input type="radio" name="q10" value="b"> Zero itself&nbsp;&nbsp;
                &nbsp;&nbsp;<input type="radio" name="q10" value="c">Let
                </div><br /><br />
            </td>
</tr></table><!-- <table>
     <tr>
<td> -->
        &nbsp;&nbsp;&nbsp;<input type="button" id="quizSubmit" class="btn btn-primary btn-primarya icon-arrow-right" ::before  value="Submit" ::after  onclick="clearInterval(myVar)"> &nbsp;&nbsp;&nbsp;</td><td>
        <a href="quiz.php"><input type="button" id="quizReset" class="btn btn-primary btn-primaryb icon-arrow-left" value="Play Again"></a>
<!--</td></tr>
       </table> -->
        </form>
        <br /><br />
        <p id="player" class="answer"></p>
        <br /><br />
        </div>



       

</center>
<script type="text/javascript" src="quiz.js"></script>

<!-- Adds Footer to this web page. -->
	
</body>
</html>
<?php



include_once"../footer.php";


?>