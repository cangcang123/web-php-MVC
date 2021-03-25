     <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Product List</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Product List Start -->
        <div class="product-view">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="row">
                            
                            <?php foreach ($data["showmainM"] as $value) { ?>
                            <div class="col-md-4">
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="./product/ShowProduct/<?php echo $value["id"]?>"><?php echo $value["name"] ?></a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="./product/ShowProduct/<?php echo $value["id"]?>">
                                            <img src="./public/image/<?php echo $value["image"]?>" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span><?php echo number_format($value["price"],0,',','.') ?></span></h3>
                                        <a class="btn" href="./ShoppingCart/addcart/<?php echo $value["id"]?>"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>    
                        </div>      
                        <!-- Pagination Start -->
                        <div class="col-md-12">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Pagination Start -->
                    </div>         
                    
                    <!-- Side Bar Start -->
                    <div class="col-lg-4 sidebar">
                                           
                        <div class="sidebar-widget widget-slider">
                            
                            <div class="sidebar-slider normal-slider">
                                <?php foreach ($data["showmainM1"] as $value) { ?> 
                                <div class="product-item">
                                    <div class="product-title">
                                        <a href="./product/ShowProduct/<?php echo $value["id"]?>"><?php echo $value["name"] ?></a>
                                        <div class="ratting">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="product-image">
                                        <a href="./product/ShowProduct/<?php echo $value["id"]?>">
                                            <img src="./public/image/<?php echo $value["image"]?>" alt="Product Image">
                                        </a>
                                        <div class="product-action">
                                            <a href="#"><i class="fa fa-cart-plus"></i></a>
                                            <a href="#"><i class="fa fa-heart"></i></a>
                                            <a href="#"><i class="fa fa-search"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-price">
                                        <h3><span><?php echo number_format($value["price"],0,',','.') ?></span></h3>
                                        <a class="btn" href="./ShoppingCart/addcart/<?php echo $value["id"]?>"><i class="fa fa-shopping-cart"></i>Buy Now</a>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                              
                        </div>
                          
                        
                        <div class="sidebar-widget brands"> Views
                            <h2 class="title">Our Brands</h2>
                            <?php foreach ($data["showlist"] as $value) {
                               ?>
                            <ul>
                                
                                <li><a class="nav-link dropdown-toggle"   href="./homeM/shownameM1/<?php echo $value["idnamepro"]?>/<?php echo $value["idlist"]?>"><?php echo $value["name"]?> </a><span>(45)</span>
                                </li>
                       
                            </ul>
                        <?php } ?>
                        </div>
                    </div>
                    <!-- Side Bar End -->
                </div>
            </div>
        </div>
        <!-- Product List End -->  
        
        <!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="img/brand-1.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-2.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-3.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-4.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-5.png" alt=""></div>
                    <div class="brand-item"><img src="img/brand-6.png" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->
        
        <!-- Footer Start -->
        
        <!-- Footer Bottom End -->       