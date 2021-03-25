<?php
$ok=1;
 if(isset($_SESSION['shopping_cart'])){
  foreach ($_SESSION['shopping_cart'] as $k => $v) {
    if(isset($v)){
      $ok=2;
    }
  }
 }
 ?>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        ngothanhcang966@gmail.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        +0363566937
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="./home/homevi" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="./home" class="nav-item nav-link active">Trang Chủ</a>
                            <a href="cart.html" class="nav-item nav-link">Gio Hàng</a>
                            <a href="checkout.html" class="nav-item nav-link">Thanh Toán</a>
                            <a href="my-account.html" class="nav-item nav-link">Account</a>
                            <div class="nav-item dropdown">
                                <div class="dropdown-menu">
                                    <a href="wishlist.html" class="dropdown-item">Wishlist</a>
                                    <a href="login.html" class="dropdown-item">Login & Register</a>
                                    <a href="contact.html" class="dropdown-item">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                                    <?php if(isset($_SESSION["name"])){ 
                                        echo "Xin Chào ".$_SESSION["name"];
                                    }else{echo"User Account";}?></a>
                                <div class="dropdown-menu">
                                    <a href="register/login" class="dropdown-item"><?php if(isset($_SESSION["name"])){ 
                                        echo "Tài Khoản";
                                    }else{echo"Login";}?></a>
                                    <a href="register/registers" class="dropdown-item"><?php if(isset($_SESSION["name"])){ 
                                        echo "Thoát";
                                    }else{echo"Đăng Ký";}?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->  
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="./home">
                                <img src="public/img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form action="./home/search" method="POST">
                        <div class="search">
                            <input type="text" name="namesearch" placeholder="Search">
                            <button name="search" class="fa fa-search" ></button>
                        </div>
                    </form>
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="wishlist.html" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="./ShoppingCart/ShowCart" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>
                                    <?php 
                 if($ok!=2){
                  echo "0";
                }else{
                  $item = $_SESSION['shopping_cart'];
                  echo count($item);
                }?>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        