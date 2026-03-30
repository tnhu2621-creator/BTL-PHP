<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Mochi Pet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <link rel="stylesheet" href="giohang.css">
</head>
<body>

<!-- HEADER -->
<header class="header">
    <div class="logo">
        <img src="Anh/LOGO.png" alt="logo">
        <span class="logo-text">MOCHI PET</span>

    </div>

    <nav class="menu">
        <a href="User.html">Trang chủ</a>
        <a href="gioithieu.html">Giới thiệu</a>
        <a href="sp.html" id="btnDanhMuc">Sản phẩm</a>
        <a href="dichvu.html">Dịch vụ</a>
        <a href="Lienhe.html">Liên hệ</a>
    </nav>

    </nav>

    <div class="right-header">
        <div class="search-box">
            <input type="text" placeholder="Tìm kiếm...">
            <button><i class="fa fa-search"></i></button>
        </div>

        <div class="icon-circle"><i class="fa fa-cart-shopping"></i></div>
        <div class="icon-circle"><i class="fa fa-bell"></i></div>

        <div class="user-box">
            <button class="login-btn" id="authBtn"></button>
            <span id="userName" class="user-name"></span>
        </div>

    </div>
</header>
<!-- BREADCRUMB -->
<div class="breadcrumb">
    <a href="User.html">Trang chủ</a> / 
    <span>Giỏ hàng của bạn</span>
</div>

<div class="cart-container">

    <!-- LEFT -->
    <div class="cart-left">

        <h2>Giỏ hàng ( 3 sản phẩm)</h2>

        <div class="select-all">
    <label>
        <input type="checkbox" id="selectAll">
        Chọn tất cả
    </label>
</div>

        <!-- ITEM 1 -->
        <div class="cart-item">
            <input type="checkbox" class="item-check">
            <img src="Anh/CTSP(1).png" alt="">
            <div class="item-info">
                <h3>Hạt Cho Mèo Mọi Lứa Tuổi Catsrang</h3>
                <p>Phân loại: 400g</p>
                <span class="price">90.000đ</span>
            </div>

            <div class="quantity">
                <button>-</button>
                <input type="text" value="1">
                <button>+</button>
            </div>

            <div class="delete">
                <i class="fa-solid fa-trash"></i>
            </div>
        </div>

        <!-- ITEM 2 -->
        <div class="cart-item">
            <input type="checkbox" class="item-check">
            <img src="Anh/sp4.png" alt="">
            <div class="item-info">
                <h3>Pate Cho Chó Mèo Phục Hồi Sức Khỏe Royal Canin Recovery Lon 195g</h3>
                <p>Phân loại: lon</p>
                <span class="price">85.000đ</span>
            </div>

            <div class="quantity">
                <button>-</button>
                <input type="text" value="1">
                <button>+</button>
            </div>

            <div class="delete">
                <i class="fa-solid fa-trash"></i>
            </div>
        </div>

        <!-- ITEM 3 -->
        <div class="cart-item">
            <input type="checkbox" class="item-check">
            <img src="Anh/sp2.png" alt="">
            <div class="item-info">
                <h3>Súp Thưởng Cho Mèo Nắp Vặn Sunny Buddy</h3>
                <p>Phân loại: túi</p>
                <span class="price">20.000đ</span>
            </div>

            <div class="quantity">
                <button>-</button>
                <input type="text" value="1">
                <button>+</button>
            </div>

            <div class="delete">
                <i class="fa-solid fa-trash"></i>
            </div>
        </div>

        <!-- TOTAL -->
        <div class="cart-total">
            <span>Tổng tiền:</span>
            <strong id="totalPrice">0đ</strong>
        </div>

        <div class="cart-buttons">
            <button class="btn-pay">Tiến hành thanh toán</button>
        </div>

    </div>

    <!-- RIGHT -->
    <div class="cart-right">

        <div class="policy-box">
            <h4>CHÍNH SÁCH VẬN CHUYỂN MIỄN PHÍ</h4>
            <p><i class="fa-solid fa-truck"></i> Miễn phí giao hàng – Áp dụng đơn hàng từ 250K trong khu vực nội thành</p>
        </div>

        <div class="policy-box">
            <h4>CAM KẾT CHẤT LƯỢNG</h4>
            <p><i class="fa-solid fa-circle-check"></i> 100% Chính hãng</p>
            <p><i class="fa-solid fa-circle-check"></i> Đổi trả trong 7 ngày</p>
            <p><i class="fa-solid fa-circle-check"></i> Tư vấn chuyên nghiệp</p>
        </div>

        <div class="policy-box">
            <h4>LƯU Ý KHI MUA HÀNG</h4>
            <p><i class="fa-solid fa-star"></i> Giảm giá & khuyến mãi áp dụng khi thanh toán.</p>
            <p><i class="fa-solid fa-circle-check"></i> Sản phẩm chỉ được xác nhận khi thanh toán thành công.</p>
            <p><i class="fa-solid fa-circle-check"></i> Hãy kiểm tra chính xác số lượng trước khi thanh toán.</p>
        </div>

    </div>

</div>

<!-- RELATED PRODUCTS -->
<section class="related-products">
    <h2>SẢN PHẨM LIÊN QUAN </h2>

    <div class="product-list">

        <div class="product-card">
            <img src="Anh/sp_3.jpg" alt="">
            <h3>Bánh Thưởng cho chó Bánh Cookie Miniball BowWow</h3>
            <p class="price">100.000đ</p>
            <button class="btn-detail" onclick="window.location.href='Chitietsp.html'">
    <i class="fa fa-eye"></i> Xem chi tiết
</button>

            <button class="btn-cart"><i class="fa fa-cart-plus"></i> Thêm vào giỏ</button>
        </div>

        <div class="product-card">
            <img src="Anh/sp2.png" alt="">
            <h3>Súp Thưởng Cho Mèo Nắp Vặn Sunny Buddy</h3>
            <p class="price">20.000đ</p>
            <button class="btn-detail"><i class="fa fa-eye"></i> Xem chi tiết</button>
            <button class="btn-cart"><i class="fa fa-cart-plus"></i> Thêm vào giỏ</button>
        </div>

        <div class="product-card">
            <img src="Anh/sp3.png" alt="">
            <h3>Hạt Mềm Cho Mèo Zenith Hairball Tiêu Búi Lông</h3>
            <p class="price">65.000đ</p>
            <button class="btn-detail"><i class="fa fa-eye"></i> Xem chi tiết</button>
            <button class="btn-cart"><i class="fa fa-cart-plus"></i> Thêm vào giỏ</button>
        </div>

        <div class="product-card">
            <img src="Anh/sp4.png" alt="">
            <h3>Pate Cho Chó Mèo Phục Hồi Sức Khỏe Royal Canin Recovery Lon 195g</h3>
            <p class="price">85.000đ</p>
            <button class="btn-detail"><i class="fa fa-eye"></i> Xem chi tiết</button>
            <button class="btn-cart"><i class="fa fa-cart-plus"></i> Thêm vào giỏ</button>
        </div>

        <div class="product-card">
            <img src="Anh/sp5.png" alt="">
            <h3>Thức Ăn Cho Mèo Reflex Plus Hairball Tiêu Búi Lông (Nhập khẩu Thổ Nhĩ Kỳ)</h3>
            <p class="price">230.000đ</p>
            <button class="btn-detail"><i class="fa fa-eye"></i> Xem chi tiết</button>
            <button class="btn-cart"><i class="fa fa-cart-plus"></i> Thêm vào giỏ</button>
        </div>

    </div>
</section>

<!-- FOOTER -->
<footer class="footer">
    <div class="footer-container">

        <!-- COL 1 -->
        <div class="footer-col footer-brand">
            <div class="footer-logo">
                <img src="Anh/LOGO.png" alt="Mochi Pet">
                <h3>MOCHI PET</h3>
            </div>
            <p>
                Tự hào là hệ thống cửa hàng chăm sóc thú cưng chất lượng cao,
                cung cấp sản phẩm và dịch vụ đạt chuẩn, giúp thú cưng luôn khỏe mạnh,
                sạch sẽ và được yêu thương trọn vẹn.
            </p>
        </div>

        <!-- COL 2 -->
        <div class="footer-col">
            <h4>Dịch vụ</h4>
            <ul>
                <li>Khách sạn thú cưng</li>
                <li>Tắm - Vệ sinh</li>
                <li>Chăm sóc trọn gói</li>
            </ul>
        </div>

        <!-- COL 3 -->
        <div class="footer-col">
            <h4>Liên kết</h4>
            <ul>
                <li>Chính sách bảo mật</li>
                <li>Về chúng tôi</li>
                <li>Liên hệ</li>
            </ul>
        </div>

        <!-- COL 4 -->
        <div class="footer-col">
            <h4>Đăng ký bản tin</h4>
            <p>Nhận ngay thông báo về các chương trình ưu đãi mới nhất.</p>

            <div class="footer-subscribe">
                <input type="email" placeholder="Email của bạn">
                <button>
                    <i class="fa-solid fa-paper-plane"></i>
                </button>
            </div>
        </div>

    </div>
</footer>


<script>

const selectAll = document.getElementById("selectAll");
const items = document.querySelectorAll(".item-check");
const totalPriceEl = document.getElementById("totalPrice");

selectAll.addEventListener("change", function () {
    items.forEach(item => {
        item.checked = this.checked;
    });
    updateTotal();
});

document.querySelectorAll(".cart-item").forEach(item => {

    const minusBtn = item.querySelector(".quantity button:first-child");
    const plusBtn = item.querySelector(".quantity button:last-child");
    const input = item.querySelector(".quantity input");

    // Tăng số lượng
    plusBtn.addEventListener("click", () => {
        let value = parseInt(input.value) || 1;
        input.value = value + 1;
    });

    // Giảm số lượng
    minusBtn.addEventListener("click", () => {
        let value = parseInt(input.value) || 1;
        if (value > 1) {
            input.value = value - 1;
        }
    });

});
// format tiền
function formatMoney(number) {
    return number.toLocaleString("vi-VN") + "đ";
}

// tính tổng
function updateTotal() {
    let total = 0;

    document.querySelectorAll(".cart-item").forEach(item => {
        const checkbox = item.querySelector(".item-check");
        const price = parseInt(item.dataset.price);
        const quantity = parseInt(item.querySelector(".quantity input").value);

        if (checkbox.checked) {
            total += price * quantity;
        }
    });

    totalPriceEl.textContent = formatMoney(total);
}

// xử lý từng sản phẩm
items.forEach(item => {
    const checkbox = item.querySelector(".item-check");
    const minusBtn = item.querySelector(".quantity button:first-child");
    const plusBtn = item.querySelector(".quantity button:last-child");
    const input = item.querySelector(".quantity input");

    checkbox.addEventListener("change", updateTotal);

    plusBtn.addEventListener("click", () => {
        input.value = parseInt(input.value) + 1;
        updateTotal();
    });

    minusBtn.addEventListener("click", () => {
        if (parseInt(input.value) > 1) {
            input.value = parseInt(input.value) - 1;
            updateTotal();
        }
    });
});
</script>