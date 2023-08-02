<!-- 
    - COOKIE cũng được sử dụng để lưu trữ dữ liệu tạm thời
    - COOKIE chỉ lưu trữ dữ liệu trong 1 khoảng thời gian được xác định trước
    - Set thời gian: thời gian hiện tại + khoảng thời gian tồn tại
    - COOKIE sẽ tự động bị xóa khi hết hạn
 -->
<?php
$name = "DinhTV7";
$class = "WD18322";

// Đăng ký cookie
// Cú pháp: setcookie(tên cookie, giá trị, thời gian tồn tại)
// setcookie("ngoctrinh", $name, time() + 5); // Cookie này sẽ tồn tại trong 5s
// setcookie("ngoctrinh2", $class, time() + 5);

// // Kiểm tra đã có Cookie ngoctrinh chưa
// if (isset($_COOKIE["ngoctrinh"]) && isset($_COOKIE["ngoctrinh2"])) {
//     echo $_COOKIE["ngoctrinh"] . " Lớp: " . $_COOKIE["ngoctrinh2"];
// } else {
//     echo "Cookie đã hết hạn hoặc không tồn tại";
// }

?>
<!-- 
    Cho một mảng dữ liệu users
    Tạo 1 form đăng nhập (username và password)
    Kiểm tra người dùng có nhập đúng tài khoản hay không
        - Đưa toàn bộ thông tin đăng nhập vào COOKIE
        - Nếu đúng Thì hiển thị "Xin chào, $username" sang 1 trang mới
        - Nếu sai thì hiển thị "Sai thông tin đăng nhập" sang 1 trang mới
        - Sau 1 khoảng thời gian bằng với thời gian tồn tại của cookie thì reload lại trang
            Nếu cookie không còn thì hiển thị "Phiên đăng nhập của bạn đã hết"
    
    ** Gợi ý:
    header("Location: test_cookie.php")     // Chuyển sang trang mới
    header("Refresh: thời gian (s)")        // Reload lại sang sau bảo nhiêu giây
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="POST">
    <label for="">Tên đăng nhập:</label>
        <input type="text" name="username" require>
        <label for="">Mật khẩu:</label>
        <input type="text" name="password" require>

        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    foreach ($dataUsers as $user) {
        if ($username == $user["username"] && $password == $user["password"]) {
            // Lưu dữ liệu vào Cookie
            setcookie("username", $username, time() + 10);
            setcookie("password", $password, time() + 10);
            break;
        } else {
            $mess_err = "Thông tin đăng nhập không chính xác";
            setcookie("mess_err", $mess_err, time() + 10);
        }
    }
    header("Location: trangchu.php");
}
?>
