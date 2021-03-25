<?php
class App{
	protected $controller="homelogin";//mac dinh để khi user gõ bậy hoặc hok gõ thì truyền vào
	protected $action="homeloginn";
	protected $params=[];	
	function __construct(){
		$arr = $this->UrlProcess();	// xu li tren thanh dia chi
		//su ly controller . file_exists kiem tra coi file do co ton tai hok
		if(file_exists("./app/controllers/".$arr[0].".php")){//gán url vào
			$this->controller = $arr[0];
		}
		require_once "./app/controllers/".$this->controller.".php";
		$this->controller = new $this->controller;
		//xu li action / funcion
		if(isset($arr[1])){//ham kiem tra funcion ton tai method_exi..
			if( method_exists($this->controller , $arr[1])){
				$this->action = $arr[1];
			}
		}
		//xu li params
		$this->params = $arr?array_values($arr):[]; //nếu cái $arr tồn tại thì gán nó là array ngược lại rỗng
		call_user_func_array([$this->controller, $this->action], $this->params);
	}
	function UrlProcess(){ ##cat dau / tren thanh url ,
		if(isset($_GET["url"])){#trim loai bo di khoan trang , explode cat dau /
			return explode("/", filter_var(trim($_GET["url"],"/")));	
		}
		
	}
}
?>