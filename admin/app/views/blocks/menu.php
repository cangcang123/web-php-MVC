
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="/index.html">
                <svg
                  class="brand-icon"
                  xmlns="http://www.w3.org/2000/svg"
                  preserveAspectRatio="xMidYMid"
                  width="30"
                  height="33"
                  viewBox="0 0 30 33"
                >
                  <g fill="none" fill-rule="evenodd">
                    <path
                      class="logo-fill-blue"
                      fill="#7DBCFF"
                      d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                    />
                    <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                  </g>
                </svg>
                <span class="brand-name">Menu</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">
              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">       
                  <li  class="has-sub active expand" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                      aria-expanded="false" aria-controls="dashboard">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">List Product</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse show"  id="dashboard"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">           
                            <li  class="active" >
                              <a class="sidenav-item-link" href="./Listname/showList">
                                <span class="nav-text">Sản Phẩm Chính</span>
                              </a>
                            </li>                     
                            <li >
                              <a class="sidenav-item-link" href="./Listpro/showall">
                                <span class="nav-text">Sản Phẩm Phụ</span>
                              </a>
                            </li>                    
                      </div>
                    </ul>
                  </li>       
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ui-elements"
                      aria-expanded="false" aria-controls="ui-elements">
                      <i class="mdi mdi-folder-multiple-outline"></i>
                      <span class="nav-text">Sản Phẩm</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="ui-elements"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">             
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#components"
                            aria-expanded="false" aria-controls="components">
                            <span class="nav-text">Quản lí SP</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="components">
                            <div class="sub-menu">                             
                              <li >
                                <a href="./Listproduct/showall">Sản Phẩm</a>
                              </li>                                              
                            </div>
                          </ul>
                        </li>
                      </div>
                    </ul>
                  </li>        
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                      aria-expanded="false" aria-controls="charts">
                      <i class="mdi mdi-chart-pie"></i>
                      <span class="nav-text">User</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="charts"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="./users/showall">
                                <span class="nav-text">User</span>
                                
                              </a>
                            </li>
            </div>
                    </ul>
                  </li>
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                      aria-expanded="false" aria-controls="pages">
                      <i class="mdi mdi-image-filter-none"></i>
                      <span class="nav-text">Đơn Hàng</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="pages"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">                   
                             
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#authentication"
                            aria-expanded="false" aria-controls="authentication">
                            <span class="nav-text">Đơn Hàng Thành Viên</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="authentication">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="./CheckCart/CartOn">Đơn Hàng Đã Duyệt</a>
                              </li>
                              
                              <li >
                                <a href="./CheckCart/CartOff">Đơn Hàng Chưa Duyệt</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#others"
                            aria-expanded="false" aria-controls="others">
                            <span class="nav-text">Đơn Hàng Khách</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="others">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="./CheckCart/CartOnCus">Đơn Hàng Đã Duyệt</a>
                              </li>
                              
                              <li >
                                <a href="./CheckCart/CartOffCus">Đơn Hàng Chưa Duyệt</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>
                      </div>
                    </ul>
                  </li>               
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#documentation"
                      aria-expanded="false" aria-controls="documentation">
                      <i class="mdi mdi-book-open-page-variant"></i>
                      <span class="nav-text">Contact</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="documentation"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">       
                            <li class="section-title">
                              Contact
                            </li>                   
                            <li >
                              <a class="sidenav-item-link" href="rtl.html">
                                <span class="nav-text">Contact</span>                               
                              </a>
                            </li>                      
                      </div>
                    </ul>
                  </li>            
              </ul>
            </div>
            <hr class="separator" />
          </div>
        </aside>