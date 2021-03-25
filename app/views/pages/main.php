<!-- Brand Start -->
        <div class="brand">
            <div class="container-fluid">
                <div class="brand-slider">
                    <div class="brand-item"><img src="public/img/brand-1.png" alt=""></div>
                    <div class="brand-item"><img src="public/img/brand-2.png" alt=""></div>
                    <div class="brand-item"><img src="public/img/brand-3.png" alt=""></div>
                    <div class="brand-item"><img src="public/img/brand-4.png" alt=""></div>
                    <div class="brand-item"><img src="public/img/brand-5.png" alt=""></div>
                    <div class="brand-item"><img src="public/img/brand-6.png" alt=""></div>
                </div>
            </div>
        </div>
        <!-- Brand End -->      
        
        <!-- Feature Start-->
        <div class="feature">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fab fa-cc-mastercard"></i>
                            <h2>Thanh Toán</h2>
                            <p>
                                Thanh Toán Dễ Dàng Đơn Giản , Uy Tín
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-truck"></i>
                            <h2>Giao Hàng</h2>
                            <p>
                                Giao Hàng Mọi Địa Chỉ Trên Toàn Quốc
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-sync-alt"></i>
                            <h2>10 Ngày Đổi Trả</h2>
                            <p>
                                Đổi Trả Hàng Nhanh Chóng 
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 feature-col">
                        <div class="feature-content">
                            <i class="fa fa-comments"></i>
                            <h2>Hỗ trợ 24/7</h2>
                            <p>
                                Hỗ Trợ Mọi Thắc Mắc Của Khách Hàng 24/24
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End-->      
        
        <!-- Category Start-->
        <div class="category">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="public/img/category-3.jpg" />
                            <a class="category-name" href="">
                                <p>Quần Áo</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-250">
                            <img src="public/img/category-4.jpg" />
                            <a class="category-name" href="">
                                <p>Dụng Cụ Làm Đẹp</p>
                            </a>
                        </div>
                        <div class="category-item ch-150">
                            <img src="public/img/category-5.jpg" />
                            <a class="category-name" href="">
                                <p>Phụ Kiện</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-150">
                            <img src="public/img/category-6.jpg" />
                            <a class="category-name" href="">
                                <p>Mỹ Phẩm</p>
                            </a>
                        </div>
                        <div class="category-item ch-250">
                            <img src="public/img/category-7.jpg" />
                            <a class="category-name" href="">
                                <p>Some text goes here that describes the image</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="category-item ch-400">
                            <img src="public/img/category-8.jpg" />
                            <a class="category-name" href="">
                                <p>Đầm , Váy Sexy Cho Phái Nữ</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category End-->       
        
        <!-- Call to Action Start -->
        <div class="call-to-action">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h1>Gọi cho chúng tôi</h1>
                    </div>
                    <div class="col-md-6">
                        <a href="tel:0363566937">+0363566937</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call to Action End -->       
        
        <!-- Featured Product Start -->
        <div class="featured-product product">
            <div class="container-fluid2">
                <div class="section-header">
                    <h1>Thời Trang Nam</h1>
                </div>
                
                <div class="row align-items-center product-slider product-slider-4">
                    <?php foreach ($data["showmainM"] as $value) { ?>
                    <div class="col-lg-3">   
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
                                    <img  height="400" width="400" src="./public/image/<?php echo $value["image"]?>" alt="Product Image">
                                </a>
                                <div class="product-action">
                                    <a href="#"><i class="fa fa-cart-plus"></i></a>
                                    <a href="#"><i class="fa fa-heart"></i></a>
                                    <a href="#"><i class="fa fa-search"></i></a>
                                </div>
                            </div>
                            <div class="product-price">
                                <h3><span><?php echo number_format($value["price"],0,',','.') ?></span></h3>
                                <a class="btn" href="./ShoppingCart/addcart/<?php echo $value["id"]?>"><i class="fa fa-shopping-cart"></i>Mua Hàng</a>
                            </div>
                        </div>

                    </div>
                        <?php } ?>           
                </div>
            
            </div>
        </div>
        <!-- Featured Product End -->       
        
        <!-- Newsletter Start -->
        
        <!-- Newsletter End -->        
        
        <!-- Recent Product Start -->
        <div class="recent-product product">
            <div class="container-fluid1">
                <div class="section-header">
                    <h1>Thời Trang Nữ</h1>
                </div>
                <div class="row align-items-center product-slider product-slider-4">
                    <?php foreach ($data["showmainF"] as $value) { ?>
                    <div class="col-lg-3">
                        <div class="product-item">
                            <div class="product-title">
                                <a href="#"><?php echo $value["name"] ?></a>
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
                                    <img  height="400" width="400" src="./public/image/<?php echo $value["image"]?>" alt="Product Image">
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
            </div>
        </div>
        <!-- Recent Product End -->
        
        <!-- Review Start -->
        <div class="review">
            <div class="container-fluid">
                <div class="row align-items-center review-slider normal-slider">
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="public/img/review-1.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Customer Name</h2>
                                <h3>Profession</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="public/img/review-2.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Customer Name</h2>
                                <h3>Profession</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="review-slider-item">
                            <div class="review-img">
                                <img src="public/img/review-3.jpg" alt="Image">
                            </div>
                            <div class="review-text">
                                <h2>Customer Name</h2>
                                <h3>Profession</h3>
                                <div class="ratting">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur vitae nunc eget leo finibus luctus et vitae lorem
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Review End -->        