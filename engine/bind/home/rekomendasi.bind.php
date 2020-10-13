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
                                        <li class="active"><a href="<?=HOMEBASE;?>home/rekomendasi" style="color:aliceblue;">Rekomendasi</a></li>
                                        <li><a href="<?=HOMEBASE;?>home/listSmartphone" style="color:aliceblue;">List Smartphone</a></li>
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
<!-- End header  -->

<div class="features">
            <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Tambah Data Pengujian Rekomendasi</div>
                        <div class="card-body">
                            <form action="<?=HOMEBASE;?>home/prosesPerhitungan" method="POST" id='frmRekomendasi'>
                            
                            <div class="form-group">
                                    <label for="company">Kriteria Harga</label>
                                    <select class="form-control" name='txtHarga' id='txtHarga' onchange='filterHarga()'>
                                        <option value="5"> > Rp. 3.000.000</option>
                                        <option value="4">Rp. 2.500.000 - Rp. 2.999.999</option>
                                        <option value="3">Rp. 2.000.000 - Rp. 2.499.999</option>
                                        <option value="2">Rp. 1.500.000 - Rp. 1.999.999</option>
                                        <option value="1">Rp. 1.000.000 - Rp. 4.999.999</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                    <label for="company">Merek</label>
                                    <select class="form-control" name="txtMerek">
                                        <option value="5">Sangat Populer</option>
                                        <option value="4">Cukup Populer</option>
                                        <option value="3">Populer</option>
                                        <option value="2">Lumayan Populer</option>
                                        <option value="1">Tidak Populer</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                    <label for="company">RAM/ROM</label>
                                    <select class="form-control" id='txtRam' name='txtRam'>
                                        <option value="5">> 4/64</option>
                                        <option value="4">3/64</option>
                                        <option value="3">3/32</option>
                                        <option value="2">2/32</option>
                                        <option value="1">2/16</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                    <label for="company">Baterai</label>
                                    <select class="form-control" name='txtBaterai'>
                                        <option value="5">> 5.000 mAh</option>
                                        <option value="4">4.500 - 4.999 mAh</option>
                                        <option value="3">4.000 - 4.499 mAh</option>
                                        <option value="2">3.500 - 3.999 mAh</option>
                                        <option value="1">3.000 - 3.499 mAh</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                    <label for="company">Kamera Belakang</label>
                                    <select class="form-control" name='txtKameraBelakang'>
                                        <option value="5">> 25 Mp</option>
                                        <option value="4">21 - 25 Mp</option>
                                        <option value="3">14 - 20 Mp</option>
                                        <option value="2">9 - 13 Mp</option>
                                        <option value="1">0 - 8 Mp</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                    <label for="company">Kamera Depan</label>
                                    <select class="form-control" name='txtKameraDepan'>
                                        <option value="5">> 25 Mp</option>
                                        <option value="4">21 - 25 Mp</option>
                                        <option value="3">14 - 20 Mp</option>
                                        <option value="2">9 - 13 Mp</option>
                                        <option value="1">0 - 8 Mp</option>
                                    </select>
                            </div>
                            <div class="form-group">
                                    <label for="company">Display</label>
                                    <select class="form-control" name='txtDisplay'>
                                        <option value="5">Sangat Menarik</option>
                                        <option value="4">Cukup Menarik</option>
                                        <option value="3">Menarik</option>
                                        <option value="2">Lumayan Menarik</option>
                                        <option value="1">Tidak Menarik</option>
                                    </select>
                            </div>
                            <div>
                                <a href='#!' class="btn btn-primary" id='btnProses'>Proses</a>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
    <script>
        $(document).ready(function(){

            document.querySelector('#txtRam').setAttribute("disabled", "disabled");

            $('#btnProses').click(function(){
                $('#frmRekomendasi').submit();
            });

           

        });

        function filterHarga()
        {
            let harga = document.querySelector('#txtHarga').value;
            let capRam = document.querySelector('#txtRam');

            if(harga === '5'){
                capRam.value = '1';
                capRam.setAttribute("disabled", "disabled");
            }else{
                capRam.removeAttribute("disabled");
            }
        }
    </script>
</body>

</html>