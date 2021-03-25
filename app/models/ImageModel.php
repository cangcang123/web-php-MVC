<?php
include_once "./app/core/DB.php";
class ImageModel extends DB{
	public function ShowImage($id){
		$qr = "SELECT * FROM image WHERE idproduc=$id";
		$con = DB::getInstance();
		$sql = $con->query($qr); 
	    return $sql;
	}
}
?>