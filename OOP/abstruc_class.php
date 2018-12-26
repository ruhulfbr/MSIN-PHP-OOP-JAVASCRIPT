<?php 

abstract class Student{
	public $name;
	public $age;
	public function Details(){
		echo "I am ".$this->name." and I am ".$this->age." Years old" . '<br>';
	}
	abstract public function Ami();
}

class Boy extends Student{
	public function Describe(){
		 return parent::Details()." yes I am a school boy".'<br>';
	}
	public function Ami(){
		echo "Ami besi Valo nai";
	}
}

$disply = new boy();
$disply->name = "Ruhul";
$disply->age = 25;
$disply->describe();
$disply->Ami();