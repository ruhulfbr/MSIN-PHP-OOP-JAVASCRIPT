<?php 
	$ourfile = fopen('new.txt', 'w') or die("File Not Fund");;

	echo fgets($ourfile, filesize('text.txt'));

	echo "<br>". fgetc($ourfile).'<br>';

	while(!feof($ourfile)){
		echo fgets($ourfile).'<br>';
	}

	fclose($ourfile);
?>

<!-- <p>File create/read/write</p>


<?php
	$newfile = fopen('new.txt', 'w') or die("File Not Fund");

	$one = "Sala tui ekta Pagol ";

	$two = "Ragle tor matha Thik thake na ";

	fwrite($newfile,$one);

	

	fclose($newfile);
?> -->