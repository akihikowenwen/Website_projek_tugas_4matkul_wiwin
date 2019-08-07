<?php
// Load file koneksi.php
include "./../config/conn.php";
// Ambil Data yang Dikirim dari Form
$judul_buku = $_POST['judul_buku'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$deskripsi = $_POST['deskripsi'];
$tahun_terbit = $_POST['tahun_terbit'];
$harga = $_POST['harga'];
$jml = $_POST['jml'];
$id_kategori = $_POST['id_kategori'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
  
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;
// Set path folder tempat menyimpan fotonya
$path = "./../img_buku/".$fotobaru;
// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "INSERT INTO tb_buku (judul_buku, penulis, penerbit, deskripsi, tahun_terbit, harga,  jml, id_kategori, foto) 
  VALUES('".$judul_buku."', '".$penulis."', '".$penerbit."', 
  '".$deskripsi."', '".$tahun_terbit."','".$harga."', '".$jml."', '".$id_kategori."', '".$fotobaru."')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
 
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
  
    header("location:index.php?page=buku"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='form_simpan.php'>Kembali Ke Form</a>";
}
?>