<div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Form pill</h2>
                    </div>
                    <div class="card-body">
                      <form action="./Listname/addList" method="POST" class="form-pill">
                        <div class="form-group">
                          <label for="exampleFormControlInput3">name</label>
                          <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="name" name="name">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect3">Sex</label>
                          <select class="form-control" name="idsex">
                            <?php foreach ($data["sex"] as $value) {?>
                            <option value="<?php echo $value["ids"]?>"><?php echo $value["name"]?>&emsp; &emsp; &emsp;</option>
                            
                          <?php }?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect3">class</label>
                          <select class="form-control" name="idclas">
                            <?php foreach ($data["class"] as $value) {?>
                            <option value="<?php echo $value["idclass"]?>"><?php echo $value["name"]?>&emsp; &emsp; &emsp;</option>
                            
                          <?php }?>
                          </select>
                        </div>
                        
                          <button type="submit" class="btn btn-primary btn-default" name="bnadd">Submit</button>
                        
                      </form>
                    </div>
                  </div>
                