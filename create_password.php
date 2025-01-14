<?php
$password = 'KRT02'; // รหัสผ่านที่ต้องการ
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
echo $hashed_password; // นำไปบันทึกในฐานข้อมูล
?>