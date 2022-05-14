-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2022 pada 12.20
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul5`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(25) NOT NULL,
  `judul_buku` varchar(200) NOT NULL,
  `penulis` char(200) NOT NULL,
  `penerbit` varchar(200) NOT NULL,
  `tahun_terbit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `penulis`, `penerbit`, `tahun_terbit`) VALUES
(2, 'Odyssey', 'Homeros', 'global', '1981-03-13'),
(3, 'Dracula', 'Bram', 'global', '1897-05-26'),
(4, 'Bumi', 'Pramoedya', 'Hasta', '1980-08-25'),
(5, 'Overlord', 'Kugane Maruyama', 'Aniplex', '2016-06-11'),
(6, 'Classroom Of The Elite', 'Shougo Kinugasa', 'Shunsaku', '2015-08-10'),
(7, 'kisah kancil', 'udin', 'perpustakaan', '1897-05-26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(25) NOT NULL,
  `nama` char(200) NOT NULL,
  `nomor_member` varchar(150) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `tgl_mendaftar` date NOT NULL,
  `tgl_terakhir_bayar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama`, `nomor_member`, `alamat`, `tgl_mendaftar`, `tgl_terakhir_bayar`) VALUES
(3, 'Muhammad Asriannoor', '083141482508', '  Banjarmasin Komplek rahayu', '2022-05-13', '2022-05-13'),
(4, 'Dahyuniee', '0851543310', '  Banjarmasin Sungai Lulut', '2022-05-13', '2022-05-13'),
(7, 'Steve', '08511255507', '  Banjarmbaru, Loktabat', '2022-05-14', '2022-05-15'),
(8, 'Maharani', '081537295401', '  Malkon Temon, Banjarmasin', '2022-05-14', '2022-05-16'),
(9, 'Kitagawa Marin', '8177756401', '  Prefektur Kansai', '2022-05-14', '2022-05-20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(25) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `id_buku` int(25) NOT NULL,
  `id_member` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tgl_pinjam`, `tgl_kembali`, `id_buku`, `id_member`) VALUES
(5, '2022-05-14', '2022-05-14', 1, 1),
(6, '2022-05-14', '2022-05-14', 2, 2),
(11, '2022-05-15', '2022-05-15', 3, 3),
(12, '2022-05-16', '2022-05-16', 4, 4),
(14, '2022-05-14', '2022-05-15', 5, 5);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD UNIQUE KEY `id_buku` (`id_buku`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD UNIQUE KEY `id_peminjaman` (`id_peminjaman`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
