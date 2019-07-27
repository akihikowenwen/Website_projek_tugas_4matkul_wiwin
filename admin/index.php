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
    <link rel="stylesheet" href="assets/css/bootstrap4.css">
    <link rel="stylesheet" href="../assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="a">
    <Section header>
        <div class="nav nav-tab" style="bg-color:black;">
            <a href="index.php" class=" navbar">Home</a>
            <a href="index.php?page=data" class="tab-item">Master Data</a>
            <a href="index.php?page=laporan" class="tab-item">Laporan</a>
            <a href="index.php?page=pesanan" class="tab-item">Pesanan</a>
            <a href="index.php?page=pembayaran" class="tab-item">Pebayaran</a>
            <a href="index.php?page=kontak" class="tab-item">Kontak</a>
            <a href="" class="">Logout</a>
        </div>
    </Section>
    
    <section content>
    <?php 
             if($page=='data'){
                include_once('content_admin/master_data.php');
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
    
    <section footer class="text-align-center"> 
        @copyright_akihiko
    </section>
</body>
</html>