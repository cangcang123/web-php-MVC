<?php
class homeF extends Controller{
	public function __construct(){
		$this->homemain = $this->model("ProductModel");
		$this->name = $this->model("namepromodel");
		$this->list = $this->model("ListproModel");
	}
	static function showclotheF()
	{
		$lm = 9;
		$lm1 = 3; 
		$ids=2;
		$idclass=1;
		$this->view("clothesF",[
			"showmainF"=>$this->homemain->Homeproduc($lm,$ids,$idclass),
			"showmainF1"=>$this->homemain->Homeproduc($lm1,$ids,$idclass),
			"namepro"=>$this->name->showlist($ids,$idclass),
			"listshow"=>$this->list->showList($ids)
		]);
	}
	static function shownameF($id){
		$ext_url = explode('/',$_GET['url']);
		$id =   $ext_url[2];
		$lm = 9;
		$lm1 = 3; 
		$ids=2;
		$idclass=1;
		$this->view("shownameF",[
		"showmainF"=>$this->homemain->showListpro($ids,$idclass,$id,$lm),
		"showmainF1"=>$this->homemain->showListpro($ids,$idclass,$id,$lm1),
		"namepro"=>$this->name->showlist($ids,$idclass),
		"showlist"=>$this->list->showList($id),
		]);
	}
	 static function shownameF1($id){
	 	$ext_url = explode('/',$_GET['url']);
	 	$id2 =   $ext_url[2];
	 	$id=   $ext_url[3];
	 	$lm = 9;
	 	$lm1 = 3; 
	 	$ids=2;
	 	$idclass=1;
	 	$this->view("showlistproF",[
	 	"showmainF"=>$this->homemain->showListpro1($id2,$lm),
	 	"showmainF1"=>$this->homemain->showListpro1($id2,$lm1),
	 	"namepro"=>$this->name->showlist($ids,$idclass),
	 	"showlist"=>$this->list->showList1($id2,$ids,$idclass),
	 	]);
	 }
}
?>