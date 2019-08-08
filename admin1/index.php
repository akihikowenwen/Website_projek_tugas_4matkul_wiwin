<?php 

    if(isset($_GET['page'])){
        $page = $_GET['page'];
    } else {
        $page = '';
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/bootstrap4.css">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="../https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="a">
    <Section header>

    <nav class="nav navbar-expand-lg   justify-content-center " style="background-color:rgb(226, 226, 226)">
                    <ul class="nav justify-content-center">
                    <a class="navbar-brand nav_" href="index.php?page=home.php">Dasboard</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav nav_ mr-auto">             
                            <a href="index.php?page=data" class="nav-link   <?php if($page==='data'){echo 'active';} ?>">Master Data</a>
            <a href="index.php?page=laporan" class="nav-link <?php if($page==='laporan'){echo 'active';} ?>">Laporan</a>
            <a href="index.php?page=pesanan" class="nav-link <?php if($page==='pesanan'){echo 'active';} ?>">Pesanan</a>
            <a href="index.php?page=pembayaran" class="nav-link  <?php if($page==='pembayaran'){echo 'active';} ?>">Pembayaran</a>
            <a href="index.php?page=kontak" class="nav-link   <?php if($page==='kontak'){echo 'active';} ?>">Kontak</a>
            <a href="index.php?page=logout" class="nav-link <?php if($page==='logout'){echo 'active';} ?>">Logout</a>
       
                                
                            </ul>
                        </div>
                    </ul>
                </nav>
    </Section>
    
    <section content>
    <?php 
             if($page=='data'){
                include_once('produk.php');
            }else if($page=='pembayaran'){
                include_once('content_admin/pembayaran.php');
            }else if($page=='laporan'){
                include_once('content_admin/laporan.php');
            }else if($page=='pesanan'){
                include_once('content_admin/pesanan.php');
            }else if($page=='kontak'){
                include_once('content_admin/kontak.php');
            }else
            {
               include_once('content_admin/home.php');
            }
        ?>
    </section>
    
    <div class="container footer" style="margin-top:20px;">
		<br/>
		<footer class="text-center">
			<div class="col-md-12">Copyright ©aihiko_2019
			<br>
			<br>
			</div>
		</footer>
	</div>
</body>
</html>