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
	<div id="reserve" style="margin-bottom: 20px;">
		<div style="background-color: #333; margin: 50px auto; width: 60%; color: #fff; text-align: center;">
			<h1>Thanks for making a reservation with us.</h1>
			<h1>Save the code below as reference code on arrival to our Hotel.</h1>
			<h1>Code: <?=$reserve?></h1>
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