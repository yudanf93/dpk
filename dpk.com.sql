-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 08:12 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dpk.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(20) NOT NULL,
  `judul_artikel` varchar(150) NOT NULL,
  `gambar_artikel` varchar(250) NOT NULL,
  `expert_artikel` text NOT NULL,
  `detail_artikel` text NOT NULL,
  `id_user` int(20) NOT NULL,
  `id_kategori_artikel` int(20) NOT NULL,
  `slug_artikel` varchar(160) NOT NULL,
  `status_artikel` int(20) NOT NULL,
  `tgl_publish` date NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `gambar_artikel`, `expert_artikel`, `detail_artikel`, `id_user`, `id_kategori_artikel`, `slug_artikel`, `status_artikel`, `tgl_publish`, `created`) VALUES
(5, 'Pembahasan model pemberdayaan', 'c88ca39d863152405ad4633a0374f726.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali', 2, 2, 'pembahasan-model-pemberdayaan', 1, '2020-06-15', '2020-06-15 13:16:37');

-- --------------------------------------------------------

--
-- Table structure for table `cta_tracking`
--

CREATE TABLE `cta_tracking` (
  `id_cta_track` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `ip_address` varchar(150) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_artikel`
--

CREATE TABLE `kategori_artikel` (
  `id_kategori_artikel` int(20) NOT NULL,
  `nama_kategori_artikel` varchar(150) NOT NULL,
  `slug_kategori_artikel` varchar(160) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_artikel`
--

INSERT INTO `kategori_artikel` (`id_kategori_artikel`, `nama_kategori_artikel`, `slug_kategori_artikel`, `created`) VALUES
(1, 'keuangan', 'keuangan', '2020-06-15 07:43:35'),
(2, 'ekonomi', 'ekonomi', '2020-06-15 07:43:35'),
(3, 'Keuangan dalam pertumbuhan', 'keuangan-dalam-pertumbuhan', '2020-06-15 14:23:35');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_profesi`
--

CREATE TABLE `kategori_profesi` (
  `id_kategori_profesi` int(20) NOT NULL,
  `nama_kategori_profesi` varchar(150) NOT NULL,
  `slug_kategori_profesi` varchar(150) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_profesi`
--

INSERT INTO `kategori_profesi` (`id_kategori_profesi`, `nama_kategori_profesi`, `slug_kategori_profesi`, `created`) VALUES
(1, 'Buruh Lepas Harian', 'buruh-lepas-harian', '2020-06-15 16:30:02');

-- --------------------------------------------------------

--
-- Table structure for table `relation_profesi`
--

CREATE TABLE `relation_profesi` (
  `id_relation_profesi` int(20) NOT NULL,
  `id_artikel` int(20) NOT NULL,
  `id_sub_kategori_profesi` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relation_profesi`
--

INSERT INTO `relation_profesi` (`id_relation_profesi`, `id_artikel`, `id_sub_kategori_profesi`) VALUES
(2, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `search_tracking`
--

CREATE TABLE `search_tracking` (
  `id_search_tracking` int(20) NOT NULL,
  `id_kategori_profesi` int(20) NOT NULL,
  `id_sub_kategori_profesi` int(20) NOT NULL,
  `ip_address` int(20) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search_tracking`
--

INSERT INTO `search_tracking` (`id_search_tracking`, `id_kategori_profesi`, `id_sub_kategori_profesi`, `ip_address`, `kota`, `provinsi`, `created`) VALUES
(1, 1, 1, 192168101, 'Sleman', 'Jogja', '2020-06-15 17:30:09');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kategori_profesi`
--

CREATE TABLE `sub_kategori_profesi` (
  `id_sub_kategori_profesi` int(20) NOT NULL,
  `id_kategori_profesi` int(20) NOT NULL,
  `nama_sub_kategori_profesi` varchar(150) NOT NULL,
  `slug_sub_kategori_profesi` varchar(150) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_kategori_profesi`
--

INSERT INTO `sub_kategori_profesi` (`id_sub_kategori_profesi`, `id_kategori_profesi`, `nama_sub_kategori_profesi`, `slug_sub_kategori_profesi`, `created`) VALUES
(1, 1, 'beberapa banyak buruh', 'beberapa-banyak-buruh', '2020-06-15 17:08:00');

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

CREATE TABLE `tokens` (
  `id_token` int(20) NOT NULL,
  `token` varchar(150) NOT NULL,
  `id_user` int(20) NOT NULL,
  `status_token` int(20) NOT NULL,
  `cerated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(15) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `email_user` varchar(50) NOT NULL,
  `password_user` varchar(150) NOT NULL,
  `alamat_user` text NOT NULL,
  `kota_user` varchar(150) NOT NULL,
  `provinsi_user` varchar(150) NOT NULL,
  `nohp_user` varchar(50) NOT NULL,
  `file_user` text NOT NULL,
  `foto` varchar(200) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `status_user` int(20) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email_user`, `password_user`, `alamat_user`, `kota_user`, `provinsi_user`, `nohp_user`, `file_user`, `foto`, `akses_level`, `status_user`, `created`) VALUES
(2, 'Fadilah Yuda', 'fadilah@gmail.com', 'bba67c8419edbbce9660e1f5bb5c1caf', 'Kp. Pasirwaru', 'Garut', 'Jawa Barat', '089674555439', '<p>file yang didalam seperti apa</p>\r\n', '4d779baf6fed5fc383c47991cb7a3007.png', 'admin', 0, '2020-06-15 08:50:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_kategori_artikel` (`id_kategori_artikel`);

--
-- Indexes for table `cta_tracking`
--
ALTER TABLE `cta_tracking`
  ADD PRIMARY KEY (`id_cta_track`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  ADD PRIMARY KEY (`id_kategori_artikel`);

--
-- Indexes for table `kategori_profesi`
--
ALTER TABLE `kategori_profesi`
  ADD PRIMARY KEY (`id_kategori_profesi`);

--
-- Indexes for table `relation_profesi`
--
ALTER TABLE `relation_profesi`
  ADD PRIMARY KEY (`id_relation_profesi`),
  ADD KEY `id_artikel` (`id_artikel`),
  ADD KEY `id_sub_kategori_artikel` (`id_sub_kategori_profesi`);

--
-- Indexes for table `search_tracking`
--
ALTER TABLE `search_tracking`
  ADD PRIMARY KEY (`id_search_tracking`),
  ADD KEY `id_kategori_profesi` (`id_kategori_profesi`),
  ADD KEY `id_sub_kategori_profesi` (`id_sub_kategori_profesi`);

--
-- Indexes for table `sub_kategori_profesi`
--
ALTER TABLE `sub_kategori_profesi`
  ADD PRIMARY KEY (`id_sub_kategori_profesi`),
  ADD KEY `id_kategori_profesi` (`id_kategori_profesi`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id_token`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cta_tracking`
--
ALTER TABLE `cta_tracking`
  MODIFY `id_cta_track` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_artikel`
--
ALTER TABLE `kategori_artikel`
  MODIFY `id_kategori_artikel` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori_profesi`
--
ALTER TABLE `kategori_profesi`
  MODIFY `id_kategori_profesi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `relation_profesi`
--
ALTER TABLE `relation_profesi`
  MODIFY `id_relation_profesi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `search_tracking`
--
ALTER TABLE `search_tracking`
  MODIFY `id_search_tracking` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_kategori_profesi`
--
ALTER TABLE `sub_kategori_profesi`
  MODIFY `id_sub_kategori_profesi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id_token` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikel`
--
ALTER TABLE `artikel`
  ADD CONSTRAINT `artikel_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`),
  ADD CONSTRAINT `artikel_ibfk_2` FOREIGN KEY (`id_kategori_artikel`) REFERENCES `kategori_artikel` (`id_kategori_artikel`);

--
-- Constraints for table `cta_tracking`
--
ALTER TABLE `cta_tracking`
  ADD CONSTRAINT `cta_tracking_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `relation_profesi`
--
ALTER TABLE `relation_profesi`
  ADD CONSTRAINT `relation_profesi_ibfk_1` FOREIGN KEY (`id_artikel`) REFERENCES `artikel` (`id_artikel`),
  ADD CONSTRAINT `relation_profesi_ibfk_2` FOREIGN KEY (`id_sub_kategori_profesi`) REFERENCES `sub_kategori_profesi` (`id_sub_kategori_profesi`);

--
-- Constraints for table `search_tracking`
--
ALTER TABLE `search_tracking`
  ADD CONSTRAINT `search_tracking_ibfk_1` FOREIGN KEY (`id_kategori_profesi`) REFERENCES `kategori_profesi` (`id_kategori_profesi`),
  ADD CONSTRAINT `search_tracking_ibfk_2` FOREIGN KEY (`id_sub_kategori_profesi`) REFERENCES `sub_kategori_profesi` (`id_sub_kategori_profesi`);

--
-- Constraints for table `sub_kategori_profesi`
--
ALTER TABLE `sub_kategori_profesi`
  ADD CONSTRAINT `sub_kategori_profesi_ibfk_1` FOREIGN KEY (`id_kategori_profesi`) REFERENCES `kategori_profesi` (`id_kategori_profesi`);

--
-- Constraints for table `tokens`
--
ALTER TABLE `tokens`
  ADD CONSTRAINT `tokens_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
