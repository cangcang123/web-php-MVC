<?php
class homeC extends Controller{
	public function __construct(){
		$this->homemain = $this->model("ProductModel");
		$this->name = $this->model("namepromodel");
		$this->list = $this->model("ListproModel");
	}
	// static function showclothe() 
	// {
	// 	$lm = 9;
	// 	$lm1 = 3; 
	// 	$ids=2;
	// 	$idse=1;
	// 	$idclass=2;
	// 	$this->view("clothesC",[
	// 		"showmainM"=>$this->homemain->Homeproduc($lm,$idse,$idclass),
	// 		"showmainF"=>$this->homemain->Homeproduc($lm1,$ids,$idclass),
	// 		"namepro"=>$this->name->showlist($ids,$idclass),
	// 		"listshow"=>$this->list->showList($ids)
	// 	]);
	// }
	static function showclothesM()
	{
		$lm = 9;
		$lm1 = 3; 
		$ids=1;
		$idclass=2;
		$this->view("clothesCM",[
			"showmain1"=>$this->homemain->Homeproduc($lm,$ids,$idclass),
			"showmain2"=>$this->homemain->Homeproduc($lm1,$ids,$idclass),
			"namepro"=>$this->name->showlist($ids,$idclass),
			//"listshow"=>$this->list->showList($ids)
		]);
	}
	static function showclothesF()
	{
		$lm = 9;
		$lm1 = 3; 
		$ids=2;
		$idse=2;
		$idclass=2;
		$this->view("clothesCF",[
			"showmain1"=>$this->homemain->Homeproduc($lm,$ids,$idclass),
			"showmain2"=>$this->homemain->Homeproduc($lm1,$ids,$idclass),
			"namepro"=>$this->name->showlist($ids,$idclass),
			//"listshow"=>$this->list->showList($ids)
		]);
	}
	static function shownameM($id){
		$ext_url = explode('/',$_GET['url']);
		$id =   $ext_url[2];
		$lm = 9;
		$lm1 = 3; 
		$ids=1;
		$idclass=2;
		$this->view("shownameCM",[
		"showmain1"=>$this->homemain->showListpro($ids,$idclass,$id,$lm),
		"showmain2"=>$this->homemain->showListpro($ids,$idclass,$id,$lm1),
		"namepro"=>$this->name->showlist($ids,$idclass),
		"showlist"=>$this->list->showList($id),
		]);
	}
	 static function showname1M($id){
	 	$ext_url = explode('/',$_GET['url']);
	 	$id2 =   $ext_url[2];
	 	$id=   $ext_url[3];
	 	$lm = 9;
	 	$lm1 = 3; 
	 	$ids=2;
	 	$idclass=2;
	 	$this->view("showlistproCM",[
	 	"showmain1"=>$this->homemain->showListpro1($id2,$lm),
	 	"showmain2"=>$this->homemain->showListpro1($id2,$lm1),
	 	"namepro"=>$this->name->showlist($ids,$idclass),
	 	"showlist"=>$this->list->showList1($id2,$ids,$idclass),
	 	]);
	 }
	 static function shownameF($id){
		$ext_url = explode('/',$_GET['url']);
		$id =   $ext_url[2];
		$lm = 9;
		$lm1 = 3; 
		$ids=2;
		$idclass=2;
		$this->view("shownameCF",[
		"showmain1"=>$this->homemain->showListpro($ids,$idclass,$id,$lm),
		"showmain2"=>$this->homemain->showListpro($ids,$idclass,$id,$lm1),
		"namepro"=>$this->name->showlist($ids,$idclass),
		"showlist"=>$this->list->showList($id),
		]);
	}
	 static function showname1F($id){
	 	$ext_url = explode('/',$_GET['url']);
	 	$id2 =   $ext_url[2];
	 	$id=   $ext_url[3];
	 	$lm = 9;
	 	$lm1 = 3; 
	 	$ids=2;
	 	$idclass=2;
	 	$this->view("showlistproCF",[
	 	"showmain1"=>$this->homemain->showListpro($ids,$idclass,$id,$lm),
		"showmain2"=>$this->homemain->showListpro($ids,$idclass,$id,$lm1),
	 	"namepro"=>$this->name->showlist($ids,$idclass),
	 	"showlist"=>$this->list->showList1($id2,$ids,$idclass),
	 	]);
	 }
}
?>