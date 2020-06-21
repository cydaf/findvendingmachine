<?php 
	
	class get_value	{
        private $pro_name;
        private $account;
		private $ven_num;
		private $ven_note;
		private $location_Latitude;
		private $location_Longitude;
		private $error;
		private $error_num;
		private $conn;
		private $tableName = "machine";

		function setven_num($ven_num) { $this->ven_num = $ven_num; }
        function getven_num() { return $this->ven_num; }
        
		function setven_note($ven_note) { $this->ven_note = $ven_note; }
        function getven_note() { return $this->ven_note; }
        
		function setlocation_Latitude($location_Latitude) { $this->location_Latitude = $location_Latitude; }
        function getlocation_Latitude() { return $this->location_Latitude; }
        
		function setlocation_Longitude($location_Longitude) { $this->location_Longitude = $location_Longitude; }
        function getlocation_Longitude() { return $this->location_Longitude; }
        
		function seterror($error) { $this->error = $error; }
        function geterror() { return $this->error; }
        
		function seterror_num($error_num) { $this->error_num = $error_num; }
		function geterror_num() { return $this->error_num; }
        
        function setpro_name($pro_name) { $this->pro_name = $pro_name; }
        function getpro_name() { return $this->pro_name;}
        function setaccount($account) { $this->account = $account; }
		function getaccount() { return $this->pro_name;}
		
		public function __construct() {
			require_once('dbm.php');
			$conn = new DbConnect;
			$this->conn = $conn->connect();
		}

		public function getMachinesLatLng() {
            $sql = "SELECT * FROM $this->tableName WHERE location_Latitude IS NULL AND location_Longitude IS NULL";
            //$sql = "SELECT location_Latitude,location_Longitude FROM $this->tableName"
			$stmt = $this->conn->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function getAllMachines() {
			$sql = "SELECT * FROM $this->tableName";
            $stmt = $this->conn->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
        public function fav() {
			$sql = "SELECT f.ven_num FROM machine m,favorite f where f.account='$this->account' and m.ven_num=f.ven_num";
            $stmt = $this->conn->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
        public function getFavoriteMachines() {
			//$sql = "SELECT * FROM $this->tableName"; 
			$sql = "SELECT distinct m.ven_num , m.location_Latitude , m.location_Longitude,m.ven_note ,m.error_num FROM machine m,favorite f where f.account='$this->account' and m.ven_num=f.ven_num";
            $stmt = $this->conn->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
        public function getSearchMachines() {
            
			//$sql = "SELECT * FROM $this->tableName"; 
			$sql = "SELECT distinct m.ven_num , m.location_Latitude , m.location_Longitude ,m.ven_note ,m.error_num FROM machine m, information i where m.ven_num=i.ven_num and i.pro_name='$this->pro_name'";
            $stmt = $this->conn->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		public function updateMachineWithLatLng() {
			$sql = "UPDATE $this->tableName SET location_Latitude = :location_Latitude, location_Longitude = :location_Longitude WHERE ven_num = :ven_num";
			$stmt = $this->conn->prepare($sql);
			$stmt->bindParam(':location_Latitude', $this->location_Latitude);
			$stmt->bindParam(':location_Longitude', $this->location_Longitude);
			$stmt->bindParam(':ven_num', $this->ven_num);

			if($stmt->execute()) {
				return true;
			} else {
				return false;
			}
		}
	}
