<!DOCTYPE html>
<html>
<head>
    <title>Bài tập PHP đơn giản</title>
</head>
<body>
    <h2>Nhập thông tin của bạn</h2>

    <form method="post" action="">
        Tên: <input type="text" name="ten"><br><br>
        Tuổi: <input type="number" name="tuoi"><br><br>
        <input type="submit" value="Gửi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ten = $_POST['ten'];
        $tuoi = $_POST['tuoi'];

        echo "<h3>Thông tin bạn vừa nhập:</h3>";
        echo "Tên: " . htmlspecialchars($ten) . "<br>";  /*br trong html dung de ngat dong*/
        echo "Tuổi: " . htmlspecialchars($tuoi);
    }
    ?>
</body>
</html>
