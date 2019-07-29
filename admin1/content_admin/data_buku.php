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
      <img src="../../assets/img/gambar1.jpg" alt="" class="img-thumbnail" style="max-width:75px; max-haight:150px">
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
      <img src="../../assets/img/gambar1.jpg" alt="" class="img-thumbnail" style="max-width:75px; max-haight:150px">
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
      <img src="../../assets/img/gambar1.jpg" alt="" class="img-thumbnail" style="max-width:75px; max-haight:150px">
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
</body>
</html>