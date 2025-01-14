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

            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873.045357696423!2d101.5619262!3d13.8962361!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x311cf0dd030acb1d%3A0xb0788ff0a3032540!2sKurota%20(Thailand)%20Co.%2CLtd!5e0!3m2!1sth!2sth!4v1734683475319!5m2!1sth!2sth"
                    width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <div class="line-divider-2"></div>
    </div>
    </div>

    <?php include 'footer.php'; ?>

</body>
</html>

