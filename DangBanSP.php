<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mochi Pet - Đăng bán sản phẩm</title>
    <link rel="stylesheet" href="DangbanSP.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>

    <header class="top-header">
        <background></background>
        <div class="header-left">
            <div class="logo-circle">
                <img src="Anh/LOGO.jpg" alt="Mochi Pet Logo" class="main-logo">
            </div>
            <h1 class="brand-name linear-gradient-text">MOCHI PET</h1>
        </div>

        <nav class="main-menu">
            <ul>
                <li><a href="Tongquan.html">Tổng quan</a></li>
                <li><a href="Danhmuc.html">Danh mục</a></li>
                <li><a href="Sanpham.html" class="active">Sản phẩm</a></li>
                <li><a href="Khohang.html">Kho hàng</a></li>
                <li><a href="Nhanvien.html">Nhân viên</a></li>
                <li><a href="Khachhang.html">Khách hàng</a></li>
                <li><a href="Dichvu.html">Dịch vụ chăm sóc</a></li>
            </ul>
        </nav>

        <div class="user-profile">
            <a href="Thong-tin-QL.html" style="text-decoration: none; display: flex; align-items: center; gap: 10px;">
                <img src="Anh/AvatarQL.jpg" alt="Avatar" class="avatar-small">
                    <div class="user-name">
                        <span style="font-weight: bold; color: #333;">Thanh An</span>
                        <br>
                        <small style="color: #777;">Quản lý cửa hàng</small>
                    </div>
            </a>
        </div>
    </header>

    <main class="container">
        <div class="breadcrumb">
            <a href="Sanpham.html" class="breadcrumb-link">Sản phẩm</a> 
            <span> / </span> 
            <span class="active">Đăng bán</span>
        </div>
        
        <div class="header-action">
            <h2 class="page-title">Đăng bán sản phẩm mới</h2>
            <button class="btn-guide"><i class="far fa-question-circle"></i> Hướng dẫn đăng bài</button>
        </div>

        <section class="card">
            <div class="card-header">
                <span class="step-number">1</span> Thông tin cơ bản
            </div>
            <div class="card-body">
                <div class="form-group full">
                    <label>Tên sản phẩm<span class="required">*</span></label>
                    <input type="text" placeholder="Ví dụ: Gel Tiêu Búi Lông Mèo Nourse 22 120g">
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label>Mã sản phẩm</label>
                        <input type="text" placeholder="SP + 3 Chữ cái đầu viết tắt tên sản phẩm">
                    </div>
                    <div class="form-group">
                        <label>Nhà cung cấp</label>
                        <input type="text" placeholder="">
                    </div>
                </div>
                <div class="form-group half">
                    <label>Danh mục<span class="required">*</span></label>
                    <select>
                        <option value="">Chọn danh mục</option>
                    </select>
                </div>
            </div>
        </section>

        <section class="card">
            <div class="card-header">
                <span class="step-number">2</span> Hình ảnh sản phẩm
            </div>
            <div class="card-body">
                <div class="upload-area">
                    <div class="upload-box main-upload">
                        <i class="far fa-image"></i>
                        <p>Kéo thả hoặc chọn ảnh</p>
                        <small>Hỗ trợ định dạng PNG, JPG, (Tối đa 8 ảnh)</small>
                    </div>
                    <div class="upload-preview">
                        <div class="preview-box"><i class="far fa-image"></i></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="card">
            <div class="card-header flex-header">
                <div><span class="step-number">3</span> Phân loại sản phẩm</div>
                <div class="toggle-group">
                    <label class="switch">
                        <input type="checkbox" checked>
                        <span class="slider round"></span>
                    </label>
                    <span>Kích hoạt</span>
                </div>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="classify-box">
                        <label>Nhóm phân loại<span class="required">*</span></label>
                        <input type="text" placeholder="Thêm nhóm phân loại sản phẩm (Màu sắc, Hương vị...)">
                        <div class="tag-group">
                            <span>Màu sắc:</span>
                            <div class="tags">
                                <span class="tag green">Xanh lá <i class="fas fa-times"></i></span>
                                <span class="tag">Đỏ <i class="fas fa-times"></i></span>
                                <span class="tag">Vàng <i class="fas fa-times"></i></span>
                            </div>
                        </div>
                        <div class="tag-group">
                            <span>Hương vị:</span>
                            <div class="tags">
                                <span class="tag">Cá Ngừ + Rong biển <i class="fas fa-times"></i></span>
                                <span class="tag">Thịt bò <i class="fas fa-times"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="classify-box">
                        <label>Kích thước</label>
                        <input type="text" placeholder="Thêm kích thước sản phẩm">
                        <div class="tags margin-v">
                            <span class="tag">Size S <i class="fas fa-times"></i></span>
                            <span class="tag green">Size M <i class="fas fa-times"></i></span>
                            <span class="tag">Size L <i class="fas fa-times"></i></span>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Giá bán</label>
                                <input type="text">
                            </div>
                            <div class="form-group">
                                <label>Số lượng tồn kho</label>
                                <input type="text">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right-align">
                    <button class="btn-save-orange">LƯU</button>
                </div>
            </div>
        </section>

        <section class="card">
            <div class="card-header">
                <span class="step-number">4</span> Mô tả chi tiết
            </div>
            <div class="editor-toolbar">
                <button><i class="fas fa-bold"></i></button>
                <button><i class="fas fa-italic"></i></button>
                <button><i class="fas fa-list-ul"></i></button>
                <button><i class="far fa-image"></i></button>
                <button><i class="fas fa-link"></i></button>
                <button>H1</button>
                <button>H2</button>
            </div>
            <textarea class="editor-content" placeholder="Nhập mô tả chi tiết về sản phẩm, thành phần, hướng dẫn..."></textarea>
        </section>

        <div class="final-actions">
            <button class="btn-draft">Lưu nháp</button>
            <button class="btn-publish">Đăng bán ngay</button>
        </div>
    </main>

</body>
</html>