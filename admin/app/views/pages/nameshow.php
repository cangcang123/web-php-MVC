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
                      
                      <?php //foreach ($data["sex"] as $value1) { ?>
                      <div class="media d-flex mb-5">
                        
                        <table class="media-body align-self-center">
                         
                            <thead>
                              <tr>
                                <th>name</th>
                                <th>giới tính</th>
                                <th>thuộc tính &emsp; &emsp; &emsp;</th>
                                <th>tùy chọn &emsp; &emsp; &emsp;</th>
                                <th><a href="./Listname/addList/?>">thêm</a></th>
                                <th>&emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;1</th>
                              </tr>
                            </thead>
                            <?php foreach ($data["show"] as $value) { ?>
                              
                            <tr>
                              <td><?php echo $value["name"]?>&emsp; &emsp; &emsp; &emsp; &emsp; </td>
                              <td><?php if($value["idsex"]==1){
                                echo "Nam";
                              }else{
                               echo "Nữ";
                              } ?>&emsp; &emsp; &emsp; &emsp; </td>
                              <td><?php if($value["idclas"]==1){
                                echo "Người Lớn";
                              }else{
                                echo "Trẻ Em";
                              } ?>&emsp; &emsp; &emsp; &emsp; </td>
                              <td><a action="./Listpro/showlist" href="./Listpro/showlist/<?php echo $value["idname"];?>">xem</a></td>
                            </tr>
                            <?php } ?>
                         
                            
                          
             
                        </table>
                      </div>
                    <?php //} ?>
                    
                      </div>
                  </div>
</div>
            </div> 