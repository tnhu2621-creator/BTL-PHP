<?php
session_start();
include 'connect.php';

$error = "";

if (isset($_POST['btn_login'])) {
    $user_input = mysqli_real_escape_string($conn, $_POST['username']);
    $pass_input = mysqli_real_escape_string($conn, $_POST['password']);

    // Câu lệnh lấy thông tin tài khoản kèm theo tên vai trò từ bảng vaitro
    $sql = "SELECT tk.*, vt.TenVaiTro 
            FROM taikhoan tk
            LEFT JOIN vaitro vt ON tk.MaVaiTro = vt.MaVaiTro 
            WHERE tk.Username = '$user_input' OR tk.Email = '$user_input'";
            
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);

        if ($pass_input === $row['Password']) {
            $_SESSION['user_id'] = $row['MaTK'];
            $_SESSION['username'] = $row['Username'];
            $_SESSION['ten_vaitro'] = $row['TenVaiTro'];

            // Kiểm tra theo mã số hoặc tên vai trò trong DB của em
            if ($row['MaVaiTro'] == 1111) { // 1111 là Quản lý
                header("Location: Tongquan.php");
            } else {
                header("Location: User.php"); // Khách hàng (3333) vào đây
            }
            exit();
        } else {
            $error = "Mật khẩu không chính xác!";
        }
    } else {
        $error = "Tài khoản không tồn tại!";
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập | Mochi Pet</title>
    <link rel="stylesheet" href="Dangnhap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

<header class="auth-header">
    <div class="logo">
        <img src="Anh/LOGO.png" alt="Mochi Pet">
        <span>MOCHI PET</span>
    </div>
    <a href="User.php" class="back-shop">
        <i class="fa-solid fa-arrow-left"></i> Quay lại cửa hàng
    </a>
</header>

<section class="auth-page">
    <div class="auth-left">
        <h1>Chào mừng bạn đến<br>với <span>Mochi Pet!</span></h1>
        <p>Nâng niu thú cưng theo tiêu chuẩn mới. Đăng nhập để quản lý lịch hẹn...</p>
        <div class="pet-frame"><img src="Anh/taikhoan.jpg" alt="Pet"></div>
    </div>

    <form class="auth-box" method="POST" action="">
        <h2>Đăng nhập</h2>
        <span class="subtitle">Cùng chăm sóc thú cưng mỗi ngày</span>

        <?php if($error != ""): ?>
            <p style="color:red; font-size:13px; background: #ffe6e6; padding: 5px; border-radius: 4px;">
                <i class="fa-solid fa-circle-exclamation"></i> <?php echo $error; ?>
            </p>
        <?php endif; ?>

        <label>Email hoặc Tên đăng nhập</label>
        <div class="input-box">
            <i class="fa-solid fa-user"></i>
            <input type="text" name="username" placeholder="Nhập email hoặc tên đăng nhập" required>
        </div>

        <div class="password-row">
            <label>Mật khẩu</label>
            <a href="Quenmk.php" class="forgot-link">Quên mật khẩu?</a>
        </div>

        <div class="input-box">
            <i class="fa-solid fa-lock"></i>
            <input type="password" name="password" placeholder="Nhập mật khẩu" required>
        </div>

        <button type="submit" name="btn_login" class="btn-login">Đăng nhập</button>

        <p class="auth-switch">
            Chưa có tài khoản? <a href="Dangky.php">Đăng ký ngay</a>
        </p>
    </form>
</section>

<footer class="auth-footer">
    <a href="#">Chính sách bảo mật</a>
    <a href="#">Điều khoản dịch vụ</a>
</footer>

</body>
</html>