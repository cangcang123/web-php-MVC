   
                  <!-- Header -->
						<div class="rowwwww">
							<div class="col-xl-7">
                  <!-- Top Products -->
                  <div class="card card-default" data-scroll-height:max>
                    <div class="card-header justify-content-between mb-4">
                      <h2>Danh Sách Hình Ảnh</h2>
                      <div>
                          
                          <div class="dropdown show d-inline-block widget-dropdown">
                            <a href="./ListImage/AddImage/<?php echo $data["id"]?>">
                              Thêm Hình Ảnh</a>
                            </div>
                      </div>
                    </div>
                    
                      <table class="card-body py-0">
                      <thead>
                        <tr>
                          <th>ảnh</th>
                          <th>tùy chọn</th>
                        </tr>
                      </thead>
                      <?php foreach ($data["show"] as $value) {?>
                      <tr>
                        <td><img src="../public/image/<?php echo $value["name"]?>" height="100" width="100" ></a></td>                                  
                        <td><a href="./ListImage/DeleteImage/<?php echo $value["idimage"]?>/<?php echo $data["id"]?>">xóa</a>&emsp; &emsp;<a href="./ListImage/Updateimage/<?php echo $value["idimage"]?>/<?php echo $value["idimage"]?>">sửa</a></td>
                      </tr> 
                                            <?php } ?>   
                      </table>
                     
                      
                  </div>
</div>
						</div>