-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 05 Jan 2018 pada 18.21
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `fintech`
--
CREATE DATABASE IF NOT EXISTS `fintech` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fintech`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `costumer`
--

CREATE TABLE IF NOT EXISTS `costumer` (
  `id` int(11) NOT NULL,
  `ktp` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(11) NOT NULL,
  `tmpt_lahir` varchar(100) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `wn` varchar(25) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `notelp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_login`
--

CREATE TABLE IF NOT EXISTS `history_login` (
  `username` varchar(20) NOT NULL,
  `riwayat_login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_login` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `hak_akses` varchar(10) NOT NULL,
  `aktif` varchar(1) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `id`, `nama`, `password`, `hak_akses`, `aktif`) VALUES
(1, 1111, 'admin', '123', 'Admin', 'Y');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam_dana`
--

CREATE TABLE IF NOT EXISTS `pinjam_dana` (
  `kode_pinjam` varchar(4) NOT NULL,
  `id` int(11) NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `jmlh_pinjam` int(11) NOT NULL,
  `tenor` int(11) NOT NULL,
  `bunga` int(11) NOT NULL,
  `angsuran` int(11) NOT NULL,
  PRIMARY KEY (`kode_pinjam`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pinjam_dana`
--

INSERT INTO `pinjam_dana` (`kode_pinjam`, `id`, `tgl_transaksi`, `jmlh_pinjam`, `tenor`, `bunga`, `angsuran`) VALUES
('P001', 8734, '2018-01-05 18:26:44', 100000, 12, 12, 8333);

-- --------------------------------------------------------

--
-- Struktur dari tabel `simpan_dana`
--

CREATE TABLE IF NOT EXISTS `simpan_dana` (
  `kode_simpan` varchar(4) NOT NULL,
  `id` int(11) NOT NULL,
  `tgl_transaksi` datetime NOT NULL,
  `nominal` varchar(11) NOT NULL,
  `jns_simpan` varchar(20) NOT NULL,
  PRIMARY KEY (`kode_simpan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `simpan_dana`
--

INSERT INTO `simpan_dana` (`kode_simpan`, `id`, `tgl_transaksi`, `nominal`, `jns_simpan`) VALUES
('S001', 8734, '2018-01-05 19:34:26', '10000', 'Pokok'),
('S002', 8734, '2018-01-05 19:34:36', '20000', 'Wajib');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
