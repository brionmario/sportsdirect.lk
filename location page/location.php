
<!DOCTYPE html>
<html lang = "en-US">
	<head>
    
		<title>ContactUs</title>
		
	<style>
	body{
		overflow-y:scroll;
		overflow-x:hidden;
	}
	</style>
	</head>
	<body>
	

	</br>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="bootstrap.min.css" />
    

    <script type="text/javascript" src="jquery-1.10.2.min.js"></script>
   <?php include_once("../navbar.php") ?>
</head>
<body >

<div class="container">
<div class="page-header">
    <h1 align="center">Contact Us</small></h1>
</div>
<div style="margin-left:260px">
<div class="container">


        <div class="col-md-6">
            <div>
                <div class="panel panel-default">
                    <div class="text-center header">Our Office</div>
                    <div class="panel-body text-center">
                        <h4>Address</h4>
                        <div>
                        Information Institute of Technology<br />
                        57,Ramakrishna Road, Colombo 06, Sri Lanka.<br />
                        +94 (11) 2360 212<br />
                        pipuni.2015172@iit.ac.lk<br/>
                        www.iit.ac.lk<br/>
                        </div>
                        <hr />
                        <div id="map1" class="map">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyDW1Q-vctQAiMPdlQVRdmKsf_Tivhu7BzU"></script>
<script type="text/javascript">
    jQuery(function ($) {
        function init_map1() {
            var myLocation = new google.maps.LatLng(6.865540,79.861996);
            var mapOptions = {
                center: myLocation,
                zoom: 16
            };
            var marker = new google.maps.Marker({
                position: myLocation,
                title: "Property Location"
            });
            var map = new google.maps.Map(document.getElementById("map1"),
                mapOptions);
            marker.setMap(map);
        }
        init_map1();
    });
</script>
<style>
    .map {
        min-width: 300px;
        min-height: 300px;
        width: 100%;
        height: 100%;
    }

    .header {
        background-color: #F5F5F5;
        color: #36A0FF;
        height: 70px;
        font-size: 27px;
        padding: 10px;
    }
</style>
<!-- Contact with Map - END -->
</div>
</div>
	</body>
</html>
<?php include_once("../footer.php") ?>