<?php
require('connection.php');
// Lấy ra dữ liệu từ bảng roles
$sql_roles = "SELECT * FROM roles";
$stmt_role = $connect->prepare($sql_roles); // Chuẩn bị câu truy vấn
$stmt_role->execute(); // Thực hiện câu truy vấn

// Lấy dữ liệu
$roles = $stmt_role->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    // Câu truy vấn lấy ra thông tin của 1 người
    $sql_detail = "SELECT * FROM users WHERE id = '$id'";
    // $user = $connect->query($sql_detail)->fetch();

    // Cách 2:
    // prepare nó là 1 cơ chế bảo mật giúp chúng ta thực hiện truy vấn an toàn hơn
    $stmt_detail = $connect->prepare($sql_detail); // Chuẩn bị câu truy vấn
    $stmt_detail->execute(); // Thực hiện câu truy vấn

    // Lấy dữ liệu
    $user = $stmt_detail->fetch(PDO::FETCH_ASSOC);
    // Trả ra 1 mảng đa chiều loại bỏ các key thừa

    print_r($user);
    if (!$user) {
        echo "Người dùng không tồn tại";
        exit();
    }
}
// Mảng chứa lỗi
$error = [];

if (isset($_POST["btn-submit"])) {
    // Lấy ra toàn bộ thông tin người dùng nhập từ form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $role_id = $_POST["role"];
    $status = $_POST["status"];
    // Cách để lấy thông tin của ảnh được đẩy lên từ form
    $image = $_FILES["image"]["name"];

    if (!$error) {
        // Xử lý hình ảnh
        if (!empty($image)) {
            // Thư mục bạn sẽ lưu file upload
            $target_dir    = "img/";
            // Tạo đường dẫn đầy đủ của tệp ảnh trên máy chủ
            $target_file   = $target_dir . $image;
            // Di chuyển tệp ảnh từ thư mục tạm thời (tmp_name) đến thư mục đích (target_file)
            move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        } else {
            $image = $user['image']; // Nếu không có hình mới, giữ nguyên hình cũ
        }

        // Xử lý sửa dữ liệu
        // Câu truy vấn update
        $sql_update = "UPDATE users SET name = '$name', email = '$email', phone = '$phone', image = '$image', role_id = '$role_id', status = '$status' WHERE id = '$id'";
        
        $stmt_update = $connect->prepare($sql_update); // Chuẩn bị câu truy vấn
        $stmt_update->execute(); // Thực hiện câu truy vấn

        header("Location: index.php");
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm người dùng</title>
</head>

<body>
    <h2>Sửa thông tin người dùng</h2>
    <!-- enctype="multipart/form-data" Bắt buộc phải có để thực hiện post ảnh -->
    <form action="" method="POST" enctype="multipart/form-data">
        <!-- ID ko cần nhập mà mặc định sẽ tự tăng khi thêm dữ liệu -->
        <label for="">Name</label>
        <input type="text" name="name" value="<?php echo $user["name"] ?>">
        <br>
        <label for="">Email</label>
        <input type="email" name="email" value="<?php echo $user["email"] ?>">
        <br>
        <label for="">Phone</label>
        <input type="text" name="phone" value="<?php echo $user["phone"] ?>">
        <br>
        <label for="">Image</label>
        <input type="file" name="image" accept="image/*">
        <br>
        <label for="">Role</label>
        <select name="role">
            <?php foreach ($roles as $role) : ?>
                <option value="<?php echo $role["id"] ?>" <?php echo ($user["role_id"] == $role["id"]) ? "selected" : "" ?>>
                    <?php echo $role["name_role"] ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br>
        <label for="">Status</label>
        <select name="status">
            <option value="0" <?php echo $user["status"] == 0 ? "selected" : "" ?>>Hoạt động</option>
            <option value="1" <?php echo $user["status"] == 1 ? "selected" : "" ?>>Ngừng hoạt động</option>
        </select>
        <br>
        <button type="submit" name="btn-submit">Sửa</button>
    </form>
</body>

</html>