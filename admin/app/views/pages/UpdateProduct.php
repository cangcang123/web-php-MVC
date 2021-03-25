<div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Form pill</h2>
                    </div>
                    <div class="card-body">
                      <?php foreach ($data["show"] as $value1) {
 ?>
                      <form action="./Listproduct/UpdateProductAll/<?php echo $value1["id"]?>" method="POST" class="form-pill" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="exampleFormControlInput3">name</label>
                          <input type="text" class="form-control" id="exampleFormControlInput3" value="<?php echo $value1["name"]?>" name="name">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput3">image</label>
                          <input type="file" class="form-control" id="exampleFormControlInput3" value="<?php echo $value1["image"]?>"name="image">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput3">price</label>
                          <input type="text" class="form-control" id="exampleFormControlInput3" value="<?php echo $value1["price"]?>" name="price">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput3">size</label>
                          <input type="text" class="form-control" id="exampleFormControlInput3" value="<?php echo $value1["size"]?>" name="size">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput3">color</label>
                          <input type="text" class="form-control" id="exampleFormControlInput3" value="<?php echo $value1["color"]?>" name="color">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput3">sale</label>
                          <input type="text" class="form-control" id="exampleFormControlInput3" value="<?php echo $value1["sale"]?>" name="sale">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput3">content</label>
                          <input type="text" class="form-control" id="exampleFormControlInput3" value="<?php echo $value1["content"]?>" name="content">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput3">style</label>
                          <input type="text" class="form-control" id="exampleFormControlInput3" value="<?php echo $value1["style"]?>" name="style">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect3">idprolist</label>
                          <select class="form-control" value="<?php echo $value1["idprolist"]?>" name="idprolist">
                            <?php foreach ($data["listt"] as $value) {?>
                            <option value="<?php echo $value["idlist"]?>"><?php echo $value["name"]?>&emsp; &emsp; &emsp;</option>
                            aaaaaaaaaaa
                          <?php }?>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect3">idprolist</label>
                          <select class="form-control" value="<?php echo $value1["idprolist"]?>" name="active">
                            <option value="1">Còn Hàng&emsp; &emsp; &emsp;</option>
                            <option value="0">Hết Hàng&emsp; &emsp; &emsp;</option>
                          </select>
                      </div>
                        
                          <button type="submit" class="btn btn-primary btn-default" name="bnaddd">Submit</button>
                        
                      </form>
                    <?php } ?>
                    </div>
                  </div>
                