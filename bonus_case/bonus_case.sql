-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 12:04 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bonus_case`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_instansi`
--

CREATE TABLE `tb_instansi` (
  `instansi_id` int(5) NOT NULL,
  `instansi_name` varchar(100) NOT NULL,
  `instansi_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_instansi`
--

INSERT INTO `tb_instansi` (`instansi_id`, `instansi_name`, `instansi_desc`) VALUES
(1, 'Akademi Komunitas Negeri Ponorogo', 'kampus cabang dari ITS (institude Teknologi Surabaya) hello'),
(2, 'ITB - bandung', 'Bandung'),
(3, 'Intitude teknologi Sepuluh November', 'Terletak di kota Pahlawan - surabaya. '),
(8, 'nama instansi', 'deskripsi disini'),
(9, 'tes data instansi', 'tes deskripsi'),
(10, 'tes data', 'hello deskripsi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa`
--

CREATE TABLE `tb_mahasiswa` (
  `mhs_id` int(5) NOT NULL,
  `mhs_nim` varchar(8) NOT NULL,
  `mhs_nama` varchar(50) NOT NULL,
  `mhs_angkatan` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa`
--

INSERT INTO `tb_mahasiswa` (`mhs_id`, `mhs_nim`, `mhs_nama`, `mhs_angkatan`) VALUES
(1, '20180001', 'Jono', '2018'),
(2, '20180002', 'Taufik', '2018'),
(3, '20180003', 'Maria', '2018'),
(4, '20190001', 'Sari', '2019'),
(5, '20190002', 'Bambang', '2019');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mahasiswa_nilai`
--

CREATE TABLE `tb_mahasiswa_nilai` (
  `mhs_nilai_id` int(5) NOT NULL,
  `mhs_id` int(5) NOT NULL,
  `mk_id` int(5) NOT NULL,
  `nilai` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_mahasiswa_nilai`
--

INSERT INTO `tb_mahasiswa_nilai` (`mhs_nilai_id`, `mhs_id`, `mk_id`, `nilai`) VALUES
(1, 1, 1, 70),
(2, 1, 2, 76),
(3, 2, 1, 82),
(4, 2, 2, 74),
(5, 4, 1, 78),
(6, 4, 2, 80),
(7, 5, 1, 60);

-- --------------------------------------------------------

--
-- Table structure for table `tb_matakuliah`
--

CREATE TABLE `tb_matakuliah` (
  `mk_id` int(5) NOT NULL,
  `mk_kode` varchar(5) NOT NULL,
  `mk_sks` int(5) NOT NULL,
  `mk_nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_matakuliah`
--

INSERT INTO `tb_matakuliah` (`mk_id`, `mk_kode`, `mk_sks`, `mk_nama`) VALUES
(1, 'MK202', 3, 'OOP'),
(2, 'MK303', 2, 'Basis Data');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` int(4) NOT NULL,
  `display_name` varchar(200) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `username`, `password`, `level`, `display_name`, `avatar`, `email`, `created_at`, `updated_at`) VALUES
(26, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1, 'Arif efendi, A.Ma', 'Arsitektur_Mesin_Von_Neumann.jpg', 'arifefendi304@gmail.com', '2018-06-05 11:28:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_roles`
--

CREATE TABLE `tb_user_roles` (
  `id` int(1) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user_roles`
--

INSERT INTO `tb_user_roles` (`id`, `name`) VALUES
(1, 'administrator'),
(2, 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_instansi`
--
ALTER TABLE `tb_instansi`
  ADD PRIMARY KEY (`instansi_id`);

--
-- Indexes for table `tb_mahasiswa`
--
ALTER TABLE `tb_mahasiswa`
  ADD PRIMARY KEY (`mhs_id`);

--
-- Indexes for table `tb_mahasiswa_nilai`
--
ALTER TABLE `tb_mahasiswa_nilai`
  ADD PRIMARY KEY (`mhs_nilai_id`),
  ADD KEY `mhs_id` (`mhs_id`),
  ADD KEY `mk_id` (`mk_id`);

--
-- Indexes for table `tb_matakuliah`
--
ALTER TABLE `tb_matakuliah`
  ADD PRIMARY KEY (`mk_id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user_roles`
--
ALTER TABLE `tb_user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_instansi`
--
ALTER TABLE `tb_instansi`
  MODIFY `instansi_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_mahasiswa_nilai`
--
ALTER TABLE `tb_mahasiswa_nilai`
  MODIFY `mhs_nilai_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_matakuliah`
--
ALTER TABLE `tb_matakuliah`
  MODIFY `mk_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tb_user_roles`
--
ALTER TABLE `tb_user_roles`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_mahasiswa_nilai`
--
ALTER TABLE `tb_mahasiswa_nilai`
  ADD CONSTRAINT `tb_mahasiswa_nilai_ibfk_1` FOREIGN KEY (`mhs_id`) REFERENCES `tb_mahasiswa` (`mhs_id`),
  ADD CONSTRAINT `tb_mahasiswa_nilai_ibfk_2` FOREIGN KEY (`mk_id`) REFERENCES `tb_matakuliah` (`mk_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
