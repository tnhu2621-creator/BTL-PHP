function sendOTP() {
    const email = document.getElementById("forgot-email").value;

    if (!email) {
        alert("Vui lòng nhập email");
        return;
    }

    // giả lập kiểm tra email tồn tại
    const otp = Math.floor(100000 + Math.random() * 900000);

    localStorage.setItem("resetEmail", email);
    localStorage.setItem("otp", otp);

    alert("Mã OTP của bạn là: " + otp); 

    window.location.href = "OTP.html";
}
function verifyOTP() {
    const inputs = document.querySelectorAll(".otp-input");
    let enteredOTP = "";

    inputs.forEach(input => {
        enteredOTP += input.value;
    });

    const savedOTP = localStorage.getItem("otp");

    if (enteredOTP.length !== 6) {
        alert("Vui lòng nhập đủ 6 số OTP");
        return;
    }

    if (enteredOTP === savedOTP) {
        alert("Xác nhận OTP thành công");
        window.location.href = "DatLaiMK.html";
    } else {
        alert("Mã OTP không đúng");
    }
}

function resendOTP() {
    const email = localStorage.getItem("resetEmail");

    if (!email) {
        alert("Không tìm thấy email");
        return;
    }

    const newOTP = Math.floor(100000 + Math.random() * 900000);
    localStorage.setItem("otp", newOTP);

    alert("Mã OTP mới của bạn là: " + newOTP);
}

document.addEventListener("DOMContentLoaded", () => {
    const inputs = document.querySelectorAll(".otp-input");

    inputs.forEach((input, index) => {
        input.addEventListener("input", () => {
            if (input.value && index < inputs.length - 1) {
                inputs[index + 1].focus();
            }
        });

        input.addEventListener("keydown", (e) => {
            if (e.key === "Backspace" && !input.value && index > 0) {
                inputs[index - 1].focus();
            }
        });
    });
});

function resetPassword() {
    const newPassword = document.getElementById("new-password").value;
    const confirmPassword = document.getElementById("confirm-password").value;

    if (!newPassword || !confirmPassword) {
        alert("Vui lòng nhập đầy đủ mật khẩu");
        return;
    }

    if (newPassword !== confirmPassword) {
        alert("Mật khẩu nhập lại không khớp");
        return;
    }

    // Lấy user hiện tại
    const userData = JSON.parse(localStorage.getItem("user"));

    if (!userData) {
        alert("Không tìm thấy tài khoản");
        return;
    }

    // Cập nhật mật khẩu
    userData.password = newPassword;
    localStorage.setItem("user", JSON.stringify(userData));

    // Xóa OTP sau khi dùng
    localStorage.removeItem("otp");
    localStorage.removeItem("resetEmail");

    alert("Đặt lại mật khẩu thành công!");
    window.location.href = "Dangnhap.html";
}

