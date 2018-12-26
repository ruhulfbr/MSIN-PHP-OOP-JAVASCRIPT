<h1>array_multisort function</h1>

<?php

$arr1 = array("Ruhul", "Amin");
$arr2 = array("Imran", "Raj");

$result = array_multisort($arr1, SORT_DESC, $arr2, SORT_ASC);

echo '<pre>';

print_r($arr1);
print_r($arr2);