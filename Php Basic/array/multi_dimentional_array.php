<h1>Multi Dimentional Array</h1>

<?php
	
	$car = array(
		array("Ruhul", "CSE1701010072", 3.75),
		array("Mumu", "CSE1701010073", 3.85),
		array("Reja", "CSE1701010074", 3.95)
	);

	echo 'Name : '.$car[0][1].'<br>'.'ID : '.$car[0][1].'<br>'.'CGPA : '.$car[0][2].'<br>';

?>