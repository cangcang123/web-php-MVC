<?php
class CartModel extends DB{
	public function showcart($st){
		$qr = " SELECT c.idc as idc, c.status as status,cd.quantity as quantity, p.name as nameproduct , p.color as color, p.price as price, p.size as size, p.sale as sale , p.image as image, u.name as nameuser, u.username as username, u.email as mail , u.phone as phone ,u.adress as adress FROM cart c join cart_detail cd on c.idcd=cd.idcd join users u on u.iduser=c.iduser join product p on cd.idsp=p.id WHERE status=$st";
		$con = DB::getInstance();
		$sql = $con->query($qr);
	    return $sql;
	}
	public function update($idc){
		$qr = "UPDATE cart SET status=1 WHERE idc=$idc";
		$con = DB::getInstance();
		$sql = $con->query($qr);
	    return $sql;
	}
	 public function  delete($idc){
	 	$qr = "DELETE FROM cart WHERE idc=$idc";
		$con = DB::getInstance();
		$sql = $con->query($qr);
	    return $sql;
	}
	 public function showcart1($st){
	 	$qr = " SELECT c.idc as idc, c.status as status,cd.quantity as quantity, p.name as nameproduct , p.color as color, p.price as price, p.size as size, p.sale as sale , p.image as image, ct.name as nameuser, ct.phone as phone ,ct.adress as adress , ct.notes as notes FROM cart c join cart_detail cd on c.idcd=cd.idcd join contact ct on ct.id_contact=c.idct join product p on cd.idsp=p.id WHERE status=$st AND idct IS NOT NULL";
		$con = DB::getInstance();
		$sql = $con->query($qr);
	    return $sql;
	 }
	// public function   (){
	// }
	// public function   (){
	// }
	// public function   (){
	// }

}
?>