

<?php 
	class DB {
		var $connect;
		public function connectDB() {
			$this->connect = mysqli_connect('localhost', 'root', '',
				'18php05_shop');
			return $this->connect;
		}
	}
?>
