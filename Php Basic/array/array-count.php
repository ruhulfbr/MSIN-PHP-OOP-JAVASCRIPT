<h1>Array Count</h1>

<?php
$a1 = array("Ruhul", "Imran", "Reja", "Mumu", "Imran", "Reja", "Mumu", "Imran", "Reja", "Mumu", "Imran", "Reja", "Mumu");
$a2 = array("Eta ami", "Ami Amr e Nam", "Amr Friends", "Eta amr Jaan");

$cm = array_count_values($a1);
echo '<pre>';
print_r($cm);


?>