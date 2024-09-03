-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 10:51 AM
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
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_pelayanan`
--

INSERT INTO `detail_pelayanan` (`id`, `id_pelayanan`, `gambar`) VALUES
(1, 1, 'hemo1.png'),
(2, 1, 'hemo2.png'),
(3, 2, 'paru1.png'),
(4, 2, 'paru2.png'),
(5, 3, 'tms1.png'),
(6, 3, 'tms2.png'),
(7, 4, 'rehabilitas1.png'),
(8, 4, 'rehabilitas2.png'),
(9, 5, 'ctscan1.png'),
(10, 5, 'ctscan2.png'),
(11, 6, 'igd1.png'),
(12, 6, 'igd2.png'),
(13, 7, 'rajal1.png'),
(14, 7, 'rajal2.png'),
(15, 7, 'rajal3.png'),
(16, 7, 'rajal4.png'),
(17, 8, 'ranap1.png'),
(18, 8, 'ranap2.png'),
(19, 8, 'ranap3.png'),
(20, 8, 'ranap4.png'),
(21, 9, 'bedah1.png'),
(22, 9, 'bedah2.png'),
(23, 10, 'gizi1.png'),
(24, 10, 'gizi2.png'),
(25, 11, 'lab1.png'),
(26, 11, 'lab2.png');

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
(3, 'peserta1', 'peserta', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_akun_karyawan`
--

CREATE TABLE IF NOT EXISTS `t_akun_karyawan` (
`id` int(100) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_akun_karyawan`
--

INSERT INTO `t_akun_karyawan` (`id`, `username`, `password`, `status`) VALUES
(1, '102.6-01011991-092016-8065', 'akun1', '1'),
(2, '19921023 201903 1 005', 'akun2', '1'),
(3, 'peserta', 'peserta', '1'),
(4, 'peserta', 'peserta', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_alur`
--

CREATE TABLE IF NOT EXISTS `t_alur` (
`id` int(100) NOT NULL,
  `alur` varchar(255) DEFAULT NULL,
  `gambar` text,
  `status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_alur`
--

INSERT INTO `t_alur` (`id`, `alur`, `gambar`, `status`) VALUES
(1, 'RAWAT JALAN', 'rawat_jalan.jpg', '1'),
(2, 'RAWAT INAP', 'rawat_inap.png', '1'),
(3, 'INST GAWAT DARURAT', 'inst_gawat_darurat.png', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_berita`
--

INSERT INTO `t_berita` (`id`, `kategori`, `judul`, `tanggal`, `deskripsi`, `penulis`, `image`, `publikasi`, `posting`) VALUES
(1, 'kegiatan', 'Selamat Hari Kesehatan Ginjal Sedunia 2019', '2019-03-14', 'Penyakit ginjal merupakan salah satu masalah kesehatan dunia dan diperkirakan 850 juta penduduk di seluruh dunia memiliki penyakit ginjal karena berbagai sebab. Penyakit Ginjal Kronik (PGK) menyebabkan paling sedikit 2,4 juta kematian per tahun dan saat ini penyebab kematian urutan keenam. Gangguan ginjal akut (GgGA), juga dapat berlanjut menjadi PGK, mempengaruhi sekitar 13 juta penduduk di seluruh dunia dan 85% kasus ini ditemukan di negara berpenghasila nrendah dan sedang dan sekitar 1,7 juta setiap tahun meninggal dunia. Kesehatan ginjal masih belum diperhatikan oleh masyarakat, sehingga beban penyakit ginjal semakin meningkat di seluruh dunia. PGK dan Gg GA merupakan suatu akibat dari kondisi sosial di mana orang dilahirkan, tumbuh, hidup, bekerja dan usia, antara lain kemiskinan, diskriminasi gender, kurangnya pendidikan, bahayapekerjaan dan polusi. Secara umum, kebijakan dan strategi nasional untuk penyakit tida kmenular (non-communicable diseases/NCD) ada di banyak negara, namun kebijakan khusus terhadap penapisan, pencegahan dan pengobatan penyakit ginjal masih sangat minimal. Lebih dari separuh (53%) dari negara-negara yang memiliki strategi NCD menyeluruh tidak memiliki pedoman atau strategi untuk meningkatkan perawatan penderita PGK (baik secara spesifik atau dalam strategi NCD yang lebih luas). Demi pentingnya kesehatan ginjal bagi seluruh masyarakat The International Federation of Kidney Foundation (IFKF) mencanangkan Hari Ginjal Sedunia – “World Kidney Day” (WKD) yang diperingati di seluruh dunia sejak tahun 2006 pada setiap hari kamis minggu kedua bulan Maret, tahuninijatuh pada tanggal 14 Maret 2019. Tema yang dipilih pada tahun ini adalah“Kidney Health For Everyone Everywhere”atau Kesehatan Ginjal untuk Siapa Saja Dimana Saja. Hari Ginjal Sedunia mempromosikan akses yang terjangkau dan merata ke pendidikankesehatan, perawatan kesehatan dan pencegahan penyakit ginjal bagi semua lapisan masyarakat. Rumah Sakit Umum Karsa Husada Batu sebagai ssalah satu rumah sakit pemerintah yang berada di wilayah Kota wisata Batu merasa terpanggil untuk turut mempromosikan Hari Kesehatan Ginjal Sedunia (WKD) ini kepada seluruh masyarakat, baik masyarakat Kota Wisata Batu pada khususnya, maupun  masyarakat Malang Raya pada umumnya. Dalam rangka Hari Kesehatan Ginjal Sedunia tersebut Rumah Sakit Umum Karsa Husada Batu melakukan serangkaian kegiatan yang tersusun dalam suatu rangkaian kegiatan dengan melibatkan pasien dan keluarga, pengunjung rumah sakit, serta masyarakat umum.\r', 'admin', '1-2019-03-14.png', '2019-11-20 10:00:00', 1),
(2, 'alur', 'Atasi Gangguan Syaraf/Psikiatrik Tanpa Bedah di RSU Karsa Husada', '2019-02-25', '<p>Proses Pendaftaran Antrian Online Pasien Rawat Jalan Pasien login pada sistem informasi pendaftaran online, jika belum memiliki akun pasien wajib mendaftar akun Jika pasien berhasil mendaftar, pasien wajib mengisi poli tujuan dan cara pembayaraan Setelah pasien mengisi tujuan Poli, Pasien akan mendapatkan notifikasi telah berhasil mendaftar dan mendapatkan nomer pendaftaran Proses Pendaftaran Akun Sistem Antrian online Pasien wajib mempunyai nomer rekamedis Pasien Mengisi Form Pendaftaran Pasien Online, langsung menuju ke bagian HUMAS Rumah Sakit Karsa Husada (RSKH) Batu Setelah Pasien mengisi Form, Bagian humas RSKH akan mendaftarkan akun pasien dan memberikan akun login pada pasien pasien mendapatkan akun login sistem antrian online SYARAT DAN KETENTUAN Pendaftaran Online hanya bisa dilakukan oleh pasien yang telah memiliki nomor rekammedis di RSU KarsaHusada (pasien lama) Pendaftaran Online dibuka pada hari kerja (senin-jumat) mulai pukul 08.00 &ndash; 11.00 WIB Pendaftaran online dilakukan H-1 periksa Pendaftaran online hari sabtu-minggu/ Hari Libur Nasional TUTUP Batas maksimal pasien untuk mendaftar adalah 50 orang. Setelah melakukan pendaftaran, anda akan mendapatkan informasi mengenai waktu kedatangan dan nomor antrian Link Pendaftaran pasien online http://rsukarsahusadabatu.jatimprov.go.id/daftaronline/</p>\r\n', 'admin', '2-2019-02-25.png', '2019-12-09 11:00:26', 1),
(3, 'Pengajuan Pendidikan Pada Instansi Tertentu Di Kabupaten Jawa Timur', 'asdasd', '2019-12-16', '<p>asdasda</p>\r\n', 'adasd', 'asdasd.png', '2019-12-16 16:36:27', 1),
(4, 'Pengajuan Pendidikan Pada Instansi Tertentu Di Kabupaten Jawa Timur', 'asdasd', '2019-12-16', '<p>asdasd</p>\r\n', 'asdasd', 'asdasd.png', '2019-12-16 16:44:11', 1),
(5, 'asdasdas', 'Pengajuan Pendidikan Pada Instansi Tertentu Di Kabupaten Jawa Timur', '2019-12-16', '<p>asdasdasd</p>\r\n', 'asdaqw', 'pengajuan_pendidikan_pada_instansi_tertentu_di_kabupaten_jawa_timur.png', '2019-12-16 16:50:32', 1);

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
(1, 'Semester I 2019', NULL, '1');

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
(1, 'dr. Andi Mulyanto, Sp. A', 'Poli Anak', 'Senin & Kamis', 'jadwal-1.png', 1),
(2, 'dr. Frans Johannis Huwae, \nMs. Med, Sp. A', 'Poli Anak', 'Senin & Rabu', 'jadwal-2.png', 1),
(3, 'dr. Teguh Wahyudi, Sp. A', 'Poli Anak', 'Jumat', 'jadwal-3.png', 1),
(4, 'dr. Didik Wahyudi Purwohartono, Sp. B', 'Poli Bedah Umum', 'Senin - Jumat', 'jadwal-1.png', 1),
(5, 'dr. Bambang Rishardana, Sp. B', 'Poli Bedah Umum', 'Senin - Jumat', 'jadwal-2.png', 1),
(6, 'dr. Revita Widya Prasanti, Sp. BP-RE', 'Poli Bedah Plastik', 'Rabu & Jumat', 'jadwal-3.png', 1),
(7, 'dr. Freddy, Sp. B, KBD', 'Poli Bedah Digestif', 'Rabu & Jumat', 'jadwal-1.png', 1),
(8, 'dr. Septina Rahayu, Sp. U', 'Poli Bedah Urologi', 'Selasa & Kamis', 'jadwal-2.png', 1),
(9, 'dr. Bambang Widiwanto, Sp. OT', 'Poli Orthopedi', 'Senin - Rabu', 'jadwal-3.png', 1),
(10, 'dr. Andrianto Wisnu Nugrohom, Sp. OT', 'Poli Orthopedi', 'Kamis & Jumat', 'jadwal-1.png', 1),
(11, 'dr. Linda Veronica, Sp. KK', 'Poli Kulit & Kelamin', 'Senin - Jumat', 'jadwal-2.png', 1),
(12, 'dr. Julia Widiati, Sp. M', 'Poli Mata', 'Selasa & Kamis', 'jadwal-3.png', 1),
(13, 'dr. Lina Puspita Hutasoit, Sp. M', 'Poli Kulit & Kelamin', 'Senin - Jumat', 'jadwal-1.png', 1),
(14, 'dr. Lucia Puji Astuti, Sp. S', 'Poli Syaraf', 'Senin - Jumat', 'jadwal-2.png', 1),
(15, 'dr. Fathia Annis Pramesti, Sp. S', 'Poli Syaraf', 'Senin - Jumat', 'jadwal-3.png', 1),
(16, 'dr. Faridatul Jannah, Sp. THT-KL', 'Poli THT', 'Senin - Jumat', 'jadwal-1.png', 1),
(17, 'dr. Wara Pertiwi, Sp. P', 'Poli Paru', 'Senin - Jumat', 'jadwal-2.png', 1),
(18, 'drg. Slamet Sugiharto', 'Poli Gigi', 'Senin - Jumat', 'jadwal-3.png', 1),
(19, 'drg. Swarantika Aulia Rarasati', 'Poli Gigi', 'Senin - Jumat', 'jadwal-1.png', 1),
(20, 'drg. Priya Esti Utami, Sp. Ort', 'Poli Gigi Ortodonti', 'Senin - Jumat', 'jadwal-2.png', 1),
(21, 'drg. Anugra Eka Putra, Sp. Ort', 'Poli Gigi Ortodonti', 'Senin - Jumat', 'jadwal-3.png', 1),
(22, 'dr. Nugroho Setyawan, Sp. BM', 'Poli Bedah Mulut', 'Senin - Jumat', 'jadwal-1.png', 1),
(23, 'dr. Astri Ulia Rahmawati, Sp. PD', 'Poli Penyakit Dalam', 'Senin - Jumat', 'jadwal-2.png', 1),
(24, 'dr. Dyah Retno Wulandari, Sp. PD', 'Poli Penyakit Dalam', 'Senin - Jumat', 'jadwal-3.png', 1),
(25, 'dr. Ferdinandus Stevanus Kakiay, Sp.PD-FINASIM', 'Poli Penyakit Dalam', 'Senin - Jumat', 'jadwal-1.png', 1),
(26, 'dr. Bernandus Anggaru, Sp. PD', 'Poli Penyakit Dalam', 'Senin - Jumat', 'jadwal-2.png', 1),
(27, 'dr. Achmad Zainudi Arif, Sp. PD', 'Poli Penyakit Dalam', 'Senin - Jumat', 'jadwal-3.png', 1),
(28, 'dr. Anton Wuri Handayanto, Sp. An', 'Poli Anestesi', 'Senin - Jumat', 'jadwal-1.png', 1),
(29, 'dr. Ramacandra Rakhmatullah, Sp. An', 'Poli Anestesi', 'Senin - Jumat', 'jadwal-2.png', 1),
(30, 'dr. Hendry Christiono, Sp. An', 'Poli Anestesi', 'Senin - Jumat', 'jadwal-3.png', 1),
(31, 'dr. Nurdiana Adwi Nugrahanim, Sp. KFR', 'Poli Rehab Medik & Fisioterapi', 'Senin - Jumat', 'jadwal-1.png', 1),
(32, 'dr. Indra Wahyu Saputra, Sp. JP', 'Poli Jantung & Pembuluh Darah', 'Senin - Jumat', 'jadwal-2.png', 1),
(33, 'dr. Ikhwan Handirosiyanto, Sp. JP', 'Poli Jantung & Pembuluh Darah', 'Senin - Jumat', 'jadwal-3.png', 1),
(34, 'dr. Kartika Siwi Proborretno, Sp. JP', 'Poli Jantung & Pembuluh Darah', 'Senin - Jumat', 'jadwal-1.png', 1),
(35, 'dr. Achmad Zainudi Arif, Sp. PD', 'Poli VCT & Geriatri', 'Senin - Jumat', 'jadwal-2.png', 1),
(36, 'dr. Yunita Puji Lestari, MMR', 'Poli VCT & Geriatri', 'Senin - Jumat', 'jadwal-2.png', 1),
(37, 'dr. Yunita Puji Lestari, MMR', 'Poli VCT & Geriatri', 'Senin - Jumat', 'jadwal-1.png', 1),
(38, 'dr. Astri Ulia Rahmawati, Sp. PD', 'Poli VCT & Geriatri', 'Senin - Jumat', 'jadwal-1.png', 1),
(39, 'dr. Heru Priyo Husodo, Sp. R', 'Radiologi', 'Senin - Jumat', 'jadwal-2.png', 1),
(40, 'dr. Evelyn Christina Hidayat, Sp. Rad', 'Radiologi', 'Senin - Jumat', 'jadwal-2.png', 1),
(41, 'dr. Evelyn Christina Hidayat, Sp. Rad', 'Radiologi', 'Senin - Jumat', 'jadwal-2.png', 1),
(42, 'dr. Kemala Hayati, Sp. PK', 'Laboratorium', 'Senin - Jumat', 'jadwal-1.png', 1),
(43, 'dr. Arif Satria Hardika, Sp. A', 'Lab. Patologi Anatomi', 'Senin - Jumat', 'jadwal-2.png', 1),
(44, 'dr. Putra Agung Dewata, Sp. EM', 'Emergency Medicine', 'Senin - Jumat', 'jadwal-3.png', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_pelayanan`
--

INSERT INTO `t_pelayanan` (`id`, `judul`, `sub_judul`, `waktu_pelayanan`, `keterangan`, `status`) VALUES
(1, 'LAYANAN UNGGULAN', 'HEMODIALISA', '<p>Setiap Hari Jam :</p>\r\n\r\n<p>Senin - Kamis 08.00 - 14.00</p>\r\n', '<p>Hemodialisis merupakan salah satu jenis terapi pasien gagal ginjal. Hemodialisis digunakan untuk &lsquo;menggantikan&rsquo; sebagian fungsi ginjal. Walau tidak sesempurna fungsi asli ginjal, hemodialisis dapat membantu menormalkan kembali keseimbangan cairan, membuang sisa metabolisme tubuh, menyeimbangkan asam-basa-elekterolit dalam tubuh, dan membantu mengendalikan tekanan darah. Hemodialisis bukanlah sebuah vonis yang menakutkan. Bahkan selama melakukan proses hemodialisis aktivitas pasien masih bisa dilakukan dengan normal.</p>\r\n', 1),
(2, 'LAYANAN UNGGULAN', 'PELAYANAN PARU', 'Setiap Hari Jam : <br>', 'Adapun layanan paru unggulan kami yaitu, Ruang poli TB, Ruang Rawat Inap Paru Menular, Pemeriksaan BTA,\nPemeriksaan FAAL kapasitas paru paru menerima oksigen, Pemeriksaan FOB (Fiber Optic Bronchospy) dicurigai adanya\ntumor di saluran pernafasan atau menentukan kelas tumornya', 1),
(4, 'LAYANAN UNGGULAN', 'REHABILITASI MEDIK & FISIOTERAPI', '<p>Setiap Hari Jam :</p>\r\n\r\n<ul>\r\n	<li>Senin</li>\r\n	<li>Rabu</li>\r\n	<li>Jumat</li>\r\n</ul>\r\n', '<p>Pelayanan terapi guna mengembalikan fungsi tubuh bagi pasien yang telah menjalani pengobatan atau operasi akibat cedera parah, infeksi, stroke, maupun tumor</p>\r\n', 1),
(5, 'LAYANAN UNGGULAN', 'CT SCAN', 'Setiap Hari Jam : <br>\r\n                        05.30 - 11.00 WIB <br>\r\n                        11.30 - 16.00 WIB <br>\r\n                        16.30 - 22.00 WIB', 'Computerized Tomography Scan (128 slices)', 1),
(6, 'INSTALASI GAWAT DARURAT', NULL, 'Setiap hari 24 JAM', 'Instalasi Gawat Darurat (IGD) RSU Karsa Husada Batu memberikan Pelayanan Kegawatdaruratan dengan \nstandar tinggi bagi semua pasien. Pelayanan ini didukung oleh sumber daya manusia yang handal \ndan memiliki kompetensi penanganan pasien gawat darurat dan tersertifikasi.\r\r\nInstalasi Gawat Darurat (IGD) RSU Karsa Husada Batu memberikan Pelayanan Kegawatdaruratan dengan \nstandar tinggi bagi semua pasien. Pelayanan ini didukung oleh sumber daya manusia yang handal \ndan memiliki kompetensi penanganan pasien gawat darurat dan tersertifikasi.\r\r\n', 1),
(7, 'INSTALASI RAWAT JALAN', NULL, 'Setiap Hari Jam : <br>', 'Instalasi Gawat Darurat (IGD) RSU Karsa Husada Batu memberikan Pelayanan Kegawatdaruratan dengan \nstandar tinggi bagi semua pasien. Pelayanan ini didukung oleh sumber daya manusia yang handal \ndan memiliki kompetensi penanganan pasien gawat darurat dan tersertifikasi.\r\r\n', 1),
(8, 'INSTALASI RAWAT INAP', NULL, 'Setiap Hari Jam : <br>', 'Instalasi Gawat Darurat (IGD) RSU Karsa Husada Batu memberikan Pelayanan Kegawatdaruratan dengan \nstandar tinggi bagi semua pasien. Pelayanan ini didukung oleh sumber daya manusia yang handal \ndan memiliki kompetensi penanganan pasien gawat darurat dan tersertifikasi.\r\r\n', 1),
(9, 'INSTALASI PENUNJANG MEDIS', 'REHAB MEDIK', 'Setiap Hari Jam : <br>', 'Instalasi Gawat Darurat (IGD) RSU Karsa Husada Batu memberikan Pelayanan Kegawatdaruratan dengan \nstandar tinggi bagi semua pasien. Pelayanan ini didukung oleh sumber daya manusia yang handal \ndan memiliki kompetensi penanganan pasien gawat darurat dan tersertifikasi.\r\r\n', 1),
(10, 'INSTALASI PENUNJANG MEDIS', 'GIZI DAN BOGA', 'Setiap Hari Jam : <br>', 'Instalasi Gawat Darurat (IGD) RSU Karsa Husada Batu memberikan Pelayanan Kegawatdaruratan dengan \nstandar tinggi bagi semua pasien. Pelayanan ini didukung oleh sumber daya manusia yang handal \ndan memiliki kompetensi penanganan pasien gawat darurat dan tersertifikasi.\r\r\n', 1),
(11, 'INSTALASI PENUNJANG MEDIS', 'LABORATORIUM', 'Setiap Hari Jam : <br>', 'Instalasi Gawat Darurat (IGD) RSU Karsa Husada Batu memberikan Pelayanan Kegawatdaruratan dengan \nstandar tinggi bagi semua pasien. Pelayanan ini didukung oleh sumber daya manusia yang handal \ndan memiliki kompetensi penanganan pasien gawat darurat dan tersertifikasi.\r\r\n', 1),
(12, 'INSTALASI PENUNJANG MEDIS', 'FARMASI', 'Setiap Hari Jam : <br>', 'Instalasi Gawat Darurat (IGD) RSU Karsa Husada Batu memberikan Pelayanan Kegawatdaruratan dengan \nstandar tinggi bagi semua pasien. Pelayanan ini didukung oleh sumber daya manusia yang handal \ndan memiliki kompetensi penanganan pasien gawat darurat dan tersertifikasi.\r\r\n', 1),
(13, 'INSTALASI PENUNJANG MEDIS', 'RADIOLOGI', 'Setiap Hari Jam : <br>', 'Instalasi Gawat Darurat (IGD) RSU Karsa Husada Batu memberikan Pelayanan Kegawatdaruratan dengan \nstandar tinggi bagi semua pasien. Pelayanan ini didukung oleh sumber daya manusia yang handal \ndan memiliki kompetensi penanganan pasien gawat darurat dan tersertifikasi.\r\r\n', 1),
(14, 'INSTALASI PENUNJANG MEDIS', 'PATOLOGI ANATOMI', 'Setiap Hari Jam : <br>', 'Instalasi Gawat Darurat (IGD) RSU Karsa Husada Batu memberikan Pelayanan Kegawatdaruratan dengan \nstandar tinggi bagi semua pasien. Pelayanan ini didukung oleh sumber daya manusia yang handal \ndan memiliki kompetensi penanganan pasien gawat darurat dan tersertifikasi.\r\r\n', 1),
(15, 'INSTALASI PENUNJANG MEDIS', 'AMBULANS', 'Setiap Hari Jam : <br>', 'Instalasi Gawat Darurat (IGD) RSU Karsa Husada Batu memberikan Pelayanan Kegawatdaruratan dengan \nstandar tinggi bagi semua pasien. Pelayanan ini didukung oleh sumber daya manusia yang handal \ndan memiliki kompetensi penanganan pasien gawat darurat dan tersertifikasi.\r\r\n', 1),
(16, 'INSTALASI PENUNJANG MEDIS', 'INSTALASI BEDAH', 'Setiap Hari Jam : <br>', 'Instalasi Gawat Darurat (IGD) RSU Karsa Husada Batu memberikan Pelayanan Kegawatdaruratan dengan \nstandar tinggi bagi semua pasien. Pelayanan ini didukung oleh sumber daya manusia yang handal \ndan memiliki kompetensi penanganan pasien gawat darurat dan tersertifikasi.\r\r\n', 1),
(17, 'INSTALASI PENUNJANG NON MEDIS', 'SANITASI', 'Setiap Hari Jam : <br>', 'Instalasi Gawat Darurat (IGD) RSU Karsa Husada Batu memberikan Pelayanan Kegawatdaruratan dengan \nstandar tinggi bagi semua pasien. Pelayanan ini didukung oleh sumber daya manusia yang handal \ndan memiliki kompetensi penanganan pasien gawat darurat dan tersertifikasi.\r\r\n', 1),
(18, 'INSTALASI PENUNJANG NON MEDIS', 'SARANA DAN PRASARANA', 'Setiap Hari Jam : <br>', 'Instalasi Gawat Darurat (IGD) RSU Karsa Husada Batu memberikan Pelayanan Kegawatdaruratan dengan \nstandar tinggi bagi semua pasien. Pelayanan ini didukung oleh sumber daya manusia yang handal \ndan memiliki kompetensi penanganan pasien gawat darurat dan tersertifikasi.\r\r\n', 1),
(19, 'INSTALASI PENUNJANG NON MEDIS', 'ELEKTROMEDIS', 'Setiap Hari Jam : <br>', 'Instalasi Gawat Darurat (IGD) RSU Karsa Husada Batu memberikan Pelayanan Kegawatdaruratan dengan \nstandar tinggi bagi semua pasien. Pelayanan ini didukung oleh sumber daya manusia yang handal \ndan memiliki kompetensi penanganan pasien gawat darurat dan tersertifikasi.\r\r\n', 1),
(20, 'INSTALASI PENUNJANG NON MEDIS', 'TEKNOLOGI INFORMASI', 'Setiap Hari Jam : <br>', 'Instalasi Gawat Darurat (IGD) RSU Karsa Husada Batu memberikan Pelayanan Kegawatdaruratan dengan \nstandar tinggi bagi semua pasien. Pelayanan ini didukung oleh sumber daya manusia yang handal \ndan memiliki kompetensi penanganan pasien gawat darurat dan tersertifikasi.\r\r\n', 1),
(21, 'INSTALASI PENUNJANG NON MEDIS', 'LAUNDRY DAN CSSD', 'Setiap Hari Jam : <br>', 'Instalasi Gawat Darurat (IGD) RSU Karsa Husada Batu memberikan Pelayanan Kegawatdaruratan dengan \nstandar tinggi bagi semua pasien. Pelayanan ini didukung oleh sumber daya manusia yang handal \ndan memiliki kompetensi penanganan pasien gawat darurat dan tersertifikasi.\r\r\n', 1),
(22, NULL, 'sub_title', '<p>waktu</p>\r\n', '<p>keterangan</p>\r\n', 1),
(23, NULL, 'sub_title', '<p>waktu</p>\r\n', '<p>keterangan</p>\r\n', 1),
(24, NULL, 'sub_title', '<p>waktu</p>\r\n', '<p>keterangan</p>\r\n', 1),
(25, NULL, 'sub_title', '<p>waktu</p>\r\n', '<p>keterangan</p>\r\n', 1),
(26, 'LAYANAN UNGGULAN', 'sub_title2222', '<p>waktu2222</p>\r\n', '<p>keterangan2222</p>\r\n', 1),
(31, 'PELAYANAN PENUNJANG', 'sub_title', '<p>j</p>\r\n', '<p>.</p>\r\n', 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_perpustakaan`
--

INSERT INTO `t_perpustakaan` (`id`, `nama_file`, `kategori`, `status`, `tanggal_upload`, `file`) VALUES
(1, 'kesehatan 1', 'umum', 1, '2019-11-21', NULL),
(2, 'kesehatan 2', 'umum', 1, '2019-11-21', NULL),
(3, 'Manfaat Diet', 'Gizi', 1, '2011-11-13', NULL),
(4, 'Menjaga Kesehatan Tubuh Denagn Mengkonsumsi Buah Buahan2', 'Gizi', 1, '2019-11-05', NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_ppid`
--

INSERT INTO `t_ppid` (`id`, `judul`, `deskripsi`, `gambar`, `status`) VALUES
(1, 'PROFIL', 'asdasdasd', NULL, '1'),
(2, 'INFO PUBLIK', 'asdasdasdasd', NULL, '1'),
(3, 'LAYANAN INFORMASI', 'asdas;lkl;k;lk;lkljghjghj', NULL, '1'),
(4, 'GALERI PPID', 'dsfkdsfdsf', '', '1'),
(5, 'tes', '<p>tes</p>\r\n', NULL, '1');

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
(1, 'Laporan Kinerja Instansi ', 'kinerja_instansi.pdf', '1'),
(2, 'Laporan Kinerja ', 'kinerja.pdf', '1'),
(3, 'Laporan Kinerja Instansi Pemerintah Pemerintah Kab ', 'kinerja_instansi_kab.pdf', '1');

-- --------------------------------------------------------

--
-- Table structure for table `t_sdm`
--

CREATE TABLE IF NOT EXISTS `t_sdm` (
`id` int(100) NOT NULL,
  `jenis` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  `status` varchar(2) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_sdm`
--

INSERT INTO `t_sdm` (`id`, `jenis`, `jumlah`, `status`) VALUES
(1, 'Struktural', '4', '1'),
(2, 'Dokter Umum', '20', '1'),
(3, 'Dokter Gigi', '2', '1'),
(4, 'Dokter Spesialis', '45', '1'),
(5, 'Perawat', '169', '1'),
(6, 'Bidan', '16', '1'),
(7, 'Tenaga Kesehatan Lain', '111', '1'),
(8, 'Non Medis', '157', '1');

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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_sejarah`
--

INSERT INTO `t_sejarah` (`id`, `tahun`, `deskripsi`, `gambar`, `status`) VALUES
(1, '1912', 'Rumah Sakit Paru Batu didirikan pada tahun 1912 pada masa penjajahan Belanda dengan pelayanan rawat jalan untuk penyakit paru yang berlokasi di kota Batu.', NULL, '1'),
(2, '1999o', '<p>asdsadasd</p>\r\n', NULL, '1');

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
(2, 'Instalasi Gawat Darurat', 'Pemerikasaan Dokter', '10.000', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Instalasi Gawat Darurat', 'Jasa Konsultasi', '100.000', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Instalasi Gawat Darurat', 'Konsultasi Per Telepon', '50.000', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Instalasi Gawat Darurat', 'Konsultasi Dokter Spesialis Konsultan', '150.000', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Rawat Jalan', 'Registrasi Rawat Jalan', NULL, '10.000', '10.000', NULL, NULL, NULL, NULL),
(7, 'Rawat Jalan', 'Pemeriksaan Dokter Spesialis', NULL, '10.000', '10.000', NULL, NULL, NULL, NULL),
(8, 'Rawat Jalan', 'Pemeriksaan Dokter Umum', NULL, '100.000', '10.000', NULL, NULL, NULL, NULL),
(9, 'Rawat Jalan', 'Pelayanan Rawat Jalan', NULL, '50.000', '10.000', NULL, NULL, NULL, NULL),
(10, 'Rawat Jalan', 'Konsultasi Gizi', NULL, '150.000', '150.000', NULL, NULL, NULL, NULL),
(11, 'Rawat Jalan', 'Konsultasi Antar Poliklinik', NULL, '150.000', '10.000', NULL, NULL, NULL, NULL),
(12, 'Rawat Inap', 'Registrasi Rawat Jalan', NULL, NULL, NULL, '10.000', '10.000', '10.000', '10.000'),
(13, 'Rawat Inap', 'Pemeriksaan Dokter Spesialis', NULL, NULL, NULL, '10.000', '10.000', '10.000', '10.000'),
(14, 'Rawat Inap', 'Pemeriksaan Dokter Umum', NULL, NULL, NULL, '10.000', '10.000', '10.000', '10.000'),
(15, 'Rawat Inap', 'Pelayanan Rawat Jalan', NULL, NULL, NULL, '10.000', '10.000', '50.000', '10.000'),
(16, 'Instalasi Gawat Darurat', 'asdasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Instalasi Gawat Darurat', 'asdasd', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Instalasi Gawat Darurat', 'aadasdasd', '20000', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pelayanan`
--
ALTER TABLE `detail_pelayanan`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pelayanan`
--
ALTER TABLE `detail_pelayanan`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
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
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `t_berita`
--
ALTER TABLE `t_berita`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `t_perpustakaan`
--
ALTER TABLE `t_perpustakaan`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `t_ppid`
--
ALTER TABLE `t_ppid`
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
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
MODIFY `id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
