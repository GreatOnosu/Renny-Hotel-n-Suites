<?php
	$checker = '<span>Sign in</span>';
	if(isset($_POST['btn_login'])){
		if(!empty($_POST['username']) && !empty($_POST['password'])){
			$_SESSION['session_name'] = $_POST['username'];
			if(!empty($login)){
				foreach ($login as $value) {
					$_SESSION['session_level'] = $value['level'];
					$_SESSION['entry_username'] = $value['username'];
					$_SESSION['entry_branch'] = $value['branch'];
				}
				header('Location:admin/index');
			}else{
				$checker = '<span style="color:#967a50;">Invalid username or password</span>';
			}
		}else{
			$checker = '<span style="color:#967a50;">Please enter username and password</span>';
		}
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
	<div id="top-wrap" style="background-image: none;">
		<div id="top-nav" style="text-align: center;">
			<div class="title" style="float: none;">
				<a>Renny Hotel n Suites</a>
			</div>
		</div>
	</div>
	<div class="login-container">
		<div class="login-main">
			<h1>Welcome to System Login</h1>
			<h1><?=$checker?></h1>
			<form id="horizon" action="" method="post">
			    <input type="text" name="username" placeholder="Username">
			    <input type="password" name="password" placeholder="Password">
			   	<input type="submit" name="btn_login" id="btn-login" value="Login">
			</form>
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