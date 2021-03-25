
							<div class="row">
								<div class="col-12">
                  <!-- Recent Order Table -->
                  <div class="card card-table-border-none" id="recent-orders">
                    <div class="card-header justify-content-between">
                      <h2>Danh Sách Thành Viên</h2>
                      <div class="date-range-report ">
                        <span></span>
                      </div>
                    </div>
                    <div class="card-body pt-0 pb-5">
                      <table class="table card-table table-responsive table-responsive-large" style="width:100%">
                        <thead>
                          <tr>
                            <th> ID</th>
                            <th class="d-none d-md-table-cell">Username</th>
                            <th class="d-none d-md-table-cell">SĐT</th>
                            <th>địa chỉ</th>
                            <th class="d-none d-md-table-cell">Order Cost</th>
                            <th>Status</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php foreach ($data["showlist"] as $value) { ?>
                          <tr>
                            <td ><?php echo $value["iduser"]?></td>
                            <td >
                              <a class="d-none d-md-table-cell" href=""> <?php echo $value["username"]?></a>
                            </td>
                            <td class="d-none d-md-table-cell"  ><?php echo $value["phone"]?></td>
                            <td class="text-dark"><?php echo $value["adress"]?></td>
                            <td class="d-none d-md-table-cell">$230</td>
                            <td >
                              <span class="badge badge-success">Completed</span>
                            </td>
                            <td class="text-right">
                              <div class="dropdown show d-inline-block widget-dropdown">
                                <a class="dropdown-toggle icon-burger-mini" href="" role="button" id="dropdown-recent-order1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static"></a>
                                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-recent-order1">
                                  <li class="dropdown-item">
                                    <a href="./users/showlist/<?php echo $value["iduser"]?>">Sửa</a>
                                  </li>
                                  <li class="dropdown-item">
                                    <a href="./users/delete/<?php echo $value["iduser"]?>">Xóa</a>
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