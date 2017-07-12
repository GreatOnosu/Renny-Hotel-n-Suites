
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
			<h1>Gallery</h1>
		</div>
	</div>
	<div style="margin-top: 380px"></div>
	<div id="our-hotels" style="text-align: center;">
		<span>Explore Renny Hotel n Suites</span>
		<div class="boxes" style="text-align: justify; display: flex;">
			<div>
				<img src="images/intro_img1.jpeg" width="100%" style="position: absolute;">
				<div class="inner-img"><p>Abuja Hotel View</p></div>
			</div>
			<div>
				<img src="images/intro_img2.jpeg" width="100%" style="position: absolute;">
				<div class="inner-img"><p>Abuja Swimming Pool</p></div>
			</div>
			<div>
				<img src="images/intro_img3.jpeg" width="100%" style="position: absolute;">
				<div class="inner-img"><p>Abuja Deluxe Bed</p></div>
			</div>
			<div>
				<img src="images/intro_img4.jpg" width="100%" style="position: absolute;">
				<div class="inner-img"><p>Abuja Royal Suite</p></div>
			</div>
		</div>
		<div class="boxes" style="text-align: justify; display: flex;">
			<div>
				<img src="images/intro_img5.jpeg" width="100%" style="position: absolute;">
				<div class="inner-img"><p>Delta Royal Suite</p></div>
			</div>
			<div>
				<img src="images/intro_img6.jpeg" width="100%" style="position: absolute;">
				<div class="inner-img"><p>Delta Standard Room</p></div>
			</div>
			<div>
				<img src="images/intro_img7.jpeg" width="100%" style="position: absolute;">
				<div class="inner-img"><p>Delta Deluxe Room</p></div>
			</div>
			<div>
				<img src="images/intro_img8.jpg" width="100%" style="position: absolute;">
				<div class="inner-img"><p>Delta Swimming Pool</p></div>
			</div>
		</div>
		<div class="boxes" style="text-align: justify; display: flex;">
			<div>
				<img src="images/intro_img9.jpg" width="100%" style="position: absolute;">
				<div class="inner-img"><p>Lagos Swimming pool</p></div>
			</div>
			<div>
				<img src="images/intro_img10.jpeg" width="100%" style="position: absolute;">
				<div class="inner-img"><p>Lagos Hotel Bar</p></div>
			</div>
			<div>
				<img src="images/intro_img11.jpeg" width="100%" style="position: absolute;">
				<div class="inner-img"><p>Lagos Event Hall</p></div>
			</div>
			<div>
				<img src="images/intro_img12.jpeg" width="100%" style="position: absolute;">
				<div class="inner-img"><p>Lagos Spa View</p></div>
			</div>
		</div>
	</div>
	<?php include'includes/footer.php'?>
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