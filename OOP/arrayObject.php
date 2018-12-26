<?php 
for($i=0; $i<10; $i++){}
$arr = array("PHP", "Java", "Ruby", "Python", "Perl");
$coding = new ArrayObject($arr);

$coding->append("JQuery");
$iterator = $coding->getIterator();

while ( $iterator->valid()) {
	echo $iterator->current()."<br/>";
	$iterator->next();
}