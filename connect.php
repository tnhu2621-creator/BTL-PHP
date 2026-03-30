<?php
$servername = "localhost";
$username = "root";    // Mặc định của XAMPP
$password = "";        // Mặc định của XAMPP là trống
$dbname = "mochi_pet"; // Tên Database em đã tạo

// Tạo kết nối
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    // Nếu lỗi, dừng chương trình và hiện thông báo
    die("Kết nối Database thất bại: " . mysqli_connect_error());
}

// Thiết lập font tiếng Việt để không bị lỗi hiển thị
mysqli_set_charset($conn, "utf8");
