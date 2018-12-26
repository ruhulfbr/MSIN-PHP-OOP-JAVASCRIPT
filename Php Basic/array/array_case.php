<h1>Array Case</h1>

<?php
	
	$aamra = array("Ruhul" => 24,"Mumu" => 20,"Reja" => 25);
echo '<pre>';
	print_r(array_change_key_case($aamra, CASE_UPPER));
	
	print_r(array_change_key_case($aamra, CASE_LOWER));

	

?>