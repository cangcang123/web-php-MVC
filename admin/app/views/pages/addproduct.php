<div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Form pill</h2>
                    </div>
                    <div class="card-body">
                      <form action="./Listproduct/addList" method="POST" class="form-pill" enctype="multipart/form-data">
                        <div class="form-group">
                          <label for="exampleFormControlInput3">name</label>
                          <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="name" name="name">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput3">image</label>
                          <input type="file" class="form-control" id="exampleFormControlInput3" placeholder="image" name="image">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput3">image1</label>
                          <input type="file" class="form-control" id="exampleFormControlInput3" placeholder="image1" name="image1">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput3">image2</label>
                          <input type="file" class="form-control" id="exampleFormControlInput3" placeholder="image2" name="image2">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput3">image3</label>
                          <input type="file" class="form-control" id="exampleFormControlInput3" placeholder="image3" name="image3">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput3">size</label>
                          <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="size" name="size">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput3">color</label>
                          <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="color" name="color">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput3">price</label>
                          <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="price" name="price">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput3">sale</label>
                          <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="sale" name="sale">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput3">content</label>
                          <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="content" name="content">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput3">style</label>
                          <input type="text" class="form-control" id="exampleFormControlInput3" placeholder="style" name="style">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlSelect3">idprolist</label>
                          <select class="form-control" name="idprolist">
                            <?php foreach ($data["listt"] as $value) {?>
                            <option value="<?php echo $value["idlist"]?>"><?php echo $value["name"]?>&emsp; &emsp; &emsp;</option>
                            aaaaaaaaaaa
                          <?php }?>
                          </select>
                        </div>
                        
                          <button type="submit" class="btn btn-primary btn-default" name="bnaddd">Submit</button>
                        
                      </form>
                    </div>
                  </div>
                