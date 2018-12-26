<?php include "inc/header.php"; ?>
<?php include "library/user.php"; ?>
<?php 
	Session::checkLogin();
	$user = new User(); 
	if($_SERVER['REQUEST_METHOD'] == "POST" && $_POST["login"]){
		$userLogin = $user->userLogin($_POST);

	}
?>

		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>User Login</h2>
			</div>
			<div class="panel-body">
				<div style="max-width: 500px; margin: 0 auto;">
					<?php if(isset($userLogin)){ echo $userLogin; } ?>
					<form action="" method="post">
						<div class="form-group">
							<label for="email">Email Address : </label>
							<input id="email" class="form-control" type="text" placeholder="Enter Email Address"  name="email" required="" />
						</div>
						<div class="form-group">
							<label for="pass">Password : </label>
							<input id="pass" class="form-control" type="password" placeholder="Enter Password"  name="password" required="" />
						</div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="login" value="Login">
						</div>
					</form>
				</div>
			</div>
		</div>


		
	</div>


</body>

</html>