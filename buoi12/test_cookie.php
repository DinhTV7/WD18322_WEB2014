<?php
if (isset($_COOKIE["ngoctrinh"]) && isset($_COOKIE["ngoctrinh2"])) {
    echo $_COOKIE["ngoctrinh"] . " Lớp: " . $_COOKIE["ngoctrinh2"];
} else {
    echo "Cookie đã hết hạn hoặc không tồn tại";
}