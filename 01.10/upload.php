<?php
    // upload.php
     $target_dir = "upload/";   //duong dan den thu muc upload
	 $target_file = basename($_FILES["fileupload"]["name"]);
     // $checkUploadFile = 1;
     $file_ext = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));  //lay ra phan mo rong
	 $allow_file_type = ["jpg", "docx", "pdf", "txt", "xlsx"]; //vi du chi cho phep cac loai nay
	 $file_name = $target_dir . $target_file;
	 if(in_array($file_ext, $allow_file_type));
	 {
		 if (file_exists($file_name))
		 {
			 echo "File đã tồn tại <br>";
		 }
		 else
		 {
			 move_uploaded_file($_FILES['fileupload']['tmp_name'], $file_name);
			 echo "Upload file thành công <br>";
		 }
	 }
	 else
	 {
		echo "Upload file không thành công do không được phép <br>";
	 }
	 
	echo "<a href = 'testupload.php'> Quay lại </a>";
	 	 
?>