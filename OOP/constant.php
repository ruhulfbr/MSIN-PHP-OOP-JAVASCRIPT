<?php


class Person{
	public $name;
	public $id;

	const FATHER = "Abdul Khalek Faraji";

	public function __construct($username, $userid){
		$this->name = $username;
		$this->id = $userid;
	}
	public function user(){
		echo "The Name is : ".$this->name." And id is : ".$this->id.'<br>'.person::FATHER;

	}
}


$per = new person("Imran", 24);

$per->user();