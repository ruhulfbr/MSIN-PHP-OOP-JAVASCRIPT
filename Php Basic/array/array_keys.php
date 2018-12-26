<h1>array_keys Function</h1>

<?php

$ar_1 = array(
		"a"=>"ruhul",
		"b"=>"imran",
		"c"=>"amin",
		"d"=>"raj",
		"e"=>"khan"
);


$final = array_keys($ar_1, 'khan');

echo '<pre>';
print_r($final);

echo '</pre>';
?>