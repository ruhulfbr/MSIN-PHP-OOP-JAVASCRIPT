<h1>array_pad function</h1>

<?php

$arr1 = array("Ruhul", "Amin");

$result = array_pad($arr1, -5, "Imran");

echo '<pre>';

print_r($result);