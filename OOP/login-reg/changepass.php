<?php 
	include "inc/header.php";
	include "library/User.php";
	Session::checkSession();
?>
<?php 
	$user = new User();
	if(isset($_GET['id'])){
		$userid = $_GET['id'];
		$sessid = Session::get("id");
		if($userid != $sessid){
			header("Location:index.php");
		}
	}

	if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST["updatePass"]){
		$updatePass = $user->updatePass($_POST,$userid);
	}
?>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>User Password Change Panel <span class="pull-right"><a class="btn btn-warning" href="profile.php?id=<?php echo $userid; ?>">Back</a></h2>
			</div>
			<div class="panel-body">
				<div style="max-width: 500px; margin: 0 auto;">
					<?php 
						if(isset($updatePass)){
							echo $updatePass;
						}
					?>
					<form action="" method="post">
						<div class="form-group">
							<label for="oldpass">Old Password : </label>
							<input id="oldpass" class="form-control" type="text" placeholder="Enter Old Passwod"  name="oldpass" required="" />
						</div>
						
						<div class="form-group">
							<label for="newpass">New Password : </label>
							<input id="newpass" class="form-control" type="password" placeholder="Enter New Password"  name="newpass" required="" />
						</div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="updatePass" value="Update Password">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>