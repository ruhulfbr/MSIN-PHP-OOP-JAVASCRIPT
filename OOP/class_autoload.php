<?php 
spl_autoload_register(function($class_name){
	include "classes/".$class_name.".php";
});



$php = new Php;
$ruby = new Ruby;
$java = new Java;