-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Des 2021 pada 14.43
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdatapegawai`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `datakaryawan`
--

CREATE TABLE `datakaryawan` (
  `idpegawai` int(11) NOT NULL,
  `nama` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `nik` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `jeniskelamin` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `notelpon` varchar(15) CHARACTER SET latin1 DEFAULT NULL,
  `jabatan` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `gaji` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datakaryawan`
--

INSERT INTO `datakaryawan` (`idpegawai`, `nama`, `nik`, `jeniskelamin`, `email`, `notelpon`, `jabatan`, `gaji`, `alamat`, `foto`) VALUES
(1, 'Kornelius Aditya Septemedi', '61052222', '', 'aditya@gmail.com', 'Manager', 'Manager', '10.000.000', 'Sintang, Kalimantan Barat, Indonesia', 'foto1639132730.52-ventus khiii'),
(6, 'venan', '3434', 'L', 'venan@gmail.com', '0812xxx', 'blabla', '120000', 'lasem', '472-52-Ventus KHIII.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `idpegawai` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 NOT NULL,
  `nama` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `level` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`idpegawai`, `username`, `password`, `nama`, `email`, `level`) VALUES
(7, 'Venan', '3c3ee262b1f824e7faa0504242753166', 'Venansius Fortunatus Wijaya', 'v3n4n.fw@gmail.com', 'pegawai'),
(8, 'Admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'admin@email.com', 'admin'),
(9, 'adit', '486b6c6b267bc61677367eb6b6458764', 'adityaa', 'adit@gmail.com', 'pegawai'),
(10, 'adit', '486b6c6b267bc61677367eb6b6458764', 'adit', 'adit@gmail.com', 'pegawai');

-- --------------------------------------------------------

--
-- Struktur dari tabel `statuskaryawan`
--

CREATE TABLE `statuskaryawan` (
  `idpegawai` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `statuspegawai` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `statuskaryawan`
--

INSERT INTO `statuskaryawan` (`idpegawai`, `nama`, `jabatan`, `statuspegawai`) VALUES
(2, 'Venansius fortunatus wijaya', 'Software Tester', 'Karyawan Tetap'),
(3, 'adityaa', 'manager', 'Magang'),
(4, 'venan', 'tester', 'Tidak Tetap');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `datakaryawan`
--
ALTER TABLE `datakaryawan`
  ADD PRIMARY KEY (`idpegawai`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`idpegawai`);

--
-- Indeks untuk tabel `statuskaryawan`
--
ALTER TABLE `statuskaryawan`
  ADD PRIMARY KEY (`idpegawai`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `datakaryawan`
--
ALTER TABLE `datakaryawan`
  MODIFY `idpegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `idpegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `statuskaryawan`
--
ALTER TABLE `statuskaryawan`
  MODIFY `idpegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
