
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
				<h1>Dashboard</h1>
			</div>
			<div class="nav-info">
				<!--span>User</span-->
				<a href="admin/logout" style="text-decoration: none; color:#fff;"><span><img src="icons/logout.png" title="Logout" /></span></a>
			</div>
		</div>
		<div class="body-links">
			<a href="Admin/staff" class="link-data" style="background-color: #63C2DE;"><div>
				<p>Staff</p>
				<p><?=$staff?></p>
			</div></a>
			<a href="Admin/reservation" class="link-data" style="background-color: #479129;"><div>
				<p>Reservations</p>
				<p><?=$reserve?></p>
			</div></a>
			<a href="Admin/room" class="link-data" style="background-color: #F8CB00;"><div>
				<p>Guests</p>
				<p><?=$room?></p>
			</div></a>
		</div>
		<div class="admin-body">	
			<div class="body-info">
				<h1 style="color: #381d40;">Last 5 Transaction</h1>
				<table>
					<tr>
						<th>SN</th>
				    	<th>Code</th>
				    	<th>Full Name</th>
				    	<th>Email</th>
				    	<th>Phone</th>
				    	<th>Check In</th>
				    	<th>Check Out</th>
				    	<th>Payment Mode</th>
				    	<th>Amount</th>
				  	</tr>
				  	<?php $sn = 1;?>
				  	<?php foreach ($trans as $row): ?>
				  	<tr>
				  		<td><?=$sn?></td>
				    	<td><?=$row['ref_code']?></td>
				    	<td><?=$row['full_name']?></td>
				    	<td><?=$row['email']?></td>
				    	<td><?=$row['phone']?></td>
				    	<td><?=$row['check_in']?></td>
				    	<td><?=$row['check_out']?></td>
				    	<td><?=$row['payment_mode']?></td>
				    	<td>₦<?=$row['amount']?></td>
					</tr><?php $sn++;?>
					<?php endforeach ;?>
				</table>
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