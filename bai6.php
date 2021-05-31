<!DOCTYPE html>
<html>
<head>
	<title>Bai6</title>
</head>
<body>
	<?php
		$SO = 0;

		if(isset($_POST["so"])){
			$SO = $_POST["so"];
		}

		switch ($SO) {
			case 0:
				$SO = "Ngày thứ 2";
				break;
			case 1:
				$SO = "Ngày thứ 3";
				break;
			case 2:
				$SO = "Ngày thứ 4";
				break;

			case 3:
				$SO = "Ngày thứ 5";
				break;

			case 4:
				$SO = "Ngày thứ 6";
				break;
			case 5:
				$SO = "Ngày thứ 7";
				break;
			case 6:
				$SO = "Ngày thứ Chủ Nhật";
				break;

			default:
				$SO = "Không hợp lệ";
				break;
		}
	?>
	<form action="bai6.php" method="POST">
		<label>Xin mời nhập số vào:</label><br>
		<input type="text" name="so"><br>
		<input type="submit" name="tinh" value="Hiện thị ngày">
		<p>
			<?php echo $SO; ?>
		</p>
	</form>
</body>
</html>