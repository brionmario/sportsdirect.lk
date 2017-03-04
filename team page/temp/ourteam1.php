
<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Our Team - 2</title>
		
		<link rel="stylesheet" type="text/css" href="css/team.css" />
		<link rel="stylesheet" type="text/css" href="css/component2.css" />
		<script src="js/modernizr.custom.js"></script>
     <style>
	 .home{
		 position:relative;
		 top:-13px;
	 }
	 </style>
        
	</head>
	<body>
    	
		<div class="container">
			<div id="splitlayout" class="splitlayout">
				<div class="intro">
					<div class="side side-left">
						<header class="codropsheader clearfix">
							<span>SPORTSDIRECT.LK</span>
							<h1>Our Team</h1>
							<nav>
								<a href="ourteam.php" class="bp-icon bp-icon-prev" data-info="Previous Page"><span>Previous Page</span></a>
								
								<a href="../home.html" data-info="Home" class="home"><img src="../images/glyphicon-home.png" style="position:relative;left:5px;top:4px"></a>
								<a href="ourteam2.php" class="bp-icon bp-icon-next" data-info="Next Page"><span>Next Page</span></a>
							</nav>
							<div class="demos">
								
							</div>
						</header>
						<div class="intro-content">
							<div class="profile"><img src="img/brion.png" alt="profile1"></div>
							<h1><span <span style="position:relative;right:10px">Brion Mario</span><span>Web Developer</span></h1>
						</div>
						<div class="overlay"></div>
					</div>
					<div class="side side-right">
						<div class="intro-content">
							<div class="profile"><img src="img/pavith.png" alt="profile2"></div>
							<h1><span style="position:relative;right:50px">Pavith Buddhima</span><span>Web Developer</span></h1>
						</div>
						<div class="overlay"></div>
					</div>
				</div><!-- /intro -->
				<div class="page page-right">
					<div class="page-inner">
							<section>
							<h2>Curriculum Vitae - Pavith Buddhima</h2>
						<section>
                        	<?php include 'Pavith CV.php' ?>	
						</section>
					</div><!-- /page-inner -->
				</div><!-- /page-right -->
				<div class="page page-left">
					<div class="page-inner">
						<section>
							<h2>Curriculum Vitae - Brion Mario</h2>
						<section>
                        	<?php include 'Brion CV.php' ?>	
						</section>
					</div><!-- /page-inner -->
				</div><!-- /page-left -->
				<a href="#" class="back back-right" title="back to intro">&rarr;</a>
				<a href="#" class="back back-left" title="back to intro">&larr;</a>
			</div><!-- /splitlayout -->
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/cbpSplitLayout.js"></script>
	</body>
</html>
