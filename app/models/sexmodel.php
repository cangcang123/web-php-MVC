<?php
include_once "./app/core/DB.php";
class sexmodel extends DB{
	public function sex()
	{
		$qr = "SELECT * FROM sex";
		$sql = $this->con->query($qr);
		$mang = array();
		while($row = $sql->fetchAll()){
		   $mang[] = $row;
	    }
	    return json_encode($mang);
	}
}
?>