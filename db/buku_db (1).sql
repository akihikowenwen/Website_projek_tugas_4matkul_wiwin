-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Agu 2019 pada 09.01
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `buku_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id_admin` int(11) DEFAULT NULL,
  `nama` varchar(30) NOT NULL,
  `username` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `notelp` int(14) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_blog`
--

CREATE TABLE IF NOT EXISTS `tb_blog` (
`id` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `isi_blog` text NOT NULL,
  `tgl` date NOT NULL,
  `tulisan` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_blog`
--

INSERT INTO `tb_blog` (`id`, `judul`, `foto`, `isi_blog`, `tgl`, `tulisan`) VALUES
(1, 'Dependencies', '02082019211312gambar3.jpg', '\r\nSome plugins and CSS components depend on other plugins. If you include plugins individually, make sure to check for these dependencies in the docs. Also note that all plugins depend on jQuery (this means jQuery must be included before the plugin files). Consult our package.json to see which versions of jQuery are supported.\r\n\r\nOur dropdowns, popovers and tooltips also depend on Popper.js.\r\n\r\nData attributes\r\nNearly all Bootstrap plugins can be enabled and configured through HTML alone with data attributes (our preferred way of using JavaScript functionality). Be sure to only use one set of data attributes on a single element (e.g., you cannot trigger a tooltip and modal from the same button.)\r\n\r\nHowever, in some situations it may be desirable to disable this functionality. To disable the data attribute API, unbind all events on the document namespaced with data-api like so:', '2019-07-28', 'wiwin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE IF NOT EXISTS `tb_buku` (
`id_buku` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `penulis` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tahun_terbit` date NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `jml` int(11) NOT NULL,
  `id_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `judul_buku`, `penulis`, `penerbit`, `deskripsi`, `tahun_terbit`, `harga`, `foto`, `jml`, `id_kategori`) VALUES
(11, 'sd', 'sad', 's', 'ss', '0000-00-00', 1, '02082019185534Jellyfish.jpg', 1, 's'),
(12, 'w', 'wq', 'w', 'w', '0000-00-00', 0, '02082019185611Jellyfish.jpg', 0, 'w'),
(13, 'hui', 'ji', 'ji', 'wji', '0000-00-00', 40000, '02082019185703Desert.jpg', 5, 'wiwin'),
(14, '2', '4', '3', 'er', '0000-00-00', 0, '02082019185923Penguins.jpg', 0, '1'),
(15, 'zlksjcl', 'lkcsh', 'aksh.dc', 'kklahd', '0000-00-00', 0, '060820190919362ce2691ab6d86fc4b9469e61123dde2b.jpg', 0, 'aksdnhl'),
(16, 'zlksjcl', 'lkcsh', 'aksh.dc', 'kklahd', '0000-00-00', 78, '060820190920552ce2691ab6d86fc4b9469e61123dde2b.jpg', 789, 'agus'),
(17, 'zlksjcl', 'lkcsh', 'aksh.dc', 'kklahd', '0000-00-00', 78, '06082019092219142.jpg', 789, 'agus'),
(18, '', '', '', 'k,h', '0000-00-00', 0, '06082019093158100.jpg', 0, 'kjhn'),
(19, 'sarhana', 'dsa', 'asc', 'a', '0000-00-00', 123, '0708201902141802082019211312gambar3.jpg', 123, 'buku'),
(20, 'sarhana', 'dsa', 'asc', 'a', '0000-00-00', 123, '0708201902155302082019211312gambar3.jpg', 123, 'sarhan'),
(21, 's', 'dsfa', 'sdf', 'fsda', '0000-00-00', 234, '0708201902195649eb6a44db57cba8d66b3404fa9f0ad4anime_girls_Kimetsu_no_Yaiba_Kamado_Nezuko-1608005.jpg', 243, 'shj'),
(22, 's', 'dsfa', 'sdf', 'fsda', '0000-00-00', 234, '0708201902202649eb6a44db57cba8d66b3404fa9f0ad4anime_girls_Kimetsu_no_Yaiba_Kamado_Nezuko-1608005.jpg', 243, 'shj'),
(23, 's', 'dsfa', 'sdf', 'fsda', '0000-00-00', 234, '0708201902204149eb6a44db57cba8d66b3404fa9f0ad4anime_girls_Kimetsu_no_Yaiba_Kamado_Nezuko-1608005.jpg', 243, 'shj'),
(24, 'the hospital', 'kumbara', 'gramedia', 'buku ini berawal dari saat belajar', '0000-00-00', 26000, '070820190353390508201922464549eb6a44db57cba8d66b3404fa9f0ad4gambar4.jpg', 5, 'buku'),
(25, 'h', 'k', 'j', 'l', '0000-00-00', 4563, '0708201908274702082019182041Hydrangeas.jpg', 23, 'sarjana');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE IF NOT EXISTS `tb_kategori` (
`id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'komik'),
(2, 'sains'),
(3, 'musik'),
(4, 'Musik'),
(5, 'Sains'),
(6, 'Musik'),
(7, 'Sains');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_konfirmasi`
--

CREATE TABLE IF NOT EXISTS `tb_konfirmasi` (
`id_konfirmasi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_trx` int(11) NOT NULL,
  `id_bank` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `ket` text NOT NULL,
  `foro_konfirmasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kota`
--

CREATE TABLE IF NOT EXISTS `tb_kota` (
`id_kota` int(11) NOT NULL,
  `nama_kota` varchar(100) NOT NULL,
  `kode_pos` varchar(6) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kurir`
--

CREATE TABLE IF NOT EXISTS `tb_kurir` (
`id_kurir` int(11) NOT NULL,
  `nama_kurir` varchar(100) NOT NULL,
  `waktu` varchar(100) NOT NULL,
  `Deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE IF NOT EXISTS `tb_pesanan` (
`id_trx` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `id_buku` int(11) NOT NULL,
  `jml_buku` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ket` text NOT NULL,
  `id_kurir` int(11) NOT NULL,
  `id_kota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_rinci_pesanan`
--

CREATE TABLE IF NOT EXISTS `tb_rinci_pesanan` (
  `id_rinci` int(11) NOT NULL,
  `id_trx` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
`id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kode_pos` varchar(50) NOT NULL,
  `no_tlp` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(75) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` enum('user','admin') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `telephone`, `alamat`, `password`, `status`) VALUES
(1, 'adm', 'admin@gmail.com', '08985432330', 'Semarang Ajah', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(2, 'Jokowi', 'joko@gmail.com', '08985432330', 'jakarta 1', '7d00ff54a263fe80825b9297804a982c', 'user'),
(3, 'Putri Delvia', 'putri@gmail.com', '08985432330', 'semarang selatan', '82682943a05de360abb183236c632bd6', 'user'),
(4, 'Shodiqul Muzaki', 'mshodiqul@gmail.com', '087717495260', 'karangasem', 'a63ae42a413740542ce47bb20a124438', 'user'),
(5, 'Mery Ayu Nurita', 'meryayu@gmail.com', '089688899260', 'Semarang aja', 'a63ae42a413740542ce47bb20a124438', 'user'),
(6, 'aku', 'aku@gmail.com', '12345678', 'jember', '89ccfac87d8d06db06bf3211cb2d69ed', 'user'),
(7, 'yugi', 'jun@gmail.com', '868968608', 'jkjgkjn', '053be7b63330b25d02e3e8161bedea49', 'user'),
(8, 'ahuj', 'ah@gmail.com', '868', 'jugo', 'e17098bbcf632e2a1384d0812979587f', 'user'),
(9, 'user', 'user@gmail.com', '99878', 'hjsdjsd', 'b5b73fae0d87d8b4e2573105f8fbe7bc', 'user'),
(10, 'wiwin', 'wiwin@gmail.com', '9879', 'hkl', '79184e2a48c0249556006353a0c65f55', 'user'),
(11, 'adit', 'adit@gmail.com', '9869', 'khsdjka', '357344787fa3d91429f000604af9667f', 'user'),
(12, 'wiwin', 'wiwi@gmail.com', '08977aa', 'bekasi', '9be95ca0921a739fd37db6f39a0cdea5', 'user'),
(13, 'putri', 'admin@gmail.com', '089', 'semarang', '4093fed663717c843bea100d17fb67c8', 'user'),
(14, 'putri', 'putri@gmail.com', '0899', 'semarang', '4093fed663717c843bea100d17fb67c8', 'user'),
(15, 'df', 'putri@gmail.com', 'sdf', 'dfs', '4093fed663717c843bea100d17fb67c8', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_blog`
--
ALTER TABLE `tb_blog`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_buku`
--
ALTER TABLE `tb_buku`
 ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tb_konfirmasi`
--
ALTER TABLE `tb_konfirmasi`
 ADD PRIMARY KEY (`id_konfirmasi`);

--
-- Indexes for table `tb_kota`
--
ALTER TABLE `tb_kota`
 ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `tb_kurir`
--
ALTER TABLE `tb_kurir`
 ADD PRIMARY KEY (`id_kurir`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
 ADD PRIMARY KEY (`id_trx`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
 ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_blog`
--
ALTER TABLE `tb_blog`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_buku`
--
ALTER TABLE `tb_buku`
MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tb_kategori`
--
ALTER TABLE `tb_kategori`
MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_konfirmasi`
--
ALTER TABLE `tb_konfirmasi`
MODIFY `id_konfirmasi` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_kota`
--
ALTER TABLE `tb_kota`
MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_kurir`
--
ALTER TABLE `tb_kurir`
MODIFY `id_kurir` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
MODIFY `id_trx` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
