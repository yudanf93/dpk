-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2020 at 04:23 PM
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
(5, 'Pembahasan model pemberdayaan', '280ffe6126a67070ea9b5b2d3f0c4f75.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna ali</p>\r\n', 3, 2, 'pembahasan-model-pemberdayaan', 1, '2020-06-15', '2020-06-17 16:30:57'),
(6, 'Lorem IPsum', '390df831a456cb1c7bd7a9493f0c7ce7.png', 'Lorem IPsumLorem IPsumLorem IPsum', '<p>Lorem IPsumLorem IPsum</p>\r\n', 2, 3, 'lorem-ipsum', 0, '2020-06-25', '2020-06-17 16:31:09'),
(9, 'Makan Cokolatos', 'bc3afae6da598017527b93c48ba33e12.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. ', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p><img alt=\"\" src=\"https://static.toiimg.com/thumb/72975551.cms?width=680&amp;height=512&amp;imgsize=881753\" style=\"height:512px; width:680px\" /></p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', 3, 3, 'makan-cokolatos', 1, '2020-06-20', '2020-06-19 16:05:56'),
(11, 'Makan Cokolatos', '3edf2d906ea7964a965ee3e89399d130.png', 'ss', '<p>sss</p>\r\n', 3, 2, 'makan-cokolatos', 2, '2020-06-24', '2020-06-19 12:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `cta_tracking`
--

CREATE TABLE `cta_tracking` (
  `id_cta_track` int(20) NOT NULL,
  `id_user` int(20) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cta_tracking`
--

INSERT INTO `cta_tracking` (`id_cta_track`, `id_user`, `ip_address`, `created`) VALUES
(1, 2, '192.168.10.5', '2020-06-16 16:26:58');

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
(3, 'Keuangan dalam ', 'keuangan-dalam', '2020-06-18 08:49:25');

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
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `province_id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `province_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`province_id`, `province_name`) VALUES
('11', 'ACEH'),
('12', 'SUMATERA UTARA'),
('13', 'SUMATERA BARAT'),
('14', 'RIAU'),
('15', 'JAMBI'),
('16', 'SUMATERA SELATAN'),
('17', 'BENGKULU'),
('18', 'LAMPUNG'),
('19', 'KEPULAUAN BANGKA BELITUNG'),
('21', 'KEPULAUAN RIAU'),
('31', 'DKI JAKARTA'),
('32', 'JAWA BARAT'),
('33', 'JAWA TENGAH'),
('34', 'DI YOGYAKARTA'),
('35', 'JAWA TIMUR'),
('36', 'BANTEN'),
('51', 'BALI'),
('52', 'NUSA TENGGARA BARAT'),
('53', 'NUSA TENGGARA TIMUR'),
('61', 'KALIMANTAN BARAT'),
('62', 'KALIMANTAN TENGAH'),
('63', 'KALIMANTAN SELATAN'),
('64', 'KALIMANTAN TIMUR'),
('65', 'KALIMANTAN UTARA'),
('71', 'SULAWESI UTARA'),
('72', 'SULAWESI TENGAH'),
('73', 'SULAWESI SELATAN'),
('74', 'SULAWESI TENGGARA'),
('75', 'GORONTALO'),
('76', 'SULAWESI BARAT'),
('81', 'MALUKU'),
('82', 'MALUKU UTARA'),
('91', 'PAPUA BARAT'),
('94', 'PAPUA');

-- --------------------------------------------------------

--
-- Table structure for table `regencys`
--

CREATE TABLE `regencys` (
  `regency_id` char(4) COLLATE utf8_unicode_ci NOT NULL,
  `province_id` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `area_id` int(11) DEFAULT NULL,
  `regency_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Dumping data for table `regencys`
--

INSERT INTO `regencys` (`regency_id`, `province_id`, `area_id`, `regency_name`) VALUES
('1101', '11', NULL, 'KABUPATEN SIMEULUE'),
('1102', '11', NULL, 'KABUPATEN ACEH SINGKIL'),
('1103', '11', NULL, 'KABUPATEN ACEH SELATAN'),
('1104', '11', NULL, 'KABUPATEN ACEH TENGGARA'),
('1105', '11', NULL, 'KABUPATEN ACEH TIMUR'),
('1106', '11', NULL, 'KABUPATEN ACEH TENGAH'),
('1107', '11', NULL, 'KABUPATEN ACEH BARAT'),
('1108', '11', NULL, 'KABUPATEN ACEH BESAR'),
('1109', '11', NULL, 'KABUPATEN PIDIE'),
('1110', '11', NULL, 'KABUPATEN BIREUEN'),
('1111', '11', NULL, 'KABUPATEN ACEH UTARA'),
('1112', '11', NULL, 'KABUPATEN ACEH BARAT DAYA'),
('1113', '11', NULL, 'KABUPATEN GAYO LUES'),
('1114', '11', NULL, 'KABUPATEN ACEH TAMIANG'),
('1115', '11', NULL, 'KABUPATEN NAGAN RAYA'),
('1116', '11', NULL, 'KABUPATEN ACEH JAYA'),
('1117', '11', NULL, 'KABUPATEN BENER MERIAH'),
('1118', '11', NULL, 'KABUPATEN PIDIE JAYA'),
('1171', '11', NULL, 'KOTA BANDA ACEH'),
('1172', '11', NULL, 'KOTA SABANG'),
('1173', '11', NULL, 'KOTA LANGSA'),
('1174', '11', NULL, 'KOTA LHOKSEUMAWE'),
('1175', '11', NULL, 'KOTA SUBULUSSALAM'),
('1201', '12', NULL, 'KABUPATEN NIAS'),
('1202', '12', NULL, 'KABUPATEN MANDAILING NATAL'),
('1203', '12', NULL, 'KABUPATEN TAPANULI SELATAN'),
('1204', '12', NULL, 'KABUPATEN TAPANULI TENGAH'),
('1205', '12', NULL, 'KABUPATEN TAPANULI UTARA'),
('1206', '12', NULL, 'KABUPATEN TOBA SAMOSIR'),
('1207', '12', NULL, 'KABUPATEN LABUHAN BATU'),
('1208', '12', NULL, 'KABUPATEN ASAHAN'),
('1209', '12', NULL, 'KABUPATEN SIMALUNGUN'),
('1210', '12', NULL, 'KABUPATEN DAIRI'),
('1211', '12', NULL, 'KABUPATEN KARO'),
('1212', '12', NULL, 'KABUPATEN DELI SERDANG'),
('1213', '12', NULL, 'KABUPATEN LANGKAT'),
('1214', '12', NULL, 'KABUPATEN NIAS SELATAN'),
('1215', '12', NULL, 'KABUPATEN HUMBANG HASUNDUTAN'),
('1216', '12', NULL, 'KABUPATEN PAKPAK BHARAT'),
('1217', '12', NULL, 'KABUPATEN SAMOSIR'),
('1218', '12', NULL, 'KABUPATEN SERDANG BEDAGAI'),
('1219', '12', NULL, 'KABUPATEN BATU BARA'),
('1220', '12', NULL, 'KABUPATEN PADANG LAWAS UTARA'),
('1221', '12', NULL, 'KABUPATEN PADANG LAWAS'),
('1222', '12', NULL, 'KABUPATEN LABUHAN BATU SELATAN'),
('1223', '12', NULL, 'KABUPATEN LABUHAN BATU UTARA'),
('1224', '12', NULL, 'KABUPATEN NIAS UTARA'),
('1225', '12', NULL, 'KABUPATEN NIAS BARAT'),
('1271', '12', NULL, 'KOTA SIBOLGA'),
('1272', '12', NULL, 'KOTA TANJUNG BALAI'),
('1273', '12', NULL, 'KOTA PEMATANG SIANTAR'),
('1274', '12', NULL, 'KOTA TEBING TINGGI'),
('1275', '12', NULL, 'KOTA MEDAN'),
('1276', '12', NULL, 'KOTA BINJAI'),
('1277', '12', NULL, 'KOTA PADANGSIDIMPUAN'),
('1278', '12', NULL, 'KOTA GUNUNGSITOLI'),
('1301', '13', NULL, 'KABUPATEN KEPULAUAN MENTAWAI'),
('1302', '13', NULL, 'KABUPATEN PESISIR SELATAN'),
('1303', '13', NULL, 'KABUPATEN SOLOK'),
('1304', '13', NULL, 'KABUPATEN SIJUNJUNG'),
('1305', '13', NULL, 'KABUPATEN TANAH DATAR'),
('1306', '13', NULL, 'KABUPATEN PADANG PARIAMAN'),
('1307', '13', NULL, 'KABUPATEN AGAM'),
('1308', '13', NULL, 'KABUPATEN LIMA PULUH KOTA'),
('1309', '13', NULL, 'KABUPATEN PASAMAN'),
('1310', '13', NULL, 'KABUPATEN SOLOK SELATAN'),
('1311', '13', NULL, 'KABUPATEN DHARMASRAYA'),
('1312', '13', NULL, 'KABUPATEN PASAMAN BARAT'),
('1371', '13', NULL, 'KOTA PADANG'),
('1372', '13', NULL, 'KOTA SOLOK'),
('1373', '13', NULL, 'KOTA SAWAH LUNTO'),
('1374', '13', NULL, 'KOTA PADANG PANJANG'),
('1375', '13', NULL, 'KOTA BUKITTINGGI'),
('1376', '13', NULL, 'KOTA PAYAKUMBUH'),
('1377', '13', NULL, 'KOTA PARIAMAN'),
('1401', '14', NULL, 'KABUPATEN KUANTAN SINGINGI'),
('1402', '14', NULL, 'KABUPATEN INDRAGIRI HULU'),
('1403', '14', NULL, 'KABUPATEN INDRAGIRI HILIR'),
('1404', '14', NULL, 'KABUPATEN PELALAWAN'),
('1405', '14', NULL, 'KABUPATEN S I A K'),
('1406', '14', NULL, 'KABUPATEN KAMPAR'),
('1407', '14', NULL, 'KABUPATEN ROKAN HULU'),
('1408', '14', NULL, 'KABUPATEN BENGKALIS'),
('1409', '14', NULL, 'KABUPATEN ROKAN HILIR'),
('1410', '14', NULL, 'KABUPATEN KEPULAUAN MERANTI'),
('1471', '14', NULL, 'KOTA PEKANBARU'),
('1473', '14', NULL, 'KOTA D U M A I'),
('1501', '15', NULL, 'KABUPATEN KERINCI'),
('1502', '15', NULL, 'KABUPATEN MERANGIN'),
('1503', '15', NULL, 'KABUPATEN SAROLANGUN'),
('1504', '15', NULL, 'KABUPATEN BATANG HARI'),
('1505', '15', NULL, 'KABUPATEN MUARO JAMBI'),
('1506', '15', NULL, 'KABUPATEN TANJUNG JABUNG TIMUR'),
('1507', '15', NULL, 'KABUPATEN TANJUNG JABUNG BARAT'),
('1508', '15', NULL, 'KABUPATEN TEBO'),
('1509', '15', NULL, 'KABUPATEN BUNGO'),
('1571', '15', NULL, 'KOTA JAMBI'),
('1572', '15', NULL, 'KOTA SUNGAI PENUH'),
('1601', '16', NULL, 'KABUPATEN OGAN KOMERING ULU'),
('1602', '16', NULL, 'KABUPATEN OGAN KOMERING ILIR'),
('1603', '16', NULL, 'KABUPATEN MUARA ENIM'),
('1604', '16', NULL, 'KABUPATEN LAHAT'),
('1605', '16', NULL, 'KABUPATEN MUSI RAWAS'),
('1606', '16', NULL, 'KABUPATEN MUSI BANYUASIN'),
('1607', '16', NULL, 'KABUPATEN BANYU ASIN'),
('1608', '16', NULL, 'KABUPATEN OGAN KOMERING ULU SELATAN'),
('1609', '16', NULL, 'KABUPATEN OGAN KOMERING ULU TIMUR'),
('1610', '16', NULL, 'KABUPATEN OGAN ILIR'),
('1611', '16', NULL, 'KABUPATEN EMPAT LAWANG'),
('1612', '16', NULL, 'KABUPATEN PENUKAL ABAB LEMATANG ILIR'),
('1613', '16', NULL, 'KABUPATEN MUSI RAWAS UTARA'),
('1671', '16', NULL, 'KOTA PALEMBANG'),
('1672', '16', NULL, 'KOTA PRABUMULIH'),
('1673', '16', NULL, 'KOTA PAGAR ALAM'),
('1674', '16', NULL, 'KOTA LUBUKLINGGAU'),
('1701', '17', NULL, 'KABUPATEN BENGKULU SELATAN'),
('1702', '17', NULL, 'KABUPATEN REJANG LEBONG'),
('1703', '17', NULL, 'KABUPATEN BENGKULU UTARA'),
('1704', '17', NULL, 'KABUPATEN KAUR'),
('1705', '17', NULL, 'KABUPATEN SELUMA'),
('1706', '17', NULL, 'KABUPATEN MUKOMUKO'),
('1707', '17', NULL, 'KABUPATEN LEBONG'),
('1708', '17', NULL, 'KABUPATEN KEPAHIANG'),
('1709', '17', NULL, 'KABUPATEN BENGKULU TENGAH'),
('1771', '17', NULL, 'KOTA BENGKULU'),
('1801', '18', NULL, 'KABUPATEN LAMPUNG BARAT'),
('1802', '18', NULL, 'KABUPATEN TANGGAMUS'),
('1803', '18', NULL, 'KABUPATEN LAMPUNG SELATAN'),
('1804', '18', NULL, 'KABUPATEN LAMPUNG TIMUR'),
('1805', '18', NULL, 'KABUPATEN LAMPUNG TENGAH'),
('1806', '18', NULL, 'KABUPATEN LAMPUNG UTARA'),
('1807', '18', NULL, 'KABUPATEN WAY KANAN'),
('1808', '18', NULL, 'KABUPATEN TULANGBAWANG'),
('1809', '18', NULL, 'KABUPATEN PESAWARAN'),
('1810', '18', NULL, 'KABUPATEN PRINGSEWU'),
('1811', '18', NULL, 'KABUPATEN MESUJI'),
('1812', '18', NULL, 'KABUPATEN TULANG BAWANG BARAT'),
('1813', '18', NULL, 'KABUPATEN PESISIR BARAT'),
('1871', '18', NULL, 'KOTA BANDAR LAMPUNG'),
('1872', '18', NULL, 'KOTA METRO'),
('1901', '19', NULL, 'KABUPATEN BANGKA'),
('1902', '19', NULL, 'KABUPATEN BELITUNG'),
('1903', '19', NULL, 'KABUPATEN BANGKA BARAT'),
('1904', '19', NULL, 'KABUPATEN BANGKA TENGAH'),
('1905', '19', NULL, 'KABUPATEN BANGKA SELATAN'),
('1906', '19', NULL, 'KABUPATEN BELITUNG TIMUR'),
('1971', '19', NULL, 'KOTA PANGKAL PINANG'),
('2101', '21', NULL, 'KABUPATEN KARIMUN'),
('2102', '21', NULL, 'KABUPATEN BINTAN'),
('2103', '21', NULL, 'KABUPATEN NATUNA'),
('2104', '21', NULL, 'KABUPATEN LINGGA'),
('2105', '21', NULL, 'KABUPATEN KEPULAUAN ANAMBAS'),
('2171', '21', NULL, 'KOTA B A T A M'),
('2172', '21', NULL, 'KOTA TANJUNG PINANG'),
('3101', '31', NULL, 'KABUPATEN KEPULAUAN SERIBU'),
('3171', '31', NULL, 'KOTA JAKARTA SELATAN'),
('3172', '31', NULL, 'KOTA JAKARTA TIMUR'),
('3173', '31', NULL, 'KOTA JAKARTA PUSAT'),
('3174', '31', NULL, 'KOTA JAKARTA BARAT'),
('3175', '31', NULL, 'KOTA JAKARTA UTARA'),
('3201', '32', NULL, 'KABUPATEN BOGOR'),
('3202', '32', NULL, 'KABUPATEN SUKABUMI'),
('3203', '32', NULL, 'KABUPATEN CIANJUR'),
('3204', '32', NULL, 'KABUPATEN BANDUNG'),
('3205', '32', NULL, 'KABUPATEN GARUT'),
('3206', '32', NULL, 'KABUPATEN TASIKMALAYA'),
('3207', '32', NULL, 'KABUPATEN CIAMIS'),
('3208', '32', NULL, 'KABUPATEN KUNINGAN'),
('3209', '32', NULL, 'KABUPATEN CIREBON'),
('3210', '32', NULL, 'KABUPATEN MAJALENGKA'),
('3211', '32', NULL, 'KABUPATEN SUMEDANG'),
('3212', '32', NULL, 'KABUPATEN INDRAMAYU'),
('3213', '32', NULL, 'KABUPATEN SUBANG'),
('3214', '32', NULL, 'KABUPATEN PURWAKARTA'),
('3215', '32', NULL, 'KABUPATEN KARAWANG'),
('3216', '32', NULL, 'KABUPATEN BEKASI'),
('3217', '32', NULL, 'KABUPATEN BANDUNG BARAT'),
('3218', '32', NULL, 'KABUPATEN PANGANDARAN'),
('3271', '32', NULL, 'KOTA BOGOR'),
('3272', '32', NULL, 'KOTA SUKABUMI'),
('3273', '32', NULL, 'KOTA BANDUNG'),
('3274', '32', NULL, 'KOTA CIREBON'),
('3275', '32', NULL, 'KOTA BEKASI'),
('3276', '32', NULL, 'KOTA DEPOK'),
('3277', '32', NULL, 'KOTA CIMAHI'),
('3278', '32', NULL, 'KOTA TASIKMALAYA'),
('3279', '32', NULL, 'KOTA BANJAR'),
('3301', '33', NULL, 'KABUPATEN CILACAP'),
('3302', '33', NULL, 'KABUPATEN BANYUMAS'),
('3303', '33', NULL, 'KABUPATEN PURBALINGGA'),
('3304', '33', NULL, 'KABUPATEN BANJARNEGARA'),
('3305', '33', NULL, 'KABUPATEN KEBUMEN'),
('3306', '33', NULL, 'KABUPATEN PURWOREJO'),
('3307', '33', NULL, 'KABUPATEN WONOSOBO'),
('3308', '33', NULL, 'KABUPATEN MAGELANG'),
('3309', '33', NULL, 'KABUPATEN BOYOLALI'),
('3310', '33', 7, 'KABUPATEN KLATEN'),
('3311', '33', NULL, 'KABUPATEN SUKOHARJO'),
('3312', '33', NULL, 'KABUPATEN WONOGIRI'),
('3313', '33', NULL, 'KABUPATEN KARANGANYAR'),
('3314', '33', 7, 'KABUPATEN SRAGEN'),
('3315', '33', NULL, 'KABUPATEN GROBOGAN'),
('3316', '33', NULL, 'KABUPATEN BLORA'),
('3317', '33', NULL, 'KABUPATEN REMBANG'),
('3318', '33', NULL, 'KABUPATEN PATI'),
('3319', '33', NULL, 'KABUPATEN KUDUS'),
('3320', '33', NULL, 'KABUPATEN JEPARA'),
('3321', '33', NULL, 'KABUPATEN DEMAK'),
('3322', '33', NULL, 'KABUPATEN SEMARANG'),
('3323', '33', NULL, 'KABUPATEN TEMANGGUNG'),
('3324', '33', NULL, 'KABUPATEN KENDAL'),
('3325', '33', NULL, 'KABUPATEN BATANG'),
('3326', '33', NULL, 'KABUPATEN PEKALONGAN'),
('3327', '33', NULL, 'KABUPATEN PEMALANG'),
('3328', '33', NULL, 'KABUPATEN TEGAL'),
('3329', '33', NULL, 'KABUPATEN BREBES'),
('3371', '33', NULL, 'KOTA MAGELANG'),
('3372', '33', NULL, 'KOTA SURAKARTA'),
('3373', '33', NULL, 'KOTA SALATIGA'),
('3374', '33', NULL, 'KOTA SEMARANG'),
('3375', '33', NULL, 'KOTA PEKALONGAN'),
('3376', '33', NULL, 'KOTA TEGAL'),
('3401', '34', 6, 'KABUPATEN KULON PROGO'),
('3402', '34', 6, 'KABUPATEN BANTUL'),
('3403', '34', 5, 'KABUPATEN GUNUNG KIDUL'),
('3404', '34', 5, 'KABUPATEN SLEMAN'),
('3471', '34', 5, 'KOTA YOGYAKARTA'),
('3501', '35', NULL, 'KABUPATEN PACITAN'),
('3502', '35', NULL, 'KABUPATEN PONOROGO'),
('3503', '35', NULL, 'KABUPATEN TRENGGALEK'),
('3504', '35', NULL, 'KABUPATEN TULUNGAGUNG'),
('3505', '35', NULL, 'KABUPATEN BLITAR'),
('3506', '35', NULL, 'KABUPATEN KEDIRI'),
('3507', '35', NULL, 'KABUPATEN MALANG'),
('3508', '35', NULL, 'KABUPATEN LUMAJANG'),
('3509', '35', NULL, 'KABUPATEN JEMBER'),
('3510', '35', NULL, 'KABUPATEN BANYUWANGI'),
('3511', '35', NULL, 'KABUPATEN BONDOWOSO'),
('3512', '35', NULL, 'KABUPATEN SITUBONDO'),
('3513', '35', NULL, 'KABUPATEN PROBOLINGGO'),
('3514', '35', NULL, 'KABUPATEN PASURUAN'),
('3515', '35', NULL, 'KABUPATEN SIDOARJO'),
('3516', '35', NULL, 'KABUPATEN MOJOKERTO'),
('3517', '35', NULL, 'KABUPATEN JOMBANG'),
('3518', '35', NULL, 'KABUPATEN NGANJUK'),
('3519', '35', NULL, 'KABUPATEN MADIUN'),
('3520', '35', NULL, 'KABUPATEN MAGETAN'),
('3521', '35', NULL, 'KABUPATEN NGAWI'),
('3522', '35', NULL, 'KABUPATEN BOJONEGORO'),
('3523', '35', NULL, 'KABUPATEN TUBAN'),
('3524', '35', NULL, 'KABUPATEN LAMONGAN'),
('3525', '35', NULL, 'KABUPATEN GRESIK'),
('3526', '35', NULL, 'KABUPATEN BANGKALAN'),
('3527', '35', NULL, 'KABUPATEN SAMPANG'),
('3528', '35', NULL, 'KABUPATEN PAMEKASAN'),
('3529', '35', NULL, 'KABUPATEN SUMENEP'),
('3571', '35', NULL, 'KOTA KEDIRI'),
('3572', '35', NULL, 'KOTA BLITAR'),
('3573', '35', NULL, 'KOTA MALANG'),
('3574', '35', NULL, 'KOTA PROBOLINGGO'),
('3575', '35', NULL, 'KOTA PASURUAN'),
('3576', '35', NULL, 'KOTA MOJOKERTO'),
('3577', '35', NULL, 'KOTA MADIUN'),
('3578', '35', NULL, 'KOTA SURABAYA'),
('3579', '35', NULL, 'KOTA BATU'),
('3601', '36', NULL, 'KABUPATEN PANDEGLANG'),
('3602', '36', NULL, 'KABUPATEN LEBAK'),
('3603', '36', NULL, 'KABUPATEN TANGERANG'),
('3604', '36', NULL, 'KABUPATEN SERANG'),
('3671', '36', NULL, 'KOTA TANGERANG'),
('3672', '36', NULL, 'KOTA CILEGON'),
('3673', '36', NULL, 'KOTA SERANG'),
('3674', '36', NULL, 'KOTA TANGERANG SELATAN'),
('5101', '51', NULL, 'KABUPATEN JEMBRANA'),
('5102', '51', NULL, 'KABUPATEN TABANAN'),
('5103', '51', NULL, 'KABUPATEN BADUNG'),
('5104', '51', NULL, 'KABUPATEN GIANYAR'),
('5105', '51', NULL, 'KABUPATEN KLUNGKUNG'),
('5106', '51', NULL, 'KABUPATEN BANGLI'),
('5107', '51', NULL, 'KABUPATEN KARANG ASEM'),
('5108', '51', NULL, 'KABUPATEN BULELENG'),
('5171', '51', NULL, 'KOTA DENPASAR'),
('5201', '52', NULL, 'KABUPATEN LOMBOK BARAT'),
('5202', '52', NULL, 'KABUPATEN LOMBOK TENGAH'),
('5203', '52', NULL, 'KABUPATEN LOMBOK TIMUR'),
('5204', '52', NULL, 'KABUPATEN SUMBAWA'),
('5205', '52', NULL, 'KABUPATEN DOMPU'),
('5206', '52', NULL, 'KABUPATEN BIMA'),
('5207', '52', NULL, 'KABUPATEN SUMBAWA BARAT'),
('5208', '52', NULL, 'KABUPATEN LOMBOK UTARA'),
('5271', '52', NULL, 'KOTA MATARAM'),
('5272', '52', NULL, 'KOTA BIMA'),
('5301', '53', NULL, 'KABUPATEN SUMBA BARAT'),
('5302', '53', NULL, 'KABUPATEN SUMBA TIMUR'),
('5303', '53', NULL, 'KABUPATEN KUPANG'),
('5304', '53', NULL, 'KABUPATEN TIMOR TENGAH SELATAN'),
('5305', '53', NULL, 'KABUPATEN TIMOR TENGAH UTARA'),
('5306', '53', NULL, 'KABUPATEN BELU'),
('5307', '53', NULL, 'KABUPATEN ALOR'),
('5308', '53', NULL, 'KABUPATEN LEMBATA'),
('5309', '53', NULL, 'KABUPATEN FLORES TIMUR'),
('5310', '53', NULL, 'KABUPATEN SIKKA'),
('5311', '53', NULL, 'KABUPATEN ENDE'),
('5312', '53', NULL, 'KABUPATEN NGADA'),
('5313', '53', NULL, 'KABUPATEN MANGGARAI'),
('5314', '53', NULL, 'KABUPATEN ROTE NDAO'),
('5315', '53', NULL, 'KABUPATEN MANGGARAI BARAT'),
('5316', '53', NULL, 'KABUPATEN SUMBA TENGAH'),
('5317', '53', NULL, 'KABUPATEN SUMBA BARAT DAYA'),
('5318', '53', NULL, 'KABUPATEN NAGEKEO'),
('5319', '53', NULL, 'KABUPATEN MANGGARAI TIMUR'),
('5320', '53', NULL, 'KABUPATEN SABU RAIJUA'),
('5321', '53', NULL, 'KABUPATEN MALAKA'),
('5371', '53', NULL, 'KOTA KUPANG'),
('6101', '61', NULL, 'KABUPATEN SAMBAS'),
('6102', '61', NULL, 'KABUPATEN BENGKAYANG'),
('6103', '61', NULL, 'KABUPATEN LANDAK'),
('6104', '61', NULL, 'KABUPATEN MEMPAWAH'),
('6105', '61', NULL, 'KABUPATEN SANGGAU'),
('6106', '61', NULL, 'KABUPATEN KETAPANG'),
('6107', '61', NULL, 'KABUPATEN SINTANG'),
('6108', '61', NULL, 'KABUPATEN KAPUAS HULU'),
('6109', '61', NULL, 'KABUPATEN SEKADAU'),
('6110', '61', NULL, 'KABUPATEN MELAWI'),
('6111', '61', NULL, 'KABUPATEN KAYONG UTARA'),
('6112', '61', NULL, 'KABUPATEN KUBU RAYA'),
('6171', '61', NULL, 'KOTA PONTIANAK'),
('6172', '61', NULL, 'KOTA SINGKAWANG'),
('6201', '62', NULL, 'KABUPATEN KOTAWARINGIN BARAT'),
('6202', '62', NULL, 'KABUPATEN KOTAWARINGIN TIMUR'),
('6203', '62', NULL, 'KABUPATEN KAPUAS'),
('6204', '62', NULL, 'KABUPATEN BARITO SELATAN'),
('6205', '62', NULL, 'KABUPATEN BARITO UTARA'),
('6206', '62', NULL, 'KABUPATEN SUKAMARA'),
('6207', '62', NULL, 'KABUPATEN LAMANDAU'),
('6208', '62', NULL, 'KABUPATEN SERUYAN'),
('6209', '62', NULL, 'KABUPATEN KATINGAN'),
('6210', '62', NULL, 'KABUPATEN PULANG PISAU'),
('6211', '62', NULL, 'KABUPATEN GUNUNG MAS'),
('6212', '62', NULL, 'KABUPATEN BARITO TIMUR'),
('6213', '62', NULL, 'KABUPATEN MURUNG RAYA'),
('6271', '62', NULL, 'KOTA PALANGKA RAYA'),
('6301', '63', NULL, 'KABUPATEN TANAH LAUT'),
('6302', '63', NULL, 'KABUPATEN KOTA BARU'),
('6303', '63', NULL, 'KABUPATEN BANJAR'),
('6304', '63', NULL, 'KABUPATEN BARITO KUALA'),
('6305', '63', NULL, 'KABUPATEN TAPIN'),
('6306', '63', NULL, 'KABUPATEN HULU SUNGAI SELATAN'),
('6307', '63', NULL, 'KABUPATEN HULU SUNGAI TENGAH'),
('6308', '63', NULL, 'KABUPATEN HULU SUNGAI UTARA'),
('6309', '63', NULL, 'KABUPATEN TABALONG'),
('6310', '63', NULL, 'KABUPATEN TANAH BUMBU'),
('6311', '63', NULL, 'KABUPATEN BALANGAN'),
('6371', '63', NULL, 'KOTA BANJARMASIN'),
('6372', '63', NULL, 'KOTA BANJAR BARU'),
('6401', '64', NULL, 'KABUPATEN PASER'),
('6402', '64', NULL, 'KABUPATEN KUTAI BARAT'),
('6403', '64', NULL, 'KABUPATEN KUTAI KARTANEGARA'),
('6404', '64', NULL, 'KABUPATEN KUTAI TIMUR'),
('6405', '64', NULL, 'KABUPATEN BERAU'),
('6409', '64', NULL, 'KABUPATEN PENAJAM PASER UTARA'),
('6411', '64', NULL, 'KABUPATEN MAHAKAM HULU'),
('6471', '64', NULL, 'KOTA BALIKPAPAN'),
('6472', '64', NULL, 'KOTA SAMARINDA'),
('6474', '64', NULL, 'KOTA BONTANG'),
('6501', '65', NULL, 'KABUPATEN MALINAU'),
('6502', '65', NULL, 'KABUPATEN BULUNGAN'),
('6503', '65', NULL, 'KABUPATEN TANA TIDUNG'),
('6504', '65', NULL, 'KABUPATEN NUNUKAN'),
('6571', '65', NULL, 'KOTA TARAKAN'),
('7101', '71', NULL, 'KABUPATEN BOLAANG MONGONDOW'),
('7102', '71', NULL, 'KABUPATEN MINAHASA'),
('7103', '71', NULL, 'KABUPATEN KEPULAUAN SANGIHE'),
('7104', '71', NULL, 'KABUPATEN KEPULAUAN TALAUD'),
('7105', '71', NULL, 'KABUPATEN MINAHASA SELATAN'),
('7106', '71', NULL, 'KABUPATEN MINAHASA UTARA'),
('7107', '71', NULL, 'KABUPATEN BOLAANG MONGONDOW UTARA'),
('7108', '71', NULL, 'KABUPATEN SIAU TAGULANDANG BIARO'),
('7109', '71', NULL, 'KABUPATEN MINAHASA TENGGARA'),
('7110', '71', NULL, 'KABUPATEN BOLAANG MONGONDOW SELATAN'),
('7111', '71', NULL, 'KABUPATEN BOLAANG MONGONDOW TIMUR'),
('7171', '71', NULL, 'KOTA MANADO'),
('7172', '71', NULL, 'KOTA BITUNG'),
('7173', '71', NULL, 'KOTA TOMOHON'),
('7174', '71', NULL, 'KOTA KOTAMOBAGU'),
('7201', '72', NULL, 'KABUPATEN BANGGAI KEPULAUAN'),
('7202', '72', NULL, 'KABUPATEN BANGGAI'),
('7203', '72', NULL, 'KABUPATEN MOROWALI'),
('7204', '72', NULL, 'KABUPATEN POSO'),
('7205', '72', NULL, 'KABUPATEN DONGGALA'),
('7206', '72', NULL, 'KABUPATEN TOLI-TOLI'),
('7207', '72', NULL, 'KABUPATEN BUOL'),
('7208', '72', NULL, 'KABUPATEN PARIGI MOUTONG'),
('7209', '72', NULL, 'KABUPATEN TOJO UNA-UNA'),
('7210', '72', NULL, 'KABUPATEN SIGI'),
('7211', '72', NULL, 'KABUPATEN BANGGAI LAUT'),
('7212', '72', NULL, 'KABUPATEN MOROWALI UTARA'),
('7271', '72', NULL, 'KOTA PALU'),
('7301', '73', NULL, 'KABUPATEN KEPULAUAN SELAYAR'),
('7302', '73', NULL, 'KABUPATEN BULUKUMBA'),
('7303', '73', NULL, 'KABUPATEN BANTAENG'),
('7304', '73', NULL, 'KABUPATEN JENEPONTO'),
('7305', '73', NULL, 'KABUPATEN TAKALAR'),
('7306', '73', NULL, 'KABUPATEN GOWA'),
('7307', '73', NULL, 'KABUPATEN SINJAI'),
('7308', '73', NULL, 'KABUPATEN MAROS'),
('7309', '73', NULL, 'KABUPATEN PANGKAJENE DAN KEPULAUAN'),
('7310', '73', NULL, 'KABUPATEN BARRU'),
('7311', '73', NULL, 'KABUPATEN BONE'),
('7312', '73', NULL, 'KABUPATEN SOPPENG'),
('7313', '73', NULL, 'KABUPATEN WAJO'),
('7314', '73', NULL, 'KABUPATEN SIDENRENG RAPPANG'),
('7315', '73', NULL, 'KABUPATEN PINRANG'),
('7316', '73', NULL, 'KABUPATEN ENREKANG'),
('7317', '73', NULL, 'KABUPATEN LUWU'),
('7318', '73', NULL, 'KABUPATEN TANA TORAJA'),
('7322', '73', NULL, 'KABUPATEN LUWU UTARA'),
('7325', '73', NULL, 'KABUPATEN LUWU TIMUR'),
('7326', '73', NULL, 'KABUPATEN TORAJA UTARA'),
('7371', '73', NULL, 'KOTA MAKASSAR'),
('7372', '73', NULL, 'KOTA PAREPARE'),
('7373', '73', NULL, 'KOTA PALOPO'),
('7401', '74', NULL, 'KABUPATEN BUTON'),
('7402', '74', NULL, 'KABUPATEN MUNA'),
('7403', '74', NULL, 'KABUPATEN KONAWE'),
('7404', '74', NULL, 'KABUPATEN KOLAKA'),
('7405', '74', NULL, 'KABUPATEN KONAWE SELATAN'),
('7406', '74', NULL, 'KABUPATEN BOMBANA'),
('7407', '74', NULL, 'KABUPATEN WAKATOBI'),
('7408', '74', NULL, 'KABUPATEN KOLAKA UTARA'),
('7409', '74', NULL, 'KABUPATEN BUTON UTARA'),
('7410', '74', NULL, 'KABUPATEN KONAWE UTARA'),
('7411', '74', NULL, 'KABUPATEN KOLAKA TIMUR'),
('7412', '74', NULL, 'KABUPATEN KONAWE KEPULAUAN'),
('7413', '74', NULL, 'KABUPATEN MUNA BARAT'),
('7414', '74', NULL, 'KABUPATEN BUTON TENGAH'),
('7415', '74', NULL, 'KABUPATEN BUTON SELATAN'),
('7471', '74', NULL, 'KOTA KENDARI'),
('7472', '74', NULL, 'KOTA BAUBAU'),
('7501', '75', NULL, 'KABUPATEN BOALEMO'),
('7502', '75', NULL, 'KABUPATEN GORONTALO'),
('7503', '75', NULL, 'KABUPATEN POHUWATO'),
('7504', '75', NULL, 'KABUPATEN BONE BOLANGO'),
('7505', '75', NULL, 'KABUPATEN GORONTALO UTARA'),
('7571', '75', NULL, 'KOTA GORONTALO'),
('7601', '76', NULL, 'KABUPATEN MAJENE'),
('7602', '76', NULL, 'KABUPATEN POLEWALI MANDAR'),
('7603', '76', NULL, 'KABUPATEN MAMASA'),
('7604', '76', NULL, 'KABUPATEN MAMUJU'),
('7605', '76', NULL, 'KABUPATEN MAMUJU UTARA'),
('7606', '76', NULL, 'KABUPATEN MAMUJU TENGAH'),
('8101', '81', NULL, 'KABUPATEN MALUKU TENGGARA BARAT'),
('8102', '81', NULL, 'KABUPATEN MALUKU TENGGARA'),
('8103', '81', NULL, 'KABUPATEN MALUKU TENGAH'),
('8104', '81', NULL, 'KABUPATEN BURU'),
('8105', '81', NULL, 'KABUPATEN KEPULAUAN ARU'),
('8106', '81', NULL, 'KABUPATEN SERAM BAGIAN BARAT'),
('8107', '81', NULL, 'KABUPATEN SERAM BAGIAN TIMUR'),
('8108', '81', NULL, 'KABUPATEN MALUKU BARAT DAYA'),
('8109', '81', NULL, 'KABUPATEN BURU SELATAN'),
('8171', '81', NULL, 'KOTA AMBON'),
('8172', '81', NULL, 'KOTA TUAL'),
('8201', '82', NULL, 'KABUPATEN HALMAHERA BARAT'),
('8202', '82', NULL, 'KABUPATEN HALMAHERA TENGAH'),
('8203', '82', NULL, 'KABUPATEN KEPULAUAN SULA'),
('8204', '82', NULL, 'KABUPATEN HALMAHERA SELATAN'),
('8205', '82', NULL, 'KABUPATEN HALMAHERA UTARA'),
('8206', '82', NULL, 'KABUPATEN HALMAHERA TIMUR'),
('8207', '82', NULL, 'KABUPATEN PULAU MOROTAI'),
('8208', '82', NULL, 'KABUPATEN PULAU TALIABU'),
('8271', '82', NULL, 'KOTA TERNATE'),
('8272', '82', NULL, 'KOTA TIDORE KEPULAUAN'),
('9101', '91', NULL, 'KABUPATEN FAKFAK'),
('9102', '91', NULL, 'KABUPATEN KAIMANA'),
('9103', '91', NULL, 'KABUPATEN TELUK WONDAMA'),
('9104', '91', NULL, 'KABUPATEN TELUK BINTUNI'),
('9105', '91', NULL, 'KABUPATEN MANOKWARI'),
('9106', '91', NULL, 'KABUPATEN SORONG SELATAN'),
('9107', '91', NULL, 'KABUPATEN SORONG'),
('9108', '91', NULL, 'KABUPATEN RAJA AMPAT'),
('9109', '91', NULL, 'KABUPATEN TAMBRAUW'),
('9110', '91', NULL, 'KABUPATEN MAYBRAT'),
('9111', '91', NULL, 'KABUPATEN MANOKWARI SELATAN'),
('9112', '91', NULL, 'KABUPATEN PEGUNUNGAN ARFAK'),
('9171', '91', NULL, 'KOTA SORONG'),
('9401', '94', NULL, 'KABUPATEN MERAUKE'),
('9402', '94', NULL, 'KABUPATEN JAYAWIJAYA'),
('9403', '94', NULL, 'KABUPATEN JAYAPURA'),
('9404', '94', NULL, 'KABUPATEN NABIRE'),
('9408', '94', NULL, 'KABUPATEN KEPULAUAN YAPEN'),
('9409', '94', NULL, 'KABUPATEN BIAK NUMFOR'),
('9410', '94', NULL, 'KABUPATEN PANIAI'),
('9411', '94', NULL, 'KABUPATEN PUNCAK JAYA'),
('9412', '94', NULL, 'KABUPATEN MIMIKA'),
('9413', '94', NULL, 'KABUPATEN BOVEN DIGOEL'),
('9414', '94', NULL, 'KABUPATEN MAPPI'),
('9415', '94', NULL, 'KABUPATEN ASMAT'),
('9416', '94', NULL, 'KABUPATEN YAHUKIMO'),
('9417', '94', NULL, 'KABUPATEN PEGUNUNGAN BINTANG'),
('9418', '94', NULL, 'KABUPATEN TOLIKARA'),
('9419', '94', NULL, 'KABUPATEN SARMI'),
('9420', '94', NULL, 'KABUPATEN KEEROM'),
('9426', '94', NULL, 'KABUPATEN WAROPEN'),
('9427', '94', NULL, 'KABUPATEN SUPIORI'),
('9428', '94', NULL, 'KABUPATEN MAMBERAMO RAYA'),
('9429', '94', NULL, 'KABUPATEN NDUGA'),
('9430', '94', NULL, 'KABUPATEN LANNY JAYA'),
('9431', '94', NULL, 'KABUPATEN MAMBERAMO TENGAH'),
('9432', '94', NULL, 'KABUPATEN YALIMO'),
('9433', '94', NULL, 'KABUPATEN PUNCAK'),
('9434', '94', NULL, 'KABUPATEN DOGIYAI'),
('9435', '94', NULL, 'KABUPATEN INTAN JAYA'),
('9436', '94', NULL, 'KABUPATEN DEIYAI'),
('9471', '94', NULL, 'KOTA JAYAPURA');

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
(6, 6, 1),
(7, 6, 2),
(10, 5, 3),
(11, 9, 3);

-- --------------------------------------------------------

--
-- Table structure for table `search_tracking`
--

CREATE TABLE `search_tracking` (
  `id_search_tracking` int(20) NOT NULL,
  `id_kategori_profesi` int(20) NOT NULL,
  `id_sub_kategori_profesi` int(20) NOT NULL,
  `ip_address` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search_tracking`
--

INSERT INTO `search_tracking` (`id_search_tracking`, `id_kategori_profesi`, `id_sub_kategori_profesi`, `ip_address`, `kota`, `provinsi`, `created`) VALUES
(1, 1, 1, '192.168.1.1', 'Sleman', 'Jogja', '2020-06-16 15:51:08');

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
(1, 1, 'beberapa banyak buruh', 'beberapa-banyak-buruh', '2020-06-15 17:08:00'),
(2, 1, 'berapa harga ayam ', 'berapa-harga-ayam', '2020-06-17 12:53:10'),
(3, 1, 'ayam Seperempat pira ?', 'ayam-seperempat-pira', '2020-06-17 12:53:26');

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
  `regency_id` char(4) NOT NULL,
  `province_id` char(2) NOT NULL,
  `nohp_user` varchar(50) NOT NULL,
  `file_user` text NOT NULL,
  `no_surat` varchar(150) NOT NULL,
  `foto` varchar(200) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `status_user` int(20) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email_user`, `password_user`, `alamat_user`, `regency_id`, `province_id`, `nohp_user`, `file_user`, `no_surat`, `foto`, `akses_level`, `status_user`, `created`) VALUES
(2, 'Fadilah Yuda', 'fadilah@gmail.com', 'bba67c8419edbbce9660e1f5bb5c1caf', 'Kp. Pasirwaru', '', '', '089674555439', '<p>file yang didalam seperti apa</p>\r\n', '', '4d779baf6fed5fc383c47991cb7a3007.png', 'admin', 0, '2020-06-15 08:50:46'),
(3, 'Yuda', 'user@gmail.com', '80ec08504af83331911f5882349af59d', 'Sunda Jawa (Jasun)', '', '', '089674555439', '<p>aaaaaaa</p>\r\n', '', '0', 'user', 1, '2020-06-17 15:38:53'),
(22, 'Yuda', 'yuda.fadillah@students.amikom.ac.id', '51709b1fab8b922c199a4837165410fd', '', '', '', '', '5fe652c32bd98a41ae8570563e163b9a.pdf', '', '0', 'user', 0, '2020-06-20 07:37:10'),
(23, 'kabayan', 'aa@gmail.com', '425717f0914fda333a7d7579d6327a02', 'KP. bala bala gehu comro cilok cilor', '7413', '74', '08667455436', '<p>KP. bala bala gehu comro cilok cilor</p>\r\n', '', '36189d6289827dbf75a29d1d1ab3fb81.png', 'admin', 1, '2020-06-20 10:37:13');

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
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`province_id`);

--
-- Indexes for table `regencys`
--
ALTER TABLE `regencys`
  ADD PRIMARY KEY (`regency_id`),
  ADD KEY `province_id` (`province_id`);

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
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `regency_id` (`regency_id`),
  ADD KEY `province_id` (`province_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `cta_tracking`
--
ALTER TABLE `cta_tracking`
  MODIFY `id_cta_track` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id_relation_profesi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `search_tracking`
--
ALTER TABLE `search_tracking`
  MODIFY `id_search_tracking` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sub_kategori_profesi`
--
ALTER TABLE `sub_kategori_profesi`
  MODIFY `id_sub_kategori_profesi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id_token` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
-- Constraints for table `regencys`
--
ALTER TABLE `regencys`
  ADD CONSTRAINT `regencys_ibfk_1` FOREIGN KEY (`province_id`) REFERENCES `provinces` (`province_id`);

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
