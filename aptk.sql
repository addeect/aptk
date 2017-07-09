-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 09 Jul 2017 pada 12.15
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

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
(16, 'endah', 6, '19580624.198303.2.011', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil_temuan`
--

CREATE TABLE IF NOT EXISTS `hasil_temuan` (
  `ID_HASIL_TEMUAN` int(11) NOT NULL AUTO_INCREMENT,
  `TGL_TEMUAN` datetime DEFAULT NULL,
  `ISI_HASIL_TEMUAN` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ID_HASIL_TEMUAN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `jenis_keluhan`
--

INSERT INTO `jenis_keluhan` (`ID_JENIS_KELUHAN`, `ID_TK`, `ID_KELUHAN_TK`, `ID_KELUHAN_SERIKAT`, `STATUS_PENYELESAIAN`) VALUES
(1, 30, 1, NULL, 0),
(2, 1, 2, NULL, 0),
(5, 1, 5, NULL, 0),
(6, 30, 6, NULL, 0),
(7, 1, 7, NULL, 20),
(8, 32, 8, NULL, 30),
(9, 33, 9, NULL, 30),
(10, 34, 10, NULL, 10),
(11, 34, 11, NULL, 10);

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
  PRIMARY KEY (`ID_KARYAWAN`),
  KEY `RELATION_200_FK` (`ID_KABID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`ID_KARYAWAN`, `ID_KABID`, `NAMA_KARYAWAN`, `ALAMAT_KARYAWAN`, `JENIS_KELAMIN`, `TELP_KARYAWAN`, `PENDIDIKAN`, `SPESIALISASI`) VALUES
('101700001', 6, 'Sulton Prakasa', 'Jl. Kedung Durian XI-GP/20 Sidoarjo', 'Laki-laki', '08847582643', 'D3 Teknik Elektro', 'Elektronika Arus Rendah'),
('101800001', 5, 'Aries Prabowo', 'Jl. Suko Semolo No.69 Surabaya', 'Laki-laki', '06845485635', 'D3 Hukum', NULL),
('19580119.198903.1.004', 26, 'Drs. Moch. Sofyan H.', 'Jl. Rajwali II/32 Sidoarjo', 'Laki-laki', '087694653', 'S1 Hubungan Internasional', 'Hubungan Internasional'),
('19580624.198303.2.011', 17, 'Endah Setyowati, SE', 'Jl. Wonocolo Selatan XI/44 Surabaya', 'Perempuan', '0896769574', 'S1 Ekonomi', 'Ekonomi'),
('19600306.198903.1.008', 12, 'Drs. Bambang Teguh S.', 'Jl. Merak IX/11 Gresik', 'Laki-laki', '0867575846', 'S1 Teknik Sipil', 'Konstruksi Bangunan'),
('19610527.198603.2.009', 30, 'Dra. Widya Lestari S.', 'Jl. Kutilang II-OB/2 Gresik', 'Perempuan', '0867455639', 'S1 Pendidikan Kewarganegaraan', 'Kewarganegaraan'),
('19610720.198603.2.008', 18, 'Etty Panca Trisyowati, SE', 'Jl. Baruk Timur III-RQ/55 Surabaya', 'Perempuan', '984760273', 'S1 Akuntansi', 'Ekonomi & Akuntansi'),
('19620602.199003.2.002', 25, 'Sita Edi Soeryawati, SH', 'Jl. Merak VII-TVE/4 Gresik', 'Perempuan', '08675846447', 'S1 Hukum', 'Hukum'),
('19631101.199602.2.002', 29, 'Dra. Wahyuningsih, MM', 'Jl. Beton V-R/33 Surabaya', 'Perempuan', '0867483658', 'S2 Magister Manajemen', 'Manajemen'),
('19651012.198603.2.013', 23, 'Nurlely K. Siregar, SH. MH.', 'Jl. Kasuari V/112 Gresik', 'Perempuan', '08867586385', 'S1 Hukum', 'Hukum'),
('19670620.199803.1.003', 24, 'Ir. Prastowo', 'Jl. Baruk Selatan XI-UU/32 Surabaya', 'Laki-laki', '045639363', 'S1 Teknik Sipil', 'Konstruksi Bangunan'),
('19680816.199703.2.000', 22, 'Nuky Dewayani, SH', 'Jl. Baruk Utara XI-B/36 Surabaya', 'Perempuan', '0587749573', 'S1 Hukum', 'Hukum'),
('201700001', 2, 'Venny', 'Jl. Jemur Andayani No. 35 Komplek Calours', 'Perempuan', '085543569980', 'D3 KOMPUTERISASI PERKANTORAN & KESEKRETARIATAN', 'Sekretariatan'),
('201700002', 3, 'Maudy Laura', 'Jl. Wonocolo No. 3 Surabaya', 'Perempuan', '05482634', 'D3 KOMPUTERISASI PERKANTORAN & KESEKRETARIATAN', 'Sekretariatan'),
('201700003', 4, 'Raisa Fitriyani', 'Jl. Wonokoyo No. 10 Surabaya', 'Perempuan', '02386382', 'D3 KOMPUTERISASI PERKANTORAN & KESEKRETARIATAN', 'Sekretariatan');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

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
(11, 'Pelanggaran Normatif', '2017-07-09 09:12:45', NULL, 'Upah dibawah standar', NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data untuk tabel `kepala_bidang`
--

INSERT INTO `kepala_bidang` (`ID_KABID`, `IDPENGGUNA`, `IS_CHILD`) VALUES
(1, 'admin', 1),
(2, 'venny', 1),
(3, 'maudy', 1),
(4, 'raisa', 1),
(5, 'aries', 1),
(6, 'sulton', 0),
(7, 'ahmadmuksoni', 1),
(8, 'aminwahjoe', 1),
(9, 'amsar', 1),
(10, 'andri', 1),
(11, 'aries', 1),
(12, 'bambang', 1),
(13, 'boing', 1),
(14, 'desitri', 1),
(15, 'diahprihatmini', 1),
(16, 'dwiretna', 1),
(17, 'endah', 1),
(18, 'etty', 1),
(19, 'gatot', 1),
(20, 'hariwanto', 1),
(21, 'khafidz', 1),
(22, 'nuky', 1),
(23, 'nurlely', 1),
(24, 'prastowo', 1),
(25, 'sita', 1),
(26, 'sofyan', 1),
(27, 'srihartini', 1),
(28, 'sucipto', 1),
(29, 'wahyuningsih', 1),
(30, 'widya', 1);

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
  PRIMARY KEY (`ID_NOTA_PEMERIKSAAN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
  `STATUS_SPT` int(11) DEFAULT '1',
  `IS_ACTIVE_SPT` int(11) DEFAULT '0',
  `TGL_SPT` datetime DEFAULT NULL,
  `ISI_SPT` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ID_SPT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `surat_perintah_tugas`
--

INSERT INTO `surat_perintah_tugas` (`ID_SPT`, `STATUS_SPT`, `IS_ACTIVE_SPT`, `TGL_SPT`, `ISI_SPT`) VALUES
(1, 0, 0, '2017-06-10 01:36:54', NULL),
(2, 1, 0, '2017-06-10 01:38:31', NULL),
(3, 0, 1, '2017-07-09 06:46:29', '1. Melaksanakan pembinaan, pemeriksaan dan pengawasan pelaksanaan peraturan perundang-undangan di bidang ketenagakerjaan di perusahaan PT. Sritex Solution, Jl. Raya Kebon Jeruk No. 112 Surabaya\r\n2. Dilaksanakan mulai tanggal 14 Juli 2017 sampai dengan selesai\r\n3. Melaporkan hasilnya kepada Kepala Dinas'),
(4, 0, 1, '2017-07-09 06:46:42', '1. Melaksanakan pembinaan, pemeriksaan dan pengawasan pelaksanaan peraturan perundang-undangan di bidang ketenagakerjaan di perusahaan PT. Solindo, Jl. Diponegoro No. 35 Surabaya\r\n2. Dilaksanakan mulai tanggal 13 Juli 2017 sampai dengan selesai\r\n3. Melaporkan hasilnya kepada Kepala Dinas'),
(5, 1, 0, '2017-07-09 06:54:41', NULL),
(6, 0, 1, '2017-07-09 09:13:33', '1. Melaksanakan pembinaan, pemeriksaan dan pengawasan pelaksanaan peraturan perundang-undangan di bidang ketenagakerjaan di perusahaan PT. Fintego Indonesia, Jl. Demak No. 23 Surabaya\n2. Dilaksanakan mulai tanggal 14 Juli 2017 sampai dengan selesai\n3. Melaporkan hasilnya kepada Kepala Dinas');

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
  `TELP_PERUSAHAAN` varchar(50) DEFAULT NULL,
  `TELP_HRD_SERIKAT` varchar(50) DEFAULT NULL,
  `TOKEN_REG` text,
  `USER_STS` int(11) DEFAULT NULL,
  `USER_TYPE` varchar(50) DEFAULT NULL,
  `JABATAN` varchar(100) DEFAULT NULL,
  `LAMA_KERJA` varchar(5) DEFAULT NULL,
  `JENIS_USAHA` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_TK`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data untuk tabel `tenaga_kerja`
--

INSERT INTO `tenaga_kerja` (`ID_TK`, `NO_KTP`, `EMAIL`, `NAMA_TK`, `ALAMAT_TK`, `TEMPAT_LAHIR`, `TANGGAL_LAHIR`, `JENIS_KEL`, `AGAMA`, `STATUS_KAWIN`, `PEKERJAAN`, `KEWARGANEGARAAN`, `PASSWORD_TK`, `NAMA_SERIKAT`, `ALAMAT_SERIKAT`, `TELP_SERIKAT`, `NAMA_PERUSAHAAN`, `ALAMAT_PERUSAHAAN`, `TELP_PERUSAHAAN`, `TELP_HRD_SERIKAT`, `TOKEN_REG`, `USER_STS`, `USER_TYPE`, `JABATAN`, `LAMA_KERJA`, `JENIS_USAHA`) VALUES
(1, '3525101009930002', 'gl145@gmail.com', 'M. Adam Triamukti', 'Jl. Siwalankerto No. 100', 'Jogja', '2000-05-10 00:00:00', 'Laki-laki', 'Islam', 'Belum Kawin', 'Wiraswasta', 'WNI', '46f94c8de14fb36680850768ff1b7f2a', NULL, NULL, NULL, 'Addeect Code Works', 'Jl. Rajawali IV No. 2', '59137518', '2257382', '', 1, 'perseorangan', '', '', 'IT Company'),
(30, '32604386', 'gl14555@gmail.com', 'Adam Triamukti', 'Jl. Rajawali IV No. 2 GKA', 'Jakarta', '1993-03-10 00:00:00', 'Laki-laki', 'Islam', 'Belum Kawin', 'Karyawan Swasta', 'WNI', '46f94c8de14fb36680850768ff1b7f2a', NULL, NULL, NULL, 'Ittron Global Teknologi', 'Jl. GKB Lama No. 166', '0532577', '483246', NULL, 1, 'perseorangan', 'Support Programmer', '0', 'IT Company'),
(31, NULL, 'addeect64@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '46f94c8de14fb36680850768ff1b7f2a', 'SPSI', 'Jl. Kasuari NO. 34', '027263582', 'CV. Lucky Star', 'Jl. Ronggolawe No. 103 Cepu Blora Jawa Tengah', '0532577', '032853252', NULL, 1, 'perserikatan', NULL, NULL, NULL),
(32, '84692262839', 'bayu@gmail.com', 'Bayu Wicaksono', 'Jl. Sidosermo No.45 Sidoarjo', 'Purwokerto', '1993-07-10 00:00:00', 'Laki-laki', 'Budha', 'Belum Kawin', 'Karyawan Swasta', 'WNI', '46f94c8de14fb36680850768ff1b7f2a', NULL, NULL, NULL, 'PT. Sritex Solution', 'Jl. Raya Kebon Jeruk No. 112 Surabaya', '0317564846', '0318673758', NULL, 1, 'perseorangan', 'Staff Keuangan', '2', 'Eksportir Importir Barang Elektronik'),
(33, '52658658185', 'shanti@hotmail.com', 'Shanti Vermilion', 'Jl. Raya Jagir Wonokromo No. 29 Surabaya', 'Jakarta', '1994-10-12 00:00:00', 'Perempuan', 'Kristen', 'Belum Kawin', 'Karyawan Swasta', 'WNI', '46f94c8de14fb36680850768ff1b7f2a', NULL, NULL, NULL, 'PT. Solindo', 'Jl. Diponegoro No. 35 Surabaya', '0318678358', '0318663837', NULL, 1, 'perseorangan', 'Staff Desain', '3', 'Media Massa Elektronik'),
(34, '5937562026', 'felani@hotmail.com', 'Felani Sinaga', 'Jl. Klampis Jaya No. 123 Sidoajo', 'Ambon', '1993-01-08 00:00:00', 'Perempuan', 'Kristen', 'Belum Kawin', 'Karyawan Swasta', 'WNI', '46f94c8de14fb36680850768ff1b7f2a', NULL, NULL, NULL, 'PT. Fintego Indonesia', 'Jl. Demak No. 23 Surabaya', '0315727256', '0318578262', NULL, 1, 'perseorangan', 'Staff General Affair', '1', 'Bidang Jasa Ekspedisi');

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
