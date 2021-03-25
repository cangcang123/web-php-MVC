<?php session_start();
?>
      <div class="page-wrapper">
                  <!-- Header -->
          <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
              <!-- Sidebar toggle button -->
              <button id="sidebar-toggler" class="sidebar-toggle">
                <span class="sr-only">Toggle navigation</span>
              </button>
              <!-- search form -->
              <div class="search-form d-none d-lg-inline-block">
                <div class="input-group">
                  <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                  </button>
                  <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."
                    autofocus autocomplete="off" />
                </div>
                <div id="search-results-container">
                  <ul id="search-results"></ul>
                </div>
              </div>

              <div class="navbar-right ">
                <ul class="nav navbar-nav">
                  <!-- Github Link Button -->
                  <li class="github-link mr-3">
                    <a class="btn btn-outline-secondary btn-sm" href="https://github.com/tafcoder/sleek-dashboard" target="_blank">
                      <span class="d-none d-md-inline-block mr-2">Source Code</span>
                      <i class="mdi mdi-github-circle"></i>
                    </a>

                  </li>
                  <li class="dropdown notifications-menu">
                    <button class="dropdown-toggle" data-toggle="dropdown">
                      <i class="mdi mdi-bell-outline"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li class="dropdown-header">You have 5 notifications</li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-plus"></i> New user registered
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-remove"></i> User deleted
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-supervisor"></i> New client
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-server-network-off"></i> Server overloaded
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                        </a>
                      </li>
                      <li class="dropdown-footer">
                        <a class="text-center" href="#"> View All </a>
                      </li>
                    </ul>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="assets/img/user/user.png" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block"><?php echo $_SESSION["name"]; ?>/span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                          <?php echo $_SESSION["name"]; ?> <small class="pt-1"><?php echo $_SESSION["email"]; ?></small>
                        </div>
                      </li>

                      <li>
                        <a href="profile.html">
                          <i class="mdi mdi-account"></i> My Profile
                        </a>
                      </li>
                      <li>
                        <a href="email-inbox.html">
                          <i class="mdi mdi-email"></i> Message
                        </a>
                      </li>
                      <li>
                        <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                      </li>
                      <li>
                        <a href="#"> <i class="mdi mdi-settings"></i> Account Setting </a>
                      </li>

                      <li class="dropdown-footer">
                        <a href="./homelogin/logout"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>


        <div class="content-wrapper">
          <div class="content">						 
                  <!-- Top Statistics -->
						
</div>
							<div class="col-xl-4 col-md-12">
                  <!-- Doughnut Chart -->
                  
</div>
						</div>

						<div class="row">
						
							<div class="col-xl-4 col-lg-6 col-12"> 
                  <!-- Top Sell Table -->
                 
</div>
							<div class="col-xl-4 col-12">
                        <!-- Notification Table -->
                        
</div>
						</div>

						<div class="row">
							<div class="col-12"> 
                  <!-- Recent Order Table -->
                  <div class="card card-table-border-none" id="recent-orders">
                    

                  </div>
</div>
						</div>

						<div class="row">
							<div class="col-xl-6"> 
                  <!-- To Do list -->
                  
</div>
							<div class="col-xl-6">
                  <!-- area chart -->

</div>
						</div>

						<div class="row">

							<div class="col-xl-7">
                  <!-- Top Products -->
                  <div class="card card-default" data-scroll-height="580">
                    <div class="card-header justify-content-between mb-4">
                      <h2>Top Products</h2>
                      <div>
                          <button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
                          <div class="dropdown show d-inline-block widget-dropdown">
                              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-product" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                              </a>
                              <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-product">
                                <li class="dropdown-item"><a  href="#">Update Data</a></li>
                                <li class="dropdown-item"><a  href="#">Detailed Log</a></li>
                                <li class="dropdown-item"><a  href="#">Statistics</a></li>
                                <li class="dropdown-item"><a  href="#">Clear Data</a></li>
                              </ul>
                            </div>
                      </div>

                    </div>
                    <div class="card-body py-0">
                      <div class="media d-flex mb-5">
                        <div class="media-image align-self-center mr-3 rounded">
                          <a href="#"><img src="assets/img/products/p1.jpg" alt="customer image"></a>
                        </div>
                        <div class="media-body align-self-center">
                          <a href="#"><h6 class="mb-3 text-dark font-weight-medium"> Coach Swagger</h6></a>
                          <p class="float-md-right"><span class="text-dark mr-2">20</span>Sales</p>
                          <p class="d-none d-md-block">Statement belting with double-turnlock hardware adds “swagger” to a simple.</p>
                          <p class="mb-0">
                            <del>$300</del>
                            <span class="text-dark ml-3">$250</span>
                          </p>
                        </div>
                      </div>

                      <div class="media d-flex mb-5">
                        <div class="media-image align-self-center mr-3 rounded">
                          <a href="#"><img src="assets/img/products/p2.jpg" alt="customer image"></a>
                        </div>
                        <div class="media-body align-self-center">
                          <a href="#"><h6 class="mb-3 text-dark font-weight-medium"> Coach Swagger</h6></a>
                          <p class="float-md-right"><span class="text-dark mr-2">20</span>Sales</p>
                          <p class="d-none d-md-block">Statement belting with double-turnlock hardware adds “swagger” to a simple.</p>
                          <p class="mb-0">
                            <del>$300</del>
                            <span class="text-dark ml-3">$250</span>
                          </p>
                        </div>
                      </div>

                      <div class="media d-flex mb-5">
                        <div class="media-image align-self-center mr-3 rounded">
                          <a href="#"><img src="assets/img/products/p3.jpg" alt="customer image"></a>
                        </div>
                        <div class="media-body align-self-center">
                          <a href="#"><h6 class="mb-3 text-dark font-weight-medium"> Gucci Watch</h6></a>
                          <p class="float-md-right"><span class="text-dark mr-2">10</span>Sales</p>
                          <p class="d-none d-md-block">Statement belting with double-turnlock hardware adds “swagger” to a simple.</p>
                          <p class="mb-0">
                            <del>$300</del>
                            <span class="text-dark ml-3">$50</span>
                          </p>
                        </div>
                      </div>
                      </div>
                  </div>
</div>
						</div>
</div>