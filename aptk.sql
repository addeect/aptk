-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 16 Jun 2017 pada 19.54
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `admin_pengawas`
--

INSERT INTO `admin_pengawas` (`ID_ADMIN_PENGAWAS`, `IDPENGGUNA`, `ID_SPT`, `ID_KARYAWAN`, `ID_KELUHAN`) VALUES
(1, 'venny', 1, '201700001', 5),
(2, 'maudy', 1, '201700002', 5),
(3, 'raisa', 1, '201700003', 5),
(4, 'maudy', 2, '201700002', 1),
(5, 'venny', 2, '201700001', 1),
(6, 'raisa', 2, '201700003', 1),
(7, 'venny', 3, '201700001', 2),
(8, 'maudy', 3, '201700002', 2),
(9, 'raisa', 3, '201700003', 2),
(10, 'venny', 4, '201700001', 5),
(11, 'maudy', 4, '201700002', 5),
(12, 'raisa', 4, '201700003', 5),
(13, 'venny', 5, '201700001', 5),
(14, 'maudy', 5, '201700002', 5),
(15, 'raisa', 5, '201700003', 5);

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
  PRIMARY KEY (`ID_JENIS_KELUHAN`),
  KEY `RELATION_205_FK` (`ID_TK`),
  KEY `RELATION_206_FK` (`ID_KELUHAN_TK`),
  KEY `RELATION_207_FK` (`ID_KELUHAN_SERIKAT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `jenis_keluhan`
--

INSERT INTO `jenis_keluhan` (`ID_JENIS_KELUHAN`, `ID_TK`, `ID_KELUHAN_TK`, `ID_KELUHAN_SERIKAT`) VALUES
(1, 30, 1, NULL),
(2, 1, 2, NULL),
(5, 1, 5, NULL),
(6, 30, 6, NULL);

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
('201700001', 5, 'Venny', 'Jl. Jemur Andayani No. 35 Komplek Calours', 'Perempuan', '085543569980', 'D3 KOMPUTERISASI PERKANTORAN & KESEKRETARIATAN', 'Sekretariatan'),
('201700002', 3, 'Maudy', 'Jl. Kedung Baruk no. 100', 'Perempuan', '068262953', 'D3 Komputerisasi', 'Sekretariat'),
('201700003', 4, 'Raisa', 'Jl. Kedung Baruk no. 10', 'Perempuan', '083482653', 'D3 Komputerisasi', 'Sekretariat');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `keluhan_tk`
--

INSERT INTO `keluhan_tk` (`ID_KELUHAN_TK`, `JENIS_KELUHAN`, `TANGGAL_MASUK`, `TANGGAL_SESUAI`, `ISI_KELUHAN`, `BUKTI_FILE`) VALUES
(1, 'Pelanggaran K3', '2017-06-01 05:03:26', NULL, 'Tidak diberi alat keselamatan yang mumpuni', NULL),
(2, 'Pelanggaran Normatif', '2017-06-04 10:15:56', NULL, 'Bla bal bal.. bla', NULL),
(3, 'Pelanggaran Normatif', '2017-06-04 10:19:29', NULL, 'asdq asda qwdas Lorem ipsum', NULL),
(4, 'Pelanggaran Normatif', '2017-06-04 10:21:14', NULL, 'asdq asda qwdas Lorem ipsum', NULL),
(5, 'Pelanggaran K3', '2017-06-04 10:39:34', NULL, 'asda', NULL),
(6, 'Pelanggaran K3', '2017-06-04 15:29:06', NULL, 'Lorem Ipsum ...', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kepala_bidang`
--

CREATE TABLE IF NOT EXISTS `kepala_bidang` (
  `ID_KABID` int(11) NOT NULL AUTO_INCREMENT,
  `IDPENGGUNA` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID_KABID`),
  KEY `RELATION_199_FK` (`IDPENGGUNA`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `kepala_bidang`
--

INSERT INTO `kepala_bidang` (`ID_KABID`, `IDPENGGUNA`) VALUES
(1, 'admin'),
(2, 'admin_pengawas'),
(3, 'maudy'),
(4, 'raisa'),
(5, 'venny');

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
('kabid_pengawas', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('maudy', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('pengawas', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('raisa', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF'),
('venny', '46f94c8de14fb36680850768ff1b7f2a', 'AKTIF');

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
  `TGL_SPT` datetime DEFAULT NULL,
  `ISI_SPT` varchar(500) DEFAULT NULL,
  `STATUS_SPT` int(11) DEFAULT '1',
  `IS_ACTIVE_SPT` int(11) DEFAULT '0',
  PRIMARY KEY (`ID_SPT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `surat_perintah_tugas`
--

INSERT INTO `surat_perintah_tugas` (`ID_SPT`, `TGL_SPT`, `ISI_SPT`, `STATUS_SPT`, `IS_ACTIVE_SPT`) VALUES
(1, '2017-06-06 06:38:59', NULL, 0, 1),
(2, '2017-06-06 06:41:10', 'LOREM IPSUM', 0, 1),
(3, '2017-06-16 19:16:42', 'Lorem ipsum dolor sit amet.', 0, 1),
(4, '2017-06-16 19:48:15', 'Lorem ipsum 2', 0, 1),
(5, '2017-06-16 19:51:28', 'bla lba', 0, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=32 ;

--
-- Dumping data untuk tabel `tenaga_kerja`
--

INSERT INTO `tenaga_kerja` (`ID_TK`, `NO_KTP`, `EMAIL`, `NAMA_TK`, `ALAMAT_TK`, `TEMPAT_LAHIR`, `TANGGAL_LAHIR`, `JENIS_KEL`, `AGAMA`, `STATUS_KAWIN`, `PEKERJAAN`, `KEWARGANEGARAAN`, `PASSWORD_TK`, `NAMA_SERIKAT`, `ALAMAT_SERIKAT`, `TELP_SERIKAT`, `NAMA_PERUSAHAAN`, `ALAMAT_PERUSAHAAN`, `TELP_PERUSAHAAN`, `TELP_HRD_SERIKAT`, `TOKEN_REG`, `USER_STS`, `USER_TYPE`, `JABATAN`, `LAMA_KERJA`, `JENIS_USAHA`) VALUES
(1, '3525101009930002', 'gl145@gmail.com', 'M. Adam Triamukti', 'Jl. Siwalankerto No. 100', 'Jogja', '2000-05-10 00:00:00', 'Laki-laki', 'Islam', 'Belum Kawin', 'Wiraswasta', 'WNI', '46f94c8de14fb36680850768ff1b7f2a', NULL, NULL, NULL, 'Addeect Code Works', 'Jl. Rajawali IV No. 2', '59137518', '2257382', '', 1, 'perseorangan', '', '', 'IT Company'),
(30, '32604386', 'gl14555@gmail.com', 'Adam Triamukti', 'Jl. Rajawali IV No. 2 GKA', 'Jakarta', '1993-03-10 00:00:00', 'Laki-laki', 'Islam', 'Belum Kawin', 'Karyawan Swasta', 'WNI', '46f94c8de14fb36680850768ff1b7f2a', '', NULL, NULL, 'Ittron Global Teknologi', 'Jl. GKB Lama No. 166', '0532577', '483246', NULL, 1, 'perseorangan', 'Support Programmer', '0', 'IT Company'),
(31, NULL, 'addeect64@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '46f94c8de14fb36680850768ff1b7f2a', 'SPSI', 'Jl. Kasuari NO. 34', '027263582', 'CV. Lucky Star', 'Jl. Ronggolawe No. 103 Cepu Blora Jawa Tengah', '0532577', '032853252', NULL, 1, 'perserikatan', NULL, NULL, NULL);

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
