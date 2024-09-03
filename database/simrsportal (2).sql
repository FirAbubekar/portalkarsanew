-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2019 at 10:38 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simrsportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_pelayanan`
--

CREATE TABLE IF NOT EXISTS `detail_pelayanan` (
`id` int(100) NOT NULL,
  `id_pelayanan` int(255) DEFAULT NULL,
  `gambar` text
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pelayanan`
--

INSERT INTO `detail_pelayanan` (`id`, `id_pelayanan`, `gambar`) VALUES
(1, 1, 'hemodialisa0.png'),
(2, 1, 'hemodialisa1.png'),
(5, 3, 'pelayanan_paru0.png'),
(6, 3, 'pelayanan_paru1.png'),
(7, 4, 'tms_robotic__lasser_needle0.png'),
(8, 4, 'tms_robotic__lasser_needle1.png'),
(21, 8, 'instalasi_gawat_darurat0.png'),
(22, 8, 'instalasi_gawat_darurat1.png'),
(23, 8, 'instalasi_gawat_darurat2.png'),
(24, 8, 'instalasi_gawat_darurat3.jpg'),
(25, 9, 'instalasi_rawat_jalan0.png'),
(26, 9, 'instalasi_rawat_jalan1.jpg'),
(27, 9, 'instalasi_rawat_jalan2.jpg'),
(28, 9, 'instalasi_rawat_jalan3.png'),
(29, 10, 'pelayanan_paru0.png'),
(30, 10, 'pelayanan_paru1.png'),
(31, 11, 'instalasi_gawat_darurat0.png');

-- --------------------------------------------------------

--
-- Table structure for table `detail_ppid`
--

CREATE TABLE IF NOT EXISTS `detail_ppid` (
`id` int(100) unsigned NOT NULL,
  `id_ppid` int(100) DEFAULT NULL,
  `gambar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_struktur`
--

CREATE TABLE IF NOT EXISTS `detail_struktur` (
`id` int(100) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `gambar` text,
  `urutan` int(100) DEFAULT NULL COMMENT '0. direktur, 1-dst. lainnya',
  `status` varchar(2) DEFAULT NULL COMMENT '0. tidak aktif, 1 aktif'
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_struktur`
--

INSERT INTO `detail_struktur` (`id`, `nama`, `jabatan`, `gambar`, `urutan`, `status`) VALUES
(1, 'dr. Tries Anggraini, M. Kes', 'Direktur Rumah Sakit', 'struktur-0.png', 0, '2'),
(2, 'dr. Sofianita, M.Kes', 'Unit P2JK', 'struktur-1.png', 1, '1'),
(3, 'dr. Didik Wahyudi P, Sp. B', 'Instalasi Kamar Operasi', 'struktur-2.png', 2, '1'),
(4, 'dr. Ida Bagus  Diksananda', 'Instalasi Pemulasaraan Jenazah', 'struktur-3.png', 3, '1'),
(5, 'dr. Anton Wuri  Handayanto, Sp. An', 'Instalasi Anestesi & Terapi', 'struktur-4.png', 4, '1'),
(6, 'dr. Dyah Retno Wulandari. Sp. PD', 'Instalasi Hemodialisa', 'struktur-5.png', 5, '1'),
(7, 'dr. Benny Marcel P., Sp. OG', 'Komite Medik', 'struktur-6.png', 6, '1'),
(8, 'dr. Frans Johannis Huwae, M.Si.Med, Sp. A', 'Komite Nakes Lain', 'struktur-7.png', 7, '1'),
(9, 'Ns. Mahfud Surya, S.Kep', 'Komite Keperawatan', 'struktur-8.png', 8, '1'),
(10, 'Yeti Wahyuni, S.Farm, Apt', 'Instalasi Farmasi', 'struktur-9.png', 9, '1'),
(11, 'dr. Bernandus Anggaru, Sp. PD', 'Komite PPRA', 'struktur-10.png', 10, '1'),
(12, 'Sulistyo Graitaningsih', 'Instalasi CSSD', 'struktur-11.png', 11, '1'),
(13, 'dr. Heru Priyo Husodo, Sp.R', 'Instalasi Radiologi', 'struktur-12.png', 12, '1'),
(14, 'Ermida, SST', 'Instalasi Gizi dan Jasa Boga', 'struktur-13.png', 13, '1'),
(15, 'dr. Bambang Rishardana, Sp.B', 'Koord. Pelayanan Medis', 'struktur-14.png', 14, '1'),
(16, 'Ns, Sujud Priono, S.Kep, M.Kep', 'Koord. Pelayanan Keperawatan', 'struktur-15.png', 15, '1'),
(17, 'dr. Septina Rahayu, Sp. U', 'Instalasi Rawat Inap', 'struktur-16.png', 16, '1'),
(18, 'dr. Andrianto Wisnu Nugroho, Sp.OT', 'Instalasi Gawat Darurat', 'struktur-17.png', 17, '1'),
(19, 'dr. Indra Wahyu Saputra, Sp. JP', 'Komite Farmakologi Terapi', 'struktur-18.png', 18, '1'),
(20, 'dr. Revita Widya Prasanti, Sp.BP-RE', 'Instalasi Rawat Jalan', 'struktur-19.png', 19, '1'),
(21, 'dr. Oriza Ika Putra', 'Komite K3RS', 'struktur-20.png', 20, '1'),
(22, 'dr. Retno Dwi Marwati', 'Koord. PKRS', 'struktur-21.png', 21, '1'),
(23, 'dr. Kemala Hayati, Sp. PK', 'Instalasi Laboratorium', 'struktur-22.png', 22, '1'),
(24, 'Sentot Alibasah, ST', 'Komite Nakes Lain', 'struktur-23.png', 23, '1'),
(25, 'dr. Ferdinandus Stevanus Kakiay, Sp.PD_FINASIM', 'Seksi Pelayanan Medis', 'struktur-24.png', 24, '1'),
(26, 'Unik Purwaningtyas, SKM', 'Seksi UKM dan LITBANG', 'struktur-25.png', 25, '1'),
(27, 'Najaatul Masruroh, SH.MM', 'Sub Bagian Tata Usaha', 'struktur-26.png', 26, '1'),
(28, 'Sularsono, SAP', 'Koord. Kepegawaian', 'struktur-27.png', 27, '1'),
(29, 'Taseri, SAP', 'Koord. Adm Umum dan Rumah Tangga', 'struktur-28.png', 28, '1'),
(30, 'Dwi Sulistyo, SKM', 'Koord. Sungram', 'struktur-29.png', 29, '1'),
(31, 'Dwi Retnoningsih, SH', 'Koord. Humas & Protokol', 'struktur-30.png', 40, '1'),
(32, 'Rismi Andariyati, S.Sos', 'Koord. Administrasi Keuangan', 'struktur-31.png', 41, '1'),
(33, 'Deny Mahendra, S. Kom', 'Unit Layanan Pengadaan', 'struktur-32.png', 42, '1'),
(34, 'Wahyu Pujianto, ST.MM', 'Instalasi IPSRS', 'struktur-33.png', 43, '1'),
(35, 'Yessi Rahmawati, A.Md', 'Instalasi Rekam Medik', 'struktur-34.png', 44, '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_akun_admin`
--

CREATE TABLE IF NOT EXISTS `t_akun_admin` (
`id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_akun_admin`
--

INSERT INTO `t_akun_admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin', '1'),
(2, 'peserta12', 'peserta', '1'),
(3, 'peserta1', 'peserta', '0');

-- --------------------------------------------------------

--
-- Table structure for table `t_akun_karyawan`
--

CREATE TABLE IF NOT EXISTS `t_akun_karyawan` (
`id` int(100) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_akun_karyawan`
--

INSERT INTO `t_akun_karyawan` (`id`, `nip`, `username`, `password`, `status`, `last_login`) VALUES
(1, '102.6-01011991-092016-8065', 'akun1', 'akun1', '1', '2019-12-31 15:50:05'),
(2, '19921023 201903 1 005', 'akun2', 'akun2', '1', '2019-12-25 18:39:41'),
(3, '102.6-01011991-092016-8062', 'peserta', 'peserta', '1', '2019-12-25 18:39:15'),
(4, '102.6-01011991-092016-8068', 'peserta1', 'peserta', '1', '2019-12-25 18:40:05');

-- --------------------------------------------------------

--
-- Table structure for table `t_alur`
--

CREATE TABLE IF NOT EXISTS `t_alur` (
`id` int(100) NOT NULL,
  `alur` varchar(255) DEFAULT NULL,
  `gambar` text,
  `status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_alur`
--

INSERT INTO `t_alur` (`id`, `alur`, `gambar`, `status`) VALUES
(1, 'RAWAT JALAN', 'rawat_jalan.jpg', '1'),
(2, 'RAWAT INAP', 'rawat_inap.png', '1'),
(3, 'INST GAWAT DARURAT', 'inst_gawat_darurat.png', '1'),
(4, 'PENUNJANG', 'penunjang.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_berita`
--

CREATE TABLE IF NOT EXISTS `t_berita` (
`id` int(11) NOT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `deskripsi` text,
  `penulis` varchar(255) DEFAULT NULL,
  `image` text,
  `publikasi` datetime DEFAULT NULL,
  `posting` int(3) DEFAULT NULL COMMENT '0. Tidak Posting, 1. Posting'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_berita`
--

INSERT INTO `t_berita` (`id`, `kategori`, `judul`, `tanggal`, `deskripsi`, `penulis`, `image`, `publikasi`, `posting`) VALUES
(1, 'kegiatan', 'Selamat Hari Kesehatan Ginjal Sedunia 2019', '2019-03-14', '<p style="text-align:justify">Penyakit ginjal merupakan salah satu masalah kesehatan dunia dan diperkirakan 850 juta penduduk di seluruh dunia memiliki penyakit ginjal karena berbagai sebab. Penyakit Ginjal Kronik (PGK) menyebabkan paling sedikit 2,4 juta kematian per tahun dan saat ini penyebab kematian urutan keenam. Gangguan ginjal akut (GgGA), juga dapat berlanjut menjadi PGK, mempengaruhi sekitar 13 juta penduduk di seluruh dunia dan 85% kasus ini ditemukan di negara berpenghasila nrendah dan sedang dan sekitar 1,7 juta setiap tahun meninggal dunia.Kesehatan ginjal masih belum diperhatikan oleh masyarakat, sehingga beban penyakit ginjal semakin meningkat di seluruh dunia. PGK dan Gg GA merupakan suatu akibat dari kondisi sosial di mana orang dilahirkan, tumbuh, hidup, bekerja dan usia, antara lain kemiskinan, diskriminasi gender, kurangnya pendidikan, bahayapekerjaan dan polusi.</p>\r\n\r\n<p style="text-align:justify">Secara umum, kebijakan dan strategi nasional untuk penyakit tida kmenular (<em>non-communicable diseases/NCD</em>) ada di banyak negara, namun kebijakan khusus terhadap penapisan, pencegahan dan pengobatan penyakit ginjal masih sangat minimal. Lebih dari separuh (53%) dari negara-negara yang memiliki strategi NCD menyeluruh tidak memiliki pedoman atau strategi untuk meningkatkan perawatan penderita PGK (baik secara spesifik atau dalam strategi NCD yang lebih luas). Demi pentingnya kesehatan ginjal bagi seluruh masyarakat <em>The International Federation of Kidney Foundation (IFKF)</em> mencanangkan Hari Ginjal Sedunia &ndash; <em>&ldquo;World Kidney Day&rdquo; (WKD)</em> yang diperingati di seluruh dunia sejak tahun 2006 pada setiap hari kamis minggu kedua bulan Maret, tahuninijatuh pada tanggal 14 Maret 2019.</p>\r\n\r\n<p style="text-align:justify">Tema yang dipilih pada tahun ini adalah <em>&ldquo;Kidney Health For Everyone Everywhere&rdquo;&nbsp;</em>atau Kesehatan Ginjal untuk Siapa Saja Dimana Saja. Hari Ginjal Sedunia mempromosikan akses yang terjangkau dan merata ke pendidikan kesehatan, perawatan kesehatan dan pencegahan penyakit ginjal bagi semua lapisan masyarakat. Rumah Sakit Umum Karsa Husada Batu sebagai ssalah satu rumah sakit pemerintah yang berada di wilayah Kota wisata Batu merasa terpanggil untuk turut mempromosikan Hari Kesehatan Ginjal Sedunia (WKD) ini kepada seluruh masyarakat, baik masyarakat Kota Wisata Batu pada khususnya, maupun masyarakat Malang Raya pada umumnya. Dalam rangka Hari Kesehatan Ginjal Sedunia tersebut Rumah Sakit Umum Karsa Husada Batu melakukan serangkaian kegiatan yang tersusun dalam suatu rangkaian kegiatan dengan melibatkan pasien dan keluarga, pengunjung rumah sakit, serta masyarakat umum.</p>', 'admin', 'selamatharikesehatanginjalsedunia.png', '2019-12-17 15:57:14', 1),
(2, 'alur', 'Alur Pendaftaran Online', '2019-02-25', '<h5><strong><span style="font-size:22px">Proses Pendaftaran Antrian Online Pasien Rawat Jalan</span></strong></h5>\r\n\r\n<ol>\r\n	<li>Pasien login pada sistem informasi pendaftaran online, jika belum memiliki akun pasien wajib mendaftar akun</li>\r\n	<li>Jika pasien berhasil mendaftar, pasien wajib mengisi poli tujuan dan cara pembayaraan</li>\r\n	<li>Setelah pasien mengisi tujuan Poli, Pasien akan mendapatkan notifikasi telah berhasil mendaftar dan mendapatkan nomer pendaftaran</li>\r\n</ol>\r\n\r\n<h5><strong><span style="font-size:22px">Proses Pendaftaran Akun Sistem Antrian online</span></strong></h5>\r\n\r\n<ol>\r\n	<li>Pasien wajib mempunyai nomer rekamedis</li>\r\n	<li>Pasien Mengisi Form Pendaftaran Pasien Online, langsung menuju ke bagian HUMAS Rumah Sakit Karsa Husada (RSKH) Batu</li>\r\n	<li>Setelah Pasien mengisi Form, Bagian humas RSKH akan mendaftarkan akun pasien dan memberikan akun login pada pasien</li>\r\n	<li>pasien mendapatkan akun login sistem antrian online</li>\r\n</ol>\r\n\r\n<h5><strong><span style="font-size:22px">SYARAT DAN KETENTUAN</span></strong></h5>\r\n\r\n<ol>\r\n	<li>Pendaftaran Online hanya bisa dilakukan oleh pasien yang telah memiliki nomor rekammedis di RSU KarsaHusada (pasien lama)</li>\r\n	<li>Pendaftaran Online dibuka pada hari kerja (senin-jumat) mulai pukul 08.00 &ndash; 11.00 WIB</li>\r\n	<li>Pendaftaran online dilakukan H-1 periksa</li>\r\n	<li>Pendaftaran online hari sabtu-minggu/ Hari Libur Nasional TUTUP</li>\r\n	<li>Batas maksimal pasien untuk mendaftar adalah 50 orang.</li>\r\n	<li>Setelah melakukan pendaftaran, anda akan mendapatkan informasi mengenai waktu kedatangan dan nomor antrian</li>\r\n</ol>\r\n\r\n<ol>\r\n	<li>Link Pendaftaran pasien online&nbsp;<a href="http://rsukarsahusadabatu.jatimprov.go.id/daftaronline/">http://rsukarsahusadabatu.jatimprov.go.id/daftaronline/</a></li>\r\n</ol>\r\n', 'admin', 'alurpendaftaranonline.png', '2019-12-17 16:15:55', 1),
(3, 'WANTED', 'PELAKU SARA', '2019-12-26', '<p>Pelaku pernah teriak MINORITASS dan PENIPU kepada yang bersangkutan&nbsp;di majelis ta&#39;lim</p>\r\n', 'Admin YTH', 'pelaku_sara.png', '2019-12-30 08:37:16', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_ikm`
--

CREATE TABLE IF NOT EXISTS `t_ikm` (
`id` int(100) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_ikm`
--

INSERT INTO `t_ikm` (`id`, `judul`, `gambar`, `status`) VALUES
(1, 'Semester I 2019', NULL, '0');

-- --------------------------------------------------------

--
-- Table structure for table `t_jadwal_dokter`
--

CREATE TABLE IF NOT EXISTS `t_jadwal_dokter` (
`id` int(100) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `unit` varchar(255) DEFAULT NULL,
  `jadwal` varchar(255) DEFAULT NULL,
  `gambar` text,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_jadwal_dokter`
--

INSERT INTO `t_jadwal_dokter` (`id`, `nama`, `unit`, `jadwal`, `gambar`, `status`) VALUES
(1, 'dr. Andi Mulyanto, Sp. A', 'Poli Anak', 'Senin & Kamis', NULL, 1),
(2, 'dr. Frans Johannis Huwae, \nMs. Med, Sp. A', 'Poli Anak', 'Senin & Rabu', '', 1),
(3, 'dr. Teguh Wahyudi, Sp. A', 'Poli Anak', 'Jumat', '', 1),
(4, 'dr. Didik Wahyudi Purwohartono, Sp. B', 'Poli Bedah Umum', 'Senin - Jumat', '', 1),
(5, 'dr. Bambang Rishardana, Sp. B', 'Poli Bedah Umum', 'Senin - Jumat', '', 1),
(6, 'dr. Revita Widya Prasanti, Sp. BP-RE', 'Poli Bedah Plastik', 'Rabu & Jumat', '', 1),
(7, 'dr. Freddy, Sp. B, KBD', 'Poli Bedah Digestif', 'Rabu & Jumat', '', 1),
(8, 'dr. Septina Rahayu, Sp. U', 'Poli Bedah Urologi', 'Selasa & Kamis', '', 1),
(9, 'dr. Bambang Widiwanto, Sp. OT', 'Poli Orthopedi', 'Senin - Rabu', '', 1),
(10, 'dr. Andrianto Wisnu Nugrohom, Sp. OT', 'Poli Orthopedi', 'Kamis & Jumat', '', 1),
(11, 'dr. Linda Veronica, Sp. KK', 'Poli Kulit & Kelamin', 'Senin - Jumat', '', 1),
(12, 'dr. Julia Widiati, Sp. M', 'Poli Mata', 'Selasa & Kamis', '', 1),
(13, 'dr. Lina Puspita Hutasoit, Sp. M', 'Poli Kulit & Kelamin', 'Senin - Jumat', '', 1),
(14, 'dr. Lucia Puji Astuti, Sp. S', 'Poli Syaraf', 'Senin - Jumat', '', 1),
(15, 'dr. Fathia Annis Pramesti, Sp. S', 'Poli Syaraf', 'Senin - Jumat', '', 1),
(16, 'dr. Faridatul Jannah, Sp. THT-KL', 'Poli THT', 'Senin - Jumat', '', 1),
(17, 'dr. Wara Pertiwi, Sp. P', 'Poli Paru', 'Senin - Jumat', '', 1),
(18, 'drg. Slamet Sugiharto', 'Poli Gigi', 'Senin - Jumat', '', 1),
(19, 'drg. Swarantika Aulia Rarasati', 'Poli Gigi', 'Senin - Jumat', '', 1),
(20, 'drg. Priya Esti Utami, Sp. Ort', 'Poli Gigi Ortodonti', 'Senin - Jumat', '', 1),
(21, 'drg. Anugra Eka Putra, Sp. Ort', 'Poli Gigi Ortodonti', 'Senin - Jumat', '', 1),
(22, 'dr. Nugroho Setyawan, Sp. BM', 'Poli Bedah Mulut', 'Senin - Jumat', '', 1),
(23, 'dr. Astri Ulia Rahmawati, Sp. PD', 'Poli Penyakit Dalam', 'Senin - Jumat', '', 1),
(24, 'dr. Dyah Retno Wulandari, Sp. PD', 'Poli Penyakit Dalam', 'Senin - Jumat', '', 1),
(25, 'dr. Ferdinandus Stevanus Kakiay, Sp.PD-FINASIM', 'Poli Penyakit Dalam', 'Senin - Jumat', '', 1),
(26, 'dr. Bernandus Anggaru, Sp. PD', 'Poli Penyakit Dalam', 'Senin - Jumat', '', 1),
(27, 'dr. Achmad Zainudi Arif, Sp. PD', 'Poli Penyakit Dalam', 'Senin - Jumat', '', 1),
(28, 'dr. Anton Wuri Handayanto, Sp. An', 'Poli Anestesi', 'Senin - Jumat', NULL, 1),
(29, 'dr. Ramacandra Rakhmatullah, Sp. An', 'Poli Anestesi', 'Senin - Jumat', '', 1),
(30, 'dr. Hendry Christiono, Sp. An', 'Poli Anestesi', 'Senin - Jumat', '', 1),
(31, 'dr. Nurdiana Adwi Nugrahanim, Sp. KFR', 'Poli Rehab Medik & Fisioterapi', 'Senin - Jumat', '', 1),
(32, 'dr. Indra Wahyu Saputra, Sp. JP', 'Poli Jantung & Pembuluh Darah', 'Senin - Jumat', '', 1),
(33, 'dr. Ikhwan Handirosiyanto, Sp. JP', 'Poli Jantung & Pembuluh Darah', 'Senin - Jumat', '', 1),
(34, 'dr. Kartika Siwi Proborretno, Sp. JP', 'Poli Jantung & Pembuluh Darah', 'Senin - Jumat', '', 1),
(35, 'dr_ Achmad Zainudi Arif, Sp_ PD', 'Poli VCT & Geriatri', 'Senin - Jumat', 'dr__achmad_zainudi_arif,_sp__pd.png', 1),
(36, 'dr. Yunita Puji Lestari, MMR', 'Poli VCT & Geriatri', 'Senin - Jumat', '', 1),
(37, 'dr. Yunita Puji Lestari, MMR', 'Poli VCT & Geriatri', 'Senin - Jumat', '', 1),
(38, 'dr. Astri Ulia Rahmawati, Sp. PD', 'Poli VCT & Geriatri', 'Senin - Jumat', '', 1),
(39, 'dr. Heru Priyo Husodo, Sp. R', 'Radiologi', 'Senin - Jumat', '', 1),
(40, 'dr. Evelyn Christina Hidayat, Sp. Rad', 'Radiologi', 'Senin - Jumat', '', 1),
(41, 'dr. Evelyn Christina Hidayat, Sp. Rad', 'Radiologi', 'Senin - Jumat', '', 1),
(42, 'dr. Kemala Hayati, Sp. PK', 'Laboratorium', 'Senin - Jumat', '', 1),
(43, 'dr. Arif Satria Hardika, Sp. A', 'Lab. Patologi Anatomi', 'Senin - Jumat', '', 1),
(44, 'dr. Putra Agung Dewata, Sp. EM', 'Emergency Medicine', 'Senin - Jumat', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_mutu`
--

CREATE TABLE IF NOT EXISTS `t_mutu` (
`id` int(100) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `nama_file` varchar(255) DEFAULT NULL,
  `gambar` text,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_mutu`
--

INSERT INTO `t_mutu` (`id`, `type`, `nama_file`, `gambar`, `status`) VALUES
(1, 'Mutu Semester', 'Ketepatan Waktu 2018', 'ketepatan_waktu_2018.png', 1),
(2, 'Mutu Semester', 'Ketepatan Waktu 2019', 'ketepatan_waktu_2019.png', 1),
(3, 'Mutu Semester', 'Ketepatan Waktu 2020', 'ketepatan_waktu_2020.png', 1),
(5, 'Mutu Kunci', 'Laporan Kinerja', 'laporan_kinerja.pdf', 1),
(6, 'Mutu Kunci', 'Laporan Kinerja Instansi Pemerintah Pemerintah Kab Batu', 'lap_kab_batu.pdf', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_pegawai`
--

CREATE TABLE IF NOT EXISTS `t_pegawai` (
`id` int(100) NOT NULL,
  `NIP` varchar(255) DEFAULT NULL,
  `Nama` varchar(255) DEFAULT NULL,
  `J_gol` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `JK` varchar(255) DEFAULT NULL,
  `menikah` varchar(255) DEFAULT NULL,
  `jenjang` varchar(255) DEFAULT NULL,
  `Temp_tgllahir` varchar(255) DEFAULT NULL,
  `Jurusan` varchar(255) DEFAULT NULL,
  `Tgl_Lahir` varchar(255) DEFAULT NULL,
  `Alamat` text,
  `Telp` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nama_sekolah` varchar(255) DEFAULT NULL,
  `tahun_lulus` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `BPJSKES` varchar(255) DEFAULT NULL,
  `nik` varchar(255) DEFAULT NULL,
  `tenaga` varchar(255) DEFAULT NULL,
  `gaji` varchar(255) DEFAULT NULL,
  `npwp` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `rek_bank` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_pelayanan`
--

CREATE TABLE IF NOT EXISTS `t_pelayanan` (
`id` int(100) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `sub_judul` varchar(255) DEFAULT NULL,
  `waktu_pelayanan` text,
  `keterangan` text,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pelayanan`
--

INSERT INTO `t_pelayanan` (`id`, `judul`, `sub_judul`, `waktu_pelayanan`, `keterangan`, `status`) VALUES
(1, 'LAYANAN UNGGULAN', 'HEMODIALISA', '<p><strong>Setiap Hari :</strong></p>\r\n\r\n<p><strong>Senin - Jumat = 07.00 - 16.00 WIB</strong></p>\r\n', '<p><!--(figmeta)eyJmaWxlS2V5IjoiTHdDQnJTMk1MbzZ0N1lxaDl6bFlzSiIsInBhc3RlSUQiOi0xLCJkYXRhVHlwZSI6InNjZW5lIn0K(/figmeta)--><!--(figma)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(/figma)-->Hemodialisis merupakan salah satu jenis terapi pasien gagal ginjal. Hemodialisis digunakan untuk &lsquo;menggantikan&rsquo; sebagian fungsi ginjal. Walau tidak sesempurna fungsi asli ginjal, hemodialisis dapat membantu menormalkan kembali keseimbangan cairan, membuang sisa metabolisme tubuh, menyeimbangkan asam-basa-elekterolit dalam tubuh, dan membantu mengendalikan tekanan darah. Hemodialisis bukanlah sebuah vonis yang menakutkan. Bahkan selama melakukan proses hemodialisis aktivitas pasien masih bisa dilakukan dengan normal.</p>\r\n', 1),
(3, 'LAYANAN UNGGULAN', 'PELAYANAN PARU', '<p>sdasdasd</p>\r\n', '<p>Adapun layanan paru unggulan kami yaitu, Ruang poli TB, Ruang Rawat Inap Paru Menular, Pemeriksaan BTA, Pemeriksaan FAAL kapasitas paru paru menerima oksigen, Pemeriksaan FOB (Fiber Optic Bronchospy) dicurigai adanya tumor di saluran pernafasan atau menentukan kelas tumornya</p>\r\n', 1),
(4, 'LAYANAN UNGGULAN', 'TMS ROBOTIC & LASSER NEEDLE', '<p>asdasdas</p>\r\n', '<p><!--(figmeta)eyJmaWxlS2V5IjoiTHdDQnJTMk1MbzZ0N1lxaDl6bFlzSiIsInBhc3RlSUQiOi0xLCJkYXRhVHlwZSI6InNjZW5lIn0K(/figmeta)--><!--(figma)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(/figma)--><em>Transcranial Magnetic Stimulation Robotic &amp; Lasser Needle</em> mengatasi gangguan saraf / psikiatrik TANPA BEDAH, TANPA MELUKAI KULIT</p>\r\n', 1),
(9, 'INSTALASI RAWAT JALAN', '', '<p><strong>Setiap Hari :</strong></p>\r\n\r\n<p><strong>Senin - Kamis = 07.00 - 16.00</strong></p>\r\n', '<p>Hemodialisis merupakan salah satu jenis terapi pasien gagal ginjal. Hemodialisis digunakan untuk &lsquo;menggantikan&rsquo; sebagian fungsi ginjal. Walau tidak sesempurna fungsi asli ginjal, hemodialisis dapat membantu menormalkan kembali keseimbangan cairan, membuang sisa metabolisme tubuh, menyeimbangkan asam-basa-elekterolit dalam tubuh, dan membantu mengendalikan tekanan darah. Hemodialisis bukanlah sebuah vonis yang menakutkan. Bahkan selama melakukan proses hemodialisis aktivitas pasien masih bisa dilakukan dengan normal.</p>\r\n', 1),
(10, 'LAYANAN UNGGULAN', 'PELAYANAN PARU', '<p>mnmbvvnbj</p>\r\n', '<p>Hemodialisis merupakan salah satu jenis terapi pasien gagal ginjal. Hemodialisis digunakan untuk &lsquo;menggantikan&rsquo; sebagian fungsi ginjal. Walau tidak sesempurna fungsi asli ginjal, hemodialisis dapat membantu menormalkan kembali keseimbangan cairan, membuang sisa metabolisme tubuh, menyeimbangkan asam-basa-elekterolit dalam tubuh, dan membantu mengendalikan tekanan darah. Hemodialisis bukanlah sebuah vonis yang menakutkan. Bahkan selama melakukan proses hemodialisis aktivitas pasien masih bisa dilakukan dengan normal.</p>\r\n', 1),
(11, 'INSTALASI GAWAT DARURAT', '', '<p><strong>Senin - Kamis = 07.00 - 15.00 WIB</strong></p>\r\n', '<p>asdasdasdsad</p>\r\n\r\n<p>asdasdasdsad</p>\r\n\r\n<p>dfdsdfsdfds</p>\r\n\r\n<p>dfsdfds</p>\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_perpustakaan`
--

CREATE TABLE IF NOT EXISTS `t_perpustakaan` (
`id` int(100) NOT NULL,
  `nama_file` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `tanggal_upload` date DEFAULT NULL,
  `file` text
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_perpustakaan`
--

INSERT INTO `t_perpustakaan` (`id`, `nama_file`, `kategori`, `status`, `tanggal_upload`, `file`) VALUES
(5, 'Gigi V 1', 'Kesehatan1', 1, '2019-12-17', 'kesehatan_gigi_v_1.pdf'),
(6, 'Kesehatan Jantung V 1', 'Kesehatan', 1, '2019-12-17', 'kesehatan_jantung_v_1.pdf'),
(7, 'Kesehatan Paru-Paru V 1', 'Kesehatan', 1, '2019-12-30', 'kesehatan_paru-paru_v_1.pdf'),
(8, 'Kesehatan Kulit V 1', 'Kesehatan', 1, '2019-12-17', 'kesehatan_kulit_v_1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `t_ppid`
--

CREATE TABLE IF NOT EXISTS `t_ppid` (
`id` int(100) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `gambar` varchar(255) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_ppid`
--

INSERT INTO `t_ppid` (`id`, `judul`, `deskripsi`, `gambar`, `status`) VALUES
(1, 'PROFIL', 'asdasdasd', NULL, '1'),
(2, 'INFO PUBLIK', 'asdasdasdasd', NULL, '1'),
(3, 'LAYANAN INFORMASI', 'asdas;lkl;k;lk;lkljghjghj', NULL, '1'),
(4, 'GALERI PPID', 'dsfkdsfdsf', '', '1'),
(9, 'Semester II 2019', '<p>asdasdasd adsasdasd</p>\r\n', 'semester_ii_2019.png', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_profil`
--

CREATE TABLE IF NOT EXISTS `t_profil` (
`id` int(100) NOT NULL,
  `judul` text,
  `deskripsi` text,
  `status` varchar(255) DEFAULT NULL COMMENT '0, tidak ditampilkan, 1. tampilkan'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_profil`
--

INSERT INTO `t_profil` (`id`, `judul`, `deskripsi`, `status`) VALUES
(1, 'VISI', '<h3 style="color: rgba(0, 0, 0, 0.7);">Menjadi rumah sakit pilihan utama masyarakat</h3>', '1');
INSERT INTO `t_profil` (`id`, `judul`, `deskripsi`, `status`) VALUES
(3, 'MISI', '<ol>\r\n	<li>\r\n	<p><!--(figmeta)eyJmaWxlS2V5IjoiTHdDQnJTMk1MbzZ0N1lxaDl6bFlzSiIsInBhc3RlSUQiOi0xLCJkYXRhVHlwZSI6InNjZW5lIn0K(/figmeta)--><!--(figma)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(/figma)--><strong><span dir="rtl">Mewujudkan pelayanan kesehatan aman, ramah dan berkualitas.</span></strong></p>\r\n	</li>\r\n	<li>\r\n	<p><!--(figmeta)eyJmaWxlS2V5IjoiTHdDQnJTMk1MbzZ0N1lxaDl6bFlzSiIsInBhc3RlSUQiOi0xLCJkYXRhVHlwZSI6InNjZW5lIn0K(/figmeta)--><!--(figma)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(/figma)--><strong><span dir="rtl">Mewujudkan tatakelola rumah sakit yang profesional dan akuntabel.</span></strong></p>\r\n	</li>\r\n	<li>\r\n	<p><!--(figmeta)eyJmaWxlS2V5IjoiTHdDQnJTMk1MbzZ0N1lxaDl6bFlzSiIsInBhc3RlSUQiOi0xLCJkYXRhVHlwZSI6InNjZW5lIn0K(/figmeta)--><!--(figma)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(/figma)--><strong><span dir="rtl">Mewujudkan rumah sakit umum karsa husada batu sebagai rsu kelas b Pendidikan.</span></strong></p>\r\n	</li>\r\n</ol>\r\n', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_sakip`
--

CREATE TABLE IF NOT EXISTS `t_sakip` (
`id` int(100) NOT NULL,
  `nama_file` varchar(255) DEFAULT NULL,
  `file` text,
  `status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_sakip`
--

INSERT INTO `t_sakip` (`id`, `nama_file`, `file`, `status`) VALUES
(1, 'Laporan Kinerja Instansi ', 'laporan_kinerja_instansi_.pdf', '1'),
(2, 'Laporan Kinerja ', 'laporan_kinerja_.pdf', '1'),
(3, 'Laporan Kinerja Instansi Pemerintah Pemerintah Kab ', 'laporan_kinerja_instansi_pemerintah_pemerintah_kab_.pdf', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_sdm`
--

CREATE TABLE IF NOT EXISTS `t_sdm` (
`id` int(100) NOT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `jumlah` int(255) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_sdm`
--

INSERT INTO `t_sdm` (`id`, `jenis`, `jumlah`, `status`) VALUES
(1, 'Struktural', 4, '1'),
(2, 'Dokter Umum', 20, '1'),
(3, 'Dokter Gigi', 2, '1'),
(4, 'Dokter Spesialis', 45, '1'),
(5, 'Perawat', 169, '1'),
(6, 'Bidan', 16, '1'),
(7, 'Tenaga Kesehatan Lain', 111, '1'),
(8, 'Non Medis', 157, '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_sejarah`
--

CREATE TABLE IF NOT EXISTS `t_sejarah` (
`id` int(100) NOT NULL,
  `tahun` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `gambar` text,
  `status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_sejarah`
--

INSERT INTO `t_sejarah` (`id`, `tahun`, `deskripsi`, `gambar`, `status`) VALUES
(3, '1934', '<p>Dibuka ruang perawatan (Rawat Inap) yang diresmikan oleh Mas Soemarto (Patih Kabupaten Malang), <em>JA Seven (Poning Master)</em>, <em>de Ruyter de Wild (Voorith Bob)</em> dan dikenal dengan nama &ldquo;<em>SANATORIUM</em>&rdquo;. Pada masa penjajahan ', '1934.png', '1'),
(5, '1912', '<p>Rumah Sakit Paru Batu didirikan pada tahun 1912 pada masa penjajahan Belanda dengan pelayanan rawat jalan untuk penyakit paru yang berlokasi di kota Batu.</p>\r\n', '1912.png', '1'),
(6, '1945', '<p>Rumah sakit paru diserahkan sepenihnya ke Republik Indonesia</p>\r\n', '1945.png', '1'),
(7, '2007', '<p>Rumah Sakit Paru ditetapkan sebagai salah satu UPT (Unit Pelaksana Teknis) Dinas Kesehatan Provinsi Jawa Timur. Berdasarkan pada Keputusan Menteri Kesehatan Republik Indonesia Nomor : YM.02.04.3.3.3228</p>\r\n', '2007.png', '1'),
(8, '2009', '<p>Berdasarkan pada Keputusan Gubernur Nomor : 118/259/kpts/013/2009, Rumah Sakit Paru Batu ditetapkan sebagai Badan Layanan Umum Daerah (BLUD) dan berstatus BLUD penuh.</p>\r\n', '2009.png', '1'),
(9, '2011', '<p>Rumah Sakit Paru Batu &quot;LULUS AKREDITASI TINGKAT DASAR&quot; oleh KARS.</p>\r\n', '2011.png', '1'),
(10, '2015', '<p>Rumah Sakit Paru Batu mengalami perubahan nomenklatur menjadi RSU dengan nama &quot;RSU KARSA HUSADA BATU&quot;</p>\r\n', '2015.png', '1'),
(11, 'Sekarang', '<p>RSU Karsa Husada Batu terus mengembangkan kualitas pelayanan kesehatan dengan cara mengikuti akreditasi rumah sakit oleh KARS dan hasilnya RSU Karsa Husada Batu &ldquo;LULUS AKREDITASI TINGKAT PARIPURNA&rdquo; mengikuti akreditasi rumah sakit oleh KARS', 'sekarang', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_struktur`
--

CREATE TABLE IF NOT EXISTS `t_struktur` (
`id` int(100) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `aktif` varchar(2) DEFAULT NULL COMMENT '0. Tidak Aktif, 1 Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `t_tarif`
--

CREATE TABLE IF NOT EXISTS `t_tarif` (
`id` int(100) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jenis_pelayanan` varchar(255) DEFAULT NULL,
  `tarif` varchar(255) DEFAULT NULL COMMENT 'igd',
  `tarif_rajal` varchar(255) DEFAULT NULL COMMENT 'rawat jalan',
  `executive` varchar(255) DEFAULT NULL COMMENT 'rawat jalan',
  `kelas1` varchar(255) DEFAULT NULL COMMENT 'rawat inap',
  `kelas2` varchar(255) DEFAULT NULL COMMENT 'rawat inap',
  `kelas3` varchar(255) DEFAULT NULL COMMENT 'rawat inap',
  `kelas_utama` varchar(255) DEFAULT NULL COMMENT 'rawat inap'
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_tarif`
--

INSERT INTO `t_tarif` (`id`, `nama`, `jenis_pelayanan`, `tarif`, `tarif_rajal`, `executive`, `kelas1`, `kelas2`, `kelas3`, `kelas_utama`) VALUES
(1, 'Instalasi Gawat Darurat', 'Registrasi Rawat Darurat', '10.000', NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Instalasi Gawat Darurat', 'Pemerikasaan Dokter', '15.000', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Instalasi Gawat Darurat', 'Jasa Konsultasi', '110.000', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Instalasi Gawat Darurat', 'Konsultasi Per Telepon', '50.000', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Instalasi Gawat Darurat', 'Konsultasi Dokter Spesialis Konsultan', '150.000', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Rawat Jalan', 'Registrasi Rawat Jalan', NULL, '10.000', '10.000', NULL, NULL, NULL, NULL),
(7, 'Rawat Jalan', 'Pemeriksaan Dokter Spesialis', NULL, '10.000', '10.000', NULL, NULL, NULL, NULL),
(8, 'Rawat Jalan', 'Pemeriksaan Dokter Umum', NULL, '100.000', '10.000', NULL, NULL, NULL, NULL),
(9, 'Rawat Jalan', 'Pelayanan Rawat Jalan', NULL, '50.000', '10.000', NULL, NULL, NULL, NULL),
(10, 'Rawat Jalan', 'Konsultasi Gizi', NULL, '150.000', '150.000', NULL, NULL, NULL, NULL),
(11, 'Rawat Jalan', 'Konsultasi Antar Poliklinik', NULL, '150.000', '10.000', NULL, NULL, NULL, NULL),
(12, 'Rawat Inap', 'aadasdasd', NULL, NULL, NULL, '10.000', '11.000', '10.000', '10.000'),
(13, 'Rawat Inap', 'Pemeriksaan Dokter Spesialis', NULL, NULL, NULL, '10.000', '10.000', '10.000', '10.000'),
(14, 'Rawat Inap', 'Pemeriksaan Dokter Umum', NULL, NULL, NULL, '10.000', '10.000', '10.000', '10.000'),
(18, 'Instalasi Gawat Darurat', 'aadasdasd', '20000', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `t_visitor`
--

CREATE TABLE IF NOT EXISTS `t_visitor` (
`id` int(255) NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `browser` varchar(255) DEFAULT NULL,
  `sistem_operasi` varchar(255) DEFAULT NULL,
  `tanggal` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_visitor`
--

INSERT INTO `t_visitor` (`id`, `ip_address`, `browser`, `sistem_operasi`, `tanggal`) VALUES
(1, '::1', 'Chrome', 'Windows 10', '2019-12-23'),
(2, '192.168.43.143', 'Firefox', 'Windows 10', '2019-12-22'),
(3, '192.168.43.235', 'Chrome', 'Android', '2019-12-25'),
(4, '192.168.43.143', 'Firefox', 'Windows 10', '2019-12-25'),
(5, '::1', 'Edge', 'Windows 10', '2019-12-25'),
(6, '::1', 'Chrome', 'Windows 10', '2019-12-26'),
(7, '192.168.200.133', 'Chrome', 'Windows 10', '2019-12-26'),
(8, '::1', 'Chrome', 'Windows 10', '2019-12-27'),
(9, '192.168.30.1', 'Chrome', 'Android', '2019-12-27'),
(10, '::1', 'Chrome', 'Windows 10', '2019-12-30'),
(11, '192.168.200.21', 'Chrome', 'Windows 10', '2019-12-31'),
(12, '::1', 'Chrome', 'Windows 10', '2019-12-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pelayanan`
--
ALTER TABLE `detail_pelayanan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_ppid`
--
ALTER TABLE `detail_ppid`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_struktur`
--
ALTER TABLE `detail_struktur`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_akun_admin`
--
ALTER TABLE `t_akun_admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_akun_karyawan`
--
ALTER TABLE `t_akun_karyawan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_alur`
--
ALTER TABLE `t_alur`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_berita`
--
ALTER TABLE `t_berita`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_ikm`
--
ALTER TABLE `t_ikm`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_jadwal_dokter`
--
ALTER TABLE `t_jadwal_dokter`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_mutu`
--
ALTER TABLE `t_mutu`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pegawai`
--
ALTER TABLE `t_pegawai`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_pelayanan`
--
ALTER TABLE `t_pelayanan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_perpustakaan`
--
ALTER TABLE `t_perpustakaan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_ppid`
--
ALTER TABLE `t_ppid`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_profil`
--
ALTER TABLE `t_profil`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_sakip`
--
ALTER TABLE `t_sakip`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_sdm`
--
ALTER TABLE `t_sdm`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_sejarah`
--
ALTER TABLE `t_sejarah`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_struktur`
--
ALTER TABLE `t_struktur`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_tarif`
--
ALTER TABLE `t_tarif`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_visitor`
--
ALTER TABLE `t_visitor`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pelayanan`
--
ALTER TABLE `detail_pelayanan`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `detail_ppid`
--
ALTER TABLE `detail_ppid`
MODIFY `id` int(100) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `detail_struktur`
--
ALTER TABLE `detail_struktur`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `t_akun_admin`
--
ALTER TABLE `t_akun_admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_akun_karyawan`
--
ALTER TABLE `t_akun_karyawan`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_alur`
--
ALTER TABLE `t_alur`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_berita`
--
ALTER TABLE `t_berita`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_ikm`
--
ALTER TABLE `t_ikm`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `t_jadwal_dokter`
--
ALTER TABLE `t_jadwal_dokter`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `t_mutu`
--
ALTER TABLE `t_mutu`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `t_pegawai`
--
ALTER TABLE `t_pegawai`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_pelayanan`
--
ALTER TABLE `t_pelayanan`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `t_perpustakaan`
--
ALTER TABLE `t_perpustakaan`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `t_ppid`
--
ALTER TABLE `t_ppid`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `t_profil`
--
ALTER TABLE `t_profil`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_sakip`
--
ALTER TABLE `t_sakip`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `t_sdm`
--
ALTER TABLE `t_sdm`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `t_sejarah`
--
ALTER TABLE `t_sejarah`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `t_struktur`
--
ALTER TABLE `t_struktur`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `t_tarif`
--
ALTER TABLE `t_tarif`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `t_visitor`
--
ALTER TABLE `t_visitor`
MODIFY `id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
