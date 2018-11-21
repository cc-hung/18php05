<?php 

include "user.php";
/**
 * 
 */
class student extends user
{
	var $ma_sv;
	public function add()
	{
		# code...
		echo "add nay la o student ";
	}


	
}
$user = new user();
	$user->add();

	$student = new student();
	$student->add();
	$user->add();


 ?>