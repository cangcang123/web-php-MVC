<?php
class homeM extends Controller{
	public function __construct(){
		$this->homemain = $this->model("ProductModel");
		$this->name = $this->model("namepromodel");
		$this->list = $this->model("ListproModel");
	}
	static function showclotheM()
	{
		$sp_tungtrang = 6;
		if(!isset($_GET['pages'])){
    		$trang = 1;
		}else{
   		 $trang = $_GET['pages'];
		}
		$tung_trang = ($trang-1)*4;
		//print_r($tung_trang);die;
		$lm = 9;
		$lm1 = 3; 
		$ids=1;
		$idclass=1;
		$sotongtrang = $this->homemain->pageHomeproduc($ids,$idclass);		
		$so1trang = 4;
		$sotrang = ceil($sotongtrang/$so1trang);
		$this->view("clothesM",[
			"showmainM"=>$this->homemain->Homeproductest($ids,$idclass,$tung_trang,$sp_tungtrang),
			"showmainM1"=>$this->homemain->Homeproduc($lm1,$ids,$idclass),
			"namepro"=>$this->name->showlist($ids,$idclass),
			"listshow"=>$this->list->showList($ids),
			"sotrang"=>$sotrang,
		]);
	}
	static function shownameM($id){
		$ext_url = explode('/',$_GET['url']);
		$id =   $ext_url[2];
		$lm = 9;
		$lm1 = 3; 
		$ids=1;
		$idclass=1;
		$this->view("shownameM",[
		"showmainM"=>$this->homemain->showListpro($ids,$idclass,$id,$lm),
		"showmainM1"=>$this->homemain->showListpro($ids,$idclass,$id,$lm1),
		"namepro"=>$this->name->showlist($ids,$idclass),
		"showlist"=>$this->list->showList($id),
		]);
	}
	 static function shownameM1($id){
	 	$ext_url = explode('/',$_GET['url']);
	 	$id2 =   $ext_url[2];
	 	$id=   $ext_url[3];
	 	$lm = 9;
	 	$lm1 = 3; 
	 	$ids=1;
	 	$idclass=1;
	 	$this->view("showlistpro",[
	 	"showmainM"=>$this->homemain->showListpro1($id,$lm),
	 	"showmainM1"=>$this->homemain->showListpro1($id2,$lm1),
	 	"namepro"=>$this->name->showlist($ids,$idclass),
	 	"showlist"=>$this->list->showList1($id2,$ids,$idclass),
	 	]);
	 }
}
?> 