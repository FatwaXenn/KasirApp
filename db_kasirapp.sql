-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2024 at 06:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kasirapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `detail_id` int(11) NOT NULL,
  `kode_produk` varchar(15) DEFAULT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `penjualan_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`detail_id`, `kode_produk`, `nama_produk`, `harga`, `jumlah`, `penjualan_id`) VALUES
(71, 'K.002', 'Strawberry Lucky Sundae', 18000, 1, 36),
(72, 'K.001', 'Boba Sundae', 16000, 1, 36),
(73, 'K.038', 'Original Jasmine Tea ', 10000, 8, 37),
(74, 'K.002', 'Strawberry Lucky Sundae', 18000, 1, 37),
(75, 'K.011', 'Strawberry Smoothies With Ice Cream', 16000, 1, 38),
(76, 'K.019', 'Kiwi Smoothies ', 16000, 1, 38),
(77, 'K.002', 'Strawberry Lucky Sundae', 18000, 1, 39),
(78, 'K.002', 'Strawberry Lucky Sundae', 18000, 1, 40),
(79, 'K.015', 'Mix Sundae', 16000, 1, 41),
(80, 'K.038', 'Original Jasmine Tea ', 10000, 1, 41),
(81, 'K.005', 'Boba Shake', 16000, 3, 42),
(82, 'K.002', 'Strawberry Lucky Sundae', 18000, 1, 43),
(83, 'K.003', 'Chocolate Cookies Smoothies with Ice Cream', 16000, 1, 44),
(84, 'K.015', 'Mix Sundae', 16000, 1, 44),
(85, 'K.035', 'Pearl Milk Tea', 19000, 1, 44),
(86, 'K.003', 'Chocolate Cookies Smoothies with Ice Cream', 16000, 1, 45),
(87, 'K.003', 'Chocolate Cookies Smoothies with Ice Cream', 16000, 1, 46),
(88, 'K.046', 'Mocha Mi Shake', 16000, 1, 46),
(89, 'K.012', 'Mango Sundae', 16000, 1, 46),
(90, 'K.016', 'Strawberry Ice Cream ', 8000, 1, 46),
(91, 'K.015', 'Mix Sundae', 16000, 1, 46),
(92, 'K.022', 'Peach Tea Earl Grey Tea', 16000, 1, 46),
(93, 'K.002', 'Strawberry Lucky Sundae', 18000, 3, 47),
(94, 'K.014', 'Strawberry Sundae', 16000, 11, 47),
(95, 'K.001', 'Boba Sundae', 16000, 1, 48),
(96, 'K.001', 'Boba Sundae', 16000, 1, 48),
(97, 'K.001', 'Boba Sundae', 16000, 1, 48),
(98, 'K.002', 'Strawberry Lucky Sundae', 18000, 1, 49),
(99, 'K.002', 'Strawberry Lucky Sundae', 18000, 1, 49),
(100, 'K.001', 'Boba Sundae', 16000, 1, 49),
(101, 'K.002', 'Strawberry Lucky Sundae', 18000, 1, 49),
(102, 'K.001', 'Boba Sundae', 16000, 1, 49),
(103, 'K.001', 'Boba Sundae', 16000, 1, 49),
(118, 'K.002', 'Strawberry Lucky Sundae', 18000, 1, 50),
(119, 'K.001', 'Boba Sundae', 16000, 1, 51),
(120, 'K.001', 'Boba Sundae', 16000, 1, 51),
(121, 'K.002', 'Strawberry Lucky Sundae', 18000, 1, 51),
(122, 'K.002', 'Strawberry Lucky Sundae', 18000, 1, 51),
(123, 'K.003', 'Chocolate Cookies Smoothies with Ice Cream', 16000, 1, 51),
(124, 'K.003', 'Chocolate Cookies Smoothies with Ice Cream', 16000, 1, 51),
(125, 'K.004', 'Strawberry Mi-shake ', 16000, 1, 51),
(126, 'K.004', 'Strawberry Mi-shake ', 16000, 1, 51),
(127, 'K.005', 'Boba Shake', 16000, 1, 51),
(128, 'K.005', 'Boba Shake', 16000, 1, 51),
(129, 'K.001', 'Boba Sundae', 16000, 4, 55),
(130, 'K.001', 'Boba Sundae', 16000, 2, 56),
(131, 'K.002', 'Strawberry Lucky Sundae', 18000, 1, 57),
(132, 'K.002', 'Strawberry Lucky Sundae', 18000, 2, 58),
(133, 'K.023', 'Mango Oats Jasmine Tea', 16000, 3, 60),
(134, 'K.003', 'Chocolate Cookies Smoothies with Ice Cream', 16000, 1, 61),
(135, 'K.001', 'Boba Sundae', 16000, 1, 61),
(136, 'K.002', 'Strawberry Lucky Sundae', 18000, 1, 66),
(137, 'K.002', 'Strawberry Lucky Sundae', 18000, 1, 68),
(138, 'K.003', 'Chocolate Cookies Smoothies with Ice Cream', 16000, 1, 69),
(139, 'K.004', 'Strawberry Mi-shake ', 16000, 1, 69),
(140, 'K.002', 'Strawberry Lucky Sundae', 18000, 3, 76),
(141, 'K.001', 'Boba Sundae', 20000, 3, 78),
(142, 'K.001', 'Boba Sundae', 16000, 1, 79),
(143, 'K.002', 'Strawberry Lucky Sundae', 18000, 1, 83),
(144, 'K.002', 'Strawberry Lucky Sundae', 18000, 1, 85),
(145, 'K.001', 'Boba Sundae', 16000, 1, 86),
(146, 'K.001', 'Boba Sundae', 16000, 1, 87),
(147, 'K.001', 'Boba Sundae', 16000, 4, 88),
(148, 'K.002', 'Strawberry Lucky Sundae', 18000, 1, 88),
(149, 'K.003', 'Chocolate Cookies Smoothies with Ice Cream', 16000, 2, 88),
(150, 'K.004', 'Strawberry Mi-shake ', 16000, 1, 88),
(151, 'K.002', 'Strawberry Lucky Sundae', 18000, 1, 90),
(152, 'K.001', 'Boba Sundae', 16000, 1, 91),
(153, 'K.001', 'Boba Sundae', 16000, 1, 92),
(154, 'K.002', 'Strawberry Lucky Sundae', 18000, 1, 92),
(155, 'K.001', 'Boba Sundae', 16000, 1, 92),
(156, 'K.001', 'Boba Sundae', 16000, 4, 93),
(157, 'K.001', 'Boba Sundae', 16000, 2, 95),
(158, 'K.001', 'Boba Sundae', 16000, 3, 97),
(159, 'K.001', 'Boba Sundae', 16000, 1, 98),
(160, 'K.004', 'Strawberry Mi-shake ', 16000, 1, 98),
(161, 'K.001', 'Boba Sundae', 16000, 1, 99),
(162, 'K.001', 'Boba Sundae', 16000, 1, 100),
(163, 'K.001', 'Boba Sundae', 16000, 1, 101),
(164, 'K.009', 'Oreo Sundae', 16000, 2, 103),
(165, 'K.001', 'Boba Sundae', 16000, 1, 107),
(166, 'K.002', 'Strawberry Lucky Sundae', 18000, 2, 107),
(167, 'K.002', 'Strawberry Lucky Sundae', 18000, 1, 108),
(168, 'K.001', 'Boba Sundae', 16000, 1, 109),
(169, 'K.001', 'Boba Sundae', 16000, 1, 110),
(170, 'K.001', 'Boba Sundae', 16000, 1, 111),
(171, 'K.002', 'Strawberry Lucky Sundae', 18000, 1, 112),
(172, 'K.001', 'Boba Sundae', 16000, 1, 113),
(174, 'K.001', 'Boba Sundae', 16000, 2, 115),
(175, 'K.011', 'Strawberry Smoothies With Ice Cream', 16000, 1, 116),
(176, 'K.002', 'Strawberry Lucky Sundae', 18000, 1, 116),
(177, 'K.003', 'Chocolate Cookies Smoothies with Ice Cream', 16000, 1, 116),
(178, 'K.002', 'Strawberry Lucky Sundae', 18000, 1, 117),
(179, 'K.001', 'Boba Sundae', 16000, 1, 117);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `kode_pelanggan` varchar(15) DEFAULT NULL,
  `nama_pelanggan` varchar(30) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `kode_pelanggan`, `nama_pelanggan`, `alamat`, `no_hp`) VALUES
(3, 'P.001', 'dyah', 'Bojong Soang', '089126384012'),
(4, 'P.002', 'dwiii', 'kamun', '089976543318'),
(5, 'P.003', 'Fatwa', 'Sinarjati', '085427918528'),
(6, 'P.004', 'revi', 'kudang wangi', '0886543334'),
(7, 'P.005', 'Diva', 'Kamun', '088654325');

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `penjualan_id` int(11) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `bayar` int(11) DEFAULT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`penjualan_id`, `tanggal`, `total_harga`, `bayar`, `id_pelanggan`, `id_petugas`, `nama_petugas`) VALUES
(97, '2024-10-22 15:39:07', NULL, NULL, 3, 0, NULL),
(98, '2024-10-22 15:42:59', 32000, 50000, 3, 1, 'Fatwa'),
(99, '2024-10-22 16:04:22', NULL, NULL, NULL, 0, NULL),
(100, '2024-10-22 16:42:23', NULL, NULL, 5, 0, NULL),
(101, '2024-10-22 16:44:21', 16000, 20000, 4, 9, 'Dyah'),
(102, '2024-10-23 07:03:48', NULL, NULL, NULL, 0, NULL),
(103, '2024-10-23 07:20:25', 32000, 500000, 3, 1, 'Fatwa'),
(104, '2024-10-23 08:23:09', NULL, NULL, NULL, 0, NULL),
(105, '2024-10-23 09:07:40', NULL, NULL, NULL, 0, NULL),
(106, '2024-10-23 10:33:34', NULL, NULL, NULL, 0, NULL),
(107, '2024-10-23 10:34:43', 52000, 100000, 3, 1, 'Fatwa'),
(111, '2024-10-23 11:29:07', 16000, 20000, 3, 9, 'Dyah'),
(112, '2024-10-23 11:29:48', NULL, NULL, 4, 0, NULL),
(113, '2024-10-23 13:47:53', NULL, NULL, NULL, 0, NULL),
(114, '2024-10-31 15:17:54', NULL, NULL, NULL, 0, NULL),
(115, '2024-10-31 15:47:06', NULL, NULL, NULL, 0, NULL),
(116, '2024-11-01 10:58:25', 50000, 100000, 6, 1, 'Fatwa'),
(117, '2024-11-04 19:09:31', 34000, 50000, 7, 1, 'Fatwa');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `nama_petugas` varchar(35) DEFAULT NULL,
  `level` enum('admin','petugas') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(1, 'admin', '$2y$10$fLm0bttQzBRjSg/if/zO4.KegWHsYJ.C3E5aXkPzI/s32sV/Ub3l6', 'Fatwa', 'admin'),
(9, 'kasir', '$2y$10$muEEI6sCybaEZL3b7wWtRePjXtO7RkQ4hNbAV2fxlxLTiGTBmvXZO', 'Dyah', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `kode_produk` varchar(15) DEFAULT NULL,
  `nama_produk` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `kode_produk`, `nama_produk`, `harga`, `stok`) VALUES
(8, 'K.001', 'Boba Sundae', 16000, 50),
(9, 'K.002', 'Strawberry Lucky Sundae', 18000, 40),
(10, 'K.003', 'Chocolate Cookies Smoothies with Ice Cream', 16000, 40),
(11, 'K.004', 'Strawberry Mi-shake ', 16000, 50),
(12, 'K.005', 'Boba Shake', 16000, 60),
(13, 'K.006', 'Creamy Mango Boba ', 22000, 55),
(14, 'K.007', 'Berry Bean Sundae', 16000, 60),
(15, 'K.008', 'Chocolate Lucky Sundae', 16000, 47),
(16, 'K.009', 'Oreo Sundae', 16000, 54),
(17, 'K.010', 'Mango Smoothies With Ice Cream', 16000, 54),
(18, 'K.011', 'Strawberry Smoothies With Ice Cream', 16000, 47),
(19, 'K.012', 'Mango Sundae', 16000, 60),
(20, 'K.013', 'Sundae ', 16000, 55),
(21, 'K.014', 'Strawberry Sundae', 16000, 55),
(22, 'K.015', 'Mix Sundae', 16000, 54),
(23, 'K.016', 'Strawberry Ice Cream ', 8000, 40),
(24, 'K.017', 'Vanilla Ice Cream', 8000, 47),
(25, 'K.018', 'Mix Vanilla dan Strawberry Ice Cream', 8000, 60),
(26, 'K.019', 'Kiwi Smoothies ', 16000, 54),
(27, 'K.020', 'Ice Cream Jasmine Tea', 13000, 50),
(28, 'K.021', 'Ice Cream Earl Grey Tea', 13000, 49),
(29, 'K.022', 'Peach Tea Earl Grey Tea', 16000, 55),
(30, 'K.023', 'Mango Oats Jasmine Tea', 16000, 45),
(31, 'K.024', 'Hawaian fruit Tea', 22000, 60),
(32, 'K.025', 'Passion fruit Jasmine Tea ', 20000, 56),
(33, 'K.026', 'Lemon Jasmine Tea', 12000, 40),
(34, 'K.027', 'Lemon Earl Grey Tea', 12000, 65),
(35, 'K.028', 'Fresh Squeezed Lemonade ', 10000, 70),
(36, 'K.029', 'Kiwi Fruit Tea ', 15000, 50),
(37, 'K.030', 'Oats Milk Tea ', 19000, 54),
(38, 'K.031', 'Red Bean Milk Tea', 19000, 40),
(39, 'K.032', 'Coconut Jelly Milk Tea', 19000, 45),
(40, 'K.033', 'Milk Tea With 2 Toppings', 19000, 54),
(41, 'K.034', 'Brown Sugar Pearl Milk Tea ', 19000, 40),
(42, 'K.035', 'Pearl Milk Tea', 19000, 55),
(43, 'K.036', 'Supreme Mixed Milk Tea', 22000, 50),
(44, 'K.037', 'Earl Grey Tea with 2 Toppings ', 13000, 55),
(45, 'K.038', 'Original Jasmine Tea ', 10000, 47),
(46, 'K.039', 'Original Earl Grey Tea', 10000, 60),
(47, 'K.040', 'Jasmine Tea With 2 Toppings', 13000, 54),
(48, 'K.041', 'Lemon Coffee', 14000, 40),
(49, 'K.042', 'Americano Coffee', 12000, 54),
(50, 'K.043', 'Coffee Boba Sundae', 18000, 60),
(52, 'K.045', 'Coffee Smoothies With Ice Cream', 16000, 47),
(53, 'K.046', 'Mocha Mi Shake', 16000, 50),
(54, 'K.047', 'Coffee Ice Cream', 8000, 67);

-- --------------------------------------------------------

--
-- Table structure for table `tambah_stok`
--

CREATE TABLE `tambah_stok` (
  `tambah_id` int(11) NOT NULL,
  `tanggal` datetime DEFAULT NULL,
  `kode_produk` varchar(15) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tambah_stok`
--

INSERT INTO `tambah_stok` (`tambah_id`, `tanggal`, `kode_produk`, `jumlah`) VALUES
(1, '2024-01-31 08:39:02', 'M.001', 20),
(2, '2024-01-31 08:39:48', 'M.002', 10),
(3, '2024-01-31 08:41:23', 'M.003', 20),
(4, '2024-01-31 08:43:53', 'M.005', 10),
(5, '0000-00-00 00:00:00', 'k007', 6),
(6, '0000-00-00 00:00:00', 'K.001', 10),
(7, '0000-00-00 00:00:00', 'K.002', 10),
(8, '0000-00-00 00:00:00', 'K.002', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`detail_id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`penjualan_id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tambah_stok`
--
ALTER TABLE `tambah_stok`
  ADD PRIMARY KEY (`tambah_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  MODIFY `detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `penjualan_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `tambah_stok`
--
ALTER TABLE `tambah_stok`
  MODIFY `tambah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
