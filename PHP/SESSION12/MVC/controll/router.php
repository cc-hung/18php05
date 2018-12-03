<?php 
include 'product_controller.php';
/**
 * 
 */
class router
{
	public function xu_ly()
	{
		# code...
		$controller = isset($_GET['controller'])?$_GET['controller']:'index';
		$action = isset($_GET['action'])?$_GET['action']:'index';

		if($controller == 'product') {
			if($action =='view_product') {
				$view = new product();
				$view->view_product(); 

			}
			if($action == 'add_product'){
				$view = new product();
				$view->add_product();
			}
			if($action == 'delete_product'){

				$view = new product();
				$view -> delete_product($_GET['id']);
			}
			if($action == 'edit_product'){

				$view = new product();
				$view -> edit_product($_GET['id']);

			}
			

		}

	}

	
}
	


 ?>