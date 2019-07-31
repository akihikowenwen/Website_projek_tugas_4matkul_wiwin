<?php 
            $k = mysql_query("SELECT * FROM tb_buku ORDER BY id_buku DESC limit 3"); 
            while($data = mysql_fetch_array($k)){                
        ?>
<!DOCTYPE html>
<html>
<head>
	<title>CRUD Petani Kode</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<?php 
	include"../config/conn.php"; 
	// validate_admin_not_login("login.php");
	
	// delete
	if(!empty($_GET)){
		if($_GET['act'] == 'delete'){
			
			$q = mysql_query("delete from tb_buku WHERE id='$_GET[id_buku]'");
			if($q){ alert("Success"); redir("produk.php"); }
		}  
	}
	if(!empty($_GET['act']) && $_GET['act'] == 'create'){
		if(!empty($_POST)){
			$gambar = md5('Y-m-d H:i:s').$_FILES['foto_buku']['name'];
			extract($_POST);
			$deskripsi = (!empty($_POST['deskripsi'])) ? $_POST['deskripsi'] : NULL;
			$q = mysql_query("insert into produk Values(NULL,'$nama','$deskripsi','$gambar','$harga','$kategori_produk_id')");
			if($q){
				$upload = move_uploaded_file($_FILES['foto_buku']['tmp_name'], '../uploads/'.$gambar);
				if($upload){ alert("Success"); redir("produk.php"); }
			}
		}
	}
	if(!empty($_GET['act']) && $_GET['act'] == 'edit'){
		if(!empty($_POST)){ 
			
			$gambar = md5('Y-m-d H:i:s').$_FILES['toko_buku']['name'];
			extract($_POST); 
			$deskripsi = (!empty($_POST['deskripsi'])) ? $_POST['deskripsi'] : NULL; 
		
			$q = mysql_query("update produk SET nama='$nama',deskripsi='$deskripsi', gambar='$gambar', harga='$harga', kategori_produk_id='$kategori_produk_id' where id=$_GET[id]") or die(mysql_error());
			if($q){
				$upload = move_uploaded_file($_FILES['gambar']['tmp_name'], '../uploads/'.$gambar);
				if($upload){ alert("Success"); redir("produk.php"); }
			}
		}
	}

	
?> 
	
	<div class="container">
		<?php
			$q = mysql_query("select*from tb_buku");
			$j = mysql_num_rows($q);
		?>
		<h4>Daftar Produk (<?php echo ($j>0)?$j:0; ?>)</h4>
		<a class="btn btn-sm btn-primary" href="produk.php?act=create">Add Data</a>
		<hr>
		<?php
			if(!empty($_GET)){
				if($_GET['act'] == 'create'){
				?>
					<div class="row col-md-6">
					<form action="" method="post" enctype="multipart/form-data">
						<label>Kategori Produk</label><br>
						<select name="kategori_produk_id" required class="form-control"> 
							<?php
								$katpro = mysql_query("select*from kategori_produk");
								while($kp = mysql_fetch_array($katpro)){
							?>
							<option value="<?php echo $kp['id']; ?>"><?php echo $kp['nama'] ?></option>
								<?php } ?>
						</select><br>
						<label>Nama</label><br>
						<input type="text" class="form-control" name="nama" required><br>
						<label>Deskripsi</label><br> 
						<textarea class="form-control" name="deskripsi" required></textarea><br>
						<label>Gambar</label><br>
						<input type="file" class="form-control" name="gambar" required><br>
						<label>Harga</label><br>
						<input type="number" class="form-control" name="harga" required><br>
						<input type="submit" name="form-input" value="Simpan" class="btn btn-success">
					</form>
					</div>
					<div class="row col-md-12"><hr></div>
				<?php	
				} 
				if($_GET['act'] == 'edit'){
					$data = mysql_fetch_object(mysql_query("select*from produk where id='$_GET[id]'"));
				?>
					<div class="row col-md-6">
					<form action="produk.php?act=edit&&id=<?php echo $_GET['id'] ?>" method="post" enctype="multipart/form-data">
						<label>Kategori Produk</label><br>
						<select name="kategori_produk_id" required class="form-control"> 
						<?php
								$katpro = mysql_query("select*from kategori_produk where id='$data->kategori_produk_id'");
								$kpa = mysql_fetch_array($katpro);
							?>
								<option value="<?php echo $kpa['id']; ?>"><?php echo $kpa['nama'] ?></option>
							<?php
								$katpro = mysql_query("select*from kategori_produk");
								while($kp = mysql_fetch_array($katpro)){
							?>
								<option value="<?php echo $kp['id']; ?>"><?php echo $kp['nama'] ?></option>
								<?php } ?>
						</select><br>
						<label>Nama</label><br>
						<input type="text" class="form-control" name="nama" value="<?php echo $data->nama; ?>"><br>
						<label>Deskripsi</label><br> 
						<textarea class="form-control" name="deskripsi" required><?php echo $data->deskripsi; ?></textarea><br>
						<label>Gambar</label><br>
						<input type="file" class="form-control" name="gambar" required><br>
						<label>Harga</label><br>
						<input type="number" class="form-control" name="harga" required value="<?php echo $data->harga; ?>"><br>
						<input type="submit" name="form-edit" value="Simpan" class="btn btn-success">
					</form>
					</div>
					<div class="row col-md-12"><hr></div>
				<?php	
				} 
			}
		?>
		
		<table class="table table-striped table-hove"> 
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">Foto</th>
					<th scope="col">judul Buku</th>
					<th scope="col">Harga</th>
					<th scope="col">Jumlah</th>
					<th scope="col">kategori</th>
					<th scope="col">Penulis</th>
					<th scope="col">Penerbit</th>
					<th scope="col">Deskrisi</th>
					<th scope="col">Action</th>

				</tr>
			</thead> 
			<tbody> 
				

			
			
		<?php while($data=mysql_fetch_object($q)){ ?> 
				<tr> 
					<th scope="row"><?php echo $no++; ?></th> 
					<td> <!--<img src="./../assets/img/gambar1.jpg" alt="" class="img-thumbnail" style="max-width:75px; max-haight:150px"> -->
					<img src="<?php echo $url.'uploads/'.$data->gambar ?>" width="100%"></td> 
					<td><?php echo $data['judul_buku'] ?></td>
					<td><?php echo $data['harga'] ?></td>
					<td><?php echo $data->harga ?></td> 
					<td><?php echo number_format($data->harga, 2, ',', '.') ?></td> 
					<td>
						<a class="btn btn-sm btn-success" href="produk.php?act=edit&&id=<?php echo $data->id ?>">Edit</a>
						<a class="btn btn-sm btn-danger" href="produk.php?act=delete&&id=<?php echo $data->id ?>">Delete</a>
					</td> 
				</tr>
		<?php } ?>
			</tbody> 
		</table> 
    </div> <!-- /container -->

</body>
</html>
		<?php  } ?>