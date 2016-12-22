<?php
	// require '../Core/Router.php';
	// $router = new Router();
	// echo get_class($router);
?>
<!DOCTYPE html>
<html>
<head runat="server">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Renny's Hotel n Suites</title>
	<link href="css/magic.less" type="text/css" rel="stylesheet/less">
	<link rel="stylesheet" href="../vendor/jquery-ui.css">
    <script src="../vendor/jquery.min.js"></script>
    <script src="../vendor/jquery-ui.js"></script> 
	<script src="../vendor/less.min.js"></script>
</head>
<body>
	<div id="top-wrap">
		<div id="top-nav">
			<div class="title">
				<a>Renny's Hotel n Suites</a>
			</div>
			<div class="navigation">
				<a href="index.php">Home</a>
				<a href="our_hotels.php">Our Hotels</a>
				<a href="gallery.php">Gallery</a>
				<a href="contact_us.php">Contact Us</a>
			</div>
		</div>
		<div class="breadcrumb">
			<h1>Gallery</h1>
		</div>
	</div>
	<div style="margin-top: 380px"></div>
	<div id="our-hotels" style="text-align: center;">
		<span>Explore Renny's Hotel n Suites</span>
		<div class="boxes" style="text-align: justify; display: flex;">
			<div>
				<img src="images/intro_img1.png" width="100%" style="position: absolute;">
				<div class="inner-img"><p>Swimming pool</p></div>
			</div>
			<div>
				<img src="images/intro_img2.png" width="100%" style="position: absolute;">
				<div class="inner-img"><p>Restaurant</p></div>
			</div>
			<div>
				<img src="images/intro_img3.png" width="100%" style="position: absolute;">
				<div class="inner-img"><p>Restaurant</p></div>
			</div>
			<div>
				<img src="images/intro_img4.png" width="100%" style="position: absolute;">
				<div class="inner-img"><p>Restaurant</p></div>
			</div>
		</div>
		<div class="boxes" style="text-align: justify; display: flex;">
			<div>
				<img src="images/intro_img1.png" width="100%" style="position: absolute;">
				<div class="inner-img"><p>Swimming pool</p></div>
			</div>
			<div>
				<img src="images/intro_img2.png" width="100%" style="position: absolute;">
				<div class="inner-img"><p>Restaurant</p></div>
			</div>
			<div>
				<img src="images/intro_img3.png" width="100%" style="position: absolute;">
				<div class="inner-img"><p>Restaurant</p></div>
			</div>
			<div>
				<img src="images/intro_img4.png" width="100%" style="position: absolute;">
				<div class="inner-img"><p>Restaurant</p></div>
			</div>
		</div>
		<div class="boxes" style="text-align: justify; display: flex;">
			<div>
				<img src="images/intro_img1.png" width="100%" style="position: absolute;">
				<div class="inner-img"><p>Swimming pool</p></div>
			</div>
			<div>
				<img src="images/intro_img2.png" width="100%" style="position: absolute;">
				<div class="inner-img"><p>Restaurant</p></div>
			</div>
			<div>
				<img src="images/intro_img3.png" width="100%" style="position: absolute;">
				<div class="inner-img"><p>Restaurant</p></div>
			</div>
			<div>
				<img src="images/intro_img4.png" width="100%" style="position: absolute;">
				<div class="inner-img"><p>Restaurant</p></div>
			</div>
		</div>
	</div>
	<div id="footer">
		<span>Contact Us @ Covenant University Ota.</span>
		<p>
			<a href="" class="foot-line">Renny's Hotel Abuja</a>
			<a href="" class="foot-line">Renny's Hotel Delta</a>
			<a href="">Renny's Hotel Lagos</a>
		</p>
		<p>&copy 2016 Renny's Hotel n Suites. Designed By CU Team.</p>
	</div>
</body>
<script>
      /* global setting */
    var datepickersOpt = {
        dateFormat: 'dd-mm-yy',
        minDate   : 0
    }
    $("#date").datepicker(datepickersOpt);
    $("#date1").datepicker(datepickersOpt);
</script>
</html>