<?php
include_once "./app/core/DB.php";
class ListnameModel extends DB{
	public function showList(){
		$qr = "SELECT * FROM nameproduct";
		$con = DB::getInstance();
		$sql = $con->query($qr);
	    return $sql;
	}
	public function showname(){
		$qr = "SELECT n.name,n.idname FROM nameproduct n join list_product l on n.idname=l.idnamepro";
		$con = DB::getInstance();
		$sql = $con->query($qr);
	    return $sql;
	}
	public function shownameid($id){
		$qr = "SELECT DISTINCT * FROM nameproduct  WHERE idname=$id";
		$con = DB::getInstance();
		$sql = $con->query($qr);
	    return $sql;
	}
	public function addList($name,$idsex,$class){
		$qr = "INSERT INTO nameproduct(name,idsex,idclas) VALUES('$name','$idsex','$class')";
		$con = DB::getInstance();
		$sql = $con->query($qr);
		$result = false;
		if ($sql) {
				$result = true;	
		}
		return json_encode($result);		
	}
	public function updateList($name,$idsex){
		$qr = "UPDATE nameproduct SET name='$name' and idsex='$idsex'";
		$con = DB::getInstance();
		$sql = $con->query($qr);
	}
	public function delteList($id){
		$qr = "DELETE FROM nameproduct WHERE id='$id'";
		$con = DB::getInstance();
		$sql = $con->query($qr);

	}
}
?>