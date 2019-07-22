<?php 

    if(isset($_GET['page'])){
        $page = $_GET['page'];
    } else {
        $page = '';
    }


?>

<!doctype html>
<html lang="en">
  <head>
    <title>Contoh Include</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap4.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>
    <header>
    <body style="background-color:rgb(189, 189, 189)">
    <div class="container px-0" style="background-color:white">
        <div class="row">
            <div class="col">
                <!-- navigasi bar goes here -->
                <div class="container-fluid">
                    <div class="row batas_tepi">
                        <div class="col-md-6 text-center align-self-center">
                            <img src="assets/img/banner1.jpg" alt="" class="">
                        </div>
                        <div class="col-md-6">
                            <div class="row h-100"> 
                                <div class="col">
                                    <ul class="nav w-100 justify-content-end">
                                        <li class="nav-item">
                                            <a class="nav-link active" href="index.php?page=daftar">Daftar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php?page=masuk">Masuk</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php?page=pengiriman">Pengiriman</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="index.php?page=account">My Account</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="w-100"></div>
                                <div class="col  text-right ">
                                    <button class="btn btn-danger">
                                        <div class="col "> 
                                        <i class="fa fa-cart-plus" aria-hidden="true">
                                        </i> My Cart - Rp. 0.00</div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- navigasi bar goes here -->.
                <nav class="navbar navbar-expand-lg navbar-light " style="background-color:rgb(226, 226, 226)">
                    <a class="navbar-brand" href="index.php">Home</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="index.php?page=categori?&idcategori" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Kategori
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="index.php?page=categori&cat=anak">Anak</a>
                                    <a class="dropdown-item" href="index.php?page=categori&cat=sekolah">Sekolah</a>
                                    <a class="dropdown-item" href="index.php?page=categori&cat=Novels">Novel</a>
                                    <a class="dropdown-item" href="index.php?page=categori&cat=komputer">Komputer</a>
                                    <a class="dropdown-item" href="index.php?page=categori&cat=komik">Komik</a>
                                    <a class="dropdown-item" href="index.php?page=categori&cat=kesehatan">Kesehatan</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=shop">Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=blog">Blog</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Tentang
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="index.php?page=testimoni">Testimoni</a>
                                    <a class="dropdown-item" href="index.php?page=hubungi">Hubungi</a>
                                    <a class="dropdown-item" href="index.php?page=bantuan">Bantuan</a>
                                </div>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                </nav>
    </header>

    <section id="content">
        <?php 
            if($page == 'about') {
                include_once('content/contoh.php');
            } else if($page=='categori') {
                include_once('content/categori.php');
            }else if($page=='shop'){
                include_once('content/shop.php');
            }else if($page=='blog'){
                include_once('content/blog.php');
            }else if($page=='testimoni'){
                include_once('content/testimoni.php');
            }else if($page=='hubungi'){
                include_once('content/hubungi.php');
            }else if($page=='bantuan'){
                include_once('content/bantuan.php');
            }
            else {
                echo "DASHBOARD";
            }
        ?>
    </section>

    <div class="container pt-5 pb-5 bg-dark text-light">
                    <div class="row batas_tepi">
                        <!-- Belanja -->
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col">
                                    <h5>Belanja</h5>
                                    <div class="underline bg-light" style="width: 50px;"></div>
                                    <br>
                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> Berbelanja</p>
                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> Pembayaran</p>
                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> Pengiriman </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col">
                                    <h5>Tentang Toko</h5>
                                    <div class="underline bg-light" style="width: 50px;"></div>
                                    <br>
                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> Tantang Kami</p>
                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> Toko Kami</p>
                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> Kerjasama </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="row">
                                <div class="col">
                                    <h5>Lainnya</h5>
                                    <div class="underline bg-light" style="width: 50px;"></div>
                                    <br>
                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> Syarat Dan Ketentuan</p>
                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> Bantuan</p>
                                    <p><i class="fa fa-chevron-right" aria-hidden="true"></i> Hubungi </p>
                                </div>
                            </div> 
                        </div>
                                
                        <div class="col-md-3">
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
                <!-- end footer -->

    <!-- javascript goes here -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>
  </body>
</html>

