<?php

class Love{
	public static $name = 'Ruhul Amin';

	public static function age(){
		return "24";
	}
	public function display(){
		echo "My Name is : ".self::$name." and I am ".Love::age();
	}
	public static function job(){
		echo "I  am Working as web Application developer";
	}
}

$dis = new love();

$dis->display();
echo "<br>";
love::job();