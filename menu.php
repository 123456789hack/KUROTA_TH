<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/6f1aa3ddf2.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Edit Message</title>
    <style>

     /* เมนูด้านซ้าย */
.sidebar {
    position: fixed;
    left: 0;
    top: 0;
    height: 100%;
    width: 190px; /* กำหนดความกว้างของเมนูในโหมดปกติ */
    background-color: #111;
    color: white;
    padding-top: 60px;
    z-index: 1000;
    transition: width 0.3s ease; /* เพิ่มการเปลี่ยนแปลงความกว้างของเมนู */
}

/* เมนูรายการ */
.sidebar .nav-list {
    list-style: none;
    padding: 0;
}

.sidebar .nav-list li {
    padding: 15px 20px;
}

.sidebar .nav-list li a {
    color: white;
    text-decoration: none;
}

/* ปรับให้แสดงผลในโหมด mobile */
/* เพิ่ม margin ให้กับเนื้อหาหลักเพื่อไม่ให้ทับเมนู */
.home-section {
    margin-left: 190px; /* ระยะห่างจากเมนูด้านซ้าย (ขนาดของเมนูในโหมดปกติ) */
    padding: 20px; /* ระยะห่างภายใน */
}

/* สำหรับหน้าจอขนาดเล็ก */
@media (max-width: 768px) {
    .home-section {
        margin-left: 250px; /* ระยะห่างจากเมนูที่ขยายในโหมดมือถือ */
    }
}

/* สำหรับหน้าจอขนาดเล็กมาก (มือถือ) */
@media (max-width: 480px) {
    .home-section {
        margin-left: 200px; /* เมนูขยายในมือถือ */
    }
}


    </style>
</head>
<body>
    <div class="container1">
        <!-- เมนูด้านซ้าย -->
        <div class="sidebar">
            <div class="Logo1">
                <i class="fa-sharp fa-solid fa-k fa-lg"></i>
                <i class="fa-solid fa-r fa-lg"></i>
                <i class="fa-solid fa-t fa-bounce fa-lg"></i>
            </div>
            <ul class="nav-list">
                <li><a href="#"><i class='bx bx-user'></i><span class="links_name1">User</span></a></li>
                <li><a href="#"><i class='bx bx-chat'></i><span class="links_name1">  Messages</span></a></li>
                <li><a href="#"><i class='bx bx-folder'></i><span class="links_name1">  File Manager</span></a></li>
                <li><a href="#"><i class='bx bx-cart-alt'></i><span class="links_name1">Order</span></a></li>
                <li><a href="#"><i class='bx bx-heart'></i><span class="links_name1">Saved</span></a></li>
                <li><a href="#"><i class='bx bx-cog'></i><span class="links_name1">Setting</span></a></li>
            </ul>
        </div>
    </div>
</body>
</html>
