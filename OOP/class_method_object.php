<?php include "inc/header.php"; ?>





<?php 


	class Person{
		public $name;
		public $age = "24";


		public function personName(){
			echo "Person Name is : ".$this->name."<br>";
		}

		public function personAge($value){
			echo $this->name." Is ".$this->age=$value. " Years old.";
		}
	}

	$newPerson = new Person();

	$newPerson->name="Ruhul Amin";

	$newPerson->personName();
	$newPerson->personAge("2587");


?>













































		


<?php include "inc/footer.php"; ?>