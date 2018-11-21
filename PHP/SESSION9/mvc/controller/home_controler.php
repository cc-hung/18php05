<?php 
/**
 * 
 */
class home_controller 
{
	public function xulyyeucau()
		{
			# code...
			$controller = isset($_GET['controller'])?$_GET['controller']:'home';
			$action = isset($_GET['action'])?$_GET['action']:'home';
			if ($controller == 'home') {
				# code...
				echo "home";
			}
		}
	
	
}

 ?>