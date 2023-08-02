<!-- 
    Session và Cookie cùng dùng để lưu trữ dữ liệu tạm thời

    SESSION
    - dùng để lưu trữ thông tin và trạng thái của người dùng trong suốt quá trình làm việc
    - Session sẽ bị xóa khi đóng trình duyệt, hoặc thực hiện công việc xóa session
 -->

<?php 
// session_start(); // Khai báo 1 phiên làm việc (bắt buộc phải có khi sử dụng session)

// $mat_dien = "Hôm nay mất điện";

// // Khởi tạo biến session
// $_SESSION["mat_dien"] = $mat_dien;

// // Hiển thị dữ liệu
// echo $_SESSION["mat_dien"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Họ và tên:</label>
        <input type="text" name="name">

        <button type="submit">Gửi</button>
    </form>
</body>
</html>

<?php
    session_start();

    if (isset($_POST["name"])) {
        $_SESSION["name"] = $_POST["name"];
    }

    if ($_SESSION["name"]) {
        echo $_SESSION["name"];
    }
?>

<!-- 
    Cho một mảng Users
    Tạo 1 form đăng nhập có username và password
    Kiểm tra người dùng có nhập đúng tài khoản mật khẩu hay không
        - Nếu đúng thì in ra "Xin chào, $username"
        - Nếu sai tài khoản hoặc mật khẩu thì in ra thông báo "Sai thông tin đăng nhập"
    (Toàn bộ thông báo in ra một trang mới)
 -->
<?php
$dataUsers = [
    [
        "username" => "thaydinhdz",
        "password" => "12345678",
    ],
    [
        "username" => "dinhtv7",
        "password" => "12345678",
    ],
];
?>