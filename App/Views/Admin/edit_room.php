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
					<?php foreach ($update as $row): ?>
					<form action="admin/room" method="post" id="adminPanel">
					    <input type="hidden" name="roomid" value="<?=$row['id']?>">
					    <input type="text" name="category" placeholder="Room Category" value="<?=$row['category']?>" />
					    <label>Branch</label>
					    <select name="branch">
					    	<?php
					    		if($row['branch'] == 'Abuja'){
					    			echo "<option value='Abuja'>Abuja</option>
					    				  <option value='Delta'>Delta</option>
					    				  <option value='Lagos'>Lagos</option>";
					    		}elseif($row['branch'] == 'Delta'){
					    			echo "<option value='Delta'>Delta</option>
					    				  <option value='Abuja'>Abuja</option>
					    				  <option value='Lagos'>Lagos</option>";
					    		}else{
					    			echo "<option value='Lagos'>Lagos</option>
					    				  <option value='Abuja'>Abuja</option>
					    				  <option value='Delta'>Delta</option>";
					    		}
					    	?>					      
					    </select>
					    <input type="number" name="price" placeholder="Room price" value="<?=$row['price']?>" />
					    <input type="number" name="size" placeholder="Total no of Rooms" value="<?=$row['total_rooms']?>" />
					    <input type="submit" value="Update" name="room_update">
					</form>
					<?php endforeach ;?>
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