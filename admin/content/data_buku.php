
<div class="container">
<h3>Daftar User</h3>

<table class="table table-striped">
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
    <tr>
      <th scope="row">1</th>
      <td>
      <img src="./../assets/img/gambar1.jpg" alt="" class="img-thumbnail" style="max-width:75px; max-haight:150px">
      </td>
      <td>Agus@gmail.com</td>
      <td>bekasitengah jl rt 003 rw004</td>
      <td>bekasi</td>
      <td>bekasi</td>
      <td>mustikajaya</td>
      <td>12887</td>
      <td>089261568</td>
      <td>
        <a class="btn btn-sm btn-success" href="user.php?act=edit&&id=<?php echo $data->id ?>">Edit</a>
	    <a class="btn btn-sm btn-danger" href="user.php?act=delete&&id=<?php echo $data->id ?>">Delete</a>
            
      </td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>
      <img src="./../assets/img/gambar3.jpg" alt="" class="img-thumbnail" style="max-width:75px; max-haight:150px">
      </td>
      <td>Agus@gmail.com</td>
      <td>bekasitengah jl rt 003 rw004</td>
      <td>bekasi</td>
      <td>bekasi</td>
      <td>mustikajaya</td>
      <td>12887</td>
      <td>089261568</td>
      <td>
        <a class="btn btn-sm btn-success" href="user.php?act=edit&&id=<?php echo $data->id ?>">Edit</a>
	    <a class="btn btn-sm btn-danger" href="user.php?act=delete&&id=<?php echo $data->id ?>">Delete</a>
            
      </td>
    </tr>
    <tr>
      <th scope="row">1</th>
      <td>
      <img src="./../assets/img/gambar2.jpg" alt="" class="img-thumbnail" style="max-width:75px; max-haight:150px">
      </td>
      <td>Agus@gmail.com</td>
      <td>bekasitengah jl rt 003 rw004</td>
      <td>bekasi</td>
      <td>bekasi</td>
      <td>mustikajaya</td>
      <td>12887</td>
      <td>089261568</td>
      <td>
        <a class="btn btn-sm btn-success" href="user.php?act=edit&&id=<?php echo $data->id ?>">Edit</a>
	    <a class="btn btn-sm btn-danger" href="user.php?act=delete&&id=<?php echo $data->id ?>">Delete</a>
            
      </td>
    </tr>
  </tbody>
</table>
</div>