<?php      
class ShoppingCart extends Controller{
	public function __construct(){
		$this->produc = $this->model("ProductModel");
		$this->cart = $this->model("Cart");
	}
	static function addcart($id){
		$ext_test = explode('/',$_GET['url']);
		$idsp = $ext_test[2];
		$messa = "Đã Thêm Sản Phẩm Vào Giỏ Hàng";
		session_start();
		$id=intval($idsp);
		$count = $this->produc->CountProduct($id);
		$fetch = $this->produc->FetchProduct($id);
		//print_r($fetch);die;
		//exit;
		if(isset($_SESSION["shopping_cart"][$id])){
			 $_SESSION['shopping_cart'][$id]['quantity']++; 
		}else{

			if($fetch!=0){
				$_SESSION["shopping_cart"][$id] = array(
					"idsp" => $fetch[0]["id"],
					"quantity" => 1,
					"pricecart" => $fetch[0]["price"],
					"namecart" => $fetch[0]["name"],
					"imagecart" => $fetch[0]["image"],
					"sizecart" => $fetch[0]["size"],
					"colorcart" => $fetch[0]["color"],
					"salecart" => $fetch[0]["sale"]
					);
				
			}else{
				 $message="This product id it's invalid!";
			}
		}
		$this->view("messa",[
        "mes"=>$messa,
        ]);
	}
	static function UpdateCart(){
		session_start();
		  foreach($_POST['quantity'] as $key => $val) { 
            if($val==0) { 
                unset($_SESSION['shopping_cart'][$key]); 
            }else{ 
                $_SESSION['shopping_cart'][$key]['quantity']=$val; 
            } 
        }
        $this->view("cart.php"); 
	}
	static function Cart(){
		session_start();
		  if(isset($_POST['update']) & !empty($_POST["quantity"])){ 
          
        foreach($_POST['quantity'] as $key => $val) { 
            if($val==0) { 
                unset($_SESSION['shopping_cart'][$key]); 
            }else{ 
                $_SESSION['shopping_cart'][$key]['quantity']=$val; 
            } 
        } 
       $this->view("cart");   
       }
       if(isset($_POST['delete'])){
	 	foreach($_POST['quantity'] as $key => $val) { 
            if($val==0) { 
                unset($_SESSION['shopping_cart'][$key]);
            }else{
            	unset($_SESSION['shopping_cart'][$key]);
            }
        }
        $this->view("cart");
      }
      if(isset($_POST['buy']) & !empty($_SESSION['shopping_cart'])){
      		$messa = "Bạn Đã Đặt Hàng Thành Công , Chúng Tôi Sẽ Liên Lạc Với Bạn Trong Thời Gian Sớm Nhất";
          	$status = 0;
	if(!isset($_SESSION['iduser'])){
		$this->view("BuynoUser");
	}
	else{
		$iduser = $_SESSION["iduser"];	
		foreach ($_SESSION["shopping_cart"] as $key=>$value) {
			$quantity = $value["quantity"];
			$idsp = $value["idsp"];
			$kq = $this->cart->addcart($idsp,$quantity);
			//print_r($kq);
		}
					
                    	
                    	 $show = $this->cart->showcart();
                    	foreach ($show as $value) {
                    		$idcd = $value["idcd"];
                    		//echo $idcd;
                    		$kq = $this->cart->addCart1($idcd,$iduser,$status);
                    		//print_r($kq);
                    	}
                    	unset($_SESSION['shopping_cart']);
                    	$this->view("messa",[
                    		"mes"=>$messa,
                    	]);
                 	}
}else{
	$messa="Bạn Chưa Chọn Sản Phẩm";
	$this->view("messa",[
                    		"mes"=>$messa,
                    	]);
}
      if(isset($_POST['buynouser'])){
      		$messa = "Bạn Đã Đặt Hàng Thành Công , Chúng Tôi Sẽ Liên Lạc Với Bạn Trong Thời Gian Sớm Nhất";
      		$name = $_POST["name"];
      		$phone = $_POST["phone"];
      		$adress = $_POST["adress"];
      		$notes  = $_POST["notes"];
          	$status = 0;
          	foreach ($_SESSION["shopping_cart"] as $key=>$value) {
			$quantity = $value["quantity"];
			$idsp = $value["idsp"];
			$kq = $this->cart->addcart($idsp,$quantity);
		}
			$contact = $this->cart->addcontact($name,$adress,$phone,$notes);
			//print_r($contact);die;
			$show = $this->cart->showcart();
			$idct = $this->cart->showcontact();
                    	foreach ($show as $value) {
                    		$idcd = $value["idcd"];
                    		foreach ($idct as $value1) {
                    			$id_contact = $value1["id_contact"];
                    		$kq = $this->cart->addCart2($idcd,$id_contact,$status);
                    		//print_r($kq);die; 	
                    	}}
                    	unset($_SESSION['shopping_cart']);
                    	$this->view("messa",[
                    		"mes"=>$messa,
                    	]);
                 	
    }
	$this->view("cart");
	}
	static function ShowCart(){
		session_start();
		$this->view("cart");
	}
	static function test(){
		print_r("Aaaaaaaaaaaaaaa");
		//$this->view("test");
	}
	static function delete(){
		session_start();
		$ext = explode('/',$_GET['url']);
		$idsp = $ext[2];
		unset($_SESSION['shopping_cart'][$idsp]);
		$this->view("cart");
	}
}
?>