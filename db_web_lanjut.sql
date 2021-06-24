-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jan 2021 pada 08.14
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web_lanjut`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `id` int(11) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `jurusan` enum('D3 Sistem Informasi','S1 Ilmu Komputer','S1 Desain Komunikasi Visual','S1 Teknologi Informasi') NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`id`, `id_jurusan`, `jurusan`, `harga`) VALUES
(1, 1, 'D3 Sistem Informasi', '2850000'),
(2, 2, 'S1 Ilmu Komputer', '5800000'),
(3, 3, 'S1 Desain Komunikasi Visual', '4500000'),
(4, 4, 'S1 Teknologi Informasi', '5300000');

-- --------------------------------------------------------

--
-- Struktur dari tabel `maba`
--

CREATE TABLE `maba` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jenisKelamin` enum('Laki-Laki','Perempuan','','') NOT NULL,
  `alamat` text NOT NULL,
  `tanggal` varchar(64) NOT NULL,
  `noHp` varchar(20) NOT NULL,
  `jurusan` varchar(255) NOT NULL,
  `id_jurusan` int(11) NOT NULL,
  `confirm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `maba`
--

INSERT INTO `maba` (`id`, `id_user`, `nama`, `jenisKelamin`, `alamat`, `tanggal`, `noHp`, `jurusan`, `id_jurusan`, `confirm`) VALUES
(20, 19, 'qwerty', 'Laki-Laki', 'bima', '01/12/2021', '0987654', 'D3 Sistem Informasi', 1, 1),
(22, 20, 'asdfg', 'Perempuan', 'Bima', '01/12/2021', '12345', 'S1 Desain Visual', 3, 0),
(23, 21, 'bnm', 'Laki-Laki', 'bima', '01/20/2021', '1234567', 'D3 Sistem Informasi', 1, 1),
(24, 22, 'Away From Keyboard', 'Laki-Laki', 'Cakranegara', '06/22/2001', '09876543', 'S1 Ilmu Komputer', 2, 1),
(26, 23, 'Rasa', 'Laki-Laki', 'Rasalewi', '02/02/2005', '0987654', 'D3 Sistem Informasi', 1, 1),
(27, 24, 'Cmiiw', 'Laki-Laki', 'Ntb', '01/31/2001', '9876543', 'D3 Sistem Informasi', 1, 1),
(28, 25, 'saya', 'Laki-Laki', 'Mataram', '05/03/2003', '09876543', 'S1 Teknologi Informasi', 4, 1),
(29, 0, 'Deni', 'Perempuan', 'Bima', '04/05/2001', '0987654', 'S1 Desain Komunikasi Visual', 3, 1),
(30, 31, 'Eniiiii', 'Perempuan', 'Bima', '04/14/2000', '879787563342', 'S1 Ilmu Komputer', 2, 1),
(31, 27, 'Naya', 'Perempuan', '1234567', '05/03/2003', '09876543', 'S1 Desain Komunikasi Visual', 3, 1),
(32, 32, 'Gino', 'Perempuan', 'Bima', '04/09/2003', '0987654', 'S1 Teknologi Informasi', 4, 0),
(33, 38, 'Agil KW', 'Laki-Laki', 'Bima', '01/29/2002', '0987654', 'S1 Teknologi Informasi', 4, 1),
(34, 30, 'Egi Sdf', 'Laki-Laki', 'Mataram', '05/23/2002', '436346', 'S1 Desain Komunikasi Visual', 3, 1),
(35, 29, 'Bayangan', 'Laki-Laki', 'Mataram', '06/15/1999', '987654', 'S1 Ilmu Komputer', 2, 1),
(36, 28, 'Aku adalah', 'Laki-Laki', 'Cakranegara', '03/17/2005', '0987654', 'S1 Teknologi Informasi', 4, 1),
(37, 0, 'a6x', 'Laki-Laki', 'Mataram', '06/12/2002', '09876543', 'S1 Ilmu Komputer', 2, 0),
(38, 41, 'Jihan', 'Laki-Laki', 'Karang Jasi', '10/18/2001', '0987654', 'S1 Teknologi Informasi', 4, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `ID` int(30) NOT NULL,
  `NIM` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`ID`, `NIM`, `nama`, `alamat`) VALUES
(32, 100500900, 'Killua ', 'Konoha'),
(35, 1901050024, 'Andrian', 'Rasalewi'),
(36, 2005672003, 'Nezuko', 'Greed Island'),
(37, 11223344, 'Sasuke', 'Konoha'),
(39, 33990033, 'Eliza', 'Britania'),
(65, 56776454, 'qwfqwf', 'fqwfqwfq'),
(66, 432125, 'sfaff', 'asfasf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `phplatihan`
--

CREATE TABLE `phplatihan` (
  `id` int(11) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Genre` varchar(255) NOT NULL,
  `Penulis` varchar(255) NOT NULL,
  `TahunRilis` varchar(255) NOT NULL,
  `Gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `phplatihan`
--

INSERT INTO `phplatihan` (`id`, `Judul`, `Genre`, `Penulis`, `TahunRilis`, `Gambar`) VALUES
(64, 'One Punch Man', 'Fighter', 'GK TAU', '2015', '60029556abf69.jpg'),
(65, 'Death Note', 'Fantasi', 'GK TAU', '2010', '5fe355ca0498e.png'),
(66, 'Nanatsu No Taizai ', 'Petualangan', 'GK TAU', '2015', '5fe355dd0f1df.png'),
(67, 'Naruto', 'Aksi', 'Masashi Kishimoto', '1997', '5fe355eb02dc5.png'),
(68, 'Bleach', 'Aksi', 'Mito', '2001', '5fe355f8ea033.png'),
(72, 'dadw', 'wdad', 'wdadaw', 'dawwdaw', '5fe4615b39607.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `prauts`
--

CREATE TABLE `prauts` (
  `id` int(11) NOT NULL,
  `Judul` varchar(255) NOT NULL,
  `Genre` varchar(255) NOT NULL,
  `Penulis` varchar(255) NOT NULL,
  `TahunRilis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prauts`
--

INSERT INTO `prauts` (`id`, `Judul`, `Genre`, `Penulis`, `TahunRilis`) VALUES
(1, 'Hunter x Hunter', 'Aksi', 'Yoshihiro Togashi', '1998'),
(3, 'Naruto', 'Petualangan', 'Masashi Kishimoto', '1995'),
(4, 'Bleach', 'Fighter', 'Tite Kubo', '2001'),
(6, 'One Punch Man', 'Fighter', 'GK TAU', '2001'),
(7, 'Death Note', 'Fantasi', 'GK TAU juga', '2006'),
(8, 'Attack On Titan', 'Fighter', 'GK TAU', '2012'),
(13, 'qwdqw', 'dqwwdqw', 'dqwwdqwdd', '2001'),
(14, 'wdqd', 'dwwdqwdqw', 'qdqwdqwd', '1998'),
(15, 'dqwd', 'dqwdqwd', 'qwwdq', '2001'),
(16, 'Akuy', 'asdasd', 'adasdasd', '2001'),
(17, 'Andrian00000', 'efwefwef', 'wfwefweff', 'D3 Sistem Informasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_b`
--

CREATE TABLE `table_b` (
  `id_024` int(11) NOT NULL,
  `merek` varchar(10) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `table_b`
--

INSERT INTO `table_b` (`id_024`, `merek`, `jenis`, `stok`) VALUES
(1, 'yamaha', 'motoer', 0),
(2, 'honda', 'motor', 2),
(3, 'suzuki', 'mobil', 4),
(4, 'honda', 'motor', 2),
(5, 'suzuki', 'mobil', 4),
(6, 'Toyota', 'Mobil', 20),
(7, 'Suzuki', 'Mobil', 16),
(8, 'Msf', 'fdsf', 24),
(9, 'fdgf', 'dsgjjh', 25);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `kontak` varchar(100) NOT NULL,
  `HakAkses` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `kontak`, `HakAkses`, `status`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', '', 'admin', 0),
(2, 'operator', '202cb962ac59075b964b07152d234b70', '', 'operator', 0),
(7, 'qwe', '202cb962ac59075b964b07152d234b70', '', 'maba', 1),
(18, 'cvb', '202cb962ac59075b964b07152d234b70', '', 'maba', 1),
(19, 'zxc', '202cb962ac59075b964b07152d234b70', '', 'maba', 1),
(20, 'dfg', '202cb962ac59075b964b07152d234b70', '', 'maba', 1),
(21, 'bnm', '202cb962ac59075b964b07152d234b70', '', 'maba', 1),
(22, 'Afk', '202cb962ac59075b964b07152d234b70', '', 'maba', 1),
(23, 'Rasa', '202cb962ac59075b964b07152d234b70', '', 'maba', 1),
(24, 'hjk', '202cb962ac59075b964b07152d234b70', '', 'maba', 1),
(25, 'saya', '202cb962ac59075b964b07152d234b70', '', 'maba', 1),
(26, 'Cimen12', '202cb962ac59075b964b07152d234b70', '082340558905', 'maba', 0),
(27, 'Naya12', '202cb962ac59075b964b07152d234b70', '98765432', 'maba', 1),
(28, 'Aku12', '202cb962ac59075b964b07152d234b70', '876543', 'maba', 1),
(29, 'baya12', '202cb962ac59075b964b07152d234b70', '324567', 'maba', 1),
(30, 'egi12', '202cb962ac59075b964b07152d234b70', '2345', 'maba', 1),
(31, 'eni', '202cb962ac59075b964b07152d234b70', '23456544', 'maba', 1),
(32, 'gino', '202cb962ac59075b964b07152d234b70', '343567', 'maba', 1),
(38, 'agi', '202cb962ac59075b964b07152d234b70', '2324432', 'maba', 1),
(39, 'ija', '202cb962ac59075b964b07152d234b70', '87654324', 'maba', 0),
(40, 'sani', '202cb962ac59075b964b07152d234b70', '7546322', 'maba', 0),
(41, 'jihan', '202cb962ac59075b964b07152d234b70', '7654322', 'maba', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `userlogin`
--

CREATE TABLE `userlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `userlogin`
--

INSERT INTO `userlogin` (`id`, `username`, `password`) VALUES
(3, 'aku', '$2y$10$5rQ7dvQrXEtIdumge34dMuSjAEgW/Xe0bMaz/ITabJQ5DSCIMq7nW'),
(4, 'andrian17', '$2y$10$FkuuVRL.9hUR5VrLA0Cgr.TxcFLgypP1O/aHhEr.SIb6iEanfzoI2'),
(5, 'cimen', '$2y$10$tyyojt8lPZtD.ZuzKu8Vu.k/mkE0nUpYpGZmKPCK8OkhN8X49zHvm');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `maba`
--
ALTER TABLE `maba`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `phplatihan`
--
ALTER TABLE `phplatihan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `prauts`
--
ALTER TABLE `prauts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `table_b`
--
ALTER TABLE `table_b`
  ADD PRIMARY KEY (`id_024`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `userlogin`
--
ALTER TABLE `userlogin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `maba`
--
ALTER TABLE `maba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT untuk tabel `phplatihan`
--
ALTER TABLE `phplatihan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT untuk tabel `prauts`
--
ALTER TABLE `prauts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `table_b`
--
ALTER TABLE `table_b`
  MODIFY `id_024` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `userlogin`
--
ALTER TABLE `userlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
