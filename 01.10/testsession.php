<?php
//session có giá trị từ lúc bắt đầu cho đến khi đóng trình duyệt
// để start session dùng: session_start();
// để đặt giá trị cho session: $_SESSION['TEN BIEN'] = 'VALUE'

session_start();
?>

<!DOCTYPE html>
<html lang='vi'>
      <head>
	       <title>Test Session </title>
	  </head>
	  <body>
	  <?php 
	       $_SESSION['subject'] = 'Ngôn ngữ lập trình PHP';
		   $_SESSION['grade'] = 10;
		   echo "Session variable are set. <br>";
	  ?>
	  
	  </body>
</html>