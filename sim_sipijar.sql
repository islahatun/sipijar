-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 04:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sim_sipijar`
--

-- --------------------------------------------------------

--
-- Table structure for table `m_golongan`
--

CREATE TABLE `m_golongan` (
  `id_gol` int(11) NOT NULL,
  `golongan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_golongan`
--

INSERT INTO `m_golongan` (`id_gol`, `golongan`) VALUES
(1, 'IA / JURU MUDA'),
(2, 'IB / JURU MUDA TINGKAT 1'),
(3, 'IC / JURU'),
(4, 'ID / JURU TINGKAT 1'),
(5, 'IIA / PENGATUR MUDA'),
(6, 'IIB / PENGATUR MUDA TINGKAT 1'),
(7, 'IIC / PENGATUR '),
(8, 'IID / PENGATUR TINGAKAT 1'),
(9, 'IIIA / PENATA MUDA'),
(10, 'IIIB / PENATA MUDA TINGKAT 1'),
(11, 'IIIC / PENATA '),
(12, 'IIID / PENATA TINGKAT 1'),
(13, 'IVA / PEMBINA'),
(14, 'IVB / PEMBINA TINGKAT 1'),
(15, 'IVC / PEMBINA UTAMA MUDA '),
(16, 'IVD / PEMBINA UTAMA MADYA'),
(17, 'IVE / PEMBINA UTAMA');

-- --------------------------------------------------------

--
-- Table structure for table `m_jabatan`
--

CREATE TABLE `m_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_level`
--

CREATE TABLE `m_level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_level`
--

INSERT INTO `m_level` (`id_level`, `level`) VALUES
(1, 'Pimpinan'),
(2, 'Operator'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `m_menu`
--

CREATE TABLE `m_menu` (
  `id_menu` int(11) NOT NULL,
  `menu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_pendidikan`
--

CREATE TABLE `m_pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `pendidikan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_pendidikan`
--

INSERT INTO `m_pendidikan` (`id_pendidikan`, `pendidikan`) VALUES
(1, 'SMA/SMK'),
(2, 'D3'),
(3, 'S1'),
(4, 'S2'),
(5, 'S3');

-- --------------------------------------------------------

--
-- Table structure for table `m_unit_kerja`
--

CREATE TABLE `m_unit_kerja` (
  `id_unit_kerja` int(11) NOT NULL,
  `unit_kerja` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `m_user_akses`
--

CREATE TABLE `m_user_akses` (
  `id` int(11) NOT NULL,
  `id_level` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `t_pengajuan`
--

CREATE TABLE `t_pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `nip` varchar(16) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `sk_pns` varchar(50) NOT NULL,
  `sk_rekom` varchar(50) NOT NULL,
  `skp` varchar(50) NOT NULL,
  `sk_ptn` varchar(50) NOT NULL,
  `instansi_pendidikan` varchar(100) NOT NULL,
  `jenjang_pendidikan` varchar(3033) NOT NULL,
  `jadwal_kuliah` varchar(50) NOT NULL,
  `sk_akreditasi` varchar(50) NOT NULL,
  `program_kuliah` varchar(50) NOT NULL,
  `status` varchar(255) NOT NULL,
  `komentar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_pengajuan`
--

INSERT INTO `t_pengajuan` (`id_pengajuan`, `nip`, `tgl_pengajuan`, `sk_pns`, `sk_rekom`, `skp`, `sk_ptn`, `instansi_pendidikan`, `jenjang_pendidikan`, `jadwal_kuliah`, `sk_akreditasi`, `program_kuliah`, `status`, `komentar`) VALUES
(5, '1234567891234566', '2021-10-10', 'Islahatun_Nufusi_Lamaran_Kerja.pdf', 'Islahatun_Nufusi_cv.pdf', '', 'cv_islahatunnufusi.pdf', '', '', 'ACFrOgDdDilpNrB7XNMM6oURLSe8Qs4xgoTMOw9qBXnFtJXVKE', 'ACFrOgAeOf7RecBWaMDtbCfC10-p9u36asxCl7kztYWO__d1Ht', 'SISTEM INFORMASI', 'Proses Pengajuan', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_pns`
--

CREATE TABLE `t_pns` (
  `id_pns` int(11) NOT NULL,
  `nip` varchar(16) NOT NULL,
  `no_karpeg` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `gelar_depan` varchar(20) NOT NULL,
  `gelar_belakang` varchar(20) NOT NULL,
  `tmpt_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` enum('LAKI-LAKI','PEREMPUAN') NOT NULL,
  `agama` enum('ISLAM','KATOLIK','PROTESTAN','HINDU','BUDHA','KONGHUCU') NOT NULL,
  `sandi` varchar(255) NOT NULL,
  `unit_kerja` varchar(30) NOT NULL,
  `pangkat` varchar(30) NOT NULL,
  `gol` varchar(50) NOT NULL,
  `profil` varchar(100) NOT NULL,
  `no_sk_pns` varchar(30) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `pendidikan` varchar(30) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `penempatan_kerja` varchar(50) NOT NULL,
  `status_kawin` enum('MENIKAH','BELUM MENIKAH','JANDA','DUDA') NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `level` varchar(30) NOT NULL,
  `aktif` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_pns`
--

INSERT INTO `t_pns` (`id_pns`, `nip`, `no_karpeg`, `nama`, `gelar_depan`, `gelar_belakang`, `tmpt_lahir`, `tgl_lahir`, `jk`, `agama`, `sandi`, `unit_kerja`, `pangkat`, `gol`, `profil`, `no_sk_pns`, `jabatan`, `pendidikan`, `jurusan`, `penempatan_kerja`, `status_kawin`, `alamat`, `email`, `level`, `aktif`) VALUES
(7, '1234567891234567', '   1234', 'UMMI ATHIYAH', '', '', '', '0000-00-00', 'PEREMPUAN', 'ISLAM', '', 'qwe', '', 'IC / JURU', '0000-00-00', '', 'Anggota', '', '', '', '', '', 'edi@gmail.com', 'User', 1),
(9, '0987654321123456', '1234', 'SISKA', '', '', '', '0000-00-00', '', '', '$2y$10$qnVcLYhyLRcerEmmgAztzuOzwK8Fns13./gN.Fr4TB2F9ejOSHJcy', 'OPERATOR', '', '', '', '', 'Anggota', '', '', '', '', '', 'edi@gmail.com', 'Operator', 1),
(11, '1234567891234566', '', 'IIS', '', '', '', '0000-00-00', 'LAKI-LAKI', 'ISLAM', '$2y$10$f7BoqHqiczSZKvI4rJErt.T2MKHEMx067aT3rZRRLKVBdZZSYZrMW', 'SEKRETARIS', '', 'IIIC / PENATA', '', '', 'mc', '', '', '', 'MENIKAH', '', 'edi@gmail.com', 'User', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_golongan`
--
ALTER TABLE `m_golongan`
  ADD PRIMARY KEY (`id_gol`);

--
-- Indexes for table `m_jabatan`
--
ALTER TABLE `m_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `m_level`
--
ALTER TABLE `m_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `m_menu`
--
ALTER TABLE `m_menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `m_pendidikan`
--
ALTER TABLE `m_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `m_unit_kerja`
--
ALTER TABLE `m_unit_kerja`
  ADD PRIMARY KEY (`id_unit_kerja`);

--
-- Indexes for table `m_user_akses`
--
ALTER TABLE `m_user_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pengajuan`
--
ALTER TABLE `t_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `t_pns`
--
ALTER TABLE `t_pns`
  ADD PRIMARY KEY (`id_pns`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `m_golongan`
--
ALTER TABLE `m_golongan`
  MODIFY `id_gol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `m_jabatan`
--
ALTER TABLE `m_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_level`
--
ALTER TABLE `m_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `m_menu`
--
ALTER TABLE `m_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_pendidikan`
--
ALTER TABLE `m_pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `m_unit_kerja`
--
ALTER TABLE `m_unit_kerja`
  MODIFY `id_unit_kerja` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `m_user_akses`
--
ALTER TABLE `m_user_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `t_pengajuan`
--
ALTER TABLE `t_pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `t_pns`
--
ALTER TABLE `t_pns`
  MODIFY `id_pns` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
