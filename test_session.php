<?php
session_start();
echo "<pre>";
print_r($_SESSION); 
echo "</pre>";
// echo $_SESSION['a9e'];
// trình duyệt ẩn danh ko tạo session hay cookie -> need fixin9
echo isset($_SESSION['a9e']) ? $_SESSION['a9e'] : ""; 
?>