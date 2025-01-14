<?php
include 'db_connect.php'; // เชื่อมต่อฐานข้อมูล

// ดึงข้อมูลจากฐานข้อมูล
$sql = "SELECT * FROM messages ORDER BY id ASC LIMIT 4";
$result = $conn->query($sql);

// ตัวแปรเก็บข้อมูล
$content1 = '';
$content2 = '';
$content3 = '';
$image1 = '';

if ($result && $result->num_rows > 0) {
    $counter = 1;
    while ($row = $result->fetch_assoc()) {
        $content = htmlspecialchars($row['content']); // ข้อความ
        $image_data = $row['image_data']; // ข้อมูลรูปภาพ
        $image_name = $row['image_name']; // ชื่อไฟล์รูปภาพ

        // เก็บข้อความ
        if ($counter == 1) $content1 = $content;
        if ($counter == 2) $content2 = $content;
        if ($counter == 3) $content3 = $content;

        // เก็บรูปภาพ
        if ($image_data) {
            $image1 = "<div class='image-container'>";
            $image1 .= "<h3>รูปภาพ:</h3>";
            $image1 .= "<img src='uploads/" . htmlspecialchars($image_data) . "' alt='$image_name' class='img-thumbnail'>";
            $image1 .= "</div>";
        }

        $counter++;
    }
} else {
    echo "<p>ไม่พบข้อมูลในฐานข้อมูล</p>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Data</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Rubik+Mono+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/font.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include'header.php';?>
        <img class="img-bg" src="img/KRT-L.png" alt="Background Image">
<div class="container">
   <p class="kanit-light fonthead">ประวัติบริษัท</p>
</div>
<?php 
include'footer.php';
?>
</body>
</html>
<!--
    <div class="container">
        <h1>ข้อมูลจากฐานข้อมูล</h1>
        <div class="content-container">
            <!- แสดงข้อความ 
            <div class="content-item">
                <h3>รายการที่ 1</h3>
                <p> <?php //echo $content1; ?></p>
            </div>
            <div class="content-item">
                <h3>รายการที่ 2</h3>
                <p><?php //echo $content2; ?></p>
            </div>
            <div class="content-item">
                <h3>รายการที่ 3</h3>
                <p><?php //echo $content3; ?></p>
            </div> 

            <!- แสดงรูปภาพ 
            <?php //echo $image1; ?>
        </div>
    </div>  
    <div class="container">
<div class="row tab">
    <div class=" col-12 col-lg-6">
    <div style=" justify-items: center; padding-right: 0px; padding-left: 0px; " class="container col-12"> <img class="img-contract" src="img/LOCATION.png" alt=""> </div>
     
    </div>
        <div style="margin-left: 0px;padding-right: 0px; padding-right: 0px; padding-left: 0px;" class="row col-12  col-lg-6 ">
            <div class="container col-12"><p style="text-align: center;" class="text-contract"></p>KUROTA</div>
        </div>
        </div>
        </div>
        </div>
    </div>
</div>-->
