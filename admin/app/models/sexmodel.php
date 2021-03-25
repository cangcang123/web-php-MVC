<?php
class sexmodel extends DB{
	public function showSex(){
		$qr = "SELECT s.name FROM sex s join nameproduct n on s.ids = n.idsex ";
		$con = DB::getInstance();
		$sql = $con->query($qr);
	    return $sql;
	}
	public function showSexadd(){
		$qr = "SELECT * FROM sex";
		$con = DB::getInstance();
		$sql = $con->query($qr);
	    return $sql;
	}

}
?>