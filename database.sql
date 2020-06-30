-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 29, 2020 at 12:59 PM
-- Server version: 10.2.31-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u7944797_spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bayar`
--

CREATE TABLE `tbl_bayar` (
  `id` int(20) NOT NULL,
  `nisn` varchar(30) NOT NULL,
  `id_tahun` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bayar`
--

INSERT INTO `tbl_bayar` (`id`, `nisn`, `id_tahun`) VALUES
(124, '0049959698', 16),
(125, '0031857794', 16),
(126, '0049959698', 17),
(127, '12', 18),
(128, '1099887799', 16),
(129, '0035150638', 20),
(130, '0049959698', 20),
(131, '0049959698', 20),
(132, '0042333441', 20),
(133, '0062296783', 20),
(136, '0066898306', 0),
(137, '0056239438', 20),
(138, '000008', 20),
(139, '0076507781', 20),
(140, '0075668714', 20),
(141, '0063860961', 20),
(142, '0078394330', 20),
(143, '0057647785', 20),
(144, '0074865939', 20),
(145, '0062681739', 20),
(146, '0061075804', 20),
(147, '0055473447', 20),
(148, '0078394330', 20),
(149, '0057039579', 20),
(150, '0078394330', 22),
(151, '0062197371', 20),
(152, '0076288865', 20),
(153, '0061973264', 20),
(154, '0056296362', 20),
(155, '0075306688', 20),
(156, '0078077525', 20),
(157, '0073136109', 20),
(158, '0051956398', 20),
(159, '0073903938', 20),
(160, '0071534093', 20),
(161, '0062974489', 20),
(162, '0053326959', 20),
(163, '0074634820', 20),
(164, '0047170402', 20),
(165, '0058045897', 20),
(166, '0072823701', 20),
(167, '0068758126', 20),
(168, '0051554592', 20),
(169, '0072882925', 20),
(170, '0066660230', 20),
(171, '0053990343', 20),
(172, '0072762649', 20),
(173, '0067730885', 20),
(174, '0073686790', 20),
(175, '0064674080', 20),
(176, '0067089053', 20),
(177, '0078948431', 20),
(178, '0066898306', 20),
(179, '00122092', 25),
(180, '0071742605', 22),
(181, '0062296783', 25),
(182, '0061878146', 25),
(183, '0075572488', 20);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bulan`
--

CREATE TABLE `tbl_bulan` (
  `id` int(10) NOT NULL,
  `id_tahun` int(10) NOT NULL,
  `bulan` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bulan`
--

INSERT INTO `tbl_bulan` (`id`, `id_tahun`, `bulan`) VALUES
(60, 20, 12),
(59, 20, 11),
(58, 20, 10),
(57, 20, 9),
(56, 20, 8),
(55, 20, 7),
(54, 20, 6),
(53, 20, 5),
(52, 20, 4),
(51, 20, 3),
(50, 20, 2),
(49, 20, 1),
(72, 21, 12),
(71, 21, 11),
(70, 21, 10),
(69, 21, 9),
(68, 21, 8),
(67, 21, 7),
(66, 21, 6),
(65, 21, 5),
(64, 21, 4),
(63, 21, 3),
(62, 21, 2),
(61, 21, 1),
(96, 23, 12),
(95, 23, 11),
(94, 23, 10),
(93, 23, 9),
(92, 23, 8),
(91, 23, 7),
(90, 23, 6),
(89, 23, 5),
(88, 23, 4),
(87, 23, 3),
(86, 23, 2),
(85, 23, 1),
(84, 22, 12),
(83, 22, 11),
(82, 22, 10),
(81, 22, 9),
(80, 22, 8),
(79, 22, 7),
(78, 22, 6),
(77, 22, 5),
(76, 22, 4),
(75, 22, 3),
(74, 22, 2),
(73, 22, 1),
(97, 24, 1),
(98, 24, 2),
(99, 24, 3),
(100, 24, 4),
(101, 24, 5),
(102, 24, 6),
(103, 24, 7),
(104, 24, 8),
(105, 24, 9),
(106, 24, 10),
(107, 24, 11),
(108, 24, 12),
(121, 26, 1),
(122, 26, 2),
(123, 26, 3),
(124, 26, 4),
(125, 26, 5),
(126, 26, 6),
(127, 26, 7),
(128, 26, 8),
(129, 26, 9),
(130, 26, 10),
(131, 26, 11),
(132, 26, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_calon_santri`
--

CREATE TABLE `tbl_calon_santri` (
  `id` int(50) NOT NULL,
  `nisn` varchar(20) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `no_nik` varchar(30) NOT NULL,
  `asal_sekolah` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `nama_wali` varchar(30) NOT NULL,
  `alamat_wali` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `kk` varchar(300) DEFAULT NULL,
  `ijazah` varchar(300) DEFAULT NULL,
  `ktp_wali` varchar(300) DEFAULT NULL,
  `file_nisn` varchar(200) DEFAULT NULL,
  `bpjs` varchar(200) DEFAULT NULL,
  `ket` varchar(20) DEFAULT NULL,
  `tanggal_daftar` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_calon_santri`
--

INSERT INTO `tbl_calon_santri` (`id`, `nisn`, `jk`, `nama`, `tempat_lahir`, `tanggal_lahir`, `no_nik`, `asal_sekolah`, `alamat`, `nama_wali`, `alamat_wali`, `no_hp`, `kk`, `ijazah`, `ktp_wali`, `file_nisn`, `bpjs`, `ket`, `tanggal_daftar`) VALUES
(3, '', 'P', 'Rahmawati', 'Meunasah alue', '2008-07-28', '1108160107670159', 'SD N 5 Nisam', 'Puloe reungkom', 'Halimah jafar', 'Meunash alue*', '082370427236', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-12'),
(5, '', 'L', 'Sibral Malasyi', 'Sigli', '2008-08-22', '1107162208080002', 'MIN 4 Aceh Utara', 'Keude Krueng Geukueh', 'Aiyub Sami', 'Keude Krueng Geukueh', '085371725134', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-12'),
(8, '', 'P', 'Syifa Chairi Khadijah Nasution', 'Lhokseumawe', '2007-09-29', '1173026909070002', 'SD Swasta Al Alaq', 'BTN AAF Desa Paloh Lada Kecamatan Dewantara kabupaten Aceh Utara', 'Muhammad Yani NST', 'BTN AAF Desa Paloh Lada kecamatan Dewantara kabupaten Aceh Utara', '081361613639', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-12'),
(9, '', 'P', 'Sarah salsabila', 'Nisam', '2008-10-10', '1108275010070002', 'MIN 1 LHOKSEUMAWE', 'CUNDA', 'Heriansyah', 'CUNDA', '085277949649', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-12'),
(10, '', 'P', 'Syafira As Nayni', 'Medang Ara', '2008-01-09', '1116031212800004', 'SD Negeri 2 Medang Ara', 'Medang Ara', 'Jufriadi', 'BTN Arun', '085262895998', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-12'),
(11, '', 'L', 'MUHAMMAD FAZIL ', 'Aceh Utara', '2008-08-10', '1108271008080002', 'SD Negeri 2 Nisam Antara', 'Desa Seumirah Kecamatan Nisam Antara Kabupaten Aceh Utara', 'MUHIBBUDIN M. JALI', 'Desa Seumirah Kecamatan Nisam Antara Kabupaten Aceh Utara', '085260722236', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-12'),
(12, '0072477145', 'L', 'Abdul Azis', 'Aceh utara', '2008-09-04', '118030409070002', 'SD Negeri 19 Kuta Makmur', 'Meunasah Buket Kuta Makmur', 'Muhammad', 'Desa Buket Jalan : Pante Bahagia', '085222719364', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-12'),
(13, '0066473633', 'L', 'M.Algi Fahry', 'Krueng Geukueh', '2006-10-15', '1108061510060001', 'MIN 1 Aceh Utara', 'Krueng Mane', 'Lukman', 'Krueng Mane', '085275106843', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-12'),
(16, '0088370495', 'L', 'Salman Alfarisi', 'Sigli', '2008-05-11', '1107071105080001', 'MI Negeri 4 Aceh Utara', 'Krueng Geukuh', 'Razali Abdullah', 'Paya Gaboh', '085288111463', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-12'),
(17, '', 'P', 'Cut Tiara', 'Paloh', '2007-12-22', '1173046212070001', 'MIN Meuria Paloh', 'Paloh Punti', 'T.Junaidi', 'Paloh Punti dusun C', '085370513583', '88-1583999247884350818193195761386.jpg', NULL, '547-15839994590168989615415636896726.jpg', NULL, NULL, 'Tidak Aktif', '2020-03-12'),
(18, '', 'L', 'Ade Al Fatani', 'Krueng Geukueh ', '2007-12-04', '1108021412060001', 'SD Al-Alaq', 'Keude Krueng Geukueh', 'Armia', 'Keude Krueng Geukeuh', '085260910296', '359-1583999756533220270881.jpg', NULL, '189-15839998763431374723910.jpg', NULL, NULL, 'Tidak Aktif', '2020-03-12'),
(19, '', 'L', 'Raisul Muqaddis', 'Cot Seumiyong', '2007-10-24', '1108032410070002', 'SD Negeri 7 Kuta Makmur', 'Cot Seumiyong,Kuta Makmur', 'Tarmizi', 'Gp.Cot Seumiyong,Kuta Makmur', '085358201054', '923-15840015936742494651333617235986.jpg', NULL, '287-15840016429931821084184095056794.jpg', NULL, '941-15840017169854460369189654189602.jpg', 'Tidak Aktif', '2020-03-12'),
(21, '', 'L', 'Teuku  julizar', 'Tambon tunong', '2008-07-18', '1108021807080001', 'SD Negeri 10 Dewantara', 'Tambon tunong', 'Teuku Mustafa', 'Seunudon', '085215738306', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-12'),
(22, '', 'L', 'Muhammad Iqbal', 'Jamuan', '2008-08-20', '1108165004040001', 'SDS Pinus KKA', 'Jamuan', 'Tgk.Tarmizi AR', 'Desa Jamuan,Duson Blang Jrat', '085320155002', '190-IMG20200312155403.jpg', NULL, '317-IMG20200312155347.jpg', NULL, NULL, 'Tidak Aktif', '2020-03-12'),
(23, '', 'P', 'Intan Azura', 'Sawang', '2007-09-09', '1108154909070001', 'MIN 2 Aceh Utara', 'Sawang', 'Zulkifli', 'Sawang', '08230781196', '455-IMG20200312162523.jpg', NULL, '724-IMG20200312162458.jpg', NULL, NULL, 'Tidak Aktif', '2020-03-12'),
(24, '', 'L', 'Rusmawan Sulani Garamba', 'Seuneubok', '2007-07-08', '1108161811100133', 'MIN 15 Aceh Utara', 'Seuneubok', 'Ahmad Yusuf', 'Seuneubok', '085106111363', '907-1584006132622642209021.jpg', NULL, '15-15840061685691659411054.jpg', NULL, NULL, 'Tidak Aktif', '2020-03-12'),
(25, '', 'P', 'Nuri Hayatullah', 'Aceh Utara', '2007-12-22', '110802622070001', 'SD Negeri 8 Dewantara', 'BTN Madat', 'Muktar Abdullah', 'Lhokgajah', '081360859304', '41-IMG20200312164809.jpg', NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-12'),
(27, '0088538606', 'L', 'Alfin Fikri', 'Lhokseumawe', '2008-07-02', '1173040207080001', 'MIN 4 DEWANTARA', 'Blang Naleung Mameh', 'Husaini', 'Paloh Lada', '085296969003', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-12'),
(28, '0081878239', 'L', 'Muhammad Zaki Aulia', 'Batuphat Timur', '2008-07-10', '1173041707080001', 'SD 5 Padang Sakti', 'Padang Sakti', 'Iswar Fardan', 'Padang Sakti', '082304057202', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-12'),
(29, '0089910043', 'P', 'Nailul Najmi', 'Aceh Utara', '2008-05-07', '1108024705080002', 'MIN 1 Krueng Geukeuh', 'Uteun Geulinggang', 'Muhammad', 'Jln.Pabrik PT AAF,Uteun Geulingang,Krueng Geukeuh', '085260085765', NULL, NULL, '952-15840672810462063061712.jpg', '615-15840671028941534807624.jpg', '993-1584067131592850296982.jpg', 'Tidak Aktif', '2020-03-12'),
(30, '', 'P', 'Putroe Balqis Zulfani', 'Lhokseumawe', '2008-07-16', '1108265607080001', 'SD Al Alaq', 'Paya Dua Banda Baro', 'Zulkifli Usman', 'Duson Calok Lawang,Desa Gampong Paya Dua', '081260918880', '987-15840674555012110750494118922228.jpg', NULL, '860-15840674836985122587500577174946.jpg', NULL, NULL, 'Tidak Aktif', '2020-03-13'),
(31, '0087565828', 'L', 'Shalihan Syahdan ', 'Gunung Musara', '2008-06-17', '1117081706080001', 'SD Negeri Bener Lukup II', 'Bener Meriah,Gunung Musara', 'M.Yusuf', 'Gunung Musara', '082363345927', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-13'),
(32, '0072084856', 'L', 'Kasirul Abral', 'Ds.Tambon Tunong', '2007-12-13', '1108021007020004', 'SD Negeri 4 Tambon', 'Tambon Tunong', 'Husaini', 'Alue Papeun', '082362554427', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-13'),
(33, '0072476313', 'L', 'Muhammad Zaki', 'Aceh Utara', '2007-12-24', '1108022412070003', 'SD 3 Dewantara', 'Uteun Geulinggang', 'Lukman B', 'Paloh Lada', '085275354446', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-13'),
(34, '0073469666', 'L', 'Zian murtaqaz', 'Paloh gadeng', '2007-10-05', '1108270510070001', 'Sd 8 bate pila', 'Alue papeuen,nisam antara,aceh utara,aceh', 'Marzuki AB', 'Batee pila', '082218321418', '774-15840713073085814312468833054844.jpg', NULL, '994-15840713352418795895884463800564.jpg', NULL, NULL, 'Tidak Aktif', '2020-03-13'),
(35, '0047804193', 'P', 'Cut Mawar', 'Tunyang', '2004-10-04', '1117014410040001', 'MTsN 3 Bener Meriah', 'Simpang Layang', 'Zamzami', 'Simpang Layang', '085275408907', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-13'),
(36, '0088728371', 'P', 'Lisa arida', 'Bener pepanyi', '2008-05-31', '1117077105080002', 'SdN bener pepanyi', 'Bener pepanyi,permata,bener meriah,aceh', 'Syahruddin', 'Bener pepanyi', '082239985989', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-13'),
(37, '', 'L', 'Muhammad syibral malasyi', 'Meunasah meucat', '2008-01-03', '1108160301080001', 'Sdn 1 nisam', 'Meunasah meucat,nisam,aceh utara,aceh', 'Fakhrul razi,s.pd.', 'Meunasah meucat', '081360006346', '229-15840720357836960535657736122177.jpg', NULL, '988-1584072069144323582213937059083.jpg', NULL, NULL, 'Tidak Aktif', '2020-03-13'),
(38, '0082900934', 'L', 'Muhammad Hasbi', 'Banda Aceh ', '2008-01-18', '1171071801080001', 'SD 71 Banda Aceh', 'Banda Aceh', 'Rizwan', 'Lam Ara,Keutapang.Banda Aceh', '085260612210', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-13'),
(39, '', 'P', 'Laisa amalia gustiana', 'Takengon', '2005-08-26', '1104036608050001', 'Min 9 aceh tengah', 'Desa musara pakot,bebesan,aceh tengah,aceh', 'Analisyah', 'Sadong juru mudi', '085373477252', '250-IMG20200313114140.jpg', NULL, '796-IMG20200313114223.jpg', NULL, NULL, 'Tidak Aktif', '2020-03-13'),
(41, '', 'P', 'Liana Putri Aditia', 'Takengon', '2008-04-03', '1104034403080001', 'MIN 9 Aceh Tengah', 'Desa Musara Pakot', 'Analsyah', 'Sadong Juru Mudi,Takengon', '085373477252', '250-IMG20200313114140.jpg', NULL, '796-IMG20200313114223.jpg', NULL, NULL, 'Tidak Aktif', '2020-03-13'),
(42, '0074531816', 'L', 'Kasirul abral', 'Paloh gadeng', '2007-08-09', '1108022602070009', 'Sd 8 dewantara', 'Paloh gadeng', 'M.saleh', 'Paloh gadeng', '085358410023', '375-15840746577559022357434886131936.jpg', NULL, '64-1584074679920706277254721888657.jpg', NULL, NULL, 'Tidak Aktif', '2020-03-13'),
(45, '0087060791', 'L', 'T.Muhammad Raju Maulana', 'Keude Krueng Geukueh', '2008-03-18', '1108022311720001', 'MIN 4 Aceh Utara', 'Keude Krueng geukueh', 'Muhammad Kasem', 'Keude Krueng Geukueh', '088277450514', '108-15840872868555966254359148641865.jpg', NULL, '361-15840873217213836484179809458122.jpg', '840-15840872657071442599791095694893.jpg', NULL, 'Tidak Aktif', '2020-03-13'),
(46, '0076158758', 'L', 'TEUKU SYAHRUL FADLY', 'ACEH UTARA', '2007-09-25', '1108162509070001', 'SD NEGERI 2 NISAM', 'JALAN COT MAMBONG KM 10 BLANG DALAM GEUNTENG KECAMATAN NISAM', 'KHAIRULLAH', 'DUSUN KUTA ALAM GAMPONG BLANG DALAM GEUNTENG KECAMATAN NISAM KABUPATEN ACEH UTARA', '082367884060', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-13'),
(47, '0083142743', 'P', 'Aufa Suhaila', 'Lhokseumawe', '2008-06-17', '1108045706080003', 'SDN 3 Banda Sakti', 'Jeulikat,blang mangat', 'Saifuddin', 'Desa jeulikat,blang mangat', '085360042333', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-13'),
(48, '0087303989', 'P', 'UNI LIYANA HUMAIRA', 'Bireuen', '2008-04-14', '1108025404080002', 'SD NEGERI 3 DEWANTARA', 'Desa Uteuen Geulinggang Kec. Dewantara Kab. Aceh Utara ', 'SUHENDRA', 'Desa Uteuen Geulinggang Kec. Dewantara Kab. Aceh Utara', '085260266069', NULL, NULL, NULL, NULL, NULL, 'Aktif', '2020-03-13'),
(49, '0081498094', 'L', 'Al Kautsar', 'Lhokseumawe', '2008-05-13', '11730331305080001', 'SDN 4 Blang Mangat', 'Punteut,Dusun Tgk Syarif,Gampong Tunong', 'Safrizal', 'Punteut,Dusun Tgk Syarif,Gampong Tunong', '081269265187', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-13'),
(50, '0053734035', 'P', 'Nadia ulfa', 'Cot rheu', '2005-08-22', '1108036208050001', 'Mtss jabal nur', 'Cot rheu', 'Muslem', 'Cot rheu', '085360068078', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-13'),
(51, '00880074337', 'P', 'Cut Aulia Putri Ramadhani', 'Lhokseumawe', '2008-09-28', '1108026809080001', 'SD 16 Dewantara', 'Paloh Lada', 'Azhari', 'Paloh Lada', '085372043937', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-13'),
(52, '0087161524', 'P', 'Sabrina Salsabila', 'Banda Aceh', '2008-05-09', '1108024905080002', 'Min 4 Aceh Utara', 'Paloh Gadeng', 'Muslim M Yusuf', 'Paloh Gadeng', '08126941217', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-13'),
(53, '0077070892', 'L', 'Rusda Ramozan', 'Punteut', '2007-10-12', '1108151210070001', 'SD Negeri 8 Sawang', 'Peunteut Sawang', 'Syarifuddin Musa', 'Punteut sawang', '085206974107', '359-15841560162424925605263122894144.jpg', NULL, '847-15841560381524317254770944414248.jpg', '265-15841561187036715981950429347620.jpg', NULL, 'Tidak Aktif', '2020-03-14'),
(54, '0078876760', 'L', 'Rizki Aulia', 'Sawang', '2007-11-09', '1108150911070003', 'MIN 2 Sawang', 'Babah Krueng,Sawang', 'Mamfaluti.M.yusuf', 'Babah Krueng', '085577772235', '42-15841578314433241853929348846565.jpg', NULL, '100-15841578740934158053431000926233.jpg', '218-15841578950473372547256931350087.jpg', NULL, 'Tidak Aktif', '2020-03-14'),
(55, '0075079347', 'L', 'Muzammil', 'Aceh Utara', '2007-09-13', '1108161309070003', 'SD Negeri 1 Nisam', 'Desa Meunasah Meucat, Kecamatan Nisam, Kabupaten Aceh Utara', 'Yuswadi', 'Desa Meunasah Meucat, Kecamatan Nisam, Kabupaten Aceh Utara', '082366697779', '70-IMG.jpg', NULL, '299-IMG_0001-.jpg', NULL, '812-IMG_0001.jpg', 'Tidak Aktif', '2020-03-14'),
(56, '', 'P', 'Siti Aisyah', 'Uteun Geulingganh', '2008-03-18', '110802503080001', 'SDN 12 Dewantara', 'Uteun Geulinggang', 'Saiful Amirul Shah', 'Uteun Geulinggang', '085216420728', '860-IMG20200314145349.jpg', NULL, '701-IMG20200314145405.jpg', NULL, NULL, 'Tidak Aktif', '2020-03-14'),
(57, '0082659831', 'L', 'Zulkarnaini', 'Blang Karieng', '2008-06-20', '110802200608002', 'SD Negeri 8 Dewantara', 'Paloh Gadeng', 'Bunyamin', 'Dusun IV Munawwarah,Paloh Gadeng', '085210097944', '378-IMG20200314150943.jpg', NULL, '901-IMG20200314150903.jpg', '719-IMG20200314150844.jpg', NULL, 'Tidak Aktif', '2020-03-14'),
(58, '0053381022', 'P', 'Ashghira Zahrina', 'Uteun Geulinggang', '2005-08-27', '1108028708050001', 'MTs Negeri Aceh Utara', 'Uteun Geulinggang', 'Adnan Budiman', 'Uteun Geulinggang', '081269362651', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-14'),
(59, '0071576456', 'L', 'Ihsanuddin', 'Tambon tunong', '2007-10-07', '1108020710070002', 'SD Swasta Al Alaq', 'Tambon tunong', 'Tgk.H.Syarifuddin ali', 'Tambon tunong', '085277245620', '246-15841790765564251478266578780381.jpg', NULL, '856-15841791082087012732805256773239.jpg', '6-15841791189004022832904881972013.jpg', NULL, 'Tidak Aktif', '2020-03-14'),
(60, '', 'P', 'Nur Hafni', 'Alue bili', '2007-09-30', '1108167009070002', 'SD Negeri 2 Nisam', 'Alue bili', 'M Nur Gantou', 'Alue bili', '082316091502', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-14'),
(61, '0087402905', 'P', 'Kayla Al-kaisa', 'Tangse', '2008-03-01', '1108024103080001', 'MIN 4 Aceh Utara', 'Jln.Mesjid Bujang Salim.Krueng Geukueh', 'M.Taleb Arani', 'Jln.Mesjid Bujang Salim', '08126355062', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-14'),
(62, '0074761789', 'L', 'RASYA AUWIL AUFA', 'Lhokseumawe', '2007-08-27', '1108102708070001', 'MIN 6 Aceh Utara', 'Teupin Punti', 'Salikin', 'Teupin Punti Kec. Syamtalira arun Kab. Aceh Utara', '085277111983', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-14'),
(63, '0074761789', 'L', 'RASYA AUWIL AUFA', 'Lhokseumawe', '2007-08-27', '1108102708070001', 'MIN 6 Aceh Utara', 'Teupin Punti', 'Salikin', 'Teupin Punti', '085277111983', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-14'),
(64, '141501008', 'L', 'Akbarul azjman', 'Jangka alue u', '2007-09-04', '3173010409070001', 'SDN Rawa Endah', 'Perum pondok damai blok e3 no 29 rt 06 rw 012 desa coleungsi kidul kelurahan cileungsi kab.bogor jawa barat', 'Syukri syamsudin', 'Pondok damai blok e3 no 29', '082310198387', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-14'),
(65, '0053363211', 'L', 'Muhammad anshar rezki', 'Aceh utara', '2005-04-11', '1108021104050001', 'MTsS al muarif', 'Paloh gadeng', 'Zulkifli', 'Paloh gadeng', '085359091101', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-15'),
(66, '008662479', 'L', 'Muhammad haekal', 'Lhokseumawe', '2008-12-28', '1108272812080001', 'SDN 3 NISAM ANTARA', 'Nisam antara', 'Salidan', 'Nisam antara', '085277868270', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-15'),
(67, '0082881439', 'L', 'Muhammad harris', 'Aceh Utara', '2008-04-17', '1108151704080001', 'SDN 16 SAWANG', 'Gunci', 'Lukman', 'Gunci', '081360500035', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-15'),
(68, '0058171579', 'L', 'MUHAMMAD KHALID', 'Blang Panyang', '2005-11-10', '1173041011050002', 'MTs Swasta Nurul Huda', 'Blang Panyang Kec. Muara Satu Kota Lhokseumawe', 'Ibrahim Ab', 'Blang Panyang Kec. Muara Satu Kota Lhokseumawe', '082368000469', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-15'),
(69, '0060057198', 'P', 'Sabral hayati', 'Lhokseumawe', '2006-06-06', '1173034606060004', 'SDN 12 blang mangat', 'Blang buloh', 'Nasruddin', 'Blang buloh', '085277640737', '184-1584259949757600919427.jpg', NULL, '298-15842599950891693972470.jpg', NULL, NULL, 'Tidak Aktif', '2020-03-15'),
(70, '0089046021', 'P', 'M.lutfi arabi', 'Lhokseumawe', '2008-06-18', '1173011806080001', 'Min 1 kota lhokseumawe', 'Meunasah mesjid', 'Bakhtiar', 'Meunasah mesjid', '081278050977', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-15'),
(71, '0089046021', 'P', 'M.lutfi arabi', 'Lhokseumawe', '2008-06-18', '1173011806080001', 'Min 1 kota lhokseumawe', 'Meunasah mesjid', 'Bakhtiar', 'Meunasah mesjid', '081278050977', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-15'),
(72, '0089046021', 'P', 'M.lutfi arabi', 'Lhokseumawe', '2008-06-18', '1173011806080001', 'Min 1 kota lhokseumawe', 'Meunasah mesjid', 'Bakhtiar', 'Meunasah mesjid', '081278050977', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-15'),
(73, '0083345273', 'L', 'Muhammad iyan firmanda', 'Aceh utara', '2006-03-30', '1108021311060066', 'SDN 9 Dewantara', 'Paloh igeuh', 'Kamaruddin', 'Dusun darul falah', '082298043517', '475-IMG20200315154907.jpg', NULL, '934-1584262165181210675312.jpg', NULL, NULL, 'Tidak Aktif', '2020-03-15'),
(74, '0081539046', 'L', 'Muhammad fazil', 'Calok giri', '2008-05-24', '1108022405080003', 'SDN 9 Dewantara', 'Calok giri', 'Nuriman', 'Calok giri', '085277893020', '535-IMG20200315155304.jpg', NULL, '406-15842624266791087552449.jpg', NULL, NULL, 'Tidak Aktif', '2020-03-15'),
(75, '', 'P', 'Auliatul Rahmania', 'Lhokseumawe', '2009-09-25', '1173046509090003', 'SD N  7 Muara satu', 'Paloh Punti', 'Karman', 'Paloh Punti', '085220408847', '71-15842646575921902660169.jpg', NULL, '957-1584264681090953023543.jpg', NULL, NULL, 'Tidak Aktif', '2020-03-15'),
(77, '0088701632', 'L', 'Zakiul fuadi', 'Simpang tiga', '2008-07-07', '1173046509090003', 'Min 18 aceh utara', 'Simpang tiga ,langkahan', 'Marzuki', 'Simpang tiga', '082385970532', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-15'),
(78, '', 'L', 'MUHAMMAD ILHAM', 'Lhokseumawe', '2008-08-12', '1173041208080002', 'MIN 5 LHOKSEUMAWE', 'Meuria Paloh Kec. Muara Satu Kota Lhokseumawe', 'Bustari Idris', 'Meuria Paloh Kec. Muara Satu Kota Lhokseumawe', '081248331679', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-16'),
(79, '', 'L', 'Teuku Suhaimy ', 'Kr. Geukuh', '2008-03-29', '11108022903080001', 'MIN 4 Aceh Utara', 'Keude Krung Geukuh', 'Anwar', 'Keude Krung Geukuh', '085220004073', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-16'),
(80, '0087305218', 'P', 'SHAHIFAH ARLA', 'Tambon  Tunong', '2008-03-23', '1108026303080001', 'SD Al-Alaq', 'Tambon  Tunong', 'Yasir Arafat', 'Tambon  Tunong', '085262441383', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-16'),
(81, '0083686339', 'P', 'Ridha hayana', 'Sawang', '2008-05-19', '1108155905080004', 'Sd negeri 1 sawang', 'Dusun kuta batee sawang,kab aceh utara', 'Zakaria', 'Kubu', '085276322992', '739-IMG-20200316-WA0007.jpg', NULL, NULL, '214-IMG-20200316-WA0009.jpg', '852-IMG-20200316-WA0008.jpg', 'Tidak Aktif', '2020-03-16'),
(82, '', 'L', 'MUHAMMAD IQBALUDDIN', 'Lhokseumawe', '2008-03-17', '1173021703080006', 'SD N 18 Banda Sakti', 'Uteun Geulinggang', 'Drs. Maksalmina Mahmud Banta', 'Uteun Geulinggang', '085270613055', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-16'),
(83, '0083686339', 'P', 'Ridha hayana', 'Sawang', '2008-05-19', '1108155905080008', 'Sd negeri 1 sawang', 'Dusun kuta batee sawang,kab aceh utara', 'Zakaria', 'Kubu', '085276322992', '739-IMG-20200316-WA0007.jpg', NULL, NULL, '214-IMG-20200316-WA0009.jpg', '852-IMG-20200316-WA0008.jpg', 'Tidak Aktif', '2020-03-16'),
(84, '', 'L', 'SHAHRIZAL SAPUTRA', 'BINJEE', '2008-03-15', '1108160301080016', 'MIN 15 Aceh Utara', 'Binjee Nisam Kab. Aceh Utara', 'Saifullah', 'Binjee Nisam Kab. Aceh Utara', '085210095912', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-16'),
(85, '', 'P', 'HIDAYAH RIZKIA AZLIS', 'Bla', '2007-11-05', '1108164511070001', 'SD Swasta Al Alaq', 'BLANG PALA', 'AZHARI', 'BLANG PALA', '085260812376', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-16'),
(86, '0082647934', 'L', 'Muhibbusshabri', 'Lhokseumawe', '2008-05-07', '1108020705080003', 'MIN 4 ACEH UTARA', 'Gampong Paloh Gadeng', 'Kamaruddin', 'Gampong Paloh Gadeng', '081264628423', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-16'),
(87, '', '', 'Rahmania Sukri', 'Binjee, Nisam', '2008-09-17', '1108165709080002', 'SD N 7 NIsam', 'Binjee, Nisam', 'Syukri Idris', 'Binjee, Nisam', '085365111408', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-16'),
(88, '0081945336', 'L', 'FARID KAMIL', 'Kr. Geukuh', '2008-03-28', '1108022803080002', 'SDN 1 DEWANTARA', 'UTEUN GEULINGGANG', 'ASNAWI', 'UTEUN GEULINGGANG', '085277346491', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-17'),
(89, '0076769944', 'L', 'MUHAMMAD RIZQY ZAHY NAUFAL', 'Lhokseumawe', '2007-11-21', '1108022111070001', 'SD Al-Alaq', 'BTN ASEAN KECAMATAN DEWANTARA KABUPATEN ACEH UTARA', 'Azhar', 'BTN ASEAN KECAMATAN DEWANTARA KABUPATEN ACEH UTARA', '081377487971', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-17'),
(90, '0046901654', 'P', 'HANISA SALSABILA', 'SIGLI', '2004-09-14', '1103025409040002', 'SMP N 01 JULOK', 'KUTA BINJEE, ACEH TIMUR', 'AGUS BAHAGIA', 'KUTA BINJEE, ACEH TIMUR', '085260823225', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-17'),
(91, '0084364328', 'L', 'ALFA AULIA ZIKRI', 'Lhokseumawe', '2008-06-15', '1173041506080001', 'MIN LHOKSEUMAWE', 'MEURIA PALOH KOTA LHOKSEUMAWE', 'MUHAMMAD', 'MEURIA PALOH KOTA LHOKSEUMAWE', '085260573743', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-17'),
(92, '0084364328', 'L', 'ALFA AULIA ZIKRI', 'Lhokseumawe', '2008-06-15', '1173041506080001', 'MIN LHOKSEUMAWE', 'MEURIA PALOH KOTA LHOKSEUMAWE', 'MUHAMMAD', 'MEURIA PALOH KOTA LHOKSEUMAWE', '085260573743', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-17'),
(93, '', 'P', 'Cut.raisya fitri', 'Lhokseumawe', '2007-10-16', '', 'SD.N 9 Nisam', 'Jln pendidikan \r\nMns.Meucat \r\nKecamatan Nisam\r\nKab.Aceh Utara', 'T.zulfikar,skm', 'Jln Cot mambong km 07\r\nGp.Barat kec.Nisam', '082363212290', '132-IMG20200317191326.jpg', NULL, NULL, '163-IMG_1584448570.jpg', NULL, 'Tidak Aktif', '2020-03-17'),
(94, '', 'P', 'OCHIN NURAFNI', 'MEUNASAH BARO', '2006-07-01', '1108066210040001', 'SMP N 1 KRUNG MANE', 'MEUNASAH BARO', 'MUHADAR', 'MEUNASAH BARO', '085206557221', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-17'),
(95, '0077661940', 'L', 'QAUSAR', 'Aceh Utara', '2007-12-20', '1108152512070002', 'MIN 02 ACEH UTARA', 'GUNCI SAWANG', 'LUKMAN', 'GUNCI SAWANG', '085214089506', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-17'),
(96, '0088957619', 'P', 'RATU AQILLA', 'Aceh Utara', '2008-05-23', '1108026305080001', 'MIN 4 Aceh Utara', 'TAMBON TUNONG', 'BUCHARI AHMAD', 'TAMBON TUNONG', '085296904481', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-17'),
(97, '0071689826', 'L', 'MUHAMMAD NAILUL AFDHAL', 'UTEUN GEULINGGANG', '2007-08-17', '1108021708070001', 'SD N 16 DEWANTARA', 'SP. KKA', 'MURYADI ABDULLAH', 'SP. KKA', '085317736155', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-17'),
(98, '0045475556', 'P', 'NURI LUFIA', 'GP. TEUNGOH', '2004-09-25', '1108156509040002', 'MTSN 1 BIREUEN', 'GLE DAGANG', 'MUKHLIS', 'GLE DAGANG', '085260045876', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-17'),
(99, '0081005200', 'L', 'AHMADNAJRIL HUSFAN', 'Lhokseumawe', '2008-03-26', '1108162603080002', 'SD N 9 NISAM', 'TINGKEUM NISAN', 'HUSNI ADNAN', 'TINGKEUM NISAN', '085270498663', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-17'),
(100, '0089386143', 'L', 'MUHAMMAD AZZAM', 'TINGKEUM', '2008-01-01', '1108160101080004', 'SDN 1 NISAM', 'TINGKEUM NISAM', 'ZULKIFLI', 'TINGKEUM NISAM', '085261681516', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-17'),
(101, '0074259056', 'L', 'MUHAMMAD FAZILMAN', 'TINGKEUM', '2007-11-11', '1108161111070002', 'SDN 1 NISAM', 'TINGKEUM NISAM', 'M. YUSUF NAFI', 'TINGKEUM NISAM', '085277273174', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-17'),
(102, '0077709347', 'L', 'MUHAMMAD ANISUL CHAIRI', 'Aceh Utara', '2007-10-21', '1108022110070002', 'SDN 3 DEWANTARA', 'BANGKA JAYA', 'TGK, JALALUDDIN', 'BANGKA JAYA', '085260489110', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-17'),
(103, '', 'L', 'IKRAM FAHLEVI', 'PURWOSARI, BENER MERIAH', '2008-02-25', '1117052502080000', 'SDN 9 DEWANTARA', 'CALOK GIRI KEC. DEWANTARA', 'SYAMSYUDDIN', 'PAYA DUA KEC. BANDAR BARO KAB. ACEH UTARA', '082362628984', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-17'),
(104, '0088823226', 'P', 'ZHAFIRA', 'Aceh Utara', '2008-09-23', '1108166309080001', 'SD Al-Alaq', 'DUSUN MENASAH BARO GP. BENEUT NISAM', 'MANSURIDI', 'DUSUN MENASAH BARO GP. BENEUT NISAM', '085260009428', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-17'),
(105, '0054305069', 'P', 'NUR AIN BINTI AL AZHAR', 'KUALA LUMPUR MALAYSIA', '2005-01-04', '1103024401050001', 'SMP N 01 JULOK', 'ULE TANOH KEC. JULOK KAB. ACEH TIMUR', 'AL AZHAR', 'ULE TANOH KEC. JULOK KAB. ACEH TIMUR', '08116806277', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-17'),
(106, '0081390018', 'L', 'MALIK AKBAR', 'DAYAH BARO', '2008-01-26', '1108022601080001', 'SD N 1 DEWANTARA', 'PALOH LADA', 'JAFARUDDIN AS', 'PALOH LADA', '085260996208', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-17'),
(107, '0075317719', 'L', 'AL AMAR SUBHAN', 'Lhokseumawe', '2007-12-06', '1173040612070001', 'SD N 2 MUARA SATU', 'BLANG NALEUNG MAMEH', 'RAZALI AJAD', 'BLANG NALEUNG MAMEH', '085260302197', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-17'),
(108, '0083800706', 'P', 'YANA MAHFUZAH', 'Lhokseumawe', '2008-08-25', '1173046508080001', 'SD N 1 MUARA SATU', 'JALAN RANCONG BATHUPAT TIMUR', 'SOFYAN HS', 'BATUPHAT BARAT', '085360274843', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-17'),
(109, '0086888734', 'L', 'MUHAMMAD AL FARISYI', 'Lhokseumawe', '2008-10-17', '1108021710080001', 'SD N 10 DEWANTARA', 'TAMBON TUNONG', 'MUZAKKIR', 'TAMBON TUNONG', '081274641978', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-17'),
(110, '0075269431', 'P', 'Cut Raisya Fitri', 'Lhoksemawe', '2007-10-16', '1108165610070001', 'SDN 9 Nisam', 'Jalan pendidikan \r\nMns meucat.kec nisam.kab Aceh utara', 'T.zulfikar.skm', 'Jalan Cot kambing km 07\r\nGp.barat.kec nisam.kab Aceh utara', '082363212290', '132-IMG20200317191326.jpg', NULL, NULL, '163-IMG_1584448570.jpg', NULL, 'Tidak Aktif', '2020-03-17'),
(111, '0082686009', 'L', 'RESTU ANANDA', 'LHOKSEUMAWE', '2008-01-18', '1173041801080001', 'SD NEGERI 2 MUARA SATU', 'DUSUN BARAT DESA BLANG NALEUNG MAMEH KECAMATAN MUARA SATU  KOTA LHOKSEUMAWE', 'DEDI HUSAINI', 'BLANG NALEUNG MAMEH', '082277721109', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-17'),
(112, '0041112997', '', 'Harais Murtaza', 'Alue Awe', '2004-12-11', '1108255602020001', 'SMP N 2 Syamtalira Bayu', 'Alue Awe Kec.Geuredong Pase Kab. Aceh Utara provinsi Aceh', 'Zakaria', 'Alue awe Kec.Geuredong Pase Kab. Aceh Utara Provinsi Aceh', '082369189969', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-18'),
(113, '0041112997', 'L', 'Harais Murtaza', 'Alue Awe', '2004-12-11', '1108251101050001', 'SMP N 2 Syamtalira Bayu', 'Alue awe Kec.Geureudong Pase Kab. Aceh Utara provinsi Aceh ', 'Zakaria', 'Alue awe Kec.Geuredong Pase Kab. Aceh Utara provinsi Aceh ', '082369189969', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-18'),
(114, '0076375706', 'P', 'Riska indah', 'Blang batee', '2007-12-03', '1103074212070001', 'MIN 4 Peureulak ', 'Jln. Monisa\r\nDesa : blang batee\r\nKec : Peureulak\r\nKab :Aceh timur', 'Razali', 'Peureulak ', '085260252291', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-19'),
(115, '0076375706', 'P', 'Riska indah', 'Blang batee', '2007-12-03', '1103074212070001', 'MIN 4 Peureulak ', 'Jln. Monisa\r\nDesa : blang batee\r\nKec : Peureulak\r\nKab :Aceh timur', 'Razali abubakar', 'Peureulak ', '085260252291', NULL, NULL, NULL, NULL, NULL, 'Tidak Aktif', '2020-03-19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_bayar`
--

CREATE TABLE `tbl_detail_bayar` (
  `id` int(10) NOT NULL,
  `id_bayar` int(20) NOT NULL,
  `id_tahun` int(20) NOT NULL,
  `id_bulan` int(20) NOT NULL,
  `tanggal_pembayaran` date NOT NULL,
  `nominal` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_bayar`
--

INSERT INTO `tbl_detail_bayar` (`id`, `id_bayar`, `id_tahun`, `id_bulan`, `tanggal_pembayaran`, `nominal`) VALUES
(146, 146, 20, 50, '2020-03-01', 600000),
(144, 145, 20, 49, '2020-03-01', 600000),
(145, 145, 20, 50, '2020-03-01', 600000),
(142, 144, 20, 50, '2020-03-01', 600000),
(141, 141, 20, 50, '2020-02-29', 600000),
(140, 139, 20, 50, '2020-02-26', 600000),
(139, 138, 20, 49, '2020-02-26', 600000),
(136, 133, 20, 51, '2020-02-14', 600000),
(135, 133, 20, 50, '2020-02-14', 200000),
(152, 153, 20, 50, '2020-03-02', 600000),
(150, 152, 20, 49, '2020-03-02', 600000),
(137, 133, 20, 52, '2020-02-14', 300000),
(147, 147, 20, 49, '2020-03-01', 600000),
(148, 142, 22, 83, '2020-03-01', 300000),
(149, 142, 22, 84, '2020-03-01', 300000),
(153, 154, 20, 51, '2020-03-03', 100000),
(154, 154, 20, 50, '2020-03-03', 600000),
(155, 155, 20, 50, '2020-03-03', 600000),
(156, 158, 20, 51, '2020-03-12', 600000),
(157, 159, 20, 50, '2020-03-13', 600000),
(158, 160, 20, 51, '2020-03-13', 600000),
(159, 161, 20, 51, '2020-03-13', 600000),
(160, 141, 20, 51, '2020-03-13', 600000),
(161, 162, 20, 51, '2020-03-13', 600000),
(162, 163, 20, 50, '2020-03-13', 600000),
(163, 164, 20, 50, '2020-03-13', 600000),
(167, 167, 20, 50, '2020-03-13', 600000),
(166, 166, 20, 49, '2020-03-13', 600000),
(169, 168, 20, 49, '2020-03-13', 500000),
(171, 168, 20, 50, '2020-03-13', 600000),
(172, 168, 20, 51, '2020-03-13', 600000),
(173, 169, 20, 51, '2020-03-13', 600000),
(174, 170, 20, 50, '2020-03-13', 350000),
(175, 170, 20, 51, '2020-03-13', 600000),
(176, 171, 20, 49, '2020-03-13', 300000),
(177, 172, 20, 49, '2020-03-13', 600000),
(178, 172, 20, 50, '2020-03-13', 600000),
(179, 174, 20, 51, '2020-03-14', 600000),
(180, 175, 20, 51, '2020-03-14', 600000),
(181, 176, 20, 49, '2020-03-15', 300000),
(182, 176, 20, 50, '2020-03-15', 300000),
(184, 133, 20, 50, '2020-06-28', 250000),
(185, 177, 20, 49, '2020-06-28', 400000),
(186, 177, 20, 49, '2020-06-28', 200000),
(187, 183, 20, 54, '2020-06-28', 300000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_detail_pengeluaran`
--

CREATE TABLE `tbl_detail_pengeluaran` (
  `id_pengeluaran` int(10) NOT NULL,
  `perihal` text NOT NULL,
  `nominal` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_detail_pengeluaran`
--

INSERT INTO `tbl_detail_pengeluaran` (`id_pengeluaran`, `perihal`, `nominal`) VALUES
(3, 'sdafsdff', 200000),
(3, 'dsasdfasdfasdfasdffasdfas asdfasdfasdf asfasdf a asdfasdf', 20000),
(4, 'pembelian pohon', 25000),
(5, 'gjdgd', 3000),
(5, '', 2000),
(6, 'ert', 3000),
(7, 'dfasd', 200000),
(7, 'sgdgf', 350000),
(10, 'belanja sapu', 200000),
(11, 'kasur', 617000),
(13, 'Perbaikan talang air', 300000),
(14, 'Belanja dapur', 5000000),
(15, 'utang', 500000),
(16, 'perbaiki talang air', 300000),
(16, 'penimbunan kebun', 100000000),
(17, 'pinjaman ', 500000),
(19, 'pinjaman', 500000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kelas`
--

CREATE TABLE `tbl_kelas` (
  `id` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `wali_kelas` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kelas`
--

INSERT INTO `tbl_kelas` (`id`, `nama`, `wali_kelas`) VALUES
(1, 'VIII-1-MTs', 'Junina Damayanti, S. Pd'),
(2, 'VIII-2-MTs', 'Kasmawati, S. Pd'),
(3, 'VIII-3-MTs', 'Aryuni, S. Pd'),
(4, 'VIII-4-MTs', 'Cut Nurlaila, S. pi'),
(5, 'VIII-5-MTs', 'Rahmiyati M Jafar, S. Pd. I'),
(6, 'IX-1-MTs', 'Jannatul Husna, S. Pd'),
(7, 'IX-2-MTs', 'Sadri, S. Pd'),
(8, 'IX-3-MTs', 'Yusnidar, S. Pd'),
(9, 'VIII-4-MTs', 'Mahdalena, S. Pd'),
(10, 'VIII-5-MTs', 'Hartati, S. Pd'),
(11, 'IX-1-MTs', 'Darmawati, S. Pd'),
(12, 'IX-2-MTs', 'Zulchaira, S. Pd'),
(13, 'IX-3-MTs', 'Akmal, S. Pd'),
(14, 'IX-4-MTs', 'Mutia Sari, S. Pd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengeluaran`
--

CREATE TABLE `tbl_pengeluaran` (
  `id_pengeluaran` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `penerima` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengeluaran`
--

INSERT INTO `tbl_pengeluaran` (`id_pengeluaran`, `tanggal`, `penerima`) VALUES
(1, '2020-01-24', 'penerima'),
(2, '2020-01-24', 'Saf'),
(3, '2020-01-24', 'Saf'),
(4, '2020-02-25', 'Safrizal'),
(5, '2020-01-25', 'Ilham Frihandi'),
(6, '2020-01-25', 'Safrizal'),
(7, '2020-02-01', 'Saf'),
(8, '2020-02-01', 'ilham'),
(9, '2020-02-01', 'ilham'),
(10, '2020-02-01', 'ilham'),
(11, '2020-02-01', 'ilham'),
(12, '2020-02-01', 'ilham'),
(13, '2020-02-14', 'Andi'),
(14, '2020-02-26', 'Bg Riat'),
(15, '2020-03-13', 'tgk nazar'),
(16, '2020-06-28', 'ilham'),
(17, '2020-06-28', 'tgk nazar'),
(18, '2020-06-28', 'tgk nazar'),
(19, '2020-06-28', 'tgk nazar'),
(20, '2020-06-28', 'tgk nazar'),
(21, '2020-06-29', 'ilham');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nis` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jk` enum('L','P') NOT NULL,
  `tempat_lahir` text NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `id_kelas` varchar(20) NOT NULL,
  `nama_ayah` varchar(30) NOT NULL,
  `nama_ibu` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `nama`, `jk`, `tempat_lahir`, `tanggal_lahir`, `alamat`, `id_kelas`, `nama_ayah`, `nama_ibu`) VALUES
('0076531728', 'MUHAMMAD NAZA SAPUTRA', 'L', '', '0000-00-00', 'DESA Paloh Gadeng ', '2', 'Boy Haki', ''),
('0079082069', 'MUHAMMAD IRHAM', 'L', '', '0000-00-00', 'DESA Uten Gelinggang', '2', 'Rizal afdi', ''),
('0079589534', 'MUHAMMAD HAFIDZAN ALQI', 'L', '', '0000-00-00', 'DESA Keude Kruengeukueh', '2', 'Muhammad Diah', ''),
('0075478565', 'MUHAMMAD ALFI SULTANI', 'L', '', '0000-00-00', 'DESA Meria paloh', '2', 'Abdurrahman  Zakaria', ''),
('0067913369', 'MUHAMMAD ALFARISYI', 'L', '', '0000-00-00', 'DESA Tambon Tunong', '2', 'Samsul Aka', ''),
('0065901739', 'M.RAFI PASYA', 'L', '', '0000-00-00', 'DESA Meunasah Buket', '2', 'Zulheri', ''),
('0078948431', 'JAMALUL KHAIRI', 'L', '', '0000-00-00', 'DESA Tingkeum', '2', 'Boihaqi', ''),
('0071387802', 'FAUZAN AZMI', 'L', '', '0000-00-00', 'DESA Pante Jaloh ', '2', 'Hamdani,S.Pd', ''),
('0134375297', 'FATHUR RACHMAN', 'L', '', '0000-00-00', 'DESA Tambon Baroh', '2', 'Bakhtiar,ST', ''),
('0079190577', 'ASSYARAFI ALHAKIM', 'L', '', '0000-00-00', 'DESA alue lim', '2', 'Muhammad Muda', ''),
('0131360123', 'ALTAF AHMAD MARIKHAN', 'L', '', '0000-00-00', 'DESA Batuphat Timur', '2', 'Faisal ,SE', ''),
('0072804601', 'RIJALUL IKHSAN', 'L', '', '0000-00-00', 'DESA Rheung Bluek', '2', 'Musladi Amin', ''),
('0072777386', 'AHMAD AZKA NAHARUDDIN', 'L', '', '0000-00-00', 'DESA Punge Jurung', '2', 'Alfi Naharuddin', ''),
('0078394330', 'ABDILLAH HAQQI', 'L', '', '0000-00-00', 'DESA Mendele', '2', 'Ahmad Iqbal', ''),
('0068838284', 'ABDIL AUZAN', 'L', '', '0000-00-00', 'DESA Gampong Punie', '2', 'M.Taufik Hidayat', ''),
('0071071587', 'ZAMHARIRA', 'L', '', '0000-00-00', 'DESA  KEC.  KAB. ', '1', 'RASYIDIN', ''),
('0073638982', 'WAZIRUL AZMA ', 'L', '', '0000-00-00', 'DESA TAMBON TUNONG KEC. DEWANTARA KAB. ACEH UTARA', '1', 'ABDULLAH MUHAMMAD', ''),
('0072652251', 'ULYA FISH', 'L', '', '0000-00-00', 'DESA  KEC.  KAB. ', '1', 'ZAINUDDIN', ''),
('0073507129', 'TEUKU AWISH MICHEAL AL-RIZQY', 'L', '', '0000-00-00', 'DESA GUNCI KEC. SAWANG  KAB. ACEH UTARA', '1', 'MUHAMMAD ALI', ''),
('0076137204', 'TANWIR MIQBAS', 'L', '', '0000-00-00', 'DESA PALOH LADA KEC. DEWANTARA KAB. ACEH UTARA', '1', 'SUFYAN', ''),
('0071756910', 'TAJUL FUZARI', 'L', '', '0000-00-00', 'DESA MEUNASAH KRUENG KEC. NISAM KAB. ACEH UTARA', '1', 'MOCHAMAD DAHLAN', ''),
('0071678815', 'SAID MILZAM HAWALI', 'L', '', '0000-00-00', 'DESA PADANG SAKTI KEC. MUARA SATU KAB. ACEH UTARA', '1', 'SAYED AHMAD', ''),
('0011111112', 'SALMAN ALFARISI', 'L', '', '0000-00-00', 'DESA KEUDE KRUENGGEUKUEH KEC. DEWANTARA KAB. ACEH UTARA', '1', '', ''),
('0072340770', 'RIFKIL FUAD', 'L', '', '0000-00-00', 'DESA BUGAK KRUENG MATE KEC. JANGKA KAB. BIREUEN', '1', 'ISMUIL', ''),
('0073136109', 'REYFAN AL ZIDAN', 'L', '', '0000-00-00', 'DESA MEUNASAH CAPA KEC. JUANG  KAB. BIREUEN', '1', 'FADHOLI QOSIM', ''),
('0071390610', 'NAJMUL ACHYAR ', 'L', '', '0000-00-00', 'DESA BANGKA JAYA KEC. DEWANTARA KAB. ACEH UTARA', '1', 'SAIFUL ANWAR', ''),
('0077558125', 'MUHAMMAD SYIKRAN', 'L', '', '0000-00-00', 'DESA JLN. ANJANG SANA TAMBON TUNONG KEC. DEWANTARA KAB. ACEH UTARA', '1', 'ALAIDIN', ''),
('0081690262', 'MUHAMMAD SAHAL', 'L', '', '0000-00-00', 'DESA MEUNASAH MEUCAT KEC. NISAM KAB. ACEH UTARA', '1', 'SYAHRIZAL', ''),
('0072823701', 'MUHAMMAD RIZKY ANANDA', 'L', '', '0000-00-00', 'DESA  KEC.  KAB. ', '1', 'ABDULLAH', ''),
('0072029908', 'MUHAMMAD RIZKY ADITYA', 'L', '', '0000-00-00', 'DESA LR. DAMAI BATUPHAT BARAT KEC. MUARA SATU KAB. ACEH UTARA', '1', 'MIZWAR', ''),
('0075670080', 'MUHAMMAD RIVAL AL AZIS', 'L', '', '0000-00-00', 'DESA PALOH LADA KEC. DEWANTARA KAB. ACEH UTARA', '1', 'RAZALI', ''),
('0064933966', 'MUHAMMAD RAJUL IKRAM', 'L', '', '0000-00-00', 'DESA KEUDE KRUENGGEUKUEH KEC. DEWANTARA KAB. ACEH UTARA', '1', 'MUNZIR', ''),
('0077609349', 'MUHAMMAD NABAWI AL KHALIDI', 'L', '', '0000-00-00', 'DESA GAMPONG SANGKELAN KEC. BANDA BARO KAB. ACEH UTARA', '1', 'HASANUDDIN', ''),
('0071742605', 'MUHAMMAD IQBAL FIRDAUS ', 'L', '', '0000-00-00', 'DESA DUSUN MADAT PALOH LADA KEC. DEWANTARA KAB. ACEH UTARA', '1', 'M. YAKOB (ALM)', ''),
('0078077525', 'MUHAMMAD HIDAYATULLAH', 'L', '', '0000-00-00', 'DESA KEUDE PANTE BREUH  KEC. BAKTIYA KAB. ACEH UTARA', '1', 'AZHARI', ''),
('0074630879', 'MUAMMAR', 'L', '', '0000-00-00', 'DESA  KEC.  KAB. ', '1', '', ''),
('0074656409', 'MUHAMMAD DHIYAURRAHMAN', 'L', '', '0000-00-00', 'DESA KAMBAM KEC. MUARA BATU KAB. ACEH UTARA', '1', 'HANAFIAH', ''),
('0075572488', 'MUHAMMAD BASYIR', 'L', '', '0000-00-00', 'DESA DUSUN TGK YAHYA ULEE MADON KEC. MUARA BATU KAB. ACEH UTARA', '1', 'IBNU HAJAR', ''),
('0071283975', 'MAULANA IKHSAN ', 'L', '', '0000-00-00', 'DESA BATUPHAT BARAT KEC. MUARA SATU KAB. ACEH UTARA', '1', 'BUKHARI IBRAHIM', ''),
('0061878146', 'HARIS PUTRA RAMADHAN ', 'L', '', '0000-00-00', 'DESA TAMBON BAROH KEC. DEWANTARA KAB. ACEH UTARA', '1', 'TAFRIADI', ''),
('0078301282', 'HAFIZ ALFATIEH', 'L', '', '0000-00-00', 'DESA KEUTAPANG KEC. NISAM KAB. ACEH UTARA', '1', 'ANWAR', ''),
('0075504065', 'AZIZUL AHYAR', 'L', '', '0000-00-00', 'DESA DUSUN MADAT PALOH LADA KEC. DEWANTARA KAB. ACEH UTARA', '1', 'ZAMZAMI', ''),
('0074688877', 'ALIF THURRAHMAN ', 'L', '', '0000-00-00', 'DESA DUSUN PANTE RANGKILEH KEC. BLANG TEURAKAN KAB. ACEH UTARA', '1', 'FAUZAN ALATIF', ''),
('0068023060', 'AKBAR MAULANA SAICA', 'L', '', '0000-00-00', 'DESA BANDAR BIREUEN KEC. JUANG  KAB. BIREUEN', '1', 'SALUKMAN', ''),
('0072182471', 'AHMAD REVI SAFIOLA', 'L', '', '0000-00-00', 'DESA BANGKA JAYA KEC. DEWANTARA KAB. ACEH UTARA', '1', 'M. YUSUF', ''),
('0077318536', 'AHMAD HAEKAL RIANDA ', 'L', '', '0000-00-00', 'DESA TINGKEUM KEC. NISAM KAB. ACEH UTARA', '1', 'ADNAN', ''),
('0074469956', 'ADI SYAHRIAL', 'L', '', '0000-00-00', 'DESA TINGKEUM MANYANG KEC. KUTA BLANG KAB. ACEH UTARA', '1', 'ISMADI', ''),
('0062296783', 'ABDUL AZIZ', 'L', '', '0000-00-00', 'DESA TAMBON BAROH KEC. DEWANTARA KAB. ACEH UTARA', '1', 'M. YUSUF ABD', ''),
('0075150530', 'MUHAMMAD ZAKWAN', 'L', '', '0000-00-00', 'DESA Meunasah Manyang', '2', 'Nasai S.Ag', ''),
('0077858174', 'RAFI AL GHIFARI SOFIAN', 'L', '', '0000-00-00', 'DESA Tambon Tunong', '2', 'Humaidi', ''),
('0078036494', 'RAFI AL HABSY', 'L', '', '0000-00-00', 'DESA Tambon Tunong', '2', 'Junaidi Azwar', ''),
('0074634820', 'SAHIDUL AKRAM', 'L', '', '0000-00-00', 'DESA Buntul Puteri', '2', 'Ahmad Dahlan', ''),
('0048967951', 'SALMAN HABIBIE', 'L', '', '0000-00-00', 'DESA Tambon Baroh', '2', 'Syarifuddin Abu bakar', ''),
('0076227608', 'SYAHRUL REZA', 'L', '', '0000-00-00', 'DESA Gampong Darussalam', '2', 'Amiruddin', ''),
('0079785393', 'T.AULIA FAHRI', 'L', '', '0000-00-00', 'DESA Gunci', '2', 'Jalaluddin T.Ilyas', ''),
('0076512159', 'TEUKU LUTHFI AL GHAZI', 'L', '', '0000-00-00', 'DESA Batuphat Timur', '2', 'Maswan', ''),
('0072199874', 'ZAHRAN SIDQI', 'L', '', '0000-00-00', 'DESA Gampong Barat', '2', 'M.Jafar (Alm)', ''),
('0078139603', 'ZAHRUL FUADY', 'L', '', '0000-00-00', 'DESA Padang Sakti', '2', 'Mohd.Dahlan', ''),
('0066200595', 'ZULKARNAENI', 'L', '', '0000-00-00', 'DESA Cut Mamplam', '2', 'Saiful Munir', ''),
('0083512394', 'ZUNUWANIS', 'L', '', '0000-00-00', 'DESA alue lim', '2', 'Zainal abidin', ''),
('000000001', 'AHMAD DAFFA AL FIKRY', 'L', '', '0000-00-00', 'DESA  KEC.  KAB. ', '3', '', ''),
('0078960027', 'AHMAD FAUZIL FAHLEPI', 'L', '', '0000-00-00', 'DESA  KEC.  KAB. ', '3', 'ISMAIL AHMAD ', ''),
('0072033689', 'AKMAL MAULANA ', 'L', '', '0000-00-00', 'DESA DARUSSALAM KEC. NISAM ANTARA KAB. ACEH UTARA', '3', 'AZHARI ISMAIL', ''),
('0063233589', 'AKRAMUL KIRAM ', 'L', '', '0000-00-00', 'DESA CILEUNGSI KIDUL KEC. CILEUNGSI KAB. BOGOR JAWA BARAT', '3', 'SYUKRI SYAMSYUDDIN', ''),
('0062222940', 'BAQIL', 'L', '', '0000-00-00', 'DESA UTEUNKOT KEC. MUARA DUA KAB. LHOKSEUMAWE ACEH UTARA', '3', 'IBNU MUHAMMAD DAUD', ''),
('0078472727', 'EZARA ADITYA PASHA ', 'L', '', '0000-00-00', 'DESA  KEC.  KAB. ', '3', 'BUDI SISWANTO ', ''),
('0075776462', 'HIDAYAT ', 'L', '', '0000-00-00', 'DESA MNS TEUNGOH KEC. LHOKSUKON KAB. ACEH UTARA', '3', 'ANWAR ', ''),
('0076954687', 'M. HAIKAL ', 'L', '', '0000-00-00', 'DESA GUNCI KEC. SAWANG KAB. ACEH UTARA', '3', 'ABD. RAHMAN', ''),
('0075668714', 'M. MIQDARUL AULIA', 'L', '', '0000-00-00', 'DESA  KEC.  KAB. ', '3', 'NURDIN A.GANI', ''),
('0078007178', 'M. MUYASSAR DAHLAN', 'L', '', '0000-00-00', 'DESA KEUDE SIMPANG KEURAMAT KEC. SIMPANG KEURAMAT KAB. ACEH UTARA', '3', 'M. DAHLAN', ''),
('0074398295', 'M. ZAKI MUBARAQ', 'L', '', '0000-00-00', 'DESA DUSUN III PERDAMAIAN TAMBON BAROH KEC. DEWANTARA KAB. ACEH UTARA', '3', 'FADLIN', ''),
('0079092806', 'MUAMMAR KHADAFI', 'L', '', '0000-00-00', 'DESA TAMBON BAROH KEC. DEWANTARA KAB. ACEH UTARA', '3', 'M. YACOB', ''),
('000000002', 'M. ARIF PUTRA', 'L', '', '0000-00-00', 'DESA  KEC.  KAB. ', '3', '', ''),
('0065628636', 'MUHAMMAD DANIAL RAUFI', 'L', '', '0000-00-00', 'DESA  KEC.  KAB. ', '3', 'MUHAMMAD NASIR', ''),
('0076336014', 'MUHAMMAD FATHUR ARRIZKI', 'L', '', '0000-00-00', 'DESA DUSUN BTN AAF KEC. DEWANTARA KAB. ACEH UTARA', '3', 'KARDINATA AIYUB', ''),
('0079615316', 'MUHAMMAD HUDAY AL-KHALIDY', 'L', '', '0000-00-00', 'DESA  KEC.  KAB. ', '3', 'AZHARI MAULANA', ''),
('0078363933', 'MUHAMMAD KAFFA HIDAYAT', 'L', '', '0000-00-00', 'DESA SANGKELAN KEC. BANDA BARO KAB. ACEH UTARA', '3', 'MUHAMMAD NAZIR', ''),
('0077246128', 'MUHAMMAD NABIL RISKYI', 'L', '', '0000-00-00', 'DESA PULO RUNGKOM KEC. DEWANTARA KAB. ACEH UTARA', '3', 'SAMSUL BAHRI', ''),
('0072736284', 'MUHAMMAD NAUFAL MUBARAK', 'L', '', '0000-00-00', 'DESA GAMPONG BARAT  KEC. NISAM  KAB. ACEH UTARA', '3', 'HERMANSYAH', ''),
('0074456376', 'MUHAMMAD RAIHAN NAUFAL', 'L', '', '0000-00-00', 'DESA DSN BATE TIMOH KEUDE KRUENGGEUKUEH KEC. DEWANTARA KAB. ACEH UTARA', '3', 'AFRIZAL', ''),
('0078392512', 'MUHAMMAD RIAN AL-FAED', 'L', '', '0000-00-00', 'DESA BLANG NALEUNG MAMEH KEC. MUARA SATU KAB. ACEH UTARA', '3', 'ZULKARNAEN', ''),
('0062063202', 'MUHAMMAD RIZKI AL-FAJRI', 'L', '', '0000-00-00', 'DESA BLANG KARIENG KEC. NISAM KAB. ACEH UTARA', '3', 'IBRAHIM ABDULLAH', ''),
('0074117312', 'MUHAMMAD RIZKY RAMADHAN', 'L', '', '0000-00-00', 'DESA TAMBON BAROH KEC. DEWANTARA KAB. ACEH UTARA', '3', 'RUSMADI', ''),
('0071027642', 'MUHAMMAD SYAHRUL RAZI', 'L', '', '0000-00-00', 'DESA GAMPONG KEUTAPANG KEC. NISAM  KAB. ACEH UTARA', '3', 'MUHIFUDDIN', ''),
('0078184315', 'MUHAMMAD TASNIM', 'L', '', '0000-00-00', 'DESA  KEC.  KAB. ', '3', 'M. DAUD', ''),
('0075360978', 'MUHAMMAD YUSUF', 'L', '', '0000-00-00', 'DESA PALOH LADA KEC. DEWANTARA KAB. ACEH UTARA', '3', 'ABDUL MALIK', ''),
('0079648470', 'NASRULLAH SURBAKTI', 'L', '', '0000-00-00', 'DESA  KEC.  KAB. ', '3', 'APRIANTO SURBAKTI', ''),
('0078792404', 'RADJA FAHLEVIR', 'L', '', '0000-00-00', 'DESA JL. PASE DUSUN KEUPULA KEUDE ACEH KEC. BANDA SAKTI KAB. LHOKSEUMAWE ACEH UTARA', '3', 'MAHDI', ''),
('0073735289', 'REZA ARDIANSYAH ', 'L', '', '0000-00-00', 'DESA PALOH IGEUH KEC. DEWANTARA KAB. ACEH UTARA', '3', 'SUHARDI', ''),
('0076288865', 'RIFQI MUNANDA', 'L', '', '0000-00-00', 'DESA MATANG PUNTONG KEC. SAMUDERA KAB. LHOKSEUMAWE ACEH UTARA', '3', 'BASRIDIN', ''),
('0072846063', 'SAEPUL AKBAR ', 'L', '', '0000-00-00', 'DESA  KEC.  KAB. ', '3', 'AYI RUSMANA', ''),
('0075340319', 'TEUKU MUHAMMAD FAIZAN', 'L', '', '0000-00-00', 'DESA PALOH LADA KEC. DEWANTARA KAB. ACEH UTARA', '3', 'T. MUHAMMAD FADHLI', ''),
('0079690282', 'TM. BAYHAQQI SAPUTRA', 'L', '', '0000-00-00', 'DESA TAMBON TUNONG KEC. DEWANTARA KAB. ACEH UTARA', '3', 'SALIHIN', ''),
('0076352951', 'AIDILA MAQFIRAH', 'P', '', '0000-00-00', 'DESA DUSUN PANTE TAROM BLANG TEURAKAN KEC. SAWANG KAB. ACEH UTARA', '4', 'ZULFIKAR', ''),
('0071642816', 'ALMUNADIA', 'P', '', '0000-00-00', 'DESA BLANG PANYANG KEC. MUARA SATU KAB. LHOKSEUMAWE ', '4', 'ABU BAKAR', ''),
('0072435405', 'AMALIA FAZILA', 'P', '', '0000-00-00', 'DESA DUSUN IV TAMBON BAROH KEC. DEWANTARA KAB. ACEH UTARA', '4', 'MUHAMMAD JAFAR', ''),
('0071415040', 'AUFA NAZRA', 'P', '', '0000-00-00', 'DESA TAMBON BAROH  KEC. DEWANTARA KAB. ACEH UTARA', '4', 'M. ISA', ''),
('0075157514', 'AYLA AZZAHRA', 'P', '', '0000-00-00', 'DESA PALOH LADA KEC. DEWANTARA KAB. ACEH UTARA', '4', 'BURHANUDIN', ''),
('0071207336', 'AZIKA SALINI', 'P', '', '0000-00-00', 'DESA  KEC.  KAB. ', '4', 'SAMSUL BAHRI', ''),
('0063417025', 'AZKHIA GUMAISYA', 'P', '', '0000-00-00', 'DESA DUSUN IV PALOH GADENG KEC. DEWANTARA KAB. ACEH UTARA', '4', 'NURDIN ', ''),
('0075258980', 'CUT AMIRA MAZAYA', 'P', '', '0000-00-00', 'DESA PALOH LADA KEC. DEWANTARA KAB. ACEH UTARA', '4', 'T. SYAMSUL BAHRI', ''),
('0069337845', 'CUT INTAN ZAHRIENA', 'P', '', '0000-00-00', 'DESA GAMPONG SAWANG KEC. SAWANG KAB. ACEH UTARA', '4', 'T. SUFRIZALSYAH', ''),
('0072762649', 'CUT NOVITA INDRIANI ', 'P', '', '0000-00-00', 'DESA DARUSSALAM KEC. NISAM ANTARA KAB. ACEH UTARA', '4', 'BAIHAKI', ''),
('0078427750', 'CUT PUTROE SYIFA', 'P', '', '0000-00-00', 'DESA PALOH LADA KEC. DEWANTARA KAB. ACEH UTARA', '4', 'T. CHALED BURHAN', ''),
('0079062348', 'CUT RAHMAH ', 'P', '', '0000-00-00', 'DESA UTEUN KUBU TIMU  UTEUN GEULINGGANG KEC. DEWANTARA KAB. ACEH UTARA', '4', 'IBRAHIM', ''),
('0074901700', 'CUT RIZKIA ARIMA', 'P', '', '0000-00-00', 'DESA BLANG PULO KEC. MUARA SATU KAB. LHOKSEUMAWE ', '4', 'SYUKRI', ''),
('0081968045', 'CUT SAQIA RAHMI', 'P', '', '0000-00-00', 'DESA DSN UTEUN KUBU TIMU UTEUN GEULINGGANG KEC. DEWANTARA KAB. ACEH UTARA', '4', 'AZHARI ', ''),
('0078818134', 'CUT SASKIA SALSABILA', 'P', '', '0000-00-00', 'DESA UTEUN GEULINGGANG KEC. DEWANTARA KAB. ACEH UTARA', '4', 'HERIYANTO', ''),
('0078623211', 'DEWI LIDIAWATI', 'P', '', '0000-00-00', 'DESA PALOH LADA KEC. DEWANTARA KAB. ACEH UTARA', '4', 'TUHADAR', ''),
('0075769722', 'DINA ANNISATUL MAULA', 'P', '', '0000-00-00', 'DESA GAMPONG BARAT/NISAM KEC. NISAM KAB. ACEH UTARA', '4', 'SAIFUDDIN', ''),
('0061984144', 'DURRIATUL FARIHAH', 'P', '', '0000-00-00', 'DESA TINGKEUM KEC. NISAM KAB. ACEH UTARA', '4', 'MUNIRUDDIN', ''),
('0077238369', 'FARAH AZ ZAHRA ', 'P', '', '0000-00-00', 'DESA DUSUN SUKA BAHAGIA BANGKA JAYA KEC. DEWANTARA KAB. ACEH UTARA', '4', 'MOHD ALIF ', ''),
('0069218604', 'HAFIFAH AFRA', 'P', '', '0000-00-00', 'DESA BLANG NALEUNG MAMEH KEC. MUARA SATU KAB. ACEH UTARA', '4', 'M. YANIS', ''),
('0071625530', 'HANIA QALBINA', 'P', '', '0000-00-00', 'DESA KEBON BARO KEC. SIMPANG KEURAMAT KAB. ACEH UTARA', '4', 'MUHAMMAD ALI', ''),
('0063324538', 'HEIVA NURFIA', 'P', '', '0000-00-00', 'DESA TAMBON TUNONG  KEC. DEWANTARA KAB. ACEH UTARA', '4', 'HANAFIAH', ''),
('0072201953', 'ICHA APRILIA PUTRI', 'P', '', '0000-00-00', 'DESA TELEGE SARI KEC. JAGONG JEGET  KAB. ACEH TENGAH', '4', 'ALI NURDIN', ''),
('0078640251', 'IMRATUL ULA', 'P', '', '0000-00-00', 'DESA DSN COT KUTA ULEE NYEU KEC. BANDA BARO KAB. ACEH UTARA', '4', 'ABDULLAH AR', ''),
('00779017840', 'JAZA ANIL HUSNA', 'P', '', '0000-00-00', 'DESA KEUDE KRUENG KEC. KUTA MAKMUR KAB. ACEH UTARA', '4', 'SOFYAN', ''),
('0077616218', 'JIHAN SAKINAH ALWI', 'P', '', '0000-00-00', 'DESA BTN.ARON JL.AKASIA NO.176 KEC. PALOH LADA DEWANTARA KAB. ACEH UTARA', '4', 'ALWI HUSEN', ''),
('0073903938', 'KARMILA', 'P', '', '0000-00-00', 'DESA BUNTUL PETERI KEC. PERMATA KAB. BENER MERIAH', '4', 'SUARDI', ''),
('0067604295', 'KHAIRA ULVIA', 'P', '', '0000-00-00', 'DESA  KEC.  KAB. ', '4', 'M. YUSUF', ''),
('0077845705', 'KHAIRIN NAZLA ', 'P', '', '0000-00-00', 'DESA GAMPONG SEUMIRAH KEC. NISAM ANTARA KAB. ACEH UTARA', '4', 'KALAMMUDDIN ', ''),
('0074865939', 'LASMI ', 'P', '', '0000-00-00', 'DESA BURNI PASE KEC. PERMATA KAB. BENER MERIAH', '4', 'JAFAR', ''),
('0075150679', 'LIZA HUMAIRA', 'P', '', '0000-00-00', 'DESA GAMPONG SEUMIRAH KEC. NISAM ANTARA KAB. ACEH UTARA', '4', 'ABDURRAHMAN', ''),
('0071534093', 'MARHAMAH MULIANI ', 'P', '', '0000-00-00', 'DESA BENER PEPANYI KEC. PERMATA KAB. BENER MERIAH', '4', 'KHAIRUL BAHRI', ''),
('0075710251', 'MASYKURINA RAHMATILLAH ', 'P', '', '0000-00-00', 'DESA KEUDE PANTE BREUH KEC. BAKTIYA KAB. ACEH UTARA', '4', 'AZHARI ', ''),
('0079099634', 'MAYSARAH ', 'P', '', '0000-00-00', 'DESA  KEC.  KAB. ', '4', 'SUDIRMAN ', ''),
('0073686790', 'MISKA HUSNAN PUTRI', 'P', '', '0000-00-00', 'DESA BUKET SEURAJA KEC. JULOK KAB. ACEH TIMUR', '4', 'HUSNAN', ''),
('0073612945', 'SITI SYIFA HUMAIRAH', 'P', '', '0000-00-00', 'DESA JAMBO TIMU KEC. BLANG MANGAT KAB. LHOKSEUMAWE ACEH UTARA', '4', 'M. NASIR', ''),
('0066898306', 'MOZZA NAZWA', 'P', '', '0000-00-00', 'DESA Sawang KEC. Sawang KAB. Aceh Utara', '5', 'Husni AR', ''),
('0076507781', 'NADILA ASYIFA', 'P', '', '0000-00-00', 'DESA Bangka Jaya KEC. Dewantara KAB. Aceh Utara', '5', 'Sofiyan', ''),
('0067743063', 'NAIDILA AFWANI', 'P', '', '0000-00-00', 'DESA Paloh Lada KEC. Dewantara KAB. Aceh Utara', '5', 'Junaidi', ''),
('0073147113', 'NAJWA SYAKIRA', 'P', '', '0000-00-00', 'DESA Tanjung Gusta KEC. Helvetia KAB. Medan', '5', 'Zulfikar', ''),
('0072509028', 'NOVI ALVIRA', 'P', '', '0000-00-00', 'DESA Wih Pesam KEC. Wih Pesam KAB. Bener Meriah', '5', 'Alfiannur', ''),
('0076185450', 'NURSYAFIQA', 'P', '', '0000-00-00', 'DESA Paloh Lada KEC. Dewantara KAB. Aceh Utara', '5', 'Azharuddin', ''),
('0073862841', 'NURUL AZIZAH', 'P', '', '0000-00-00', 'DESA Binjee KEC. Nisam KAB. Aceh Utara', '5', 'Muhammad', ''),
('0066202603', 'OLA ASRINA', 'P', '', '0000-00-00', 'DESA Paloh Mampree KEC. Nisam KAB. Aceh Utara', '5', 'Mayyeddin Ahmad', ''),
('0078239976', 'QAYLA FALISHA', 'P', '', '0000-00-00', 'DESA Reuleut Timu KEC. Muara Batu KAB. Aceh Utara', '5', 'Nasruddin, SP. M.Si', ''),
('0062681739', 'RAIHAN AMALIA', 'P', '', '0000-00-00', 'DESA Blang Naleung Mameh KEC. Muara Satu KAB. Lhokseumawe', '5', 'Lidan Syah', ''),
('0073900287', 'RATU BALQIS', 'P', '', '0000-00-00', 'DESA Kede Bungkaih KEC. Muara Batu KAB. Aceh Utara', '5', '', ''),
('0073268668', 'RAUDHATUL AMANI', 'P', '', '0000-00-00', 'DESA Bangka Jaya KEC. Dewantara KAB. Aceh Utara', '5', 'ABD. Syakur', ''),
('0081289725', 'RIDHANI AZQIA', 'P', '', '0000-00-00', 'DESA Blang Dalam Geunteng  KEC. Nisam KAB. Aceh Utara', '5', 'M. Riza Syauki', ''),
('0072544445', 'RISKA NURFADHILA', 'P', '', '0000-00-00', 'DESA Bie KEC. Syamtalira Bayu KAB. Aceh Utara', '5', 'Rasyadan AR', ''),
('0071525384', 'ROYA TETRA NADA', 'P', '', '0000-00-00', 'DESA Blang Panjoe KEC. Peusangan KAB. Bireuen', '5', 'Rahmad', ''),
('0075174211', 'SABITA ALYANDA ZAHIRA', 'P', '', '0000-00-00', 'DESA Blang Naleung Mameh KEC. Muara Satu KAB. Lhokseumawe', '5', 'Zakaria Yusuf', ''),
('0077259621', 'SAIMA KAMILA', 'P', '', '0000-00-00', 'DESA Geurugok KEC. Gandapura KAB. Bireuen', '5', 'Alfian Hasbi', ''),
('0062974489', 'SALMA WATI', 'P', '', '0000-00-00', 'DESA Bener Pepanyi KEC. Permata KAB. Bener Meriah', '5', 'Johari HS', ''),
('0081665078', 'SALSA SYAHIA PUTRI', 'P', '', '0000-00-00', 'DESA Jeget Ayu KEC. Jagong Jeget KAB. Aceh Tengah', '5', 'Jamal Yuliantoro', ''),
('0074624875', 'SAYYIDA NAFISA', 'P', '', '0000-00-00', 'DESA Paloh Lada KEC. Dewantara KAB. Aceh Utara', '5', 'Sofian', ''),
('0066994727', 'SILFIA ZUHRA', 'P', '', '0000-00-00', 'DESA Paloh Punti KEC. Muara Satu KAB. Aceh Utara', '5', 'Ismardi', ''),
('0072554769', 'SYARIFAH MAULIDA', 'P', '', '0000-00-00', 'DESA Tambon Baroh KEC. Dewantara KAB. Aceh Utara', '5', 'Said Alwi', ''),
('0064949360', 'SYAFITRIA', 'P', '', '0000-00-00', 'DESA Blang Naleung Mameh KEC. Muara Satu KAB. Lhokseumawe', '5', 'Junaidi', ''),
('0072544490', 'SYATTA NURJANNAH', 'P', '', '0000-00-00', 'DESA Simpang Keramat KEC. simpang Keramat KAB. Lhokseumawe', '5', 'M. Efendi', ''),
('0075060040', 'ULYA NAFISHA', 'P', '', '0000-00-00', 'DESA Uteuen Geulinggang KEC. Dewantara KAB. Aceh Utara', '5', 'Sayuti Anwar', ''),
('0086480881', 'ZAKIATUL ULFA', 'P', '', '0000-00-00', 'DESA Teupin Reusep KEC. Sawang KAB. Aceh Utara', '5', 'Mursalin, S.Pd', ''),
('0065201555', 'ZASKIA RAMADHANI', 'P', '', '0000-00-00', 'DESA Uteuen Geulinggang KEC. Dewantara KAB. Aceh Utara', '5', 'Aan Gunawan', ''),
('0075306688', 'ZATIN SULAIHA', 'P', '', '0000-00-00', 'DESA Uteuen Geulinggang KEC. Dewantara KAB. Aceh Utara', '5', 'Syahmidan', ''),
('0076896027', 'ZIAN AYU HUMAIRAH', 'P', '', '0000-00-00', 'DESA Blang Raleu KEC. Simpang Kramat KAB. Kota Lhokseumawe', '5', 'Murdani', ''),
('0071902366', 'ZIYATUL FATIYA', 'P', '', '0000-00-00', 'DESA Paloh Gadeng KEC. Dewantara KAB. Aceh Utara', '5', 'Saiful Abdullah', ''),
('0073423100', 'AHMAD ZAKI', 'L', '', '0000-00-00', 'DESA TAMBON TUNONG', '6', 'JATANIZAR', ''),
('0061602146', 'ANDRE IRAWAN', 'L', '', '0000-00-00', 'DESA Berawang Dewai', '6', 'SUPARMIN', ''),
('0059626615', 'ERLANGGA', 'L', '', '0000-00-00', 'DESA SERULE KAYU', '6', 'IRWAN', ''),
('0064546546', 'FARHAN MAULNA', 'L', '', '0000-00-00', 'DESA Gp. Alue Dua Nisam', '6', 'ABDULLAH, S.Pd.', ''),
('0063801612', 'FERI ISWANDA', 'L', '', '0000-00-00', 'DESA Paya Dua', '6', 'ISMAIL RAOH', ''),
('0062197371', 'ILHAM MAULANA', 'L', '', '0000-00-00', 'DESA Batuphat Barat', '6', 'SOFYAN M.NUR', ''),
('0077320219', 'LIANDI PASHA', 'L', '', '0000-00-00', 'DESA BLUKA TEUBAI', '6', 'M. JUNAIDI', ''),
('0061075804', 'MUHAMMAD AZHAR REFANDI', 'L', '', '0000-00-00', 'DESA MEUNASAH MESJID', '6', 'BAKHTIAR', ''),
('0061441052', 'MUHAMMAD DAFFA IRFANSYAH GINTING', 'L', '', '0000-00-00', 'DESA KOMPLEKS BTN AAF', '6', 'M. FAHRIZKI', ''),
('0061360091', 'MUHAMMAD FAIZ', 'L', '', '0000-00-00', 'DESA KOMPLEKS PT PIM', '6', 'RAZALI', ''),
('0079259409', 'MUHAMMAD FARABI ALFATH', 'L', '', '0000-00-00', 'DESA BTN ARUN PALOH LADA', '6', 'BOBBY EDWARD,S.Hut.', ''),
('0087009763', 'MUHAMMAD FARAS', 'L', '', '0000-00-00', 'DESA PALOH LADA', '6', 'ZULKHIARI', ''),
('0059398978', 'MUHAMMAD FARIDHI AL MUHASIBI', 'L', '', '0000-00-00', 'DESA Pintu II Blang Pulo', '6', 'MUHAMMAD AMIN', ''),
('0066382479', 'MUHAMMAD HAIQAL SAPUTRA', 'L', '', '0000-00-00', 'DESA RHENG BLUEK', '6', 'JAFAR ', ''),
('0066805079', 'MUHAMMAD REHAN FAIZUL', 'L', '', '0000-00-00', 'DESA KRUENG GEUKUEH', '6', 'HABIBI', ''),
('0067630859', 'MUHAMMAD REZA FAHLEVI', 'L', '', '0000-00-00', 'DESA PALOH LADA', '6', 'M. ADAMI', ''),
('0057638074', 'MUHAMMAD REZA SHAH FAHLEVI', 'L', '', '0000-00-00', 'DESA TAMBON TUNONG', '6', 'SUDIRMAN SULAIMAN', ''),
('0064854632', 'MUHAMMAD ZAMZAMI TRI PUTRA', 'L', '', '0000-00-00', 'DESA PALOH GADENG', '6', 'IBRAHIM', ''),
('0064987815', 'MUHAMMAD ZULFA', 'L', '', '0000-00-00', 'DESA Desa Blang buloh', '6', 'NURDIN MAHMUD', ''),
('0067669221', 'MUKLISSUDDIN', 'L', '', '0000-00-00', 'DESA BATHUPAT TIMUR', '6', 'ILYAS', ''),
('0064753452', 'NAZAR AL FARABI. M', 'L', '', '0000-00-00', 'DESA GAMPONG JAWA', '6', 'MUNADI', ''),
('0067684641', 'NAZRIL HABIBI', 'L', '', '0000-00-00', 'DESA DESA PALOH LADA', '6', 'ZULHADINUR', ''),
('0066403316', 'NIZAM ANWAR', 'L', '', '0000-00-00', 'DESA BATHUPAT BARAT', '6', 'ANWAR JALIL', ''),
('0059028234', 'RAIS HIDAYAT', 'L', '', '0000-00-00', 'DESA DESA MANE TUNONG', '6', 'SYAMBUDIMAN (ALM)', ''),
('0068852758', 'TEUKU DIANDRA ARIIQ ROFI', 'L', '', '0000-00-00', 'DESA KEUDE BUNGKAIH', '6', 'T. SAIFUL AKBAR', ''),
('0064135447', 'AHMAD TAJUL FAUZY', 'L', '', '0000-00-00', 'DESA KUMBANG KEC. TANAH PASIR KAB. ACEH UTARA', '7', 'NAZARUDDIN', ''),
('0069331459', 'AHMAD ZUBAIDY', 'L', '', '0000-00-00', 'DESA BLANG PANYANG KEC. MUARA SATU KAB. ACEH UTARA', '7', 'MURSALIN', ''),
('0077049319', 'AKBAR MAULANA', 'L', '', '0000-00-00', 'DESA GAMPONG SEUMIRAH KEC. NISAM KAB. ACEH UTARA', '7', 'ZULFADLI', ''),
('0052520543', 'ARIYAT TAYSIR', 'L', '', '0000-00-00', 'DESA GAMPONG SAWANG KEC. SAWANG KAB. ACEH UTARA', '7', 'ANWAR', ''),
('0064815260', 'AZRULMUWAFFAR', 'L', '', '0000-00-00', 'DESA BLANG NALEUNG MAMEH KEC. MUARA SATU KAB. ACEH UTARA', '7', 'MUZAKIR AR', ''),
('0063411217', 'EVAN ALVATRA', 'L', '', '0000-00-00', 'DESA INDRA KASIH KEC. MEDAN TEMBUNG KAB. MEDAN', '7', 'RAHMAD', ''),
('0066381955', 'FAHRIL AULIYA', 'L', '', '0000-00-00', 'DESA TAMBON TUNONG KEC. DEWANTARA KAB. ACEH UTARA', '7', 'FAISAL', ''),
('0076485149', 'FATAHUL KARIB', 'L', '', '0000-00-00', 'DESA  KEC.  KAB. ', '7', 'BOIHAKI', ''),
('0067309966', 'FUANIS AL- KHALIDI', 'L', '', '0000-00-00', 'DESA BLANG DALAM BAROH KEC. NISAM KAB. ACEH UTARA', '7', 'MUHIFUDDIN', ''),
('0065225156', 'HAIKAL KURMI', 'L', '', '0000-00-00', 'DESA GAMPONG ALUE DUA KEC. NISAM ANTARA KAB. ACEH UTARA', '7', 'MASKUR', ''),
('0068950273', 'IMAM ALWAFIE', 'L', '', '0000-00-00', 'DESA GAMPONG JAMUAN KEC. BANDA  BARO KAB. ACEH UTARA', '7', 'ZAKIR HUSEN', ''),
('0057647785', 'IRFAN RAMADHAN', 'L', '', '0000-00-00', 'DESA SAWANG KEC. SAWANG KAB. ACEH UTARA', '7', 'SAMSUL BAHRI', ''),
('0066313759', 'KHAIRUZ ZAKI', 'L', '', '0000-00-00', 'DESA UTEUN GEULINGGANG KEC. DEWANTARA KAB. ACEH UTARA', '7', 'ZULKARNAINI', ''),
('0068336265', 'M. ARIL FIRMANSYAH', 'L', '', '0000-00-00', 'DESA MEUNASAH PINTO KEC. MUARA BATU KAB. ACEH UTARA', '7', 'ZULKIFLI', ''),
('0072671505', 'MUHAMMAD FIRZA AULYA', 'L', '', '0000-00-00', 'DESA BATUPHAT BARAT KEC. MUARA SATU KAB. ACEH UTARA', '7', 'DADENG SULIADI', ''),
('0068169039', 'MUHAMMAD IKHSAN', 'L', '', '0000-00-00', 'DESA PALOH KAYEE KUNYET KEC. NISAM KAB. ACEH UTARA', '7', 'HAMDANSYAH', ''),
('0067596592', 'M. IQBAL MUBARAQ', 'L', '', '0000-00-00', 'DESA BUKET RATA KEC. BLANG MANGAT KAB. LHOKSEUMAWE', '7', 'SAMSUL BAHRI', ''),
('0059956886', 'M. IQBAL SAYUTI', 'L', '', '0000-00-00', 'DESA UTEUNKOT KEC. MUARA DUA KAB. LHOKSEUMAWE', '7', 'ABDULLAH', ''),
('0061632004', 'MUHAMMAD KHALID', 'L', '', '0000-00-00', 'DESA TAMBON TUNONG KEC. DEWANTARA KAB. ACEH UTARA', '7', 'MUHAMMAD ZAINI', ''),
('0058710988', 'M.ANDI ILHAMI', 'L', '', '0000-00-00', 'DESA BUGAK BLANG KEC. JANGKA KAB. BIREUEN', '7', 'JAMALUDDIN', ''),
('0066310472', 'MUHAMMAD NAJWAR', 'L', '', '0000-00-00', 'DESA MNS DAYAH MEUNARA KEC. KUTA MAKMUR KAB. ACEH UTARA', '7', 'T.TAJUDDIN', ''),
('0057279465', 'RAJUL AQLI', 'L', '', '0000-00-00', 'DESA BLANG CUT KEC. SAWANG KAB. ACEH UTARA', '7', 'ISHADI', ''),
('0065071042', 'AHMAD FAYYADH', 'L', '', '0000-00-00', 'DESA SIMPANG EMPAT KEC. BANDA SAKTI KAB. ACEH UTARA', '8', 'M. HUSIN', ''),
('0064229912', 'FATHUR RAHMAN', 'L', '', '0000-00-00', 'DESA TAMBON BAROH KEC. DEWANTARA KAB. ACEH UTARA', '8', 'MAHDI', ''),
('0033308195', 'MUHAMMAD SUHAIMI AMALFASYA', 'L', '', '0000-00-00', 'DESA PALOH LADA KEC. DEWANTARA KAB. ACEH UTARA', '8', 'ZULKIFLI', ''),
('0067228967', 'M. ASYURA', 'L', '', '0000-00-00', 'DESA GLUMPANG SULU BARAT KEC.  KAB. ', '8', '', ''),
('0059156400', 'M. ILHAM RAHMADANU', 'L', '', '0000-00-00', 'DESA TAMBON BAROH KEC. DEWANTARA KAB. ACEH UTARA', '8', 'AZHARI', ''),
('0063295825', 'MUHAMMAD ZIDAN YASIN', 'L', '', '0000-00-00', 'DESA BATUPHAT BARAT KEC. MUARA SATU KAB. LHOKSEUMAWE', '8', 'MUHAMMAD YASIN', ''),
('0068907276', 'MUHAMMAD JARJANI', 'L', '', '0000-00-00', 'DESA BLANG BULOH KEC. BLANG MANGAT KAB. LHOKSEUMAWE', '8', 'INSAFUDDIN', ''),
('0063853889', 'MAULANA AL MUBARAQ', 'L', '', '0000-00-00', 'DESA BUGAK KRUENG KEC. JANGKA KAB. BIREUEN', '8', 'FAUZI', ''),
('0067134410', 'MOHAMMAD FAIZ ALKAUTSAR', 'L', '', '0000-00-00', 'DESA PALOH GADENG KEC. DEWANTARA KAB. ACEH UTARA', '8', 'SAIFUDDIN NURDIN', ''),
('0064675141', 'MUHAMMAD IHSAN', 'L', '', '0000-00-00', 'DESA BATUPHAT TIMUR KEC. MUARA SATU KAB. ACEH UTARA', '8', 'ARIF ARIANTO', ''),
('0064107079', 'MUHAMMAD RAZI', 'L', '', '0000-00-00', 'DESA MEUNASAH PINTO KEC. MUARA BATU KAB. ACEH UTARA', '8', 'RAMLI', ''),
('00000003', 'MUHAMMAD SYAKIR', 'L', '', '0000-00-00', 'DESA  KEC.  KAB. ', '8', '', ''),
('0067754689', 'NIZHAM NYAK AULIA', 'L', '', '0000-00-00', 'DESA DUSUN COT MESJID KEC. UTEUN GEULINGGANG KAB. ACEH UTARA', '8', 'NIRWANSYAH', ''),
('0052863480', 'RAJA SYIBRAN MALISYI', 'L', '', '0000-00-00', 'DESA PALOH GADENG KEC. DEWANTARA KAB. ACEH UTARA', '8', 'M. NASIR', ''),
('0053281014', 'RAJIF FANDI', 'L', '', '0000-00-00', 'DESA PALOH LADA KEC. DEWANTARA KAB. ACEH UTARA', '8', 'WALIYUDDIN', ''),
('0066653964', 'REZA APRIAN', 'L', '', '0000-00-00', 'DESA REULEUT TIMU KEC. MUARA BATU KAB. ACEH UTARA', '8', 'AGUS SALEM HUSEN', ''),
('0067943224', 'RIFKI JUANDA', 'L', '', '0000-00-00', 'DESA PANTON RAYEUK KEC. KUTA MAKMUR KAB. ACEH UTARA', '8', 'ZIKRULLAH', ''),
('0063304290', 'RIZKY AULIA', 'L', '', '0000-00-00', 'DESA KEUDE BUNGKAIH KEC. MUARA BATU KAB. ACEH UTARA', '8', 'ASNAWI', ''),
('0053326959', 'SAFDI WAN FITRA', 'L', '', '0000-00-00', 'DESA BENER PEPANYI KEC. PERMATA KAB. BENER MERIAH', '8', 'JULIDIN', ''),
('0047114514', 'SAIFULLAH', 'L', '', '0000-00-00', 'DESA PALOH GADENG KEC. DEWANTARA KAB. ACEH UTARA', '8', 'USMAN', ''),
('0000004', 'SAYYID M.NAFIS', 'L', '', '0000-00-00', 'DESA  KEC.  KAB. ', '8', '', ''),
('0053832464', 'SHADIQ AL ACHIE', 'L', '', '0000-00-00', 'DESA GAMPONG PAYA DUA KEC. BANDA BARO KAB. ACEH UTARA', '8', 'AMIRUDDIN B', ''),
('0044838561', 'TURHAMUN', 'L', '', '0000-00-00', 'DESA MEUNASAH DRANG KEC. MUARA BATU KAB. ACEH UTARA', '8', 'BAKHTIAR', ''),
('0069902561', 'Alya Izzani', 'P', '', '0000-00-00', 'Dusun Pulo Blang Desa Rheng Bluek Kec. Meurah Mulia Kab Aceh Utara', '9', 'Saiful Basri', ''),
('0069722952', 'Aina Salsabila', 'P', '', '0000-00-00', 'Sadong Juru Mudi Kec. Bebesan Kab. Aceh Tengah', '9', 'Asnawi', ''),
('0058955255', 'Aisyah Nurul Indah', 'P', '', '0000-00-00', 'Dusun III Perdamaian Tambon Baroh Kec. Dewantara', '9', 'Junaidi Azwar, A.Md', ''),
('0067784071', 'Alfira Salsi Firasy', 'P', '', '0000-00-00', 'Dusun II Alue Puntong', '9', 'Muksalmina', ''),
('0067135939', 'Aulia Khanza Az-Zahra', 'P', '', '0000-00-00', 'Kompleks  SMP Negeri 3 Nimboran Blok B Benyam jaya II', '9', 'Saiful Kamal', ''),
('0062231376', 'Azkia Syahira', 'P', '', '0000-00-00', 'Dusun Arafah Meunasah Meucat Kec. Nisam Kab. Aceh Utara', '9', 'Rudiyanto', ''),
('0069712418', 'Azzaria Ulfa', 'P', '', '0000-00-00', 'Keude Meunasah Meucat Nisam', '9', 'Azhar ST', ''),
('0067092823', 'Cut Najla Meutia Mufti', 'P', '', '0000-00-00', 'Dusun Batei Timoh Desa Keude Krueng Geukueh Kec. Dewantara Kab. Aceh Utara', '9', 'Mujiburrahman', ''),
('0053872066', 'Deshinta Putri Adilla', 'P', '', '0000-00-00', 'Dusun Cot Trieng Keude Krueng Geukueh Kec. Dewantara Kab. Aceh Utara', '9', 'Faisal Adi', ''),
('0052904147', 'Dhinie Farischa', 'P', '', '0000-00-00', 'Dusun II Sentosa Tambon Baroh', '9', 'Helman Fuadi', ''),
('0051794032', 'Hayatul nufus', 'P', '', '0000-00-00', 'Dusun IV Munawarah Paloh Gadeng Kec. Dewantara Kab.Aceh Utara', '9', 'Muhammad', ''),
('0069196814', 'Intan Nuraini', 'P', '', '0000-00-00', 'Dusun Blm Utara Blang Naleung Mameh Kec. Muara Satu Kota Lhokseumawe', '9', 'Zainal Arifin', ''),
('0061243847', 'Khairatul Fadhilah Asyari', 'P', '', '0000-00-00', 'Dusun Paya Dua Gampong Paya Dua Kec. Banda Baro Kab. Aceh Utara', '9', 'Asyari', ''),
('0073605420', 'Laiza Saskia', 'P', '', '0000-00-00', 'BTN AAF Blok C-6 RT/RW 004 Paloh Lada Kec. Dewantara Kab. Aceh Utara', '9', 'Harris Sukma Putra', ''),
('0065073496', 'Mahdalena', 'P', '', '0000-00-00', 'Dusun Cot Dua Blang Karieng Kec. Nisam Kab. Aceh Utara', '9', 'Rusli Ismail', ''),
('0064674080', 'Munawarah', 'P', '', '0000-00-00', 'Dusun Banda Khalifah Gampong Alue Papeun Kec. Nisam Antara Kab. Aceh Utara', '9', 'Hasanuddin', ''),
('0063241933', 'Nabila Assyifa', 'P', '', '0000-00-00', 'Batuphat Timur Kec.Muara Satu', '9', 'Suryadi', ''),
('0061973264', 'Nabila Ulfa', 'P', '', '0000-00-00', 'Dusun Tgk Mahdi Desa Geurugok Kec. Gandapura Kab. Bireuen', '9', 'Tarmizi', ''),
('0055127064', 'Nabila Yusuf', 'P', '', '0000-00-00', 'Dusun Muda Suara Desa Gampong Peunayan Kec. Nisam Kab. Aceh Utara', '9', 'Yusuf ( Alm)', ''),
('0062770438', 'Naifa Alfiati', 'P', '', '0000-00-00', 'Dusun B.Batuphat Timur Kec. Muara Satu Kota Lhokseumawe', '9', 'Hasan Ibrahim', ''),
('0059531228', 'Nailatul Fadhilah', 'P', '', '0000-00-00', 'Jl. Gajah Mada No.14 Padang Sumatra Barat', '9', 'Saiful Hidayat', ''),
('0066129772', 'Najlatul Fadhilah', 'P', '', '0000-00-00', 'Jl. Gajah Mada No.14 Padang Sumatra Barat', '9', 'Saiful Hidayat', ''),
('0065833844', 'Najwa Marzuki', 'P', '', '0000-00-00', 'Dusun Blang Batei Leu   Desa Meunasah Buket Kec. Kuta Makmur Kab. Aceh Utara', '9', 'Marzuki Abd Jalil', ''),
('0069785359', 'Nazila Asyifa', 'P', '', '0000-00-00', 'Dusun Beng Pineung Desa Tanoh Mirah Kec. Peusangan Kab. Bireuen', '9', 'Mustafa', ''),
('0068707581', 'Nor Alya Natasya', 'P', '', '0000-00-00', 'Dusun Cot Trieng Lhok Bayu Kec. Sawang Kab. Aceh Utara', '9', 'Samsul Bahri', ''),
('0067089053', 'Naylatul Rahmah', 'P', '', '0000-00-00', 'Dusun Uteun Kubu Timu Uteuen Geulinggang Kec. Dewantara Kab. Aceh Utara', '9', 'Nuzul Bahri', ''),
('0068020600', 'Ocha Syahwani', 'P', '', '0000-00-00', 'Jl. Kemuning IV Blok E-23 No.12 Pondok Indah Desa Kutabumi', '9', 'Iwan Guswandar(Alm)', ''),
('0066185642', 'Riska Julina', 'P', '', '0000-00-00', 'Jl. Cemara II No. 129 Dusun Arun Paloh Lada Kec. Dewantara Kab. Aceh Utara', '9', 'M.Nasir', ''),
('0064886896', 'Safiatul Ahzan', 'P', '', '0000-00-00', 'Dusun Barat Meunasah Meucat Kec.Nisam Kab. Aceh Utara', '9', 'Abdul Karim', ''),
('0056221002', 'Shafira Ramadhani', 'P', '', '0000-00-00', 'Paloh Punti Kec. Muara Satu', '9', 'Heri Afriadi', ''),
('0067730885', 'Shella Humaira', 'P', '', '0000-00-00', 'Bandar', '9', 'Musrizal', ''),
('0064273406', 'Siti Rahmah', 'P', '', '0000-00-00', 'Jl. Akasia No.157 BTN Arun Paloh Lada', '9', 'Mahyuddin', ''),
('0061674134', 'Syakiratul Wasiah Asyari', 'P', '', '0000-00-00', 'Dusun Paya Dua Gampong Paya Dua Kec. Banda Baro Kab. Aceh Utara', '9', 'Asyari', ''),
('0061852572', 'Ulfia  Zahra', 'P', '', '0000-00-00', 'Dusun Arongan Blang Pulo Kec. Muara Satu', '9', 'Saifuddin', ''),
('0065416638', 'Ulya Salsabila', 'P', '', '0000-00-00', 'Dusun Sejahtera Matang Bungong Kec. Idi Timur', '9', 'Rusli', ''),
('0071158726', 'Unasya Putri Diandani', 'P', '', '0000-00-00', 'Dusun Uteuen KubU Timu Uteuen Geulinggang Kec. Dewantara Kab. Aceh Utara', '9', 'Murdani', ''),
('0068857019', 'Wilda Jannati', 'P', '', '0000-00-00', 'Dusun Beringin Dua Keude Krueng Geukueh Kec. Dewantara Kab. Aceh Utara', '9', 'Aiyub Sami', ''),
('0067435091', 'Ziaul Zahra', 'P', '', '0000-00-00', 'Dusun Cot Trieng Barat Uteuen Geulinggang Kec. Dewantara Kab. Aceh Utara', '9', 'Razali', ''),
('0055877413', 'AINAYYA HARISUL KHAIRA', 'P', '', '0000-00-00', 'DESA PALOH GADENG KEC. DEWANTARA KAB. ACEH UTARA', '10', 'MUSTAFA KAMAL', ''),
('0063544726', 'CUT ALYA', 'P', '', '0000-00-00', 'DESA PALOH IGEUH KEC. DEWANTARA KAB. ACEH UTARA', '10', 'SUPRATMAN', ''),
('0065585829', 'CUT NORASYIKIN', 'P', '', '0000-00-00', 'DESA BLANG PULO KEC. MUARA SATU KAB. ACEH UTARA', '10', 'BANI AMIN', ''),
('0063860961', 'DAFRIA NAILA', 'P', '', '0000-00-00', 'DESA SIMPANG BALIK KEC. WIH PESAM KAB. BENER MERIAH', '10', 'LUKMAN', ''),
('0065208756', 'DZAKIRANIA', 'P', '', '0000-00-00', 'DESA MEUNASAH PULO KEC. PEUDADA KAB. BIREUEN', '10', 'ZULKIFLI', ''),
('0063936785', 'FARADILA BAHAR', 'P', '', '0000-00-00', 'DESA KEMILI KEC. BEBESEN KAB. ACEH TENGAH', '10', 'BAHARUDDIN AR', ''),
('0066816366', 'IRHAMI', 'P', '', '0000-00-00', 'DESA MEUNASAH BUKET KEC. KUTA MAKMUR KAB. ACEH UTARA', '10', 'BACHTIAR', ''),
('0068758126', 'KHAIRINA', 'P', '', '0000-00-00', 'DESA GEULANGGANG TEUNGOH KEC. KOTA JUANG KAB. BIREUEN', '10', 'SUBANDI SYAHPUTRA', ''),
('0055456523', 'LAIZA FAZRINA', 'P', '', '0000-00-00', 'DESA PABUARAN KEC. CIBINONG BOGOR KAB. JAWA BARAT', '10', 'SAIFUL BAHRI', ''),
('0063303476', 'MARDHIAH ULFA', 'P', '', '0000-00-00', 'DESA PALOH GADENG KEC. DEWANTARA KAB. ACEH UTARA', '10', 'ABDUL MUNIR', ''),
('0066466592', 'MAULA AZKIRA', 'P', '', '0000-00-00', 'DESA GAMPONG SANGKELAN KEC. BANDA BARO KAB. ACEH UTARA', '10', 'MUHAMMAD NAZIR', ''),
('0061551261', 'MAULIANI', 'P', '', '0000-00-00', 'DESA GAMPONG PAYA DUA KEC. BANDA BARO KAB. ACEHUTARA', '10', 'ISKANDAR', ''),
('00000005', 'MILDA SYAFIRA', 'P', '', '0000-00-00', 'DESA MEE TEUNGOH KEC. MUTIARA KAB. PIDIE', '10', 'ABDULLAH PUTEH ', ''),
('0064043856', 'NAILA AMELIA', 'P', '', '0000-00-00', 'DESA PALOH LADA KEC. DEWANTARA KAB. ACEH UTARA', '10', 'ISKANDAR', ''),
('0066569742', 'NAILA ULFA', 'P', '', '0000-00-00', 'DESA BATUPHAT BARAT KEC. MUARA SATU KAB. LHOKSEUMAWE', '10', 'MUHAMMAD YUSUF', ''),
('0067033015', 'NAILATUL FADHILA', 'P', '', '0000-00-00', 'DESA LHOKSUKON KEC. SAWANG KAB. ACEH UTARA', '10', 'SYUAIB', ''),
('0085134979', 'NAJLA ROJWAA', 'P', '', '0000-00-00', 'DESA PALOH LADA KEC. DEWANTARA KAB. ACEH UTARA', '10', 'SYARIDIN ALI', ''),
('0065004063', 'NAZWA RUZIQNA', 'P', '', '0000-00-00', 'DESA TAMBON BAROH KEC. DEWANTARA KAB. ACEH UTARA', '10', 'RAZALI', ''),
('0065484646', 'NAZWINA AMANDA', 'P', '', '0000-00-00', 'DESA BATUPHAT TIMUR KEC. MUARA SATU KAB. LHOKSEUMAWE', '10', 'HASAN BASRI', ''),
('0066660230', 'QAILA THAHIRA', 'P', '', '0000-00-00', 'DESA RHENG BLUEK KEC. MEURAH MULIA KAB. ACEH UTARA', '10', 'KAMARUDDIN', ''),
('0072882925', 'RAUDHATUL MUNAWARAH', 'P', '', '0000-00-00', 'DESA KEUDE KRUENG KEC. KUTA MAKMUR KAB. ACEH UTARA', '10', 'NASRUDDIN', ''),
('0072834688', 'RINA SAFIRA', 'P', '', '0000-00-00', 'DESA JAROMMAH BAROH KEC. KUTA BLANG KAB. BIREUEN', '10', 'FAJRI M. NASIR', ''),
('0054268212', 'RISKA NAFTALY NUR SIREGAR', 'P', '', '0000-00-00', 'DESA BATUPHAT BARAT KEC. MUARA SATU KAB. LHOKSEUMAWE', '10', 'RUSLAN S', ''),
('0066579980', 'RIZKA MAULIZA ADNI', 'P', '', '0000-00-00', 'DESA GAMPONG BLANG PALA KEC. BANDA BARO KAB. ACEH UTARA', '10', 'ADI SURYADI', ''),
('0061400201', 'SASKIA MUNIRA', 'P', '', '0000-00-00', 'DESA KRUENG SEUNONG KEC. KUTA MAKMUR KAB. ACEH UTARA', '10', 'SYAHRUL', ''),
('0061269016', 'SYANDA MUNAIYA', 'P', '', '0000-00-00', 'DESA TAMBON BAROH KEC. DEWANTARA KAB. ACEH UTARA', '10', 'SAIFUL ADLA', ''),
('0075072458', 'SITI MUTHMAINNAH', 'P', '', '0000-00-00', 'DESA PALOH LADA KEC. DEWANTARA KAB. ACEH UTARA', '10', 'TASLIM', ''),
('0059657677', 'SUCI RAMADHANI', 'P', '', '0000-00-00', 'DESA PALOH AWE KEC. MUARA BATU KAB. ACEH UTARA', '10', 'RAHMAT HIDAYAT', ''),
('0058045897', 'SYAHBINA MAHARANI', 'P', '', '0000-00-00', 'DESA SIMPANG BALIK KEC. WIH PESAM KAB. BENER MERIAH', '10', 'HADI ISWANDI', ''),
('0058519975', 'SYIFAUL QALBI', 'P', '', '0000-00-00', 'DESA TAMBON BAROH KEC. DEWANTARA KAB. ACEH UTARA', '10', 'MURSALIN', ''),
('0063619365', 'ULFIA FADILLA', 'P', '', '0000-00-00', 'DESA KEUDE KRUENG GEUKUEH KEC. DEWANTARA KAB. ACEH UTARA', '10', 'SAMSUDDIN', ''),
('0069724955', 'WILDATUL ADINDA', 'P', '', '0000-00-00', 'DESA GAMPONG PEUNAYAN KEC. NISAM KAB. ACEH UTARA', '10', 'JONI EFENDI', ''),
('0066655509', 'YAVIQA ASLAMA', 'P', '', '0000-00-00', 'DESA GAMPONG SAWANG KEC. SAWANG KAB. ACEH UTARA', '10', 'MUHAMMAD', ''),
('0066408605', 'YUNA ZILLA', 'P', '', '0000-00-00', 'DESA BLANG NALEUNG MAMEH KEC. MUARA SATU KAB. LHOKSEUMAWE', '10', 'YUSRI YUSUF', ''),
('0057911613', 'ABDUL AZIZ', 'L', '', '0000-00-00', 'UTEUN GEULINGGANG', '11', 'SAYUTI ANWAR', ''),
('0051933076', 'ADE SAIFANNUR', 'L', '', '0000-00-00', 'PALOH LADA', '11', 'SYAMAUN', ''),
('0038361697', 'ADLIL FATA', 'L', '', '0000-00-00', 'COT GIREK KANDANG', '11', 'ZULFIKAR', ''),
('0058058295', 'ALDI AULIA AL ZIKRI MAULANA', 'L', '', '0000-00-00', 'GAMPONG BARAT', '11', 'MUNIRUDDIN', ''),
('0059127514', 'ALFAIZUN OULA', 'L', '', '0000-00-00', 'PALOH GADENG', '11', 'BOIHAKI M YUNUS', ''),
('0051956398', 'ALFANNUR', 'L', '', '0000-00-00', 'ASAN BIDEUN', '11', 'MUAKHIR', ''),
('0051933034', 'ANZER PRATAMA IRAWAN', 'L', '', '0000-00-00', 'PALOH GADENG', '11', 'INDRA IRAWAN', ''),
('0058810411', 'ARI FIQRAM MAULANA', 'L', '', '0000-00-00', 'MEUNASAH ARON', '11', 'HASBI', ''),
('0056944292', 'FAZLUL MAULANA', 'L', '', '0000-00-00', 'ASAN BIDEUN', '11', 'HAMDANI', ''),
('0058508786', 'FERDIAN', 'L', '', '0000-00-00', '', '11', 'JUHADAR', ''),
('0050858609', 'M.AZJI', 'L', '', '0000-00-00', 'PALOH LADA', '11', 'ZULFIKAR', ''),
('0054376037', 'M.IZLAL MUZHAFFAR', 'L', '', '0000-00-00', 'BUGAK KRUENG MATE', '11', 'ISMUIL', ''),
('0057039579', 'M.RAIYAN FADLI', 'L', '', '0000-00-00', 'MEUNASAH MEUCAT', '11', 'RASYIDIN KS', ''),
('0051595362', 'MUHAMMAD ABDUL HARIS', 'L', '', '0000-00-00', 'BATUPHAT TIMUR', '11', 'SURYADI', ''),
('0051933037', 'MUHAMMAD ALFARISI ARSYA', 'L', '', '0000-00-00', 'PALOH LADA', '11', 'SYAFRIZAL', ''),
('0055264906', 'MUHAMMAD ALVIN', 'L', '', '0000-00-00', 'KEUDE BUNGKAIH', '11', 'NURDIN YUNUS', ''),
('0051933061', 'MUHAMMAD DIA SATIAWAN', 'L', '', '0000-00-00', 'PALOH GADENG', '11', 'ANWAR', ''),
('0040493607', 'MUHAMMAD FAUZUL KABIR', 'L', '', '0000-00-00', 'BANGKA JAYA', '11', 'NURDIN M.ALI', ''),
('0051272807', 'MUHAMMAD GABRIL ALI', 'L', '', '0000-00-00', 'BANGKA JAYA', '11', 'MUHADAR', ''),
('0046918249', 'MUHAMMAD NAUFAL IRAWAN', 'L', '', '0000-00-00', 'BATUPHAT TIMUR', '11', 'JOKO GUNAWAN', ''),
('0053081648', 'MUHAMMAD RIZKI', 'L', '', '0000-00-00', 'ULEE PULO', '11', 'JAFARUDDIN', ''),
('0051933041', 'MUHAMMAD RIZQI', 'L', '', '0000-00-00', 'UTEUN GEULINGGANG', '11', 'SAMSUL RIZAL, ST,M.Si', ''),
('0050477109', 'RAHMAD ANANDA ZULKIFLI', 'L', '', '0000-00-00', 'KEUDE KRUENG GEUKUEH', '11', 'ZULKIFLI', ''),
('0047025174', 'RAHMAT ZIA ULHAQ', 'L', '', '0000-00-00', 'KEUDE GEUDONG', '11', 'TARMIZI', ''),
('0051272535', 'RAYHAN MAULANA', 'L', '', '0000-00-00', 'UTEUN GEULINGGANG', '11', 'NAJMUDDIN', ''),
('0055888998', 'RIYADH ZAMIRDA', 'L', '', '0000-00-00', 'KEUDE GEUDONG', '11', 'RAZAMI M YUSUF', ''),
('0054455127', 'SAHAL ANNABIL', 'L', '', '0000-00-00', 'BATUPHAT BARAT', '11', 'SULAIMAN A.SALAM', ''),
('0051933033', 'SAIFUL ASHARI', 'L', '', '0000-00-00', 'PALOH LADA', '11', 'SAPARUDIN', ''),
('0051595357', 'SUHENDRI', 'L', '', '0000-00-00', 'TAMBON TUNONG', '11', 'INSHAFUDDIN', ''),
('0046010876', 'SYAHWALUL SANDI', 'L', '', '0000-00-00', 'BATUPHAT BARAT', '11', 'M.YUSUF', ''),
('0066379322', 'M.AZIZ MAULANA', 'L', '', '0000-00-00', 'GAMPONG SEUMIRAH', '11', 'SAIFUL ISMAIL', ''),
('0051272814', 'Ahmad Badawi', 'L', '', '0000-00-00', 'Padang Sakti Dusun Seumatang', '12', 'Iswar Pardan', ''),
('000006', 'MUHAMMAD T. RAFLI', 'L', '', '0000-00-00', '', '11', '', ''),
('000007', 'RAFIQURRAHMAN', 'L', '', '0000-00-00', '', '11', '', ''),
('000008', 'MUHAMMAD RAFFY AL PASHA', 'L', '', '0000-00-00', '', '11', '', ''),
('0040515636', 'Al-Malik', 'L', '', '0000-00-00', 'Batuphat Timur Dusun C', '12', 'H. Mustafa Yahya', ''),
('0052789024', 'Faizul Azmi', 'L', '', '0000-00-00', 'Tambon Baroh Dusun II Sentosa', '12', 'Fauzi', ''),
('0062949715', 'Hafidz Maulizan', 'L', '', '0000-00-00', 'Tambon Baroh Dusun I Sejahtera', '12', 'Zulfadli', ''),
('0041123995', 'Ichsan Maulana', 'L', '', '0000-00-00', 'Tambon Baroh Dusun 4 Bahagia', '12', 'Baktiar', ''),
('0051976991', 'Iqbalul Habibie', 'L', '', '0000-00-00', 'Kumbang Dusun Kuya Ruameh', '12', 'Sirajul Munir', ''),
('0051031009', 'Irfandi', 'L', '', '0000-00-00', 'Ujong Dusun Lamkuta', '12', 'Baharuddin', ''),
('0046916957', 'Khairul Azkia', 'L', '', '0000-00-00', 'Meunasah Beunot', '12', 'Nurdin', ''),
('0052590747', 'Khairul Umami', 'L', '', '0000-00-00', 'Paloh Lada Jl.SMP Negeri 1 Dewantara Dusun Arun', '12', 'Razali', ''),
('0051458770', 'Khairul Zaki', 'L', '', '0000-00-00', 'Tambon Baroh Jl.Bate Timoh', '12', 'Syukri', ''),
('0045223433', 'Muhammad Risky', 'L', '', '0000-00-00', 'Blangkarieng', '12', 'Amiruddin', ''),
('0055473447', 'Muhammad Arifin Ilham', 'L', '', '0000-00-00', 'Batuphat Timur Dusun A', '12', 'Mukhlis', ''),
('0055176298', 'Muhammad Aulia Fackri', 'L', '', '0000-00-00', 'Glumpang Sulu Timu Dusun Bahrul Ulum', '12', 'Anwar', ''),
('0043525367', 'Muhammad Dayan', 'L', '', '0000-00-00', 'Uteun Bayi Jl.Kenari Dusun Blang Rayuek', '12', 'M. Nurdin (Alm)', ''),
('0054848100', 'Muhammad Irham', 'L', '', '0000-00-00', 'Lhok Bugeng Dusun Lambaro', '12', 'Bustami', ''),
('0034905151', 'Muhammad Silki zilhadi', 'L', '', '0000-00-00', 'Keureusek Dusun Teunong', '12', 'Mahyeddin', ''),
('0047871555', 'Muhammad Taqiyuddin', 'L', '', '0000-00-00', 'Kpr Btn Arun Jl Kayu Manis No 102 Desa Paloh lada', '12', 'Warisuddin', ''),
('0052271533', 'Muhammad Zamzami', 'L', '', '0000-00-00', 'Keude Krueng Geukueh Dusun Batee Timoh', '12', 'Junaidi', ''),
('0051272732', 'Nabil Hakim', 'L', '', '0000-00-00', 'Ujong Pacu Dusun A', '12', 'Ismail Ishak', ''),
('0053793474', 'Rahmad Furqan', 'L', '', '0000-00-00', 'Tambon Baroh Lorong Buntu No.3 Dusun III', '12', 'Nazaruddin', ''),
('0061938667', 'T. Haiqal Farrabi', 'L', '', '0000-00-00', 'Keude Bungkaih', '12', 'T. Ronny Iqbal', ''),
('0060134133', 'Ulil Amri', 'L', '', '0000-00-00', 'Keude Krueng Geukueh Dusun Batee Timoh', '12', 'Marzuki', ''),
('0051272986', 'Zahrul Mufazzal', 'L', '', '0000-00-00', 'Batuphat Timur Dusun C', '12', 'Fadli A.R', ''),
('0053319016', 'ALYA RAHMADANI', 'P', '', '0000-00-00', 'DUSUN PANTE RANGKILEH BLANG TEURAKAN SAWANG ACEH UTARA', '13', 'M. DIAH', ''),
('0053115391', 'DIVA SALSANABILA', 'P', '', '0000-00-00', 'DUSUN KUTA ALAM BLANG DALAM GEUTENG NISAM ACEH UTARA', '13', 'FUADI', ''),
('0057995453', 'FAZIRA DIRWANA', 'P', '', '0000-00-00', 'GUHA ULEUE KUTA MAKMUR ACEH UTARA', '13', 'FAUZI', ''),
('0059781323', 'FITRIANI', 'P', '', '0000-00-00', 'DUSUN C BATUPHAT TIMUR MUARA SATU LHOKSEUMAWE', '13', 'WARDANI Z. ABIDIN', ''),
('0056239438', 'IZZA MUTHMAINNAH', 'P', '', '0000-00-00', 'DUSUN BANDAR KEUDE GEUDONG SAMUDERA  ACEH UTARA', '13', 'M.JAFAR', ''),
('0056613252', 'JUMALIANI', 'P', '', '0000-00-00', 'DUSUN B PALOH PUNTI MUARA SATU LHOKSEUMAWE', '13', 'SYAFII', ''),
('0052590740', 'MULYA HAFNI ZUHRA', 'P', '', '0000-00-00', 'DUSUN SUKA BAHAGIA BANGKA JAYA DEWANTARA ACEH UTARA', '13', 'MUHD TAIB', ''),
('0053319026', 'MULYA NABILA', 'P', '', '0000-00-00', 'DUSUN KUTA BATEE GAMPONG SAWANG ACEH UTARA', '13', 'MUHAMMAD', ''),
('0053734035', 'NADIA ULFA', 'P', '', '0000-00-00', 'COT RHEUE KUTA MAKMUR ACEH UTARA', '13', 'MUSLEM', ''),
('0051458786', 'NANA SAFRINA', 'P', '', '0000-00-00', 'DUSUN BERINGIN II KEUDE KRUENG GEUKUEH DEWANTARA ACEH UTARA', '13', 'RAMLI', ''),
('0051554592', 'NANDA ANNISA', 'P', '', '0000-00-00', 'DUSUN COT MURONG TINGKEUM NISAM ACEH UTARA', '13', 'SYARIFUDDIN', ''),
('0045321209', 'NISAUL AFDILA', 'P', '', '0000-00-00', 'DUSUN C BATUPHAT TIMUR MUARA SATU LHOKSEUMAWE', '13', 'FAKRIZAL', ''),
('0058398123', 'NISRINA FATIN AZLIS', 'P', '', '0000-00-00', 'DUSUN TGKDI COH GAMPONG BLANG PALA BANDA BARO ACEH UTARA', '13', 'AZHARI', ''),
('0045815739', 'NUR AFIFAH', 'P', '', '0000-00-00', 'TAMBON TUNONG', '13', 'ISKANDAR', ''),
('0053875687', 'NUR ULFIA', 'P', '', '0000-00-00', 'KEUDE MEUNASAH MEUCAT NISAM ACEH UTARA', '13', 'MUHAMMAD YASIN', ''),
('0052369168', 'NURJANNAH', 'P', '', '0000-00-00', 'JLN. NISAM DUSUN II TAMBON TUNONG DEWANTARA ACEH UTARA', '13', 'ABDULLAH UMAR', ''),
('0053115388', 'RAISYA SUHERA', 'P', '', '0000-00-00', 'DUSUN PINTU MAKMUR BLANG DALAM BAROH NISAM ACEH UTARA', '13', 'SOFYAN', ''),
('0051933024', 'RISKAM MUNIRA', 'P', '', '0000-00-00', 'JL. UTAMA BTN ARUN PALOH LADA DEWANTARA ACEH UTARA', '13', 'JAFARUDDIN', ''),
('0044262201', 'SAFWANI', 'P', '', '0000-00-00', 'MEUNASAH BEUNOT NISAM ACEH UTARA', '13', 'USMAN', ''),
('0051238006', 'SAKINATUL ULYA', 'P', '', '0000-00-00', 'DUSUN C LHOK TEURADEH LHOK MON PUTEH MUARA DUA LHOKSEUMAWE', '13', 'AGUS SALIM', ''),
('0042662503', 'SITI RAHMA', 'P', '', '0000-00-00', 'DUSUN B BATUPHAT TIMUR MUARA SATU', '13', 'MISMAN', ''),
('0056462555', 'SUFRIANA', 'P', '', '0000-00-00', 'JLN. TGK DI TAMBON TUNONG DEWANTARA ACEH UTARA', '13', 'SYARIFUDDIN', ''),
('0046514940', 'TISARA', 'P', '', '0000-00-00', 'PINTU MAKMU BLANG DALAM BAROH NISAM ACEH UTARA', '13', 'TARMIZI', ''),
('0053990343', 'ULAYYA UZRINA', 'P', '', '0000-00-00', 'RHENG BLUEK MEURAH MULIA ACEH UTARA', '13', 'KAMARUDDIN', ''),
('0064793990', 'UZIA NAYRA', 'P', '', '0000-00-00', 'DUSUN BALE PANTE PULO REUDEUP JANGKA BIREUEN', '13', 'M. NASIR/T. ANAS HUSEN', ''),
('0051089395', 'WARDATUL AHYA', 'P', '', '0000-00-00', 'RHENG BLUEK MEURAH MULIA ACEH UTARA', '13', 'KAMARUZZAMAN', ''),
('0052590760', 'ZIKRA OLIVIA RAMADHANI', 'P', '', '0000-00-00', 'DUSUN PARA TUJOH KEUDE KRUENG GEUKUEH DEWANTARA ACEH UTARA', '13', 'IBRAHIM', ''),
('0059525550', 'AIDA SHELIA', 'P', '', '0000-00-00', 'GAMPONG BARAT,NISAM', '14', 'NASRUDDIN', ''),
('0056296362', 'AINUL MARZIAH', 'P', '', '0000-00-00', 'COT KRUET', '14', 'ABDUL GANI', ''),
('0049069447', 'ANNISA PUTRI', 'P', '', '0000-00-00', 'BATUPHAT TIMUR', '14', 'M.YASIN H. YAHYA', ''),
('0051744191', 'ATINA RIZQA ', 'P', '', '0000-00-00', 'PALOH LADA', '14', 'M. ADAM', ''),
('0058569249', 'AUREL RAYA RAMADHANI', 'P', '', '0000-00-00', 'KOMPLEK KIPAN B BANDARA MALIKUSSALEH', '14', 'SUMARNO', ''),
('0053375866', 'AWALLYA ARRIDHA PUTRI', 'P', '', '0000-00-00', 'BATUPHAT BARAT', '14', 'MARYULIS, S.Pd', ''),
('0056966423', 'CUT NARATUL NAJWA', 'P', '', '0000-00-00', 'BLANG PULO', '14', 'BANI AMIN', ''),
('0051272543', 'DEWI FAJARINA', 'P', '', '0000-00-00', 'BLANG NALENG MAMEH', '14', 'KHAIRUZZAMAN', ''),
('0045117565', 'DIVAUL KHAIRA', 'P', '', '0000-00-00', 'BATUPHAT TIMUR', '14', 'SOPIAN', ''),
('0045616097', 'DZIKRA  ANNISA NABILA', 'P', '', '0000-00-00', 'TAMBON BAROH', '14', 'FAKHRUDDIN', ''),
('0054795434', 'INTAN SUHANA', 'P', '', '0000-00-00', 'PALOH LADA', '14', 'BAHRUNI', ''),
('0060096315', 'KHAIRAN NISA', 'P', '', '0000-00-00', 'TEUNGOH REUBA', '14', 'RAZALI', ''),
('0047170402', 'KHAIRUNNISA', 'P', '', '0000-00-00', 'GODANG', '14', 'SAFARUDDIN', ''),
('0057307146', 'MUNIRAH', 'P', '', '0000-00-00', 'PULO BLANG', '14', 'USMAN', ''),
('0058774304', 'MUTHIA AFIZAH', 'P', '', '0000-00-00', 'BLANG KARIENG', '14', 'SALAHUDIN', ''),
('0052590755', 'NAZWA FIRYAL CHERRY', 'P', '', '0000-00-00', 'UTEUN GELINGGANG', '14', 'JUNAIDI', ''),
('0051933022', 'NIA RAMADHANI', 'P', '', '0000-00-00', 'PALOH LADA', '14', 'M. AMIN', ''),
('0051542174', 'NURUL AMELIA', 'P', '', '0000-00-00', 'MEUNASAH BEUNOT', '14', 'MAHMUDIN', ''),
('0044865794', 'RAHADATUL AISYI', 'P', '', '0000-00-00', 'TAMBON TUNONG', '14', 'IMAN RUSADI', ''),
('0051884632', 'RAHMANIAH', 'P', '', '0000-00-00', 'TAMBON BAROH', '14', 'ZULFIANUDDIN', ''),
('0052957918', 'RIFQA ASYURA', 'P', '', '0000-00-00', 'PALOH LADA', '14', 'NAZARUDDIN', ''),
('0054271197', 'SYARIFAH RUQAYYAH', 'P', '', '0000-00-00', 'KEUDE CUNDA', '14', 'SAYYID ISA ANSHARI', ''),
('0055793119', 'SYIFA AZZAHRA', 'P', '', '0000-00-00', 'PALOH GADENG', '14', 'TARMIZI', ''),
('0051933069', 'SYIFA RAHMADHANI', 'P', '', '0000-00-00', 'KRUENG GEUKUEH', '14', 'AIYUB', ''),
('0054013536', 'WILDA ALISMA', 'P', '', '0000-00-00', 'BUNTUL PETERI', '14', 'FAJARIDA', ''),
('0054795007', 'WILDATUL HAFIDHAH', 'P', '', '0000-00-00', 'MEURIA PALOH', '14', 'ABDURRAHMAN', ''),
('0045097816', 'ZIAUL AHYA', 'P', '', '0000-00-00', 'MNS MESJID', '14', 'MUHAMMAD RAZAK', ''),
('11111', 'TEST', 'L', 'Medan', '1989-01-17', 'sads', '17', 'dad', 'dasda'),
('00122092', 'SARMILA', 'L', 'Aceh Utara', '2024-06-10', 'paloh gadeng', '18', 'husen', 'hasanah ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tahun_pelajaran`
--

CREATE TABLE `tbl_tahun_pelajaran` (
  `id` int(30) NOT NULL,
  `tahun_pelajaran` varchar(20) NOT NULL,
  `semester` int(2) NOT NULL,
  `status` varchar(1) DEFAULT NULL,
  `nominal` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tahun_pelajaran`
--

INSERT INTO `tbl_tahun_pelajaran` (`id`, `tahun_pelajaran`, `semester`, `status`, `nominal`) VALUES
(20, '2020', 1, 'Y', 600000),
(21, '2021', 1, 'N', 500000),
(22, '2019', 2, 'Y', 600000),
(26, '2004', 1, 'Y', 600000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', '7a25b0bc04e77a2f7453dd021168cdc2', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_laporan_kelas`
-- (See below for the actual view)
--
CREATE TABLE `view_laporan_kelas` (
`kelas` varchar(30)
,`nis` varchar(20)
,`nama` varchar(100)
,`id_bayar` bigint(20)
,`tahun` varchar(20)
,`bulan` bigint(11)
,`nominal` bigint(11)
);

-- --------------------------------------------------------

--
-- Structure for view `view_laporan_kelas`
--
DROP TABLE IF EXISTS `view_laporan_kelas`;

CREATE ALGORITHM=UNDEFINED DEFINER=`u7944797`@`localhost` SQL SECURITY DEFINER VIEW `view_laporan_kelas`  AS  select `k`.`nama` AS `kelas`,`s`.`nis` AS `nis`,`s`.`nama` AS `nama`,ifnull(`b`.`id`,0) AS `id_bayar`,ifnull(`tp`.`tahun_pelajaran`,0) AS `tahun`,ifnull(`bl`.`bulan`,0) AS `bulan`,ifnull(`db`.`nominal`,0) AS `nominal` from (((((`tbl_kelas` `k` join `tbl_siswa` `s` on(`s`.`id_kelas` = `k`.`id`)) left join `tbl_bayar` `b` on(`b`.`nisn` = `s`.`nis`)) left join `tbl_detail_bayar` `db` on(`db`.`id_bayar` = `b`.`id`)) left join `tbl_bulan` `bl` on(`bl`.`id` = `db`.`id_bulan`)) left join `tbl_tahun_pelajaran` `tp` on(`tp`.`id` = `db`.`id_tahun`)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bayar`
--
ALTER TABLE `tbl_bayar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bulan`
--
ALTER TABLE `tbl_bulan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tahun` (`id_tahun`);

--
-- Indexes for table `tbl_calon_santri`
--
ALTER TABLE `tbl_calon_santri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_detail_bayar`
--
ALTER TABLE `tbl_detail_bayar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pengeluaran`
--
ALTER TABLE `tbl_pengeluaran`
  ADD PRIMARY KEY (`id_pengeluaran`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `tbl_tahun_pelajaran`
--
ALTER TABLE `tbl_tahun_pelajaran`
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
-- AUTO_INCREMENT for table `tbl_bayar`
--
ALTER TABLE `tbl_bayar`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=184;

--
-- AUTO_INCREMENT for table `tbl_bulan`
--
ALTER TABLE `tbl_bulan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=133;

--
-- AUTO_INCREMENT for table `tbl_calon_santri`
--
ALTER TABLE `tbl_calon_santri`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `tbl_detail_bayar`
--
ALTER TABLE `tbl_detail_bayar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `tbl_kelas`
--
ALTER TABLE `tbl_kelas`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tbl_pengeluaran`
--
ALTER TABLE `tbl_pengeluaran`
  MODIFY `id_pengeluaran` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_tahun_pelajaran`
--
ALTER TABLE `tbl_tahun_pelajaran`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
