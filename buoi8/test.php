<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_GET["name"]) && isset($_GET["ma_sv"]) ) {
            $name = $_GET["name"];
            $ma_sv = $_GET["ma_sv"];

            $mess = "Phương trình vô nghiệm";
        } else {
            $mess = "Phương trình vô số nghiệm";
        }
    ?>
    <h1 style="color: red;"><?php echo $mess ?></h1>
    <h2><?php echo $ma_sv ?></h2>
</body>
</html>