<?php

class Calculation{
	public function add($a,$b){
		$c = $a+$b;
		echo "The Addtion of Two number is : ". $c.'<br>';
	}
	public function minas($a,$b){
		$c = $a-$b;
		echo "The Substruction of Two Number is : ". $c.'<br>';
	}
	public function goon($a,$b){
		$c = $a*$b;
		echo "The Multiplication of Two Number is : ". $c.'<br>';
	}
	public function vaag($a,$b){
		$c = $a/$b;
		echo "The Division of Two Number is : ". $c."<br>";
	}
	public function vaagses($a,$b){
		$c = $a%$b;
		echo "The Moduluse of Two Number is : ". $c;
	}
}