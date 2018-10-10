-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2018 at 07:49 AM
-- Server version: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bb`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategorithread`
--

CREATE TABLE IF NOT EXISTS `kategorithread` (
`id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `urutan` int(11) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `kategorithread`
--

INSERT INTO `kategorithread` (`id`, `nama`, `urutan`) VALUES
(1, 'Teknik dan Ilmu Komputer', 1),
(2, 'Ekonomi dan Bisnis', 2),
(3, 'Sastra', 3),
(4, 'Ilmu Sosial dan Pemerintahan', 4),
(5, 'Desain', 5),
(6, 'Hukum', 6);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
`id` int(11) NOT NULL,
  `idforum` int(11) DEFAULT NULL,
  `idthread` int(11) DEFAULT NULL,
  `user` int(11) DEFAULT NULL,
  `isi` text,
  `tanggal` date DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `idforum`, `idthread`, `user`, `isi`, `tanggal`) VALUES
(23, NULL, 29, 0, 'komentarrrrrrr', '2018-10-05'),
(21, NULL, 23, 5, 'komen wew', '2018-10-04'),
(22, NULL, 29, 0, 'komentarrrrrrr', '2018-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE IF NOT EXISTS `timeline` (
`id` int(11) NOT NULL,
  `idforum` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `tanggal` date DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `datementor` date NOT NULL,
  `deadline` date NOT NULL,
  `feemin` varchar(50) NOT NULL,
  `feemax` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`id`, `idforum`, `judul`, `isi`, `tanggal`, `userid`, `type`, `matkul`, `datementor`, `deadline`, `feemin`, `feemax`) VALUES
(25, 0, 'pinter', 'desk', NULL, 2, 'Jasa Mengajar', 'algo', '2018-10-17', '2018-10-17', '10000', '10000'),
(24, 0, 'mouse', 'desk', NULL, 2, 'Jasa Mengajar', 'wew', '2018-10-11', '2018-10-12', '10000', '90000'),
(23, 0, 'wew', 'desk wew', NULL, 5, 'Jasa Mengajar', 'wew', '2018-09-18', '2018-10-09', '10000', '10000'),
(26, 0, 'hukum1', 'desk hukum 1', NULL, 0, 'Makalah/Laporan', 'mtkl hukum 1', '2018-10-08', '2018-10-15', '10000', '10000'),
(27, 0, 'hukum1', 'desk hukum 1', NULL, 0, 'Makalah/Laporan', 'mtkl hukum 1', '2018-10-08', '2018-10-15', '10000', '10000'),
(28, 0, 'atu', 'atu des', NULL, 2, 'Program/Aplikasi Software', 'atu', '2018-10-26', '2018-10-15', '10000', '1'),
(30, 2, 'judul eko x', 'desk eko x', NULL, 2, 'Desain/Animasi', 'statistik x', '2018-10-19', '2018-10-15', '10000', '10000'),
(31, 2, 'judul eko x', 'desk eko x', NULL, 2, 'Desain/Animasi', 'statistik x', '2018-10-19', '2018-10-15', '10000', '10000'),
(32, 3, 'sastra x', 'desk sastra x', NULL, 2, 'Desain/Animasi', 'sastra x', '2018-10-24', '2018-10-28', '10000', '10000'),
(33, 5, 'pinter desain', 'desk desain x', NULL, 2, 'Desain/Animasi', 'desain x', '2018-10-25', '2018-10-26', '10000', '3'),
(35, 4, 'fisip x', 'desk fisip x', NULL, 2, 'Desain/Animasi', 'fisip xx', '2018-10-18', '2018-10-21', '10000', '90000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nim` int(10) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tlp` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `nim`, `jurusan`, `email`, `tlp`) VALUES
(2, 'meissa', 'meissa', 'meissa', 10516652, 'Sistem Informasi', 'Meissaeka66@gmail.com', '085797953068'),
(1, 'admin', 'admin', 'admin1', 10516001, 'Sistem Informasi', 'admin@gmail.com', '08123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategorithread`
--
ALTER TABLE `kategorithread`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
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
-- AUTO_INCREMENT for table `kategorithread`
--
ALTER TABLE `kategorithread`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
