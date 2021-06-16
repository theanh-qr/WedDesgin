<?php 
	session_start();
	require "./xulyhienthittsv.php";
	$allttsv = get_all_ttsv();

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Hiển thị thông tin sinh viên</title>
<head>
<body>
	<h1 align="center">Danh sách sinh viên đã đăng ký</h1>
	<br/> <br/>
	<a href="dangkyttsv.php"><button id="button">Thêm vào danh sách sinh viên</button></a><br/> 
	<table border="2" width="100%" cellpadding="10" cellspacing="0">
		<tr align="center">
			<td>ID:</td>
			<td>Mã Sinh Viên:</td>
			<td>Tên Sinh Viên:</td>
			<td>Ngày Sinh:</td>
			<td>Lớp</td>
			<td>Điểm Tổng Kết</td>
			<td>Chỉnh sửa</td>

		</tr>
		<?php 
			foreach ($allttsv as $item ) //Dùng vòng lặp mảng biến các biến trong mảng thành biến item
			{
		?>
		<tr>
			<td><?php echo $item['id'] ?></td>
			<td><?php echo $item['masv'] ?></td>
			<td><?php echo $item['tensv'] ?></td>
			<td><?php echo $item['ngaysinh'] ?></td>
			<td><?php echo $item['lop'] ?></td>
			<td><?php echo $item['diemtongket'] ?></td>
			<td>
			<form method="POST" action="xoattsv.php">
				<input onclick=" window.location ='suattsv.php?id=<?php echo $item['id']; ?>' " type=" button " name="edit " value=" Sửa ">
				<input type=" hidden " name=" id " value=" <?php echo $item['id']; ?> " />
				<input onclick=" return confirm(' Bạn có chắc muốn xóa không? '); " type=" submit " name=" delete " value=" Xóa "/>
			</form>
            </td>
		</tr>
		<?php 
			} 
		?>
	</table>
<body>