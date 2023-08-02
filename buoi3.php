<?php
    // Ôn tập lại vòng lặp
    // Mục đích sử dụng
    // Muốn thực thi một khối lệnh được lặp lại nhiều lần

    // Vòng lặp for
    // Được dùng khi đã biết trước được số lần lặp lại
    // Cú pháp: for (giá trị bắt đầu; đk dừng; bước nhảy) { code thực thi }
    
    // In ra màn hình lần lượt các số từ 0->10
    for ($a = 0; $a <= 10; $a++) {
        echo "Số: $a <br>";
    }
    echo "<hr>";
    // Vòng lặp while
    // Không cần biết số lần lặp
    // mà khối lệnh sẽ chạy khi điều kiện vẫn còn là true

    // In ra màn hình lần lượt các số từ 0->10
    $b = 0;
    while ($b <= 10) {
        echo "Số: $b <br>";
        $b++;
    }
    echo "<hr>";
    // Vòng lặp do...while
    // Thực thi khối lệnh, sau đó kiểm tra điều kiện
    // Nếu điều kiện vẫn là true thì thực thi lại code

    // In ra màn hình lần lượt các số từ 0->10

    $c = 0;
    do {
        echo "Số: $c <br>";
        $c++;
    } while ($c <= 10);

    // Bài tập lab 2:
    // Bài 1: Tính tổng các số chẵn từ 1->100
    // Bài 2: In ra màn hifng bảng cửu chương 9
    // Bài 3: Tìm các số nguyên tố nhỏ hơn 100