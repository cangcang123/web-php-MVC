<div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./home">Home</a></li>
                    <li class="breadcrumb-item active">Checkout</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Checkout Start -->
        <div class="checkout">
            <div class="container-fluid"> 
                <form action="./ShoppingCart/Cart" method="POST">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="checkout-inner">
                            <div class="billing-address">
                                <h2>Điền Thông Tin</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Họ và Tên</label>
                                        <input class="form-control" type="text" placeholder="họ tên" name="name">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Số Điện Thoại</label>
                                        <input class="form-control" type="text" placeholder="số điện thoại" name="phone">
                                    </div>
                                    <div class="col-md-12">
                                        <label>Address</label>
                                        <input class="form-control" type="text" placeholder="Địa chỉ" name="adress">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Nghi Chú</label>
                                        <input class="form-control" type="text" placeholder="nghi chú" name="notes">
                                    </div>
                                    <div class="col-md-12">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="newaccount">
                                            <label class="custom-control-label" for="newaccount">Nhận Hàng Rồi Mới Thanh Toán</label>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>

                    
                        </div>
                    </div>
                    <?php if(isset($_SESSION['shopping_cart'])){ 
                                        $total = 0;
                                        ?>
                    <div class="col-lg-4">
                        <div class="checkout-inner">
                           
                            <div class="checkout-summary">
                                <h1>Thanh Toán</h1>
                                 <?php foreach ($_SESSION['shopping_cart'] as $key=>$value) {
                                            $subtotal = $value["quantity"]*$value["pricecart"];
                                            $total+=$subtotal;
                                          ?>
                                          <input type="hidden" value="<?php echo $value["idsp"]?>" name="idsp">
                                        <input type="hidden" value="<?php echo $value["quantity"]?>" name="quantity">
                                        <input type="hidden" value="<?php echo $subtotal ?>" name="subtotal">
                                <p><?php echo $value["namecart"]?><span><?php echo number_format($value["pricecart"],0,',','.')?> đ</span></p>
                                <p class="sub-total">Số Lượng: <?php echo $value["quantity"]?><span><?php echo number_format($subtotal,0,',','.')?> đ</td></span></p>
                            <?php } ?>
                                <p class="ship-cost">Phí Ship<span>20.000 đ</span></p>
                                <h2>Tổng Cộng<span><?php echo number_format($total+20000,0,',','.')?></span></h2>
                            </div>
                         
                            <div class="checkout-payment">

                                <div class="checkout-btn">
                                    <button  type="submit" name="buynouser" >Mua Hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </form>
            </div>
        </div>