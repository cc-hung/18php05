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
		//header('location :view/add_product.php');
		  
		 $view = new product_model();
		 $view->add_product();
			include'view/add_product.php';
		 if (isset($_POST['add_product'])) {
		 	# code...

		 	$view->add_product();
		 }
		 

	
	}
	public function delete_product($id)
	{
		# code...
		// var_dump($id);
		// exit();
		$view  = new product_model();
		$view -> delete_product($id);

	}
	public function edit_product($id)
	{
		# code...
		
		$view = new product_model();
		$product = $view->get_product1($id);
		include 'view/edit_product.php';

		if(isset($_POST['update'])){
			//echo $_POST['so'];
			$view-> edit_procduct($id);
		};
	}


}

 ?>