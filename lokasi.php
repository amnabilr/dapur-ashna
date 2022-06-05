<?php
    include 'db.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dapur Ashna | Lokasi</title>
    <link rel="shortcut icon" href="img/stiker.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- header -->
    <header>
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="img/stiker.png" alt="" />
            </a>
            <ul>
                <li><a href="produk.php">Produk</a></li>
                <li><a href="pemesanan.php">Cara Pemesanan</a></li>
                <li><a href="lokasi.php">Lokasi</a></li>
            </ul>
        </div>
    </header>

    <!-- Location -->
    <div class="section">
        <div class="container">
            <h3>Lokasi</h3>
            <div class="box">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126829.29132911481!2d106.72185163235696!3d-6.595188615658152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c5b7ad0f824b%3A0x4c71fd1b0b8ae76d!2sKota%20Bogor%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1634376738459!5m2!1sid!2sid" width="100%" height="350" style="border: 30px;" allowfullscreen="" loading="lazy"></iframe>
                <br>
                <br>
                <i style="font-size:24px" class="fa">&#xf0ac; Lokasi</i>
                <p>Bogor Tengah</p>
                <br>
                <i style="font-size:24px" class="fa">&#xf017; Jam Order </i>
                <p>Senin - Jumat</p>
                <p>10:00 - 17.00</p>
                <br>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="footer">
        <div class="container">
            <a class="fa fa-instagram" style="font-size:48px;color:red" href="https://instagram.com/dapurashna?utm_medium=copy_link""></a>
            <p>@dapurashna</p>
            <br>
            <h4>2021 Copyright &copy; Dapur Ashna • All rights reserved • Made in Bogor</h4>
        </div>
    </div>
</body>
</html>