<div class="card card-default">
                    <div class="card-header card-header-border-bottom">
                      <h2>Form pill</h2>
                    </div>
                    <div class="card-body">
                      <form action="./ListImage/AddImage/<?php echo $data["id"]?>" method="POST" class="form-pill" enctype="multipart/form-data">
                       
                        <div class="form-group">
                          <label for="exampleFormControlInput3">image 1</label>
                          <input type="file" class="form-control" id="exampleFormControlInput3" placeholder="image" name="image">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput3">image 2 </label>
                          <input type="file" class="form-control" id="exampleFormControlInput3" placeholder="image1" name="image1">
                        </div>
                        <div class="form-group">
                          <label for="exampleFormControlInput3">image 3</label>
                          <input type="file" class="form-control" id="exampleFormControlInput3" placeholder="image2" name="image2">
                        </div>
                          <button type="submit" class="btn btn-primary btn-default" name="bnaddd">Submit</button>
                        
                      </form>
                    </div>
                  </div>
                