<?php
    error_reporting(0);
    include 'db.php';
    $kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
    $a = mysqli_fetch_object($kontak);

    $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = '" . $_GET['id'] . "' ");
    $p = mysqli_fetch_object($produk);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dapur Ashna | Detail Produk</title>
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
                <li><a href="Lokasi.php">Lokasi</a></li>
            </ul>
        </div>
    </header>

    <!-- search -->
    <div class="search">
        <div class="container">
            <form action="produk.php">
                <input type="text" name="search" placeholder="Cari Produk" value="<?php echo $_GET['search'] ?>">
                <input type="hidden" name="kat" value="<?php echo $_GET['kat'] ?>">
                <input type="submit" name="cari" value="Cari Produk">
            </form>
        </div>
    </div>

    <!-- product detail -->
    <div class="section">
        <div class="container">
            <h3>Detail Produk</h3>
            <div class="box">
                <div class="col-2">
                    <img src="produk/<?php echo $p->product_image ?>" width="100%">
                </div>
                <div class="col-2">
                    <h3><?php echo $p->product_name ?></h3>
                    <h4>Rp. <?php echo number_format($p->product_price) ?></h4>
                    <p>Deskripsi :<br>
                        <?php echo $p->product_description ?>
                    </p>
                    <p><a href="https://api.whatsapp.com/send?phone=<?php echo $a->admin_telp ?>&text=Halo Dapur Ashna, saya tertarik dengan produk ini" target="_blank">
                            Hubungin via Whatsapp
                            <img src="img/wa.png" width="50px"></a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="footer">
        <div class="container">
            <a class="fa fa-instagram" style="font-size:48px;color:red" href="https://instagram.com/dapurashna?utm_medium=copy_link""></a>
            <p>@dapurashna</p>
            <br>
            <br>
            <h4>2021 Copyright &copy; Dapur Ashna • All rights reserved • Made in Bogor.</h4>
        </div>
    </div>
</body>
</html>