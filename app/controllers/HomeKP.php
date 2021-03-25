<?php
class homeKP extends Controller{
	public function __construct(){
		$this->homemain = $this->model("ProductModel");
		$this->name = $this->model("namepromodel");
		$this->list = $this->model("ListproModel");
	}
	static function showlist()
	{
		$lm = 9;
		$lm1 = 3; 
		$id=24;
		$this->view("showPK",[
			"showmain1"=>$this->homemain->showMP($id,$lm),
			"showmain2"=>$this->homemain->showMP($id,$lm),
			//"namepro"=>$this->name->showlist($ids,$idclass),
			"listshow"=>$this->list->showList1($id)
		]);
	}
	 static function shownamelist($id){
	 	$ext_url = explode('/',$_GET['url']);
	 	$id =   $ext_url[2];
	 	$lm = 9;
	 	$lm1 = 3; 
	 	$id1=24;
	 	$this->view("showlistpk",[
	 	"showmain1"=>$this->homemain->showMP($id,$lm),
		"showmain2"=>$this->homemain->showMP($id,$lm),
	 	//"namepro"=>$this->name->showlist($ids,$idclass),
	 	"showlist"=>$this->list->showList1($id1),
	 	]);
	 }
}
?>