<?php 
	class DbConnect {
		private $host = 'localhost';
		private $dbName = 'sa';
		private $username = 'SA';
		private $password = '';

		public function connect() {
			try {
				$conn = new PDO('mysql:host=' . $this->host . '; dbname=' . $this->dbName, $this->username, $this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->exec("SET NAMES utf8"); 
				return $conn;
      } 
      
      catch( PDOException $e) {
				echo 'Connection failed: ' . $e->getMessage();
			}
		}
  }
?>
