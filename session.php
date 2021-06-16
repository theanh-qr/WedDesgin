<?php
		session_start();
   		if (isset($_POST['savesession'])){
       $_SESSION['name'] = $_POST['username'];
       $_SESSION['password'] = $_POST['password'];
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Contenct-Type" contenct="text/html"; charset="UTF-8"/>
<title>Session</title>
<link rel="stylesheet" href="#">
</head>

<body>
	<form action="" method="POST">
		<p>User name :<input type="text" name="username" value=""></p>
		<p>Pass word :<input type="text" name="password" value=""></p>
		<p><input type="submit" name="savesession" value="Luu session"></p>
		<?php
			if (isset($_SESSION['name']) && isset($_SESSION['password'])) {
		     echo "ten dang nhap la :".$_SESSION['name'];
		     echo "<br/>";
		     echo "mat khau la :" .$_SESSION['password'];
		   }
		?>

	</form>
</body>
</html>