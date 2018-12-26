<?php 

class Ami{
	public function ruhul(){
		echo "hi this is Ruhul <br>";
		return $this;
	}
	public function imran(){
		echo "hi this is Imran<br>";
		return $this;
	}
	public function Raj(){
		echo "Hi, this is Raaj";
		return $this;
	}
}
$aa = new Ami;

$aa->ruhul()->imran()->raj();