<h1>Advance Validation</h1>

<h3>Number Validation</h3>

<?php
	$intnum = 1500;
	$min = 1;
	$max = 200;

	if(filter_var($intnum, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max)))){
		echo 'This is valid';
	}else{
		echo "This Is not valid";
	}

?><br>

<h3>Url Check</h3>

<?php
		$url = 'http://domain.tld/function.cgi?url=http://fonzi.com/&name=Fonzi&mood=happy&coat=leather';

		if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED)){
			echo "This Url is valid";
		}else{
			echo 'This is not query url';
		}

?>

