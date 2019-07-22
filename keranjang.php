 	 
		<div class="col-md-9">
			<div class="row">
			<div class="col-md-12">
                a
				
				
				<h2>
                   Keranjang anda :
                </h2>
				<table class="table table-striped" style="width:100%">
				<thead>
				<tr style="background:#c3ebf8;font-weight:bold;">
					<td style="width:15%"> Produk </td>
					<td style="width:40%">Details</td>
					<td style="width:10%">QTY</td>
					<td style="width:15%">Total</td>
					<td style="width:5%" class="delete">&nbsp;</td>
				</tr>
				
				<tr class="barang-shop">
					<td class="CartProductThumb"><div> <a href="<?php echo $url; ?>menu.php?id=<?php echo $product['id'] ?>"><img src="<?php echo $url.'uploads/'.$product['gambar']; ?>" alt="img" width="120px"></a> </div></td>
					<td><div class="CartDescription">
					<h4> <a href="<?php echo $url; ?>menu.php?id=<?php echo $product['id'] ?>"><?= $product['nama'] ?></a> </h4>
					<div class="price"><?php echo  "Rp ".number_format($product['harga'], 2, ',', '.') ?></div>
					</div></td>
                                        
					<td>
					<form action="<?php echo $url; ?>keranjang.php" method="GET"> 
                                                <input type="hidden" name="update_cart" value="update">
                                                <input type="hidden" name="act" value="beli">
                                                <input type="hidden" name="produk_id" value="<?= $id ?>">
						<input class="form-control" type="number" name="qty" value="<?php echo $qty; ?>" onchange="this.form.submit()">
						</form>
					</td>
					<td class="price"><?php echo number_format($t, 2, ',', '.') ?></td>
					<td><a href="<?php echo $url; ?>keranjang.php?delete_cart=yes&&act=beli&&produk_id=<?php echo $id; ?>" title="Delete"> <i class="glyphicon glyphicon-trash fa-2x"></i></a></td>
				</tr>

				<tr style="background:#c3ebf8;font-weight:bold;">
					<td colspan="3">SUB TOTAL</td>
                                        <td><?php echo number_format($total, 2, ',', '.') ?></td>
										<td>&nbsp;</td>
				</tr>
				</tbody>
				</table>
				
									
				
			
			</div>
			
			<div style="float:right;" class="col-sm-6 col-md-6">
       <h4><b>Total Keranjang Belanja</b></h4>
       <table class="table table-bordered">
            
           <tr>
               <td style="background:#fafafa;"><b>Total</b></td>
               <td><b><?php echo "Rp ".number_format($total, 2, ',', '.') ?></a></td>
           </tr>
       </table>
       <form action="<?php echo  $url.'order.php' ?>" method="POST"> 
           <input type="hidden" name="okay" value="cart">
           <button <?php echo ($total == 0)? 'disabled' : '' ?> type="submit" class="btn btn-primary">Selesai Belanja &raquo;</button>
       </form>
    </div>
			
			</div> 
		</div> 	
=s