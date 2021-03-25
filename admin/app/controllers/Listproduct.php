<?php
class Listproduct extends Controller{
	public function __construct(){
		$this->product = $this->model("ProductModel");
		$this->image = $this->model("ImageModel");
	}
	static function showList($id){
		$ext_url = explode('/',$_GET['url']);
		$id =   $ext_url[2];
		$this->view("Listproduct",[
			"show"=>$this->product->showList($id),
			"id"=>$id, 
		]);
	}
	
	static function showall(){
		$this->view("ListproductAll",[
			"show"=>$this->product->showAll(), 
		]);
	}
	static function addList(){
		$list = $this->model("ListproModel");
		if(isset($_POST["bnaddd"])){
			$name = $_POST["name"];
			$price = $_POST["price"];
			$image =$_FILES['image']['name'];
			$image1 =$_FILES['image1']['name'];
			$image2 =$_FILES['image2']['name'];
			$image3 =$_FILES['image3']['name'];

			$tmp_image = $_FILES['image']['tmp_name'];
			$tmp_image1 = $_FILES['image1']['tmp_name'];
			$tmp_image2 = $_FILES['image2']['tmp_name'];
			$tmp_image3 = $_FILES['image3']['tmp_name'];

			$div = explode('.',$image);//exp tách chuỗi ra . tách tên file ra
			$div1 = explode('.',$image1);
			$div2 = explode('.',$image2);
			$div3 = explode('.',$image3);

			$file_ext = strtolower(end($div));
			$file_ext1 = strtolower(end($div1));
			$file_ext2 = strtolower(end($div2));
			$file_ext3 = strtolower(end($div3));

			$uni_image = $div[0].time().'.'.$file_ext;
			$uni_image1 = $div1[0].time().'.'.$file_ext1;
			$uni_image2 = $div2[0].time().'.'.$file_ext2;
			$uni_image3 = $div3[0].time().'.'.$file_ext3;

			$upload_img = "./public/image".$uni_image;
			$upload_img1 = "./public/image".$uni_image1;
			$upload_img2 = "./public/image".$uni_image2;
			$upload_img3 = "./public/image".$uni_image3;

			move_uploaded_file($tmp_image,"../public/image/".$uni_image);
			move_uploaded_file($tmp_image1,"../public/image/".$uni_image1);
			move_uploaded_file($tmp_image2,"../public/image/".$uni_image2);
			move_uploaded_file($tmp_image3,"../public/image/".$uni_image3);

			$size =$_POST["size"];
			$color =$_POST["color"];
			$sale =$_POST["sale"];
			$content =$_POST["content"];
			$style =$_POST["style"];
			$active =1;
			$idprolist =$_POST["idprolist"];
			
			if(empty($_POST["name"])  ||  empty($style) || empty($idprolist)){
				print_r("không được để trống");
			}else{
				$this->product->addproduct($name,$uni_image,$price,$size,$color,$sale,$content,$style,$active,$idprolist);
				$id = $this->product->checkPro();
				$ip = $id[0]["id"];
			if(!empty($image1)){	
			$this->image->addimage($uni_image1,$ip);
			}
			if(!empty($image2)){
			$this->image->addimage($uni_image2,$ip);
			} 
			if(!empty($image3)){
			$this->image->addimage($uni_image3,$ip);
			}
			 print_r("thêm sp thành công");
			}
		}
		$this->view("addproduct",[
			"listt"=>$list->showListPro(),
		]);
	}
	static function UpdateProduct($id){
		$list = $this->model("ListproModel");
		$ext_url = explode('/',$_GET['url']);
		$id =   $ext_url[2];
		if(isset($_POST["bnaddd"])){
			$name = $_POST["name"];
			$image =$_FILES['image']['name'];
			$tmp_image = $_FILES['image']['tmp_name'];
			$div = explode('.',$image);//exp tách chuỗi ra . tách tên file ra
			$file_ext = strtolower(end($div));
			$uni_image = $div[0].time().'.'.$file_ext;
			$upload_img = "./public/image".$uni_image;
			move_uploaded_file($tmp_image,"../public/image/".$uni_image);
			$price = $_POST["price"];
			$size =$_POST["size"];
			$color =$_POST["color"];
			$sale =$_POST["sale"];
			$content =$_POST["content"];
			$style =$_POST["style"];
			$active = $_POST["active"];
			settype($active, "int");
			$idprolist =$_POST["idprolist"];
			if(empty($_POST["name"]) || empty($price)  || empty($style) || empty($idprolist)){
				print_r("không được để trống");
			}else{
				$this->product->UpdateProduct($id,$name,$uni_image,$price,$size,$color,$sale,$content,$style,$active,$idprolist);
				
			print_r("thêm sp thành công");
			header("Location:../Listpro/showall");
			}
		}
		$this->view("UpdateProduct",[
			"show"=>$this->product->showupdate($id),
			"listt"=>$list->showListPro(), 
		]);
	}
	static function UpdateProductAll($id){
		$list = $this->model("ListproModel");
		$ext_url = explode('/',$_GET['url']);
		$id =   $ext_url[2];
		if(isset($_POST["bnaddd"])){
			$name = $_POST["name"];
			$image =$_FILES['image']['name'];
			$tmp_image = $_FILES['image']['tmp_name'];
			$div = explode('.',$image);//exp tách chuỗi ra . tách tên file ra
			$file_ext = strtolower(end($div));
			$uni_image = $div[0].time().'.'.$file_ext;
			$upload_img = "./public/image".$uni_image;
			move_uploaded_file($tmp_image,"../public/image/".$uni_image);
			$price = $_POST["price"];
			$size =$_POST["size"];
			$color =$_POST["color"];
			$sale =$_POST["sale"];
			$content =$_POST["content"];
			$style =$_POST["style"];
			$active = $_POST["active"];
			settype($active, "int");
			$idprolist =$_POST["idprolist"];
			if(empty($_POST["name"]) || empty($price)  ||  empty($style) || empty($idprolist)){
				print_r("không được để trống");
			}else{
				$this->product->UpdateProduct($id,$name,$price,$size,$color,$sale,$content,$style,$active,$idprolist);
				
			print_r("thêm sp thành công");
			header("Location:../Listname/showList");
			}
		}
		$this->view("UpdateProduct",[
			"show"=>$this->product->showupdate($id),
			"listt"=>$list->showListPro(), 
		]);
	}
	static function DeleteProduct($id){
		$ext_url = explode('/',$_GET['url']);
		//print_r($ext_url);die;
		$id =   $ext_url[2];
		$this->product->DeleteProduct($id);
		$this->view("ListproductAll",[
			"show"=>$this->product->showAll(), 
		]);
	}
	static function DeleteProduct1($id){
		$ext_url = explode('/',$_GET['url']);
		//print_r($ext_url);die;
		$id =   $ext_url[2];
		$this->product->DeleteProduct($id);
		$this->view("Listproduct",[
			"show"=>$this->product->showList($id), 
		]);
	}

}
?>