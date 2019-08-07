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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand navbar-light bg-light justify-content-center">
      <a class="navbar-brand" href="index.php">Budiman</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                  <a class="nav-link" href="index.php">Dasbord <span class="sr-only">(current)</span></a>
              </li>
             
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Master Data</a>
                  <div class="dropdown-menu" aria-labelledby="dropdownId">
                      <a class="dropdown-item" href="index.php?page=user">Data User<i class="fa fa-user" aria-hidden="true"></i></a>
                      <a class="dropdown-item" href="index.php?page=admin">Data Admin</a>
                      <a class="dropdown-item" href="index.php?page=buku">Data buku</a>
                      <a class="dropdown-item" href="index.php?page=kategori">Data Kategori</a>
                  </div>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pengiriman</a>
                  <div class="dropdown-menu" aria-labelledby="dropdownId">
                      <a class="dropdown-item" href="index.php?page=kota">Data kota<i class="fa fa-user" aria-hidden="true"></i></a>
                      <a class="dropdown-item" href="index.php?page=kurir">Data Kurir</a>
                     
                  </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="index.php?page=pesanan">Pesanan</a>
              </li>
              <?php if(!empty($_SESSION['iam_user'])){ ?>
			<?php 
				$user = mysql_fetch_object(mysql_query("SELECT*FROM user where id='$_SESSION[iam_user]'"));
			?>
      <li><a class="nav-item" href="<?php echo $url ?>pembayaran.php">Pembayaran</a></li>      
			<li class="dropdown">
				
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hi </span></a>
              <ul class="dropdown-menu">
                <li><a href="@#">Profil</a></li> 
                <li><a href="@#"">Logout</a></li>  
              </ul>
            </li>
			<?php }else{ ?>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Login/Register <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="@#Login</a></li> 
                <li><a href="@#p">Register</a></li>  
              </ul>
            </li>
			<?php } ?>
			

          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

  
 
          </ul>
      </div>
  </nav>

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
            
                //end buku
            }else if($page=='kategori'){
                include_once('config/kategori/tampil.php');
            }else if($page=='kota'){
                include_once('content/data_kota.php');
            }else if($page=='kurir'){
                include_once('content/data_kurir.php');
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
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>