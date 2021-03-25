<?php
class product extends Controller{
	public function __construct(){
		$this->product = $this->model("ProductModel");
		$this->image = $this->model("ImageModel");
	}
	static function ShowProduct($id){
		$ext_text = explode('/',$_GET['url']);
		$id = $ext_text[2];
		$this->view("product",[
			"show"=>$this->product->ShowProduct($id),
			"image"=>$this->image->ShowImage($id),
		]);
	}
}
?>