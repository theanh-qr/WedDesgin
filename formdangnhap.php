<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Contenct-Type" contenct="text/html"; charset="UTF-8">
	<title>form dang nhap</title>
</head>
<body>
	<form method="POST">
		<p>Ho:<input type="text" name="firtname" value=""><br/></p>
		<p>Ten:<input type="text" name="lastname" value=""><br/></p>
		<input type="submit" name="buttom" value="Dang nhap"><br/>
    </form>
    <?php
        if (isset($_POST['buttom'])) && (insset($_POST['lastname'])) {
            echo "Fisrt name :".$_POST['firstname'];
            echo "<br/>";   
            echo "Last name :".$_POST['lastname'];
     }
    ?>
</body>
</html>	