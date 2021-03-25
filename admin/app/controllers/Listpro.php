<?php
class Listpro extends Controller{
	public $list_product;
	public function __construct(){
		$this->list_product = $this->model("ListproModel");
		$this->list_name    = $this->model("ListnameModel");
	}
	static function showlist($id){
		$ext_url = explode('/',$_GET['url']);
		$id =   $ext_url[2];

		$this->view("homelistpro",[
			"show"=>$this->list_product->showList($id),
			"name"=>$this->list_name->shownameid($id),
			"id"=>$id,
		]);
	}
	static function showall(){
		$this->view("homelistproAll",[
			"show"=>$this->list_product->showAll(),
			"name"=>$this->list_name->showname(),
		]);
	}
	static function addList(){
		$ext_url = explode('/',$_GET['url']);
		$id =   $ext_url[2];	
		$namepro = $this->model("ListnameModel");
		if(isset($_POST["bnaddd"])){
			$name = $_POST["name"];
			$idnamepro = $_POST["idnamepro"];
			$kq=$this->list_product->addList($name,$idnamepro);
		}
		$this->view("addlist_pro",[
			"idname"=>$namepro->shownameid($id),
			"id"=>$id,
		]);
	}
} 
?>