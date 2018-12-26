<?php include 'inc/header.php'; ?>
<?php include "Config.php"; ?>
<?php include "Database.php"; ?>

<?php
	$db = new Database();
	$query = "SELECT * FROM tbl_user";
	$read = $db->select($query);
?>
<?php 
	if(isset($_GET['did'])){
		$did = $_GET['did'];
		$query = "DELETE FROM tbl_user WHERE id = $did";
		$delete = $db->delete($query);
	}
?>
<a href="create.php"><button>Create</button></a>

<?php 
	if(isset($_GET['msg'])){
		echo "<span style='color:green'>".$_GET['msg']."</span>"; 
	} 
?>
		<table class="tblone">
			<tr>
				<th>Sl</th>
				<th>Name</th>
				<th>Email</th>
				<th>Skill</th>
				<th>Action</th>
			</tr>
			<?php 
				if($read){
			?>
				<?php $sl = 0; foreach($read as $value){ $sl++; ?>
				<tr>
					<td><?php echo $sl; ?></td>
					<td><?php echo $value['name']; ?></td>
					<td><?php echo $value['email']; ?></td>
					<td><?php echo $value['skill']; ?></td>
					<td><a href="update.php?id=<?php echo urlencode($value['id']); ?>">Edit</a> <a href="index.php?did=<?php echo urlencode($value['id']); ?>">Delete</a></td>
				</tr>
				<?php } ?>
			<?php } ?>
		</table>

<?php include 'inc/footer.php'; ?>