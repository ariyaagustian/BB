-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2018 at 06:48 AM
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
-- Table structure for table `detail_timeline`
--

CREATE TABLE IF NOT EXISTS `detail_timeline` (
  `id` int(50) NOT NULL,
  `id_timeline` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_timeline`
--

INSERT INTO `detail_timeline` (`id`, `id_timeline`) VALUES
(0, 0),
(0, 0),
(0, 0),
(0, 0),
(0, 0),
(0, 0),
(0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE IF NOT EXISTS `komentar` (
`id_komentar` int(11) NOT NULL,
  `id_timeline` int(11) DEFAULT NULL,
  `id_thread` int(11) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `isi` text,
  `tanggal` date DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_timeline`, `id_thread`, `id`, `isi`, `tanggal`) VALUES
(30, NULL, NULL, 20, 'komen hukum 22', '2018-10-17'),
(29, NULL, NULL, 20, 'komen ekonomih', '2018-10-17'),
(28, NULL, NULL, 20, 'komen judul sekian tik', '2018-10-17'),
(27, 48, NULL, 20, 'komen fisip 3', '2018-10-16'),
(26, 48, NULL, 20, 'koemnatr fisip 2', '2018-10-16'),
(25, 48, NULL, 20, 'komentar fisip 1', '2018-10-16'),
(24, 46, NULL, 20, 'komentar di juudl hukum 2', '2018-10-16'),
(31, NULL, NULL, 20, 'komen hukum 22', '2018-10-17'),
(32, 4, NULL, 20, 'komen di fisip 1 nih', '2018-10-17'),
(33, 3, NULL, 20, 'komen di sastra 1 nich', '2018-10-17'),
(34, 3, NULL, 20, 'komen sastra cobicobi', '2018-10-17'),
(35, 54, 3, 20, 'komen di sastra cubacuba', '2018-10-17'),
(36, 54, 3, 20, 'komen cubacubah', '2018-10-17');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE IF NOT EXISTS `rating` (
`id_rating` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `b5` int(10) NOT NULL,
  `b4` int(10) NOT NULL,
  `b3` int(10) NOT NULL,
  `b2` int(10) NOT NULL,
  `b1` int(10) NOT NULL,
  `bulan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE IF NOT EXISTS `thread` (
`id_thread` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`id_thread`, `nama`) VALUES
(1, 'Teknik dan Ilmu Komputer'),
(2, 'Ekonomi dan Bisnis'),
(3, 'Sastra'),
(4, 'Ilmu Sosial dan Pemerintahan'),
(5, 'Desain'),
(6, 'Hukum');

-- --------------------------------------------------------

--
-- Table structure for table `timeline`
--

CREATE TABLE IF NOT EXISTS `timeline` (
`id_timeline` int(11) NOT NULL,
  `id_thread` int(11) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `isi` text,
  `tanggal` date DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  `type` varchar(50) NOT NULL,
  `matkul` varchar(50) NOT NULL,
  `datementor` date NOT NULL,
  `deadline` date NOT NULL,
  `feemin` varchar(50) NOT NULL,
  `feemax` varchar(50) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `timeline`
--

INSERT INTO `timeline` (`id_timeline`, `id_thread`, `judul`, `isi`, `tanggal`, `id`, `type`, `matkul`, `datementor`, `deadline`, `feemin`, `feemax`) VALUES
(49, 3, 'judul sastra 1', 'desk sastra 1', NULL, 20, 'Program/Aplikasi Software', 'matkul sastra 1', '2018-10-16', '2018-10-22', '10000', '9000'),
(48, 4, 'judul fisip 1', 'deskripsi fisip 1', NULL, 20, 'Jasa Mengajar', 'matkul fisip 1', '2018-10-16', '2018-10-03', '10000', '99990000'),
(47, 2, 'ekonomi 1', 'desk eko 1', NULL, 20, 'Tugas Tulis', 'matkul ekonomi 1', '2018-10-13', '2018-10-11', '10000', '40000'),
(45, 1, 'judul tik 1', 'deksripsi tik 1', NULL, NULL, 'Desain/Animasi', 'matkul tik 1', '2018-10-18', '2018-10-10', '10000', '990000'),
(46, 6, 'judul hukum 2', 'desk hukum 2', NULL, NULL, 'Program/Aplikasi Software', 'hukum 2', '2018-10-10', '2018-10-20', '10000', '20000'),
(44, 6, 'judul 5', 'deskripsi', NULL, 20, 'Program/Aplikasi Software', 'algo', '2018-10-15', '2018-10-17', '10000', '90000'),
(42, NULL, 'judul 4', 'deksp 4', NULL, 20, 'Makalah/Laporan', 'matkul 4', '2018-10-27', '2018-10-22', '10000', '50000'),
(43, 0, 'judul 5', 'deksp', NULL, 20, 'Tugas Tulis', 'pti', '2018-10-11', '2018-10-17', '10000', '9990000'),
(41, NULL, 'judul 1 ekonomi', 'deksripsi ekonomi 1', NULL, 20, 'Makalah/Laporan', 'ekonomi 1', '2018-10-24', '2018-10-09', '10000', '90000'),
(50, 1, 'judul sekian tik', 'desk tik sekian', '2018-10-16', 20, 'Jasa Mengajar', 'tik', '2018-10-25', '2018-10-20', '10000', '1110000'),
(51, 0, 'juudl di sastra nich', 'deskripsi sastra nich', '2018-10-17', 20, 'Jasa Mengajar', 'sastra inggris', '2018-10-25', '2018-10-31', '10000', '9990000'),
(52, 0, 'judul 2 sastra', 'desk sastra 2', '2018-10-17', 20, 'Desain/Animasi', 'sastra inggris', '2018-10-20', '2018-10-14', '10000', '770000'),
(53, 1, 'judul tik cobacoba', 'desk tik cobacoba', '2018-10-17', 20, 'other', 'tiktik', '2018-10-17', '2018-10-31', '10000', '40000'),
(54, 3, 'sastra cobacoba', 'desk sastra cobacoba', '2018-10-17', 20, 'Desain/Animasi', 'sastra cobacoba', '2018-09-30', '2018-10-22', '10000', '70000');

-- --------------------------------------------------------

--
-- Table structure for table `upload_img`
--

CREATE TABLE IF NOT EXISTS `upload_img` (
`id` int(3) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `tlp` varchar(50) NOT NULL,
  `level` int(2) NOT NULL,
  `status` int(5) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `nim`, `jurusan`, `email`, `tlp`, `level`, `status`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 10516001, 'Sistem Informasi', 'admin@gmail.com', '08123456789', 1, 1),
(11, 'tutun', 'tutun', 'd41d8cd98f00b204e9800998ecf8427e', 10516002, 'teknik informatika', 'meissaeka66@gmail.com', '085797953068', 2, 1),
(16, 'nani', 'nani', 'nani', 10516099, 'teknik informatika', 'eka@gmail.com', '085797953060', 2, 1),
(20, 'meissa eka wardana', 'meissa', '5188eff40298b57c170969c0db6b9753', 10516652, 'teknik informatika', 'meissaeka66@gmail.com', '085797953068', 2, 1),
(21, 'wahyudin', 'wahyudin', '3e5ba783a905993007f8d490e0daf863', 10513652, 'Hubungan Internasional', 'wahyudin@gmail.com', '08579795090', 0, 0),
(22, 'saeful', 'saeful', '781bf3e75a4de897247c1b4cb80d92d8', 10516009, 'Hubungan Internasional', 'saeful@gmail.com', '08123456789', 1, 1),
(23, 'nursal', 'nursal', 'cba5d53ebcfec0a85eef1d1bfe4359d4', 10516652, 'Teknik Elektro', 'meissaeka66@gmail.com', '085797953069', 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
 ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
 ADD PRIMARY KEY (`id_rating`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
 ADD PRIMARY KEY (`id_thread`);

--
-- Indexes for table `timeline`
--
ALTER TABLE `timeline`
 ADD PRIMARY KEY (`id_timeline`);

--
-- Indexes for table `upload_img`
--
ALTER TABLE `upload_img`
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
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
MODIFY `id_rating` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
MODIFY `id_thread` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `timeline`
--
ALTER TABLE `timeline`
MODIFY `id_timeline` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `upload_img`
--
ALTER TABLE `upload_img`
MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
