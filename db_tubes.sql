-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 15, 2023 at 02:46 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `dokter_id` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `user_id`, `dokter_id`, `date`, `time`) VALUES
(31, 'magistra', 'dr. tirta cipeng', '2023-06-10', '19.00'),
(32, 'magistra', 'dr. tirta cipeng', '2023-06-10', '19.00'),
(33, 'magistra', 'dr. tirta cipeng', '2023-07-08', '19.00'),
(34, 'magistra', 'dr. tirta cipeng', '2023-07-08', '19.00'),
(35, 'magistra', 'dr. tirta cipeng', '2023-06-10', '19.00');

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE `dokter` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `spesialis` varchar(100) NOT NULL,
  `deskripsi` longtext NOT NULL,
  `harga` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id`, `nama`, `spesialis`, `deskripsi`, `harga`) VALUES
(4, 'dr. tirta cipeng', 'dokter umum', 'Sebagai lulusan Harvard, dokter ini telah mendapatkan pendidikan medis yang sangat mendalam dan berkualitas tinggi. Mereka telah mendalami berbagai bidang ilmu kedokteran, termasuk diagnosis, pengobatan, dan manajemen penyakit. Mereka juga dilatih dalam praktik medis berbasis bukti dan mendapatkan pemahaman yang kuat tentang riset medis dan teknologi terkini.', 300000),
(5, 'dr.lena sulena', 'dokter tht', 'Sebagai lulusan Harvard, dokter ini telah mendapatkan pendidikan medis yang sangat mendalam dan berkualitas tinggi. Mereka telah mendalami berbagai bidang ilmu kedokteran, termasuk diagnosis, pengobatan, dan manajemen penyakit. Mereka juga dilatih dalam praktik medis berbasis bukti dan mendapatkan pemahaman yang kuat tentang riset medis dan teknologi terkini.\r\n\r\n', 500000),
(6, 'dr. tono toni', 'dokter gigi', 'Sebagai lulusan Harvard, dokter ini telah mendapatkan pendidikan medis yang sangat mendalam dan berkualitas tinggi. Mereka telah mendalami berbagai bidang ilmu kedokteran, termasuk diagnosis, pengobatan, dan manajemen penyakit. Mereka juga dilatih dalam praktik medis berbasis bukti dan mendapatkan pemahaman yang kuat tentang riset medis dan teknologi terkini.\r\n\r\n', 400000),
(7, 'dr strange', 'organ dalam', 'ssjjjsjs', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'magistra', 'magistraagis@gmail.com', 'ea97c1040f4405b9c9466b60fdd9fdf4'),
(2, 'mikel', 'mikel@mikel.com', '8a8bc6f1f2e6762dae7780efd335c743');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `dokter_id` (`dokter_id`);

--
-- Indexes for table `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`username`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`dokter_id`) REFERENCES `dokter` (`nama`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
