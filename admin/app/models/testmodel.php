<?php
include_once "./app/core/DB.php";
class testmodel extends DB{
	public function GetTest(){
		//connect db
		return "get test 111111";
	}
	public function addTest(){

	}
	public function Testt2(){
		$qr = " SELECT * FROM name ";
		return $this->con->query($qr);
	}
}
?>