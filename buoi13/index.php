<?php
require('connection.php');
// Thực hiện viết câu truy vấn dữ liệu
$sql_users = "SELECT users.* , roles.name_role FROM users INNER JOIN roles ON users.role_id = roles.id";
// Lấy dữ liệu từ Database
$users = $connect->query($sql_users)->fetchAll();

// print_r($users);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách người dùng</title>
</head>

<body>
    <?php echo "Họ và tên - Mã Sinh viên" ?>

    <!-- Chụp ảnh Bảng dữ liệu, Bảng database, code -->
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Role</th>
            <th>Status</th>
        </tr>
        <?php foreach ($users as $user) : ?>
            <tr>
                <td><?php echo $user["id"] ?></td>
                <td><?php echo $user["name"] ?></td>
                <td><?php echo $user["email"] ?></td>
                <td><?php echo $user["phone"] ?></td>
                <td><?php echo $user["name_role"] ?></td>
                <td><?php echo $user["status"] == 0 ? 'Hoạt động' : 'Ngừng hoạt động' ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>