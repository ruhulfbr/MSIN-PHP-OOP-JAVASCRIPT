<h1>Array Column</h1>

<?php

$student = array(
				array(
					'Name'   => 'Ruhul Amin',
					'ID'	 => 'CSE1701010072',
					'CGPA'   => '3.85' 
				),
				array(
					'Name'   => 'Mumu',
					'ID'	 => 'CSE1701010075',
					'CGPA'   => '3.8' 
				),

				array(
					'Name'   => 'Reja',
					'ID'	 => 'CSE1701010078',
					'CGPA'   => '3.60' 
				),
				array(
					'Name'   => 'My Name is Khan',
					'ID'	 => 'CSE1701010079',
					'CGPA'   => '3.20' 
				)
		);


	
	$d_student = array_column($student, 'Name', 'ID');

    echo '<pre>';
	print_r($d_student);

?>