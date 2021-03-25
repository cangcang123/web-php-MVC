<?php
class ListImage extends Controller{
	public function __construct(){
		$this->image = $this->model("ImageModel");
		 $this->product = $this->model("ProductModel");
	}
	static function ShowImage($id){
		$ext_url = explode('/',$_GET['url']);
		$id =   $ext_url[2];
		$this->view("ShowProduct",[
			"show"=>$this->image->showimage($id),
			"id"=>$id, 
		]);
	}
	static function AddImage($id){
		$ext_url = explode('/',$_GET['url']);
		$id =   $ext_url[2];
		if(isset($_POST["bnaddd"])){
			$image =$_FILES['image']['name'];
			$tmp_image = $_FILES['image']['tmp_name'];
			$div = explode('.',$image);
			$file_ext = strtolower(end($div));
			$uni_image = $div[0].time().'.'.$file_ext;
			$upload_img = "./public/image".$uni_image;
			move_uploaded_file($tmp_image,"../public/image/".$uni_image);

			$image1 =$_FILES['image1']['name'];
			$tmp_image1 = $_FILES['image1']['tmp_name'];
			$div1 = explode('.',$image1);
			$file_ext1 = strtolower(end($div1));
			$uni_image1 = $div1[0].time().'.'.$file_ext1;
			$upload_img1 = "./public/image".$uni_image1;
			move_uploaded_file($tmp_image1,"../public/image/".$uni_image1);

			$image2 =$_FILES['image2']['name'];
			$tmp_image2 = $_FILES['image2']['tmp_name'];
			$div2 = explode('.',$image2);
			$file_ext2 = strtolower(end($div2));
			$uni_image2 = $div2[0].time().'.'.$file_ext2;
			$upload_img2 = "./public/image".$uni_image2;
			move_uploaded_file($tmp_image2,"../public/image/".$uni_image2);
			if(!empty($image)){	
			$this->image->addimage($uni_image,$id);
			}
			if(!empty($image1)){
			$this->image->addimage($uni_image1,$id);
			} 
			if(!empty($image2)){
			$this->image->addimage($uni_image2,$id);
			}
			$this->view("ShowProduct",[
			"show"=>$this->image->showimage($id),
			"id"=>$id, 
		]);  
		}
		$this->view("addimage",[
			"id"=>$id]);

	}
	static function  UpdateImage($id,$idp){
		$ext_url = explode('/',$_GET['url']);
		$id =   $ext_url[2];
		$idp = $ext_url[3];
		//print_r($id);die;
		if(isset($_POST["bntadd"])){
			$image =$_FILES['image']['name'];
			$tmp_image = $_FILES['image']['tmp_name'];
			$div = explode('.',$image);
			$file_ext = strtolower(end($div));
			$uni_image = $div[0].time().'.'.$file_ext;
			$upload_img = "./public/image".$uni_image;
			move_uploaded_file($tmp_image,"../public/image/".$uni_image);
			if(!empty($image)){	
			$qk = $this->image->Updateimage($uni_image,$id);
			}
			$this->view("ShowProduct",[
			"show"=>$this->image->showimage($idp),
			"id"=>$idp, 
		]);
		}
			$this->view("updateimg",[
			"show"=>$this->image->showimg($id),
			"id"=>$id,
			"idp"=>$idp,
		]);
		
	}
	static function DeleteImage($id){
		$ext_url = explode('/',$_GET['url']);
		//print_r($ext_url);die;
		$id =   $ext_url[2];
		$idpro =  $ext_url[3];
		$this->image->Deleteimage($id);
		$this->view("ShowProduct",[
			"show"=>$this->image->showimage($idpro),
			"id"=>$idpro, 
		]);		
	}
}
?>