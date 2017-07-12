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
				<table>
					<tr>
				    	<th>SN</th>
				    	<th>Reference Code</th>
				    	<th>Full Name</th>
				    	<th>Check In</th>
				    	<th>Check Out</th>
				    	<th>Payment</th>
				    	<th>Amount</th>
				    	<th>Room</th>
				    	<th style="text-align: center;">Check In</th>
				    	<th style="text-align: center;">Edit</th>
				    	<th style="text-align: center;">Cancel</th>
				  	</tr>
				  	<?php $sn = 1;?>
				  	<?php foreach ($get_reserve as $row): ?>
				  	<tr>
				  		<td><?=$sn?></td>
				    	<td><?=$row['ref_code']?></td>
				    	<td><?=$row['full_name']?></td>
				    	<td><?=$row['check_in']?></td>
				    	<td><?=$row['check_out']?></td>
				    	<td><?=$row['payment_mode']?></td>
				    	<td>₦<?=$row['amount']?></td>
				    	<td><?=$row['room']?></td>
				    	<td><a href="Admin/reservation?checkin=<?=$row['id']?>"><input type="submit" name="reserve_in" class="book-room" value="Check In"></a></td>
				    	<td><a href="Admin/editreservation?reserveid=<?=$row['id']?>"><input type="submit" name="reserve_edit" class="book-room" value="Edit"></a></td>
				    	<td><a href="Admin/reservation?cancelid=<?=$row['id']?>"><input type="submit" name="reserve_del" class="book-room" value="Cancel"></a></td>
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