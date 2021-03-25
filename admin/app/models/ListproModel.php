<?php
include_once "./app/core/DB.php";
class ListproModel extends DB{
	public function showList($id){
		$qr = " SELECT l.idlist,l.name,l.idnamepro FROM list_product l join nameproduct n on l.idnamepro = n.idname where n.idname=$id ";
		$con = DB::getInstance();
		$sql = $con->query($qr); 
	    return $sql;
	}
	public function showAll(){
		$qr = "SELECT * FROM list_product";
		$con = DB::getInstance();
		$sql = $con->query($qr); 
		return $sql;	
	}
	public function addList($name,$idnamepro){
		$qr = "INSERT INTO list_product(name,idnamepro) VALUES('$name',$idnamepro)";
		$con = DB::getInstance();
		$sql = $con->query($qr);
		$result = false;
		if ($sql) {
				$result = true;	
		}
		return json_encode($result);	
	}
	public function updateList($name,$idnamepro){
		$qr = "UPDATE list_product SET name='$name' and idnamepro='$idnamepro'";
		$con = DB::getInstance();
		$sql = $con->query($qr);
	}
	public function delteList($id){
		$qr = "DELETE FROM list_product WHERE id='$id'";
		$con = DB::getInstance();
		$sql = $con->query($qr);

	}
	public function showListPro(){
		$qr = "SELECT * FROM list_product";
		$con = DB::getInstance();
		$sql = $con->query($qr);
		return $sql;
	}
}
?>