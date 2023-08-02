<?php
    // Ôn tập hàm
    // Hàm là một khối lệnh có thể tái sử dụng nhiều lần
    // Hàm chỉ được thực thi khi gọi đến nó

    // Cách tạo hàm:
    function ten_ham() {
        // Viết code cần thực thi vào đây
    }

    // Cách gọi đến hàm
    ten_ham();

    // Hàm có tham số: Hàm trả về và hàm không trả về
    // Hàm trả về là hàm trả về 1 kết quả cụ thể (return)

    // Viết 1 hàm trả về có tham số thực hiện công việc cộng 2 số
    function cong_2_so($a, $b) { // Tham số được ghi ở giữa khe ngoặc đơn
        $sum = $a + $b;
        return $sum; // Hàm có trả về phải có return
    }
    // Gọi hàm
    $ket_qua = cong_2_so(3, 4);
    echo "Tổng là: $ket_qua <br>";

    // Hàm không trả về có tham số (không có return)
    function xin_chao($name) {
        echo "Xin chào, $name đẹp trai <br>";
    }
    // Gọi hàm và truyền tham số
    xin_chao("Định");


    // Hàm không có tham số
    // Hàm trả về không có tham số

    // Viết 1 hàm trả về 1 số ngẫu nhiên không có tham số truyền vào
    // rand(gt bắt đầu, gt kết thúc);
    function randomNumber() {
        $number = rand(1, 100);
        return $number;
    }
    $ketqua = randomNumber();
    echo "Số ngẫu nhiên là: $ketqua <br>";

    // Hàm không trả về không có tham số
    function sayHello () {
        echo "Chào mừng đến với bình nguyên vô tận";
    }
    sayHello();

    // Bài tập lab 3:
    // Bài 1: Sử dụng hàm không trả về có tham số. Giải phương trình bậc 1
    // Bài 2: Sử dụng hàm trả về có tham số. Tính diện tích hình thang
    // Bài 3: Kiểm tra số truyền vào có phải là số nguyên tố hay không (hàm trả về và hàm không trả về)