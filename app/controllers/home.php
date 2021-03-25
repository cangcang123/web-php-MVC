<?php
class home extends Controller{
	public function __construct(){
		$this->homemain = $this->model("ProductModel");
		$this->name = $this->model("namepromodel");
		$this->list = $this->model("ListproModel");
	}
	static function homevi(){
		$lm = 5;
		$lm1 = 3;
		$ids=2;
		$idclass = 1;
		$idsm=1;
		//$test= $this->model("testmodel");//$this là thang controller.php gọi đến testmodel.php
		$this->view("homeviews",[
			"showmainF"=>$this->homemain->Homeproduc($lm,$ids,$idclass),
			"showmainM"=>$this->homemain->Homeproduc($lm,$idsm,$idclass),
			//"num"=>$test->GetTest()
		]);
		//$this->load->view("menu");
	}
	static function search(){
		if(isset($_POST["search"])){
  			$search = addslashes($_POST["namesearch"]);
  				if (empty($search)) {
                $messa="Yeu cau nhap du lieu vao o trong";
                $this->view("messa",[
        "mes"=>$messa,
        ]);
            } 
            else{
              $num = $this->homemain->checksearch($search);
              if ($num > 0 && $search != ""){
                //$qq = $this->homemain->search($search);
                  //rint_r($qq);die; //controller
              		$this->view("search",[
              			"showpro"=> $this->homemain->search($search),
              		]);
              } 








              else{
                $messa="không tìm thấy kết quả";
                $this->view("messa",[
       			 "mes"=>$messa,
        		]);
              }
            }
            $this->view("search",[
              			"show"=> $this->homemain->search($search),
              		]);
}			
	}
}
?>