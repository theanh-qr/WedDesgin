<?php
     $MAX_FILE_SIZE = 1000000;
     if ($_SERVER["REQUEST_METHOD"] != "POST") {
     	echo "Upload không thành công (not POST)";
     	exit(-1); //Quya lại bước ban đầu
     }
     //KIểm tra phương thức POST
     if (!isset($_FILES["file_upload"]["error"]) || $_FILES["file_upload"]["error"] !=0){
     	echo "Upload không thành công(error loadding)";
     	exit(-1);
     }
     // Kiểm tra qúa trình xử lý file khi upload
     if ($_FILES["file_upload"]["size"] > $MAX_FILE_SIZE){
     	echo "Upload không thành công".$_FILES["file_upload"]["size"];
     	exit(-1);
     }
     //Kiểm tra kích thước dung lượng file upload
     $temp = preg_split('/[\/\\\\]+/', $_FILES["file_upload"]["name"]);
     $filename = $temp[count($temp)-1];
   
     if (!preg_match('/\.(jpg|png|bmp)$/i', $filename)) {
          echo "Upload không thành công <br>";
          echo "Vui lòng upload file hình ảnh <br>";
          exit(-1);
     }
     //Kiểm tra loại file được up load lên sever
     $upload_dir = "upload/";
     $upload_file = $upload_dir . $filename;
     if ( move_uploaded_file($_FILES["file_upload"]["tmp_name"], $upload_file) ) {
          echo "Tên file được upload: ".$_FILES["file_upload"]["name"] . "<br />";
          echo "Loại file được upload: ".$_FILES["file_upload"]["type"] . "<br />";
          echo "Dung lượng file được upload: ".($_FILES["file_upload"]["size"] / 1024) . " Kb<br />";
     }
     else{
     	echo "Upload không thành công (error sever)";
     }
?>