<?php
class ImageModel extends DB{
	public function addimage($name,$id){
		$qr = "INSERT INTO image(name,idproduc) VALUES('$name',$id)";
		$con = DB::getInstance();
		$sql = $con->query($qr);
	    $result = false;
		if ($sql) {
				$result = true;	
		}
		return json_encode($result);
	}
	public function showimg($id){
		$qr = " SELECT * FROM image WHERE idimage=$id";
		$con = DB::getInstance();
		$sql = $con->query($qr);
		return $sql;
	}
	public function showimage($id){
		$qr = " SELECT idimage,name FROM image WHERE idproduc=$id";
		$con = DB::getInstance();
		$sql = $con->query($qr);
		return $sql;
	}
	public function Updateimage($name,$id){
		$qr = " UPDATE image SET name = '$name' WHERE idimage=$id";
		$con = DB::getInstance();
		$sql = $con->query($qr);
	    $result = false;
		if ($sql) {
				$result = true;	
		}
		return json_encode($result);
	}
	public function Deleteimage($id){
		$qr = "DELETE FROM image WHERE idimage=$id";
		$con = DB::getInstance();
		$sql = $con->query($qr);
		return $sql;	
	}

}
?>