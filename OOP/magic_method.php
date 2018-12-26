<?php 

class Student{
	public $name;

	public function Ami(){
		echo "I am a student <br>";
	}
	public function __get($pm){
		echo "$pm does not exixts <br>";
	}
	public function __set($pm, $value){
		echo  "His $pm is $value <br>";
	}
	public function __call($method, $values){
		echo "Yes ".$method." is a  OOP method amd its values are : ".implode(",", $values).'<br>';
	}
}

$disply = new Student();

$disply->imran;
$disply->age = 24;
$disply->myMethod(1,2,3,4,6);
$disply->Ami();

