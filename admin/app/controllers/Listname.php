<?php
class Listname extends Controller{
	public $nameproduct;
	public function __construct(){
		$this->nameproduct = $this->model("ListnameModel");
		$this->class = $this->model("ClassModel");
	}
	static function showList(){
		//$id = $_GET["id"];
		$sex = $this->model("sexmodel");
		$this->view("homenamepro",[
			"show"=>$this->nameproduct->showList(),
			"sex"=>$sex->showSex(),
			"class"=>$this->class->showClass(),
		]);
	}
	static function addList(){
		$sex = $this->model("sexmodel");
		if(isset($_POST["bnadd"])){
			$name = $_POST["name"];
			$idsex  = $_POST["idsex"];
			$class = $_POST["idclas"];
			$this->nameproduct->addList($name,$idsex,$class);
		}
		$this->view("addnameproduct",[
			"sex"=>$sex->showSexadd(),
			"class"=>$this->class->showClassAdd(),
		]);
	}
}
?>