-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2021 at 01:30 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `m_akses_user`
--

CREATE TABLE `m_akses_user` (
  `id` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `level` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_akses_user`
--

INSERT INTO `m_akses_user` (`id`, `id_menu`, `level`) VALUES
(1, 1, 'Pimpinan'),
(2, 1, 'Operator'),
(3, 3, 'Pimpinan'),
(4, 3, 'Operator'),
(5, 2, 'User'),
(6, 3, 'User'),
(8, 5, 'Pimpinan'),
(10, 8, 'User'),
(11, 9, 'Operator'),
(12, 4, 'Operator'),
(13, 10, 'Operator'),
(14, 11, 'Operator'),
(15, 12, 'Operator');

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
  `id` int(11) NOT NULL,
  `id_unit` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_jabatan`
--

INSERT INTO `m_jabatan` (`id`, `id_unit`, `name`) VALUES
(1, 2, 'Kepala Sekolah'),
(2, 2, 'Guru'),
(3, 1, 'Dokter'),
(4, 1, 'Suster');

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
  `id_parrent` int(1) NOT NULL,
  `menu` varchar(20) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_menu`
--

INSERT INTO `m_menu` (`id_menu`, `id_parrent`, `menu`, `icon`, `url`) VALUES
(1, 1, 'Dashboard', 'fas fa-fw fa-tachometer-alt', 'Pimpinan'),
(2, 1, 'Dashboard', 'fas fa-fw fa-tachometer-alt', 'User'),
(3, 1, 'Profil saya', 'fas fa-user-alt', 'User/profile'),
(5, 1, 'Acc Data', 'fas fa-fw fa-clipboard', 'Pengajuan/pimpinan'),
(8, 1, 'Pengajuan', 'fas fa-fw fa-clipboard', 'User/pengajuan'),
(9, 1, 'Daftar User', 'fas fa-user-alt', 'Operator/list_pns'),
(10, 1, 'Daftar PNS', '', 'Operator/list_pns'),
(11, 1, 'Daftar Operator', '', 'Operator/list_operator'),
(12, 1, 'Daftar Pimpinan', '', 'Operator/list_pimpinan');

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
-- Table structure for table `m_pimpinan`
--

CREATE TABLE `m_pimpinan` (
  `nip` varchar(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `qrcode` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `m_pimpinan`
--

INSERT INTO `m_pimpinan` (`nip`, `nama`, `qrcode`) VALUES
('1234567891234566', 'Chotibul', '');

-- --------------------------------------------------------

--
-- Table structure for table `m_unit_kerja`
--

CREATE TABLE `m_unit_kerja` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `m_unit_kerja`
--

INSERT INTO `m_unit_kerja` (`id`, `name`) VALUES
(1, 'Dinas Kesehatan'),
(2, 'Dinas Pendidikan');

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
  `sk_ptn` varchar(50) NOT NULL,
  `no_sk` varchar(20) NOT NULL,
  `instansi_pendidikan` varchar(100) NOT NULL,
  `jenjang_pendidikan` varchar(3033) NOT NULL,
  `jadwal_kuliah` varchar(50) NOT NULL,
  `sk_akreditasi` varchar(50) NOT NULL,
  `program_kuliah` varchar(50) NOT NULL,
  `status` varchar(255) NOT NULL,
  `komentar` varchar(255) NOT NULL,
  `no_surat` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_pengajuan`
--

INSERT INTO `t_pengajuan` (`id_pengajuan`, `nip`, `tgl_pengajuan`, `sk_pns`, `sk_rekom`, `sk_ptn`, `no_sk`, `instansi_pendidikan`, `jenjang_pendidikan`, `jadwal_kuliah`, `sk_akreditasi`, `program_kuliah`, `status`, `komentar`, `no_surat`) VALUES
(9, '1234567891234566', '2021-11-11', 'fgtftdd.pdf', 'Akte_Islahatun5.pdf', 'Laporan_Pengajuan_Izin_Belajar.pdf', '12345654321', 'Universitas Banten Jaya', 'S1', '5270-14964-1-PB.pdf', '5270-14964-1-PB1.pdf', 'Sistem Informasi', 'Acc', 'Acc', '123/4567/dghj/2021'),
(10, '1234567891234566', '2021-12-04', 'k;lpjjg.pdf', 'Ajjjjj5.pdf', 'Laporan_Pengajuan_Izin_Belajar.pdf', '12345678910', 'Universitas Banten Jaya', 'S2', '5270-14964-1-PB.pdf', '5270-14964-1-PB1.pdf', 'Sistem Informasi', 'Validasi Pengajuan', 'Persyaratan Sudah Lengkap', '');

-- --------------------------------------------------------

--
-- Table structure for table `t_pns`
--

CREATE TABLE `t_pns` (
  `id_pns` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
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

INSERT INTO `t_pns` (`id_pns`, `nip`, `nama`, `gelar_depan`, `gelar_belakang`, `tmpt_lahir`, `tgl_lahir`, `jk`, `agama`, `sandi`, `unit_kerja`, `pangkat`, `gol`, `profil`, `no_sk_pns`, `jabatan`, `pendidikan`, `jurusan`, `penempatan_kerja`, `status_kawin`, `alamat`, `email`, `level`, `aktif`) VALUES
(7, '1234567891234567', 'UMMI ATHIYAH', '', '', '', '0000-00-00', '', 'ISLAM', '', 'OPERATOR', '', 'IC / JURU', '0000-00-00', '', 'Anggota', '', '', '', '', '', 'edi@gmail.com', 'User', 1),
(9, '0987654321123456', 'SISKA', '', '', '', '0000-00-00', '', '', '$2y$10$qnVcLYhyLRcerEmmgAztzuOzwK8Fns13./gN.Fr4TB2F9ejOSHJcy', 'OPERATOR', '', '', '', '', 'Anggota', '', '', '', '', '', 'edi@gmail.com', 'Operator', 1),
(11, '1234567891234566', 'PNS', '', '', '', '0000-00-00', 'PEREMPUAN', 'ISLAM', '$2y$10$f7BoqHqiczSZKvI4rJErt.T2MKHEMx067aT3rZRRLKVBdZZSYZrMW', 'SEKRETARIS', '', 'IIIC / PENATA', 'rm21-background-tong-0581.jpg', '', '', '', '', '', 'BELUM MENIKAH', '', 'islahatunnufusi@gmail.com', 'User', 1),
(12, '0987654321098765', 'DPM', '', '', '', '0000-00-00', '', 'ISLAM', '$2y$10$r3PDTXzZVTK6LBgVa99JOOnIC/VYoR6pAAMj6j2oZAs6j2rPv2a7y', 'PIMPINAN', '', 'IVE / PEMBINA UTAMA', 'coba_lagi.png', '', 'PIMPINAN', '', '', '', 'MENIKAH', '', 'pimpinan@gmail.com', 'Pimpinan', 1),
(14, '123456789098765533', 'jika', '', '', '', '0000-00-00', 'LAKI-LAKI', 'ISLAM', '', 'OPERATOR', '', 'IVA / PEMBINA', '', '', '', '', '', '', 'MENIKAH', '', '', 'User', 1),
(15, '098765432112345678', 'Humanika', '', '', '', '0000-00-00', 'LAKI-LAKI', 'ISLAM', '', 'OPERATOR', '', 'IIIC / PENATA', '', '', '', '', '', '', 'MENIKAH', '', '', 'Operator', 1),
(16, '989898989898989898', 'ida', '', '', '', '0000-00-00', 'LAKI-LAKI', 'ISLAM', '', 'ghgh', '', 'IIIA / PENATA MUDA', '', '', '', '', '', '', 'MENIKAH', '', '', 'Operator', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `m_akses_user`
--
ALTER TABLE `m_akses_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `m_golongan`
--
ALTER TABLE `m_golongan`
  ADD PRIMARY KEY (`id_gol`);

--
-- Indexes for table `m_jabatan`
--
ALTER TABLE `m_jabatan`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `m_akses_user`
--
ALTER TABLE `m_akses_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `m_golongan`
--
ALTER TABLE `m_golongan`
  MODIFY `id_gol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `m_jabatan`
--
ALTER TABLE `m_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `m_level`
--
ALTER TABLE `m_level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `m_menu`
--
ALTER TABLE `m_menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `m_pendidikan`
--
ALTER TABLE `m_pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `m_unit_kerja`
--
ALTER TABLE `m_unit_kerja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `t_pengajuan`
--
ALTER TABLE `t_pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `t_pns`
--
ALTER TABLE `t_pns`
  MODIFY `id_pns` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
