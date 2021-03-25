<?php
include_once "./app/core/DB.php";
class namepromodel extends DB{
	
	public function showlist($ids,$idclass)
	{
		$qr = "SELECT * FROM nameproduct where idsex=$ids AND idclas=$idclass";
		$conn = DB::getInstance();
		$sql = $conn->query($qr);
		return $sql ;
	}
}
?>