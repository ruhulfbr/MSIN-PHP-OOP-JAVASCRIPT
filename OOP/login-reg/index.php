<?php include "inc/header.php"; ?>
<?php include "library/user.php"; ?>

<?php
	Session::checkSession();
	$user = new User();
	$alluser = $user->getAllUser();
 ?>

<?php
	$loginmsg = Session::get('loginmsg');
	if (isset($loginmsg)) {
		echo $loginmsg;
	}
	Session::set("loginmsg", NULL);
?>


		<div class="panel panel-default">
			<div class="panel-heading">
				<h2>User List <span class="pull-right"><strong>Welcome! </strong>

					<?php
						$name = Session::get('name');
						if (isset($name)) {
							echo $name;
						}
					?>
				</span></h2>
			</div>
			<div class="panel-body">
				<table class="table table-striped table-bordered">
					<tr>
						<th width="10%">Serial</th>
						<th width="20%">Name</th>
						<th width="20%">UserName</th>
						<th width="20%">Email Address</th>
						<th width="20%">Action</th>
					</tr>
					<?php $sl = 0; foreach ($alluser as $value) { $sl++;	?>
					<tr>
						<td><?php echo $sl; ?></td>
						<td><?php echo $value['name']; ?></td>
						<td><?php echo $value['username']; ?></td>
						<td><?php echo $value['email']; ?></td>
						<td>
							<a class="btn btn-xs btn-success" href="profile.php?id=<?php echo $value['id']; ?>"><i class="fa fa-eye"></i> View</a>
							<!-- <a class="btn btn-xs btn-warning" href="profile.php?=id"><i class="fa fa-edit"></i> Edit</a>
							<a class="btn btn-xs btn-danger" href="profile.php?=id"><i class="fa fa-trash"></i> Delete</a> -->
						</td>
					</tr>
					<?php } ?>
				</table>
			</div>
		</div>




		
	</div>


</body>

</html>