<?php
include_once "./app/core/DB.php";
class ListproModel extends DB{
	public function showList($id){
		$qr = " SELECT  DISTINCT  lp.idlist,lp.name,lp.idnamepro FROM  nameproduct np join list_product lp on np.idname=lp.idnamepro WHERE np.idname=$id";
		$con = DB::getInstance();
		$sql = $con->query($qr); 
	    return $sql;
	}
	public function showList1($id){
		$qr = " SELECT  DISTINCT  lp.idlist,lp.name,lp.idnamepro FROM  nameproduct np join list_product lp on np.idname=lp.idnamepro WHERE lp.idnamepro=$id";
		$con = DB::getInstance();
		$sql = $con->query($qr); 
	    return $sql;
	}
}
?>