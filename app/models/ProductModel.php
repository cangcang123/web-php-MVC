<?php
include_once "./app/core/DB.php";
class ProductModel extends DB{
	public function Homeproduc($lm,$ids,$idclass)
	{
		$qr = "SELECT p.id,p.name,p.price,p.image,p.sale FROM nameproduct np join list_product lp on np.idname = lp.idnamepro join product p on lp.idlist=p.idprolist  where np.idsex=$ids AND np.idclas=$idclass LIMIT 0,$lm ";
		$conn = DB::getInstance();
		$sql = $conn->query($qr);
		return $sql ;
	}
	public function Homeproductest($ids,$idclass,$tung_trang,$sp_tungtrang)
	{
		$qr = "SELECT p.id,p.name,p.price,p.image,p.sale FROM nameproduct np join list_product lp on np.idname = lp.idnamepro join product p on lp.idlist=p.idprolist  where np.idsex=$ids AND np.idclas=$idclass LIMIT $tung_trang,$sp_tungtrang ";
		$conn = DB::getInstance();
		$sql = $conn->query($qr);
		return $sql ;
	}
	public function pageHomeproduc($ids,$idclass)
	{
		$qr = "SELECT p.id,p.name,p.price,p.image,p.sale FROM nameproduct np join list_product lp on np.idname = lp.idnamepro join product p on lp.idlist=p.idprolist  where np.idsex=$ids AND np.idclas=$idclass";
		$conn = DB::getInstance();
		$sql = $conn->query($qr);
		return $sql->rowCount();
	}
	public function showListpro($ids,$idclass,$id,$lm){
		$qr = "SELECT p.id,p.name,p.price,p.image,p.sale FROM nameproduct np join list_product lp on np.idname = lp.idnamepro join product p on lp.idlist=p.idprolist  where np.idsex=$ids AND np.idclas=$idclass AND np.idname=$id  LIMIT 0,$lm ";
		$conn = DB::getInstance();
		$sql = $conn->query($qr);
		return $sql ;

	}
	public function showMP($id,$lm){
		$qr = "SELECT p.id,p.name,p.price,p.image,p.sale FROM nameproduct np join list_product lp on np.idname = lp.idnamepro join product p on lp.idlist=p.idprolist  where np.idname=$id  LIMIT 0,$lm ";
		$conn = DB::getInstance();
		$sql = $conn->query($qr);
		return $sql ;
	}
	public function showListpro1($id,$lm){
		$qr = "SELECT p.id,p.name,p.price,p.image,p.sale FROM nameproduct np join list_product lp on np.idname=lp.idnamepro join product p on lp.idlist=p.idprolist where lp.idlist=$id  LIMIT 0,$lm ";
		$conn = DB::getInstance();
		$sql = $conn->query($qr);
		return $sql ;

	}
	public function HomeMPproduc(){
		$qr = "SELECT p.id,p.name,p.price,p.image,p.sale FROM  nameproduct np on s.ids=np.idsex join list_product lp on np.idname=lp.idnamepro join product p on lp.idlist=p.idprolist where s.ids=1 AND cl.idclass=1 LIMIT 0,$lm ";
	}
	public function ShowProduct($id){
		$qr = "SELECT * FROM product where id=$id";
		$conn = DB::getInstance();
		$sql = $conn->query($qr);
		return $sql ;
	}
	public function CountProduct($id){
		$qr = "SELECT * FROM product where id=$id";
		$conn = DB::getInstance();
		$sql = $conn->query($qr);
		return $sql->rowCount();
	}
	public function FetchProduct($id){
		$qr = "SELECT * FROM product where id=$id";
		$conn = DB::getInstance();
		$sql = $conn->query($qr);
		return $sql->fetchAll(PDO::FETCH_ASSOC);
	}
	public function checksearch($search){
		$qr = "SELECT * FROM product WHERE name like '%$search%'";
		$conn = DB::getInstance();
		$sql = $conn->query($qr);
		return $sql->rowCount();
	}

	// Hàm Model
	public function search($search){
		$qr = "SELECT * FROM product WHERE name like '%$search%'";
		$conn = DB::getInstance();
		$sql = $conn->query($qr);
		$mang = array();
		while($row = $sql->fetchAll()){
		   $mang[] = $row;
	    }
	    return $mang;
	}


}
?>