<div class="row">
        <div class="col-xs-18">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
          
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                	
                  <th>Rendedne</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                  <!-- <th>CSS grade</th> -->
                  <th>O00000000</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                  <td>Trident</td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td> 
                  <td>1</td>
                </tr>
                <?php 
                  while ($row = $list_product->fetch_assoc()) {
                    # code...
                    echo "<tr>";
                    echo "<td>" . $row['product_category_id'] . "</td>" ;
                    echo "<td>" . $row['product_name'] . "</td>";
                    echo "<td>" . $row['product_description'] . "</td>";
                    echo "<td>" . $row['product_price'] . "</td>";
                    echo "<td>" . $row['product_img'] . "</td>";
                   	echo "<td> 
						 <div class='text-center'>
                	<a class='btn btn-bitbucket glyphicon glyphicon-pencil' href ='index.php?controller=product&action=edit_product&id=".$row['id']."'></a>
                |
                	<a class='btn btn-vk glyphicon glyphicon-remove' href ='index.php?controller=product&action=delete_product&id=".$row['id']."'></a>
              		</div>
                   	
                    </tr>";
                  }
                 ?>

               
                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                  <!-- <th>CSS grade</th> -->
                </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
	