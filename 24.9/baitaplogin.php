<?php
    // Kiểm tra nếu form đã submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        // Ở đây mình demo, chỉ hiển thị username
        $showWelcome = true;
    } else {
        $showWelcome = false;
    }
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Login Demo</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <?php if ($showWelcome): ?>
        <!-- Trang welcome -->
        <div class="text-center">
            <h2 class="text-success">Xin chào, <?php echo htmlspecialchars($username); ?>!</h2>
        </div>
    <?php else: ?>
        <!-- Form login -->
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card shadow p-4">
                    <h3 class="text-center mb-4">Đăng nhập</h3>
                    <form method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Tên đăng nhập</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <button type="submit" class="btn btn-primary w-100">Đăng nhập</button>
                    </form>
                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

</body>
</html>
