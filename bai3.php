<!DOCTYPE html>
<html>
<head>
	<title>bai3</title>
</head>
<body>
	<?php
		$so1 = 0;
		$so2 = 0;
		$tong = 0;
		$hieu = 0;
		$tich = 0;
		$chiaDu = 1;

		if(isset($_POST["so1"])){
			$so1 = $_POST["so1"];
		}
		if(isset($_POST["so2"])){
			$so2 = $_POST["so2"];
		}

		$tong = $so1 + $so2;
		$hieu = $so1 - $so2;
		$tich = $so1 * $so2;
		if($so1 != 0 && $so2 != 0){
			$chiaDu = $so1 % $so2;
		}
		else{
			$chiaDu = "K thể thực hiện phép chia cho số 0";
		}
	?>
	<form action="bai3.php" method="POST">
		<label>Nhập số thứ nhất</label><br>
		<input type="text" name="so1"><br>
		<label>Nhập số thứ hai</label><br>
		<input type="text" name="so2"><br>
		<input type="submit" name="tinh" value="Tính"><br>
		<p>
			Tổng 2 số là: <?php echo $tong; ?>
		</p><br>
		<p>
			Hiệu 2 số là: <?php echo $hieu; ?>
		</p><br>
		<p>
			Tích 2 số là: <?php echo $tich; ?>
		</p><br>
		<p>
			Chia lấy dư 2 số là: <?php echo $chiaDu; ?>
		</p><br>
	</form>
</body>
</html>