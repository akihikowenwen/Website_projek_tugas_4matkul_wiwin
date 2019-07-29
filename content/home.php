
<section class="slide mb-2">
<div class="row">
        <div class="col">
            <!-- carousel start -->
                <div id="carouselExampleIndicators" class="carousel slide h-100 " data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="./assets/img/gambar5.jpg" alt="" class="slide">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/img/banner1.jpg" alt="" class="slide">
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            <!-- carousel end -->
        </div>
</section>
<!-- Buku terbaru -->
<div class=" py-5 bg-light ">
    <P>Buku Terbaru</P>
    
    <div class="owl-carousel owl-two owl-theme">

     <?php 
					$k = mysql_query("SELECT * FROM tb_buku ORDER BY id_buku DESC limit 3"); 
					while($data = mysql_fetch_array($k)){

                    
				?>

                <div class="item">
                <div class="row p-5">
            <div class="col">
            
                <div class="row">
               
                    <div class="col-6  batas_tepi">
                        <div class="card bg-light-gray">
                            <div class="overflow-hidden">
                            <img src="assets/img/gambar3.jpg" alt="card-1" class="card-img-top p-2"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-6 align-middle">
                        <h1><?php echo $data['judul_buku'] ?></h1>
                        <p style="font-size:18px">Harga :<?php echo number_format($data['harga'], 2, ',', '.') ?></p>
                        <p>
						<a href="<?php echo $url; ?>menu.php?id=<?php echo $data['id'] ?>" class="btn btn-success btn-sm" href="#" role="button">Lihat Detail</a>
						<a href="<?php echo $url; ?>keranjang.php?act=beli&&produk_id=<?php echo $data['id'] ?>" class="btn btn-info btn-sm" href="#" role="button">Pesan</a>
					</p>
                        <hr>
                    </div>
                
                </div>
            </div>
        </div>
                </div>

        <?php } ?>
        
    </div>
</div>


<div class="py-5 bg-light-gray">
    <P>Buku Terlaris</P>
    <div class="owl-carousel owl-two owl-theme">

     <?php 
					$k = mysql_query("SELECT * FROM tb_buku ORDER BY id_buku DESC limit 3"); 
					while($data = mysql_fetch_array($k)){

                    
				?>

                <div class="item">
                <div class="row p-5">
            <div class="col">
            
                <div class="row">
               
                    <div class="col-6  batas_tepi">
                        <div class="card bg-light-gray">
                            <div class="overflow-hidden">
                            <img src="assets/img/gambar3.jpg" alt="card-1" class="card-img-top p-2"> 
                            </div>
                        </div>
                    </div>
                    <div class="col-6 align-middle">
                        <h1><?php echo $data['judul_buku'] ?></h1>
                        <p style="font-size:18px">Harga :<?php echo number_format($data['harga'], 2, ',', '.') ?></p>
                        <p>
						<a href="<?php echo $url; ?>menu.php?id=<?php echo $data['id'] ?>" class="btn btn-success btn-sm" href="#" role="button">Lihat Detail</a>
						<a href="<?php echo $url; ?>keranjang.php?act=beli&&produk_id=<?php echo $data['id'] ?>" class="btn btn-info btn-sm" href="#" role="button">Pesan</a>
					</p>
                        <hr>
                    </div>
                
                </div>
            </div>
        </div>
                </div>

        <?php } ?>
        
    </div>
</div>
<div class="py-5 bg-light">
    <p class="justify-content-center bg-green"> Blog </p>
    <div class="owl-carousel owl-one owl-theme">
    <?php 
					$k = mysql_query("SELECT * FROM tb_blog ORDER BY id DESC limit 3"); 
					while($data = mysql_fetch_array($k)){

                    
				?>
        <div class="row p-5">
            <div col>b
                <div class="card p-2" style="max-width:430px">
                <div class="d-table m-2" style="width:400px;height:250px;background-image:url('assets/img/gambar1.jpg');background-size:cover;background-position:center">
                    <div class="d-table-cell align-middle text-center">
                        <p style="font-size:100px; color:white; font-weight:700;">
                            test
                        </p>
                    </div>
                </div>
                <H1><?php echo $data['judul'] ?></H1>
                <p>
                <?php echo substr($data['isi_blog'],0,50); ?>.....
                <a href="" class="">read more</a>
                </p>
                <div class="row">
                    <div class="col-6"><?php echo $data['tulisan'] ?></div>
                    <div class="col-6"><?php echo $data['tgl'] ?></div>
                </div>
                </div>
                
            </div>
        </div>
        <?php } ?>
    </div>
</div>
