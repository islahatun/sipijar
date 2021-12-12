-- praktekdokric.dm_agama definition

CREATE TABLE `dm_agama` (
  `agama_id` int(11) NOT NULL AUTO_INCREMENT,
  `agama_name` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`agama_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;


-- praktekdokric.dm_pekerjaan definition

CREATE TABLE `dm_pekerjaan` (
  `pekerjaan_id` int(11) NOT NULL AUTO_INCREMENT,
  `pekerjaan_name` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`pekerjaan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;


-- praktekdokric.dm_pendidikan definition

CREATE TABLE `dm_pendidikan` (
  `pendidikan_id` int(11) NOT NULL AUTO_INCREMENT,
  `pendidikan_name` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`pendidikan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;


-- praktekdokric.dm_perkawinan definition

CREATE TABLE `dm_perkawinan` (
  `perkawinan_id` int(11) NOT NULL AUTO_INCREMENT,
  `perkawinan_name` varchar(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`perkawinan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;


-- praktekdokric.dm_prov definition

CREATE TABLE `dm_prov` (
  `prov_id` varchar(2) NOT NULL,
  `prov_name` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`prov_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- praktekdokric.dm_kab definition

CREATE TABLE `dm_kab` (
  `kab_id` varchar(4) NOT NULL,
  `prov_id` varchar(2) NOT NULL,
  `kab_name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`kab_id`),
  KEY `dm_kab_FK` (`prov_id`),
  CONSTRAINT `dm_kab_FK` FOREIGN KEY (`prov_id`) REFERENCES `dm_prov` (`prov_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- praktekdokric.dm_kec definition

CREATE TABLE `dm_kec` (
  `kec_id` varchar(7) NOT NULL,
  `kab_id` varchar(4) NOT NULL,
  `kec_name` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`kec_id`),
  KEY `dm_kec_FK` (`kab_id`),
  CONSTRAINT `dm_kec_FK` FOREIGN KEY (`kab_id`) REFERENCES `dm_kab` (`kab_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


-- praktekdokric.dm_pasien definition

CREATE TABLE `dm_pasien` (
  `pasien_id` varchar(13) NOT NULL COMMENT 'No Rekam Medis',
  `identitas_id` varchar(50) DEFAULT NULL,
  `name` varchar(40) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `gol_darah` varchar(5) DEFAULT NULL,
  `telp` varchar(13) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `telp_lain` varchar(13) NOT NULL,
  `nama_lain` varchar(100) NOT NULL,
  `pekerjaan_id` int(11) NOT NULL,
  `prov_id` varchar(2) NOT NULL,
  `kab_id` varchar(4) NOT NULL,
  `kec_id` varchar(7) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `agama_id` int(11) NOT NULL,
  `pendidikan_id` int(11) NOT NULL,
  `perkawinan_id` int(11) NOT NULL,
  `date_add` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  PRIMARY KEY (`pasien_id`),
  KEY `dm_pasien_FK` (`perkawinan_id`),
  KEY `dm_pasien_FK_1` (`pendidikan_id`),
  KEY `dm_pasien_FK_2` (`agama_id`),
  KEY `dm_pasien_FK_3` (`pekerjaan_id`),
  CONSTRAINT `dm_pasien_FK` FOREIGN KEY (`perkawinan_id`) REFERENCES `dm_perkawinan` (`perkawinan_id`),
  CONSTRAINT `dm_pasien_FK_1` FOREIGN KEY (`pendidikan_id`) REFERENCES `dm_pendidikan` (`pendidikan_id`),
  CONSTRAINT `dm_pasien_FK_2` FOREIGN KEY (`agama_id`) REFERENCES `dm_agama` (`agama_id`),
  CONSTRAINT `dm_pasien_FK_3` FOREIGN KEY (`pekerjaan_id`) REFERENCES `dm_pekerjaan` (`pekerjaan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;