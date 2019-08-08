<div class="container">
<h1>Daftar User</h1>
<a href="index.php?page=tambah_buku">Tambah Data </a><br><br>


  <table class="table table-striped table-hove text-center">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Email</th>
      <th scope="col">Alamat</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>

    </tr>
  
   <!-- Load file koneksi.php -->
  <?php 
    $query = "SELECT * FROM tb_buku"; // Query untuk menampilkan semua data siswa
    $sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
    $no = 1;
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
  ?>
      <th scope="row"><?php echo $no; ?></th>
      <!-- <td>
      <img src="./../img_buku/<?php echo $data['foto']?>" alt="" class="img-thumbnail" style="max-width:75px; max-height:150px">
      </td> -->
      <td><?php echo $data['nama_user'] ?></td>
      <td><?php echo $data['email_usser'] ?></td>
      <td><?php echo $data['Alamat'] ?></td>
      <td><?php echo $data['id_kategori'] ?></td>
      <td><?php echo $data['penulis'] ?></td>
      <td><?php echo $data['penerbit'] ?></td>
      <td><?php echo $data['deskripsi'] ?></td>
      <td>
      <a href='proses_ubah.php?nis=".$data['id-buku']."'>
      <a class="btn btn-sm btn-success" href="index.php?u=n&page=edit&id=<?php echo $data['id_buku'] ?>">Edit</a>
	    <a class="btn btn-sm btn-danger" href="index.php?page=delete&id=<?php echo $data['id_buku']?>">Delete</a>
      </td>
    </tr>
  <?php 
$no++;
}?>
    </table>
</div>
