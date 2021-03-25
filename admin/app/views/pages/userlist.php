<div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Thong Tin User</h2>
                    </div>
                    <?php foreach ($data["showlist"] as $value) {?>
                    <div class="card-body">
                      <form action="./users/update/<?php echo $value["iduser"]?>" method="POST" class="form-pill">
                        <div class="form-group">
                          <label for="exampleFormControlInput3">name</label>
                          <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="name" value="<?php echo $value["name"]?>" name="name">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput3">username</label>
                          <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="username" value="<?php echo $value["username"]?>" name="username" disabled>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput3">email</label>
                          <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="email" value="<?php echo $value["email"]?>" name="email">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput3">phone</label>
                          <input type="tel" class="form-control" id="exampleFormControlInput3" placeholder="phone" value="<?php echo $value["phone"]?>" name="phone">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput3">adress</label>
                          <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="adress" value="<?php echo $value["adress"]?>" name="adress">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput3">password</label>
                          <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="password" value="<?php echo $value["password"]?>" name="password">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect3">adgroup</label>
                          <select class="form-control" value="<?php echo $value["adgroup"]?>" name="adgroup">
                            <option value="1">Khách Vip = 1 &emsp; &emsp; &emsp;</option>
                            <option value="0">khách thường = 0&emsp; &emsp; &emsp;</option>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="exampleFormControlSelect3">active</label>
                          <select class="form-control" value="<?php echo $value["active"]?>" name="active">
                            <option value="1">Admin = 1&emsp; &emsp; &emsp;</option>
                            <option value="0">khách thường = 0&emsp; &emsp; &emsp;</option>
                          </select>
                      </div>
                        
                          <button type="submit" class="btn btn-primary btn-default" name="bnaddd">Submit</button>
                        
                      </form>
                    <?php }?>
                    </div>
                  </div>
                