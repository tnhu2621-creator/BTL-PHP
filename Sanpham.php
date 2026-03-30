<?php
$servername = "localhost";
$username = "root";    
$password = "";        
$dbname = "mochi_pet"; 

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Kết nối Database thất bại: " . mysqli_connect_error());
}
mysqli_set_charset($conn, "utf8");
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mochi Pet - Dashboard Sản phẩm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="Sanpham.css">
</head>
<body>

    <header class="top-header">
        <div class="header-left">
            <div class="logo-circle">
                <img src="Anh/LOGO.jpg" alt="Mochi Pet Logo" class="main-logo">
            </div>
            <h1 class="brand-name linear-gradient-text">MOCHI PET</h1>
        </div>

        <nav class="main-menu">
            <ul>
                <li><a href="Tongquan.php">Tổng quan</a></li>
                <li><a href="Danhmuc.php">Danh mục</a></li>
                <li><a href="Sanpham.php" class="active">Sản phẩm</a></li>
                <li><a href="Khohang.php">Kho hàng</a></li>
                <li><a href="Nhanvien.php">Nhân viên</a></li>
                <li><a href="Khachhang.php">Khách hàng</a></li>
                <li><a href="Dichvu.php">Dịch vụ chăm sóc</a></li>
            </ul>
        </nav>

        <div class="user-profile">
            <a href="Thong-tin-QL.php" style="text-decoration: none; display: flex; align-items: center; gap: 10px;">
                <img src="Anh/AvatarQL.jpg" alt="Avatar" class="avatar-small">
                <div class="user-name">
                    <span style="font-weight: bold; color: #333;">Thanh An</span><br>
                    <small style="color: #777;">Quản lý cửa hàng</small>
                </div>
            </a>
        </div>
    </header>

    <main class="dashboard-container">
        <div class="page-header">
            <h2>Quản lý Sản phẩm</h2>
            <div class="header-buttons">
                <button class="btn-action btn-blue"><i class="fas fa-book"></i> Đơn hàng</button>
                <button class="btn-action btn-red"><i class="fas fa-chart-line"></i> Thống kê</button>
                <a href="DangbanSP.php" style="text-decoration: none;">
                    <button class="btn-action btn-green-light"><i class="fas fa-plus-circle"></i> Đăng bán sản phẩm</button>
                </a>
            </div>
        </div>

        <div class="table-container">
            <div class="inner-scroll-table"> 
                <table class="main-table">
                    <thead>
                        <tr>
                            <th>Mã SP</th>
                            <th>Tên sản phẩm</th>
                            <th>Mã danh mục</th>
                            <th>Giá</th>
                            <th>Số lượng tồn</th>
                            <th>Hình ảnh</th>
                            <th>Mô tả</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql = "SELECT * FROM sanpham";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)) {
                            ?>
                                <tr>
                                    <td><?php echo $row['MaSP']; ?></td>
                                    <td style="font-weight: normal;"><?php echo $row['TenSP']; ?></td> 
                                    <td><?php echo $row['MaDM']; ?></td>
                                    <td style="color: #e74c3c; font-weight: bold;">
                                        <?php echo number_format($row['Gia'], 0, ',', '.'); ?>đ
                                    </td>
                                    <td><?php echo $row['SoLuongTon']; ?></td>
                                    <td>
                                        <img src="Anh/<?php echo $row['HinhAnh']; ?>" alt="SP" width="50" style="border-radius: 4px;">
                                    </td>
                                    <td style="font-size: 0.85em; color: #666; text-align: left;"><?php echo $row['MoTa']; ?></td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "<tr><td colspan='7' style='text-align:center;'>Chưa có sản phẩm nào</td></tr>";
                        }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>
</body>
</html>