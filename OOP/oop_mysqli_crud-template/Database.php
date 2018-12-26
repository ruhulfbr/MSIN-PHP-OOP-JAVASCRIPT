<?php
	
	class Database {
		public $host   = DB_HOST;
		public $dbname = DB_NAME;
		public $user   = DB_USER;
		public $pass   = DB_PASS;

		public $link;
		public $error;
		public function __construct(){
			$this->connectionDB();
		}
		private function connectionDB(){
			$this->link = new mysqli($this->host, $this->user, $this->pass,$this->dbname);
			if(!$this->link){
				$this->error = "Connection Fail".$this->link->connect_error();
				return false;
			}
		}
		public function select($query){
			$result = $this->link->query($query) or die($this->link->error.__LINE__);
			if(mysqli_num_rows($result) > 0){
				return $result;
			}else{
				return false;
			}
		}
		public function insert($query){
			$insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
			if($insert_row){
				header("Location:index.php?msg=".urlencode('Data Inserted Sccessfully.'));
				exit();
			}else{
				die("Error : (".$this->link->error.")".$this->link->error);
			}
		}
		public function update($query){
			$update_row = $this->link->query($query) or die($this->link->error.__LINE__);
			if($update_row){
				header("Location:index.php?msg=".urlencode('Sccessfully Updated.'));
				exit();
			}else{
				die("Error : (".$this->link->error.")".$this->link->error);
			}
		}
		public function delete($query){
			$update_row = $this->link->query($query) or die($this->link->error.__LINE__);
			if($update_row){
				header("Location:index.php?msg=".urlencode('Sccessfully Deleted.'));
				exit();
			}else{
				die("Error : (".$this->link->error.")".$this->link->error);
			}
		}
	}

?>