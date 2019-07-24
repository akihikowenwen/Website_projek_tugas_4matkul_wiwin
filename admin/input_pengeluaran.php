	<div class="container">
	
		<h4>Input Pengeluaran ()</h4>
		<a class="btn btn-sm btn-primary" href="input_pengeluaran.php?act=create">Add Data</a>
		<hr>

					<div class="row col-md-6">
					<form action="" method="post" enctype="multipart/form-data">
						<label>Nama Barang</label><br>
						<input type="text" class="form-control" name="nama_barang" required placeholder="Masukkan Nama Barang"><br>
						<label>Tanggal Pengeluaran</label><br>
						<div class="form-group">
							<div class='input-group date' id='datetimepicker'>
								<input type='text' class="form-control" name="Tanggal_pengeluaran"
								required placeholder="Pilih Tanggal" />
								<span class="input-group-addon">
									<span class="glyphicon glyphicon-calendar"></span>
								</span>
							</div>
						</div>
						<label>Harga</label><br>
						<input type="text" class="form-control" name="harga" required placeholder="Masukkan Harga"><br>
						<label>jumlah</label><br>
						<input type="text" class="form-control" name="jumlah" required placeholder="Masukkan Jumlah"><br>
						<input type="submit" name="form-input" value="Simpan" class="btn btn-success">
					</form>
					</div>
					<div class="row col-md-12"><hr></div>
			
					<div class="row col-md-6">
					<form action="input_pengeluaran.php?act=edit&&id=" method="post" enctype="multipart/form-data">
						<label>Nama barang</label><br>
						<input type="text" class="form-control" name="nama_barang" value="" required><br>
						<label>Harga</label><br>
						<input type="text" class="form-control" name="harga" value="" required><br>
						<label>jumlah</label><br>
						<input type="text" class="form-control" name="jumlah" value="" required><br>
						<input type="submit" name="form-edit" value="Simpan" class="btn btn-success">
					</form>
					</div>
					<div class="row col-md-12"><hr></div>
			

		<table class="table table-striped table-hove">
			<thead>
				<tr>
					<th>NO</th>
					<th>Nama Barang</th>
					<th>Tanggal Pengeluaran</th>
					<th>harga</th>
					<th>jumlah barang</th>
					<th>Total</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>







				<tr>
					<th scope="row"></th>
					<td></td>
					<td></td>
				  <td></td>
					<th></th>
					<td></td>
					<td>
						<a class="btn btn-sm btn-success" href="input_pengeluaran.php?act=edit&&id=">Edit</a>
						<a class="btn btn-sm btn-danger" href="input_pengeluaran.php?act=delete&&id=">Delete</a>
					</td>
				</tr>
		
			</tbody>
		</table>
    </div> <!-- /container -->