<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<style type="text/css">
		input{
			width: 25%;
			background-color: white;
			color: black;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}
		button{
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			cursor: pointer;
			width: 50%;
			opacity: 0.9;
		}
		/* Extra styles for the cancel button */
		.resetbtn{
			padding: 14px 20px;
			background-color: #f44336;
		}
		.resetbtn, .loginbtn{
			float: center;
			width: 25%;
		}
		legend{
			text-align: center;
			font-size: 3em;
		}
		fieldset{
			text-align: center;
			font-size: 2em;
		}
	</style>
</head>
<body>
	<form action="process.php" method="POST" enctype="multipart/form-data">
		<legend>Login here</legend>
		<fieldset>

			<label for="email"><b>Email Address:</b></label><br>
			<input type="email" name="email" placeholder="Enter your email address here..." id="email"><br>

			<label for="password"><b>Password:</b></label><br>
			<input type="password" name="password" placeholder="Enter your password here..." id="password"><br>


			<button type="submit" class="loginbtn" name="login">Login</button>
			<button type="reset" class="resetbtn" name="reset">Reset</button>

			<p>Forgot password?Then reset password <a href="change-password.php">here</a></p>

		</fieldset>
	</form>

</body>
</html>