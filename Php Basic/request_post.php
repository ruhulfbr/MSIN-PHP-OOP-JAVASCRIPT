<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
	
	<input type="text" name="username" />
	<input type="submit" name="submit" value="send">
</form>

<?php  

	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$name = $_REQUEST['username'];
		echo $name;
	}else{
		echo "Data ekhono ase nai";
	}

?>