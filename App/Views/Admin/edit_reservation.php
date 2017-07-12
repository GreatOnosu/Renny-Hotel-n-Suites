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
				<h1>Reservation</h1>
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
					<form action="admin/reservation" method="post">
						<input type="hidden" name="reservationid" value="<?=$row['id']?>">
					    <input type="text" id="date" name="in" value="<?=$row['check_in']?>" required/>
			    		<input type="text" id="date1" name="out" value="<?=$row['check_out']?>" required/>
					    <!-- <select name="hotel">
					    	<?php
					    		if($row['hotel'] == 'abuja'){
					    			echo "<option value='abuja'>Abuja</option>
					    				  <option value='delta'>Delta</option>
					    				  <option value='lagos'>Lagos</option>";
					    		}elseif($row['hotel'] == 'delta'){
					    			echo "<option value='delta'>Delta</option>
					    				  <option value='abuja'>Abuja</option>
					    				  <option value='lagos'>Lagos</option>";
					    		}else{
					    			echo "<option value='lagos'>Lagos</option>
					    				  <option value='abuja'>Abuja</option>
					    				  <option value='delta'>Delta</option>";
					    		}
					    	?>					      
					    </select> -->
					    <select name="payment">
					      <?php
					    		if($row['payment_mode'] == 'online'){
					    			echo "<option value='Online'>Online</option>
					    				  <option value='Cashier'>On arrival</option>";
					    		}else{
					    			echo "<option value='Cashier'>On arrival</option>
					    				  <option value='Online'>Online</option>";
					    		}
					    	?>	
					    </select>
					    <input type="number" name="amount" value="<?=$row['amount']?>" required />
					    <input type="submit" value="Update Reservation" name="reserve_update">
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
        dateFormat: 'yy-mm-dd',
        minDate   : 0
    }
    $("#date").datepicker(datepickersOpt);
    $("#date1").datepicker(datepickersOpt);
</script>
</html>