<h1>Array Interset Function</h1>

<?php

$ar_1 = array(
		"a"=>"ruhul",
		"b"=>"imran",
		"c"=>"amin",
		"d"=>"raj",
		"e"=>"khan"
);

$ar_2 = array(
		"f"=>"ruhul",
		"g"=>"imran",
		"h"=>"reja",
		"i"=>"raj"
);

$ar_3 = array(
	"j"=>"sakib",
	"k"=>"ruhul",
	"l"=>"khan",
	"m"=>"raj",
	"n"=>"mona"
);

$final = array_intersect($ar_1, $ar_2, $ar_3);

echo '<pre>';
print_r($final);

echo '</pre>';
?>