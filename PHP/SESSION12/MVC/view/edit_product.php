<?php 

while ($row = $product->fetch_assoc()) {
  # code...
  $name = $row['product_name'];
  $category = $row['product_category_id'];
  
  $des = $row['product_description'];
  $price = $row['product_price'];
  //$row['product_img'];
}
//var_dump($des);
//var_dump($category);
 ?>
      <form role="form" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">product category:</label>
                  <input  class="form-control" name ="category" id="1" placeholder="Enter product category" value= '<?php echo $category; ?>'>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">product name</label>
                  <input type="text" class="form-control" name = "name" id="2" placeholder="Enter product name"
                  value= '<?php echo $name; ?>'>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">product description</label>
                  <input type="text" class="form-control" name ="description" id="3" placeholder="Enter product description" value= '<?php echo  $des; ?>'>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">product price</label>
                  <input type="number" class="form-control" name ="price" id="4" placeholder="Enter product price" value='<?php echo $price ?>'>
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">product image</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" name="update" class="btn btn-primary">Submit</button>
              </div>
            </form>
    </section>

    