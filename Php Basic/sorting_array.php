<?php 

	$n = 15;

	function test1(){
		global $n;
		$m = 2;
		echo $m.$n;
	}

	test1();

?>