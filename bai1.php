<!DOCTYPE html>
<html>
<head>
	<title>Bai1</title>
</head>
<body>
	<?php
		$sum = 0;
		$so_1=0;
		$so_2=0;
		if(isset($_POST["so1"])){
			$so_1 = $_POST["so1"];
		}
		if(isset($_POST["so2"])){
			$so_2 = $_POST["so2"];
		}
	
		
		if($so_1 == $so_2)
		{
			$sum = ($so_1 + $so_2)*3;
		}
		else
		{
			$sum = $so_1 + $so_2;
		}
	?>
	<form action="bai1.php" method="POST">
		<label>Nhập số thứ nhất</label><br>
		<input type="text" name="so1"><br>
		<label>Nhập số thứ hai</label><br>
		<input type="text" name="so2"><br>
		<input type="submit" name="tinh" value="Tính">
		<span id="sum">
			<?php echo $sum;?>
		</span>
	</form>
</body>
</html>