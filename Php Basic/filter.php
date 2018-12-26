<h1>Learning Filter</h1>


<h2>Remove illegal characyrts By Filter</h2>
<?php

	$str = "<h2>I am learning php</h2>";

	$filter = filter_var($str, FILTER_SANITIZE_STRING);

	echo $filter;

?><br>

<h2>Integer Validation by filter</h2>

<?php

	$int = 50;

	if(filter_var($int, FILTER_VALIDATE_INT)){
		echo "This is an Interger";
	}else{
		echo "This is not an integer";
	}

?>
<br>
<h2>Ip Validaion by Filter</h2>
<?php
	$inte = '127.0.0.1.0';

	if(filter_var($inte, FILTER_VALIDATE_IP)){
		echo "This is a Valid Ip";
	}else{
		echo 'This is not Valid IP';
	}


?>
<br>

<h2>Validation Email By filter</h2>
<?php

	$email = 'ruhul1bd@gmail.com';
	if(filter_var($email, FILTER_VALIDATE_EMAIL)){
		echo 'This is an Valid Email';
	}else{
		echo 'This is not an valid Email';
	}

?><br>

<h2>Validation URL by filter</h2>

<?php

	$url = 'https://www.facebook.com';

	if(filter_var($url, FILTER_VALIDATE_URL)){
		echo 'This is an Valid Url';
	}else{
		echo 'This is not valid URL';
	}
?>
