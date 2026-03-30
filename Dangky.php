<?php 
include 'connect.php'; 

$message = ""; 
$error = "";

// Chỉ thực hiện khi người dùng nhấn nút Đăng ký
if (isset($_POST['btn_register'])) {
    // Lấy dữ liệu từ form thông qua thuộc tính 'name' của thẻ input
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email    = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $repass   = mysqli_real_escape_string($conn, $_POST['repassword']);

    // Kiểm tra mật khẩu khớp nhau
    if ($password !== $repass) {
        $message = "<p style='color:red;'>Mật khẩu nhập lại không khớp!</p>";
    } else {
        // Kiểm tra xem tên đăng nhập hoặc email đã tồn tại trong DB chưa
        $check = "SELECT * FROM taikhoan WHERE Username = '$username' OR Email = '$email'";
        $result_check = mysqli_query($conn, $check);

        if (mysqli_num_rows($result_check) > 0) {
            $message = "<p style='color:red;'>Tên đăng nhập hoặc Email đã tồn tại!</p>";
        } else {
            // Mã 3333 tương ứng với "Khách hàng" trong bảng vaitro của bạn
            $sql = "INSERT INTO taikhoan (Username, Password, Email, MaVaiTro) 
                VALUES ('$username', '$password', '$email', 3333)";
            
            if (mysqli_query($conn, $sql)) {
                $message = "<p style='color:green;'>Đăng ký thành công! <a href='Dangnhap.php'>Đăng nhập ngay</a></p>";
            } else {
                $message = "<p style='color:red;'>Lỗi hệ thống: " . mysqli_error($conn) . "</p>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Đăng ký | Mochi Pet</title>
    <link rel="stylesheet" href="Dangky.css">
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

<section class="register-page">
    <div class="register-left">
        <h1>Bắt đầu hành trình<br>cùng <span>Mochi Pet!</span></h1>
        <p>Đăng ký để đồng hành cùng bạn trong hành trình chăm sóc thú cưng.</p>
        <div class="pet-image"><img src="Anh/taikhoan.jpg" alt="Pet"></div>
    </div>

    <form class="register-box" method="POST" action="">
        <h2>Đăng ký</h2>
        <span class="subtitle">Tạo tài khoản khách hàng</span>

        <?php echo $message; ?>

        <label>Tên đăng nhập</label>
        <div class="input-box">
            <i class="fa-solid fa-user"></i>
            <input type="text" name="username" placeholder="Nhập tên đăng nhập" required>
        </div>

        <label>Email</label>
        <div class="input-box">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" name="email" placeholder="Nhập địa chỉ email" required>
        </div>

        <label>Tạo mật khẩu</label>
        <div class="input-box">
            <i class="fa-solid fa-lock"></i>
            <input type="password" name="password" placeholder="Nhập mật khẩu" required>
        </div>

        <label>Nhập lại mật khẩu</label>
        <div class="input-box">
            <i class="fa-solid fa-lock"></i>
            <input type="password" name="repassword" placeholder="Nhập lại mật khẩu" required>
        </div>

        <button type="submit" name="btn_register" class="btn-register">Đăng ký</button>
    </form>
</section>


<script>
function dangKy(){
    const username = document.getElementById("reg-username").value.trim();
    const email = document.getElementById("reg-email").value.trim();
    const password = document.getElementById("reg-password").value;
    const repassword = document.getElementById("reg-repassword").value;

    if(username === "" || email === "" || password === "" || repassword === ""){
        alert("Vui lòng nhập đầy đủ thông tin");
        return;
    }

    if(password !== repassword){
        alert("Mật khẩu nhập lại không khớp");
        return;
    }

    // Lưu user (demo 1 tài khoản)
    localStorage.setItem("user", JSON.stringify({
    name: username,
    email: email,
    password: password
}));

    alert("Đăng ký thành công! Vui lòng đăng nhập.");
    window.location.href = "Dangnhap.php";
}
</script>

</body>
</html>
