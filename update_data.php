<?php
session_start();
include 'db_connect.php'; // เชื่อมต่อฐานข้อมูล

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ตรวจสอบว่ามีข้อมูลใน $_POST['new_data'] และ $_POST['id']
    if (isset($_POST['new_data']) && isset($_POST['id'])) {
        $new_data = $_POST['new_data'];
        $id = $_POST['id'];

        // อัปเดตข้อมูลในฐานข้อมูล
        $sql = "UPDATE messages SET content = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("si", $new_data, $id);
            $stmt->execute();

            // ส่งผู้ใช้กลับไปยังหน้า Show
            header("Location: show_data.php");
            exit;
        } else {
            echo "เกิดข้อผิดพลาดในการเตรียมคำสั่ง SQL";
        }
    } else {
        echo "ข้อมูลไม่ครบถ้วน"; // แจ้งเตือนเมื่อข้อมูลไม่ครบถ้วน
    }
}
?>
