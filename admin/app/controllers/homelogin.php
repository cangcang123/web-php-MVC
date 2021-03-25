<?php
include_once "./app/core/Session.php";
class homelogin extends Controller{
	public $usersmodel;// để this->usermodel dòng số 5 và 25
	//public function __construct(){
		//$this->usersmodel = $this->model("usersmodel");
	//}
	static function homeloginn(){
		$this->usersmodel = $this->model("usersmodel");
		$sex = $this->model("sexmodel");
		$this->nameproduct = $this->model("ListnameModel");
		if(isset($_POST["bntlogin"])){
			$username = $_POST["username"];
			$password1 = $_POST["password"];
			//$hashToStoreInDb = password_hash($password1, PASSWORD_DEFAULT);
			$password = md5($password1);
			$kq = $this->usersmodel->check($username,$password);
			if($kq==0){
				echo"user hoặc pass sai";
			}else{
				$result = $this->usersmodel->name($username,$password);
				session_start();
				$_SESSION["login"];
				$_SESSION["name"] = $result[0]["name"];
				$_SESSION["active"] = $result[0]["active"];
				$_SESSION["email"] = $result[0]["email"];
				if($_SESSION["active"]==1){
					//print_r("aaa");
					header("Location:../Listname/showList");
					
				}else{
					echo'<scrip>alert("Bạn Không Có Quyền Đăng Nhập")</scrip>';
				}
			}
			//print_r($kq);die;
			//if(password_verify($password1,$kq["password"])){
				//print_r($kq);die;
			//}
			
			//var_dump($kq);die;
			//session_start();
			//$_SESSION['login'] = true;
			//Session::set('login',true);
			//$_SESSION['username'] = $kq[2]['username'];
			//$_SESSION['active'] = $kq[0]['active'];
			//Session::set('username',$kq[0]['username']);
			//Session::set('name',$kq[0]['name']);
			//Session::set('active',$kq[0]['active']);
			//$_SESSION['name'] =$kq[0]['name'];
			//if($_SESSION['active']==1){
			//header("location:./Listpro/showlist");
			//}
		}
		$this->view("homelogin");
	}
	static function logout(){
		session_start();
		session_destroy();
		header("Location:homeloginn");
	}
	 
}
?>