<?php

require_once('DBconnect.php');
require_once('user.php');
if (!isset($_SESSION)) {
	session_start();
}

//PDO handle
$con = new DBConnector();
$pdo = $con->connectToDB();

if (isset($_POST['register']))
{
	
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=password_hash($_POST['password'], PASSWORD_DEFAULT);
	$city=$_POST['city'];

	//user object
	$user= new User();
	//set the member variables
	$user->setName($name);
	$user->setEmail($email);
	$user->setPassword($password);
	$user->setCity($city);

	echo $user -> register($pdo);
	echo "<script>window.location='login.php'</script>";
}
if (isset($_POST['login']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];

	$user=new User();
	$user->setEmail($email);
	$user->setPassword($password);
	$userDetails=$user->login($pdo);

	$_SESSION['userId']=$userDetails['userId'];
	$_SESSION['name']=$userDetails['name'];
	$_SESSION['email']=$userDetails['email'];
	$_SESSION['city']=$userDetails['city'];
	
	echo "<script>window.location='welcome.php'</script>";
}
if (isset($_POST['change-pass']))
{
	$password = password_hash($_POST['current-pass']);
	$newPass = password_hash($_POST['new-pass'], PASSWORD_DEFAULT);
	$confirmPass = $_POST['confirm-pass'];

	if (password_verify($confirmPass, $newPass))
	{
		$user = new User();
		$user ->setPassword($password);
		$user ->setNewPass($newPass);
		$message = $user->changePassword($pdo);
		echo $message;
		header("Location: welcome.php");
	}
	else
	{
		echo "Passwords don't match...Alaaa";
	}
}


?>