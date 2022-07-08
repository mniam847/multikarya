-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2022 at 08:15 PM
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
-- Database: `ardian`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(191) NOT NULL,
  `name` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `value`, `description`) VALUES
(1, 'company', 'Multi Karya', 'Nama Perusahaan'),
(2, 'address', 'Jl. Moh. Yamin No.12, Banaran Barat, Bandarjo, Kec. Ungaran Bar., Kabupaten Semarang, Jawa Tengah 50511', 'Alamat Perusahaan'),
(3, 'telp', '(024)6924615', 'Telepon official perusahaan'),
(4, 'email', 'multikarya@gmail.com', 'Email Perusahaan'),
(5, 'foreword', 'Multi Karya adalah bidang usaha jasa yang berjalan pada usaha percetakan, layanan kami meliputi pembuatan iklan melalui baligo, spanduk, stiker, banner, dan lain-lain.', 'Kata pengantar'),
(6, 'cs', '6282223960591', 'nomer cs order'),
(7, 'vm', 'CV. Multi Karya didirikan pada sekitar tahun 1900an sebagai percetakan kecil membuka pintunya di Ungaran dengan tujuan yang sederhana dan jelas untuk menyediakan layanan pencetakan berkualitas tinggi di Semarang tentunya masih didaerah kabupaten.', 'visi misi');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'coba', 'coba@gmail.com', 'apa aja', 'semuanya apa aja boleh semngat trus');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(191) NOT NULL,
  `name` varchar(255) NOT NULL,
  `product` int(191) NOT NULL,
  `message` text NOT NULL,
  `date_input` varchar(191) NOT NULL,
  `dateline` varchar(255) NOT NULL,
  `status` int(191) NOT NULL,
  `price` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `name`, `product`, `message`, `date_input`, `dateline`, `status`, `price`) VALUES
(3, 'Customer 1', 2, 'Apa aja', '2022-07-07', '2022-07-08', 1, 100000),
(4, 'Customer 2', 30, 'segera dikirim', '2022-07-08', '2022-07-15', 2, 1000000),
(5, 'Customer 3', 9, 'Pengiriman aman', '2022-07-08', '2022-07-29', 0, 500000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `picture` varchar(128) NOT NULL,
  `describe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `price`, `picture`, `describe`) VALUES
(12, 'Undangan A', 'undangan', 10000, 'g1.jpeg', 'undangan 1 pieces'),
(13, 'Undangan B', 'undangan', 10000, 'g2.jpeg', 'undangan 1 pieces'),
(14, 'Undangan C', 'undangan', 9000, 'g3.jpeg', 'undangan 1 pcs'),
(15, 'Undangan D', 'undangan', 12000, 'g4.jpeg', 'undangan 1 pieces'),
(16, 'Undangan E', 'undangan', 11000, 'g5.jpeg', 'Undangan 1 pieces'),
(17, 'Undangan F', 'undangan', 10500, 'g6.jpeg', 'undangan 1 pieces'),
(18, 'kalender A', 'kalender', 50000, 'kalender1.jfif', 'kalender satuan'),
(19, 'kalender B', 'kalender', 60000, 'kalender2.jfif', 'kalender satuan'),
(20, 'kalender C', 'kalender', 25000, 'kalender3.jfif', 'kalender satuan'),
(21, 'Banner A', 'banner', 150000, 'baner1.jfif', 'banner grade A'),
(22, 'Banner B', 'banner', 120000, 'baner2.jfif', 'Banner Grade B'),
(23, 'Banner C', 'banner', 100000, 'baner3.jfif', 'Banner grade C');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(191) NOT NULL,
  `name` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `email` varchar(191) NOT NULL,
  `star` int(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `name`, `message`, `email`, `star`) VALUES
(1, 'customer 1', 'baik sekali', 'custom@gmail.com', 5),
(2, 'customer 99', 'Memuaskan sekali', 'custom99@gmail.com', 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` int(191) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `role`, `password`) VALUES
(1, 'adminmultikarya', 1, 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(191) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
