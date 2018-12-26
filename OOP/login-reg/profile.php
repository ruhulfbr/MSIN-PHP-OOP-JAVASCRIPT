<?php 
	include "inc/header.php";
	include "library/User.php";
	Session::checkSession();
?>
<?php 
	$user = new User();
	if(isset($_GET['id'])){
		$userid = $_GET['id'];
	}

	if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST["update"]){
		$userUpdate = $user->userUpdate($_POST,$userid);
	}
?>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>User Profile <span class="pull-right"><a class="btn btn-warning" href="index.php">Back</a></h2>
			</div>
			<div class="panel-body">
				<div style="max-width: 500px; margin: 0 auto;">
					<?php 
						if(isset($userUpdate)){
							echo $userUpdate;
						}
						$result = $user->userProfile($userid);
						if($result){
					?>
					<form action="" method="post">
						<div class="form-group">
							<label for="name">Name : </label>
							<input id="text" class="form-control" type="text" value="<?php echo $result->name; ?>"  name="name" required="" />
						</div>
						
						<div class="form-group">
							<label for="username">Username : </label>
							<input id="username" class="form-control" type="text" value="<?php echo $result->username; ?>"  name="username" required="" />
						</div>
						<div class="form-group">
							<label for="email">Email Address : </label>
							<input id="email" class="form-control" type="text" value="<?php echo $result->email; ?>" name="email" required="" />
						</div>
						<?php
							$sessionid = Session::get("id");
							if($userid == $sessionid){
						?>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="update" value="Update"> <a class="btn btn-sm btn-info" href="changepass.php?id=<?php echo $sessionid; ?>">Change Password</a>
						</div>
						<?php  } ?>
					</form>
					<?php } ?>
				</div>
			</div>
		</div>


		
	</div>


</body>

</html>