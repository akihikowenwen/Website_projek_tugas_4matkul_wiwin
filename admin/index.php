<?php 

    if(isset($_GET['page'])){
        $page = $_GET['page'];
    } else {
        $page = '';
    }


?>
<?php 
	include_once"../config/conn.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap4.css">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="a">
  <!-- //nav here -->
    <nav class="navbar navbar-expand navbar-light b px-5 justify-content-center">
        <a class="navbar-brand" href="#">Web Administrator</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <form class="form-inline my-2 my-lg-0">
                
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                            </li>
                            
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Master Data</a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                                        <a class="dropdown-item" href="index.php?page=user">Data User<i class="fa fa-user" aria-hidden="true"></i></a>
                                        <a class="dropdown-item" href="index.php?page=admin">Data Admin</a>
                                        <a class="dropdown-item" href="index.php?page=buku">Data buku</a>
                                        <a class="dropdown-item" href="index.php?page=kategori">Data Kategori</a>
                                        <a class="dropdown-item" href="index.php?page=kota">Data kota</a>
                                        <a class="dropdown-item" href="index.php?page=penulia">Data penulia</a>
                                        <a class="dropdown-item" href="index.php?page=penerbit">Data penerbit</a>
                                    </div>
                                </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=pesanan">Pesanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=pembayaran">Pembayaran</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=kontak">Kontak</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?page=logout">Logout</a>
                            </li>
                        </ul>
                    </div>
            </form>
        </div>
    </nav>
 <!-- //end navbar -->

 <div class="container">
  <section id="content " class="px-5">
        <?php 
            if($page == 'user') {
                include_once('config/user/tampil.php');
            }else if($page=='admin'){
                include_once('config/admin/tampil.php');
                //buku
            }else if($page=='buku'){
                include_once('config/buku/tampil.php');
            }else if($page=='tambah_buku'){
                include_once('config/buku/form_simpan.php');
            }else if($page=='simpan'){
                include_once('config/buku/proses_simpan.php');
            }else if($page=='edit'){
                include_once('config/buku/proses_ubah.php');
            }else if($page=='delete'){
                include_once('config/buku/proses_hapus.php');
                 //end buku
                 //user
            }else if($page=='user'){
                include_once('config/user/tampil.php');
            }else if($page=='tambah_buku'){
                include_once('config/user/form_simpan.php');
            }else if($page=='simpan'){
                include_once('config/user/proses_simpan.php');
            }else if($page=='edit'){
                include_once('config/user/proses_ubah.php');
            }else if($page=='delete'){
                include_once('config/user/proses_hapus.php');
                 //end user
            }else if($page=='kategori'){
                include_once('config/kategori/tampil.php');
            }else if($page=='kota'){
                include_once('content/data_kota.php');
            }else if($page=='pesanan'){
                include_once('content/pesanan.php');
            }else if($page=='pembayaran'){
                include_once('content/pembayaran.php');
            }else
            {
               include_once('index.php');
            }
        ?>
    </section>
</div>
<footer>
    <div class="container text-center">Copyright@akihiko2019</div>
</footer>



      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>  
</body>
</html>