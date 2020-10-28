<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title></title>
	<style type="text/css">
		fieldset{
			text-align: center;
			font-size: 2em;
		}
		.avatar {
  			vertical-align: middle;
  			width: 200px;
  			height: 200px;
  			border-radius: 50%;
		}
		input{
			text-align: center;
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
		legend{
			text-align: center;
			font-size: 3em;
		}
		p{
			color: black;
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
		button:hover{
			opacity: 1;
		}

		/* Extra styles for the cancel button */
		.resetbtn{
			padding: 14px 20px;
			background-color: #f44336;
		}

		/* Float cancel and signup buttons add an equal width */
		.resetbtn, .signupbtn{
			float: center;
			width: 25%;
		}
	</style>
</head>
<body>
	<form action="process.php" method="POST" enctype="multipart/form-data">
		<legend>Register or Signup here</legend>
		<fieldset>

			<img src="jakes1.jpg" alt="Avatar" class="avatar"><br>

			<label for="name"><b>Fullnames:</b></label><br>
			<input type="text" name="name" placeholder="Enter your fullnames here..." id="name" required><br>

			<label for="email"><b>Email Address:</b></label><br>
			<input type="email" name="email" placeholder="Enter your email address here..." id="email" required><br>

			<label for="password"><b>Password:</b></label><br>
			<input type="password" name="password" placeholder="Enter your password here..." id="password" required><br>

			<label for="city"><b>City of Residence:</b></label><br>
			<input type="text" name="city" placeholder="Enter your City of Residence here..." id="city" required><br>

			<button type="reset" class="resetbtn" name="reset">Reset</button>
			<button type="submit" class="signupbtn" name="register">Signup</button>

			<p>Already have an account?Log in <a href="login.php">here</a></p>


		</fieldset>
	</form>

</body>
</html>