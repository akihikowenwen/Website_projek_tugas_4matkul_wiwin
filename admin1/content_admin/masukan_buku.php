<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../assets/css/bootstrap4.css">
    <link rel="stylesheet" href="../../assets/css/custom.css">
    <link rel="stylesheet" href="../../https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	
	<div class="container">
		
		<h4>Masukan Buku</h4>

		<hr>
		
					<div class="row col-md-6">
					<form>
						<label>Kategori Produk</label><br>
						<select name="kategori_produk_id" required class="form-control">				
						</select><br>
						<label>Nama</label><br>
						<input type="text" class="form-control" name="nama" required><br>
						<label>Deskripsi</label><br> 
						<textarea class="form-control" name="deskripsi" required></textarea><br>
						<label>Gambar</label><br>
						<input type="file" class="form-control" name="gambar" required><br>
						<label>Harga</label><br>
						<input type="number" class="form-control" name="harga" required><br>
                        <label>Penulis</label><br>
						<input type="text" class="form-control" name="penulis" required><br>
                        <label>Penerbit</label><br>
						<input type="text" class="form-control" name="penerbit" required><br>
                        <label>Jumlah</label><br>
						<input type="number" class="form-control" name="jumlah" required><br>
						<input type="submit" name="form-input" value="Simpan" class="btn btn-success">
					</form>
					</div>
					<div class="row col-md-12"><hr></div>

    </div> <!-- /container -->
</body>
</html.