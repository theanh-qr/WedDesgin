<!DOCTYPE html>
<html>
<head>
	<title>bai6</title>
</head>
<body>
	<?php
		$n = 0;

		if(isset($_POST['so'])){
			$n = $_POST['so'];
		}

		for($SO = 1;$SO <= $n;$SO++){
			if($SO == $n)
			{
				echo $SO;
			}
			else
			{
				echo "$SO-";
			}
		}
	?>
	<form action="bai6day12.php" method="POST">
		<label>Xin mời nhập số vào:</label><br>
		<input type="text" name="so"><br>
		<input type="submit" name="tinh" value="Hiện thị dữ liệu">
	</form>
</body>
</html>