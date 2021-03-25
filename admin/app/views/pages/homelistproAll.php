            <div class="rowwwww">
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
                        
                        <div class="media-body align-self-center">
                          <table class="mb-3 text-dark font-weight-medium">
                            <thead>
                              <tr>
                                <th>name</th>
                                <th>loại sản phẩm</th>
                                <th>tùy chọn &emsp; &emsp; &emsp;</th>
                                <th><a href="./listpro/addList">thêm  &emsp; &emsp; </th>
                              </tr>
                            </thead>
                            <?php foreach ($data["show"] as $value) {
                              foreach ($data["name"] as $value1) {
                                
                      ?>
                            <tr>
                              <td><?php echo $value["name"]?>&emsp; &emsp; &emsp; &emsp; &emsp; </td>
                              <td><?php echo $value1["name"]?>&emsp; &emsp; &emsp; &emsp; &emsp;</td>
                              <td><a href="./Listproduct/showList/<?php echo $value["idlist"]?>">xem</a></td>
                              <td>sửa &emsp; &emsp;
                              </td>
                              <td>xóa</td>
                            </tr>
                            <?php } } ?>
                          </table>
                          
                        </div>
                      </div>
                    
                      </div>
                  </div>
</div>
            </div>