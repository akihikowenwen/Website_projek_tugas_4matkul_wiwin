<section class="slide mb-2">
<div class="row" >
    <div class="col">
            <!-- carousel start -->
                    <div id="carouselExampleIndicators" class="carousel slide h-100 " data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            </ol>
                            <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="./assets/img/Main-Banner1.jpg" alt="" class="slide">
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
    </div>   <!-- carousel end -->
</div>
</section>


<!-- Buku terbaru -->
<div class="py-5 ">
        <h1 class="text-center mb-5">Buku Terbaru</h1>
        <div class="owl-carousel owl-two owl-theme">
            <?php 
            $query = "SELECT * FROM tb_buku"; // Query untuk menampilkan semua data siswa
            $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
            
            while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql?>
                <div class="item pl-4">
                    <div class="row">
                            <div class="col-6 batas_tepi" style="max-width:600px; max-height:400px;">
                                <div class="card bg-light-gray">
                                    <div class="overflow-hidden">
                                
                                        <img src="./img_buku/<?php echo $data['foto']?>" alt="card-1" class="card-img-top p-2"> 
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 position-relative">                         
                                <h5><?php echo $data['judul_buku'] ?></h5>
                                <p style="font-size:18px">Harga :<?php echo number_format($data['harga'], 2, ',', '.') ?></p>
                                <div class="position-absolute" style="bottom:0;">
                                    <a href="<?php echo $url; ?>*menu.php?id=<?php echo $data['id_buku'] ?>" class="btn btn-success btn-sm" style="width:100px;" href="#" role="button">
                                        Lihat Detail
                                    </a>
                                    <a href="<?php echo $url; ?>*keranjang.php?act=beli&&produk_id=<?php echo $data['id_buku'] ?>" class="btn btn-info btn-sm" style="width:100px;" href="#" role="button">
                                        Pesan
                                    </a>
                                </div>
                            </div>
                    </div>
                </div>
            <?php } ?>
        </div>
</div>


<div class="py-5">
    <h1 class="text-center mb-5">Buku Terlaris</h1>
    <div class="owl-carousel owl-two owl-theme">
        <?php 
            $query = "SELECT * FROM tb_buku "; // Query untuk menampilkan semua data siswa
            $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
            
            while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql?>
            <div class="item pl-4">
                <div class="row">
                        <div class="col-6 batas_tepi" style="max-width:600px; max-height:400px;">     
                            <div class="card bg-light">
                                <div class="overflow-hidden">
                                <img src="./img_buku/<?php echo $data['foto']?>" alt="card-1" class="card-img-top p-2"> 
                                </div>
                            </div>
                        </div>
                        <div class="col-6 position-relative">
                            <h5><?php echo $data['judul_buku'] ?></h5>
                            <p style="font-size:18px">Harga :<?php echo number_format($data['harga'], 2, ',', '.') ?></p>
                            <div class="position-absolute text-center" style="bottom:0;">
                                <a href="<?php echo $url; ?>menu.php?id=<?php echo $data['id_buku'] ?>" class="btn btn-success btn-sm" href="#" style="width:100px;" role="button">
                                    Lihat Detail
                                </a>
                                <a href="<?php echo $url; ?>keranjang.php?act=beli&&produk_id=<?php echo $data['id_buku'] ?>" class="btn btn-info btn-sm" style="width:100px;" href="#" role="button">
                                    Pesan
                                </a>
                            </div>
                        </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


<div class="py-5">
    <h1 class="text-center">Blog</h1>
    <div class="owl-carousel owl-two owl-theme">
        <?php 
            $k = mysql_query("SELECT * FROM tb_blog ORDER BY id DESC limit 3"); 
            while($data = mysql_fetch_array($k)){        
        ?>
            <div class="row p-5">
                        <div col-3>
                                <div class="card p-2" style="max-width:430px">
                                        <div class="d-table m-2" style="width:400px;height:250px;background-image:url('./img_buku/<?php echo $data['foto']?>');background-size:cover;background-position:center">
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
                                            <div class="col-6 "><?php echo $data['tgl'] ?></div>
                                        </div>
                                </div> 
                        </div>
            </div>
        <?php } ?>
    </div>
</div>