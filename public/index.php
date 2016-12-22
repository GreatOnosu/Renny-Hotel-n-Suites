<?php
	// require '../Core/Router.php';
	// $router = new Router();
	// $router->add('', ['controller'=> 'Home', 'action'=>'index']);
	// $router->add('gallery', ['controller'=> 'Home', 'action'=>'index']);

	// $url = $_SERVER['QUERY_STRING'];
	// echo "<pre>";
	// 	var_dump($router->getRoutes());
	// 	echo "</pre>";
	// if($router->match($url)){
	// 	echo "<pre>";
	// 	var_dump($router->getParams());
	// 	echo "</pre>";
	// }else{
	// 	echo "No route found for url'$url'";
	// }
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
			<h1>The Grand Experience</h1>
		</div>
	</div>
	<div id="reserve">
		<div class="intro-text">
			<h1>The Grand Experience</h1>
			<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae.</p>
		</div>
		<div class="booking-tab">
			<h2>Make a reservation</h2>
			<form id="horizon">
				<label for="chotels">Choose Hotel</label>
			    <select id="chotels" name="hotels">
			    	<option value=""></option>
			    	<option>Renny's Hotel Abuja</option>
			    	<option>Renny's Hotel Delta</option>
			    	<option>Renny's Hotel Lagos</option>
			    </select>
			    <label for="date">CheckIn</label>
			    <input id="date"/>
			    <label for="date1">CheckOut</label>
			    <input id="date1"/>
			    <label for="nguests">Number of guests</label>
			    <select id="nguests" name="guests">
			    	<option value=""></option>
			    	<option>1</option>
			    	<option>2</option>
			    	<option>3</option>
			    </select>
			    <button class="btn-book">Book</button>
			</form>
		</div>
	</div>
	<div id="our-hotels">
		<span>Our Hotels</span>
		<div class="hotels-contain">
			<div class="hotels-box">
				<div class="hotel-pix">
					<img src="images/hotel_img1.jpg">
				</div>
				<div class="hotel-view">
					<a>Renny's Hotel Abuja</a>
				</div>
			</div>
			<div class="hotels-box">
				<div class="hotel-pix">
					<img src="images/hotel_img2.jpg">
				</div>
				<div class="hotel-view">
					<a>Renny's Hotel Delta</a>
				</div>
			</div>
			<div class="hotels-box">
				<div class="hotel-pix">
					<img src="images/hotel_img3.jpg">
				</div>
				<div class="hotel-view">
					<a>Renny's Hotel Lagos</a>
				</div>
			</div>
		</div>
	</div>
	<div id="restaurant">
		<div class="key-note">
			<div class="top-color"></div>
			<h1>Get the best of african and continental dishes at our restaurant</h1>
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