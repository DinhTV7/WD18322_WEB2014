<?php
// count, arraay_keys, array_values
// Một số hàm có sẵn của PHP tiếp theo

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 9, 9, 9, 9, 9, 10];

// Lấy ra phần tử cuối cùng trong mảng ( tương đương xóa )
// echo array_pop($arr);

// Thêm vào 1 hoặc nhiều phần tử vào cuối mảng
// $arr[] = 11;
// echo array_push($arr, 11, 'abc', 12); // Trả về độ dài mới của mảng

// Thêm 1 hoặc nhiều phần tử vào đầu mảng
// echo array_unshift($arr, 0, "Định"); // Trả về độ dài mới của mảng

// Xóa phần tử đầu tiên trong mảng
// echo array_shift($arr); // Trả về giá trị của phần tử vừa xóa

// Gộp 2 hay nhiều mảng
// $arr_2 = ['abc', 'xyz'];
// print_r(array_merge($arr, $arr_2));

// Tìm kiếm 1 giá trị trong mảng,
// nếu có nó sẽ trả về vị trí (key) của phần tử đó
// echo array_search(5, $arr);

// Loại bỏ những phần tử trùng nhau
// print_r(array_unique($arr)); // Trả ra 1 mảng mới khi đã loại bỏ hết ptu trùng nhau

// Kiểm tra trong mảng có tồn tại giá trị nào đó hay không
var_dump(in_array(11, $arr)); // Nếu có thì trả về true và ngược lại

// Kiểm tra xem đây có phải là 1 mảng hay không
is_array($arr);// Nếu là 1 mảng thì trả về true và ngược lại

echo "<br>";
print_r($arr);
