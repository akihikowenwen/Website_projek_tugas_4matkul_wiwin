
  <?php
  // Load file koneksi.php
  include "./../config/conn.php";
  // Ambil data NIS yang dikirim oleh index.php melalui URL
  $id_buku = $_GET['id'];
  $os = $_GET['u'];
  if($os =="y"){
  $judul_buku = $_POST['judul_buku'];
  $penulis = $_POST['penulis'];
  $penerbit = $_POST['penerbit'];
  $deskripsi = $_POST['deskripsi'];
  $tahun_terbit = $_POST['tahun_terbit'];
  $harga = $_POST['harga'];
  $jml = $_POST['jml'];
  $kategori = $_POST['kategori'];
    $quer = "UPDATE tb_buku SET judul_buku='$judul_buku',penulis='$penulis', penerbit='$penerbit', deskripsi='$deskripsi', tahun_terbit ='$tahun_terbit' , harga = '$harga', jml = '$jml', id_kategori = '$kategori' WHERE id_buku = $id_buku";
    echo $quer."\n";
    $exection_query = mysqli_query($connect, $quer);
    if($exection_query){
      header("location:index.php?page=buku");
    }else{
      echo("Error description: " . mysqli_error($connect));
    }
  }
  // Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
  // $query = "SELECT * FROM tb_buku WHERE id_buku='".$id_buku."'";
  $query = "SELECT * FROM tb_buku LEFT JOIN tb_kategori ON tb_buku.id_kategori = tb_kategori.id_kategori WHERE id_buku=$id_buku";
  $sql = mysqli_query($connect, $query);  // Eksekusi/Jalankan query dari variabel $query
  $data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql
  ?>  
  <form method="post" action="index.php?u=y&page=edit&id=<?php echo $id_buku; ?>" enctype="multipart/form-data">
  <table cellpadding="8"> `
  <tr>
    <td>Kategori</td>
    <td>
 
      <select id="inputState" name="kategori" class="form-control">
        <option value="">PILIH KATEGORI</option>
        <?php
          $p = mysqli_query($connect,"SELECT * FROM tb_kategori");
          while($s = mysqli_fetch_array($p)){ ?>
            <option value="<?php echo $s['nama_kategori'];?>" <?php if($s['nama_kategori'] == $data['nama_kategori']){echo 'selected';} ?> ><?php echo $s['nama_kategori']; ?></option>
        <?php
          }
        ?>
      </select>
    </textarea></td>
  </tr>
  <tr>
    <td>Judul Buku</td>
    <td><input type="text" class="form-control" name="judul_buku" value="<?php echo $data['judul_buku']; ?>"></td>
  </tr>
  <tr>
    <td>Penerbit</td>
    <td><input type="text" class="form-control" name="penerbit" value="<?php echo $data['penerbit']; ?>"></td>
  </tr>
  <tr>
    <td>Penulis</td>
    <td><input type="text" class="form-control" name="penulis" value="<?php echo $data['penulis']; ?>"></td>
  </tr>
  <tr>
    <td>Deskripsi</td>
    <td><textarea class="form-control" name="deskripsi"><?php echo $data['deskripsi']; ?></textarea></td>
  </tr>
  <tr>
    <td>Tahun Terbit</td>
    <td><input type="date" class="form-control" name="tahun_terbit" value="<?php echo $data['tahun_terbit']; ?>"></td>
  <tr>
    <td>Harga</td>
    <td><input type="number" class="form-control" name="harga" value="<?php echo $data['harga']; ?>"></textarea></td>
  </tr>
  <tr>
    <td>Jumlah</td>
    <td><input type="number" class="form-control" name="jml" value="<?php echo $data['jml']; ?>"></textarea></td>
  </tr>
  
  <tr>
    <td>Foto</td>
    <td>
      <input type="file" class="form-control" name="foto" value="<?php echo $data['foto']; ?>"><br>
    </td>
  </tr>
  </tr>
  </table>
  <hr>
  <input type="submit" value="Ubah">
  </form>
