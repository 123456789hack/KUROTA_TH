<?php
return [
    'home'     => 'หน้าหลัก',
    'products' => 'สินค้า',
    'services' => 'บริการ',
    'about'    => 'เกี่ยวกับ',
    'contact'  => 'ติดต่อ',
    'address' => "บริษัท คูโรต้า (ไทยแลนด์) จำกัด
                    325 ม.7 เขตนิคมอุตสาหกรรม 304 (ปราจีนบุรี)
                    ตำบลท่าตูม อำเภอศรีมหาโพธิ จังหวัดปราจีนบุรี 25140",
    'contact-1' => 'ติดต่อเรา',
    'H.contact' => 'บริษัท คูโรต้า (ไทยแลนด์) จำกัด',
    'P.contact' => '325 ม.7 เขตนิคมอุตสาหกรรม 304 (ปราจีนบุรี)
                    ตำบลท่าตูม อำเภอศรีมหาโพธิ จังหวัดปราจีนบุรี 25140',
    'Product'   => 'สินค้า',
];
/* <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik+Mono+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/font.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php include 'header.php'; ?>
    <div class="container">
    <div class="container">
        <p class="fontcontract-h"><?= $translations['contact-1'] ?></p>
        <div class="line-divider-1"></div>
        
        <div class="contact-container">
            <div class="contact-info">
                <p class="fontcontract-p">
                    <i class="fa-solid fa-location-dot" style="color: #114D9C;"></i><span class="address-text ">
                    &emsp;<?= nl2br($translations['address']); ?>
                    </span>
                </p>
                <p class="fontcontract-p">
                <i class="fa-solid fa-phone" style="color: #114D9C;"></i>&emsp;061-386-0028 <br>
                </p>
                <p class="fontcontract-p">
                <i class="fa-solid fa-envelope-open-text" style="color: #114D9C;"></i></i>&emsp;it_krt@kurota-th.com<br>
                </p>
                <img class="conlogo" src="img/LOGO.png" alt="">
            </div>

            <div class="contact-img">
                <img class="con-img" src="img/LOCATION.png"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></img>
            </div>
        </div>
        <div class="container map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873.045357696423!2d101.5619262!3d13.8962361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311cf0dd030acb1d%3A0xb0788ff0a3032540!2sKurota%20(Thailand)%20Co.%2CLtd!5e0!3m2!1sth!2sth!4v1734683475319!5m2!1sth!2sth"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
           
            </div>
        <div class="line-divider-2"></div>
    </div>
    </div>

    <?php include 'footer.php'; ?>

</body>
</html>
*/

/* css old body {
     กำหนดเส้นทางไปยังภาพในเครื่อง */
   /* background-image: url('../img/bg-l.png');  เปลี่ยนเป็นเส้นทางของไฟล์ภาพ *
    background-size: cover; /* ปรับขนาดภาพให้เต็มพื้นที่ *
    background-position: center center; /* จัดภาพให้อยู่กลาง *
    background-repeat: no-repeat; /* ห้ามให้ภาพซ้ำ *
    background-color: #ffffff;
}
.w-1{
  width: 100%;
}
.h-1{
  margin-left:10%;
}
.con1 {
  margin-left: 0px;
}
.Logo1{
  margin-left: 45px;
}  /* เมนูด้านซ้าย */
/* ปรับให้ td ทำงานได้ดีในหน้าจอเล็ก *
td.w-1 {
  width: 100%; /* ทำให้ td กว้างเต็มที่ *
  padding-left: 20px; /* ระยะห่างจากเมนู *
  padding-right: 20px;
}/* ปรับให้ td ไม่ถูกบังในหน้าจอเล็ก *
@media (max-width: 768px) {
  td.w-1 {
      width: 100%; /* กว้างเต็มที่ *
      padding-left: 20px;
  }
}
.links_name1{
  margin: 20px;
}/* ใช้ Flexbox เพื่อจัดเมนูให้เรียงในแนวนอน *
/* Navbar Styling *
/* สไตล์สำหรับ container ของ Navbar *
.navbar {
    background-color: #ffffff; /* กำหนดสีพื้นหลังของ Navbar เป็นสีน้ำเงิน *
    padding: 20px 0; /* เพิ่มช่องว่างด้านบนและด้านล่างของ Navbar 10px *
     /*justify-content: center; จัดตำแหน่งเนื้อหาภายใน Navbar ให้อยู่ตรงกลางตามแนวนอน *
    width: 100%; /* ทำให้ Navbar กว้างเต็มพื้นที่ของหน้าจอ *
    height: 65px; /* กำหนดความสูงของ Navbar เป็น 60px *
    display: flex; /* ใช้ Flexbox สำหรับจัดเรียงเนื้อหาภายใน Navbar *
    justify-content: right; /* จัดตำแหน่งเนื้อหาภายใน Navbar ให้อยู่ตรงกลางตามแนวนอน *
    /*align-items: right;  จัดตำแหน่งเนื้อหาภายใน Navbar ให้อยู่ขวาตามแนวตั้ง *
    margin-bottom: 10px;
}/* สไตล์สำหรับรายการของ Navbar *
.navbar-nav {
    display: flex; /* ใช้ Flexbox ในการจัดเรียงรายการ *
    flex-direction: row; /* จัดเรียงรายการให้เป็นแถวแนวนอน *
    list-style: none; /* ลบการจัดรูปแบบรายการ (จุดสัญลักษณ์) ของ list *
    padding-left: 0; /* ลบช่องว่างทางซ้ายของรายการ *
    margin: 0; /* ลบช่องว่างรอบๆ รายการทั้งหมด *
}/* สไตล์สำหรับโลโก้ (ถ้ามี) *
.fixlogo {
    width: 225px; /* กำหนดความกว้างของโลโก้เป็น 225px *
    z-index: 10; /* กำหนดลำดับการแสดงผลให้โลโก้อยู่เหนือสิ่งอื่นๆ *
    margin-left: 15px;
    margin-top: 15px;
    position: relative; /*ทำให่ตำแหน่งอยู่บนสุด*
}/* สไตล์สำหรับแต่ละรายการใน Navbar *
.nav-item {
    margin-right: 20px; /* เพิ่มช่องว่างทางขวาของแต่ละรายการ 20px *
}/* สไตล์สำหรับลิงก์ใน Navbar *
.tab-nav{
    padding-right: 1.5rem;
    padding-left: 1.5rem;
    font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; /* กำหนดฟอนต์ให้เป็น Courier New *
    color: #024b80; /* กำหนดสีตัวอักษรเป็นสีขาว *
    text-decoration: none; /* ลบขีดเส้นใต้จากลิงก์ *
    font-weight: 500; /* กำหนดน้ำหนักตัวอักษรให้บาง *
    padding: 0px 40px; /* เพิ่มช่องว่างภายในลิงก์ 10px ด้านบนและล่าง, 15px ด้านซ้ายและขวา *
    display: block; /* ทำให้ลิงก์เป็นบล็อก ซึ่งจะทำให้มีพื้นที่ที่สามารถคลิกได้ทั้งกล่อง *
    font-size: 25px; /* กำหนดขนาดตัวอักษรเป็น 22px *
    border-right: 2px solid #024b80;
    display: inline-block;
}/* สไตล์สำหรับลิงก์ใน Navbar เมื่อเอาเมาส์ไปชี้ *
.tab-nav-nb{
    padding-right: 1.5rem;
    padding-left: 1.5rem;
    font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; /* กำหนดฟอนต์ให้เป็น Courier New *
    color: #024b80; /* กำหนดสีตัวอักษรเป็นสีขาว *
    text-decoration: none; /* ลบขีดเส้นใต้จากลิงก์ *
    font-weight: 500; /* กำหนดน้ำหนักตัวอักษรให้บาง *
    padding: 0px 40px; /* เพิ่มช่องว่างภายในลิงก์ 10px ด้านบนและล่าง, 15px ด้านซ้ายและขวา *
    display: block; /* ทำให้ลิงก์เป็นบล็อก ซึ่งจะทำให้มีพื้นที่ที่สามารถคลิกได้ทั้งกล่อง *
    font-size: 25px; /* กำหนดขนาดตัวอักษรเป็น 22px *
    display: inline-block;
}/* สไตล์สำหรับลิงก์ใน Navbar เมื่อเอาเมาส์ไปชี้ *
.nav-link:hover {
    background-color: #000000; /* เปลี่ยนสีพื้นหลังเป็นสีฟ้าหลังจากที่เอาเมาส์ไปชี้ *
    color: white; /* กำหนดให้ตัวอักษรเป็นสีขาวเมื่อชี้ *
    border-radius: 3px; /* ทำให้มุมของลิงก์มีความโค้ง 3px *
}/* Image Styling *
.img-bg {
    width: 100%;  /* ให้ภาพขยายเต็มความกว้าง *
    height: auto;  /* ให้สูงปรับตามอัตราส่วนของภาพ *
    border: #000;
}
/* การใช้ Media Queries สำหรับขนาดหน้าจอที่เล็ก *
@media (max-width: 768px) {
    .navbar {
        height: 60px;  /* ลดขนาดของ Navbar สำหรับหน้าจอขนาดเล็ก *
    }
    .nav-link {
        font-size: 18px; /* ปรับขนาดตัวอักษร *
    }
    .img-bg {
        width: 100%; /* ทำให้ภาพขยายเต็มความกว้างของหน้าจอ *
    }
}
@media (max-width: 480px) {
    .nav-link {
        font-size: 16px; /* ปรับขนาดตัวอักษรให้เล็กลงบนมือถือ *
    }
    .fixlogo {
        width: 180px; /* ปรับขนาดโลโก้ให้เล็กลงบนมือถือ *
    }
}.nav-center{
	display: flex;
    justify-content: center;
    flex-wrap: inherit;
    align-items: center;
	--bs-gutter-x: 1.5rem;
    --bs-gutter-y: 0;
    width: 100%;
    padding-right: calc(var(--bs-gutter-x)* .5);
    padding-left: calc(var(--bs-gutter-x)* .5);
    margin-right: auto;
    margin-left: auto;
}.iframe-container {
    display: flex;
  /*  justify-content: center;  จัดตำแหน่งตามแนวนอน 
    align-items: center;  จัดตำแหน่งตามแนวตั้ง *
    border: 10px solid #ffffff; /* ใส่ขอบสีสีน้ำเงินขนาด 5px *
    border-radius: 10px; /* ทำให้มุมขอบโค้ง *
    border-radius: 10px; /* มุมโค้ง *
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2); /* เพิ่มเงาที่ขอบ *
    background-color: #ffffff;
    padding-left: 0px;
    padding-right: 0px;
}.img-contract{
    max-width: 100%; /* กำหนดขนาดของรูปภาพให้ไม่เกินขนาดคอลัมน์ *
    height: auto;
    padding: 0;
    display: flex; 
    justify-content: center; 
    align-items: center; 
}.text-contract{
    font-family: 'Courier New', Courier, monospace;
    font-size: 16px; /* ขนาดตัวอักษร *
    line-height: 1.5; /* ความสูงของบรรทัด *
    margin-bottom: 10px; /* เว้นระยะระหว่างข้อความ *
    text-align: left;/* ข้อความตรงกลาง*
    white-space: nowrap; /* ป้องกันไม่ให้ข้อความตัดบรรทัด *
    overflow: hidden; /* ป้องกันไม่ให้ข้อความล้นออกจากกรอบ *
    text-overflow: ellipsis; /* แสดง "..." ถ้าข้อความยาวเกิน *
    margin-left: 25px;
}.text-contract1{
    font-family: 'Courier New', Courier, monospace;
    font-size: 16px; /* ขนาดตัวอักษร *
    line-height: 1.5; /* ความสูงของบรรทัด *
    margin-bottom: 10px; /* เว้นระยะระหว่างข้อความ *
    white-space: nowrap; /* ป้องกันไม่ให้ข้อความตัดบรรทัด *
    overflow: hidden; /* ป้องกันไม่ให้ข้อความล้นออกจากกรอบ *
    text-overflow: ellipsis; /* แสดง "..." ถ้าข้อความยาวเกิน *
}
.bd-top{
    border-top: 4px solid #024b80;
}
.tab{
    margin-top: 20px;
    margin-bottom: 20px;
}.tel{
    width: 8%;
}.tab-h1{
    margin: top 25px; ;
}
/* จัดกลุ่ม fix-group และ tel */

/* จัดการ fix-group *
.fix-group {
    display: flex; /* ใช้ flexbox ในการจัดเรียง *
    align-items: center; /* จัดตำแหน่งให้ไอคอนภาษาอยู่ในแนวเดียวกัน *
    gap: 10px; /* เพิ่มระยะห่างระหว่างไอคอนภาษา *
}

/* จัดการกับไอคอนภาษา *
.fixlogo-lang {
    width: 35px; /* กำหนดขนาดไอคอนภาษา *
    height: auto; /* ให้ความสูงปรับตามอัตราส่วน *
}.img-group{
    
    margin-right: 20px;
    margin-left: auto;
    margin-top: -45px;
    margin-bottom: 15px;
    /* justify-items: right; *
    text-align-last: right;
} */
