-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2022 at 01:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matsuri_castle`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `id` int(5) NOT NULL,
  `no_nota` int(5) DEFAULT NULL,
  `kd_brg` int(5) DEFAULT NULL,
  `hrg_brg` decimal(12,2) DEFAULT NULL,
  `jml_brg` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `konsumen`
--

CREATE TABLE `konsumen` (
  `kd_konsumen` int(5) NOT NULL,
  `oauth_provider` enum('facebook','google','twitter','') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `oauth_uid` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_konsumen` varchar(35) DEFAULT '',
  `alamat` text DEFAULT '',
  `kodepos` varchar(5) DEFAULT '',
  `kota` varchar(35) DEFAULT '',
  `no_hp` varchar(13) DEFAULT '',
  `email` varchar(50) NOT NULL DEFAULT '',
  `username` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `foto` tinytext DEFAULT 'default.jpg',
  `group` int(1) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `konsumen`
--

INSERT INTO `konsumen` (`kd_konsumen`, `oauth_provider`, `oauth_uid`, `nm_konsumen`, `alamat`, `kodepos`, `kota`, `no_hp`, `email`, `username`, `password`, `foto`, `group`) VALUES
(1, '', '', 'alif fadhil w', 'Lamper Tengah', '50247', 'semarang', '0895', 'alif@gmail.com', 'alif', 'cc381ce13dd0bd2f5dd3ec67aac562ce', 'avatar-aliffadhilw.png', 1),
(2, '', '', 'azzahra rizky', 'lamper tengah', '50249', 'jakarta', '0895', 'zahra22@gmail.com', 'zahra', '512f98059cbab8fd0c1bef5e23874038', 'avatar-zahra.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `kd_barang` int(5) NOT NULL,
  `nm_barang` varchar(30) DEFAULT NULL,
  `satuan` varchar(15) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `stok` int(5) DEFAULT NULL,
  `stok_min` int(5) DEFAULT NULL,
  `gambar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`kd_barang`, `nm_barang`, `satuan`, `deskripsi`, `harga`, `harga_beli`, `stok`, `stok_min`, `gambar`) VALUES
(1, 'Sushi Roll Ikan ', 'Pcs', 'Sushi dengan roll ikan ', 30000, 20000, 47, 5, 'foto-Sushi_Roll_Ikan_.jpg'),
(27, 'Onigiri Ayam', 'pcs', 'Onigiri dengan isi ayam', 24000, 20000, 40, 1, 'foto-Onigiri_Ayam.jpg'),
(28, 'Onigiri Tuna', 'pcs', 'Onigiri dengan isi tuna', 20000, 15000, 30, 1, 'foto-Onigiri_Tuna.jpg'),
(29, 'Ramen Curry', 'pcs', 'Ramen dengan isi mie keriting', 25000, 20000, 30, 1, 'foto-Ramen_Curry.jpg'),
(30, 'Spicy Ramen With Chicken', 'pcs', 'spicy ramen with chicken', 23000, 20000, 30, 1, 'foto-Spicy_Ramen_With_Chicken.jpg'),
(31, 'Sushi Paket', 'box', 'sushi dengan beribu paket', 26000, 25000, 12, 1, 'foto-Sushi_Paket.jpg'),
(32, 'Sushi Tamago', 'pcs', 'sushi dengan ikan tamago', 35000, 30000, 40, 1, 'foto-Sushi_Tamago.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `no_nota` int(5) NOT NULL,
  `kd_konsumen` int(5) DEFAULT NULL,
  `tgl_jual` datetime NOT NULL DEFAULT current_timestamp(),
  `due_date` datetime DEFAULT NULL,
  `pembelian` decimal(12,2) DEFAULT NULL,
  `tujuan` text DEFAULT NULL,
  `kode_kab` int(11) DEFAULT NULL,
  `kurir` varchar(5) DEFAULT NULL,
  `expedisi` varchar(40) DEFAULT NULL,
  `wkt_pengiriman` varchar(20) NOT NULL,
  `ongkir` decimal(12,2) DEFAULT NULL,
  `total_biaya` decimal(12,2) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `status` enum('Belum dibayar','Sudah dibayar') NOT NULL DEFAULT 'Belum dibayar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `konsumen`
--
ALTER TABLE `konsumen`
  ADD PRIMARY KEY (`kd_konsumen`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`kd_barang`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`no_nota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `konsumen`
--
ALTER TABLE `konsumen`
  MODIFY `kd_konsumen` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `kd_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `no_nota` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
