<?php
class ClassModel extends DB{
	public function showClass(){
		$qr = "SELECT c.name,c.idclass FROM class c join nameproduct n on c.idclass = n.idclas ";
		$con = DB::getInstance();
		$sql = $con->query($qr);
	    return $sql;
	}
	public function showClassAdd(){
		$qr = "SELECT * FROM class";
		$con = DB::getInstance();
		$sql = $con->query($qr);
	    return $sql;
	}

}
?>