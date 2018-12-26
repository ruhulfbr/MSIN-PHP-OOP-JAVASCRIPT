<form method="POST" action="" enctype="multipart/form-data">
	<br><br>
	<input type="file" name="image"><br><br>
	<input type="submit" value="submit">	
</form>

<?php
	if(isset($_FILES['image'])){
		$file_name = $_FILES['image'] ['name'];
		$file_tmp = $_FILES['image'] ['tmp_name'];
		move_uploaded_file($file_tmp, "images/".$file_name);

		echo "Image successfully uploaded";
	}

?>