<?php 
	include "inc/header.php"; 
	include "classes/Calculation.php"; 
?>

<form action="" method="POST">
	Number One : <input type="number" name="num1"><br><br>
	Number Two : <input type="number" name="num2"><br><br>
	<input type="submit" name="claculate" value="Sum"> <input type="reset" name="reset">
</form>	


<?php
	if(isset($_POST["claculate"])){
		$num1 = $_POST["num1"];
		$num2 = $_POST["num2"];
		if(empty($num1) and empty($num2)){
			echo "<p style='color:red'>Number Box must be fill</p>";
		}else{
			echo "<h3>Inputs</h3>";
			 echo "Number One = $num1 <br>";
			 echo "Number Two = $num2 <br><br><br>";

			 echo "<h3>Outputs</h3>";
				$math = new calculation();
				$math->add($num1, $num2);
				$math->minas($num1, $num2);
				$math->goon($num1, $num2);
				$math->vaag($num1, $num2);
				$math->vaagses($num1, $num2);
		}
		
	}



?>

<?php include "inc/footer.php"; ?>