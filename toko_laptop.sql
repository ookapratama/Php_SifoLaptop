-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 09:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_laptop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fitur_laptop`
--

CREATE TABLE `fitur_laptop` (
  `id_fitur` int(11) NOT NULL,
  `jenis_fitur` varchar(50) NOT NULL,
  `nama_fitur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fitur_laptop`
--

INSERT INTO `fitur_laptop` (`id_fitur`, `jenis_fitur`, `nama_fitur`) VALUES
(1, 'RAM', '8GB RAM'),
(2, 'Processor', 'Intel Core I7 Gen. 10'),
(3, 'Storage', 'V-Gen HDD 512GB'),
(4, 'VGA', 'GeForce RTX 128GB'),
(5, 'Screen', '14 Inchi'),
(9, 'RAM', '16GB RAM'),
(10, 'Processor', 'Intel Core I5 Gen. 5'),
(11, 'Storage', 'SATA 512GB SSD'),
(12, 'RAM', '4 GB RAM'),
(13, 'Screen', '12 Inchi'),
(14, 'Screen', '10 Inchi');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_laptop`
--

CREATE TABLE `kategori_laptop` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_laptop`
--

INSERT INTO `kategori_laptop` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Laptop Gaming'),
(2, 'All in One'),
(7, 'Tablet Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `laptop`
--

CREATE TABLE `laptop` (
  `id_laptop` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `merk_laptop` varchar(100) NOT NULL,
  `no_serial` varchar(50) NOT NULL,
  `harga_laptop` varchar(30) NOT NULL,
  `ram_laptop` int(11) NOT NULL,
  `prosesor_laptop` int(11) NOT NULL,
  `storage_laptop` int(11) NOT NULL,
  `vga_laptop` int(11) NOT NULL,
  `screen_laptop` int(11) NOT NULL,
  `gambar_laptop` varchar(40) NOT NULL,
  `model_laptop` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `laptop`
--

INSERT INTO `laptop` (`id_laptop`, `kategori_id`, `merk_laptop`, `no_serial`, `harga_laptop`, `ram_laptop`, `prosesor_laptop`, `storage_laptop`, `vga_laptop`, `screen_laptop`, `gambar_laptop`, `model_laptop`) VALUES
(4, 2, 'Asus', '998AXS', 'Rp. 12.000.000', 1, 2, 3, 4, 5, '64d45ea807f03.png', 'Asus Vivobook 14'),
(5, 1, 'asdsa', 'kl;', 'Rp. 4.500.000', 1, 2, 3, 4, 5, '64d2739e1cb42.png', 'dfg'),
(6, 2, 'ad', 'oip', 'Rp. 560.000', 1, 2, 3, 4, 5, '64d2fc22a9e2a.png', 'dfg'),
(10, 2, 'sdf', 'sdf', 'Rp. 780.000', 1, 2, 3, 4, 5, '64d3d135499a1.png', 'fds');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fitur_laptop`
--
ALTER TABLE `fitur_laptop`
  ADD PRIMARY KEY (`id_fitur`);

--
-- Indexes for table `kategori_laptop`
--
ALTER TABLE `kategori_laptop`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id_laptop`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fitur_laptop`
--
ALTER TABLE `fitur_laptop`
  MODIFY `id_fitur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kategori_laptop`
--
ALTER TABLE `kategori_laptop`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id_laptop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
