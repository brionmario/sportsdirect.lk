<?php
	$vote = $_GET['vote'];
  
	//get content of textfile
	$filename = "poll_result.txt";

	if (!file_exists($filename)){
		$fp = fopen($filename,"w");
		fputs($fp, "0||0||0||0||0");
		fclose($fp);
	}

	$content = file($filename);

	//put content in array
	$array = explode("||", $content[0]);
	$auth0 = $array[0];
	$auth1 = $array[1];
	$auth2 = $array[2];
	$auth3 = $array[3];
	$auth4 = $array[4];

	if ($vote == 0) {
		$auth0 = $auth0 + 1;
	}
	if ($vote == 1) {
		$auth1 = $auth1 + 1;
	}
	if ($vote == 2) {
		$auth2 = $auth2 + 1;
	}
	if ($vote == 3) {
		$auth3 = $auth3 + 1;
	}
	if ($vote == 4) {
		$auth4 = $auth4 + 1;
	}
	//insert votes to txt file
	$insertvote = $auth0."||".$auth1."||".$auth2."||".$auth3."||".$auth4;
	$fp = fopen($filename,"w");

	fputs($fp,$insertvote);
	fclose($fp);

	$tot_count = ($auth0+$auth1+$auth2+$auth3+$auth4);
	$auth0_t = 100*round($auth0/$tot_count,2);
	$auth1_t = 100*round($auth1/$tot_count,2);
	$auth2_t = 100*round($auth2/$tot_count,2);
	$auth3_t = 100*round($auth3/$tot_count,2);
	$auth4_t = 100*round($auth4/$tot_count,2);
   
?><head>
<script>
$(function() {
		
	$('.progressbar').each(function(){
		var t = $(this);
		var dataperc = t.attr('data-perc'),
				barperc = Math.round(dataperc*5.56);
		t.find('.bar').animate({width:barperc}, dataperc*25);
		t.find('.label').append('<div class="perc"></div>');
		
		function perc() {
			var length = t.find('.bar').css('width'),
				perc = Math.round(parseInt(length)/5.56),
				labelpos = (parseInt(length)-2);
			t.find('.label').css('left', labelpos);
			t.find('.perc').text(perc+'%');
		}
		perc();
		setInterval(perc, 0); 
	});
});
</script>
<link rel="stylesheet" type="text/css" href="progress.css">
<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="style.css"> 
<link rel="stylesheet" type="text/css" href="../css/login.css">


<div style="position:relative;top:-60px;">
<h1 >Poll Results</h1>
<hr class="colorgraph"">

<style>
	body{
		position:relative;
		overflow-x:hidden;
		overflow-y:scroll;
	}
	</style>

</head>
<div id="body">
<body>
<form class="form-signin" style="position:relative ; top:100px">
<table>
	<tr>
		<td>Cricket</td>
		<td width="200" height="20"><br/>
			<div class="progress">
 			<div class="bar" role="progressbar" aria-valuenow="<?php echo($auth0_t); ?>"
  				aria-valuemin="0" aria-valuemax="100" style="width:<?php echo($auth0_t); ?>%">
    		<span class="sr-only"><?php echo($auth0_t); ?>%</span>
			</div>
			</div>
            
		</td>
	</tr>
	<tr>
		<td>Football</td>
		<td><br/>
			<div class="progress">
 			<div class="bar color2" role="progressbar" aria-valuenow="<?php echo($auth1_t); ?>"
  				aria-valuemin="0" aria-valuemax="100" style="width:<?php echo($auth1_t); ?>%">
    		<span class="sr-only"><?php echo($auth1_t); ?>%</span>
			</div>
			</div>
		</td>
	</tr>
	<tr>
		<td>Badminton</td>
		<td><br/>
			<div class="progress">
 			<div class="bar color3" role="progressbar" aria-valuenow="<?php echo($auth2_t); ?>"
  				aria-valuemin="0" aria-valuemax="100" style="width:<?php echo($auth2_t); ?>%">
    		<span class="sr-only"><?php echo($auth2_t); ?>%</span>
			</div>
			</div>
		</td>
	</tr>
	<tr>
		<td>Rugby</td>
		<td><br/>
			<div class="progress">
 			<div class="bar color4" role="progressbar" aria-valuenow="<?php echo($auth3_t); ?>"
  				aria-valuemin="0" aria-valuemax="100" style="width:<?php echo($auth3_t); ?>%">
    		<span class="sr-only"><?php echo($auth3_t); ?>%</span>
			</div>
			</div>
		</td>
	</tr>
	<tr>
		<td>Other</td>
		<td><br/>
			<div class="progress">
 			<div class="bar" role="progressbar" aria-valuenow="<?php echo($auth4_t); ?>"
  				aria-valuemin="0" aria-valuemax="100" style="width:<?php echo($auth4_t); ?>%">
    		<span class="sr-only"><?php echo($auth4_t); ?>%</span>
			</div>
			</div>
		</td>
	</tr>
    <tr><td><br><br><br></td></tr>
	<tr >
		<td style="text-align:center" colspan="2">Total votes : <?php echo $tot_count; ?></td>
      
	</tr>
    <tr><td><br><br></td></tr>
	<tr>
		<td style="text-align:center" colspan="2" ><legend></legend><strong><h4>Your vote : 
		
			<?php
				switch ($vote) {
					case '0':
						echo "Cricket";
						break;
					case '1':
						echo "Football";
						break;
					case '2':
						echo "Badminton";
						break;
					case '3':
						echo "Rugby";
						break;
					case '4':
						echo "Other";
						break;
				}
			?>
		</h4></strong></td>  
	</tr>
</table>
</form>
</div>
</body>
</div>