<?php include 'inc/header.php'; ?>
<?php include "Config.php"; ?>
<?php include "Database.php"; ?>

<?php
	$id = $_GET['id'];
	$db = new Database();
	$query = "SELECT * FROM tbl_user WHERE id = $id";
	$get_data = $db->select($query)->fetch_assoc();
?>


<?php

	if(isset($_POST['update'])){
		$name = mysqli_real_escape_string($db->link,$_POST['name']);
		$email = mysqli_real_escape_string($db->link,$_POST['email']);
		$skill = mysqli_real_escape_string($db->link,$_POST['skill']);
		if($name=="" && $email=="" && $skill==""){
			$error = "Field must not be empty";
		}else{
			$query = "UPDATE tbl_user SET name = '$name', email = '$email', skill = '$skill' WHERE id = $id";
			$update = $db->update($query);
		}
	}
?>
<?php if(isset($error)){echo "<span style='color:red'>".$error."</span>"; } ?>
	<table style="width: 400px;" class="tblone">	
		<form id="myform" action="" method="post">
			<tr>
				<td>Name : </td>
				<td><input type="text" name="name" value="<?php echo $get_data['name']; ?>"></td>
			</tr>
			<tr>
				<td>Email : </td>
				<td><input type="text" name="email" value="<?php echo $get_data['email']; ?>"></td>
			</tr>
			<tr>
				<td>Skill : </td>
				<td><input type="text" name="skill" value="<?php echo $get_data['skill']; ?>"></td>
			</tr>
			<tr>
				
				<td><button type="reset">Reset</button></td>
				<td><button type="sumbit" name="update" value="Save Info">Update Info</button></td>
			</tr>
			
		</form>
	</table>
	<a href="index.php">Go back</a>
<?php include 'inc/footer.php'; ?>