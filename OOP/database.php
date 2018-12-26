<?php

$db = new mysqli("localhost","root","","ticket");


if(mysqli_connect_errno()){
	echo "I Think There is a Problem";
}else{
	echo "Connection Successfull<br>";

/*	$sql = "SELECT * FROM executive";

	$result = $db->query($sql);



	while ($data = $result->fetch_object() ) {
		echo $data->executive_name."<br>";
	}*/

	$sql = "UPDATE executive SET executive_name='Rafig' WHERE executive_id='2'";

	$result = $db->query($sql);

	if($result){
		echo 'Update Successfull';
	}else{
		echo 'I think There is problem';
	}

}