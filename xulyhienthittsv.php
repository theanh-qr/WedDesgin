<?php
    //Lấy tất cả thông tin sinh viên ra
    function get_all_ttsv()
    {
        $conn = mysqli_connect('localhost','root','','sinhvien') or die('Lỗi kết nối');
        mysqli_set_charset($conn,"utf8");
        header('Content-Type: text/html; charset = UTF-8');

        $sql = "SELECT * FROM thongtinsv";
        $query = mysqli_query($conn, $sql);
        $result = array();
        if ($query) {
            while ($row = mysqli_fetch_assoc($query)) {
                $result[]=$row;
            }
        }
        return $result;
    }
    //Lấy thông tin sinh viên theo id
    function get_id_sv($id)
    {
        // Hàm kết nối
        $conn = mysqli_connect('localhost','root','','sinhvien');
     
        // Câu truy vấn lấy tất cả sinh viên
        $sql = "SELECT * FROM thongtinsv WHERE id = {$id}";
     
        // Thực hiện câu truy vấn
        $query = mysqli_query($conn, $sql);
     
        // Khai báo biến là 1 mảng chứa kết quả
        $result = array();
     
        // Nếu có kết quả thì đưa vào biến $result
        if (mysqli_num_rows($query) > 0)//Nếu số hàng trả về trong tập kết quả lớn hơn 0 thi thực thi lệnh
        {
            $row = mysqli_fetch_assoc($query); //Đưa các hàng kết quả thành 1 mảng kết hợp
            $result = $row; //Cho mảng vừa lấy đc thành mang khai báo ở trên 
        }
     
        // Trả kết quả về của mảng chứa dữ liệu
        return $result;
    }
    //Xóa thông tin sinh viên theo id
    function delete_sv($id)
    {

        $conn = mysqli_connect('localhost','root','','sinhvien');
     
        // Câu truy sửa
        $sql = "DELETE FROM thongtinsv WHERE id = $id";
     
        // Thực hiện câu truy vấn
        $query = mysqli_query($conn, $sql);
     
        return $query;
    }
?>