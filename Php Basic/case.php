<h1>Learning CASE in php</h1>

<?php
	if(isset($_POST['texting'])){
		$str = $_POST['texting'];

		echo strtoupper($str).'<br>'.strtolower($str).'<br>'.ucfirst($str).'<br>'.ucwords($str).'<br>';


		echo trim($str, ' .');

	}
?>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
	<input style="width:200px;" type="text" name="texting">
	<input type="submit" value="submit">
</form>

