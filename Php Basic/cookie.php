<h1>Here We learn About Cookie</h1>

<?php
	setcookie('visited', '1' time() - 3600, '/');
	echo "Cookie Deleted";

?>


<!-- <?php
	
	if(!isset($_COOKIE['visited'])){
		setcookie('visited', '1', time()+86400, '/') or die("Cookie not set");
		echo "This is your first visit in this website";
	}else{
		echo "You are our old visited";
	}
?> -->