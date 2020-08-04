<!DOCTYPE html>
<html lang="en">

<head>
    <title>SPK Pemilihan Smartphone - List Smartphone</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Unicat project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?=STYLEBASE."home/"; ?>styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="<?=STYLEBASE."home/"; ?>plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css"
        href="<?=STYLEBASE."home/"; ?>plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="<?=STYLEBASE."home/"; ?>plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="<?=STYLEBASE."home/"; ?>styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="<?=STYLEBASE."home/"; ?>styles/responsive.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
</head>

<body>
    <div class="super_container" style="font-family: 'Noto Sans JP', sans-serif;">

        <!-- Header -->

        <header class="header">

            <!-- Header Content -->
            <div class="header_container" style="background-color: #636e72;">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="header_content d-flex flex-row align-items-center justify-content-start">
                                <nav class="main_nav_contaner">
                                    <ul class="main_nav">
                                        <li><a href="<?=HOMEBASE; ?>home" style="color:aliceblue;">Beranda</a></li>
                                        <li><a href="<?=HOMEBASE;?>home/rekomendasi"
                                                style="color:aliceblue;">Rekomendasi</a></li>
                                        <li class="active"><a href="<?=HOMEBASE;?>home/listSmartphone"
                                                style="color:aliceblue;">List Smartphone</a></li>
                                    </ul>
                                    <div class="hamburger menu_mm">
                                        <i class="fa fa-bars menu_mm" aria-hidden="true"></i>
                                    </div>
                                </nav>
                                <nav class="ml-auto">
                                    <ul class="secondary_nav">
                                        <li class="signup_button"><a href="<?=HOMEBASE; ?>admin/login">Masuk</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="features">
            <div class="container">
                <div style="text-align: center;margin-bottom:15px;">
                <h3>List Smartphone</h3>
                </div>
                <table id="table_id" class="table table-bordered" style="width:100%">
                    <thead style="border-top: 1px solid #d0d0d0;">
                        <tr>
                            <th>
                                <center>No </center>
                            </th>
                            <th>
                                <center>Nama Smartphone</center>
                            </th>
                            <th>
                                <center>Harga</center>
                            </th>
                            <th>
                                <center>Merek</center>
                            </th>
                            <th>
                                <center>Ram</center>
                            </th>
                            <th>
                                <center>Baterai</center>
                            </th>
                            <th>
                                <center>Kamera Belakang</center>
                            </th>
                            <th>
                                <center>Kamera Depan</center>
                            </th>
                            <th>
                                <center>Display</center>
                            </th>
                        </tr>
                    </thead>
                    <?php 
                    $no = 1;    
                    foreach($data['hp'] as $dh) { 
                    ?>
                        <tr>
                            <td><?=$no; ?></td>
                            <td><?=$dh['nama_hp']; ?></td>
                            <td><?=$dh['harga_cap']; ?></td>
                            <td><?=$dh['merek_cap']; ?></td>
                            <td><?=$dh['ram_cap']; ?></td>
                            <td><?=$dh['baterai_cap']; ?></td>
                            <td><?=$dh['kamera_belakang_cap']; ?></td>
                            <td><?=$dh['kamera_depan_cap']; ?></td>
                            <td><?=$dh['display_cap']; ?></td>
                        </tr>
                    <?php
                        $no++; 
                        } 
                    ?>
                </table>
            </div>
        </div>

        <!-- Footer -->
        <footer>
            <div style='text-align:center;'>Develop By Agung Hamdika Surya - Program Studi Ilmu Komputer, Fakultas Sains
                dan Teknologi, Universitas Islam Negeri Sumatera Utara</div>
        </footer>
    </div>

    <script src="<?=STYLEBASE."home/"; ?>js/jquery-3.2.1.min.js"></script>
    <script src="<?=STYLEBASE."home/"; ?>styles/bootstrap4/popper.js"></script>
    <script src="<?=STYLEBASE."home/"; ?>styles/bootstrap4/bootstrap.min.js"></script>
    <script src="<?=STYLEBASE."home/"; ?>plugins/greensock/TweenMax.min.js"></script>
    <script src="<?=STYLEBASE."home/"; ?>plugins/greensock/TimelineMax.min.js"></script>
    <script src="<?=STYLEBASE."home/"; ?>plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="<?=STYLEBASE."home/"; ?>plugins/greensock/animation.gsap.min.js"></script>
    <script src="<?=STYLEBASE."home/"; ?>plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="<?=STYLEBASE."home/"; ?>plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="<?=STYLEBASE."home/"; ?>plugins/easing/easing.js"></script>
    <script src="<?=STYLEBASE."home/"; ?>plugins/parallax-js-master/parallax.min.js"></script>
    <script src="<?=STYLEBASE."home/"; ?>js/custom.js"></script>
</body>

</html>