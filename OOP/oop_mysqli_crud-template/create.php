<?php include 'inc/header.php'; ?>
<?php include "Config.php"; ?>
<?php include "Database.php"; ?>

<?php
	$db = new Database();

	if(isset($_POST['save'])){
		$name = mysqli_real_escape_string($db->link,$_POST['name']);
		$email = mysqli_real_escape_string($db->link,$_POST['email']);
		$skill = mysqli_real_escape_string($db->link,$_POST['skill']);
		if($name=="" && $email=="" && $skill==""){
			$error = "Field must not be empty";
		}else{
			$query = "INSERT INTO tbl_user(name,email,skill) VALUES ('$name','$email','$skill')";
			$create = $db->insert($query);
		}
	}
?>
<?php if(isset($error)){echo "<span style='color:red'>".$error."</span>"; } ?>
	<table style="width: 400px;" class="tblone">	
		<form id="myform" action="" method="post">
			<tr>
				<td>Name : </td>
				<td><input type="text" name="name" placeholder="Enter Name"></td>
			</tr>
			<tr>
				<td>Email : </td>
				<td><input type="text" name="email" placeholder="Enter Email" ></td>
			</tr>
			<tr>
				<td>Skill : </td>
				<td><input type="text" name="skill" placeholder="Enter Skill" ></td>
			</tr>
			<tr>
				
				<td><button type="reset">Reset</button></td>
				<td><button type="sumbit" name="save" value="Save Info">Save Info</button></td>
			</tr>
			
		</form>
	</table>
	<a href="index.php">Go back</a>
<?php include 'inc/footer.php'; ?>