<?php 

	/**
	 * 
	 */
	class user
	{

		var $name,$username,$password;
		// public function user($name,$username,$password)
		// {
		// 	# code...
		// 	$this->name = $name;
		// 	$this->username = $username;
		// 	$this->password = $password;
		// }
		//   user()
		// {
		// 	# code...
		// }

		// public function add($name,$username,$password)
		// {
		// 	# code...
		// 	echo"add user ";
		// }
		public function add()
		{
			# code...
			echo "add user</br>";
		}
		public function delete()
		{
			# code...
			echo "delete user";

		}
		public function view()
		{
			# code...
			echo "view user";
		}
		public function edit()
		{
			# code...
			echo "edit user";
		}
		protected function changepassworrd()
		{
			# code...
			echo "change password";
		}
		protected function forgotpassword()
		{
			# code...
			echo "forgotpassword";
		}
	}

	// $user = new user();
	// $user->add();
	// $user->view();
	// $user->edit();
	// $user->delete();
 ?>