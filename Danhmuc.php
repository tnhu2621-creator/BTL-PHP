<?php 
include 'connect.php'; 
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mochi Pet - Dashboard Danh mục</title>
    <link rel="stylesheet" href="Danhmuc.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
                <li><a href="Danhmuc.php" class="active">Danh mục</a></li>
                <li><a href="Sanpham.php">Sản phẩm</a></li>
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
                    <span style="font-weight: bold; color: #333;">Thanh An</span>
                    <br>
                    <small style="color: #777;">Quản lý cửa hàng</small>
                </div>
            </a>
        </div>
    </header>

    <main class="dashboard-container">
        <div class="header-side-actions">
            <h2>Quản lý danh mục sản phẩm</h2>
            <div class="right-actions-group">
                <div class="button-group">
                    <button class="btn btn-green-view">Xem danh mục dịch vụ</button>
                    <button class="btn btn-orange-add" id="openModalBtn">
                        <i class="fas fa-plus-circle"></i> Thêm danh mục mới
                    </button>
                </div>
                <div class="trash-bin-container">
                    <i class="fas fa-trash"></i> 
                </div>
            </div>
        </div>

        <div class="search-section">
            <div class="search-container">
                <i class="fas fa-search search-icon"></i>
                <input type="text" class="search-input" placeholder="Tìm kiếm danh mục theo tên">
            </div>
        </div>

        <div class="main-content-wrapper">
            
            <div class="card table-card paw-decor">
                <div class="inner-scroll-table"> 
                    <table class="category-table">
                        <thead>
                            <tr>
                                <th>MÃ DM</th>
                                <th>TÊN DANH MỤC</th>
                                <th>SỐ LƯỢNG SẢN PHẨM</th>
                                <th>THAO TÁC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT dm.MaDM, dm.TenDanhMuc, COUNT(sp.MaSP) AS TongSoSP 
                                    FROM danhmuc dm 
                                    LEFT JOIN sanpham sp ON dm.MaDM = sp.MaDM 
                                    GROUP BY dm.MaDM, dm.TenDanhMuc";
                            $result = mysqli_query($conn, $sql);

                            if ($result && mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)) {
                                    echo "<tr data-id='{$row['MaDM']}'>";
                                    echo "<td class='text-center'>#{$row['MaDM']}</td>";
                                    echo "<td class='text-left'><strong>{$row['TenDanhMuc']}</strong></td>";
                                    echo "<td class='text-center'><span class='badge'>{$row['TongSoSP']} sản phẩm</span></td>";
                                    echo "<td class='action-cell'>
                                            <i class='fas fa-pencil-alt' data-id='{$row['MaDM']}' title='Sửa'></i> 
                                            <i class='fas fa-trash-alt' data-id='{$row['MaDM']}' title='Xóa'></i>
                                          </td>";
                                    echo "</tr>";
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card edit-panel disabled-panel"> 
                <div class="edit-header">
                    <i class="fas fa-edit"></i>
                    <h3>Sửa danh mục</h3>
                </div>
                <div class="form-group">
                    <label>Tên danh mục mới:</label>
                    <input type="text" id="editCategoryName" placeholder="Nhập tên mới...">
                </div>
                <div class="edit-actions">
                    <button class="btn-submit" id="saveChangesBtn"><i class="fas fa-save"></i> Lưu thay đổi</button>
                    <button class="btn-cancel" id="cancelEditBtn">Hủy bỏ</button>
                </div>
            </div>
        </div>
     </main>
</body>
<script>
let currentRowEditing = null;

// Xử lý khi nhấn nút Sửa
document.addEventListener('click', function(e) {
    const editBtn = e.target.closest('.fa-pencil-alt');
    if (editBtn) {
        currentRowEditing = editBtn.closest('tr');
        const name = currentRowEditing.querySelector('td:nth-child(2) strong').innerText;

        const editPanel = document.querySelector('.edit-panel');
        editPanel.classList.remove('disabled-panel');
        document.getElementById('editCategoryName').value = name;
        document.getElementById('editCategoryName').focus();
    }
});

// Nút Hủy
document.getElementById('cancelEditBtn').onclick = function() {
    const editPanel = document.querySelector('.edit-panel');
    editPanel.classList.add('disabled-panel');
    document.getElementById('editCategoryName').value = "";
    currentRowEditing = null;
};

// Nút Lưu
document.getElementById('saveChangesBtn').onclick = function() {
    if (currentRowEditing) {
        const newName = document.getElementById('editCategoryName').value;
        if(newName.trim() === "") return alert("Vui lòng nhập tên!");
        
        currentRowEditing.querySelector('td:nth-child(2) strong').innerText = newName;
        alert('Cập nhật thành công!');
        document.getElementById('cancelEditBtn').click();
    }
};
</script>
</html>