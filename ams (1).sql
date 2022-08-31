-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2022 at 10:43 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `disposisi`
--

CREATE TABLE `disposisi` (
  `id_disp` int(10) NOT NULL,
  `id_surat` varchar(10) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `isi_disposisi` varchar(250) NOT NULL,
  `sifat` varchar(50) NOT NULL,
  `batas_waktu` date NOT NULL,
  `catatan` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `surat_jenis`
--

CREATE TABLE `surat_jenis` (
  `id_jenis` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `ket` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `surat_jenis`
--

INSERT INTO `surat_jenis` (`id_jenis`, `kode`, `nama`, `ket`) VALUES
(8, 'A.1', 'SK YAYASAN', 'SK'),
(9, 'A.2', 'SK KEPALA', 'SK'),
(10, 'A.3', 'SK PEMBAGIAN TUGAS', 'SK'),
(11, 'A.4', 'SK PANITIA UTS', 'SK'),
(12, 'A.5', 'SK PANITIA UAS ', 'SK'),
(13, 'A.6', 'SK PANITIA UJIAN NASIONAL', 'SK'),
(14, 'A.7', 'SK PANITIA PHBI &amp; PHBN', 'SK'),
(15, 'A.8', 'SK PENETAPAN GURU BERPRESTASI', 'SK'),
(16, 'A.9', 'SK PENETAPAN PERINGKAT KELAS', 'SK'),
(17, 'A.10', 'SK PENGURUS OSIS', 'SK'),
(18, 'A.11', 'SK PRAKERIN', 'SK'),
(19, 'A.12', 'SK JURNALIS', 'SK'),
(20, 'A.13', 'SK UKK PRAKTIK', 'SK'),
(23, 'A.14', 'SERTIFIKAT PRAKERIN', 'SK'),
(24, 'A.15', 'SERTIFIKAT UKK', 'SK'),
(25, 'A.16', 'SERTIFIKAT NILAI TERBAIK', 'SK'),
(26, 'A.17', 'SK PANITIA BIMBEL &amp; TRYOUT', 'SK'),
(27, 'A.18', 'SK PANITIA US', 'SK'),
(28, 'A.19', 'SK PANITIA USBN', 'SK'),
(29, 'A.20', 'SK OLIMPIADE', 'SK'),
(30, 'A.21', 'SK PANITIA PPDB', 'SK'),
(31, 'A.22', 'SK SERTIFIKAT OLIMPIADE', 'SK'),
(32, 'A.23', 'SERTIFIKAT PELEPASAN', 'SK'),
(33, 'A.24', 'SK PANITIA PJ PROGRAM BANTUAN', 'SK'),
(34, 'A.25', 'SK PENGAWAS UJIAN', 'SK'),
(35, 'A.26', 'SK PELEPASAN', 'SK'),
(36, 'B.1', 'SURAT TUGAS', 'keluar'),
(37, 'B.2', 'SURAT KETERANGAN', 'keluar'),
(38, 'B.3', 'SURAT PERNYATAAN', 'keluar'),
(39, 'B.4', 'SURAT PEMBERITAHUAN', 'keluar'),
(40, 'B.5', 'SURAT UNDANGAN RAPAT', 'keluar'),
(41, 'B.6', 'SURAT PINDAH/MUTASI', 'keluar'),
(42, 'B.7', 'SURAT MENERIMA MUTASI', 'keluar'),
(43, 'B.8', 'SURAT PENGANTAR', 'keluar'),
(44, 'B.9', 'SURAT UNDANGAN WALI MURID', 'keluar'),
(45, 'B.10', 'SURAT INSTRUKSI/PERINTAH', 'keluar'),
(46, 'B.11', 'SURAT PERINGATAN', 'keluar'),
(47, 'B.12', 'SURAT KEUANGAN', 'keluar'),
(48, 'B.13', 'SURAT PEMBERHENTIAN', 'keluar'),
(49, 'B.14', 'SURAT TEGURAN', 'keluar'),
(50, 'B.15', 'SURAT PERMOHONAN', 'keluar'),
(51, 'B.16', 'SURAT PERJANJIAN', 'keluar'),
(52, 'B.17', 'SURAT UNDANGAN OSIS', 'keluar'),
(53, 'B.18', 'SURAT UNDANGAN JURNALIS', 'keluar'),
(54, 'B.19', 'SURAT UNDANGAN PRAKERIN', 'keluar'),
(55, 'B.20', 'SURAT DELEGASI LOMBA', 'keluar'),
(56, 'B.21', 'SURAT LAPORAN', 'keluar'),
(57, 'B.22', 'SURAT TERIMA ASET', 'keluar'),
(58, 'B.23', 'SURAT PERJANJIAN KERJASAMA', 'keluar'),
(59, 'B.24', 'SURAT UNDANGAN PELATIHAN', 'keluar'),
(60, 'B.25', 'SURAT UNDANGAN SELAMETAN SEKOLAH', 'keluar'),
(61, 'B.26', 'SURAT PENYERAHAN LAPORAN UKK', 'keluar');

-- --------------------------------------------------------

--
-- Table structure for table `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id_keluar` int(10) NOT NULL,
  `no_urut` varchar(10) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `tanggal_kirim` date NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `isi_ringkas` varchar(250) NOT NULL,
  `file` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_keluar`
--

INSERT INTO `surat_keluar` (`id_keluar`, `no_urut`, `no_surat`, `jenis`, `tanggal_kirim`, `tujuan`, `isi_ringkas`, `file`) VALUES
(9, '881', '881/SMK.DWK/B.5/VII/2022', 'B.5', '2022-07-18', 'Dewan guru SMK dan Staff', 'Undangan Rapat', '-'),
(10, '882', '882/SMK.DWK/B.5/VII/2022', 'B.5', '2022-07-18', 'Dewan Guru', 'Undangan Workshop', '-'),
(11, '883', '883/SMK.DWK/B.15/VII/2022', 'B.15', '2022-07-18', '-', 'Surat Permohonan', '-'),
(12, '884', '884/SMK.DWK/B.15/VII/2022', 'B.15', '2022-07-26', '-', 'Surat permohonan pelaksanaan Manasik Haji ', '-'),
(13, '885', '885/SMK.DWK/B.15/VII/2022', 'B.15', '2022-07-27', '-', 'Surat permohonan kunjungan', '-'),
(14, '886', '886/SMK.DWK/B.15/VII/2022', 'B.15', '2022-08-14', 'Cabang Dinas Pariwisata Probolinggo', 'Permohonan Manasik Haji', '-'),
(15, '887', '887/SMK.DWK/B.2/VIII/2022', 'B.2', '2022-08-17', 'Pengurus Pagarnusa Cabang Kabupaten', 'Surat keterangan siswa aktif', '-'),
(16, '889', '889/SMK.DWK/B.15/VIII/2022', 'B.15', '2022-08-21', 'PT. PJB UP Paiton', 'Surat Permohonan PKL', '-'),
(17, '890', '890/SMK.DWK/B.10/VIII/2022', 'B.10', '2022-08-22', 'PT. PJB UP Paiton', 'SPPD', '-'),
(18, '891', '891/SMK.DWK/B.15/VIII/2022', 'B.15', '2022-08-21', 'PT. PJB O&M Paiton', 'Surat Permohonan', '-'),
(19, '892', '892/SMK.DWK/B.10/VIII/2022', 'B.10', '2022-08-21', 'PT. PJB O&M Paiton', 'SPPD', '-'),
(20, '893', '893/SMK.DWK/B.15/VIII/2022', 'B.15', '2022-08-25', 'Estoh Software Development', 'Surat Permohonan Narasumber', '-'),
(21, '894', '894/SMK.DWK/B.15/VIII/2022', 'B.15', '2022-08-25', 'Protokoler PP DWK', 'Permohonan Izin Penggunaan Aula DWK', '-'),
(22, '895', '895/SMK.DWK/B.5/VIII/2022', 'B.5', '2022-08-27', '-', 'Undangan', 'berkas-96592.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id_masuk` int(10) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `jenis_surat` varchar(30) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_terima` date NOT NULL,
  `asal_surat` varchar(50) NOT NULL,
  `isi_ringkas` varchar(100) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat_masuk`
--

INSERT INTO `surat_masuk` (`id_masuk`, `no_surat`, `jenis_surat`, `tanggal_surat`, `tanggal_terima`, `asal_surat`, `isi_ringkas`, `file`) VALUES
(1, 'BD0068335', 'Biasa', '2022-08-26', '2022-08-29', 'PT. PJB UP Paiton', 'Persetujuan PKL', 'Persetujuan PKL a.n Rifqi Fadil.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `level` enum('admin','user') NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `foto` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `fullname`, `level`, `jenis_kelamin`, `foto`) VALUES
(5, 'admin', '279b3d7e1cb1ecee0e6f3a0ed9ac58c5', 'Administrator', 'admin', 'Laki Laki', 'lkdsf.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`id_disp`);

--
-- Indexes for table `surat_jenis`
--
ALTER TABLE `surat_jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `disposisi`
--
ALTER TABLE `disposisi`
  MODIFY `id_disp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `surat_jenis`
--
ALTER TABLE `surat_jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id_keluar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  MODIFY `id_masuk` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
