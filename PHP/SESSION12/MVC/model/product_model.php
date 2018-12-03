<?php 

include 'connect.php';
/**
 * 
 */
class product_model extends DB
{
	
	public function get_product()
	{		
		# code...
		$sql =  'select * from product';
		return mysqli_query($this->connectdb(),$sql);
	}
	public function get_product1($id)
	{
			$sql = "select * from product where id = $id";
			 //$ket_qua=mysqli_query($this->connectdb(),$sql);
			 //var_dump($sql);
			 return mysqli_query($this->connectdb(),$sql);
	}
	public function delete_product($id)
	{
		# code...
		$sql = "delete from product where id = $id";
		// echo $sql;
		// exit();
		//header("location:?controller=product&action=view_product ");
		header('Location: index.php?controller=product&action=view_product');
		return mysqli_query($this->connectdb(),$sql);
	}
	public function edit_procduct($id)
	{
			// $sql = "update product_category_id`,`product_name`,`product_description`,`product_price`,`product_img` FROM product WHERE id = $id";

			 //$sql = "update product SET  `product_category_id` = '2' ,`product_name`= '2',`product_description`= '2',`product_price`= '2',`product_img`= '2' WHERE id = $id";
		$sql = "update product SET `product_category_id` = ' ". $_POST['category'] . "',".
				"`product_name`= '" . $_POST['name'] . "',".
				"`product_description`='" . $_POST['description']."',".
				"`product_price`= ' " . $_POST['price'] . "' WHERE id = $id";
			//var_dump($sql);

			// $sql = UPDATE product `product_category_id`,`product_name`,`product_description`,`product_price`,`product_img`  set ("sddg","sddg","sddg","sddg","sddg") where id = 
				mysqli_query($this->connectdb(),$sql);
				header('Location: index.php?controller=product&action=view_product');
	}

	public function add_product()
	{
		# code...
		//echo "string";
		// $sql = "insert into product (`product_category_id`,`product_name`,`product_description`,`product_price`,`product_img`)
		//  values()" . $_POST['category'];
		//echo $_POST['name'];
		//var_dump($sql);		
		echo "string";
		}
};
 ?>