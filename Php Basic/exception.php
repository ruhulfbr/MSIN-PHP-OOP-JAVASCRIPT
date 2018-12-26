<h1>Exception</h1>

<?php
	
	function numCheck($num){
		if($num>1){
			throw new exception("Value must be 1 of bellow");
		}
		return true;
	}

	try{
		numCheck(0);
		echo 'If you are see this , The number is 1 or bellow';
	}
	catch(exception $e){
		echo "Message : ".$e->getMessage();
	}


?>