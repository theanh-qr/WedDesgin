<!DOCTYPE html>
<html>
<head>
	<title>Bai8_2</title>
</head>
<body>
	<?php
		$MANG = array();

		if(isset($_POST["mang"]))
		{
			$MANG = $_POST["mang"];
		}
		if(empty($MANG)){
			$Max =  max($MANG);
			echo $Max;
		}
		
	?>
	<form action="bai8_2.php" method="POST">
		<label>Xin mời nhập mảng vào:</label><br>
		<input type="text" name="mang"><br>
		<input type="submit" name="tinh" value="Hiện thị dữ liệu">
	</form>
	<?php
	//bài3
		$x = 1;
		$sum = 0;
		while ($x <= 100) {
			$sum += $x;
			$x++;
		}
		echo "$sum <br><br><br>";
	?>
	<?php
		$x = 20;
		while ($x <= 50) {
			if($x%3 == 0)
			{
				echo " $x <br>";
			}
			$x++;
		}
	?>
</body>
</html>