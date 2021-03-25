<?php
class CheckCart extends Controller{
	public function __construct(){
		$this->cart = $this->model("CartModel");
		$product = $this->model("ProductModel");
		$user = $this->model("usersmodel");
	}
	static function CartOff(){
		$st=0;
		$this->view("CartOff",[
			"show"=>$this->cart->showcart($st),
		]);
	}
	static function CartOn(){
		$st=1;
		$this->view("CartOn",[
			"show"=>$this->cart->showcart($st),
		]);
	}
	static function CartOffCus(){
		$st=0;
		$this->view("CartOffCus",[
			"show"=>$this->cart->showcart1($st),
		]);
	}
	static function CartOnCus(){
		$st=1;
		$this->view("CartOnCus",[
			"show"=>$this->cart->showcart1($st),
		]);
	}
	static function Cart($idc){
		$ext = explode('/',$_GET['url']);
		$idc = $ext[2];
		$this->cart->update($idc);
		$st=1;
		$this->view("CartOn",[
			"show"=>$this->cart->showcart($st),
		]);
	}
	static function CartCus($idc){
		$ext = explode('/',$_GET['url']);
		$idc = $ext[2];
		$this->cart->update($idc);
		$st=1;
		$this->view("CartOnCus",[
			"show"=>$this->cart->showcart1($st),
		]);
	}
	static function delete($idc){
		$ext = explode('/',$_GET['url']);
		$idc = $ext[2];
		$this->cart->delete($idc);
		$st=1;
		$this->view("CartOn",[
			"show"=>$this->cart->showcart($st),
		]);
	}
	static function deleteCus($idc){
		$ext = explode('/',$_GET['url']);
		$idc = $ext[2];
		$this->cart->delete($idc);
		$st=1;
		$this->view("CartOnCus",[
			"show"=>$this->cart->showcart1($st),
		]);
	}
	static function delete1($idc){
		$ext = explode('/',$_GET['url']);
		$idc = $ext[2];
		$this->cart->delete($idc);
		$st=0;
		$this->view("CartOff",[
			"show"=>$this->cart->showcart($st),
		]);
	}
	static function deleteCus1($idc){
		$ext = explode('/',$_GET['url']);
		$idc = $ext[2];
		$this->cart->delete($idc);
		$st=0;
		$this->view("CartOffCus",[
			"show"=>$this->cart->showcart1($st),
		]);
	}
}
?>