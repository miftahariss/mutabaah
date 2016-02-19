-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 19 Feb 2016 pada 18.27
-- Versi Server: 5.5.44-0ubuntu0.14.04.1
-- Versi PHP: 5.5.9-1ubuntu4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `mutabaah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `hamasah_mutabaah_log`
--

CREATE TABLE IF NOT EXISTS `hamasah_mutabaah_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idkey` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `hamasah_mutabaah_log`
--

INSERT INTO `hamasah_mutabaah_log` (`id`, `idkey`, `date`, `nama`, `email`, `token`, `status`) VALUES
(16, '20160219142925vt4xj', '1455866965', 'Miftah Aris Setiawan', 'miftahariss15@gmail.com', 'pm05c13d8yhq', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hamasah_mutabaah_mutabaah`
--

CREATE TABLE IF NOT EXISTS `hamasah_mutabaah_mutabaah` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `sholat_jamaah` int(11) NOT NULL,
  `shubuh_jamaah` int(11) NOT NULL,
  `sholat_dhuha` int(11) NOT NULL,
  `tilawah` int(11) NOT NULL,
  `shodaqoh` int(11) NOT NULL,
  `qiyamulail` int(11) NOT NULL,
  `berita_islam` int(11) NOT NULL,
  `muhasabah` int(11) NOT NULL,
  `hafalan_harian` int(11) NOT NULL,
  `olahraga_harian` int(11) NOT NULL,
  `istigfar_100` int(11) NOT NULL,
  `almasurat` int(11) NOT NULL,
  `total` bigint(20) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `hamasah_mutabaah_mutabaah`
--

INSERT INTO `hamasah_mutabaah_mutabaah` (`id`, `id_user`, `date`, `sholat_jamaah`, `shubuh_jamaah`, `sholat_dhuha`, `tilawah`, `shodaqoh`, `qiyamulail`, `berita_islam`, `muhasabah`, `hafalan_harian`, `olahraga_harian`, `istigfar_100`, `almasurat`, `total`, `status`) VALUES
(1, 10, 1455814800, 10, 5, 5, 15, 5, 10, 5, 5, 5, 5, 20, 20, 110, 1),
(6, 10, 1455814800, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hamasah_mutabaah_user`
--

CREATE TABLE IF NOT EXISTS `hamasah_mutabaah_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` int(11) NOT NULL,
  `nama` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `telp` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(100) NOT NULL,
  `propinsi` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `hamasah_mutabaah_user`
--

INSERT INTO `hamasah_mutabaah_user` (`id`, `date`, `nama`, `email`, `password`, `gender`, `tanggal_lahir`, `telp`, `alamat`, `kota`, `propinsi`, `status`) VALUES
(10, 1455866965, 'Miftah Aris Setiawan', 'miftahariss15@gmail.com', 'b9334bbe3ea1c8852a22af599f6e6df7', 'M', '2016-02-04', '089658155683', 'Komplek Sarana Indah Permai jl.cendana 3', 'Tangerang Selatan', 'Banten', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
