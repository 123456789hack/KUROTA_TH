<?php
session_start();
// ตรวจสอบว่าผู้ใช้ได้เข้าสู่ระบบหรือไม่
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // ถ้ายังไม่ได้เข้าสู่ระบบ ให้ส่งกลับไปที่หน้า login
    header("Location: login.php");
    exit;
}
// เชื่อมต่อฐานข้อมูล
include 'db_connect.php'; 

// เริ่มต้นตัวแปรสำหรับเก็บข้อมูลช่องต่างๆ
$current_data1 = '';
$current_data2 = '';
$current_data3 = '';
$image = '';

// ดึงข้อมูลจากฐานข้อมูล (ลำดับที่ 1, 2, 3, 4)
$sql = "SELECT * FROM messages WHERE id IN (1, 2, 3, 4) ORDER BY id ASC";
$result = $conn->query($sql);

// ถ้ามีข้อมูลจากฐานข้อมูล
if ($result && $result->num_rows > 0) {
    $counter = 1;
    while ($row = $result->fetch_assoc()) {
        $content = $row['content'];
        if ($counter == 1) {
            $current_data1 = $content;  // ข้อมูลช่องแรก
        } elseif ($counter == 2) {
            $current_data2 = $content;  // ข้อมูลช่องที่สอง
        } elseif ($counter == 3) {
            $current_data3 = $content;  // ข้อมูลช่องที่สาม
        } elseif ($counter == 4) {
            $image = $row['image_data'];  // ข้อมูลช่องสี่รูปภาพ (เก็บ path ของไฟล์ภาพ)
        }
        $counter++;
    }
}

// การอัปเดตข้อมูล (เมื่อมีการส่งฟอร์ม)
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // รับค่าที่กรอกในฟอร์ม
    $new_data = $_POST['new_data'];
    $new_data2 = $_POST['new_data2'];
    $new_data3 = $_POST['new_data3'];

    // ตรวจสอบการอัปโหลดไฟล์
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        // หากมีการอัปโหลดภาพใหม่
        $image = $_FILES['image']['name']; // ชื่อไฟล์ใหม่ที่อัปโหลด
        $target = 'uploads/' . basename($image); // ตำแหน่งที่จะเก็บไฟล์
        move_uploaded_file($_FILES['image']['tmp_name'], $target); // อัปโหลดไฟล์
    }

    // อัปเดตข้อมูลในฐานข้อมูล
    $update_sql1 = "UPDATE messages SET content = ? WHERE id = 1";
    $update_sql2 = "UPDATE messages SET content = ? WHERE id = 2";
    $update_sql3 = "UPDATE messages SET content = ? WHERE id = 3";
    $update_sql4 = "UPDATE messages SET image_data = ? WHERE id = 4";

    // เตรียมคำสั่ง SQL
    $update_stmt1 = $conn->prepare($update_sql1);
    $update_stmt2 = $conn->prepare($update_sql2);
    $update_stmt3 = $conn->prepare($update_sql3);
    $update_stmt4 = $conn->prepare($update_sql4);

    // Binding parameters
    $update_stmt1->bind_param("s", $new_data);
    $update_stmt2->bind_param("s", $new_data2);
    $update_stmt3->bind_param("s", $new_data3);
    $update_stmt4->bind_param("s", $image); // ส่ง path ของไฟล์

    // Execute each statement
    $update_stmt1->execute();
    $update_stmt2->execute();
    $update_stmt3->execute();
    $update_stmt4->execute();

    // ดึงข้อมูลที่อัปเดตมาแสดงใหม่
    // ตอนนี้ข้อมูลในฐานข้อมูลถูกอัปเดตแล้ว
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        $counter = 1;
        while ($row = $result->fetch_assoc()) {
            $content = $row['content'];
            if ($counter == 1) {
                $current_data1 = $content;  // ข้อมูลช่องแรก
            } elseif ($counter == 2) {
                $current_data2 = $content;  // ข้อมูลช่องที่สอง
            } elseif ($counter == 3) {
                $current_data3 = $content;  // ข้อมูลช่องที่สาม
            } elseif ($counter == 4) {
                $image = $row['image_data'];  // ข้อมูลช่องสี่รูปภาพ
            }
            $counter++;
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Edit Message</title>
</head>
<body>
<div class="container" style="margin-left: 0px;">
<table>
    <td>
        <!-- เรียกใช้งานเมนูจากไฟล์แยก -->
        <?php include 'menu.php'; ?>
    </td>

    <!-- เนื้อหาหลัก -->
    <td class="w-1">
    <!-- ฟอร์มการอัปเดตข้อมูล -->
    <div class="home-section">
        <h1>Edit Messages</h1>
        <form id="editForm" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="new_data" class="form-label">ข้อมูลช่องแรก:</label>
                <input type="text" class="form-control" name="new_data" value="<?php echo htmlspecialchars($current_data1); ?>" required />
            </div>
            <div class="mb-3">
                <label for="new_data2" class="form-label">ข้อมูลช่องที่สอง:</label>
                <input type="text" class="form-control" name="new_data2" value="<?php echo htmlspecialchars($current_data2); ?>" required />
            </div>
            <div class="mb-3">
                <label for="new_data3" class="form-label">ข้อมูลช่องที่สาม:</label>
                <input type="text" class="form-control" name="new_data3" value="<?php echo htmlspecialchars($current_data3); ?>" required />
            </div>

            <label for="image">เลือกไฟล์รูปภาพ:</label>
            <input type="file" name="image" id="image" accept="image/*" onchange="previewImage(event)" />

            <div class="mb-3">
                <label>แสดงรูปภาพปัจจุบัน:</label><br>
                <?php if ($image): ?>
                    <img id="currentImage" src="<?php echo 'uploads/' . htmlspecialchars($image); ?>" alt="Current Image" width="300" />
                <?php else: ?>
                    <p>ยังไม่มีภาพ</p>
                <?php endif; ?>
            </div>
            <button type="submit" class="btn btn-primary">อัปเดตข้อมูล</button>
        </form>
    </div>
</td>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = function() {
                const imageElement = document.getElementById('currentImage');
                imageElement.src = reader.result;
            };
            if (file) {
                reader.readAsDataURL(file);
            }
        }

        // AJAX การส่งฟอร์ม
        $("#editForm").submit(function(event) {
            event.preventDefault(); // ป้องกันการส่งฟอร์มแบบปกติ
            
            $.ajax({
                url: "admin_edit.php", 
                type: "POST",
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(response) {
                    alert("ข้อมูลถูกอัปเดตแล้ว");
                    // สามารถเพิ่มการอัปเดตแสดงผลที่หน้านี้หากต้องการ
                }
            });
        });
    </script>
</body>
</html>
