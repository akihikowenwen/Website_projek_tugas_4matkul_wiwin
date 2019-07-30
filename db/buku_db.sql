-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 29 Jul 2019 pada 06.28
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
  `gambar` varchar(100) NOT NULL,
  `isi_blog` text NOT NULL,
  `tgl` date NOT NULL,
  `tulisan` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_blog`
--

INSERT INTO `tb_blog` (`id`, `judul`, `gambar`, `isi_blog`, `tgl`, `tulisan`) VALUES
(1, 'Dependencies', '', '\r\nSome plugins and CSS components depend on other plugins. If you include plugins individually, make sure to check for these dependencies in the docs. Also note that all plugins depend on jQuery (this means jQuery must be included before the plugin files). Consult our package.json to see which versions of jQuery are supported.\r\n\r\nOur dropdowns, popovers and tooltips also depend on Popper.js.\r\n\r\nData attributes\r\nNearly all Bootstrap plugins can be enabled and configured through HTML alone with data attributes (our preferred way of using JavaScript functionality). Be sure to only use one set of data attributes on a single element (e.g., you cannot trigger a tooltip and modal from the same button.)\r\n\r\nHowever, in some situations it may be desirable to disable this functionality. To disable the data attribute API, unbind all events on the document namespaced with data-api like so:', '2019-07-28', 'wiwin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE IF NOT EXISTS `tb_buku` (
`id_buku` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tahun terbit` date NOT NULL,
  `harga` int(11) NOT NULL,
  `foto_buku` varchar(100) NOT NULL,
  `ket` text NOT NULL,
  `jml` int(11) NOT NULL,
  `id_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `judul_buku`, `pengarang`, `penerbit`, `deskripsi`, `tahun terbit`, `harga`, `foto_buku`, `ket`, `jml`, `id_kategori`) VALUES
(2, 'jualanonline', 'liza', 'gramed', 'buku ini didasari dengan pemikiran kami yang selalu  positif', '0000-00-00', 75000, '', 'buah karyaku', 5, '2'),
(3, 'the dorbellmssn sordiel', 'liza', 'gramed', 'buku ini didasari dengan pemikiran kami yang selalu  positif', '2019-07-30', 75000, '', 'buah karyaku', 18, '1');

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
MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
