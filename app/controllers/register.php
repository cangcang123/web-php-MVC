<?php
class register extends Controller{
	public $usersmodel;// để this->usermodel dòng số 5 và 25
	public function __construct(){
		$this->usersmodel = $this->model("usersmodel");
	}
	static function registers(){
    session_start();
    if(isset($_SESSION["name"])){
      header("Location:logout");
    }
		//1 get data khách hàng nhập
		if(isset($_POST["bnregister"])){
	  $name = $_POST["name"];
  	$username = $_POST["username"];
  	$email = $_POST["email"];
  	$phone = $_POST["phone"];
  	$adress = $_POST["adress"];
  	$password1 = $_POST["password"];
  	$password2 = $_POST["password2"];
            //$password = password_hash($password, PASSWORD_DEFAULT);//su dung bcrypt để băm pass ra
            $password = md5($password1);
          //2 inser vào data
      $kq = $this->usersmodel->InserNewUser($name,$username,$email,$phone,$adress,$password);
      echo $kq;
      }
      $this->view("registers");


	}
  static function login(){
    session_start();
    if(isset($_SESSION["name"])){
      header("Location:user");
    }
    if(isset($_POST["bnlogin"])){
      $username = $_POST["username"];
      $password1 = $_POST["password"];
      //$hashToStoreInDb = password_hash($password1, PASSWORD_DEFAULT);
      $password = md5($password1);
      $kq = $this->usersmodel->check($username,$password);
      if($kq==0){
        echo"user hoặc passsai";
      }else{
        $result = $this->usersmodel->name($username,$password);
        session_start();
        //$_SESSION["loginn"];
        $_SESSION["iduser"] = $result[0]["iduser"];
        $_SESSION["name"] = $result[0]["name"];
        $_SESSION["active"] = $result[0]["active"];
        $_SESSION["email"] = $result[0]["email"];
                 //print_r("aaa");
          header("Location:../home/homevi");
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
    $this->view("login");
  }
  static function logout(){
    session_start();
    session_destroy();
    header("Location:../home/homevi");
  }
  static function user($iduser){
    $iduser =   $_SESSION["iduser"];
    $this->view("account",[
      "show"=>$this->usersmodel->showaccount( $iduser),
    ]);
  }
}
?>