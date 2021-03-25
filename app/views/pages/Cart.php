<div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Cart</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Cart Start -->
        <div class="cart-page">
            <div class="container-fluid">
                <form action="./ShoppingCart/Cart" method="POST">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="cart-page-inner">
                            <div class="table-responsive">
                                
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Tên Sản Phẩm</th>
                                            <th>Size</th>
                                            <th>Giá</th>
                                            <th>Số Lượng</th>
                                            <th>Tổng Cộng</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                     <?php if(isset($_SESSION['shopping_cart'])){ 
                                        $total = 0;
                                        foreach ($_SESSION['shopping_cart'] as $key=>$value) {
                                            $subtotal = $value["quantity"]*$value["pricecart"];
                                            $total+=$subtotal;
                                         ?>
                                    <tbody class="align-middle">
                                        <input type="hidden" value="<?php echo $value["idsp"]?>" name="idsp">
                                        <input type="hidden" value="<?php if(isset($_SESSION["iduser"])){ echo $_SESSION["iduser"]; } ?>" name="iduser">
                                        <input type="hidden" value="<?php echo $value["quantity"]?>" name="quantity">
                                        <input type="hidden" value="<?php echo $subtotal ?>" name="subtotal">
                                        <tr>
                                            <td>
                                                <div class="img">
                                                    <a href="#"><img src="./public/image/<?php echo $value["imagecart"]?>" alt="Image"></a>
                                                    <p><?php echo $value["namecart"]?></p>
                                                </div>
                                            </td>
                                            <td><?php echo $value["sizecart"]?></td>
                                            <td><?php echo number_format($value["pricecart"],0,',','.')?> đ</td>
                                            <td>
                                                <div class="qty">
                                                    
                                                    <input type="number" min="1" max="5" name="quantity[<?php echo $value['idsp'] ?>]" value="<?php echo $value["quantity"]?>">
                                                    
                                                </div>
                                            </td>
                                            <td><?php echo number_format($subtotal,0,',','.')?> đ</td>
                                            <td>
                                                <a href="./ShoppingCart/delete/<?php echo $value["idsp"]?>"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                <?php } }?>
                                </table>
                           
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart-page-inner">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="coupon">
                                        <input type="text" placeholder="Coupon Code">
                                        <button>Apply Code</button>
                                    </div>
                                </div>
                                 <?php if(isset($_SESSION['shopping_cart'])){  ?>
                                <div class="col-md-12">
                                    <div class="cart-summary">
                                        <div class="cart-content">
                                            <h1>Thanh Toán</h1>
                                            <p>Tổng Tiền<span><?php echo number_format($total,0,',','.')?> đ</span></p>
                                            <p>Phí Ship<span>20.000đ</span></p>
                                            <h2>Tổng Cộng<span><?php echo number_format($total+20000,0,',','.')?></span></h2>
                                        </div>
                                        <div class="cart-btn">
                                            <button type="submit" name="update">Cập Nhật</button>
                                            <button type="submit" name="buy">Mua Hàng</button>
                                        </div>
                                    </div>
                                </div>
                                  <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>