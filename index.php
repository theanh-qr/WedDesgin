<?php
	session_start();
	$sotin1trang = 2;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Phân Trang</title>
	<link rel="stylesheet" type="text/css" href="phantrang.css">
</head>
<body>
	<center><title>DỮ LIỆU NGƯỜI DÙNG</title></center>
	<center>
		<table border="2" width="100%" cellpadding="10" cellspacing="0">
			<tr>
				<td>ID</td>
				<td>User Name</td>
				<td>Pass Word</td>
				<td>Email</td>
				<td>Phone Number</td>
				<td>Dob</td>
				<td>Avatar</td>
			</tr>
			<?php
				//lấy tin đầu tiên cuả  trang
				$tindautien = ($trang - 1) * $sotin1trang;
				//Lấy data trong cơ sở dữ liệu
				$conn = mysqli_connect('localhost','root','','phantrangphp');
				$sql = "SELECT * FROM user LIMIT $tindautien , $sotin1trang";
				$data = mysqli_query($conn,$sql);
				while ($row = mysqli_fetch_array($data)) {
			?>
			<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['username'];?></td>
				<td><?php echo $row['password'];?></td>
				<td><?php echo $row['email'];?></td>
				<td><?php echo $row['phone_number'];?></td>
				<td><?php echo $row['dob'];?></td>
				<td><?php echo $row['avatar_file_name'];?></td>
			</tr>
			<?php } ?>
		</table>
	</center>
	<center>
		<div>
			<?php
				$conn1 = mysqli_connect('localhost','root','','phantrangphp');
				$sql1 = "SELECT * FROM user";
				$x = mysqli_query($conn1,$sql1);
				//Đếm số tada lấy ra
				$tongsotin = mysqli_num_rows($x);
				$sotrang = ceil($tongsotin / $sotin1trang);
				for($t=1;$t <= $sotrang; $t++){
					echo "<a href='phantrang.php?trang=$t' class='abc'>Trang $t</a>";
				}
			?>
		</div>
	</center>
</body>
</html>