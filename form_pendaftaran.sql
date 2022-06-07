
CREATE TABLE `data_ortu` (
  `nisn` int(8) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `thn_lahir_ayah` int(4) NOT NULL,
  `pendidikan_ayah` enum('SD','SMP','SMA','D1','D2','D3','D4','S1','S2','S3') NOT NULL,
  `pekerjaan_ayah` enum('Buruh','Karyawan Swasta','Wiraswasta','PNS/TNI/POLRI','Lain-lain','Tidak bekerja') NOT NULL,
  `no_hp_ayah` varchar(15) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `thn_lahir_ibu` int(4) NOT NULL,
  `pendidikan_ibu` enum('SD','SMP','SMA','D1','D2','D3','D4','S1','S2','S3') NOT NULL,
  `pekerjaan_ibu` enum('Buruh','Karyawan Swasta','Wiraswasta','PNS/TNI/POLRI','Lain-lain','Tidak bekerja') NOT NULL,
  `no_hp_ibu` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `data_pribadi` (
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` enum('P','L') NOT NULL,
  `nisn` int(8) NOT NULL,
  `nik` int(16) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` enum('Buddha','Hindu','Islam','Katolik','Kristen','Konghucu') NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `tempat_tinggal` enum('Bersama orang tua','Tidak bersama orang tua') DEFAULT NULL,
  `anak_ke` int(2) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `regist` (
  `nisn` int(8) NOT NULL,
  `jenis_pendaftaran` enum('Siswa Baru','Pindahan') NOT NULL,
  `asal_sekolah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `data_ortu`
  ADD KEY `nisn` (`nisn`);

ALTER TABLE `data_pribadi`
  ADD PRIMARY KEY (`nisn`);

ALTER TABLE `regist`
  ADD KEY `nisn` (`nisn`);

ALTER TABLE `data_ortu`
  ADD CONSTRAINT `data_ortu_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `data_pribadi` (`nisn`);

ALTER TABLE `regist`
  ADD CONSTRAINT `regist_ibfk_1` FOREIGN KEY (`nisn`) REFERENCES `data_pribadi` (`nisn`);
COMMIT;
