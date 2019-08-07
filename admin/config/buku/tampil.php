<div class="container">
<h1>Daftar Buku</h1>
<a href="index.php?page=tambah_buku">Tambah Data</a><br><br>


  <table class="table table-striped table-hove">
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
  
  // Load file koneksi.php
  <?php 
  $query = "SELECT * FROM tb_buku"; // Query untuk menampilkan semua data siswa
  $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  
  while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql?>
    

      <th scope="row"><?php echo $data['id_buku']?></th>
      <td>
      <img src="./../img_buku/<?php echo $data['foto']?>" alt="" class="img-thumbnail" style="max-width:75px; max-height:150px">
      </td>
      <td><?php echo $data['judul_buku'] ?></td>
      <td><?php echo $data['harga'] ?></td>
      <td><?php echo $data['jml'] ?></td>
      <td><?php echo $data['id_kategori'] ?></td>
      <td><?php echo $data['penulis'] ?></td>
      <td><?php echo $data['penerbit'] ?></td>
      <td><?php echo $data['deskripsi'] ?></td>
      <td>
      <a href='proses_ubah.php?nis=".$data['id-buku']."'>
      <a class="btn btn-sm btn-success" href="index.php?page=edit&id=<?php echo $data['id_buku'] ?>">Edit</a>
	    <a class="btn btn-sm btn-danger" href="index.php?page=delete7id<?php echo $data['id_buku ']?>">Delete</a>
      </td>
    </tr>
  <?php }?>
    </table>
</div>
