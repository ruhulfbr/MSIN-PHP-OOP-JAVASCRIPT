<?php

$db = new mysqli("localhost","root","","ticket");


if(mysqli_connect_errno()){
	echo "I Think There is a Problem";
}else{
	echo "Connection Successfull<br>";

/*$sql = "select executive_name, executive_phone_number from executive order by executive_id";*/

$sql = "insert into executive(executive_name, executive_phone_number) values(?,?);";

$stmt = $db->prepare($sql);
$stmt->bind_param("ss", $executive_name, $executive_phone_number);
	
$executive_name = "I love you Mumu";
$executive_phone_number = "01624987301";
$stmt->execute();
$stmt->close();
$db->close();

}