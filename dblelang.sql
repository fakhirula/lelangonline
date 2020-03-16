-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 01:38 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.0.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dblelang`
--

-- --------------------------------------------------------

--
-- Table structure for table `history_lelang`
--

CREATE TABLE `history_lelang` (
  `id_history` int(11) NOT NULL,
  `id_lelang` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `penawaran_harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history_lelang`
--

INSERT INTO `history_lelang` (`id_history`, `id_lelang`, `id_barang`, `id_user`, `penawaran_harga`) VALUES
(1, 9, 8, 3, 34000),
(2, 9, 8, 2, 57000);

-- --------------------------------------------------------

--
-- Table structure for table `hubungi`
--

CREATE TABLE `hubungi` (
  `id_hubungi` int(11) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `telp` varchar(25) NOT NULL,
  `tgl` date NOT NULL,
  `perihal` varchar(11) NOT NULL,
  `masalah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `tgl` date NOT NULL,
  `harga_awal` int(20) NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `deskripsi_barang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `tgl`, `harga_awal`, `nama_file`, `deskripsi_barang`) VALUES
(7, 'Bibit Pisang jumboo', '2020-03-14', 8000, 'pisang.jpg', 'Bibit pisang jumbo segerr'),
(8, 'Bibit Markisa asem kecut', '2020-03-13', 12000, 'markisa.jpg', 'Bibit Markisa asem kecut manis pahit mantapp'),
(9, 'Bibit Delima merah', '2020-03-12', 12000, '664xauto-manfaat-delima-bagi-kesehatan-181106k.jpg', 'Bibit Delima merah kuning hijau dilangit yang biruuu'),
(10, 'Bibit Kiwi hutan hijau', '2020-03-15', 30000, 'chopped-kiwi-in-a-bowl-on-a-table.jpg', 'Bibit Kiwi hutan hijau tropis'),
(11, 'Bibit Apel merah dan hija', '2020-03-15', 20000, '3025311120.jpg', 'Bibit Apel merah dan hijau'),
(12, 'Bibit Kurwa Ajwa', '2020-03-15', 195000, 'unnamed.jpg', 'Bibit Kurwa Ajwa, ini dari arab asli!! jauhh harus bayar pajak, pesawat, hotel, ijin ke yang punya l'),
(13, 'Bibit Leci', '2020-03-05', 4000, '61d9cc10-5728-46be-921b-8ff1045929c9_43.jpg', 'Bibit Leci, luar warna merah dalem warna putih jadi jangan protes soal warna yee!! ini murah karna n'),
(14, 'Bibit Buah Khuldi', '2020-03-17', 125900000, 'Khuldi.jpg', 'Bibit Buah Khuldi, Langsung diambil dari syurga slurr, jdi wajar kalo harga gede yee.. harga/biji'),
(15, 'Bibit Aprikot', '2020-03-13', 35000, 'manfaat-buah-aprikot.jpg', 'Bibit Aprikot, warna kuning'),
(16, 'Bibit Buah Naga', '2020-03-17', 27000, 'dragon-fruit-many-1-2ce1cd398f011543b64ee35cce1c86dc.jpg', 'Bibit Buah Naga, ini buah bukan telor!!'),
(17, 'Bibit Nanas muda', '2020-03-11', 400000, 'nanas cover.jpg', 'Bibit Nanas muda slur, cocok buat yang anu ehe.. harga mahal semenjak valentine'),
(18, 'Bibit Stawberry', '2020-03-10', 30000, 'background-from-freshly-harvested-strawberries-picture-id464646860-800x450.jpg', 'Bibit Stawberry, merah, ada bintik bintik, asem'),
(19, 'Bibit Alpukat kaya rasa', '2020-02-28', 26000, 'alpukat.jpeg', 'Bibit Alpukat kaya rasa'),
(20, 'Bibit Melon Kuning', '2020-02-27', 15000, 'lmelon.jpg', 'Bibit Melon Kuning'),
(21, 'Bibit Lemon Manis', '0000-00-00', 12000, 'lmon.jpg', 'Bibit Lemon Manis warna orange'),
(22, 'Bibit Kelengkeng', '2020-02-28', 23000, 'lenkeng.jpg', 'Bibit Kelengkeng'),
(23, 'Bibit Semangka hijau afri', '2020-03-08', 34000, 'semnakat.jpg', 'Bibit Semangka hijau afrika'),
(24, 'Bibit Sunkiss asli Wuhan', '2020-02-14', 16000, 'sunkiss.jpg', 'Bibit Sunkiss asli Wuhan, bonus Covid-19');

-- --------------------------------------------------------

--
-- Table structure for table `tb_lelang`
--

CREATE TABLE `tb_lelang` (
  `id_lelang` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tgl_lelang` date NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `harga_akhir` int(20) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `id_petugas` int(11) NOT NULL,
  `status` enum('dibuka','ditutup') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_lelang`
--

INSERT INTO `tb_lelang` (`id_lelang`, `id_barang`, `tgl_lelang`, `nama_file`, `harga_akhir`, `id_user`, `id_petugas`, `status`) VALUES
(7, 9, '2020-03-15', '664xauto-manfaat-delima-bagi-kesehatan-181106k.jpg', 0, NULL, 2, 'dibuka'),
(8, 7, '2020-03-15', 'pisang.jpg', 0, NULL, 2, 'dibuka'),
(9, 8, '2020-03-15', 'markisa.jpg', 0, NULL, 2, 'dibuka'),
(10, 10, '2020-03-14', 'chopped-kiwi-in-a-bowl-on-a-table.jpg', 0, NULL, 2, 'ditutup'),
(11, 11, '2020-03-14', '3025311120.jpg', 0, NULL, 2, 'ditutup'),
(12, 12, '2020-03-14', 'unnamed.jpg', 0, NULL, 2, 'ditutup'),
(13, 13, '2020-03-14', '61d9cc10-5728-46be-921b-8ff1045929c9_43.jpg', 0, NULL, 2, 'ditutup'),
(14, 18, '2020-03-14', 'background-from-freshly-harvested-strawberries-picture-id464646860-800x450.jpg', 0, NULL, 2, 'ditutup'),
(15, 15, '2020-03-14', 'manfaat-buah-aprikot.jpg', 0, NULL, 2, 'ditutup'),
(16, 14, '2020-03-14', 'Khuldi.jpg', 0, NULL, 2, 'ditutup'),
(17, 21, '2020-03-14', 'lmon.jpg', 0, NULL, 2, 'ditutup');

-- --------------------------------------------------------

--
-- Table structure for table `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(11) NOT NULL,
  `level` enum('administrator','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_level`
--

INSERT INTO `tb_level` (`id_level`, `level`) VALUES
(1, 'administrator'),
(2, 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `tb_masyarakat`
--

CREATE TABLE `tb_masyarakat` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(500) NOT NULL,
  `telp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_masyarakat`
--

INSERT INTO `tb_masyarakat` (`id_user`, `nama_lengkap`, `username`, `password`, `telp`) VALUES
(1, 'MasyUser', 'masyarakat', 'masyarakat', '08123456789'),
(2, 'masyarakat2', 'mamah', 'mamahtausendiri', '081234566778'),
(3, 'masyarakat3', 'mmmasyarakat', 'mmmasyarakat3', '85223576');

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(500) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `nama_petugas`, `username`, `password`, `id_level`) VALUES
(1, 'Fakhirul', 'admin', 'admin', 1),
(2, 'Ziziphus Mauritiana', 'petugas', 'petugas', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history_lelang`
--
ALTER TABLE `history_lelang`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `id_lelang` (`id_lelang`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `hubungi`
--
ALTER TABLE `hubungi`
  ADD PRIMARY KEY (`id_hubungi`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_lelang`
--
ALTER TABLE `tb_lelang`
  ADD PRIMARY KEY (`id_lelang`),
  ADD KEY `id_barang` (`id_barang`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_masyarakat`
--
ALTER TABLE `tb_masyarakat`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`),
  ADD KEY `id_level` (`id_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history_lelang`
--
ALTER TABLE `history_lelang`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hubungi`
--
ALTER TABLE `hubungi`
  MODIFY `id_hubungi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_lelang`
--
ALTER TABLE `tb_lelang`
  MODIFY `id_lelang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_level`
--
ALTER TABLE `tb_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_masyarakat`
--
ALTER TABLE `tb_masyarakat`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history_lelang`
--
ALTER TABLE `history_lelang`
  ADD CONSTRAINT `history_lelang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_masyarakat` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `history_lelang_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `history_lelang_ibfk_3` FOREIGN KEY (`id_lelang`) REFERENCES `tb_lelang` (`id_lelang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_lelang`
--
ALTER TABLE `tb_lelang`
  ADD CONSTRAINT `tb_lelang_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `tb_masyarakat` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_lelang_ibfk_2` FOREIGN KEY (`id_barang`) REFERENCES `tb_barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_lelang_ibfk_3` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD CONSTRAINT `tb_petugas_ibfk_1` FOREIGN KEY (`id_level`) REFERENCES `tb_level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
