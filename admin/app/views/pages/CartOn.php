
              <div class="row">
                <div class="col-12">
                  <!-- Recent Order Table -->
                  <div class="card card-table-border-none" id="recent-orders">
                    <div class="card-header justify-content-between">
                      <h2>Danh Sách Đơn Hàng</h2>
                      <div class="date-range-report ">
                        <span></span>
                      </div>
                    </div>
                    <div class="card-body pt-0 pb-5">
                      <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <thead>
                          <tr>
                            <th class="d-none d-md-table-cell">Size</th>
                            <th>Giá</th>
                            <th>Màu</th>
                            <th>Tên Sản Phẩm</th>
                            <th>SL</th>
                            <th>Tổng Tiền</th>
                            <th>Tên</th>
                            <th>Sđt</th>
                            <th>địa chỉ</th>
                            <th>Trạng Thái</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($data["show"] as $value) {
                             $subtotal = $value["price"]*$value["quantity"];
                          ?>
                          <tr>
                            <td >
                              <a class="d-none d-md-table-cell" href=""> <?php echo $value["size"]?></a>
                            </td>
                            <td class="d-none d-md-table-cell"  ><?php echo $value["price"]?></td>
                            <td class="text-dark"><?php echo $value["color"]?></td>
                            <td class="d-none d-md-table-cell"><?php echo $value["nameproduct"]?></td>                                                     
                            <td >
                              <span class="badge badge-success"><?php echo $value["quantity"]?></span>
                            </td>
                            <td><?php echo number_format($subtotal,0,',','.')?> đ</td>
                            <td><?php echo $value["nameuser"]?></td>
                            <td><?php echo $value["phone"]?></td>
                            <td><?php echo $value["adress"]?></td>
                            <td ><span class="badge badge-success">Đã Duyệt</span></td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                                  <li class="dropdown-item">
                                    <a href="./CheckCart/delete/<?php echo $value["idc"]?>">Xóa</a>
                                  </li>
                                </ul>
                              </div>
                            </td>
                          </tr>
                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
</div>
              </div>  