<h1>array_walk function</h1>

<?php

function myFunction($dept, $name){
	echo "$name comes From $dept Department<br>";
}

$arr = array(
		"Ruhul"  => "CSE",
		"Reja"   => "BBA",
		"Raj"    => "Software"
);

array_walk($arr, "myFunction");

