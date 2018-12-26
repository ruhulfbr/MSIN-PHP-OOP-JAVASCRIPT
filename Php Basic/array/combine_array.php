<h1>Combine Array</h1>

<?php
$a1 = array("Ruhul", "Imran", "Reja", "Mumu");
$a2 = array("Eta ami", "Ami Amr e Nam", "Amr Friends", "Eta amr Jaan");

$cm = array_combine($a1, $a2);
echo '<pre>';
print_r($cm);


?>