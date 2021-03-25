<div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Form pill</h2>
                    </div>
                    <div class="card-body">
                      <form action="./Listpro/addList/<?php echo $data["id"]?>" method="POST" class="form-pill">
                        <div class="form-group">
                          <label for="exampleFormControlInput3">name</label>
                          <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="name" name="name">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect3">Kiểu sản phẩm</label>
                          <select class="form-control" name="idnamepro">
                            <?php foreach ($data["idname"] as $value) {?>
                            <option value="<?php echo $value["idname"]?>"><?php echo $value["name"]?>&emsp; &emsp; &emsp;</option>
                            
                          <?php }?>
                          </select>
                        </div>
                        
                          <button type="submit" class="btn btn-primary btn-default" name="bnaddd">Submit</button>
                        
                      </form>
                    </div>
                  </div>
                