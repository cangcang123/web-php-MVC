<?php
class Cart extends DB{
	public function Buy(){
		$qr = " SELECT * FROM product WHERE id IN(";
		foreach ($_SESSION["shopping_cart"] as $id =>$value) {
			$qr.=$id.",";
		}
		$qr = substr($qr,0,-1).") ORDER BY name ASC";
		$con = DB::getInstance();
		$sql = $con->query($qr); 
		return $sql->fetch(PDO::FETCH_ASSOC);
	}
	public function addcart($idsp,$quantity){
		$qr = " INSERT INTO cart_detail(idsp,quantity) VALUES ($idsp,$quantity)";
		$con = DB::getInstance();
		$sql = $con->query($qr); 
		return $sql;
	}
	public function showcart(){
		$qr = "SELECT * FROM cart_detail WHERE idcd";
		$con = DB::getInstance();
		$sql = $con->query($qr); 
		return $sql;
	}
	public function addCart1($idcd,$iduser,$status){
		$qr = " INSERT INTO cart(idcd,iduser,status) VALUES ($idcd,$iduser,$status)";
		$con = DB::getInstance();
		$sql = $con->query($qr); 
		return $sql;
	}
	public function addcontact($name,$adress,$phone,$notes){
		$qr = " INSERT INTO contact(name,adress,phone,notes) VALUES ('$name','$adress',$phone,'$notes')";
		$con = DB::getInstance();
		$sql = $con->query($qr); 
		return $sql;
	}
	public function showcontact(){
		$qr = "SELECT MAX(id_contact) as id_contact FROM contact";
		$con = DB::getInstance();
		$sql = $con->query($qr); 
		return $sql;
	}
	public function addCart2($idcd,$id_contact,$status){
		$qr = " INSERT INTO cart(idcd,idct,status) VALUES ($idcd,$id_contact,$status)";
		$con = DB::getInstance();
		$sql = $con->query($qr); 
		return $sql;
	
	}

}
?>