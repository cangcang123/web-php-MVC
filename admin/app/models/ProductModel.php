<?php
class ProductModel extends DB{
	public function showList($id){
		$qr = "SELECT p.id,p.price,p.image,p.name,p.size,p.color,p.sale,p.content,p.style,p.active,p.idprolist FROM product p join list_product l on p.idprolist = l.idlist WHERE l.idlist=$id";
		$con = DB::getInstance();
		$sql = $con->query($qr); 
	    return $sql;
	}
	public function showupdate($id){
		$qr = "SELECT * FROM product WHERE id=$id";
		$con = DB::getInstance();
		$sql = $con->query($qr); 
	    return $sql;
	}
	public function showAll(){
		$qr = "SELECT * FROM product";
		$con = DB::getInstance();
		$sql = $con->query($qr); 
	    return $sql;
	}
	public function addproduct($name,$uni_image,$price,$size,$color,$sale,$content,$style,$active,$idprolist){
		$qr = "INSERT INTO product(name,image,price,size,color,sale,content,style,active,idprolist) VALUES('$name','$uni_image','$price','$size','$color','$sale','$content','$style','$active','$idprolist')";
		$con = DB::getInstance();
		$sql = $con->query($qr);
		$result = false;
		if ($sql) {
				$result = true;	
		}
		return json_encode($result);	
	}
	public function UpdateProduct($id,$name,$price,$size,$color,$sale,$content,$style,$active,$idprolist){
		$qr = "UPDATE product SET name = '$name', price = '$price', size = '$size', color = '$color', sale = '$sale', content = '$content', style = '$style', active = '$active', idprolist = '$idprolist' WHERE id = '$id' ";
		$con = DB::getInstance();
		$sql = $con->query($qr);
		$result = false;
		if ($sql) {
				$result = true;	
		}
		return $sql;

	}
	public function DeleteProduct($id){
		$qr = "DELETE FROM product WHERE id=$id";
		$con = DB::getInstance();
		$sql = $con->query($qr);
		return $sql;	
	}
	public function checkPro(){
		$qr = "SELECT MAX(id) AS id FROM product";
		$con = DB::getInstance();
		$sql = $con->query($qr); 
	    return $sql->fetchAll(PDO::FETCH_ASSOC);
	}
}
?>