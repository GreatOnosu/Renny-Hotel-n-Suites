<?php
if(isset($_POST['btn_book'])){
	$_SESSION['hotel'] = htmlspecialchars($_POST['hotels']);
	$_SESSION['check_in'] = htmlspecialchars($_POST['in']);
	$_SESSION['check_out'] = htmlspecialchars($_POST['out']);
	$_SESSION['guests'] = htmlspecialchars($_POST['guests']);
	header('Location:Hotels/selectRoom');
}
?>
<!DOCTYPE html>
<html>
<head runat="server">
	<base href="/RHS/public/">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Renny Hotel n Suites</title>
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
				<a>Renny Hotel n Suites</a>
			</div>
			<?php include'includes/nav.php'?>
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
			<form id="horizon" action="<?=htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
				<label for="chotels">Choose Hotel</label>
			    <select id="chotels" name="hotels" required>
			    	<option value=""></option>
			    	<option value="Abuja">Renny Hotel Abuja</option>
			    	<option value="Delta">Renny Hotel Delta</option>
			    	<option value="Lagos">Renny Hotel Lagos</option>
			    </select>
			    <label for="date">CheckIn</label>
			    <input id="date" name="in" required/>
			    <label for="date1">CheckOut</label>
			    <input id="date1" name="out" required/>
			    <label for="nguests">Number of guests</label>
			    <select id="nguests" name="guests" required>
			    	<option value=""></option>
			    	<option value="1">1</option>
			    	<option value="2">2</option>
			    	<option value="3">3</option>
			    </select>
			    <input type="submit" class="btn-book" name="btn_book" value="Book">
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
					<a href="hotels/abuja">Renny Hotel Abuja</a>
				</div>
			</div>
			<div class="hotels-box">
				<div class="hotel-pix">
					<img src="images/hotel_img2.jpg">
				</div>
				<div class="hotel-view">
					<a href="hotels/delta">Renny Hotel Delta</a>
				</div>
			</div>
			<div class="hotels-box">
				<div class="hotel-pix">
					<img src="images/hotel_img3.jpg">
				</div>
				<div class="hotel-view">
					<a href="hotels/lagos">Renny Hotel Lagos</a>
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
	<?php include'includes/footer.php'?>
</body>
<script>
      /* global setting */
    var datepickersOpt = {
        dateFormat: 'yy-mm-dd',
        minDate   : 0
    }
    $("#date").datepicker(datepickersOpt);
    $("#date1").datepicker(datepickersOpt);
</script>
</html>