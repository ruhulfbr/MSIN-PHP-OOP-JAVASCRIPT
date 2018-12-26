<?php 

class Programming{
	public $php;
	public $java;
	private $html;
	protected $css;

	function __construct(){
		$this->php = "I love PHP";
		$this->java = "I love java";
		$this->html = "I love html";
		$this->css = "I love CSS";
	}
}

$sr = new Programming();
$ser = serialize($sr);

/*file_put_contents("pp.txt", $ser);
echo $ser;*/
file_get_contents("pp.txt");

$unser = unserialize($ser);

echo '<pre>';
print_r($unser);