
<?php
	$max_file_size = 2097152;

	if ($_SERVER["REQUEST_METHOD"] != "POST")
	{
     	echo "Upload không thành công (not POST)";
     	exit(-1);
    }

    if (!isset($_FILES["file_upload"]["error"]) || $_FILES["file_upload"]["error"] !=0)
    {
     	echo "Upload không thành công(error loadding)";
     	exit(-1);
    }

     if ($_FILES["file_upload"]["size"] > $max_file_size)
    {
     	echo "Upload không thành công".$_FILES["file_upload"]["size"];
     	exit(-1);
    }

    $get_file_name = preg_split("/[\/\\\\]+/", $_FILES["file_upload"]["name"]); //tách các phần tử trong tên file upload
    $file_name = $get_file_name[count($get_file_name)-1]; // lấy phần tử cuối cùng của tên file và đấy cũng chính là đuôi file

    if (!preg_match('/\.(jpg|png|bmp|mp4)$/i', $file_name)) {
        echo "Upload không thành công <br>";
        echo "Vui lòng upload file hình ảnh <br>";
        exit(-1);
    }

    $foder_file_upload = " Upload/"; //Thư mục chưa file cần upload

    $up_load = $foder_file_upload . $file_name; //đường dẫn upload và đuôi định dạng file

    if ( move_uploaded_file($_FILES["file_upload"]["tmp_name"], $up_load) ){
        echo "Tên file được upload: ".$_FILES["file_upload"]["name"] . "<br />";
        echo "Loại file được upload: ".$_FILES["file_upload"]["type"] . "<br />";
        echo "Dung lượng file được upload: ".($_FILES["file_upload"]["size"] / 1024) . " Kb<br />";
    }
    else{
     	echo "Upload không thành công (error sever)";
    }
?>