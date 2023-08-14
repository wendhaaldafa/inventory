-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Agu 2023 pada 07.13
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
(14, 'buku manual', '2766-2178-1-SM (1).pdf', 26);

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
  `ip_server` int(50) NOT NULL,
  `kode_barang` text NOT NULL,
  `pencipta` text NOT NULL,
  `asal_usul` text NOT NULL,
  `status_aplikasi` enum('Aktif','Tidak Aktif') NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_inventori`
--

INSERT INTO `tb_inventori` (`id_aplikasi`, `nama_aplikasi`, `deskripsi_aplikasi`, `tgl_pembuatan`, `SKPD_pengampu`, `server`, `ip_server`, `kode_barang`, `pencipta`, `asal_usul`, `status_aplikasi`, `keterangan`) VALUES
(26, 'Aplikasi Desa 2', 'ini aplikasi', '2023-08-09', 'Diskominfo malang', 'Diskominfo', 1717171717, '001', 'Orang', 'Malang', 'Aktif', 'Aplikasi masih aktif');

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
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `tb_inventori`
--
ALTER TABLE `tb_inventori`
  MODIFY `id_aplikasi` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
