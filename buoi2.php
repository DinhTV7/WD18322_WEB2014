<?php
    // Cấu trúc câu điều kiện
    // if - else
    // if - else - if

    // Bài tập
    // Kiểm tra 1 số cho trước là số chẵn hay số lẻ
    // "Số blabla là số chẵn/lẻ"

    $a = 51;
    if ( $a % 2 == 0 ) {
        echo "Số " . $a . " là số chẵn.";
    } else {
        echo "Số " . $a . " là số lẻ.";
    }

    // Lab 1:
    // Bài 1: Giải phương trình bậc 1: ax + b = 0
    // Bài 2: Cho họ tên, năm sinh, giới tính ( nam = 0, nữ = 1 ) của nyc
    // Kiểm tra xem nyc có đủ tuổi đi NVQS chưa
    // "Ông/Bà có/không đủ tuổi đi NVQS"
    // Ông/Bà lấy từ giới tính 0/1
    // Tuổi = năm hiện tại - năm sinh;
    // gợi ý: get current year in php
    // >= 18 và <= 27 thì đủ tuổi đi NVQS

    // Bài 2 có 2 cách ( sử dụng toán tử 3 ngôi )

    $ho_ten = "Tạ Văn Định";
    $nam_sinh = 2004;
    $gioi_tinh = 0;
    $tuoi = date("Y") - $nam_sinh;

    // Cách if-else-if
    if ($gioi_tinh == 0 && $tuoi >= 18 && $tuoi <= 27) {
        echo "Ông $ho_ten đủ tuổi đi nvqs";
    } else if ($gioi_tinh == 0 && $tuoi < 18 || $tuoi > 27) {
        echo "Ông $ho_ten không đủ tuổi đi nvqs";
    } else if ($gioi_tinh == 1 && $tuoi >= 18 && $tuoi <= 27) {
        echo "Bà $ho_ten đủ tuổi đi nvqs";
    } else {
        echo "Bà $ho_ten không đủ tuổi đi nvqs";
    }

    // Cách toán tử 3 ngôi
    $checkGioiTinh = $gioi_tinh == 0 ? "Ông" : "Bà";
    $checkTuoi = $tuoi >= 18 && $tuoi <= 27 ? "đủ" : "không đủ";
    echo "$checkGioiTinh $ho_ten $checkTuoi đi nvqs";
?>