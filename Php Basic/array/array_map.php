<h1>array_map function</h1>

<?php



function myFunction($value){
	return strtoupper($value);
}

$arr1 = array(
	'name'=>'Ruhul',
	'id'=>'cse1701010052',
	'cgpa'=>'3.95'
);

$result = array_map("myFunction", $arr1);

echo '<pre>';
print_r($result);