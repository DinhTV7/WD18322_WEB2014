<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kế thừa dữ liệu trong PHP</title>
</head>
<body>
    <?php
        // Include
        // include("header.php");
        // include("header.php");
        // include("header.php");
        // include("header.php");
        // include("header1.php");
        // echo "Đây là nội dung của trang";
        // include("footer.php");

        // Require
        // require("header.php");
        // require("header.php");
        // require("header.php");
        // require("header.php");
        // require("header1.php");
        // echo "Đây là nội dung của trang";
        // require("footer.php");

        // Include_one
        include_once("header.php");
        include_once("header.php");
        include_once("header.php");
        include_once("header.php");
        include_once("header1.php");
        echo "Đây là nội dung của trang";
        include_once("footer.php");

        // require_once
        require_once("header.php");
        require_once("header.php");
        require_once("header.php");
        require_once("header.php");
        require_once("header1.php");
        echo "Đây là nội dung của trang";
        require_once("footer.php");
    ?>
</body>
</html>
<!-- 
    Sự khác nhau:
    - Include: Chèn nội dung từ tệp vào trang web. Nếu tệp không tồn tại hoặc có lỗi
                nó sẽ chỉ hiển thị cảnh báo mà vẫn tiếp tục thực thi câu lệnh PHP
    
    - Require: Yêu cầu tệp phải tồn tại và chèn nội dung vào trang web.
            Nếu tệp không tồn tại hoặc có lỗi, sẽ ngừng thực thi câu lệnh tiếp theo và hiển thị lỗi

    - Include_one: Chèn nội dung từ tệp vào trang web một lần duy nhất
            Nếu tệp đã được chèn trước đó, nó sẽ không chèn lại

    - Require_once: Yêu cầu tệp tồn tại và chèn nội dung vào trang web 1 lần duy nhất.
            Nếu tệp đã được chèn trước đó, nó sẽ không chèn lại
 -->