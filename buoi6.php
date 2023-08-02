<?php
// Mảng liên hợp
// Là mảng mà các phần tử được xác định bởi các key ( key là duy nhất )

// Các khai báo mảng liên hợp
// Cú pháp: $ten_mang = [ key => giá trị ];

$arr = [
    "toi" => "I",
    "yeu" => "Love",
    "em" => "You",
    2023 => "Very Much",
    "2" => "Gì gì đó"
];

var_dump($arr);
echo "<br>";
// Cách in ra 1 giá trị trong mảng liên hợp
// $ten_mang[ key ]
echo $arr["yeu"];
echo $arr[2023];
echo $arr[2];
// In ra 1 câu hoàn chỉnh "I Love You Very Much"
echo $arr["toi"] . " " . $arr["yeu"] . " " . $arr["em"];
echo "<br>";
// Duyệt bằng 2 cách for và foreach
// foreach ( chỉ cần lấy ra giá trị )
foreach ($arr as $value) {
    echo $value . " ";
}
echo "<br>";
// foreach ( chỉ cần lấy ra key và giá trị )
foreach ($arr as $nyc => $nym) {
    echo "Key: $nyc - Value: $nym <br>";
}

// Duyệt mảng bằng for
// array_values($ten_mang) 
// trả ra 1 mảng mới chính là các giá trị trong mảng
$value = array_values($arr);
print_r($value);
for ($i = 0; $i < count($value); $i++) {
    echo $value[$i] . "<br>";
}
// array_keys($ten_mang)
// trả ra 1 mảng mới chính là các key trong mảng
$keys = array_keys($arr);
print_r($keys);
for ($i = 0; $i < count($keys); $i++) {
    echo $arr[$keys[$i]] . "<br>";
}

// Một cơ số cách làm việc với mảng
$nums = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

// In ra các giá trị trong mảng
echo implode(" - ", $nums); // convert array to string

// Thay thế giá trị của 1 phần tử trong mảng
$nums[4] = 6;

// Thêm phần vào cuối mảng
$nums[] = 22;
array_push($nums, 55);
print_r($nums);

// Tính tổng các phần tử trong mảng
$sum = array_sum($nums);
echo "<br> $sum";

// Tìm giá lớn nhất trong mảng
echo "<br> Giá trị lớn nhất trong mảng là" . max($nums);

// Tìm giá trị nhỏ nhất trong mảng
echo "<br> Giá trị lớn nhất trong mảng là" . min($nums);
echo "<br>";
// Sắp xếp theo thứ tự tăng dần
sort($nums);

// Sắp xếp theo thứ tự giảm dần
// arsort($nums);

// Chỉnh sửa mảng
// array_splice($nums, 3); // Cắt mảng bắt đầu từ vị trí i
// array_splice($nums, 3, 2); // Cắt mảng bắt đầu từ vị trí i đi x phần tử
array_splice($nums, 0, 1, "abc");

print_r($nums);