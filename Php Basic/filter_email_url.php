<?php
$error_url = $error_email = '';
$email = $url = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	if (empty($_REQUEST['url'])) {
		$error_url = 'input box is empty';
	}elseif(!filter_var($_REQUEST['url'], FILTER_VALIDATE_URL)){
		$error_url = 'Ivalid Url';
	}else{
		$url = validation($_REQUEST['url']);
	}

	if(empty($_REQUEST['email'])){
		$error_email = 'Email input Empty';
	}elseif(!filter_var($_REQUEST['email'], FILTER_VALIDATE_EMAIL)){
		$error_email = 'Email Is invalid';
	}else{
		$email = validation($_REQUEST['email']);
	}
	echo $url. '<br>'.$email;

}

function validation($data){
	$data = trim($data);
	$data = stripcslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
	Website : <br>
	<input type="text" name="url" /> <?php echo $error_url; ?><br>
	Email : <br>
	<input type="text" name="email"> <?php echo $error_email; ?><br>
	<input type="submit" name="sumbit" value="send">
</form>