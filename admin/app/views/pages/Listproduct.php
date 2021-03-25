   
                  <!-- Header -->
						<div class="rowwwww">
							<div class="col-xl-7">
                  <!-- Top Products -->
                  <div class="card card-default" data-scroll-height:max>
                    <div class="card-header justify-content-between mb-4">
                      <h2>Danh Sách Sản Phẩm</h2>
                      <div>
                          
                          <div class="dropdown show d-inline-block widget-dropdown">
                            <a href="./Listproduct/addList/<?php echo $data["id"]?>">
                              Thêm Sản Phẩm</a>
                            </div>
                      </div>
                    </div>
                    
                      <table class="card-body py-0">
                      <thead>
                        <tr>
                          <th>ảnh</th>
                          <th>tên</th>
                          <th>sale</th>
                          <th>price</th>
                          <th>so lượng</th> 
                          <th>tùy chọn</th>
                        </tr>
                      </thead>
                      <?php foreach ($data["show"] as $value) {?>
                      <tr>
                        <td><img src="../public/image/<?php echo $value["image"]?>" height="100" width="100" ></a></td>
                        <td><?php echo $value["name"] ?></td>
                        <td><?php echo number_format($value["sale"],0,',','.').' Đồng' ?></td>
                        <td><?php echo number_format($value["price"],0,',','.').' Đồng' ?></td>
                        <td><?php echo $value["style"]?></td>
                        <td><a href="./Listproduct/DeleteProduct1/<?php echo $value["id"]?>">xóa</a>&emsp; &emsp;<a href="./Listproduct/UpdateProduct/<?php echo $value["id"]?>">sửa</a>&emsp; &emsp;<a href="./ListImage/ShowImage/<?php echo $value["id"]?>">Xem</a></td>
                      </tr> 
                                            <?php } ?>   
                      </table>
                     
                      
                  </div>
</div>
						</div>