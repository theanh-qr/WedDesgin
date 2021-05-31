<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$TU1 = 0;
		$TU2 = 0;

		if(isset($_POST["tu1"])){
			$TU1 = $_POST["tu1"];
		}
		if(isset($_POST["tu"])){
			$TU2 = $_POST["tu2"];
		}

		function checkAnagram($A, $B)
		{
			if($A == " " && $B ==" ")
			{
				echo "Bạn cần nhập dữ liệu vào 2 ô trống!!!";
			}
			elseif($A == " ")
			{
				echo "Bạn chưa nhập dữ liệu vào ô thứ 1 !!!";
			}
			elseif($B == " ")
			{
				echo "Bạn chưa nhập dữ liệu vào ô thứ 2 @@@";
			}
			else
			{
				$newA = strval($A);
				$newB = strval($B);

				$check = strpos($newA, $newB);
				if(is_int($check))
				{
					echo "2 chuỗi là Anagram.";
				}
				else
				{
					echo "2 chuỗi k là Anagram.";
				}
			}
		}
	?>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<label>Nhập từ cần kiểm tra thứ nhất</label>
		<input type="text" name="tu1"><br>
		<label>Nhập từ cần kiểm tra thứ hai</label>
		<input type="text" name="tu2"><br>
		<input type="submit" name=""><br>
		<p><?php echo checkAnagram($TU1, $TU2); ?></p>
		<?php  echo strpos("newA", "newB"); ?>
	</form>
</body>
</html>