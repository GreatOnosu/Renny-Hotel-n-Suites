<?php
if(!empty($add_room)){
	header('Location:admin/room');
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
	<?php include'includes/side_bar.php'?>
	<div id="head-flow">
		<div class="admin-nav">
			<div class="nav-head">
				<h1>Rooms</h1>
			</div>
			<div class="nav-info">
				<span style="font-size:22px;"><?=$_SESSION['entry_username']?>&nbsp;&nbsp;</span>
				<a href="admin/logout" style="text-decoration: none; color:#fff;"><span><img src="icons/logout.png" title="Logout" /></span></a>
			</div>
		</div>
		<div class="admin-body">
			<div class="body-info">
				<div class="admin-form">
					<form action="admin/addroom" method="post">
					    <input type="text" name="category" placeholder="Room Category" required />
					    <select name="branch" required>
					      <option value="">Select Branch</option>
					      <option value="Abuja">Abuja</option>
					      <option value="Delta">Delta</option>
					      <option value="Lagos">Lagos</option>
					    </select>
					    <input type="number" name="price" placeholder="Room price" required />
					    <input type="number" name="size" placeholder="Total no of Rooms" required />
					    <input type="submit" value="Add" name="room_create">
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php include'includes/admin_footer.php'?>
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