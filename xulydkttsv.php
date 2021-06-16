<?php
   if (!isset($_POST['masv'])) 
   {
      die('');
   }
   $conn = mysqli_connect('localhost:3306','root','','sinhvien');
   mysqli_set_charset($conn,"utf8");
   header('Content-Type: text/html; charset=UTF-8');

   $masv= addslashes($_POST['masv']);
   $tensv= addslashes($_POST['tensv']);
   $ngaysinh = addslashes($_POST['ngaysinh']);
   $lop = addslashes($_POST['lop']);
   $diemtongket = addslashes($_POST['diemtongket']);

   if (!$masv || !$tensv|| !$ngaysinh || !$lop || !$diemtongket) 
   {
      echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Quay trở lại</a>";
      exit;
   }

   $sql = "SELECT * FROM thongtinsv WHERE masv = '$masv'";
   $result = mysqli_query($conn,$sql);
   if (mysqli_num_rows($result)>0) 
   {
      echo "Tên đăng nhập này đã tồn tại. Vui lòng chọn tên đăng nhập khác.<a href='javascript:history.go(-1)'>Quay trở lại</a>";
      exit;
   }
   $sql = "INSERT INTO thongtinsv (masv,tensv,ngaysinh,lop,diemtongket) VALUES ('$masv','$tensv','$ngaysinh','$lop','$diemtongket')";

   $addthongtinsv = mysqli_query($conn,$sql);
   if ($addthongtinsv)
   { 
      echo "Quá trình đăng ký thành công. <a href='hienthittsv.php'>Về trang đăng nhập</a>";
   }
   else
   {
      echo "Có lỗi trong quá trình đăng ký. <a href='dangkyttsv.php'>Vui lòng thử lại</a>";
   }

?>
