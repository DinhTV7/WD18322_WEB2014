<?php
    // Mảng đa chiều
    // Là một mảng CHỨA MỘT HOẶC NHIỀU MẢNG BÊN TRONG NÓ

    // Mảng tuần tự 2 chiều
    $arr = [
        [1, 2, 3],
        [4, 5, 6],
        ['xyz', 'abc']
    ];

    // In ra giá trị
    // Cú pháp: $arr[Vị trí mảng muốn truy cập][Vị trí phần muốn lấy]
    echo $arr[0][1];
    // In ra các giá trị trong mảng (3, 4, 6, abc)
    echo $arr[0][2] . $arr[1][0] . $arr[1][2] . $arr[2][1] . "<br>";

    // Duyệt bằng foreach
    foreach ($arr as $row) {
        print_r($row);
        echo "<br>";
        foreach ($row as $value) {
            echo $value . "<br>";
        }
    }

    // In ra [vị trí của mảng][vị trí phần tử]: $giá trị
    foreach ($arr as $key1 => $row) {
        print_r($row);
        echo "<br>";
        foreach ($row as $key2 => $value) {
            echo "[$key1][$key2]: $value <br>";
        }
    }

    // Mảng liên hợp 2 chiều
    $studens = [
        [
            "name" => "Nguyễn Văn A", // các key là duy nhất không được trùng nhau
            "age" => 18,
            "diemTB" => 9
        ],
        [
            "name" => "Nguyễn Văn B",
            "age" => 15,
            "diemTB" => 10
        ],
        [
            "name" => "Nguyễn Văn C",
            "age" => 20,
            "diemTB" => 8
        ],
    ];

    // In ra giá trị
    // Cú pháp: $tên_mảng[vị trí mảng muốn truy cập][key]
    echo $studens[0]["name"]. "<br>";

    // Lấy ra toàn bộ thông tin của hs thứ 3
    echo $studens[2]["name"]. "<br>";
    echo $studens[2]["age"]. "<br>";
    echo $studens[2]["diemTB"]. "<br>";

    // Duyệt mảng bằng foreach
    foreach ($studens as $row) {
        print_r($row);
        echo "<br>";
        foreach ($row as $value) {
            echo $value . "<br>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Xin chào các bạn</h1>
    <h1 style="<?php echo "color: red;" ?>"><?php echo "Cục cưng"; ?></h1>
    <input type="radio" <?php echo "checked" ?>>

    <?php foreach ($studens as $value) : ?>
        <h1><?php echo $value["name"]; ?></h1>
        <h1><?php echo $value["age"]; ?></h1>
        <h1><?php echo $value["diemTB"]; ?></h1>
    <?php endforeach; ?>

    <!-- Lab 4:
        Hiển thị thông tin toàn bộ student ra dưới dạng bảng
        Nếu điểm >=8 thì sinh viên có backgroud là màu đỏ
        Nếu tuổi < 18 thì hiển thị chữ "Đi tù" ngược lại "Cưới" (Tại thêm 1 cột trạng thái)
     -->
</body>
</html>