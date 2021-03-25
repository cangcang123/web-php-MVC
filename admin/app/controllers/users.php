<?php
class users extends Controller{
	public function __construct(){
		$this->user = $this->model("usersmodel");
	}
	static function showall(){
		$this->view("user",[
			"showlist"=>$this->user->show(), 
		]);
	}
	static function showlist($iduser){
		$ext_url = explode('/',$_GET['url']);
		$iduser =   $ext_url[2];
		$this->view("userlist",[
			"showlist"=>$this->user->showlis($iduser), 
		]);
	}
	static function update($iduser){
		$ext_url = explode('/',$_GET['url']);
		$iduser =   $ext_url[2];
		if(isset($_POST["bnaddd"])){
			$name = $_POST["name"];
			$password1 = $_POST["password"];
			$password = md5($password1);
			$email = $_POST["email"];
			$phone = $_POST["phone"];
			$adress = $_POST["adress"];
			$adgroup = $_POST["adgroup"];
			$active = $_POST["active"];
			$kq = $this->user->update($iduser,$name,$password,$email,$phone,$adress,$adgroup,$active);
			print_r("thành công");
			$this->view("user",[
			"showlist"=>$this->user->show(), 
		]);
		}
	}
	static function delete($id){
		$ext_url = explode('/',$_GET['url']);
		$id =   $ext_url[2];
		$this->user->delete($id);
		$this->view("user",[
			"showlist"=>$this->user->show(), 
		]);
	}
}
?>