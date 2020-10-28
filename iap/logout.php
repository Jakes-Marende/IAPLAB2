<?php

	include_once 'DBconnect.php';
	include_once 'user.php';
	session_start();

	//PDO handle
	$con = new User();
	$pdo = $con->connectToDB();

	$user = new User();
	$user->logout($pdo);
	header("Location:login.php");


?>