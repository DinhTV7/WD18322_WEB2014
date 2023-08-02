<?php
    // Cách khai bái biến trong PHP
    // Tất cả các biến của PHP đều khai báo bắt đầu bằng $
    // Cấu trúc: $tên_biến = giá trị;
    // Bắt buộc mỗi câu lệnh phải được kết thúc bằng dấu ;
    $a = 5;

    // Hiển thị đầu ra
    echo $a;
    // Cách 2: sử dụng print
    // print sử dụng như echo nhưng print in giá trị chậm hơn
    // => sử dụng echo
    print $a;
    // Cách chạy 1 dự án php:
    // localhost:cổng/tên thư mục trong htdocs/tên file muốn chạy

    // Gán chuỗi sử dụng dấu .
    echo "<br>";
    echo "Số " . $a . " là số lẻ";

    $b = 6;
    echo "<br>";
    // Hiển thị cùng lúc nhiều giá trị
    echo $a, $b;

    // Nhắc lại về các kiểu dữ liệu
    // PHP sẽ tự động hiểu kiểu dữ liệu theo từng tình huống sử dụng
    // Kiểu số nguyên
    $myNumber = 2004;
    // Kiểu số thực
    $myFloat = 5.6;
    // Kiểu string
    $myString = "Tôi nhớ nyc";
    // Kiểu boolean
    $myTrue = true; // true hoặc false
    // Kiểu null
    $muNull = null; // Biến này không có gì (trống rỗng)

    // Khai báo thông tin của 3 nyc (họ tên, năm sinh, số điện thoại)
    // Mỗi thuộc tính khai báo 1 biến
    // Mỗi thông tin được in ra 1 dòng riêng biệt
    // Các thuộc tính được ngăn cách bởi dấu -

    $ho_ten = "Nguyễn Thị A";
    $nam_sinh = 2004;
    $so_dien_thoai = "0987654321";
    echo "<hr>";
    echo "Họ tên: " . $ho_ten . " - Năm sinh: " . $nam_sinh . " - Số điện thoại: " . $so_dien_thoai;

    // Ôn tập toán tử
    // Toán tử số học
    // +, -, *, / (chia hết), % (chia lấy phần dư), ** ( bình phương )
    
    // Toán tử so sánh
    // >, <, >=, <=, ==, != (không bằng)
    // <> (khác)
    // === ( so sánh cả về mặt giá trị và kiểu dữ liệu )
    // !== ( không bằng về kiểu dữ liệu hoặc giá trị )
    // x <=> y ( trả về 0 thì x == y, trả về -1 thì y > x, trả về 1 thì x > y )

    // Toán tử logic
    // && ( phải xảy ra đồng thời ) và || ( xảy ra 1 trong 2 )

    // Toán tử gán
    /**
     * x = y                Gán giá trị y cho x
     * x += y   x = x + y   Cộng thêm y giá trị cho x
     * x -= y   x = x - y   Trừ đi y giá trị của x
     * x *= y   x = x * y   Nhân thêm y lần cho x
     * x /= y   x = x / y   Chia y lần giá trị x
     * x %= y   x = x % y   Chia lấy phần dư giá trị x
     */

    // Toán tử tăng giảm: ++    --
    echo "<hr>";
    $c = 5;
    $test = $c++;
    echo $c;
?>