
CREATE TABLE `beasiswa` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nilai_kls_4` int(10) NOT NULL,
  `nilai_kls_5` int(10) NOT NULL,
  `nilai_kls_6` int(10) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `jml_saudara` int(10) NOT NULL,
  `nama_ortu` varchar(80) NOT NULL,
  `no_telp` int(15) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `penghasilan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `beasiswa`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `beasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;
