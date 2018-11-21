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
}
 ?>