<!DOCTYPE html>
<html>
<head>
	<title>bai2</title>
</head>
<body>
	<?php
		$TU = 0;

		if(isset($_POST["tu"])){
			$TU = $_POST["tu"];
		}

		
	?>
	<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
		<label></label>
		<input type="text" name="tu">
		<input type="submit" name="">
	</form>
</body>
</html>