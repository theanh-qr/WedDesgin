<!DOCTYPE html>
<html>
<head>
	<title>Bai5</title>
</head>
<body>
	<?php
		$SD = 0;
		$STD = 0;
		define("VAT", 0,1);

		if(isset($_POST["sd"])){
			$SD = $_POST["sd"];
		}


		if($SD == "" || $SD == NULL){
			$SD = "Bạn chưa nhập số điện!!!";
			$STD = 0;
		}
		elseif($SD <= 100){
			$SD;
			$STD = ($SD * 450) + ($SD * 450) * VAT;
		}
		elseif ($SD >= 101 && $SD <= 200) {
			$SD;
			$STD = ($SD * 600) + ($SD * 600) * VAT;
		}
		elseif ($SD >= 201 && $SD <= 300) {
			$SD;
			$STD = ($SD * 750) + ($SD * 750) * VAT;
		}
		elseif ($SD >= 301 && $SD <= 500) {
			$SD;
			$STD = ($SD * 900) + ($SD * 900) * VAT;
		}
		elseif ($SD >= 501 && $SD <= 1000) {
			$SD;
			$STD = ($SD * 1000) + ($SD * 1000) * VAT;
		}
		else{
			$SD;
			$STD = ($SD * 1200) + ($SD * 1200) * VAT;
		}

	?>
	<form action="bai5.php" method="POST">
		<label>Nhập số điện sử dụng</label><br>
		<input type="text" name="sd"><br>
		<label>Thuế VAT: 0.1</label><br>
		<input type="submit" name="tinh" value="Tính số tiền điện">
		<p>
			Số điện sử dụng là: <?php echo $SD; ?>
		</p>
		<p>
			Số tiền điện là: <?php echo $STD; ?> Nghìn đồng.
		</p>
	</form>
</body>
</html>