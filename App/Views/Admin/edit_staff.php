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
				<h1>Staff</h1>
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
					<form action="admin/staff" method="post" id="adminPanel">
						<input type="hidden" name="updateid" value="<?=$row['id']?>">
						<label>Full Name</label>
					    <input type="text" name="fname" placeholder="Full Name" value="<?=$row['full_name']?>">
					    <label>Email</label>
					    <input type="email" name="email" placeholder="Email" value="<?=$row['email']?>">
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
					    <label>Level</label>
					    <select name="level">
					      <?php
					    		if($row['level'] == 'Admin'){
					    			echo "<option value='Admin'>Admin</option>
					    				  <option value='Staff'>Staff</option>";
					    		}else{
					    			echo "<option value='Staff'>Staff</option>
					    				  <option value='Admin'>Admin</option>";
					    		}
					    	?>	
					    </select>
					    <label>Username</label>
					    <input type="text" name="username" placeholder="Username" value="<?=$row['username']?>">
					    <label>Password</label>
					    <input type="password" name="password" value="<?=$row['password']?>">
					    <input type="submit" value="Update" name="btn_update">
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