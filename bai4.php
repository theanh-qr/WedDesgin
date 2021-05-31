<!DOCTYPE html>
<html>
<head>
	<title>Bai4</title>
</head>
<body>
	<?php
		$MSP = " ";
		$TSP = " ";
		$SL = 0;
		$DG = 0;
		define("VAT", 0.05);
		$tien = 0;

		if(isset($_POST["msp"])){
			$MSP = $_POST["msp"];
		}
		if(isset($_POST["tsp"])){
			$TSP = $_POST["tsp"];
		}
		if(isset($_POST["sl"])){
			$SL = $_POST["sl"];
		}
		if(isset($_POST["dg"])){
			$DG = $_POST["dg"];
		}

		if($MSP == "" || $MSP == NULL){
			$MSP = "Chưa có dữ liệu nhập vào";
		}
		else{
			$MSP;
		}

		if($TSP == "" || $TSP == NULL){
			$TSP = "Chưa có dữ liệu nhập vào";
		}
		else
		{
			$TSP;
		}

		if($SL == "" || $SL == NULL){
			$SL = "Chưa có dữ liệu nhập vào";
			$tien = 0;
			if($DG == "" || $DG == NULL)
			{
				$DG = "Chưa có dữ liệu nhập vào";
				$tien = 0;
			}
			else
			{
				$DG;
				$tien = 0;
			}
		}
		else{
			$SL;
			if($DG == "" || $DG == NULL)
			{
				$DG = "Chưa có dữ liệu nhập vào";
				$tien = 0;
			}
			else{
				$DG;
				$tien = ($SL * $DG) - ($SL * $DG * VAT);
			}
		}

	?>
	<form action="bai4.php" method="POST">
		<label>Nhập mã sản phẩm</label><br>
		<input type="text" name="msp"><br>
		<label>Nhập tên sản phẩm</label><br>
		<input type="text" name="tsp"><br>
		<label>Nhập số lượng</label><br>
		<input type="text" name="sl"><br>
		<label>Nhập đơn giá</label><br>
		<input type="text" name="dg"><br>
		<label>Thuế VAT: 0.05</label><br>
		<input type="submit" name="tinh" value="Hiển thị thông tin">
		<p>
			Mã sản phẩm là: <?php echo $MSP; ?>
		</p>
		<p>
			Tên sản phẩm là: <?php echo $TSP; ?>
		</p>
		<p>
			Số lượng sản phẩm là: <?php echo $SL; ?>
		</p>
		<p>
			Đơn giá của sản phẩm là: <?php echo $DG; ?>
		</p>
		<p>
			Tổng số tiền sản phẩm là: <?php echo $tien; ?>
		</p>
	</form>
</body>
</html>
