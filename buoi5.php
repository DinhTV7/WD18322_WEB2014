<?php
// Mảng là tập hợp các phần tử dùng để lưu trữ nhiều dữ liệu trong 1 biến
// Mảng trong PHP các phần tử có thể có hoặc không cùng kiểu dữ liệu

// Mảng có 2 thành phần: Vị trí và giá trị
// Vị trí thì bắt đầu từ 0 -> n-1 (n là tổng số phần tử trong mảng)

// Cách khai báo mảng
$mang = array(1, 2, 3, 4, 5); // Cách khai báo mảng phiên bản PHP từ 5.4 trở về trước
$mang_2 = [1, 2, 3, "cục cưng", 6.6]; // Sử dụng cách này

// Hiển thị ra thông tin cấu trúc của mảng
print_r($mang_2); // Chỉ hiển thị vị trí và giá trị của phần tử
echo "<br>";
var_dump($mang_2); // Hiển thị thông tin chi tiết cấu trúc của mảng. Thường được dùng để debug
echo "<br>";

// Mảng trong PHP
// Loại 1: Mảng rỗng
$arr_rong = [];

// Loại 2: Mảng tuần tự
// Mảng tuần tự là mảng các phần tử được xác định vị trí bắt đầu từ 0 -> n-1
$phones = ["apple", "samsung", "xiaomi", "oppo"];

// In ra giá trị của phần tử trong mảng
// cú pháp: $ten_mang[vị trí];
echo $phones[0];
echo $phones[1];
echo $phones[2];
echo $phones[3];
echo "<br>";

// Dùng for để in ra giá trị của các phần tử trong mảng
// count là hàm có sẵn dùng để đếm tổng số phần tử trong mảng
for ($i = 0; $i < count($phones); $i++) { 
    echo $phones[$i] . ", ";
}
echo "<br>";
// foreach
// cú pháp: foreach($mảng_cần_duyệt as $giá_trị) { công việc }
foreach ($phones as $phone) {
    echo $phone . ", ";
}

// Khai báo 1 mảng gồm 10 phần tử là số nguyên
// Bài 1: Hiển thị phần tử có giá trị là số lẻ
echo "<br>";
$number = [1, 2, 3, 4, 5, 6, 7, 8, 9 ,10];
foreach( $number as $so){
    if($so % 2 != 0){
        echo $so;
    }
}
// Bài 2: Đếm và tính tổng các phần tử có giá trị là số chẵn trong mảng
echo "<br>";
$tong = 0;
$dem = 0;
foreach( $number as $so){
    if($so % 2 == 0){
        $dem++;
        $tong += $so;
    }
}
echo "$tong - $dem";

// Tìm giá trị lớn nhất trong mảng

