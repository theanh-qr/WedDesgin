<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$TU = 0;

		if(isset($_POST["tu"])){
			$TU = $_POST["tu"];
		}

		function capitalize($a)
		{
			if($a == " " || is_numeric($a) == TRUE)
			{
				echo "Chưa có dữ liệu";
			}
			else
			{
				$newA = strval($a);
				echo ucfirst($newA);
			}
		}
	?>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<label>Nhập câu cần in hoa chữ cái đầu</label>
		<input type="text" name="tu">
		<input type="submit" name=""><br>
		<p><?php echo capitalize($TU); ?></p>
	</form>
</body>
</html>