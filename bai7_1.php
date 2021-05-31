<!DOCTYPE html>
<html>
<head>
	<title>Bai7_1</title>
</head>
<body>
	<?php
		$SO = 0;
		$n;

		if(isset($_POST["so"]))
		{
			$SO = $_POST["so"];
		}

		for($n = 1; $n <= $SO; $n++){
			echo " $n <br>";
		}
	?>
	<form action="bai7_1.php" method="POST">
		<label>Xin mời nhập số vào:</label><br>
		<input type="text" name="so"><br>
		<input type="submit" name="tinh" value="Hiện thị dữ liệu">
	</form>
</body>
</html>