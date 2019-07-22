<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="assets/css/bootstrap4.css">
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php 

	$category = $_GET['cat'];

	echo "SELECT * FROM book WHERE cat_id='$category'";

?>

<h1><?php echo $category; ?></h1>

<div class="container px-0" style="background-color:white">
<div class="col-md-9">
			<div class="row">
			<div class="col-md-12">

				
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
					<td class=""><div> <a href="#"><img src="assets/img/gambar3.jpg" alt="img" width="120px"></a> </div></td>
					<td><div class="CartDescription">
					<h4> <a href="#">buku xxx</a> </h4>
					<div class="price">Rp. 35.000</div>
					</div></td>
                                        
					<td>
					<div class="box">
                        <input type="number" value="1" min="1" max="50" class="btn btn-outline-primary">
                      </div>
					</td>
					<td class="price">RP.145.000</td>
					<td><a href="#" title="Delete"> Hapus <i class="glyphicon glyphicon-trash fa-2x"></i></a></td>
				</tr>

				<tr style="background:#c3ebf8;font-weight:bold;">
					<td colspan="3">SUB TOTAL</td>
                                        <td>RP.145.000</td>
										<td>&nbsp;</td>
				</tr>
				</tbody>
				</table>
			</div>
			
			<!-- yang ini -->
			<div class="col-sm-6 col-md-6" >
				<h4><b>Total Keranjang Belanja</b></h4>
				<table class="table table-bordered">
					<tr>
						<td style="background:#fafafa;"><b>Total</b></td>
						<td><b>Rp. 145.000</a></td>
					</tr>
				</table>
				<form> 
					<input type="hidden" name="okay" value="cart">
					<button type="submit" class="btn btn-primary">Selesai Belanja </button>
				</form>
			</div>
			<!-- sampai ini jadi ke pojok kanan -->
			<!-- bagian mana aja ??? -->
			</div> 
		</div> 	
</div>
</body>
</html>
