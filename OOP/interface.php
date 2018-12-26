<?php 

interface School{
	public function myTeacher();

}
interface College{
	public function myCollege();

}
class Student implements School{
	public function __construct(){
		$this->myTeacher();
		$this->myCollege();
	}
	public function myTeacher(){
		echo "I am a schol Teacher"."<br>";
	}
	public function myCollege(){
		echo "I am a Collage Teacher"."<br>";
	}

}

$stu_onj = new Student();