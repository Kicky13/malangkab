-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2017 at 06:36 AM
-- Server version: 10.1.21-MariaDB
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
-- Database: `kominfomalang`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `admin_id` int(5) NOT NULL,
  `admin_level` int(3) NOT NULL,
  `admin_name` varchar(25) NOT NULL,
  `register_number` int(12) NOT NULL,
  `position_id` int(5) NOT NULL,
  `admin_password` varchar(32) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`admin_id`, `admin_level`, `admin_name`, `register_number`, `position_id`, `admin_password`, `admin_address`) VALUES
(1, 1, 'Adi Nugroho', 10101001, 1, '12345', 'Rogojampi - Banyuwangi'),
(2, 2, 'Tri Atmaja', 10101002, 1, '12345', 'Sumbersari'),
(3, 2, 'Handoko', 10101003, 1, '12345', 'Singosari');

-- --------------------------------------------------------

--
-- Table structure for table `dimension`
--

CREATE TABLE `dimension` (
  `dimension_id` int(5) NOT NULL,
  `dimension_label` varchar(10) NOT NULL,
  `dimension_name` varchar(40) NOT NULL,
  `dimension_expl` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dimension`
--

INSERT INTO `dimension` (`dimension_id`, `dimension_label`, `dimension_name`, `dimension_expl`) VALUES
(1, 'E', 'Efficiency', 'Seberapa Efisien sistem tersebut dijalankan'),
(2, 'T', 'Trust', 'Apakah SIstem Tersebut dapat dipercaya untuk menjaga data dan kerahasian informasi'),
(3, 'R', 'Reliability', 'Mengukur seberapa handalkah sistem tersebut digunakan.'),
(4, 'CS', 'Citizen Support', 'Apakah sistem tersebut berperan dengan baik dapat membantu masyarakat atau tidak.'),
(5, 'CA', 'Content And Appearance of Information', 'Mengukur seberapa menarik dan mudah dimengerti informasi yang disajikan di dalam sistem.');

-- --------------------------------------------------------

--
-- Table structure for table `job_position`
--

CREATE TABLE `job_position` (
  `position_id` int(5) NOT NULL,
  `job_position` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job_position`
--

INSERT INTO `job_position` (`position_id`, `job_position`) VALUES
(1, 'Pimpinan Dinas'),
(2, 'Kepala Divisi Aplikasi');

-- --------------------------------------------------------

--
-- Table structure for table `periode`
--

CREATE TABLE `periode` (
  `periode_id` int(5) NOT NULL,
  `periode_month` varchar(25) NOT NULL,
  `periode_years` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `periode`
--

INSERT INTO `periode` (`periode_id`, `periode_month`, `periode_years`) VALUES
(1, 'JAN - JUN', 2016),
(2, 'JUL - DES', 2016),
(3, 'JAN - JUN', 2017),
(4, 'JUL - DES', 2017);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(5) NOT NULL,
  `dimension_id` int(5) NOT NULL,
  `question_label` varchar(10) NOT NULL,
  `question_target` text NOT NULL,
  `question_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `dimension_id`, `question_label`, `question_target`, `question_content`) VALUES
(1, 1, 'E1', 'Struktur web yang jelas dan mudah diikuti', 'Struktur website sangat jelas dan mudah saya ikuti'),
(2, 1, 'E2', 'Efektivitas Mesin Pencari', 'Mesin Pencari (Kolom Search) pada Website Malangkab efektif untuk membantu pencarian saya'),
(3, 1, 'E3', 'Peta Situs yang telah terorganisir dengan baik atau tidak', 'Peta situs website Malangkab terorganisir dengan baik.'),
(4, 1, 'E4', 'Pemenuhan kebutuhan pengguna', 'Website Malangkab sesuai dengan kebutuhan saya.'),
(5, 1, 'E5', 'Perincian informasi yang disajikan', 'Informasi yang disajikan pada website Malangkab tepat dan terperinci'),
(6, 1, 'E6', 'Informasi yang up to date', 'Informasi yang ditampilkan pada website Malangkab adalah informasi terbaru'),
(7, 1, 'E7', 'Petunjuk pengisian formulir', 'Apabila ada kolom isian/formulir pada website Malangkab, petunjuk pengisian yang ditampilkan cukup membantu'),
(8, 1, 'E8', 'URL yang mudah diingat', 'URL website Malangkab mudah saya ingat'),
(9, 1, 'E9', 'Penggunaan Kembali Informasi dari Masyarakat', 'Website Malangkab menggunakan informasi yang pernah saya submit sebelumnya'),
(10, 2, 'T1', 'Otentikasi Data Pribadi', 'Untuk otentikasi masuk ke website, hanya menggunakan data pribadi yang diperlukan saja '),
(11, 2, 'T2', 'Keamanan Data Pribadi', 'Data yang diinputkan diarsipkan dengan aman'),
(12, 2, 'T3', 'Penggunaan Data Pribadi untuk tujuan yang jelas', 'Data yang diinputkan atau disediakan pada website hanya digunakan untuk alasan tertentu'),
(13, 2, 'T4', 'Keamanan username dan password', 'Username dan password saya aman apabila digunakan pada website Malangkab'),
(14, 3, 'R1', 'Akses Internet yang terjangkau', 'Website Malangkab cukup terjangkau untuk diakses, tidak memakan banyak kuota'),
(15, 3, 'R2', 'Layanan On Time', 'Website Malangkab menyediakan layanan tepat waktu'),
(16, 3, 'R3', 'Mudah Diakses kapanpun dibutuhkan', 'Website Malangkab dapat diakses kapanpun saya butuhkan'),
(17, 3, 'R4', 'Keberhasilan saat pertama kali diakses', 'Website Malangkab selalu berhasil tampil ketika pertama kali saya mengakses alamat malangkab.go.id'),
(18, 3, 'R5', 'Kecepatan pemuatan halaman web', 'Website Malangkab cukup cepat saat diunduh (download)'),
(19, 3, 'R6', 'Kompatibel dengan semua tipe browser', 'Website Malangkab berjalan dengan baik menggunakan browser pada komputer/laptop/gadget'),
(20, 3, 'R7', 'Kecepatan unduh formulir/dokumen', 'Waktu untuk mengunduh file/dokumen/formulir pada website Malangkab singkat'),
(21, 5, 'CA1', 'Gambar, grafis, animasi dan ukuran teks pada halaman web', 'Tampilan web Malangkab sangat menarik, dimulai dari gambarnya yang mudah menarik perhatian, adanya animasi ringan yang digunakan, dan kombinasi warna yang digunakan cukup bagus'),
(22, 5, 'CA2', 'Akurasi dan keringkasan data', 'Informasi yang disajikan cukup ringkas namun tetap akurat, sehingga terlihat cukup teratur'),
(23, 5, 'CA3', 'Link aktif yang tercantum pada web', 'Semua link yang disajikan  web Malangkab aktif dan dapat dikunjungi.'),
(24, 5, 'CA4', 'Informasi yang jelas dan mudah dimengerti', 'Informasi pada Malangkab jelas dan cukup mudah untuk dimengerti.'),
(25, 4, 'CS1', 'Fungsi dan proses sistem', 'Fungsi sistem E-Government sangat mudah dimengerti (komprehensif) dan proses sistem e-Government sederhana\r\n'),
(26, 4, 'CS2', 'Efisiensi sistem untuk peningkatan pelayanan dan laju bisnis', 'Sistem E-Government dapat meningkatkan efisiensi layanan Pemerintah, dan mempercepat laju Bisnis\r\n'),
(27, 4, 'CS3', 'Pemenuhan kebutuhan pengguna', 'Informasi dan layanan yang disediakan oleh sistem e-Government dapat memenuhi kebutuhan saya\r\n'),
(28, 4, 'CS4', 'Peran masyarakat untuk inovasi dan pengembangan masyarakat', 'Masyarakat berperan penting dalam inovasi serta pengembangan sistem E-Government Malangkab\r\n'),
(29, 4, 'CS5', 'Penampungan aspirasi masyarakat', 'Web Malangkab memiliki fitur yang dapat menampung semua aspirasi masyarakat\r\n'),
(30, 4, 'CS6', 'Platform/Forum diskusi online', 'Adanya forum yang disediakan web Malangkab untuk mendiskusikan permasalahan bersama yang secara acak diajukan oleh masyarakat\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `question_analysis`
--

CREATE TABLE `question_analysis` (
  `qual_id` int(11) NOT NULL,
  `site_id` int(5) NOT NULL,
  `question_id` int(11) NOT NULL,
  `periode_id` int(11) NOT NULL,
  `qual_fact` float NOT NULL,
  `qual_goal` float NOT NULL,
  `qual_gap` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_analysis`
--

INSERT INTO `question_analysis` (`qual_id`, `site_id`, `question_id`, `periode_id`, `qual_fact`, `qual_goal`, `qual_gap`) VALUES
(1, 1, 1, 4, 4.5, 5, 0.5),
(2, 1, 2, 4, 4, 3.8, -0.2),
(3, 1, 3, 4, 3.5, 3.8, 0.3),
(4, 1, 4, 4, 3.2, 2.8, -0.4),
(5, 1, 5, 4, 3.6, 2.6, -1),
(6, 1, 6, 4, 3.4, 2.6, -0.8),
(7, 1, 7, 4, 3.9, 4, 0.1),
(8, 1, 8, 4, 4, 3.6, -0.4),
(9, 1, 9, 4, 3.8, 3.4, -0.4),
(10, 1, 10, 4, 3.8, 3, -0.8),
(11, 1, 11, 4, 3.5, 3.6, 0.1),
(12, 1, 12, 4, 3.2, 3.6, 0.4),
(13, 1, 13, 4, 3, 3.8, 0.8),
(14, 1, 14, 4, 3.8, 3.4, -0.4),
(15, 1, 15, 4, 3.9, 3, -0.9),
(16, 1, 16, 4, 3.9, 4, 0.1),
(17, 1, 17, 4, 3.3, 4, 0.7),
(18, 1, 18, 4, 3.3, 4.4, 1.1),
(19, 1, 19, 4, 3.5, 3.8, 0.3),
(20, 1, 20, 4, 3.5, 3.2, -0.3),
(21, 1, 25, 4, 3.8, 4, 0.2),
(22, 1, 26, 4, 3.6, 3.4, -0.2),
(23, 1, 27, 4, 3.6, 4.2, 0.6),
(24, 1, 28, 4, 3.6, 3.8, 0.2),
(25, 1, 29, 4, 3, 4.4, 1.4),
(26, 1, 30, 4, 3.1, 3.4, 0.3),
(27, 1, 21, 4, 3.7, 3.2, -0.5),
(28, 1, 22, 4, 4, 3.8, -0.2),
(29, 1, 23, 4, 4, 3.8, -0.2),
(30, 1, 24, 4, 3.6, 4, 0.4);

-- --------------------------------------------------------

--
-- Table structure for table `respondents`
--

CREATE TABLE `respondents` (
  `respondent_id` int(5) NOT NULL,
  `respondent_label` varchar(3) NOT NULL,
  `respondent_name` text NOT NULL,
  `respondent_age` int(3) DEFAULT NULL,
  `respondent_address` text NOT NULL,
  `respondent_datecreated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `respondents`
--

INSERT INTO `respondents` (`respondent_id`, `respondent_label`, `respondent_name`, `respondent_age`, `respondent_address`, `respondent_datecreated`) VALUES
(1, 'PUB', 'Deny Siregar', 35, 'Sukodadi', '2017-10-10'),
(2, 'ADM', 'Tri Atmaja', 0, 'Sumbersari - Jember', '2017-10-11'),
(3, 'ADM', 'Tri Atmaja', 0, 'Sumbersari - Jember', '2017-10-11'),
(4, 'ADM', 'Tri Atmaja', 0, 'Sumbersari - Jember', '2017-10-11'),
(5, 'ADM', 'Tri Atmaja', 0, 'Sumbersari - Jember', '2017-10-11'),
(6, 'ADM', 'Tri Atmaja', 0, 'Sumbersari - Jember', '2017-10-11'),
(7, 'PUB', 'Adi Satya', 25, 'Dinoyo', '2017-10-11'),
(8, 'PUB', 'Suryadi', 23, 'Batu', '2017-10-11'),
(9, 'PUB', 'Shinta', 30, 'Jl. Bogor Terusan', '2017-10-11'),
(10, 'PUB', 'Joko Sasoongko', 40, 'Dinoyo', '2017-10-11'),
(11, 'PUB', 'Adi Wijaya', 45, 'Tlogomas', '2017-10-11'),
(12, 'PUB', 'Aisyah Khoirunnisa', 35, 'Tlogomas', '2017-10-11'),
(13, 'PUB', 'Anggun Amanda', 24, 'Sukodadi', '2017-10-11'),
(14, 'PUB', 'Doni Atmaja', 22, 'Batu', '2017-10-11'),
(15, 'PUB', 'Helen', 21, 'Jl. Bogor Terusan', '2017-10-11'),
(16, 'ADM', 'Handoko', 0, 'Singosari', '2017-10-14');

-- --------------------------------------------------------

--
-- Table structure for table `response`
--

CREATE TABLE `response` (
  `response_id` int(25) NOT NULL,
  `site_id` int(5) NOT NULL,
  `respondent_id` int(5) NOT NULL,
  `periode_id` int(5) NOT NULL,
  `question_id` int(5) NOT NULL,
  `response_value` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `response`
--

INSERT INTO `response` (`response_id`, `site_id`, `respondent_id`, `periode_id`, `question_id`, `response_value`) VALUES
(1, 1, 1, 4, 1, 5),
(2, 1, 1, 4, 2, 5),
(3, 1, 1, 4, 3, 4),
(4, 1, 1, 4, 4, 3),
(5, 1, 1, 4, 5, 4),
(6, 1, 1, 4, 6, 3),
(7, 1, 1, 4, 7, 5),
(8, 1, 1, 4, 8, 5),
(9, 1, 1, 4, 9, 3),
(10, 1, 1, 4, 10, 3),
(11, 1, 1, 4, 11, 2),
(12, 1, 1, 4, 12, 5),
(13, 1, 1, 4, 13, 3),
(14, 1, 1, 4, 14, 5),
(15, 1, 1, 4, 15, 3),
(16, 1, 1, 4, 16, 5),
(17, 1, 1, 4, 17, 3),
(18, 1, 1, 4, 18, 2),
(19, 1, 1, 4, 19, 5),
(20, 1, 1, 4, 20, 3),
(21, 1, 1, 4, 25, 2),
(22, 1, 1, 4, 26, 3),
(23, 1, 1, 4, 27, 3),
(24, 1, 1, 4, 28, 3),
(25, 1, 1, 4, 29, 3),
(26, 1, 1, 4, 30, 3),
(27, 1, 1, 4, 21, 4),
(28, 1, 1, 4, 22, 4),
(29, 1, 1, 4, 23, 3),
(30, 1, 1, 4, 24, 5),
(31, 1, 2, 4, 1, 5),
(32, 1, 2, 4, 2, 4),
(33, 1, 2, 4, 3, 5),
(34, 1, 2, 4, 4, 2),
(35, 1, 2, 4, 5, 3),
(36, 1, 2, 4, 6, 2),
(37, 1, 2, 4, 7, 4),
(38, 1, 2, 4, 8, 2),
(39, 1, 2, 4, 9, 4),
(40, 1, 2, 4, 10, 4),
(41, 1, 2, 4, 11, 4),
(42, 1, 2, 4, 12, 5),
(43, 1, 2, 4, 13, 4),
(44, 1, 2, 4, 14, 2),
(45, 1, 2, 4, 15, 2),
(46, 1, 2, 4, 16, 4),
(47, 1, 2, 4, 17, 3),
(48, 1, 2, 4, 18, 4),
(49, 1, 2, 4, 19, 4),
(50, 1, 2, 4, 20, 4),
(51, 1, 2, 4, 25, 5),
(52, 1, 2, 4, 26, 4),
(53, 1, 2, 4, 27, 5),
(54, 1, 2, 4, 28, 3),
(55, 1, 2, 4, 29, 5),
(56, 1, 2, 4, 30, 4),
(57, 1, 2, 4, 21, 4),
(58, 1, 2, 4, 22, 3),
(59, 1, 2, 4, 23, 2),
(60, 1, 2, 4, 24, 4),
(61, 1, 3, 4, 1, 5),
(62, 1, 3, 4, 2, 4),
(63, 1, 3, 4, 3, 3),
(64, 1, 3, 4, 4, 4),
(65, 1, 3, 4, 5, 5),
(66, 1, 3, 4, 6, 2),
(67, 1, 3, 4, 7, 2),
(68, 1, 3, 4, 8, 5),
(69, 1, 3, 4, 9, 4),
(70, 1, 3, 4, 10, 4),
(71, 1, 3, 4, 11, 3),
(72, 1, 3, 4, 12, 5),
(73, 1, 3, 4, 13, 4),
(74, 1, 3, 4, 14, 4),
(75, 1, 3, 4, 15, 4),
(76, 1, 3, 4, 16, 4),
(77, 1, 3, 4, 17, 3),
(78, 1, 3, 4, 18, 5),
(79, 1, 3, 4, 19, 4),
(80, 1, 3, 4, 20, 4),
(81, 1, 3, 4, 25, 3),
(82, 1, 3, 4, 26, 3),
(83, 1, 3, 4, 27, 5),
(84, 1, 3, 4, 28, 5),
(85, 1, 3, 4, 29, 3),
(86, 1, 3, 4, 30, 3),
(87, 1, 3, 4, 21, 4),
(88, 1, 3, 4, 22, 5),
(89, 1, 3, 4, 23, 5),
(90, 1, 3, 4, 24, 5),
(91, 1, 4, 4, 1, 5),
(92, 1, 4, 4, 2, 3),
(93, 1, 4, 4, 3, 4),
(94, 1, 4, 4, 4, 3),
(95, 1, 4, 4, 5, 2),
(96, 1, 4, 4, 6, 4),
(97, 1, 4, 4, 7, 5),
(98, 1, 4, 4, 8, 2),
(99, 1, 4, 4, 9, 2),
(100, 1, 4, 4, 10, 2),
(101, 1, 4, 4, 11, 4),
(102, 1, 4, 4, 12, 4),
(103, 1, 4, 4, 13, 4),
(104, 1, 4, 4, 14, 5),
(105, 1, 4, 4, 15, 5),
(106, 1, 4, 4, 16, 4),
(107, 1, 4, 4, 17, 4),
(108, 1, 4, 4, 18, 4),
(109, 1, 4, 4, 19, 5),
(110, 1, 4, 4, 20, 3),
(111, 1, 4, 4, 25, 4),
(112, 1, 4, 4, 26, 5),
(113, 1, 4, 4, 27, 5),
(114, 1, 4, 4, 28, 4),
(115, 1, 4, 4, 29, 5),
(116, 1, 4, 4, 30, 4),
(117, 1, 4, 4, 21, 4),
(118, 1, 4, 4, 22, 4),
(119, 1, 4, 4, 23, 5),
(120, 1, 4, 4, 24, 3),
(121, 1, 5, 4, 1, 5),
(122, 1, 5, 4, 2, 4),
(123, 1, 5, 4, 3, 3),
(124, 1, 5, 4, 4, 4),
(125, 1, 5, 4, 5, 2),
(126, 1, 5, 4, 6, 2),
(127, 1, 5, 4, 7, 4),
(128, 1, 5, 4, 8, 5),
(129, 1, 5, 4, 9, 3),
(130, 1, 5, 4, 10, 4),
(131, 1, 5, 4, 11, 4),
(132, 1, 5, 4, 12, 2),
(133, 1, 5, 4, 13, 3),
(134, 1, 5, 4, 14, 2),
(135, 1, 5, 4, 15, 3),
(136, 1, 5, 4, 16, 4),
(137, 1, 5, 4, 17, 5),
(138, 1, 5, 4, 18, 5),
(139, 1, 5, 4, 19, 2),
(140, 1, 5, 4, 20, 1),
(141, 1, 5, 4, 25, 3),
(142, 1, 5, 4, 26, 4),
(143, 1, 5, 4, 27, 4),
(144, 1, 5, 4, 28, 5),
(145, 1, 5, 4, 29, 5),
(146, 1, 5, 4, 30, 2),
(147, 1, 5, 4, 21, 2),
(148, 1, 5, 4, 22, 2),
(149, 1, 5, 4, 23, 4),
(150, 1, 5, 4, 24, 3),
(151, 1, 6, 4, 1, 5),
(152, 1, 6, 4, 2, 4),
(153, 1, 6, 4, 3, 4),
(154, 1, 6, 4, 4, 1),
(155, 1, 6, 4, 5, 1),
(156, 1, 6, 4, 6, 3),
(157, 1, 6, 4, 7, 5),
(158, 1, 6, 4, 8, 4),
(159, 1, 6, 4, 9, 4),
(160, 1, 6, 4, 10, 1),
(161, 1, 6, 4, 11, 3),
(162, 1, 6, 4, 12, 2),
(163, 1, 6, 4, 13, 4),
(164, 1, 6, 4, 14, 4),
(165, 1, 6, 4, 15, 1),
(166, 1, 6, 4, 16, 4),
(167, 1, 6, 4, 17, 5),
(168, 1, 6, 4, 18, 4),
(169, 1, 6, 4, 19, 4),
(170, 1, 6, 4, 20, 4),
(171, 1, 6, 4, 25, 5),
(172, 1, 6, 4, 26, 1),
(173, 1, 6, 4, 27, 2),
(174, 1, 6, 4, 28, 2),
(175, 1, 6, 4, 29, 4),
(176, 1, 6, 4, 30, 4),
(177, 1, 6, 4, 21, 2),
(178, 1, 6, 4, 22, 5),
(179, 1, 6, 4, 23, 3),
(180, 1, 6, 4, 24, 5),
(181, 1, 7, 4, 1, 5),
(182, 1, 7, 4, 2, 5),
(183, 1, 7, 4, 3, 2),
(184, 1, 7, 4, 4, 3),
(185, 1, 7, 4, 5, 4),
(186, 1, 7, 4, 6, 5),
(187, 1, 7, 4, 7, 3),
(188, 1, 7, 4, 8, 5),
(189, 1, 7, 4, 9, 3),
(190, 1, 7, 4, 10, 3),
(191, 1, 7, 4, 11, 2),
(192, 1, 7, 4, 12, 4),
(193, 1, 7, 4, 13, 4),
(194, 1, 7, 4, 14, 5),
(195, 1, 7, 4, 15, 5),
(196, 1, 7, 4, 16, 5),
(197, 1, 7, 4, 17, 2),
(198, 1, 7, 4, 18, 1),
(199, 1, 7, 4, 19, 3),
(200, 1, 7, 4, 20, 3),
(201, 1, 7, 4, 25, 4),
(202, 1, 7, 4, 26, 4),
(203, 1, 7, 4, 27, 4),
(204, 1, 7, 4, 28, 3),
(205, 1, 7, 4, 29, 3),
(206, 1, 7, 4, 30, 2),
(207, 1, 7, 4, 21, 5),
(208, 1, 7, 4, 22, 5),
(209, 1, 7, 4, 23, 5),
(210, 1, 7, 4, 24, 2),
(211, 1, 8, 4, 1, 2),
(212, 1, 8, 4, 2, 2),
(213, 1, 8, 4, 3, 5),
(214, 1, 8, 4, 4, 4),
(215, 1, 8, 4, 5, 4),
(216, 1, 8, 4, 6, 3),
(217, 1, 8, 4, 7, 5),
(218, 1, 8, 4, 8, 3),
(219, 1, 8, 4, 9, 4),
(220, 1, 8, 4, 10, 3),
(221, 1, 8, 4, 11, 5),
(222, 1, 8, 4, 12, 3),
(223, 1, 8, 4, 13, 2),
(224, 1, 8, 4, 14, 4),
(225, 1, 8, 4, 15, 4),
(226, 1, 8, 4, 16, 4),
(227, 1, 8, 4, 17, 3),
(228, 1, 8, 4, 18, 5),
(229, 1, 8, 4, 19, 2),
(230, 1, 8, 4, 20, 2),
(231, 1, 8, 4, 25, 4),
(232, 1, 8, 4, 26, 4),
(233, 1, 8, 4, 27, 4),
(234, 1, 8, 4, 28, 5),
(235, 1, 8, 4, 29, 5),
(236, 1, 8, 4, 30, 1),
(237, 1, 8, 4, 21, 3),
(238, 1, 8, 4, 22, 5),
(239, 1, 8, 4, 23, 4),
(240, 1, 8, 4, 24, 3),
(241, 1, 9, 4, 1, 5),
(242, 1, 9, 4, 2, 4),
(243, 1, 9, 4, 3, 3),
(244, 1, 9, 4, 4, 2),
(245, 1, 9, 4, 5, 4),
(246, 1, 9, 4, 6, 4),
(247, 1, 9, 4, 7, 4),
(248, 1, 9, 4, 8, 4),
(249, 1, 9, 4, 9, 3),
(250, 1, 9, 4, 10, 2),
(251, 1, 9, 4, 11, 1),
(252, 1, 9, 4, 12, 2),
(253, 1, 9, 4, 13, 2),
(254, 1, 9, 4, 14, 5),
(255, 1, 9, 4, 15, 5),
(256, 1, 9, 4, 16, 5),
(257, 1, 9, 4, 17, 3),
(258, 1, 9, 4, 18, 2),
(259, 1, 9, 4, 19, 3),
(260, 1, 9, 4, 20, 4),
(261, 1, 9, 4, 25, 4),
(262, 1, 9, 4, 26, 5),
(263, 1, 9, 4, 27, 2),
(264, 1, 9, 4, 28, 3),
(265, 1, 9, 4, 29, 3),
(266, 1, 9, 4, 30, 5),
(267, 1, 9, 4, 21, 5),
(268, 1, 9, 4, 22, 4),
(269, 1, 9, 4, 23, 4),
(270, 1, 9, 4, 24, 3),
(271, 1, 10, 4, 1, 3),
(272, 1, 10, 4, 2, 3),
(273, 1, 10, 4, 3, 4),
(274, 1, 10, 4, 4, 2),
(275, 1, 10, 4, 5, 2),
(276, 1, 10, 4, 6, 5),
(277, 1, 10, 4, 7, 5),
(278, 1, 10, 4, 8, 4),
(279, 1, 10, 4, 9, 4),
(280, 1, 10, 4, 10, 4),
(281, 1, 10, 4, 11, 4),
(282, 1, 10, 4, 12, 3),
(283, 1, 10, 4, 13, 2),
(284, 1, 10, 4, 14, 1),
(285, 1, 10, 4, 15, 2),
(286, 1, 10, 4, 16, 3),
(287, 1, 10, 4, 17, 3),
(288, 1, 10, 4, 18, 5),
(289, 1, 10, 4, 19, 5),
(290, 1, 10, 4, 20, 4),
(291, 1, 10, 4, 25, 5),
(292, 1, 10, 4, 26, 3),
(293, 1, 10, 4, 27, 3),
(294, 1, 10, 4, 28, 5),
(295, 1, 10, 4, 29, 3),
(296, 1, 10, 4, 30, 2),
(297, 1, 10, 4, 21, 4),
(298, 1, 10, 4, 22, 4),
(299, 1, 10, 4, 23, 5),
(300, 1, 10, 4, 24, 4),
(301, 1, 11, 4, 1, 5),
(302, 1, 11, 4, 2, 4),
(303, 1, 11, 4, 3, 3),
(304, 1, 11, 4, 4, 5),
(305, 1, 11, 4, 5, 5),
(306, 1, 11, 4, 6, 4),
(307, 1, 11, 4, 7, 3),
(308, 1, 11, 4, 8, 4),
(309, 1, 11, 4, 9, 5),
(310, 1, 11, 4, 10, 5),
(311, 1, 11, 4, 11, 4),
(312, 1, 11, 4, 12, 3),
(313, 1, 11, 4, 13, 4),
(314, 1, 11, 4, 14, 5),
(315, 1, 11, 4, 15, 5),
(316, 1, 11, 4, 16, 3),
(317, 1, 11, 4, 17, 2),
(318, 1, 11, 4, 18, 2),
(319, 1, 11, 4, 19, 3),
(320, 1, 11, 4, 20, 4),
(321, 1, 11, 4, 25, 5),
(322, 1, 11, 4, 26, 4),
(323, 1, 11, 4, 27, 5),
(324, 1, 11, 4, 28, 2),
(325, 1, 11, 4, 29, 2),
(326, 1, 11, 4, 30, 3),
(327, 1, 11, 4, 21, 1),
(328, 1, 11, 4, 22, 2),
(329, 1, 11, 4, 23, 3),
(330, 1, 11, 4, 24, 2),
(331, 1, 12, 4, 1, 5),
(332, 1, 12, 4, 2, 4),
(333, 1, 12, 4, 3, 3),
(334, 1, 12, 4, 4, 2),
(335, 1, 12, 4, 5, 4),
(336, 1, 12, 4, 6, 2),
(337, 1, 12, 4, 7, 5),
(338, 1, 12, 4, 8, 5),
(339, 1, 12, 4, 9, 5),
(340, 1, 12, 4, 10, 5),
(341, 1, 12, 4, 11, 5),
(342, 1, 12, 4, 12, 5),
(343, 1, 12, 4, 13, 5),
(344, 1, 12, 4, 14, 4),
(345, 1, 12, 4, 15, 4),
(346, 1, 12, 4, 16, 4),
(347, 1, 12, 4, 17, 3),
(348, 1, 12, 4, 18, 4),
(349, 1, 12, 4, 19, 4),
(350, 1, 12, 4, 20, 5),
(351, 1, 12, 4, 25, 5),
(352, 1, 12, 4, 26, 4),
(353, 1, 12, 4, 27, 3),
(354, 1, 12, 4, 28, 4),
(355, 1, 12, 4, 29, 3),
(356, 1, 12, 4, 30, 3),
(357, 1, 12, 4, 21, 3),
(358, 1, 12, 4, 22, 4),
(359, 1, 12, 4, 23, 4),
(360, 1, 12, 4, 24, 4),
(361, 1, 13, 4, 1, 5),
(362, 1, 13, 4, 2, 5),
(363, 1, 13, 4, 3, 5),
(364, 1, 13, 4, 4, 4),
(365, 1, 13, 4, 5, 4),
(366, 1, 13, 4, 6, 3),
(367, 1, 13, 4, 7, 2),
(368, 1, 13, 4, 8, 2),
(369, 1, 13, 4, 9, 3),
(370, 1, 13, 4, 10, 4),
(371, 1, 13, 4, 11, 4),
(372, 1, 13, 4, 12, 3),
(373, 1, 13, 4, 13, 5),
(374, 1, 13, 4, 14, 4),
(375, 1, 13, 4, 15, 3),
(376, 1, 13, 4, 16, 2),
(377, 1, 13, 4, 17, 4),
(378, 1, 13, 4, 18, 4),
(379, 1, 13, 4, 19, 3),
(380, 1, 13, 4, 20, 3),
(381, 1, 13, 4, 25, 2),
(382, 1, 13, 4, 26, 1),
(383, 1, 13, 4, 27, 2),
(384, 1, 13, 4, 28, 3),
(385, 1, 13, 4, 29, 2),
(386, 1, 13, 4, 30, 5),
(387, 1, 13, 4, 21, 4),
(388, 1, 13, 4, 22, 4),
(389, 1, 13, 4, 23, 4),
(390, 1, 13, 4, 24, 5),
(391, 1, 14, 4, 1, 5),
(392, 1, 14, 4, 2, 4),
(393, 1, 14, 4, 3, 3),
(394, 1, 14, 4, 4, 2),
(395, 1, 14, 4, 5, 2),
(396, 1, 14, 4, 6, 3),
(397, 1, 14, 4, 7, 4),
(398, 1, 14, 4, 8, 5),
(399, 1, 14, 4, 9, 4),
(400, 1, 14, 4, 10, 4),
(401, 1, 14, 4, 11, 4),
(402, 1, 14, 4, 12, 2),
(403, 1, 14, 4, 13, 1),
(404, 1, 14, 4, 14, 1),
(405, 1, 14, 4, 15, 4),
(406, 1, 14, 4, 16, 4),
(407, 1, 14, 4, 17, 5),
(408, 1, 14, 4, 18, 4),
(409, 1, 14, 4, 19, 4),
(410, 1, 14, 4, 20, 5),
(411, 1, 14, 4, 25, 4),
(412, 1, 14, 4, 26, 4),
(413, 1, 14, 4, 27, 5),
(414, 1, 14, 4, 28, 4),
(415, 1, 14, 4, 29, 3),
(416, 1, 14, 4, 30, 5),
(417, 1, 14, 4, 21, 5),
(418, 1, 14, 4, 22, 3),
(419, 1, 14, 4, 23, 4),
(420, 1, 14, 4, 24, 5),
(421, 1, 15, 4, 1, 5),
(422, 1, 15, 4, 2, 4),
(423, 1, 15, 4, 3, 3),
(424, 1, 15, 4, 4, 5),
(425, 1, 15, 4, 5, 3),
(426, 1, 15, 4, 6, 2),
(427, 1, 15, 4, 7, 3),
(428, 1, 15, 4, 8, 3),
(429, 1, 15, 4, 9, 4),
(430, 1, 15, 4, 10, 5),
(431, 1, 15, 4, 11, 4),
(432, 1, 15, 4, 12, 2),
(433, 1, 15, 4, 13, 2),
(434, 1, 15, 4, 14, 4),
(435, 1, 15, 4, 15, 4),
(436, 1, 15, 4, 16, 4),
(437, 1, 15, 4, 17, 5),
(438, 1, 15, 4, 18, 4),
(439, 1, 15, 4, 19, 3),
(440, 1, 15, 4, 20, 2),
(441, 1, 15, 4, 25, 3),
(442, 1, 15, 4, 26, 4),
(443, 1, 15, 4, 27, 5),
(444, 1, 15, 4, 28, 4),
(445, 1, 15, 4, 29, 3),
(446, 1, 15, 4, 30, 2),
(447, 1, 15, 4, 21, 3),
(448, 1, 15, 4, 22, 5),
(449, 1, 15, 4, 23, 4),
(450, 1, 15, 4, 24, 3),
(451, 2, 16, 4, 1, 5),
(452, 2, 16, 4, 2, 5),
(453, 2, 16, 4, 3, 4),
(454, 2, 16, 4, 4, 3),
(455, 2, 16, 4, 5, 4),
(456, 2, 16, 4, 6, 1),
(457, 2, 16, 4, 7, 2),
(458, 2, 16, 4, 8, 3),
(459, 2, 16, 4, 9, 4),
(460, 2, 16, 4, 10, 4),
(461, 2, 16, 4, 11, 5),
(462, 2, 16, 4, 12, 3),
(463, 2, 16, 4, 13, 3),
(464, 2, 16, 4, 14, 5),
(465, 2, 16, 4, 15, 5),
(466, 2, 16, 4, 16, 4),
(467, 2, 16, 4, 17, 4),
(468, 2, 16, 4, 18, 4),
(469, 2, 16, 4, 19, 4),
(470, 2, 16, 4, 20, 3),
(471, 2, 16, 4, 25, 5),
(472, 2, 16, 4, 26, 5),
(473, 2, 16, 4, 27, 4),
(474, 2, 16, 4, 28, 4),
(475, 2, 16, 4, 29, 4),
(476, 2, 16, 4, 30, 3),
(477, 2, 16, 4, 21, 3),
(478, 2, 16, 4, 22, 3),
(479, 2, 16, 4, 23, 3),
(480, 2, 16, 4, 24, 5);

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `site_id` int(5) NOT NULL,
  `site_name` varchar(30) NOT NULL,
  `site_description` text NOT NULL,
  `site_city` varchar(30) NOT NULL,
  `site_province` text NOT NULL,
  `site_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`site_id`, `site_name`, `site_description`, `site_city`, `site_province`, `site_url`) VALUES
(1, 'E-Gov Malangkab', 'Ini adalah portal website resmi Pemerintah Kabupaten Malang. Website ini sebagai perantara untuk pelayanan Pemerintah kepada masyarakat Kabupaten Malang', 'Malang', 'Jawa Timur', 'http://malangkab.go.id/'),
(2, 'E-Gov Banyungangikab', 'Media Sosial Dunia yang digunakan hampir oleh semua orang didunia.', 'Banyuwangi', 'Jawa Timur', 'https://www.banyuwangikab.go.id/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `register_number` (`register_number`),
  ADD KEY `position_id` (`position_id`);

--
-- Indexes for table `dimension`
--
ALTER TABLE `dimension`
  ADD PRIMARY KEY (`dimension_id`),
  ADD UNIQUE KEY `dimension_label` (`dimension_label`);

--
-- Indexes for table `job_position`
--
ALTER TABLE `job_position`
  ADD PRIMARY KEY (`position_id`);

--
-- Indexes for table `periode`
--
ALTER TABLE `periode`
  ADD PRIMARY KEY (`periode_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`),
  ADD UNIQUE KEY `question_label` (`question_label`),
  ADD KEY `dimension_id` (`dimension_id`);

--
-- Indexes for table `question_analysis`
--
ALTER TABLE `question_analysis`
  ADD PRIMARY KEY (`qual_id`),
  ADD KEY `question_id` (`question_id`),
  ADD KEY `periode_id` (`periode_id`),
  ADD KEY `site_id` (`site_id`);

--
-- Indexes for table `respondents`
--
ALTER TABLE `respondents`
  ADD PRIMARY KEY (`respondent_id`);

--
-- Indexes for table `response`
--
ALTER TABLE `response`
  ADD PRIMARY KEY (`response_id`),
  ADD KEY `respondent_id` (`respondent_id`),
  ADD KEY `periode_id` (`periode_id`),
  ADD KEY `question_id` (`question_id`),
  ADD KEY `site_id` (`site_id`);

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`site_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `admin_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dimension`
--
ALTER TABLE `dimension`
  MODIFY `dimension_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_position`
--
ALTER TABLE `job_position`
  MODIFY `position_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `periode`
--
ALTER TABLE `periode`
  MODIFY `periode_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `question_analysis`
--
ALTER TABLE `question_analysis`
  MODIFY `qual_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `respondents`
--
ALTER TABLE `respondents`
  MODIFY `respondent_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `response`
--
ALTER TABLE `response`
  MODIFY `response_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=481;

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `site_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `administrator`
--
ALTER TABLE `administrator`
  ADD CONSTRAINT `administrator_ibfk_1` FOREIGN KEY (`position_id`) REFERENCES `job_position` (`position_id`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`dimension_id`) REFERENCES `dimension` (`dimension_id`);

--
-- Constraints for table `response`
--
ALTER TABLE `response`
  ADD CONSTRAINT `response_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `question` (`question_id`),
  ADD CONSTRAINT `response_ibfk_2` FOREIGN KEY (`respondent_id`) REFERENCES `respondents` (`respondent_id`),
  ADD CONSTRAINT `response_ibfk_3` FOREIGN KEY (`periode_id`) REFERENCES `periode` (`periode_id`),
  ADD CONSTRAINT `response_ibfk_4` FOREIGN KEY (`site_id`) REFERENCES `sites` (`site_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
