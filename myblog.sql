-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2017 at 02:35 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin Gaje');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) NOT NULL,
  `nama` text NOT NULL,
  `komentar` text NOT NULL,
  `id_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `nama`, `komentar`, `id_post`) VALUES
(1, 'paijo', 'pertamaks !!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posting`
--

CREATE TABLE `posting` (
  `id_post` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `gambar` text NOT NULL,
  `isi` text NOT NULL,
  `id_penulis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posting`
--

INSERT INTO `posting` (`id_post`, `judul`, `gambar`, `isi`, `id_penulis`) VALUES
(1, 'Embuh', 'alone_in_the_universe-wallpaper-1366x768.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad.', 1),
(2, 'Gempa Bla Bla', 'kokora.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Harum doloribus natus ea quidem nulla aliquid incidunt, id, illum aspernatur nam cupiditate architecto est possimus. Numquam at quae praesentium labore. Ad.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `posting`
--
ALTER TABLE `posting`
  ADD PRIMARY KEY (`id_post`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `posting`
--
ALTER TABLE `posting`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
