<a href="add_products.php">Add product</a>
<br>
<?php 
// ket noi database
include 'config/connect.php';
$sql = "SELECT products.id, products.name, product_categories.name as category_name FROM product INNER JOIN product_category ON 
products.category_id = product_category.id";

// SELECT product.id, product.name, product_category.name as category_name FROM product INNER JOIN product_category ON products.category_id = product_category.id"
$result = mysqli_query($connect, $sql);
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		$id = $row['id'];
		echo $row['id'].' - '.$row['name'].' - '.$row['category_name'];
		echo "<a href='delete_product.php?idDelete=$id'>DELETE</a>";
		echo " | <a href='edit_product.php?idEdit=$id'>EDIT</a>";
		echo "<br>";
	}
} else {
	echo "No product category";
}
/**
 * dxrfd
 */
class ClassName extends AnotherClass
{
	
	function __construct(argument)
	{
		# code...
	}
}
?>