<!DOCTYPE html>
<html>
<head>
	<title>Bai2</title>
</head>
<body>
	<?php
		$so = 0;

		if (isset($_POST["number"])) {
			$so = $_POST["number"];
		}

		if($so == "" || $so == NULL){
			$so = "Bạn chưa nhập giá trị cần kiểm tra";
		}
		else if($so%2 == 0){
			$so = "Đây là số chẵn";
		}
		else{
			$so = "Đây là số lẻ";
		}
	?>
	<form action="bai2.php" method="POST"> 
		<input type="text" name="number">
		<input type="submit" name="" value="Check">
		<p>
			<?php 
				echo $so; 
			?>
		</p>
	</form>
</body>
</html>