<div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Sửa Hình Ảnh</h2>
                    </div>
                    <div class="card-body">
                      <?php foreach ($data["show"] as $value1) {
 ?>
                      <form action="./ListImage/UpdateImage/<?php echo $data["id"]?>/<?php echo $data["idp"]?>" method="POST" class="form-pill" enctype="multipart/form-data">
                        
                        <div class="form-group">
                          <label for="exampleFormControlInput3">image</label>
                          <input type="file" class="form-control" id="exampleFormControlInput3" value="<?php echo $value1["name"]?>"name="image">
                        </div>
                          <button type="submit" class="btn btn-primary btn-default" name="bntadd">Submit</button>
                        
                      </form>
                    <?php } ?>
                    </div>
                  </div>
                