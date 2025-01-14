<?php
session_start();
// ตรวจสอบว่าผู้ใช้เลือกภาษาหรือยัง
if (isset($_GET['lang']) && ($_GET['lang'] == 'en' || $_GET['lang'] == 'th')) {
    $_SESSION['lang'] = $_GET['lang'];
}
// กำหนดภาษาเริ่มต้นเป็นภาษาอังกฤษ
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en';
$translations = include("languages/{$lang}.php");
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="row">
        <div class="container">
            <img class="fixlogo" src="img/LOGO2.1.png" alt="">
            <div class="header-group"></div>
            <div class="img-group">
                <!-- ตัวเลือกการเปลี่ยนภาษา -->
                <div class="dropdown">
    <button class="dropbtn">
        <img class="fixlogo-lang" src="img/Lang-<?= $lang ?>.png" alt="<?= $lang == 'th' ? 'ไทย' : 'English' ?>">
        <?= $lang == 'th' ? 'TH.' : 'EN.' ?>
    </button>
    <div class="dropdown-content">
        <a href="?lang=th">
            <img class="fixlogo-lang" src="img/Lang-th.png" alt="ไทย"> TH
        </a>
        <a href="?lang=en">
            <img class="fixlogo-lang" src="img/Lang-en.png" alt="English"> EN
        </a>
    </div>
</div>
    <img class="tel" src="img/TEL.png" alt="">
        </div>
    </div>
    <!-- เมนูแนวนอนจากซ้ายไปขวา -->
    <nav class="navbar navbar-expand-xl nav-n">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="tab-nav" href="show_data.php"><?= $translations['home'] ?></a></li>
            <li class="nav-item"><a class="tab-nav" href="product.php"><?= $translations['products'] ?></a></li>
            <li class="nav-item"><a class="tab-nav" href="#"><?= $translations['services'] ?></a></li>
            <li class="nav-item"><a class="tab-nav" href="#"><?= $translations['about'] ?></a></li>
            <li class="nav-item"><a class="tab-nav-nb" href="contract.php"><?= $translations['contact'] ?></a></li>
        </ul>
    </nav>
    <div class="line-divider"></div>
    <script src="่js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
