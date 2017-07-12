<?php
if(isset($_SESSION['hotel'])){
	$hotels = $_SESSION['hotel'];
	$in = $_SESSION['check_in'];
	$out = $_SESSION['check_out'];
	$guests = $_SESSION['guests'];
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
	<script src="js/menu.js"></script>
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
				<h1>These are the available rooms</h1>
			</div>
			<form action="hotels/reservation" method="post"><section id="selectRoom">
			<?php foreach ($rooms as $rows): ?>
			<div class="select-room">
				<img src="images/hotel_img1.jpg" align="left" height="140px"/>
				<p style="font-weight: bold; font-size: 24px;"><span><?=$rows['category']?></span><span style="float: right; color: #967a50;">₦<?=$rows['price']?></span></p>
				<p><span style="text-align: left;">Complimentary breakfast/Wifi available</span><span style="float: right; color: #967a50;"> Per Night</span></p>
				<p><span>Maximum Guest: 3</span><span style="float: right;"><input type="button" class="book-room" name="<?=$rows['category']?>" value="Book" id="<?=$rows['price']?>" /></span></p>
			</div>
			<?php endforeach;?></section>
			<div class="select-room" id="priceBox" style="height: 300px; display: none;">
				<h1>Your room choice has been saved. Click the Next to Proceed</h1>
				<input type="submit" class="btn-book btn-next" name="btn_reserve" value="Next" />
				<input type="hidden" name="room_price" id="room_price" value="" />
				<input type="hidden" name="room_type" id="room_type" value="" />
			</div>
		</div>
		<div class="booking-tab" style="padding: 10px 50px;">
			<h2>Make a reservation</h2>
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
			    <input id="date" name="in" <?php echo "value='$in'";?>/>
			    <label for="date1">CheckOut</label>
			    <input id="date1" name="out" <?php echo "value='$out'";?>/>
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