	<?php 
	require './xulyhienthittsv.php';
 	$conn = mysqli_connect('localhost','root','','sinhvien') or die('Lỗi kết nối');
	// Lấy thông tin hiển thị lên để người dùng sửa

    $id = $_GET['id'];
    if ($id)
    {
    	$data = get_id_sv($id);
    }
 
	if (!$data)
	{
		header("location: hienthittsv.php");
	}
 
	// Nếu người dùng submit form
	if (!empty($_POST['edit']))
	{
    // Lay data
		$id          = isset($_POST['id']) ? $_POST['id'] : '';
    	$masv        = isset($_POST['masv']) ? $_POST['masv'] : '';
    	$tensv       = isset($_POST['tensv']) ? $_POST['tensv'] : '';
    	$ngaysinh    = isset($_POST['ngaysinh']) ? $_POST['ngaysinh'] : '';
    	$lop         = isset($_POST['lop']) ? $_POST['lop'] : '';
    	$diemtongket = isset($_POST['diemtongket']) ? $_POST['diemtongket'] : '';
    
	
		$sql = "UPDATE thongtinsv SET masv = '$masv', tensv = '$tensv', ngaysinh = '$ngaysinh', lop = '$lop', diemtongket = '$diemtongket' where id = $id";
		$query = mysqli_query($conn, $sql);
		header("location: hienthittsv.php");	
	}
	?>	
	<!DOCTYPE html>
	<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
		<title>Sửa thông tin sinh viên</title>
	<head>
	<body>
		<form method="POST" action="suattsv.php?id=<?php echo $data['id']; ?>">
	            <h1>Chỉnh sửa thông tin khách hàng</h1>	
	            Mã sinh viên:<br/>
	            <input type="text" name="masv" value="<?php echo $data['masv']; ?>"><br/><br/>	           
	            Tên sinh viên:<br/>
	            <input type="text" name="tensv" value="<?php echo $data['tensv']; ?>"><br/><br/>	            
	            Ngày sinh:<br/>
	            <input type="text" name="ngaysinh" value="<?php echo $data['ngaysinh']; ?>"><br/><br/>	            
	            Lớp:<br/>
	            <input type="text" name="lop" value="<?php echo $data['lop']; ?>"><br/><br/>
	            Điểm tổng kết:<br/>
	            <input type="text" name="diemtongket" value="<?php echo $data['diemtongket']; ?>"><br/><br/>
	            <input type="hidden" name="id" value="<?php echo $data['id']; ?>"/>
	            <input type="submit" name="edit" value="Lưu"/>        
	    </form>
	<body>
	</html>
