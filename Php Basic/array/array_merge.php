<h1>array_merge function</h1>

<?php

$arr1 = array("Ruhul", "Amin");
$arr2 = array("Imran", "Raj");

$result = array_merge($arr1, $arr2);

echo '<pre>';

print_r($result);

echo '</pre>'.'<br>';

$arr3 = array(
	"a" => "Ruhul",
	"b" => "Imran",
	"c" => "Raj"
);
$arr4 = array(
	"d" => "Ruhul",
	"b" => "Reja",
	"f" => "Raj"
);

$result2 = array_merge($arr3, $arr4);

echo '<pre>';

print_r($result2);
