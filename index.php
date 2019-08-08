<?php 
    if(isset($_GET['page'])){
        $page = $_GET['page'];
    } else {
        $page = '';
    }
	include_once"./config/conn.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Web Toko Buku</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- owl_Carousel -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap4.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body  class="a">
    <div class="container-fluid px-0" style="background-color:rgba(255, 255, 255, 0.322);">
        <div class="row">
            <div class="col">
                <div class="container-fluid">
                    <div class="row batas_tepi">
                        <div class="col-md-9">
                            <form class="form-inline navbar" style="width:100%">
                                <input class="form-control mr-sm-2  " type="search" placeholder="Lebih dari 10 juta buku tersedia" style="width:85%; border-radius: 20px; height:45px;">
                                <button class="btn btn-outline-success my-2 my-sm-0" style="border-radius: 20px; height:45px;" type="submit">Search</button>
                            </form>
                        </div>
                        <div class="col-md-3  text-center">
                            <div class="card bg-light mb-3" style="max-width: 150px;">
                                <div class="card-header a">My Chart</div>
                                <div class="card-body">
                                    <p class="card-text">Rp. </p>
                                </div>
                            </div>
                            <!-- <button class="btn form-control" style="height:80px;" >                                        
                                My Chart     
                            </button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
                <nav class="nav navbar-expand-lg navbar-light justify-content-center a" >
                    <ul class="nav justify-content-center">
                    <a class="navbar-brand " href="index.php?page=home.php">Home</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav nav_ mr-auto">
                                <a href="index.php?page=home" class="nav-link  <?php if($page==='home'){echo 'active';} ?>">Home</a>
                                <a href="index.php?page=daftar_buku" class="nav-link   <?php if($page==='daftar_buku'){echo 'active';} ?>">Daftar Buku</a>
                                <a href="index.php?page=tentang" class="nav-link <?php if($page==='toko'){echo 'active';} ?>">Tentang Kami</a>
                                <a href="index.php?page=info_bayar" class="nav-link <?php if($page==='info_bayar'){echo 'active';} ?>">Info Pembayaran</a>
                                <a href="index.php?page=blog" class="nav-link <?php if($page==='blog'){echo 'active';} ?>">Blog</a>
                                <a href="index.php?page=kontak" class="nav-link <?php if($page==='kontak'){echo 'active';} ?>">Kontak Kami</a>
                                <a href="index.php?page=pembayaran" class="nav-link <?php if($page==='login'){echo 'active';} ?>">Login</a>
                            </ul>
                        </div>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

        <section id="content" style="background-color:  rgb(255, 255, 255);">
        <?php //header
            if($page == 'home') {
                include_once('content/home.php');
            }else if($page =='daftar_buku'){
                include_once('content/shop.php');
            }else if($page=='toko'){
                include_once('content/tentang_toko.php');
            }else if($page=='info_bayar'){
                include_once('content/info_pembayaran.php');
            }else if($page=='blog'){
                include_once('content/blog.php');
            }else if($page=='kontak'){
                include_once('content/kontak_kami.php');
                //header
                //footer
            
            }else if($page=='bantuan'){
                include_once('content/bantuan.php');
            }else if($page=='belanja'){
                include_once('content/belanja.php');
            }else if($page=='bayar'){
                include_once('content/pembayaran.php');
            }else if($page=='pengiriman'){
                include_once('content/pengiriman.php');
            }else if($page=='tentang'){
                include_once('content/tentang.php');
            
            }else If($page=='syarat'){
                include_once('content/syarat_ketentuan.php');
            }else if($page=='bantuan'){
                include_once('content/bantuan.php');
            }else if($page=='hubungi'){
                include_once('content/hubungi.php');
            }else if($page=='daftar'){
                include_once('content/daftar.php');
            }else if($page=='masuk'){
                include_once('content/masuk.php');
            }else if($page=='crud'){
                include_once('crud_standar/index_crud.php');
            }else
            {
               include_once('content/home.php');
            }
        ?>
    </section>
        

    

    <div class="justify-content-center pt-5 pb-5 bg-dark text-light">
        <div class="row batas_tepi">
            <!-- Belanja -->
            <div class="col-md-4">
                <div class="row">
                    <div class="col">
                        <h5>Belanja</h5>
                        <div href="index." class="underline bg-light" style="width: 50px;"></div>
                        <br>
                        <p><a href="index.php?page=belanja" style="text-decoration: none; color: white;"><i class="fa fa-chevron-right" aria-hidden="true"></i> Berbelanja</a></p>
                        <p><a href="index.php?page=bayar" style="text-decoration: none; color: white;"><i class="fa fa-chevron-right" aria-hidden="true"></i> Pembayaran</a></p>
                        <p><a href="index.php?page=pengiriman" style="text-decoration: none; color: white;"><i class="fa fa-chevron-right" aria-hidden="true"></i> Pengiriman</a></p>
                    </div>
                </div>
            </div>
            <!-- <div class="col-md-3">
                <div class="row">
                    <div class="col">
                        <h5>Tentang Toko</h5>
                        <div class="underline bg-light" style="width: 50px;"></div>
                        <br>
                        <p><a href="index.php?page=tentang" style="text-decoration: none; color: white;"><i class="fa fa-chevron-right" aria-hidden="true"></i> Tentang Kami</a></p>
                        <p><a href="index.php?page=toko" style="text-decoration: none; color: white;"><i class="fa fa-chevron-right" aria-hidden="true"></i> Toko Kami</a></p>
                        <p><a href="index.php?page=blog" style="text-decoration: none; color: white;"><i class="fa fa-chevron-right" aria-hidden="true"></i> Blog</a></p>
                    </div>
                </div>
            </div> -->
            <div class="col-md-4">
                <div class="row">
                    <div class="col">
                        <h5>Lainnya</h5>
                        <div class="underline bg-light" style="width: 50px;"></div>
                        <br>
                        <p><a href="index.php?page=syarat" style="text-decoration: none; color: white;"><i class="fa fa-chevron-right" aria-hidden="true"></i> Syarat Dan Ketentuan</a></p>
                        <p><a href="index.php?page=bantuan" style="text-decoration: none; color: white;"><i class="fa fa-chevron-right" aria-hidden="true"></i> Bantuan</a></p>
                        <p><a href="index.php?page=hubungi" style="text-decoration: none; color: white;"><i class="fa fa-chevron-right" aria-hidden="true"></i> Hubungi</a></p>
                    </div>
                </div> 
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col">
                        <h5>Pembayaran</h5>
                        <div class="underline bg-light" style="width: 50px;"></div>
                        <br>
                        <button class="btn btn-outline-light">BCA</button> <button class="btn btn-outline-light">BNI</button> <button class="btn btn-outline-light">BRI</button> <button class="btn btn-outline-light">CIMB</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="a text-align-centers">@copyright_akihiko_2019</div>
    <!-- end footer -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-6  batas_tepi">
                            <div class="card">
                                <div class="overflow-hidden">
                                <img src="assets/img/gambar3.jpg" alt="card-1" class="card-img-top"> 
                                </div>
                            </div>
                        </div>
                        <div class="col-6 batas_tepi">
                            <ul>
                            <h1>Buku Komik AAA</h1>
                            <hr>
                            Rp.30.000
                            <hr>
                            Stock :
                            <hr>
                            <h3>Deskripsi</h3>
                            <p>
                                Whenever possible, we prefer to write HTML and CSS over JavaScript. In general, HTML and CSS 
                                are more prolific and accessible to more people of all different experience levels. 
                            </p>
                            <button type="button" class="btn btn-outline-primary">Add To Cart</button>
                            
                            <hr>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- javascript goes here -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script>
    $(document).ready(function() {
        var owl = $('.owl-two');
        owl.owlCarousel({
        margin: 10,
        nav: true,
        loop: true,
        responsive: {
            0: {
            items: 1
            },
            600: {
            items: 2
            },
            1000: {
            items: 4
            }
        }
        })
    })
    </script>
    <script>
    $(document).ready(function() {
        var owl = $('.owl-one');
        owl.owlCarousel({
        margin: 10,
        nav: true,
        loop: true,
        responsive: {
            0: {
            items: 1
            },
            600: {
            items: 3
            },
            1000: {
            items: 3
            }
        }
        })
    })
    </script>
  </body>
</html>