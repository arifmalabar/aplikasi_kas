-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Jun 2023 pada 08.44
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kasdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_anggota`
--

CREATE TABLE `tb_anggota` (
  `NIM` char(7) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jenis_kelamin` enum('pria','wanita') NOT NULL,
  `foto` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_anggota`
--

INSERT INTO `tb_anggota` (`NIM`, `nama`, `email`, `jenis_kelamin`, `foto`) VALUES
('2118052', 'bahrul ilmim', 'bahrul@gmail.com', 'pria', ''),
('2118057', 'bahrul ilmi', '27197004@sch.id', 'pria', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jeniskas`
--

CREATE TABLE `tb_jeniskas` (
  `kode_jeniskas` bigint(20) NOT NULL,
  `nama_kas` varchar(20) NOT NULL,
  `jumlah_kas` int(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_jeniskas`
--

INSERT INTO `tb_jeniskas` (`kode_jeniskas`, `nama_kas`, `jumlah_kas`, `keterangan`) VALUES
(1, 'KAS DBO', 10000, '						    aassasasas                        '),
(2, 'kas Sakit123', 40000, 'asasas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kas_anggota`
--

CREATE TABLE `tb_kas_anggota` (
  `kode_kas` bigint(20) NOT NULL,
  `kode_jeniskas` bigint(20) NOT NULL,
  `NIM` char(7) NOT NULL,
  `nominal` bigint(20) NOT NULL,
  `tanggal_bayar` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `metode` enum('tunai','transfer') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` bigint(20) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `email`, `password`) VALUES
(1, 'Ridho Arif', 'ridhoarif40@gmail.com', '$2y$10$LG5RbEH6SA6p2trmQeuoM.qGKK26rnas/BP3hesPJRDAkduzYDTdi'),
(2, 'guru', 'guru@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'ridho', 'ridhoarif40@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_anggota`
--
ALTER TABLE `tb_anggota`
  ADD PRIMARY KEY (`NIM`);

--
-- Indeks untuk tabel `tb_jeniskas`
--
ALTER TABLE `tb_jeniskas`
  ADD PRIMARY KEY (`kode_jeniskas`);

--
-- Indeks untuk tabel `tb_kas_anggota`
--
ALTER TABLE `tb_kas_anggota`
  ADD PRIMARY KEY (`kode_kas`),
  ADD KEY `NIM` (`NIM`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_jeniskas`
--
ALTER TABLE `tb_jeniskas`
  MODIFY `kode_jeniskas` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_kas_anggota`
--
ALTER TABLE `tb_kas_anggota`
  MODIFY `kode_kas` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_kas_anggota`
--
ALTER TABLE `tb_kas_anggota`
  ADD CONSTRAINT `tb_kas_anggota_ibfk_1` FOREIGN KEY (`NIM`) REFERENCES `tb_anggota` (`NIM`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_kas_anggota_ibfk_2` FOREIGN KEY (`kode_kas`) REFERENCES `tb_jeniskas` (`kode_jeniskas`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
