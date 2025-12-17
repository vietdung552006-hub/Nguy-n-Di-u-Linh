<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tài liệu học PHP cơ bản</title>
  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #212529;
      color: #f8f9fa;
    }
    header {
      background-color: #6f42c1;
      padding: 10px 20px;
      color: white;
      position: fixed;
      top: 0;
      left: 0;
      right: 0;
      z-index: 1000;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .sidebar {
      position: fixed;
      top: 60px;
      left: 0;
      width: 220px;
      height: 100%;
      background-color: #2b3035;
      padding: 20px;
      overflow-y: auto;
    }
    .content {
      margin-left: 240px;
      margin-right: 240px;
      padding: 80px 40px 40px 40px;
    }
    .rightbar {
      position: fixed;
      top: 60px;
      right: 0;
      width: 220px;
      height: 100%;
      background-color: #2b3035;
      padding: 20px;
      overflow-y: auto;
    }
    a {
      color: #adb5bd;
      text-decoration: none;
      display: block;
      margin: 8px 0;
    }
    a:hover {
      color: white;
    }
  </style>
</head>
<body>
  <header>
    <h4>📘 Tài liệu PHP cơ bản</h4>
    <div>
      <a href="#" class="text-white me-3">Trang chủ</a>
      <a href="#" class="text-white">Liên hệ</a>
    </div>
  </header>

  <!-- Sidebar trái -->
  <nav class="sidebar">
    <h6>📚 Nội dung học</h6>
    <a href="#gioithieu">Giới thiệu PHP</a>
    <a href="#caidat">Cài đặt môi trường</a>
    <a href="#bien">Biến và kiểu dữ liệu</a>
    <a href="#toantu">Toán tử trong PHP</a>
    <a href="#cautruc">Cấu trúc điều khiển</a>
    <a href="#ham">Hàm trong PHP</a>
  </nav>

  <!-- Nội dung chính -->
  <main class="content">
    <section id="gioithieu">
      <h1>Giới thiệu PHP</h1>
      <p>PHP (Hypertext Preprocessor) là một ngôn ngữ lập trình mã nguồn mở, được dùng để phát triển các ứng dụng web động. PHP được nhúng trực tiếp vào HTML.</p>
    </section>

    <section id="caidat" class="mt-5">
      <h2>Cài đặt môi trường</h2>
      <p>Bạn có thể cài đặt PHP thông qua XAMPP, WAMP hoặc Laragon để có thể chạy thử các chương trình PHP ngay trên máy tính cá nhân.</p>
    </section>

    <section id="bien" class="mt-5">
      <h2>Biến và kiểu dữ liệu</h2>
      <p>Biến trong PHP bắt đầu bằng ký hiệu <code>$</code>, ví dụ: <code>$name = "Trang";</code></p>
    </section>

    <section id="toantu" class="mt-5">
      <h2>Toán tử trong PHP</h2>
      <ul>
        <li>Toán tử số học: +, -, *, /, %</li>
        <li>Toán tử so sánh: ==, !=, &gt;, &lt;</li>
      </ul>
    </section>

    <section id="ham" class="mt-5">
      <h2>Hàm trong PHP</h2>
      <p>Hàm được khai báo bằng từ khóa <code>function</code>. Ví dụ:</p>
      <pre class="bg-dark p-3 rounded"><code>
function chao($ten) {
    echo "Xin chào, $ten!";
}
chao("Trang");
      </code></pre>
    </section>
  </main>

  <!-- Sidebar phải -->
  <aside class="rightbar">
    <h6>📑 Mục lục</h6>
    <a href="#gioithieu">Giới thiệu</a>
    <a href="#caidat">Cài đặt</a>
    <a href="#bien">Biến</a>
    <a href="#toantu">Toán tử</a>
    <a href="#ham">Hàm</a>
  </aside>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
