-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 05 Agu 2017 pada 12.04
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `aptk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin_pengawas`
--

CREATE TABLE IF NOT EXISTS `admin_pengawas` (
  `ID_ADMIN_PENGAWAS` int(11) NOT NULL AUTO_INCREMENT,
  `IDPENGGUNA` varchar(100) DEFAULT NULL,
  `ID_SPT` int(11) DEFAULT NULL,
  `ID_KARYAWAN` varchar(50) DEFAULT NULL,
  `ID_KELUHAN` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_ADMIN_PENGAWAS`),
  KEY `RELATION_201_FK` (`IDPENGGUNA`),
  KEY `RELATION_208_FK` (`ID_SPT`),
  KEY `RELATION_209_FK` (`ID_KARYAWAN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=61 ;

--
-- Dumping data untuk tabel `admin_pengawas`
--

INSERT INTO `admin_pengawas` (`ID_ADMIN_PENGAWAS`, `IDPENGGUNA`, `ID_SPT`, `ID_KARYAWAN`, `ID_KELUHAN`) VALUES
(1, 'venny', 1, '201700001', 5),
(2, 'venny', 2, '201700001', 1),
(3, 'maudy', 2, '201700002', 1),
(4, 'raisa', 2, '201700003', 1),
(5, 'venny', 3, '201700001', 8),
(6, 'maudy', 3, '201700002', 8),
(7, 'raisa', 3, '201700003', 8),
(8, 'venny', 4, '201700001', 9),
(9, 'maudy', 4, '201700002', 9),
(10, 'raisa', 4, '201700003', 9),
(11, 'raisa', 5, '201700003', 10),
(12, 'venny', 5, '201700001', 10),
(13, 'maudy', 5, '201700002', 10),
(14, 'wahyuningsih', 6, '19631101.199602.2.002', 10),
(15, 'sofyan', 6, '19580119.198903.1.004', 10),
(16, 'endah', 6, '19580624.198303.2.011', 10),
(17, 'widya', 7, '19610527.198603.2.009', 12),
(18, 'etty', 7, '19610720.198603.2.008', 12),
(19, 'sita', 7, '19620602.199003.2.002', 12),
(20, 'wahyuningsih', 8, '19631101.199602.2.002', 11),
(21, 'nurlely', 8, '19651012.198603.2.013', 11),
(22, 'prastowo', 8, '19670620.199803.1.003', 11),
(23, 'nuky', 9, '19680816.199703.2.000', 13),
(24, 'prastowo', 9, '19670620.199803.1.003', 13),
(25, 'bambang', 9, '19600306.198903.1.008', 13),
(26, 'sofyan', 10, '19580119.198903.1.004', 14),
(27, 'endah', 10, '19580624.198303.2.011', 14),
(28, 'bambang', 10, '19600306.198903.1.008', 14),
(29, 'sofyan', 11, '19580119.198903.1.004', 15),
(30, 'endah', 11, '19580624.198303.2.011', 15),
(31, 'bambang', 11, '19600306.198903.1.008', 15),
(32, 'sofyan', 12, '19580119.198903.1.004', 16),
(33, 'bambang', 12, '19600306.198903.1.008', 16),
(34, 'etty', 12, '19610720.198603.2.008', 16),
(35, 'endah', 13, '19580624.198303.2.011', 17),
(36, 'bambang', 13, '19600306.198903.1.008', 17),
(37, 'wahyuningsih', 13, '19631101.199602.2.002', 17),
(38, 'sofyan', 14, '19580119.198903.1.004', 18),
(39, 'endah', 14, '19580624.198303.2.011', 18),
(40, 'bambang', 14, '19600306.198903.1.008', 18),
(41, 'sofyan', 15, '19580119.198903.1.004', 19),
(42, 'endah', 15, '19580624.198303.2.011', 19),
(43, 'bambang', 15, '19600306.198903.1.008', 19),
(44, 'widya', 16, '19610527.198603.2.009', 20),
(45, 'etty', 16, '19610720.198603.2.008', 20),
(46, 'sita', 16, '19620602.199003.2.002', 20),
(47, 'widya', 17, '19610527.198603.2.009', 21),
(48, 'etty', 17, '19610720.198603.2.008', 21),
(49, 'sita', 17, '19620602.199003.2.002', 21),
(50, 'widya', 18, '19610527.198603.2.009', 29),
(51, 'etty', 18, '19610720.198603.2.008', 29),
(52, 'sita', 18, '19620602.199003.2.002', 29),
(53, 'prastowo', 19, '19670620.199803.1.003', 30),
(54, 'sita', 19, '19620602.199003.2.002', 30),
(55, 'nuky', 19, '19680816.199703.2.000', 30),
(56, 'nuky', 20, '19680816.199703.2.000', 31),
(57, 'widya', 20, '19610527.198603.2.009', 31),
(58, 'endah', 20, '19580624.198303.2.011', 31),
(59, 'maudy', 1, '201700002', 5),
(60, 'raisa', 1, '201700003', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_temuan`
--

CREATE TABLE IF NOT EXISTS `hasil_temuan` (
  `ID_HASIL_TEMUAN` int(11) NOT NULL AUTO_INCREMENT,
  `TGL_TEMUAN` datetime DEFAULT NULL,
  `ISI_HASIL_TEMUAN` varchar(500) DEFAULT NULL,
  `ID_SPT` int(11) DEFAULT NULL,
  `ID_PASAL` int(11) DEFAULT NULL,
  `JENIS_PELANGGARAN` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_HASIL_TEMUAN`),
  KEY `ID_SPT` (`ID_SPT`),
  KEY `ID_PASAL` (`ID_PASAL`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data untuk tabel `hasil_temuan`
--

INSERT INTO `hasil_temuan` (`ID_HASIL_TEMUAN`, `TGL_TEMUAN`, `ISI_HASIL_TEMUAN`, `ID_SPT`, `ID_PASAL`, `JENIS_PELANGGARAN`) VALUES
(1, '2017-07-10 22:15:14', 'Saudara tidak melaporkan secara berkala kondisi ketenagakerjaan di perusahaan kepada Dinas Tenaga Kerja Kota Surabaya', 6, 2, '1'),
(2, '2017-07-10 22:22:04', 'Saudara mempekerjakan tenaga kerja lebih dari 10 (sepuluh) orang. tetapi belum memiliki Peraturan Perusahaan yang disahkan Menteri atau Pejabay yang ditunjuk.', 6, 4, '2'),
(3, '2017-07-13 19:09:09', '16 (enam belas) pekerja berdasarkan data yang Saudara berikan masih menerima upah dibawah ketentuan upah minimum tahun 2015 yang berlaku di Surabaya', 10, 6, '1'),
(4, '2017-07-13 19:12:30', 'Saudara tidak melaporkan secara berkala kondisi ketenagakerjaan di perusahaan kepada Dinas Tenaga Kerja Kota Surabaya', 10, 2, '1'),
(5, '2017-07-13 19:13:31', '  16 (enam belas) pekerja berdasarkan data yang Saudara berikan masih menerima upah dibawah ketentuan upah minimum tahun 2015 yang berlaku di Surabaya', 6, 6, '1'),
(6, '2017-07-13 19:14:49', '16 (enam belas) pekerja berdasarkan data yang Saudara berikan masih menerima upah dibawah ketentuan upah minimum tahun 2015 yang berlaku di Surabaya', 11, 6, '1'),
(7, '2017-07-16 02:41:03', '16 (enam belas) pekerja berdasarkan data yang Saudara berikan masih menerima upah dibawah ketentuan upah minimum tahun 2015 yang berlaku di Surabaya', 12, 6, '1'),
(8, '2017-07-16 02:42:20', 'Saudara mempekerjakan tenaga kerja lebih dari 10 (sepuluh) orang. tetapi belum memiliki Peraturan Perusahaan yang disahkan Menteri atau Pejabat yang ditunjuk.', 10, 4, '1'),
(9, '2017-07-22 17:19:29', 'Perangkat Keselamatan Kerja Tidak tersedia', 16, 4, '2'),
(10, '2017-07-24 00:15:54', 'Perangkat Kerja Di bawah standar', 18, 2, '2'),
(11, '2017-07-29 14:58:29', 'a', 19, 1, '1'),
(12, '2017-07-29 17:12:18', 'a', 9, 1, '1'),
(13, '2017-07-29 19:38:16', 'a', 15, 1, '1'),
(14, '2017-07-29 19:42:29', '', 14, 1, '1'),
(15, '2017-07-29 20:20:39', 'as', 15, 2, '1'),
(16, '2017-08-01 00:38:44', 'Perangkat Kerja', 20, 1, '2'),
(17, '2017-08-01 00:38:58', 'Jam Kerja', 20, 4, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_keluhan`
--

CREATE TABLE IF NOT EXISTS `jenis_keluhan` (
  `ID_JENIS_KELUHAN` int(11) NOT NULL AUTO_INCREMENT,
  `ID_TK` int(11) DEFAULT NULL,
  `ID_KELUHAN_TK` int(11) DEFAULT NULL,
  `ID_KELUHAN_SERIKAT` int(11) DEFAULT NULL,
  `STATUS_PENYELESAIAN` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID_JENIS_KELUHAN`),
  KEY `RELATION_205_FK` (`ID_TK`),
  KEY `RELATION_206_FK` (`ID_KELUHAN_TK`),
  KEY `RELATION_207_FK` (`ID_KELUHAN_SERIKAT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data untuk tabel `jenis_keluhan`
--

INSERT INTO `jenis_keluhan` (`ID_JENIS_KELUHAN`, `ID_TK`, `ID_KELUHAN_TK`, `ID_KELUHAN_SERIKAT`, `STATUS_PENYELESAIAN`) VALUES
(1, 30, 1, NULL, 30),
(2, 1, 2, NULL, 0),
(5, 1, 5, NULL, 0),
(6, 30, 6, NULL, 0),
(7, 1, 7, NULL, 20),
(8, 32, 8, NULL, 30),
(9, 33, 9, NULL, 30),
(10, 34, 10, NULL, 90),
(11, 34, 11, NULL, 100),
(12, 35, 12, NULL, 40),
(13, 36, 13, NULL, 70),
(14, 37, 14, NULL, 50),
(15, 35, 15, NULL, 90),
(16, 35, 16, NULL, 90),
(17, 37, 17, NULL, 30),
(18, 39, 18, NULL, 90),
(19, 40, 19, NULL, 90),
(20, 40, 20, NULL, 100),
(21, 40, 21, NULL, 100),
(24, 31, NULL, 1, 100),
(27, 40, 26, NULL, 100),
(28, 40, 27, NULL, 100),
(29, 31, NULL, 2, 100),
(30, 34, 28, NULL, 90),
(31, 41, 29, NULL, 70);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `ID_KARYAWAN` varchar(50) NOT NULL,
  `ID_KABID` int(11) DEFAULT NULL,
  `NAMA_KARYAWAN` varchar(50) DEFAULT NULL,
  `ALAMAT_KARYAWAN` varchar(50) DEFAULT NULL,
  `JENIS_KELAMIN` varchar(10) DEFAULT NULL,
  `TELP_KARYAWAN` varchar(50) DEFAULT NULL,
  `PENDIDIKAN` varchar(50) DEFAULT NULL,
  `SPESIALISASI` varchar(50) DEFAULT NULL,
  `GOLONGAN` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_KARYAWAN`),
  KEY `RELATION_200_FK` (`ID_KABID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`ID_KARYAWAN`, `ID_KABID`, `NAMA_KARYAWAN`, `ALAMAT_KARYAWAN`, `JENIS_KELAMIN`, `TELP_KARYAWAN`, `PENDIDIKAN`, `SPESIALISASI`, `GOLONGAN`) VALUES
('10170001.189423.1.001', 6, 'Sulton Prakasa', 'Jl. Kedung Durian XI-GP/20 Sidoarjo', 'Laki-laki', '08847582643', 'D3 Teknik Elektro', 'Elektronika Arus Rendah', NULL),
('101800001', 5, 'Aries Prabowo', 'Jl. Suko Semolo No.69 Surabaya', 'Laki-laki', '06845485635', 'D3 Hukum', NULL, NULL),
('1234.5678.9012', 31, 'Joko Jainul', 'Jl. Cempaka Mas No. 11 Surabaya', 'Laki-laki', '0683764386', NULL, NULL, 'Penata Muda Tk. I'),
('19580119.198903.1.004', 26, 'Drs. Moch. Sofyan H.', 'Jl. Rajwali II/32 Sidoarjo', 'Laki-laki', '087694653', 'S1 Hubungan Internasional', 'Hubungan Internasional', 'Penata (III/c)'),
('19580624.198303.2.011', 17, 'Endah Setyowati, SE', 'Jl. Wonocolo Selatan XI/44 Surabaya', 'Perempuan', '0896769574', 'S1 Ekonomi', 'Ekonomi', 'Penata Muda Tk. I (III/b)'),
('19600306.198903.1.008', 12, 'Drs. Bambang Teguh S.', 'Jl. Merak IX/11 Gresik', 'Laki-laki', '0867575846', 'S1 Teknik Sipil', 'Konstruksi Bangunan', 'Penata (III/c)'),
('19610527.198603.2.009', 30, 'Dra. Widya Lestari S.', 'Jl. Kutilang II-OB/2 Gresik', 'Perempuan', '0867455639', 'S1 Pendidikan Kewarganegaraan', 'Kewarganegaraan', 'Penata (III/c)'),
('19610720.198603.2.008', 18, 'Etty Panca Trisyowati, SE', 'Jl. Baruk Timur III-RQ/55 Surabaya', 'Perempuan', '984760273', 'S1 Akuntansi', 'Ekonomi & Akuntansi', 'Penata (III/c)'),
('19620602.199003.2.002', 25, 'Sita Edi Soeryawati, SH', 'Jl. Merak VII-TVE/4 Gresik', 'Perempuan', '08675846447', 'S1 Hukum', 'Hukum', 'Penata Muda Tk. I (III/b)'),
('19631101.199602.2.002', 29, 'Dra. Wahyuningsih, MM', 'Jl. Beton V-R/33 Surabaya', 'Perempuan', '0867483658', 'S2 Magister Manajemen', 'Manajemen', 'Penata Muda Tk. I (III/b)'),
('19651012.198603.2.013', 23, 'Nurlely K. Siregar, SH. MH.', 'Jl. Kasuari V/112 Gresik', 'Perempuan', '08867586385', 'S1 Hukum', 'Hukum', 'Penata Muda Tk. I (III/b)'),
('19670620.199803.1.003', 24, 'Ir. Prastowo', 'Jl. Baruk Selatan XI-UU/32 Surabaya', 'Laki-laki', '045639363', 'S1 Teknik Sipil', 'Konstruksi Bangunan', 'Penata Muda Tk. I (III/b)'),
('19680816.199703.2.000', 22, 'Nuky Dewayani, SH', 'Jl. Baruk Utara XI-B/36 Surabaya', 'Perempuan', '0587749573', 'S1 Hukum', 'Hukum', 'Penata (III/c)'),
('201700001', 2, 'Venny', 'Jl. Jemur Andayani No. 35 Komplek Calours', 'Perempuan', '085543569980', 'D3 KOMPUTERISASI PERKANTORAN & KESEKRETARIATAN', 'Sekretariatan', 'Penata (III/c)'),
('201700002', 3, 'Maudy Laura', 'Jl. Wonocolo No. 3 Surabaya', 'Perempuan', '05482634', 'D3 KOMPUTERISASI PERKANTORAN & KESEKRETARIATAN', 'Sekretariatan', 'Penata (III/c)'),
('201700003', 4, 'Raisa Fitriyani', 'Jl. Wonokoyo No. 10 Surabaya', 'Perempuan', '02386382', 'D3 KOMPUTERISASI PERKANTORAN & KESEKRETARIATAN', 'Sekretariatan', 'Penata (III/c)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan_serikat`
--

CREATE TABLE IF NOT EXISTS `keluhan_serikat` (
  `ID_KELUHAN_SERIKAT` int(11) NOT NULL AUTO_INCREMENT,
  `JENIS_KELUHAN_SERIKAT` varchar(50) DEFAULT NULL,
  `TGL_MASUK` datetime DEFAULT NULL,
  `TGL_SELESAI` datetime DEFAULT NULL,
  `BUKTI_FILE_SERIKAT` text,
  `ISI_KELUHAN_SERIKAT` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ID_KELUHAN_SERIKAT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `keluhan_serikat`
--

INSERT INTO `keluhan_serikat` (`ID_KELUHAN_SERIKAT`, `JENIS_KELUHAN_SERIKAT`, `TGL_MASUK`, `TGL_SELESAI`, `BUKTI_FILE_SERIKAT`, `ISI_KELUHAN_SERIKAT`) VALUES
(1, 'Pelanggaran K3', '2017-07-23 23:22:26', NULL, NULL, 'Alat keselamatan di bawah standar'),
(2, 'Pelanggaran K3', '2017-07-24 00:03:54', NULL, NULL, 'Alat kerja di bawah standar');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluhan_tk`
--

CREATE TABLE IF NOT EXISTS `keluhan_tk` (
  `ID_KELUHAN_TK` int(11) NOT NULL AUTO_INCREMENT,
  `JENIS_KELUHAN` varchar(50) DEFAULT NULL,
  `TANGGAL_MASUK` datetime DEFAULT NULL,
  `TANGGAL_SESUAI` datetime DEFAULT NULL,
  `ISI_KELUHAN` varchar(500) DEFAULT NULL,
  `BUKTI_FILE` text,
  PRIMARY KEY (`ID_KELUHAN_TK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data untuk tabel `keluhan_tk`
--

INSERT INTO `keluhan_tk` (`ID_KELUHAN_TK`, `JENIS_KELUHAN`, `TANGGAL_MASUK`, `TANGGAL_SESUAI`, `ISI_KELUHAN`, `BUKTI_FILE`) VALUES
(1, 'Pelanggaran K3', '2017-06-01 05:03:26', NULL, 'Tidak diberi alat keselamatan yang mumpuni', NULL),
(2, 'Pelanggaran Normatif', '2017-06-04 10:15:56', NULL, 'Bla bal bal.. bla', NULL),
(3, 'Pelanggaran Normatif', '2017-06-04 10:19:29', NULL, 'asdq asda qwdas Lorem ipsum', NULL),
(4, 'Pelanggaran Normatif', '2017-06-04 10:21:14', NULL, 'asdq asda qwdas Lorem ipsum', NULL),
(5, 'Pelanggaran K3', '2017-06-04 10:39:34', NULL, 'asda', NULL),
(6, 'Pelanggaran K3', '2017-06-04 15:29:06', NULL, 'Lorem Ipsum ...', NULL),
(7, 'Pelanggaran K3', '2017-07-09 05:19:21', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL),
(8, 'Pelanggaran Normatif', '2017-07-09 06:29:35', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL),
(9, 'Pelanggaran Normatif', '2017-07-09 06:35:04', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL),
(10, 'Pelanggaran Normatif', '2017-07-09 06:53:48', NULL, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', NULL),
(11, 'Pelanggaran Normatif', '2017-07-09 09:12:45', NULL, 'Upah dibawah standar', NULL),
(12, 'Pelanggaran K3', '2017-07-09 12:56:48', NULL, 'Lorem Ipsum dolor sit amet', NULL),
(13, 'Pelanggaran K3', '2017-07-09 15:26:51', NULL, 'Tes normatif', NULL),
(14, 'Pelanggaran K3', '2017-07-09 15:35:50', NULL, 'Wew', NULL),
(15, 'Pelanggaran K3', '2017-07-10 02:46:00', NULL, 'Tidak diberi perangkat keselamatan', NULL),
(16, 'Pelanggaran K3', '2017-07-10 06:21:58', NULL, 'Lorem', NULL),
(17, 'Pelanggaran Normatif', '2017-07-10 07:04:40', NULL, 'Upah di bawah minimum ', NULL),
(18, 'Pelanggaran K3', '2017-07-10 13:45:45', NULL, 'Tidak Diberikan Alat Keselamatan', NULL),
(19, 'Pelanggaran Normatif', '2017-07-22 13:47:04', NULL, 'Pembayaran Gaji Telat 2 Bulan', NULL),
(20, 'Pelanggaran K3', '2017-07-22 14:22:15', NULL, 'Tidak diberikan Helm proyek', NULL),
(21, 'Pelanggaran K3', '2017-07-22 18:13:34', NULL, 'Disnaker', NULL),
(26, 'Pelanggaran Normatif', '2017-07-23 23:58:33', NULL, 'Gaji telat 2 bulan', NULL),
(27, 'Pelanggaran K3', '2017-07-24 00:00:10', NULL, 'Peralatan tidak lengkap', NULL),
(28, 'Pelanggaran Normatif', '2017-07-29 12:46:33', NULL, 'Lorem ipsum.', NULL),
(29, 'Pelanggaran K3', '2017-08-01 00:15:31', NULL, 'Bla bla', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepala_bidang`
--

CREATE TABLE IF NOT EXISTS `kepala_bidang` (
  `ID_KABID` int(11) NOT NULL AUTO_INCREMENT,
  `IDPENGGUNA` varchar(100) DEFAULT NULL,
  `IS_CHILD` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID_KABID`),
  KEY `RELATION_199_FK` (`IDPENGGUNA`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data untuk tabel `kepala_bidang`
--

INSERT INTO `kepala_bidang` (`ID_KABID`, `IDPENGGUNA`, `IS_CHILD`) VALUES
(1, 'admin', 3),
(2, 'venny', 1),
(3, 'maudy', 1),
(4, 'raisa', 1),
(5, 'aries', 3),
(6, 'sulton', 0),
(7, 'ahmadmuksoni', 2),
(8, 'aminwahjoe', 2),
(9, 'amsar', 2),
(10, 'andri', 2),
(11, 'aries', 2),
(12, 'bambang', 2),
(13, 'boing', 2),
(14, 'desitri', 2),
(15, 'diahprihatmini', 2),
(16, 'dwiretna', 2),
(17, 'endah', 2),
(18, 'etty', 2),
(19, 'gatot', 2),
(20, 'hariwanto', 2),
(21, 'khafidz', 2),
(22, 'nuky', 2),
(23, 'nurlely', 2),
(24, 'prastowo', 2),
(25, 'sita', 2),
(26, 'sofyan', 2),
(27, 'srihartini', 2),
(28, 'sucipto', 2),
(29, 'wahyuningsih', 2),
(30, 'widya', 2),
(31, 'joko', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan_kejadian`
--

CREATE TABLE IF NOT EXISTS `laporan_kejadian` (
  `ID_LAP_KEJADIAN` int(11) NOT NULL AUTO_INCREMENT,
  `TGL_LAP_KEJADIAN` datetime DEFAULT NULL,
  `ISI_LAP_KEJADIAN` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ID_LAP_KEJADIAN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `nota_pemeriksaan`
--

CREATE TABLE IF NOT EXISTS `nota_pemeriksaan` (
  `ID_NOTA_PEMERIKSAAN` int(11) NOT NULL AUTO_INCREMENT,
  `TGL_NOTA_PEMERIKSAAN` datetime DEFAULT NULL,
  `ISI_NOTA_PEMERIKSAAN` varchar(500) DEFAULT NULL,
  `ID_SPT` int(11) DEFAULT NULL,
  `IS_COME` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID_NOTA_PEMERIKSAAN`),
  KEY `ID_SPT` (`ID_SPT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data untuk tabel `nota_pemeriksaan`
--

INSERT INTO `nota_pemeriksaan` (`ID_NOTA_PEMERIKSAAN`, `TGL_NOTA_PEMERIKSAAN`, `ISI_NOTA_PEMERIKSAAN`, `ID_SPT`, `IS_COME`) VALUES
(1, '2017-07-13 17:30:31', '1', 6, 0),
(6, '2017-07-13 18:18:36', '2', 6, 0),
(7, '2017-07-13 18:20:49', '3', 6, 0),
(8, '2017-07-13 19:28:45', '1', 11, 0),
(9, '2017-07-13 19:28:59', '2', 11, 0),
(11, '2017-07-13 19:30:22', '3', 11, 0),
(12, '2017-07-22 17:20:08', '1', 16, 0),
(13, '2017-07-22 17:22:24', '2', 16, 0),
(14, '2017-07-22 17:24:33', '3', 16, 0),
(15, '2017-07-22 17:25:03', '4', 16, 0),
(16, '2017-07-24 00:16:10', '1', 18, 0),
(17, '2017-07-24 00:16:51', '2', 18, 0),
(18, '2017-07-24 00:17:03', '3', 18, 0),
(19, '2017-07-24 00:17:19', '4', 18, 0),
(20, '2017-07-29 14:58:39', '1', 19, 0),
(21, '2017-07-29 17:12:26', '0', 9, 0),
(22, '2017-07-29 17:15:53', '0', 9, 0),
(23, '2017-07-29 17:21:13', '0', 9, 0),
(24, '2017-07-29 17:25:06', '0', 9, 0),
(25, '2017-07-29 17:29:26', '1', 9, 1),
(26, '2017-07-29 17:48:35', '2', 19, 0),
(27, '2017-07-29 19:34:01', '3', 19, 0),
(28, '2017-07-29 19:38:30', '1', 15, 0),
(29, '2017-07-29 19:40:45', '2', 15, 0),
(30, '2017-07-29 19:41:05', '3', 15, 0),
(31, '2017-07-29 19:42:51', '1', 14, 0),
(32, '2017-07-29 19:43:10', '2', 14, 0),
(33, '2017-07-29 19:43:23', '3', 14, 1),
(34, '2017-07-30 16:05:36', '1', 12, 0),
(35, '2017-07-30 16:08:03', '2', 12, 0),
(36, '2017-07-30 22:32:46', '3', 12, 0),
(37, '2017-08-01 00:39:10', '1', 20, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasal`
--

CREATE TABLE IF NOT EXISTS `pasal` (
  `ID_PASAL` int(11) NOT NULL AUTO_INCREMENT,
  `NOMOR_PASAL` varchar(500) DEFAULT NULL,
  `KETERANGAN_PASAL` text,
  `JENIS_PASAL_PELANGGARAN` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_PASAL`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `pasal`
--

INSERT INTO `pasal` (`ID_PASAL`, `NOMOR_PASAL`, `KETERANGAN_PASAL`, `JENIS_PASAL_PELANGGARAN`) VALUES
(1, NULL, 'Pasal 7 ayat (1) jo', '2'),
(2, NULL, 'Pasal 10 ayat (1) Undang-undang nomor 7 tahun 1981', '2'),
(3, NULL, 'Undang-undang Nomor 13 tahun 2003 pasal 108 ayat (1) jo', '2'),
(4, NULL, 'Permenakertrans RI No.Per.16/Men/XI/2011 pasal 2 ayat (1) jo.', '1'),
(5, NULL, 'Pasal 30', '1'),
(6, NULL, 'Undang-undang Nomor 13 tahun 2003 pasal 90 ayat (1) jo', '1'),
(7, NULL, 'Peraturan Gubernur Jawa Timur Nomor 72 Tahun 2014', '1'),
(8, NULL, 'Pasal 28 ayat 1', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE IF NOT EXISTS `pengguna` (
  `IDPENGGUNA` varchar(100) NOT NULL,
  `PASSWORD` text,
  `STATUS_PENGGUNA` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`IDPENGGUNA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`IDPENGGUNA`, `PASSWORD`, `STATUS_PENGGUNA`) VALUES
('admin', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('admin_pengawas', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('ahmadmuksoni', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('aminwahjoe', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('amsar', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('andri', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('aries', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('bambang', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('boing', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('desitri', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('diahprihatmini', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('dwiretna', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('endah', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('etty', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('gatot', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('hariwanto', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('joko', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('kabid_pengawas', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('khafidz', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('maudy', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('nuky', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('nurlely', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('pengawas', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('prastowo', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('raisa', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('sita', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('sofyan', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('srihartini', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('sucipto', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('sulton', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('venny', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('wahyuningsih', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('widya', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF');

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas_pengawas`
--

CREATE TABLE IF NOT EXISTS `petugas_pengawas` (
  `ID_PENGAWAS` int(11) NOT NULL AUTO_INCREMENT,
  `ID_NOTA_PEMERIKSAAN` int(11) DEFAULT NULL,
  `ID_LAP_KEJADIAN` int(11) DEFAULT NULL,
  `ID_HASIL_TEMUAN` int(11) DEFAULT NULL,
  `ID_KELUHAN_SERIKAT` int(11) DEFAULT NULL,
  `ID_KELUHAN_TK` int(11) DEFAULT NULL,
  `IDPENGGUNA` varchar(100) DEFAULT NULL,
  `ID_KARYAWAN` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_PENGAWAS`),
  KEY `RELATION_193_FK` (`ID_NOTA_PEMERIKSAAN`),
  KEY `RELATION_194_FK` (`ID_LAP_KEJADIAN`),
  KEY `RELATION_195_FK` (`ID_HASIL_TEMUAN`),
  KEY `RELATION_196_FK` (`ID_KELUHAN_SERIKAT`),
  KEY `RELATION_197_FK` (`ID_KELUHAN_TK`),
  KEY `RELATION_198_FK` (`IDPENGGUNA`),
  KEY `RELATION_210_FK` (`ID_KARYAWAN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_perintah_tugas`
--

CREATE TABLE IF NOT EXISTS `surat_perintah_tugas` (
  `ID_SPT` int(11) NOT NULL AUTO_INCREMENT,
  `NO_SPT` varchar(500) DEFAULT NULL,
  `STATUS_SPT` int(11) DEFAULT '1',
  `IS_ACTIVE_SPT` int(11) DEFAULT '0',
  `TGL_SPT` datetime DEFAULT NULL,
  `ISI_SPT` varchar(500) DEFAULT NULL,
  `PEMERIKSAAN` text,
  `ID_PASAL` int(11) DEFAULT NULL,
  `JUMLAH_PEGAWAI` varchar(50) DEFAULT NULL,
  `TGL_PEMERIKSAAN` datetime DEFAULT NULL,
  `IS_CONFIRM` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`ID_SPT`),
  KEY `ID_PASAL` (`ID_PASAL`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `surat_perintah_tugas`
--

INSERT INTO `surat_perintah_tugas` (`ID_SPT`, `NO_SPT`, `STATUS_SPT`, `IS_ACTIVE_SPT`, `TGL_SPT`, `ISI_SPT`, `PEMERIKSAAN`, `ID_PASAL`, `JUMLAH_PEGAWAI`, `TGL_PEMERIKSAAN`, `IS_CONFIRM`) VALUES
(1, '1/18/10.07/2017', 0, 0, '2017-06-10 01:36:54', NULL, NULL, NULL, NULL, NULL, 0),
(2, '2/18/10.07/2017', 0, 1, '2017-06-10 01:38:31', 'Tes 123', NULL, NULL, NULL, NULL, 0),
(3, '3/18/10.07/2017', 0, 1, '2017-07-09 06:46:29', '1. Melaksanakan pembinaan, pemeriksaan dan pengawasan pelaksanaan peraturan perundang-undangan di bidang ketenagakerjaan di perusahaan PT. Sritex Solution, Jl. Raya Kebon Jeruk No. 112 Surabaya\r\n2. Dilaksanakan mulai tanggal 14 Juli 2017 sampai dengan selesai\r\n3. Melaporkan hasilnya kepada Kepala Dinas', NULL, NULL, NULL, NULL, 0),
(4, '4/18/10.07/2017', 0, 1, '2017-07-09 06:46:42', '1. Melaksanakan pembinaan, pemeriksaan dan pengawasan pelaksanaan peraturan perundang-undangan di bidang ketenagakerjaan di perusahaan PT. Solindo, Jl. Diponegoro No. 35 Surabaya\n2. Dilaksanakan mulai tanggal 13 Juli 2017 sampai dengan selesai\n3. Melaporkan hasilnya kepada Kepala Dinas', NULL, NULL, NULL, NULL, 0),
(5, '5/18/10.07/2017', 0, 1, '2017-07-09 06:54:41', 'Lorem Ipsum', NULL, NULL, NULL, NULL, 0),
(6, '6/18/10.07/2017', 1, 1, '2017-07-09 09:13:33', '1. Melaksanakan pembinaan, pemeriksaan dan pengawasan pelaksanaan peraturan perundang-undangan di bidang ketenagakerjaan di perusahaan PT. Fintego Indonesia, Jl. Demak No. 23 Surabaya\n2. Dilaksanakan mulai tanggal 14 Juli 2017 sampai dengan selesai\n3. Melaporkan hasilnya kepada Kepala Dinas', 'Kurangnya Perlengkapan Keselamatan Kerja', NULL, '54', '2017-07-17 03:00:00', 0),
(7, '7/18/10.07/2017', 1, 1, '2017-07-09 12:58:15', 'Lorem ipsum dolor sit amet', 'Terjadi konflik internal antara pengusaha dengan pekerja', NULL, '34', '2017-07-16 08:47:05', 0),
(8, '8/18/10.07/2017', 0, 1, '2017-07-09 14:41:18', 'Tes 123', NULL, NULL, NULL, NULL, 0),
(9, '9/18/10.07/2017', 1, 1, '2017-07-09 15:27:19', 'Lorem Ipsum dolor sit amet', '123', NULL, '100', '2017-07-29 17:12:07', 0),
(10, '10/18/10.07/2017', 1, 1, '2017-07-09 15:36:25', 'Lorem Ipsum tes', 'Terjadi konflik internal di dalam perusahaan', NULL, '55', '2017-07-17 03:00:00', 0),
(11, '11/18/10.07/2017', 1, 1, '2017-07-10 02:46:37', 'Lorem', 'Terjadi konflik internal antara pengusaha dengan pekerja', NULL, '50', '2017-07-17 03:00:00', 0),
(12, '12/18/10.07/2017', 1, 1, '2017-07-10 06:22:21', NULL, 'Terjadi keterlambatan pembayaran gaji karyawan yang mencapai 1 bulan', NULL, '45', '2017-07-17 03:00:00', 1),
(13, '13/18/10.07/2017', 0, 1, '2017-07-10 07:05:06', NULL, NULL, NULL, NULL, NULL, 0),
(14, '14/18/10.07/2017', 1, 1, '2017-07-10 13:46:17', NULL, 'Terjadi konflik internal antara pengusaha dengan karyawan\r\n', NULL, '30', '2017-07-17 03:00:00', 0),
(15, '15/19/22.07/2017', 1, 1, '2017-07-22 13:50:20', NULL, 'orem', NULL, '100', '2017-07-29 19:38:00', 0),
(16, '16/20/22.07/2017', 1, 1, '2017-07-22 14:25:00', '1. Melakukan pemeriksaan pelaksanaan peraturan perundang-undangan ketenagakerjaan pada perusahaan Ittron Global Teknologi alamat Jl. Wonokoyo Utara No. 90 Surabaya <br/>2. melaksanakan tugas dari tanggal 24-07-2017 s/d tanggal 27-07-2017 <br/>3. Setelah selesai melaksanakan tugas, segera menyampaikan laporan tertulis kepada Kepala Dinas Sulton Prakasa.', 'Perusahaan terkait tidak menyediakan cukup banyak alat keselamatan bagi para pekerja.', NULL, '50', '2017-07-22 17:17:32', 0),
(17, '17/21/22.07/2017', 1, 1, '2017-07-22 18:14:06', '1. Melakukan pemeriksaan pelaksanaan peraturan perundang-undangan ketenagakerjaan pada perusahaan Ittron Global Teknologi alamat Jl. Wonokoyo Utara No. 90 Surabaya <br/>2. melaksanakan tugas dari tanggal 26-07-2017 s/d tanggal 31-07-2017 <br/>3. Setelah selesai melaksanakan tugas, segera menyampaikan laporan tertulis kepada Kepala Dinas Sulton Prakasa.', 'Wow', NULL, '35', '2017-07-22 18:19:35', 0),
(18, '18/29/24.07/2017', 1, 1, '2017-07-24 00:04:25', '1. Melakukan pemeriksaan pelaksanaan peraturan perundang-undangan ketenagakerjaan pada perusahaan CV. Lucky Star alamat Jl. Ronggolawe No. 103 Cepu Blora Jawa Tengah <br/>2. melaksanakan tugas dari tanggal 25-07-2017 s/d tanggal 27-07-2017 <br/>3. Setelah selesai melaksanakan tugas, segera menyampaikan laporan tertulis kepada Kepala Dinas Sulton Prakasa.', 'Alat kerja yang mudah rusak dan di bawah standar membahayakan pekerja', NULL, '102', '2017-07-24 00:15:05', 0),
(19, '19/30/29.07/2017', 1, 1, '2017-07-29 13:15:59', '1. Melakukan pemeriksaan pelaksanaan peraturan perundang-undangan ketenagakerjaan pada perusahaan PT. Fintego Indonesia alamat Jl. Demak No. 23 Surabaya <br/>2. melaksanakan tugas dari tanggal 30-07-2017 s/d tanggal 01-08-2017 <br/>3. Setelah selesai melaksanakan tugas, segera menyampaikan laporan tertulis kepada Kepala Dinas Sulton Prakasa.', 'Tes 123', NULL, '100', '2017-07-29 14:36:51', 0),
(20, '20/31/01.08/2017', 1, 1, '2017-08-01 00:16:30', '1. Melakukan pemeriksaan pelaksanaan peraturan perundang-undangan ketenagakerjaan pada perusahaan Ittron Global Teknologi alamat Jl. Wonokoyo Utara No. 90 Surabaya <br/>2. melaksanakan tugas dari tanggal 01-08-2017 s/d tanggal 04-08-2017 <br/>3. Setelah selesai melaksanakan tugas, segera menyampaikan laporan tertulis kepada Kepala Dinas Sulton Prakasa.', 'Rusak', NULL, '45', '2017-08-01 00:38:21', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tenaga_kerja`
--

CREATE TABLE IF NOT EXISTS `tenaga_kerja` (
  `ID_TK` int(11) NOT NULL AUTO_INCREMENT,
  `NO_KTP` varchar(50) DEFAULT NULL,
  `EMAIL` varchar(100) DEFAULT NULL,
  `NAMA_TK` varchar(50) DEFAULT NULL,
  `ALAMAT_TK` varchar(100) DEFAULT NULL,
  `TEMPAT_LAHIR` varchar(50) DEFAULT NULL,
  `TANGGAL_LAHIR` datetime DEFAULT NULL,
  `JENIS_KEL` varchar(50) DEFAULT NULL,
  `AGAMA` varchar(50) DEFAULT NULL,
  `STATUS_KAWIN` varchar(50) DEFAULT NULL,
  `PEKERJAAN` varchar(50) DEFAULT NULL,
  `KEWARGANEGARAAN` varchar(50) DEFAULT NULL,
  `PASSWORD_TK` text,
  `NAMA_SERIKAT` varchar(50) DEFAULT NULL,
  `ALAMAT_SERIKAT` varchar(500) DEFAULT NULL,
  `TELP_SERIKAT` varchar(50) DEFAULT NULL,
  `NAMA_PERUSAHAAN` varchar(100) DEFAULT NULL,
  `ALAMAT_PERUSAHAAN` varchar(500) DEFAULT NULL,
  `EMAIL_PERUSAHAAN` varchar(100) DEFAULT NULL,
  `TELP_PERUSAHAAN` varchar(50) DEFAULT NULL,
  `TELP_HRD_SERIKAT` varchar(50) DEFAULT NULL,
  `TOKEN_REG` text,
  `USER_STS` int(11) DEFAULT NULL,
  `USER_TYPE` varchar(50) DEFAULT NULL,
  `JABATAN` varchar(100) DEFAULT NULL,
  `LAMA_KERJA` varchar(5) DEFAULT NULL,
  `JENIS_USAHA` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_TK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=42 ;

--
-- Dumping data untuk tabel `tenaga_kerja`
--

INSERT INTO `tenaga_kerja` (`ID_TK`, `NO_KTP`, `EMAIL`, `NAMA_TK`, `ALAMAT_TK`, `TEMPAT_LAHIR`, `TANGGAL_LAHIR`, `JENIS_KEL`, `AGAMA`, `STATUS_KAWIN`, `PEKERJAAN`, `KEWARGANEGARAAN`, `PASSWORD_TK`, `NAMA_SERIKAT`, `ALAMAT_SERIKAT`, `TELP_SERIKAT`, `NAMA_PERUSAHAAN`, `ALAMAT_PERUSAHAAN`, `EMAIL_PERUSAHAAN`, `TELP_PERUSAHAAN`, `TELP_HRD_SERIKAT`, `TOKEN_REG`, `USER_STS`, `USER_TYPE`, `JABATAN`, `LAMA_KERJA`, `JENIS_USAHA`) VALUES
(1, '3525101009930002', 'gl145@gmail.com', 'M. Adam Triamukti', 'Jl. Siwalankerto No. 100', 'Jogja', '2000-05-10 00:00:00', 'Laki-laki', 'Islam', 'Belum Kawin', 'Wiraswasta', 'WNI', '46f94c8de14fb36680850768ff1b7f2a', NULL, NULL, NULL, 'Addeect Code Works', 'Jl. Rajawali IV No. 2', 'adam.triamukti@gmail.com', '59137518', '2257382', '', 1, 'perseorangan', '', '', 'IT Company'),
(30, '32604386', 'gl14555@gmail.com', 'Adam Triamukti', 'Jl. Rajawali IV No. 2 GKA', 'Jakarta', '1993-03-10 00:00:00', 'Laki-laki', 'Islam', 'Belum Kawin', 'Karyawan Swasta', 'WNI', '46f94c8de14fb36680850768ff1b7f2a', NULL, NULL, NULL, 'Ittron Global Teknologi', 'Jl. GKB Lama No. 166', 'adam.triamukti@gmail.com', '0532577', '483246', NULL, 1, 'perseorangan', 'Support Programmer', '0', 'IT Company'),
(31, NULL, 'addeect64@gmail.com', NULL, NULL, NULL, '1970-01-01 07:00:00', NULL, NULL, NULL, NULL, NULL, '46f94c8de14fb36680850768ff1b7f2a', 'SPSI', 'Jl. Kasuari NO. 34', '027263582', 'CV. Lucky Star', 'Jl. Ronggolawe No. 103 Cepu Blora Jawa Tengah', 'adam.triamukti@gmail.com', '0532577', '032853252', NULL, 1, 'perserikatan', NULL, NULL, 'Percetakan Banner'),
(32, '84692262839', 'bayu@gmail.com', 'Bayu Wicaksono', 'Jl. Sidosermo No.45 Sidoarjo', 'Purwokerto', '1993-07-10 00:00:00', 'Laki-laki', 'Budha', 'Belum Kawin', 'Karyawan Swasta', 'WNI', '46f94c8de14fb36680850768ff1b7f2a', NULL, NULL, NULL, 'PT. Sritex Solution', 'Jl. Raya Kebon Jeruk No. 112 Surabaya', 'adam.triamukti@gmail.com', '0317564846', '0318673758', NULL, 1, 'perseorangan', 'Staff Keuangan', '2', 'Eksportir Importir Barang Elektronik'),
(33, '52658658185', 'shanti@hotmail.com', 'Shanti Vermilion', 'Jl. Raya Jagir Wonokromo No. 29 Surabaya', 'Jakarta', '1994-10-12 00:00:00', 'Perempuan', 'Kristen', 'Belum Kawin', 'Karyawan Swasta', 'WNI', '46f94c8de14fb36680850768ff1b7f2a', NULL, NULL, NULL, 'PT. Solindo', 'Jl. Diponegoro No. 35 Surabaya', 'adam.triamukti@gmail.com', '0318678358', '0318663837', NULL, 1, 'perseorangan', 'Staff Desain', '3', 'Media Massa Elektronik'),
(34, '5937562026', 'felani@hotmail.com', 'Felani Sinaga', 'Jl. Klampis Jaya No. 123 Sidoajo', 'Ambon', '1993-01-08 00:00:00', 'Perempuan', 'Kristen', 'Belum Kawin', 'Karyawan Swasta', 'WNI', '46f94c8de14fb36680850768ff1b7f2a', NULL, NULL, NULL, 'PT. Fintego Indonesia', 'Jl. Demak No. 23 Surabaya', 'adam.triamukti@gmail.com', '0315727256', '0318578262', NULL, 1, 'perseorangan', 'Staff General Affair', '1', 'Bidang Jasa Ekspedisi'),
(35, '46729329682', 'edi.samijan@gmail.com', 'Edi Samijan', 'Jl. Jawa No. 24 GKB Gresik', 'Gresik', '1985-07-04 00:00:00', 'Laki-laki', 'Islam', 'Kawin', 'Karyawan Swasta', 'WNI', '46f94c8de14fb36680850768ff1b7f2a', NULL, NULL, NULL, 'PT. Srikaya Emas', 'Jl. Wonokoyo Utara No. 90 Surabaya', 'adam.triamukti@gmail.com', '0843859735', '058359374', NULL, 1, 'perseorangan', 'Staff IT', '5', 'Importir Barang Fashion'),
(36, '373265926', 'yulianti@gmail.com', 'Yulianti Purnawati', 'Jl. Merak III No. 50 GKA Gresik', 'Gresik', '1988-04-05 00:00:00', 'Perempuan', 'Hindu', 'Belum Kawin', 'Karyawan Swasta', 'WNI', '46f94c8de14fb36680850768ff1b7f2a', NULL, NULL, NULL, 'PT. Srikaya Emas', 'Jl. Wonokoyo Utara No. 34 Surabaya', 'adam.triamukti@gmail.com', '0319266426', '0316833836', '', 1, 'perseorangan', 'Staff Finance', '7', 'Produsen Bahan Bangunan'),
(37, '32952672597', 'eko@gmail.com', 'Eko Hernowo', 'Jl. Kutilang No. 22 GKA Gresik', 'Tulungagung', '1983-11-05 00:00:00', 'Laki-laki', 'Islam', 'Kawin', 'Karyawan Swasta', 'WNI', '46f94c8de14fb36680850768ff1b7f2a', NULL, NULL, NULL, 'PT. Dubai Exsoteknik', 'Jl. Banjar Kemantren No. 34 Surabaya', 'adam.triamukti@gmail.com', '0233682815', '034863838', NULL, 1, 'perseorangan', 'Staff Elektronika', '9', 'Produsen Cat Emulsi'),
(38, '593828582', 'dwi@gmail.com', 'Dwi Sasongko', 'Jl. Veteran No. 105 Gresik', 'Surabaya', '1990-07-11 00:00:00', 'Laki-laki', 'Islam', 'Kawin', 'Karyawan Swasta', 'WNI', '46f94c8de14fb36680850768ff1b7f2a', NULL, NULL, NULL, NULL, NULL, 'adam.triamukti@gmail.com', NULL, NULL, NULL, 1, 'perseorangan', NULL, NULL, NULL),
(39, '482682763', 'arif@gmail.com', 'Arif Rahman Hakim', 'Jl. Kasuari III No. 155 Surabaya', 'Surabaya', '1990-09-12 00:00:00', 'Laki-laki', 'Islam', 'Kawin', 'Karyawan Swasta', 'WNI', '46f94c8de14fb36680850768ff1b7f2a', NULL, NULL, NULL, 'PT. Solindo', 'Jl. Diponegoro No. 44 Surabaya', 'adam.triamukti@gmail.com', '0318643767', '0315827627', NULL, 1, 'perseorangan', 'Staff GA', '1', 'Importir Barang Fashion'),
(40, '535235321', 'adam.triamukti@gmail.com', 'Adam Triamukti', 'Jl. Rajawali IV', 'Gresik', '1995-07-05 00:00:00', 'Laki-laki', 'Islam', 'Belum Kawin', 'Karyawan Swasta', 'WNI', '46f94c8de14fb36680850768ff1b7f2a', NULL, NULL, NULL, 'Ittron Global Teknologi', 'Jl. Wonokoyo Utara No. 90 Surabaya', 'adam.triamukti@gmail.com', '0532577', '2257382', NULL, 1, 'perseorangan', 'Support Programmer', '2', 'IT Company'),
(41, '46729329682', 'veddeect86@gmail.com', 'Viviana Tundriana', 'Jl. Kalibokor No. 22', NULL, '1991-07-08 00:00:00', 'Perempuan', NULL, NULL, 'Karyawan Swasta', 'WNI', '46f94c8de14fb36680850768ff1b7f2a', NULL, NULL, NULL, 'Ittron Global Teknologi', 'Jl. Wonokoyo Utara No. 90 Surabaya', 'adam.triamukti@gmail.com', '0532577', '2257382', NULL, 1, 'perseorangan', 'Support Programmer', '', 'IT Company');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin_pengawas`
--
ALTER TABLE `admin_pengawas`
  ADD CONSTRAINT `FK_ADMIN_PE_RELATION__KARYAWAN` FOREIGN KEY (`ID_KARYAWAN`) REFERENCES `karyawan` (`ID_KARYAWAN`),
  ADD CONSTRAINT `FK_ADMIN_PE_RELATION__PENGGUNA` FOREIGN KEY (`IDPENGGUNA`) REFERENCES `pengguna` (`IDPENGGUNA`),
  ADD CONSTRAINT `FK_ADMIN_PE_RELATION__SURAT_PE` FOREIGN KEY (`ID_SPT`) REFERENCES `surat_perintah_tugas` (`ID_SPT`);

--
-- Ketidakleluasaan untuk tabel `hasil_temuan`
--
ALTER TABLE `hasil_temuan`
  ADD CONSTRAINT `hasil_temuan_ibfk_1` FOREIGN KEY (`ID_SPT`) REFERENCES `surat_perintah_tugas` (`ID_SPT`),
  ADD CONSTRAINT `hasil_temuan_ibfk_2` FOREIGN KEY (`ID_PASAL`) REFERENCES `pasal` (`ID_PASAL`);

--
-- Ketidakleluasaan untuk tabel `jenis_keluhan`
--
ALTER TABLE `jenis_keluhan`
  ADD CONSTRAINT `FK_JENIS_KE_RELATION_KELUHAN_1` FOREIGN KEY (`ID_KELUHAN_SERIKAT`) REFERENCES `keluhan_serikat` (`ID_KELUHAN_SERIKAT`),
  ADD CONSTRAINT `FK_JENIS_KE_RELATION__KELUHAN_` FOREIGN KEY (`ID_KELUHAN_TK`) REFERENCES `keluhan_tk` (`ID_KELUHAN_TK`),
  ADD CONSTRAINT `FK_JENIS_KE_RELATION__TENAGA_K` FOREIGN KEY (`ID_TK`) REFERENCES `tenaga_kerja` (`ID_TK`);

--
-- Ketidakleluasaan untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD CONSTRAINT `FK_KARYAWAN_RELATION__KEPALA_B` FOREIGN KEY (`ID_KABID`) REFERENCES `kepala_bidang` (`ID_KABID`);

--
-- Ketidakleluasaan untuk tabel `kepala_bidang`
--
ALTER TABLE `kepala_bidang`
  ADD CONSTRAINT `FK_KEPALA_B_RELATION__PENGGUNA` FOREIGN KEY (`IDPENGGUNA`) REFERENCES `pengguna` (`IDPENGGUNA`);

--
-- Ketidakleluasaan untuk tabel `nota_pemeriksaan`
--
ALTER TABLE `nota_pemeriksaan`
  ADD CONSTRAINT `nota_pemeriksaan_ibfk_1` FOREIGN KEY (`ID_SPT`) REFERENCES `surat_perintah_tugas` (`ID_SPT`);

--
-- Ketidakleluasaan untuk tabel `petugas_pengawas`
--
ALTER TABLE `petugas_pengawas`
  ADD CONSTRAINT `FK_PETUGAS_RELATION__KELUHAN_1` FOREIGN KEY (`ID_KELUHAN_SERIKAT`) REFERENCES `keluhan_serikat` (`ID_KELUHAN_SERIKAT`),
  ADD CONSTRAINT `FK_PETUGAS__RELATION__HASIL_TE` FOREIGN KEY (`ID_HASIL_TEMUAN`) REFERENCES `hasil_temuan` (`ID_HASIL_TEMUAN`),
  ADD CONSTRAINT `FK_PETUGAS__RELATION__KARYAWAN` FOREIGN KEY (`ID_KARYAWAN`) REFERENCES `karyawan` (`ID_KARYAWAN`),
  ADD CONSTRAINT `FK_PETUGAS__RELATION__KELUHAN_` FOREIGN KEY (`ID_KELUHAN_TK`) REFERENCES `keluhan_tk` (`ID_KELUHAN_TK`),
  ADD CONSTRAINT `FK_PETUGAS__RELATION__LAPORAN_` FOREIGN KEY (`ID_LAP_KEJADIAN`) REFERENCES `laporan_kejadian` (`ID_LAP_KEJADIAN`),
  ADD CONSTRAINT `FK_PETUGAS__RELATION__NOTA_PEM` FOREIGN KEY (`ID_NOTA_PEMERIKSAAN`) REFERENCES `nota_pemeriksaan` (`ID_NOTA_PEMERIKSAAN`),
  ADD CONSTRAINT `FK_PETUGAS__RELATION__PENGGUNA` FOREIGN KEY (`IDPENGGUNA`) REFERENCES `pengguna` (`IDPENGGUNA`);

--
-- Ketidakleluasaan untuk tabel `surat_perintah_tugas`
--
ALTER TABLE `surat_perintah_tugas`
  ADD CONSTRAINT `surat_perintah_tugas_ibfk_1` FOREIGN KEY (`ID_PASAL`) REFERENCES `pasal` (`ID_PASAL`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
