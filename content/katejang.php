<div class="row">
		<div class="col-md-3">
			<div style="background:#5bc0de; width:100%; height:auto; padding-top:3px;padding-bottom:3px; padding-left:10px;">
			<h4>Kategori Menu</h4>
			</div>
			<ul class="kategori">
				<?php 
					$kategori = mysql_query("SELECT * FROM kategori_produk"); 
					while($data = mysql_fetch_array($kategori)){
				?>
					<li><a href="<?php echo $url; ?>menu.php?kategori=<?php echo $data['id'] ?>"><?php echo $data['nama']; ?> (
					<?php 
						$ck = mysql_num_rows(mysql_query("SELECT * FROM produk WHERE kategori_produk_id='$data[id]'"));
						if($ck > 0){ echo $ck; }else{ echo 0; } ?>
					)</a></li>
				<?php } ?>
			</ul>
			<div style="background:#5bc0de; width:100%; height:auto; padding-top:3px;padding-bottom:3px; padding-left:10px; 	margin-bottom:15px;">
				<h4>Keranjang Belanja</h4>
			</div>
			<div style=" width:100%; height:auto; padding-top:3px;padding-bottom:3px; padding-left:10px; 	margin-bottom:15px; border: 1px dashed #000;">
			
			<?php
                            if(isset($_SESSION['cart'])){
                                $total = 0;
                                $cart = unserialize($_SESSION['cart']);
                                if($cart == ''){
                                    $cart = [];
                                }
                                foreach($cart as $id => $qty){
                                    $product = mysql_fetch_array(mysql_query("select * from produk WHERE id='$id'"));
                                    if(isset($product)){
                                       $t = $qty * $product['harga'];
                                       $total += $t;
                                    }
                                }
                                echo '<h4 style="color:#f00;">Rp '. number_format($total, 2, ',', '.') .'</h4>';
                            }else{
                                echo '<h4 style="color:#f00;">Rp 0,00</h4>';
                            }
                                
                        ?>
				
				<a href="<?php echo $url; ?>keranjang.php">Lihat Detail</a>
			</div>
			<div class="row col-md-12">
					
			</div>
			<div class="row col-md-12">
				<hr>
				<img src="<?php echo $url.'assets/img/header.jpg'; ?>" width="100%"><br><br>
				<img src="<?php echo $url.'assets/img/header2.jpg'; ?>" width="100%">
			</div>
		</div>