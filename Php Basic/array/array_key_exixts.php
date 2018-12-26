<h1>array_key_exists Function</h1>

<?php

$ar_1 = array(
		"a"=>"ruhul",
		"b"=>"imran",
		"c"=>"amin",
		"d"=>"raj",
		"e"=>"khan"
);

if(array_key_exists('n', $ar_1)){
	echo 'Key Already Exists';
}else{
	echo 'There is no Key Like as'.'<br>';
}

$ar_2 = array("Ruhul", "Imran", "Raj");

if(array_key_exists(3, $ar_2)){
	echo 'Already Exists';
}else{
	echo 'There is no Index Like as';
}


?>