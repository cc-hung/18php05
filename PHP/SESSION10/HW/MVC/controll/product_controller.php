<?php 
include 'model/product_model.php';

/**
 * 
 */
class product 
{
	
	public function view_product()
	{
		# code...
		$view = new product_model();
		$list_product = $view->get_product();
		include 'view/view_product.php';

	}
	public function add_product()
	{
		# code...
		// alocatio 'view/add_product.php';
		header('location :view/add_product.php');
		// include'view/add_product.php';
		//$this->loadView('view/add_product.php','asd');
	}


}

 ?>