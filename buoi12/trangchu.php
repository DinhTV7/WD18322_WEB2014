<?php
if (isset($_COOKIE["username"])) {
    // Lấy giá trị username từ cookie
    $user = $_COOKIE["username"];
    echo "Xin chào, $user";
    header("Refresh: 10"); // Reload lại trang chủ
} else if (isset($_COOKIE["mess_err"])) { // Trường hợp nhập sai thông tin
    $mess = $_COOKIE["mess_err"];
    echo $mess;
} else {
    echo "Phiên đăng nhập của bạn đã hết";
}