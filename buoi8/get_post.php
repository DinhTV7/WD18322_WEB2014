<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Các phương thức HTTP</title>
</head>
<body>
    <form action="" method="">
        <!-- 
            action: chỉ định đích đến của dữ liệu sẽ tới khi ấn submit
                    (nếu bỏ trống thì dữ liệu sẽ xử lý ngay ở trang hiện tại)
            method: Xác định phương thức HTTP gửi dữ liệu
                    (GET và POST)
         -->
        <input type="text" name="test">
        <!-- 
            name: là tên của các trường input (các key trong mảng liên hợp)
            nó sẽ các định tên của trường dữ liệu khi gửi dữ liệu lên máy chủ
         -->
    </form>

    <h1>Phương thức GET</h1>
    <!-- 
        GET
        - Dữ liệu được truyền lên URL, và sẽ hiển thị trực tiếp trong URL
        - Truyền dữ liệu đi nhanh hơn POST
        - Thường được sử dụng ở các tác vụ nhỏ, không cần đến độ bảo mật cao
            (search, truyền dữ liệu qua lại giữa các trang)

        POST
        - Gửi dữ liệu ngầm, không cần thông qua URL
        - Không giới hạn độ dài dữ liệu
        - Thường được sử dụng cho các tác vụ lớn, cần đến độ bảo mật cao
            (đăng nhập, quản lý thông tin)
     -->
    <form action="test.php" method="GET">
        <label for="">Họ tên:</label>
        <input type="text" name="name" placeholder="Nhập vào họ tên">
        <label for="">Mã sv:</label>
        <input type="text" name="ma_sv" placeholder="Nhập vào mã SV">
        <button type="submit">Gửi đi</button>
    </form>
    <?php
        // GET
        // Dữ liệu sẽ được truyền lên thanh URL
        // var_dump($_GET); // $_GET dùng để lấy ra toàn bộ dữ liệu đẩy lên thanh url
    
        // Cách để lấy ra giá trị
        // echo $_GET["name"];

        // Trước khi sử dụng dữ liệu chúng ta cần phải kiểm tra xem đã tồn tại nó hay chưa
        // if (isset($_GET["name"]) && isset($_GET["ma_sv"]) ) {
        //     $name = $_GET["name"];
        //     $ma_sv = $_GET["ma_sv"];
        //     echo $name . $ma_sv;
        // }
    ?>

    <h1>Phương thức POST</h1>
    <form action="" method="POST">
        <label for="">Họ tên:</label>
        <input type="text" name="name" placeholder="Nhập vào họ tên">
        <label for="">Mã sv:</label>
        <input type="text" name="ma_sv" placeholder="Nhập vào mã SV">
        <button type="submit">Gửi đi</button>
    </form>
    <?php 
        // POST
        // Dữ liệu sẽ được gửi ngầm lên phía server
        // Mắt thường ko thể nhìn thấy được

        // var_dump($_POST);

        // Các lấy ra thông tin
        // echo $_POST["name"];

        if (isset($_POST["name"]) && isset($_POST["ma_sv"]) ) {
            $name = $_POST["name"];
            $ma_sv = $_POST["ma_sv"];
            echo $name . $ma_sv;
        }
    ?>
    <!-- 
        Sử dụng phương thức POST
        Nhập vào 2 số, tính phương trình bậc 1: ax + b = 0
        Hiển trị kết quả ra 1 trang khác như sau
        "Phương trình bậc 1 là: ?x + ? = 0 có nghiệm là gì gì đó"
     -->
</body>
</html>