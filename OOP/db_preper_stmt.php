<?php

$db = new mysqli("localhost","root","","ticket");


if(mysqli_connect_errno()){
	echo "I Think There is a Problem";
}else{
	echo "Connection Successfull<br>";

$sql = "select executive_name, executive_phone_number from executive order by executive_id";

	
	$stmt = $db->prepare($sql);
	$stmt->execute();
	$stmt->bind_result($executive_name, $executive_phone_number);

	while($stmt->fetch()){
		echo "$executive_name <br>";
	}

}