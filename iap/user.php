<?php
include_once 'interface.php';
class User implements Account
{

	private $name;
	private $email;
	private $password;
	private $inputPass;
	private $newPass;
	private $city;

	public function __construct(){

	}

	//getters and setters
	public function setName($name)
	{
		$this->name=$name;
	}
	public function getName()
	{
		return $this->name;
	}
	public function setEmail($email)
	{
		$this->email=$email;
	}
	public function getEmail()
	{
		return $this->email;
	}
	public function setPassword($password)
	{
		$this->password=$password;
	}
	public function getPassword()
	{
		return $this->password;
	}
	public function setInputPass($inputPass)
	{
		$this->inputPass=$inputPass;
	}
	public function getInputPass()
	{
		return $this->inputPass;
	}
	public function setNewPass($newPass)
	{
		return $this->newPass;
	}
	public function getNewPass()
	{
		return $this->newPass;
	}
	public function setCity($city)
	{
		$this->city=$city;
	}
	public function getCity()
	{
		return $this->city;
	}



	public function register($pdo)
	{	
		//prepare a statement
		try{
			//prepare a query
			$stmt = $pdo->prepare("INSERT INTO user (name, email, password, city) VALUES (?,?,?,?)");
			$stmt->execute([$this->getName(),$this->getEmail(),$this->getPassword(),$this->getCity()]);
			$stmt=null;
			return "Registration was successful";
		}catch(PDOException $ex){
			return $ex->getMessage();
			//in production return a generic message, but log the specific
		}
	}

	public function login($pdo)
	{
		try
		{
			$stmt = $pdo->prepare("SELECT * FROM user WHERE email = ?");
			$stmt->execute([$this->email]);
			$result=$stmt->fetch();
			$this->password=$result['password'];
			if (password_verify($this->inputPass, $this->password))
			{
				$stmt=$pdo->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
				$stmt -> execute([$this->email, $this->password]);
				$result=$stmt->fetch();
				$stmt=null;
				return $result;		
			}
			else
			{
				echo 'Invalid password';
			}
		}
			catch(PDOException $e)
			{
				return $e->getMessage();
			}

	}

	public function changePassword($pdo)
	{
		try
		{
			$stmt = $pdo->prepare("SELECT * FROM user WHERE email = ?");
			$stmt->execute([$_SESSION['email']]);
			$result=$stmt->fetch();
			$this->password=$result['password'];
			if (password_verify($this->inputPass,$this->password)) 
			{
				$stmt = $pdo->prepare("UPDATE user SET password = ? WHERE userId = ? ");
				$stmt->execute([$this->newPass, $_SESSION['userId']]);
				$result=$stmt->fetch();
				$stmt=null;
				return "password has been changed";
			}
		}
		catch (PDOException $e)
		{
			return $e->getMessage();
		}
	}

	public function logout($pdo)
	{
		session_destroy();
	}
}

?>