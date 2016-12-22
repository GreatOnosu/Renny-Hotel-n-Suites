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
			<h1>Contact Us</h1>
		</div>
	</div>
	<div id="reserve">
		<div class="intro-text">
			<h1>Our Story</h1>
			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
		</div>
		<div class="booking-tab">
			<img src="images/about.png" width="100%">
		</div>
	</div>
	<div id="our-hotels" style="text-align: center;">
		<span>Get In Touch with Our Team</span>
		<div class="hotels-contain">
			<div class="hotels-box">
				<div class="hotel-pix">
					<img src="images/team_1.jpg" width="100%">
				</div>
				<div class="hotel-view">
					<a>Mr Great Onosu</a><br>
					<span style="font-size: 18px;">08063378707</span style="font-size: 18px;">
				</div>
			</div>
			<div class="hotels-box">
				<div class="hotel-pix">
					<img src="images/team_2.jpg" width="100%">
				</div>
				<div class="hotel-view">
					<a>Miss Ify Chinke</a><br>
					<span style="font-size: 18px;">08039202020</span style="font-size: 18px;">
				</div>
			</div>
			<div class="hotels-box">
				<div class="hotel-pix">
					<img src="images/team_3.jpg" width="100%">
				</div>
				<div class="hotel-view">
					<a>Mr Dharyhor Isreal</a><br>
					<span style="font-size: 18px;">08039643212</span style="font-size: 18px;">
				</div>
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