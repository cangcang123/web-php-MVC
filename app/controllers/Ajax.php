<?php
//thang nay de chua ajax 
class Ajax extends Controller{
	public $usermodel;
	public function __construct(){
		$this->usermodel = $this->model("usersmodel");
	}
	static function checkuser(){
		$username = $_POST["username"];
		echo $this->usermodel->CheckUser($username);
	}
	static function showlist($id){
		$ext_url = explode('/',$_GET['url']);
		$id =   $ext_url[2];
		$this->view("clothesM",[
		"showname"=>$this->list->showList($id),
		]);
	}
}
?>