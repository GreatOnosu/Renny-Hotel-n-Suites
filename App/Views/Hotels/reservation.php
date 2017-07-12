<?php
if(isset($_POST['btn_reserve'])){
	$hotels = $_POST['hotels'];
	$in = $_POST['in'];
	$out = $_POST['out'];
	$guests = $_POST['guests'];
	$price = $_POST['room_price'];
	$room_type = $_POST['room_type'];
	$diff = abs(strtotime($in) - strtotime($out));
	$days = floor($diff / (60 * 60 * 24));
	$amount = $days * $price;
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
			<div class="select-room" style="height: 100px;">
				<h1>Please fill the form below to confirm reservation</h1>
			</div>	
			<form action="hotels/success" method="post" id="horizon" style="background-color: #333;">
			    <input type="text" name="fname" placeholder="Full Name" required>
			    <input type="email" name="email" placeholder="Email" required>
			    <input type="text" name="phone" placeholder="phone" required>
			    <input type="text" name="nationality" placeholder="Nationality" required>
			    <select name="mode" required>
			    	<option value="">Select payment mode</option>
			    	<option value="Cashier">Pay on Arrival</option>
			    	<option value="Online">Pay online</option>
			    </select>
			    <input type="hidden" name="amount" value="<?=$amount?>" />
			    <input type="submit" class="btn-book" name="btn_pay" value="Make Reservation">
		</div>
		<div class="booking-tab" style="padding: 10px 50px;">
			<h2>Reservation Details</h2>
				<label for="chotels">Choose Hotel</label>
			    <select id="chotels" name="hotels">
			    	<?php
			    		if($hotels == 'Abuja'){
			    			echo "<option value='Abuja'>Renny Hotel Abuja</option>";
			    		}elseif($hotels == "Delta"){
			    			echo "<option value='Delta'>Renny Hotel Delta</option>";
			    		}else{
			    			echo "<option value='Lagos'>Renny Hotel Lagos</option>";
			    		}
			    	?>
			    </select>
			    <label for="date">CheckIn</label>
			    <input id="date" <?php echo "value='$in'";?> disabled/>
			    <input type="hidden" id="date" name="in" <?php echo "value='$in'";?> />
			    <label for="date1">CheckOut</label>
			    <input id="date1" <?php echo "value='$out'";?> disabled/>
			    <input  type="hidden" id="date1" name="out" <?php echo "value='$out'";?> />
			    <input  type="hidden" name="room_type" <?php echo "value='$room_type'";?> />
			    <label for="nguests">Number of guests</label>
			    <select id="nguests" name="guests">
			    	<?php
			    		if($guests == 1){
			    			echo "<option value='1'>1</option>";
			    		}elseif($guests == 2){
			    			echo "<option value='2'>2</option>";
			    		}else{
			    			echo "<option value='3'>3</option>";
			    		}
			    	?>
			    </select>
			    <p style="color: #eee; font-size: 24px;">Price: ₦<?=$amount?></p>
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