<?php 
include "classes/DB.php";
	class Model{
		public function GetStudent(){
			$sql = "SELECT * FROM tbl_student";
			$stmt = DB::prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
		}
	}
?>