<?php 

class Ami{
	public $name;
	public $age;

/*	public function __construct($my_name, $my_age){
		$this->name = $my_name;
		$this->age = $my_age;
	}*/

	public function Details($my_name, $my_age){
		echo "My Name is {$my_name} and I am {$my_age} years old";
	}
}
class Ami2 extends Ami{
	public function Details($my_name2, $my_age2){
		echo "My Name is {$my_name2} and I am {$my_age2} years old, (Inherited)";
	}
}

$my_data = new ami();
$my_data->details('Ruhul', 24);

echo "<br>";

$my_data2 = new ami2();
$my_data2->details('Raj', 22);



