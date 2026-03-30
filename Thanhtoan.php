<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thanh toán | Mochi Pet – Chăm sóc thú cưng toàn diện</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700;14..32,800&family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="Thanhtoan.css">
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
        <a href="lienhe.html">Liên hệ</a>
        
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

<main>
    <!-- Tiêu đề trang -->
    <section class="checkout-hero">
        <div class="container">
            <h1>Thanh toán</h1>
            <p>Vui lòng kiểm tra thông tin đơn hàng và hoàn tất đặt mua</p>
        </div>
    </section>

    <!-- Nội dung chính checkout -->
    <section class="checkout-main">
        <div class="container checkout-grid">
            <!-- Cột trái: Thông tin giao hàng & thanh toán -->
            <div class="checkout-left">
                <div class="form-section">
                    <h2><i class="fas fa-user"></i> Thông tin giao hàng</h2>
                    <form action="#" method="post" id="checkout-form">
                        <div class="form-row">
                            <div class="form-group">
                                <label>Họ và tên *</label>
                                <input type="text" placeholder="Nguyễn Văn A" required>
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại *</label>
                                <input type="tel" placeholder="090 123 4567" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" placeholder="example@mail.com" required>
                        </div>
                        <div class="form-group">
                            <label>Địa chỉ giao hàng *</label>
                            <input type="text" placeholder="Số nhà, tên đường, phường/xã, quận/huyện, thành phố" required>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Ghi chú (tùy chọn)</label>
                                <textarea rows="3" placeholder="Thời gian giao hàng mong muốn, lưu ý đặc biệt..."></textarea>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="form-section">
                    <h2><i class="fas fa-credit-card"></i> Phương thức thanh toán</h2>
                    <div class="payment-methods">
                        <label class="payment-option">
                            <input type="radio" name="payment" value="cod" checked>
                            <span><i class="fas fa-money-bill-wave"></i> Thanh toán khi nhận hàng (COD)</span>
                        </label>
                        <label class="payment-option">
                            <input type="radio" name="payment" value="bank">
                            <span><i class="fas fa-university"></i> Chuyển khoản ngân hàng</span>
                        </label>
                        <label class="payment-option">
                            <input type="radio" name="payment" value="card">
                            <span><i class="fab fa-cc-visa"></i> Thẻ tín dụng / ghi nợ (Visa, Mastercard)</span>
                        </label>
                        <label class="payment-option">
                            <input type="radio" name="payment" value="momo">
                            <span><i class="fas fa-wallet"></i> Ví MoMo / ZaloPay</span>
                        </label>
                    </div>
                    <div class="bank-info" style="display: none; margin-top: 15px; background: #f1f5f9; padding: 12px; border-radius: 12px;">
                        <p><strong>Thông tin chuyển khoản:</strong><br>
                        Ngân hàng TMCP Ngoại thương VCB<br>
                        Chủ tài khoản: SHOP MOCHI PET<br>
                        Số TK: 123456789<br>
                        Nội dung: <span style="color:#f97316;">Mã đơn hàng + SĐT</span>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Cột phải: Tóm tắt đơn hàng -->
            <div class="checkout-right">
                <div class="order-summary">
                    <h2><i class="fas fa-shopping-bag"></i> Đơn hàng của bạn</h2>
                    <div class="order-items">
                        <div class="order-item">
                            <img src="https://placehold.co/60x60/f1f5f9/2f7d1a?text=Hạt" alt="Sản phẩm">
                            <div class="item-info">
                                <h4>Thức ăn hạt Royal Canin</h4>
                                <p>Size: 2kg</p>
                            </div>
                            <div class="item-price">390.000đ</div>
                            <div class="item-qty">x1</div>
                        </div>
                        <div class="order-item">
                            <img src="https://placehold.co/60x60/f1f5f9/2f7d1a?text=Đồ+chơi" alt="Sản phẩm">
                            <div class="item-info">
                                <h4>Đồ chơi bóng gặm nhấm</h4>
                                <p>Màu xanh</p>
                            </div>
                            <div class="item-price">65.000đ</div>
                            <div class="item-qty">x2</div>
                        </div>
                        <div class="order-item">
                            <img src="https://placehold.co/60x60/f1f5f9/2f7d1a?text=Spa" alt="Dịch vụ">
                            <div class="item-info">
                                <h4>Dịch vụ tắm & tỉa lông</h4>
                                <p>Cho chó nhỏ (dưới 5kg)</p>
                            </div>
                            <div class="item-price">180.000đ</div>
                            <div class="item-qty">x1</div>
                        </div>
                    </div>
                    <div class="order-total">
                        <div class="total-line">
                            <span>Tạm tính:</span>
                            <span>700.000đ</span>
                        </div>
                        <div class="total-line">
                            <span>Phí vận chuyển:</span>
                            <span>25.000đ</span>
                        </div>
                        <div class="total-line discount">
                            <span>Giảm giá (Mã: WELCOME10):</span>
                            <span>-70.000đ</span>
                        </div>
                        <div class="total-line grand-total">
                            <span>Tổng cộng:</span>
                            <span>655.000đ</span>
                        </div>
                        <div class="coupon-box">
                            <input type="text" placeholder="Mã giảm giá">
                            <button class="btn-coupon">Áp dụng</button>
                        </div>
                    </div>
                    <button type="submit" form="checkout-form" class="btn-place-order">Đặt hàng <i class="fas fa-lock"></i></button>
                    <p class="secure-note"><i class="fas fa-shield-alt"></i> Thông tin thanh toán được bảo mật</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Hỗ trợ nhanh -->
    <section class="support-quick">
        <div class="container">
            <div class="support-card">
                <i class="fas fa-headset"></i>
                <div>
                    <h3>Bạn cần hỗ trợ?</h3>
                    <p>Gọi ngay hotline <strong>0376 379 374</strong> hoặc chat với chúng tôi</p>
                </div>
            </div>
        </div>
    </section>
</main>

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
    // Hiển thị thông tin chuyển khoản khi chọn phương thức "Chuyển khoản ngân hàng"
    const radioBank = document.querySelector('input[value="bank"]');
    const bankInfoDiv = document.querySelector('.bank-info');
    const radioCOD = document.querySelector('input[value="cod"]');
    
    function toggleBankInfo() {
        if (radioBank.checked) {
            bankInfoDiv.style.display = 'block';
        } else {
            bankInfoDiv.style.display = 'none';
        }
    }
    radioBank.addEventListener('change', toggleBankInfo);
    radioCOD.addEventListener('change', toggleBankInfo);
    document.querySelectorAll('input[name="payment"]').forEach(radio => {
        radio.addEventListener('change', toggleBankInfo);
    });
    toggleBankInfo(); // khởi tạo

    const links = document.querySelectorAll(".menu a");

    let current = window.location.pathname.split("/").pop();

    if (current === "") {
        current = "sp.html";
    }

    links.forEach(link => {
        link.classList.remove("active");

        if (link.getAttribute("href") === current) {
            link.classList.add("active");
    }
});
</script>
</body>
</html>