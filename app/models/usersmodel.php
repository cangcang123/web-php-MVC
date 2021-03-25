<?php
include_once "./app/core/DB.php";
class usersmodel extends DB{
	public function InserNewUser($name, $username, $email, $phone, $adress, $password)
	{
		$qr = "INSERT INTO `users`(`name`, `username`, `email`, `phone`, `adress`, `password`, `adgroup`, `active`) VALUES ('$name','$username','$email','$phone','$adress','$password',0,0)";
		$conn = DB::getInstance();
		$sql = $conn->query($qr);
		$result = false;
		if ($sql) {
				$result = true;	
		}
		return json_encode($result);		
	
	} 

	public function LoginUser($username, $password){
		$qr = " SELECT * FROM Users WHERE username = '$username' AND password = '$password' ";
		$conn = DB::getInstance();
		$sql = $conn->query($qr);
		$resul = false;
		if($sql){
			$resul = true;
		}
		return json_decode($resul);
	}
	public function CheckUser($username){
		$qr = " SELECT iduser from Users WHERE username='$username'";
		$conn = DB::getInstance();
		$sql = $conn->query($qr);
		$kq = "tai khoan dung";
		if($sql->rowCount() > 0){
			$kq = "tai khoan sai";
		}
		return json_encode($kq);
	}
	public function check($username,$password){
		$qr = "SELECT * FROM users where username='$username' and password='$password' ";
		$con = DB::getInstance();
		$sql = $con->query($qr);
		return $sql->rowCount();
	}
	public function name($username,$password){
		$qr = "SELECT * FROM users where username='$username' and password='$password' ";
		$con = DB::getInstance();
		$sql = $con->query($qr);
		return $sql->fetchAll(PDO::FETCH_ASSOC);	
	}
	public function showaccount($iduser){
		$qr = "SELECT * FROM users where iduser=$iduser ";
		$con = DB::getInstance();
		$sql = $con->query($qr);
		return $sql;
	}

}
?>