<?php

include_once "./app/core/DB.php";
class usersmodel extends DB{
	public function login($username,$password)
	{
		$qr = "SELECT * FROM users where username='$username' and password='$password' ";
		$con = DB::getInstance();
		$sql = $con->query($qr);
		$row=array();
		//$kq = false;
		if($sql->rowCount() >0 ){
			//$kq = true;
		$row[] =$sql->fetchAll();
		}
		return json_encode($row);
	}
	public function loginrow($username,$password){
		$qr = "SELECT * FROM users where username='$username' and password='$password' ";
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
	public function show(){
		$qr = "SELECT * FROM users";
		$con = DB::getInstance();
		$sql = $con->query($qr);
		return $sql;
	}
	public function showlis($iduser){
		$qr = "SELECT * FROM users WHERE iduser=$iduser";
		$con = DB::getInstance();
		$sql = $con->query($qr);
		return $sql;
	}
	public function delete($id){
		$qr = "DELETE FROM users WHERE iduser=$id";
		$con = DB::getInstance();
		$sql = $con->query($qr);
		return $sql;	
	}
	public function update($iduser,$name,$password,$email,$phone,$adress,$adgroup,$active){
		$qr = "UPDATE users SET name='$name',password='$password',email='$email',phone='$phone',adress='$adress',adgroup='$adgroup',active='$active' WHERE iduser='$iduser' ";
		$con = DB::getInstance();
		$sql = $con->query($qr);
		return $sql;	
	}
}
?>