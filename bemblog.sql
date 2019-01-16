-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2018 at 11:04 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bemblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `konten` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `fk_users` int(11) NOT NULL,
  `fk_kementerian` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `tanggal`, `konten`, `gambar`, `fk_users`, `fk_kementerian`) VALUES
(1, '1', '0000-00-00', '1', 'default.png', 2, 1),
(2, '12', '0000-00-00', '1', 'logocoding5.png', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pesan` text NOT NULL,
  `fk_berita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `tanggal`, `nama`, `email`, `pesan`, `fk_berita`) VALUES
(1, '2018-11-17 14:18:25', 'Aldhan', 'aldansorry@gmail.com', 'Hallo', 2),
(2, '2018-11-17 14:24:48', '1', '1', '1', 2),
(3, '2018-11-17 14:24:54', '1', '1', '1', 2),
(4, '2018-11-17 14:25:50', '2', '2', '2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `kementerian`
--

CREATE TABLE `kementerian` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `sub_nama` varchar(20) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kementerian`
--

INSERT INTO `kementerian` (`id`, `nama`, `sub_nama`, `deskripsi`, `gambar`) VALUES
(1, 'KEMENTERIAN SEKRETARIS KABINET', 'KEMENSESKAB', 'SURAT MENYURAT', 'OK'),
(2, 'KEMENTERIAN KEUANGAN', 'KEU', 'keuangan', 'uang'),
(3, 'KEMENTERIAN DALAM NEGERI', 'KEMENDAGRI', 'DAGRI', 'DAGRI'),
(4, 'KEMENTERIAN KESEJAHTERAAN MAHASISWA', 'KEMENKESMA', 'KESMA', 'KESMA'),
(5, 'KEMENTERIAN LUAR NEGERI', 'KEMENLU', 'LU', 'LU'),
(6, 'KEMENTERIAN PEMUDA DAN OlAHRAGA', 'KEMENPORA', 'PORA', 'PORA'),
(7, 'KEMENTERIAN PENDIDIKAN RISET DAN TEKNOLOGI', 'KEMENDIKRISTEK', 'RISTEK', 'RSITEK'),
(8, 'KEMENTERIAN SOSIAL MASYARAKAT', 'KEMENSOSMAS', 'SOSMAS', 'SOSMAS'),
(9, 'KEMENTERIAN KOMUNIKASI DAN INFORMASI', 'KOMINFO', 'KOMINFO', 'KOMINFO'),
(10, 'KEMENTERIAN AGAMA', 'KEMENAG', 'MENAG', 'MENAG');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `nama` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id`, `nama`) VALUES
(1, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `programkerja`
--

CREATE TABLE `programkerja` (
  `id` int(11) NOT NULL,
  `judul` varchar(64) NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `programkerja`
--

INSERT INTO `programkerja` (`id`, `judul`, `tanggal`, `deskripsi`, `gambar`) VALUES
(1, '1', '2018-11-17', '1', 'logocoding.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `fk_level`) VALUES
(2, 'admin', 'admin123', '0192023a7bbd73250516f069df18b500', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users` (`fk_users`),
  ADD KEY `fk_kementerian` (`fk_kementerian`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_berita` (`fk_berita`);

--
-- Indexes for table `kementerian`
--
ALTER TABLE `kementerian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `programkerja`
--
ALTER TABLE `programkerja`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_level` (`fk_level`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kementerian`
--
ALTER TABLE `kementerian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `programkerja`
--
ALTER TABLE `programkerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`fk_level`) REFERENCES `level` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
