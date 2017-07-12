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
	<?php include'includes/side_bar.php'?>
	<div id="head-flow">
		<div class="admin-nav">
			<div class="nav-head">
				<h1>Transactions</h1>
			</div>
			<div class="nav-info">
				<span style="font-size:22px;"><?=$_SESSION['entry_username']?>&nbsp;&nbsp;</span>
				<a href="admin/logout" style="text-decoration: none; color:#fff;"><span><img src="icons/logout.png" title="Logout" /></span></a>
			</div>
		</div>
		<div class="admin-body">
			<div class="body-info">
				<div style="float: right; width: 25%;"><input type="button" class="book-room" id="printButton" value="Print"></div>
				<table border="1" cellpadding="2" id="printTable">
					<tr>
				    	<th>SN</th>
				    	<th>Reference Code</th>
				    	<th>Full Name</th>
				    	<th>Email</th>
				    	<th>Check In</th>
				    	<th>Check Out</th>
				    	<th>Amount</th>
				    	<th>status</th>
				  	</tr>
				  	<?php $sn = 1;?>
				  	<?php foreach ($get_trans as $row): ?>
				  	<tr>
				  		<td><?=$sn?></td>
				    	<td><?=$row['ref_code']?></td>
				    	<td><?=$row['full_name']?></td>
				    	<td><?=$row['email']?></td>
				    	<td><?=$row['check_in']?></td>
				    	<td><?=$row['check_out']?></td>
				    	<td>₦<?=$row['amount']?></td>
				    	<td><?=$row['status']?></td>
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