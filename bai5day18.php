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

		function reverse($str){
			if(is_numeric($str) == TRUE)
			{
				if($str < 0)
				{
					echo strval($str);
				}
				else
				{
					echo strrev($str);
				}
			}
			else
			{
				echo strrev($str);
			}
		}
	?>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<label>Nhập ký tự</label>
		<input type="text" name="tu"><br>
		<input type="submit" name="">
		<p><?php echo reverse($TU);?></p>
	</form>
</body>
</html>