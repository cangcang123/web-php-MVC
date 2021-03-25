<!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item active">Login & Register</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Login Start -->
        <div class="login">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">    
                        <div class="register-form">
                            <form action="./register/registers" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Name</label>
                                    <input class="form-control" type="text" placeholder="Name" name="name">
                                </div>
                                <div class="col-md-6">
                                    <label>Username</label>
                                    <input class="form-control" type="text" id="un" placeholder="Username" name="username">
                                    <div id="messageUsername"></div>
                                </div>
                                <div class="col-md-6">
                                    <label>E-mail</label>
                                    <input class="form-control" type="text" placeholder="E-mail" name="email">
                                </div>
                                <div class="col-md-6">
                                    <label>Mobile No</label>
                                    <input class="form-control" type="text" placeholder="Mobile No" name="phone">
                                </div>
                                <div class="col-md-6">
                                    <label>Adress</label>
                                    <input class="form-control" type="text" placeholder="Adress" name="adress">
                                </div>
                                <div class="col-md-6">
                                    <label>Password</label>
                                    <input class="form-control" type="password" placeholder="Password" name="password">
                                </div>
                                <div class="col-md-6">
                                    <label>Retype Password</label>
                                    <input class="form-control" type="password" placeholder="Password" name="password2">
                                </div>
                                <div class="col-md-12">
                                    <button type="submit" class="btn" name="bnregister">Submit</button>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Login End -->
<?php if(isset($data["result"])) { ?>
<?php
if($data["result"]==true){
    echo "Đăng Ký Thành Công";
}else{
    echo "Thất Bại";
}
?>
<?php
}
?>
