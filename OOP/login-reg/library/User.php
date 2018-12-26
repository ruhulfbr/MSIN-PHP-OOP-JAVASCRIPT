
<?php 
	include_once "Session.php";
	include "Database.php";
	

	class User {
		private $db;
		public function __construct(){
			$this->db = new Database();
		}
		public function userRegistration($data){
			$name     = $_POST['name'];
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = md5($_POST['password']);
			$checked_email = $this->emailCheck($email);

			if($name=="" OR $username=="" OR $email=="" OR $password==""){
				$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Field Must Not be Empty !</div>";
				return $msg;
			}

			if(strlen($username) < 3){
				$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Username is Too short !</div>";
				return $msg;
			}else if(preg_match('/[^a-z0-9_-]./i',$username)){
				$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Username Must only contain alphanumerical, dashes and usderscore !</div>";
				return $msg;
			}

			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				$msg = "<div class='alert alert-danger'><strong>Error ! </strong>This Email Address Is not Valid!</div>";
				return $msg;
			}
			if($checked_email == true){
				$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Duplicate Email Address!</div>";
				return $msg;
			}

			$sql = "INSERT INTO tbl_user (name,username,email,password) VALUES (:name,:username,:email,:password)";
			$query = $this->db->pdo->prepare($sql);
			$query->bindValue(':name', $name);
			$query->bindValue(':username', $username);
			$query->bindValue(':email', $email);
			$query->bindValue(':password', $password);
			$result = $query->execute();
			if($result){
				$msg = "<div class='alert alert-success'><strong>Success ! </strong>Thank You for Registration!</div>";
				return $msg;
			}else{
				$msg = "<div class='alert alert-danger'><strong>Error ! </strong> Sorry Not inserting!</div>";
				return $msg;
			}
		}
		public function emailCheck($email){
			$sql = "SELECT email FROM tbl_user WHERE email = :email";
			$query = $this->db->pdo->prepare($sql);
			$query->bindValue(':email', $email);
			$query->execute();
			if($query->rowCount() > 0){
				return true;
			}else{
				return false;
			}
		}
		public function checkedLoginData($email,$password){
			$sql = "SELECT * FROM tbl_user WHERE email = :email AND password = :password";
			$query = $this->db->pdo->prepare($sql);
			$query->bindValue(':email', $email);
			$query->bindValue(':password', $password);
			$query->execute();
			$result = $query->fetch(PDO::FETCH_OBJ);
			return $result;
		}
		public function userLogin($data){
			if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false){
				$msg = "<div class='alert alert-danger'><strong>Error ! </strong>This Email Address Is not Valid!</div>";
				return $msg;
			}else{
				$email = $_POST['email'];
			}
			$password = md5($_POST['password']);
			$result = $this->checkedLoginData($email,$password);
			if($result){
				Session::init();
				Session::set("login", true);
				Session::set("id", $result->id);
				Session::set("name", $result->name);
				Session::set("username", $result->username);
				Session::set("email", $result->email);
				Session::set("loginmsg", "<div class='alert alert-success'><strong>Success ! </strong> you Are Loggedin</div>");
				header("Location:index.php");
			}else{
				$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Data Not Found</div>";
				return $msg;
				header("Location:login.php");
			}

		}
		public function getAllUser(){
			$sql = "SELECT * FROM tbl_user";
			$query = $this->db->pdo->prepare($sql);
			$query->execute();
			return $query->fetchAll();
		}
		public function userProfile($id){
			$sql = "SELECT * FROM tbl_user WHERE id = :id";
			$query = $this->db->pdo->prepare($sql);
			$query->bindValue(':id', $id);
			$query->execute();
			$result = $query->fetch(PDO::FETCH_OBJ);
			return $result;
			header('Location:profile.php');
		}
		public function userUpdate($data,$id){
			$name     = $_POST['name'];
			$username = $_POST['username'];
			$email = $_POST['email'];

			if($name=="" OR $username=="" OR $email==""){
				$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Field Must Not be Empty !</div>";
				return $msg;
			}

			if(strlen($username) < 3){
				$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Username is Too short !</div>";
				return $msg;
			}else if(preg_match('/[^a-z0-9_-]./i',$username)){
				$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Username Must only contain alphanumerical, dashes and usderscore !</div>";
				return $msg;
			}

			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				$msg = "<div class='alert alert-danger'><strong>Error ! </strong>This Email Address Is not Valid!</div>";
				return $msg;
			}
			/*if($checked_email == true){
				$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Duplicate Email Address!</div>";
				return $msg;
			}*/

			$sql = "UPDATE tbl_user SET name = :name, username = :username, email = :email WHERE id = :id";
			$query = $this->db->pdo->prepare($sql);
			$query->bindValue(':name', $name);
			$query->bindValue(':username', $username);
			$query->bindValue(':email', $email);
			$query->bindValue(':id', $id);
			$result = $query->execute();
			if($result){
				$msg = "<div class='alert alert-success'><strong>Success ! </strong>Successfully Updated!</div>";
				return $msg;
			}else{
				$msg = "<div class='alert alert-danger'><strong>Error ! </strong> Error Updating!</div>";
				return $msg;
			}
		}
		private function oldpassCheck($md5oldpass, $id){
			$sql = "SELECT password FROM tbl_user WHERE id = :id AND password = :oldpass";
			$query = $this->db->pdo->prepare($sql);
			$query->bindValue(':oldpass', $md5oldpass);
			$query->bindValue(':id', $id);
			$query->execute();
			if($query->rowCount() > 0){
				return true;
			}else{
				return false;
			}
		}
		public function updatePass($data,$id){
			$oldpass     = $_POST['oldpass'];
			$newpass = $_POST['newpass'];
			if($oldpass=="" OR $newpass==""){
				$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Password Must Not be Empty !</div>";
				return $msg;
			}
			$md5oldpass = md5($oldpass);
			$checked_pass = $this->oldpassCheck($md5oldpass, $id);
			if($checked_pass == false){
				$msg = "<div class='alert alert-danger'><strong>Error ! </strong>Did Not Match Old Password!</div>";
				return $msg;
			}
			if(strlen($newpass) < 5){
				$msg = "<div class='alert alert-danger'><strong>Error ! </strong>New Pass Must be 8 Charachter !</div>";
				return $msg;
			}
			$md5newpass = md5($newpass);
			$sql = "UPDATE tbl_user SET password = :password WHERE id = :id";
			$query = $this->db->pdo->prepare($sql);
			$query->bindValue(':password', $md5newpass);
			$query->bindValue(':id', $id);
			$result = $query->execute();
			if($result){
				$msg = "<div class='alert alert-success'><strong>Success ! </strong>Password Successfully Updated!</div>";
				return $msg;
			}else{
				$msg = "<div class='alert alert-danger'><strong>Error ! </strong> Error Updating!</div>";
				return $msg;
			}
		}
	}

?>