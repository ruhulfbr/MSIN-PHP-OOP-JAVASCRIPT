<h1>Array Differ Function</h1>

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
		"h"=>"eja",
		"i"=>"raj"
);

$ar_3 = array(
	"j"=>"sakib",
	"k"=>"ruhul",
	"l"=>"khan",
	"m"=>"raj",
	"n"=>"mona"
);

$final = array_diff($ar_1, $ar_2, $ar_3);

echo '<pre>';
print_r($final);

echo '</pre>';
?>

<h1>Array Differ Assoc Function</h1>


<?php

$ar_11 = array(
		"a"=>"ruhul",
		"b"=>"imran",
		"c"=>"amin",
		"d"=>"raj",
		"e"=>"khan"
);

$ar_22 = array(
		"f"=>"ruhul",
		"g"=>"imran",
		"h"=>"eja",
		"d"=>"raj"
);

$ar_33 = array(
	"j"=>"sakib",
	"a"=>"ruhul",
	"l"=>"khan",
	"m"=>"raj",
	"n"=>"mona"
);

$finall = array_diff_assoc($ar_11, $ar_22, $ar_33);

echo '<pre>';
print_r($finall);

echo '</pre>';
?>

<h1>Array Differ Key Function</h1>


<?php

$ar_111 = array(
		"a"=>"ruhul",
		"b"=>"imran",
		"c"=>"amin",
		"d"=>"raj",
		"e"=>"khan"
);

$ar_222 = array(
		"b"=>"ruhul",
		"e"=>"imran",
		"h"=>"eja",
		"a"=>"raj"
);

$ar_333 = array(
	"c"=>"sakib",
	"a"=>"ruhul",
	"l"=>"khan",
	"m"=>"raj",
	"n"=>"mona"
);

$finalll = array_diff_key($ar_111, $ar_222, $ar_333);

echo '<pre>';
print_r($finalll);

echo '</pre>';
?>