<?php
    require './xulyhienthittsv.php';
 
// Thực hiện xóa
    $id = isset($_POST['id']) ? (int)$_POST['id'] : ''; //Kiểm tra nếu tồn tại biến POST cột id thì ép kiểu dữ liệu hành int
    if ($id) //Nếu tồn tại id thì thực hiện lệnh xóa
    {
    	delete_sv($id);
    }
 
// Trở về trang danh sách
    header("location: hienthittsv.php");    
?>