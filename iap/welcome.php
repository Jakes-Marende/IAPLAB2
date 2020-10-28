<?php
	session_start();
	if (!isset($_SESSION['name']))
	{
		header("Location: login.php");
	}

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<style type="text/css">
		.avatar {
  			vertical-align: middle;
  			width: 200px;
  			height: 200px;
  			border-radius: 50%;
		}
		body{
			text-align: center;
			font-size: 3em;
		}
	</style>
	<title></title>
</head>
<body>
	<img src="jakes1.jpg" alt="Avatar" class="avatar"><br>
	<p>Full Name: <?php echo $_SESSION['name'] ?></p>
	<p>Email: <?php echo $_SESSION['email'] ?></p>
	<p>Full Name: <?php echo $_SESSION['city'] ?></p>
	<p>Wanna logout?If so, then logout <a href="logout.php">here</a></p>
	<p>Forgot password? Change it over <a href="change-password.php">here</a></p>

</body>
</html>