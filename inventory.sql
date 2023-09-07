-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Sep 2023 pada 09.15
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nm_admin` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nm_admin`, `username`, `password`) VALUES
(1, 'Admin', 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_datadukung`
--

CREATE TABLE `tb_datadukung` (
  `id_data` int(11) NOT NULL,
  `nama_data` varchar(50) NOT NULL,
  `file` varchar(50) NOT NULL,
  `id_aplikasi` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_datadukung`
--

INSERT INTO `tb_datadukung` (`id_data`, `nama_data`, `file`, `id_aplikasi`) VALUES
(14, 'buku manual', '2766-2178-1-SM (1).pdf', 26),
(15, 'aplikasi 1', '2766-2178-1-SM (1).pdf', 27);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_inventori`
--

CREATE TABLE `tb_inventori` (
  `id_aplikasi` int(50) NOT NULL,
  `nama_aplikasi` varchar(255) NOT NULL,
  `deskripsi_aplikasi` text NOT NULL,
  `tgl_pembuatan` date NOT NULL,
  `SKPD_pengampu` varchar(50) NOT NULL,
  `server` varchar(50) NOT NULL,
  `ip_server` varchar(255) NOT NULL,
  `kode_barang` text NOT NULL,
  `pencipta` text NOT NULL,
  `asal_usul` text NOT NULL,
  `status_aplikasi` enum('Aktif','Tidak Aktif') NOT NULL,
  `keterangan` text NOT NULL,
  `harga` bigint(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `lisensi` varchar(255) NOT NULL,
  `masa_aktif` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_inventori`
--

INSERT INTO `tb_inventori` (`id_aplikasi`, `nama_aplikasi`, `deskripsi_aplikasi`, `tgl_pembuatan`, `SKPD_pengampu`, `server`, `ip_server`, `kode_barang`, `pencipta`, `asal_usul`, `status_aplikasi`, `keterangan`, `harga`, `pic`, `url`, `lisensi`, `masa_aktif`) VALUES
(28, 'ARVIEV', 'Aplikasi untuk topologi dan pemetaan wilayah', '2012-08-22', '0', 'Offline', 'IP 53', '1.5.3.01.001.005.001', '0', 'Pembelian', 'Tidak Aktif', 'Tidak digunakan, sudah tidak sesuai dengan kondisi dan telah terbit versi yang baru. ', 7320300000, '0', '0', 'Lisensi', ''),
(30, 'MDAEMON PRO UNLIMITED', '0', '2013-01-01', '0', '0', '0', '1.5.3.01.001.005.001', '0', 'Pembelian', 'Tidak Aktif', '0', 7171450000, '0', '0', 'Lisensi', ''),
(31, 'APLIKASI SURAT BERBASIS ANDROID', 'Aplikasi Persuratan', '2014-01-01', '0', '0', '0', '1.5.3.01.001.005.001', '0', 'Pembelian', 'Tidak Aktif', 'Tidak digunakan diganti oleh aplikasi SUMAKER', 17875000, 'Aptika', '0', 'Lisensi', ''),
(32, 'UPDATING WEBSITE 2014', '0', '2014-01-01', '0', '0', '0', '1.5.3.01.001.005.001', '0', 'Pembelian', 'Tidak Aktif', '0', 39530700, '0', '0', 'Lisensi', ''),
(33, 'UPDATING SILADESKEL 2014', 'Aplikasi Sistem Informasi Desa', '2014-01-01', '0', '0', '0', '1.5.3.01.001.005.001', '0', 'Pembelian', 'Tidak Aktif', 'Tidak digunakan ', 49280000, '0', '0', 'Lisensi', ''),
(34, 'UPDATING APLIKASI PASAR MANTUNG ', '0', '2014-01-01', '0', '0', '0', '1.5.3.01.001.005.001', '0', 'Pembelian', 'Aktif', 'Masih digunakan ', 73986000, 'Aptika', '0', 'Lisensi', ''),
(35, 'SISTEM APLIKASI PUSKESMAS', 'Sistem Informasi Puskesmas ', '2014-01-01', '0', '0', '0', '1.5.3.01.001.005.001', '0', 'Pembelian', 'Tidak Aktif', 'Tidak digunakan diganti aplikasi E-Puskesmas ', 200000000, 'Aptika', '0', 'Lisensi', ''),
(36, 'SOLAR WINDS SL 100', '0', '2015-01-01', '0', '0', '0', '1.5.3.01.001.005.001', '0', 'Pembelian', 'Tidak Aktif', '0', 43043000, '0', '0', 'Lisensi', ''),
(37, 'Pengembangan Aplikasi Penanggulangan Kemiskinan', '0', '2017-01-01', '0', 'IP 53', 'IP 53', '1.5.3.01.001.005.001', '0', 'Pembelian', 'Aktif', 'Running ', 24475000, 'Aptika', '0', 'Lisensi', ''),
(39, 'Pengembangan Aplikasi Absensi Elektronik Sidik Jari ', 'Induk Aplikasi Presensi ', '2017-01-01', '0', '0', '0', '1.5.3.01.001.005.001', '0', 'Pembelian', 'Aktif', 'Running ', 93500000, 'Aptika', '0', 'Lisensi', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_datadukung`
--
ALTER TABLE `tb_datadukung`
  ADD PRIMARY KEY (`id_data`);

--
-- Indeks untuk tabel `tb_inventori`
--
ALTER TABLE `tb_inventori`
  ADD PRIMARY KEY (`id_aplikasi`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_datadukung`
--
ALTER TABLE `tb_datadukung`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `tb_inventori`
--
ALTER TABLE `tb_inventori`
  MODIFY `id_aplikasi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
