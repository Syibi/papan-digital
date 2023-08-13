-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 13, 2023 at 11:09 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tikusan_papan_digital`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_pekerjaan`
--

CREATE TABLE `data_pekerjaan` (
  `id` bigint UNSIGNED NOT NULL,
  `pns` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tni_polri` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `swasta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dagang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `petani` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tukang` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `buruh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pensiunan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nelayan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `peternak` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jasa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `seni` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lainnya` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tidak_bekerja` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_pekerjaan`
--

INSERT INTO `data_pekerjaan` (`id`, `pns`, `tni_polri`, `swasta`, `dagang`, `petani`, `tukang`, `buruh`, `pensiunan`, `nelayan`, `peternak`, `jasa`, `seni`, `lainnya`, `tidak_bekerja`, `created_at`, `updated_at`) VALUES
(1, '123', '2', '2323', '22', '4232', '34', '12', '55', '2121', '5655', '332', '33', '12', '112454', '2023-03-29 02:57:03', '2023-03-29 03:03:22');

-- --------------------------------------------------------

--
-- Table structure for table `data_pendidikan`
--

CREATE TABLE `data_pendidikan` (
  `id` bigint UNSIGNED NOT NULL,
  `tk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `smp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sma` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `diploma` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sarjana` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pascasarjana` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pondok` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keagamaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slb` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kursus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tidak_sekolah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_pendidikan`
--

INSERT INTO `data_pendidikan` (`id`, `tk`, `sd`, `smp`, `sma`, `diploma`, `sarjana`, `pascasarjana`, `pondok`, `keagamaan`, `slb`, `kursus`, `tidak_sekolah`, `created_at`, `updated_at`) VALUES
(1, '12', '39', '23', '34', '44', '12', '2', '190', '2', '14', '56', '23', '2023-03-02 04:41:33', '2023-03-22 05:38:36');

-- --------------------------------------------------------

--
-- Table structure for table `data_penduduk`
--

CREATE TABLE `data_penduduk` (
  `id` bigint UNSIGNED NOT NULL,
  `jml_kk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `miskin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `laki-laki` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `perempuan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `muda` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dewasa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tua` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_penduduk`
--

INSERT INTO `data_penduduk` (`id`, `jml_kk`, `miskin`, `laki-laki`, `perempuan`, `muda`, `dewasa`, `tua`, `created_at`, `updated_at`) VALUES
(1, '499', '-', '856', '879', '247', '1385', '104', '2023-03-20 22:21:08', '2023-03-30 07:41:24');

-- --------------------------------------------------------

--
-- Table structure for table `data_pkk`
--

CREATE TABLE `data_pkk` (
  `id` bigint UNSIGNED NOT NULL,
  `pkk_dusun` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pkk_rw` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pkk_rt` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dasa_wisma` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_kk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_jiwa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tp_pkk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `umum` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `khusus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_pkk`
--

INSERT INTO `data_pkk` (`id`, `pkk_dusun`, `pkk_rw`, `pkk_rt`, `dasa_wisma`, `jml_kk`, `jml_jiwa`, `tp_pkk`, `umum`, `khusus`, `created_at`, `updated_at`) VALUES
(1, '2', '3', '10', '21', '499', '1775', '70', '70', '45', '2023-04-04 07:50:32', '2023-04-04 07:50:32'),
(2, '2', '3', '10', '21', '499', '1775', '70', '70', '45', '2023-04-04 07:59:12', '2023-04-04 07:59:12');

-- --------------------------------------------------------

--
-- Table structure for table `data_running_text`
--

CREATE TABLE `data_running_text` (
  `id` bigint UNSIGNED NOT NULL,
  `teks` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_running_text`
--

INSERT INTO `data_running_text` (`id`, `teks`, `created_at`, `updated_at`) VALUES
(1, 'test running text', '2023-05-03 02:42:28', '2023-05-03 02:42:28'),
(2, 'test pengumuman untuk running text, hanya teks ya', '2023-05-03 02:49:49', '2023-05-03 02:49:49');

-- --------------------------------------------------------

--
-- Table structure for table `data_sarpras`
--

CREATE TABLE `data_sarpras` (
  `id` bigint UNSIGNED NOT NULL,
  `kantor_desa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `puskesmas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `poskesdes` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `posyandu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `perpus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gedung_paud` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gedung_tk` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gedung_sd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gedung_smp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gedung_sma` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `masjid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `musholla` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gereja` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pura` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `vihara` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kelenteng` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `olahraga` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kesenian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `balai` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumur_desa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pasar_desa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lainnya` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_sarpras`
--

INSERT INTO `data_sarpras` (`id`, `kantor_desa`, `puskesmas`, `poskesdes`, `posyandu`, `perpus`, `gedung_paud`, `gedung_tk`, `gedung_sd`, `gedung_smp`, `gedung_sma`, `masjid`, `musholla`, `gereja`, `pura`, `vihara`, `kelenteng`, `olahraga`, `kesenian`, `balai`, `sumur_desa`, `pasar_desa`, `lainnya`, `created_at`, `updated_at`) VALUES
(1, '1', '1', '0', '1', '1', '3', '2', '1', '1', '1', '3', '12', '0', '0', '0', '0', '2', '0', '3', '4', '3', '0', '2023-04-01 02:26:21', '2023-04-01 02:48:13');

-- --------------------------------------------------------

--
-- Table structure for table `data_umum`
--

CREATE TABLE `data_umum` (
  `id` bigint UNSIGNED NOT NULL,
  `topologi_desa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tingkat_perkembangan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `luas_wilayah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batas_wilayah_utara` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batas_wilayah_selatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batas_wilayah_barat` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batas_wilayah_timur` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `orbitrasi_kecamatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `orbitrasi_kabupaten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `orbitrasi_kota` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `orbitrasi_provinsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_umum`
--

INSERT INTO `data_umum` (`id`, `topologi_desa`, `tingkat_perkembangan`, `luas_wilayah`, `batas_wilayah_utara`, `batas_wilayah_selatan`, `batas_wilayah_barat`, `batas_wilayah_timur`, `orbitrasi_kecamatan`, `orbitrasi_kabupaten`, `orbitrasi_kota`, `orbitrasi_provinsi`, `created_at`, `updated_at`) VALUES
(1, 'ini topologi desa', 'test_tingkat_perkembangan', '1234', 'desa utara', 'desa selatan', 'desa barat', 'desa timur', 'kecamatan', 'kabupaten', 'kota', 'provinsi', '2023-02-15 21:12:00', '2023-03-22 05:37:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `file_musik`
--

CREATE TABLE `file_musik` (
  `id` bigint UNSIGNED NOT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `file_musik`
--

INSERT INTO `file_musik` (`id`, `file`, `created_at`, `updated_at`) VALUES
(6, 'Ikson - Blue Sky.mp3', '2023-04-06 03:49:06', '2023-04-06 03:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_desa`
--

CREATE TABLE `galeri_desa` (
  `id` bigint UNSIGNED NOT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `caption` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` tinyint NOT NULL DEFAULT '0' COMMENT '1=video, 0=gambar',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galeri_desa`
--

INSERT INTO `galeri_desa` (`id`, `file`, `caption`, `tipe`, `created_at`, `updated_at`) VALUES
(1, 'sddefault.jpg', 'test caption 1', 0, '2023-03-07 08:34:01', '2023-03-07 08:34:01'),
(3, 'WhatsApp Image 2023-02-22 at 11.29.03.jpeg', 'test gambar 2', 0, '2023-03-08 02:25:19', '2023-03-08 02:25:19'),
(4, 'slide1.mp4', 'Test video 2', 1, '2023-03-08 02:29:10', '2023-03-08 02:29:10'),
(7, 'slide2.mp4', 'Test Video 2', 1, '2023-03-09 08:26:28', '2023-03-09 08:26:28'),
(8, 'WhatsApp Image 2023-02-22 at 11.26.42 (1).jpeg', 'test gambar 2', 0, '2023-03-09 08:27:23', '2023-03-09 08:27:23'),
(9, 'WhatsApp Image 2023-02-22 at 11.29.40.jpeg', 'Test Video 1', 0, '2023-03-09 08:34:37', '2023-03-09 08:34:37'),
(10, 'WhatsApp Image 2023-02-22 at 11.26.42.jpeg', 'test gambar 2', 0, '2023-03-09 08:35:38', '2023-03-09 08:35:38'),
(11, 'WhatsApp Image 2023-02-24 at 20.52.25.jpeg', 'test gambar 2', 0, '2023-03-09 08:36:23', '2023-03-09 08:36:23'),
(24, 'WhatsApp Image 2023-03-06 at 11.07.16.jpeg', 'dokumentasi kegiatan', 0, '2023-03-22 07:59:46', '2023-03-22 07:59:46'),
(25, 'WhatsApp Image 2023-03-22 at 15.00.27.jpeg', 'dokumentasi kegiatan 2', 0, '2023-03-22 08:02:27', '2023-03-22 08:02:27');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_proker_desa`
--

CREATE TABLE `kategori_proker_desa` (
  `id` bigint UNSIGNED NOT NULL,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_proker_desa`
--

INSERT INTO `kategori_proker_desa` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(6, 'Bidang Lingkungan', '2023-03-22 10:20:42', '2023-03-22 10:20:42'),
(7, 'Bidang Kesehatan', '2023-03-22 10:36:10', '2023-03-22 10:36:10'),
(8, 'Bidang Pendidikan', '2023-08-13 11:02:00', '2023-08-13 11:02:00');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_proker_pkk`
--

CREATE TABLE `kategori_proker_pkk` (
  `id` bigint UNSIGNED NOT NULL,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_proker_pkk`
--

INSERT INTO `kategori_proker_pkk` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'Bidang Umum', '2023-03-18 01:36:39', '2023-03-18 01:36:39'),
(4, 'Sekretaris', '2023-08-13 10:36:24', '2023-08-13 10:36:24'),
(5, 'Bendahara', '2023-08-13 10:36:34', '2023-08-13 10:36:34'),
(6, 'POKJA I', '2023-08-13 10:37:33', '2023-08-13 10:37:33'),
(7, 'POKJA II', '2023-08-13 10:37:41', '2023-08-13 10:37:41'),
(8, 'POKJA III', '2023-08-13 10:37:52', '2023-08-13 10:37:52'),
(9, 'POKJA IV', '2023-08-13 10:38:02', '2023-08-13 10:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(35, '2014_10_12_100000_create_password_resets_table', 1),
(36, '2019_08_19_000000_create_failed_jobs_table', 1),
(37, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(39, '2023_02_10_093904_create_profil_desa_table', 1),
(42, '2023_02_28_142957_data_pendidikan', 4),
(45, '2023_03_03_065601_create_nodes_table', 7),
(47, '2023_03_02_145543_struktur_desa', 8),
(49, '2023_03_06_134339_galeri_desa', 9),
(50, '2023_03_12_053816_kategori_proker_desa', 10),
(51, '2023_03_11_112252_proker_desa', 11),
(52, '2023_03_17_184556_struktur_pkk', 12),
(53, '2023_03_17_184932_kategori_proker_pkk', 13),
(54, '2023_03_17_185023_proker_pkk', 14),
(56, '2014_10_12_000000_create_users_table', 15),
(57, '2023_03_01_085059_data_penduduk', 16),
(58, '2023_03_27_144335_data_pekerjaan', 17),
(59, '2023_04_01_033913_data_sarpras', 18),
(60, '2023_04_04_105925_data_pkk', 19),
(61, '2023_04_06_094625_file_musik', 20),
(63, '2023_05_03_091135_data_running_text', 21),
(65, '2023_02_01_034543_create_slides_table', 22),
(66, '2023_06_19_133604_papan_data', 23);

-- --------------------------------------------------------

--
-- Table structure for table `papan_data`
--

CREATE TABLE `papan_data` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_papan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `papan_data`
--

INSERT INTO `papan_data` (`id`, `nama_papan`, `kategori`, `file`, `created_at`, `updated_at`) VALUES
(5, 'Lambang PKK', 'Sekretaris', 'lambangpkk.png', '2023-08-12 05:19:46', '2023-08-12 05:19:46'),
(6, '10 Program Pokok PKK', 'Sekretaris', '10program.png', '2023-08-12 05:32:43', '2023-08-12 05:51:21'),
(9, 'Bagian Mekanisme Gerakan PKK', 'Sekretaris', 'bagan-mekanisme.png', '2023-08-12 06:11:14', '2023-08-13 07:55:46'),
(10, 'Bagan Pembinaan', 'Sekretaris', 'bagan-pembinaan.png', '2023-08-12 08:22:04', '2023-08-13 07:58:13'),
(12, 'Pelaksanaan 10 Program Pokok', 'Sekretaris', 'pelaksanaan program.png', '2023-08-12 08:41:46', '2023-08-13 08:15:03'),
(13, 'Program Kerja 5 Tahun', 'Sekretaris', 'proker-5-tahun.png', '2023-08-12 09:03:09', '2023-08-13 08:02:14'),
(14, 'Program Kerja Tahunan', 'Sekretaris', 'proker-tahunan.png', '2023-08-12 09:04:30', '2023-08-13 08:05:52'),
(15, 'Data Umum PKK', 'Sekretaris', 'data-umum.png', '2023-08-12 09:05:06', '2023-08-13 08:08:22'),
(16, 'Data Perbandingan', 'Sekretaris', 'data -perbandingan.png', '2023-08-12 09:06:01', '2023-08-13 08:09:55'),
(17, 'Grafik Perbandingan', 'Sekretaris', 'grafik-kosong.png', '2023-08-12 09:06:45', '2023-08-13 08:14:43'),
(18, 'Sumber Dana PKK', 'Bendahara', 'sumber-dana.png', '2023-08-12 09:13:26', '2023-08-13 08:17:51'),
(19, 'Grafik Sumber Dana PKK', 'Bendahara', 'pemasukan dan.png', '2023-08-12 09:14:10', '2023-08-13 08:22:06'),
(20, 'Data Kegiatan POKJA 1', 'pokja1', 'data-kegiatan-pokja1.png', '2023-08-12 09:19:36', '2023-08-13 08:26:34'),
(22, 'Program Kerja 5 Tahun POKJA1', 'pokja1', 'program-5-tahun-pokja1.png', '2023-08-12 21:10:42', '2023-08-13 08:28:08'),
(23, 'Data Inovasi', 'Sekretaris', 'data-inovasi.png', '2023-08-13 07:05:40', '2023-08-13 08:13:51'),
(24, 'Grafik Penggunaan Dana', 'Bendahara', 'pengeluaran-dana.png', '2023-08-13 07:07:53', '2023-08-13 08:24:31'),
(25, 'Program Kerja 1 Tahun POKJA1', 'pokja1', 'program-taahunan-pokja1.png', '2023-08-13 07:09:24', '2023-08-13 08:29:56'),
(26, 'Data Perbandingan POKJA1', 'pokja1', 'data -perbandingan-pokja1.png', '2023-08-13 07:10:11', '2023-08-13 08:31:41'),
(27, 'Grafik Perbandingan POKJA 1', 'pokja1', 'grafik-perbandingan-proker1.png', '2023-08-13 07:10:50', '2023-08-13 08:34:55'),
(28, 'Data Kegiatan POKJA II', 'pokja2', 'data-kegiatan-pokja2.png', '2023-08-13 07:12:41', '2023-08-13 09:08:29'),
(29, 'Grafik Data Kegiatan POKJA II', 'pokja2', 'grafik-kegiatan-pokja2.png', '2023-08-13 07:13:13', '2023-08-13 09:10:13'),
(30, 'Proker 5 Tahun POKJA II', 'pokja2', 'program-5-tahun-pokja2.png', '2023-08-13 07:14:02', '2023-08-13 09:13:35'),
(31, 'Proker 1 Tahun POKJA II', 'pokja2', 'program-tahunan-pokja2.png', '2023-08-13 07:14:46', '2023-08-13 09:13:21'),
(32, 'Data Perkembangan BKB', 'pokja2', 'data-perkembangan-bkb.png', '2023-08-13 07:15:43', '2023-08-13 09:15:33'),
(33, 'Data Perbandingan BKB', 'pokja2', 'data-perbandingan-bkb.png', '2023-08-13 07:16:28', '2023-08-13 09:16:52'),
(34, 'Grafik Data BKB', 'pokja2', 'grafik-perbandingan-bkb.png', '2023-08-13 07:16:57', '2023-08-13 09:22:45'),
(35, 'Data Bidang Pendidikan', 'pokja2', 'data-bidang-pendidikan.png', '2023-08-13 07:19:04', '2023-08-13 09:23:57'),
(36, 'Perbandingan Data Pendidikan', 'pokja2', 'data-perbandingan-pendidikan.png', '2023-08-13 07:19:37', '2023-08-13 09:25:39'),
(37, 'Grafik Data Pendidikan', 'pokja2', 'grafik-perbandingan-pendidikan.png', '2023-08-13 07:20:26', '2023-08-13 09:28:38'),
(38, 'Data Perkembangan UP2K', 'pokja2', 'data-perkembangan-up2k.png', '2023-08-13 07:21:09', '2023-08-13 09:30:37'),
(39, 'Grafik Data UP2K', 'pokja2', 'grafik-kosong.png', '2023-08-13 07:23:09', '2023-08-13 09:32:01'),
(40, 'Struktur UP2K', 'pokja2', 'struktur-up2k.png', '2023-08-13 07:23:30', '2023-08-13 09:35:03'),
(41, 'Peta Data Perkembangan UP2K', 'pokja2', 'peta-tikusan.jpg', '2023-08-13 07:24:00', '2023-08-13 09:35:51'),
(42, 'Data Inovasi POKJA II', 'pokja2', 'data-inovasi-pokja2.png', '2023-08-13 07:24:24', '2023-08-13 09:37:01'),
(43, 'Data Kegiatan POKJA III', 'pokja3', 'data-kegiatan-pokja3.png', '2023-08-13 07:25:41', '2023-08-13 09:40:03'),
(44, 'Program Kerja 5 Tahun POKJA III', 'pokja3', 'program-5-tahun-pokja3.png', '2023-08-13 07:26:13', '2023-08-13 09:42:08'),
(45, 'Program Kegiatan 1 Tahun POKJA III', 'pokja3', 'program-kerja-tahunan-pokja3.png', '2023-08-13 07:26:46', '2023-08-13 10:04:36'),
(46, 'Data Perbandingan POKJA III', 'pokja3', 'data-perbandingan-pokja3.png', '2023-08-13 07:29:26', '2023-08-13 10:05:54'),
(47, 'Grafik Perbandingan POKJA III', 'pokja3', 'grafik-perbandingan-pokja3.png', '2023-08-13 07:29:58', '2023-08-13 10:07:43'),
(48, 'Data Kegiatan POKJA IV', 'pokja4', 'data-kegiatan-pokja4.png', '2023-08-13 07:35:28', '2023-08-13 10:16:54'),
(49, 'Program Kerja 5 Tahun POKJA IV', 'pokja4', 'program-5-taahunan-pokja4.png', '2023-08-13 07:49:02', '2023-08-13 10:18:30'),
(50, 'Program Kerja 1 Tahun POKJA IV', 'pokja4', 'program-tahunan-pokja4.png', '2023-08-13 07:50:22', '2023-08-13 10:20:25'),
(51, 'Data Kegiatan Posyandu', 'pokja4', 'kegiatan-posyandu.png', '2023-08-13 07:50:50', '2023-08-13 10:22:06'),
(52, 'Data Perbandingan POKJA IV', 'pokja4', 'data-perbandingan-pokja4.png', '2023-08-13 07:51:24', '2023-08-13 10:24:28'),
(53, 'Grafik Perbandingan POKJA IV', 'pokja4', 'grafik-perbandingan-pokja4.png', '2023-08-13 07:51:56', '2023-08-13 10:26:41');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profil_desa`
--

CREATE TABLE `profil_desa` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_desa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_pembentukan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dasar_hukum` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_wilayah` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pos` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kecamatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kabupaten` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `provinsi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profil_desa`
--

INSERT INTO `profil_desa` (`id`, `nama_desa`, `tahun_pembentukan`, `dasar_hukum`, `kode_wilayah`, `kode_pos`, `kecamatan`, `kabupaten`, `provinsi`, `created_at`, `updated_at`) VALUES
(1, 'Tikusan', '-', '-', '-', '62181', 'Kapas', 'Bojonegoro', 'Jawa Timur', '2023-02-28 02:58:13', '2023-03-22 05:07:46');

-- --------------------------------------------------------

--
-- Table structure for table `proker_desa`
--

CREATE TABLE `proker_desa` (
  `id` bigint UNSIGNED NOT NULL,
  `program` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kegiatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelaksanaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sasaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_dana` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumentasi` tinyint NOT NULL DEFAULT '0' COMMENT '1=dokumentasi, 0=non-dokumentasi',
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proker_desa`
--

INSERT INTO `proker_desa` (`id`, `program`, `kegiatan`, `kategori`, `pelaksanaan`, `sasaran`, `sumber_dana`, `dokumentasi`, `file`, `created_at`, `updated_at`) VALUES
(5, 'Gerakan Tanam Pohon', 'menanam pohon secara serentak', 'Bidang Lingkungan', 'Rabu, 22 Maret 2023', 'lingkungan sekitar', '-', 1, 'WhatsApp Image 2023-03-22 at 15.00.27.jpeg', '2023-03-22 10:35:45', '2023-03-22 10:35:45'),
(6, 'vaksinasi covid', 'melakukan vaksinasi level 3', 'Bidang Kesehatan', 'bulan juli', 'warga lansia', 'dana desa', 1, 'sedang_1637640696_WhatsApp Image 2021-11-20 at 11.40.17.jpeg', '2023-05-17 14:29:07', '2023-05-17 14:29:07'),
(7, 'Pelatihan Batik Eco Print', 'memberdayakan masyarakat untuk membuat sendiri', 'Bidang Pendidikan', 'bulan Juli', 'warga umum', 'Dana Desa + Swadaya', 1, 'pelatihan batik ecoprint.jpg', '2023-08-13 11:04:38', '2023-08-13 11:04:38');

-- --------------------------------------------------------

--
-- Table structure for table `proker_pkk`
--

CREATE TABLE `proker_pkk` (
  `id` bigint UNSIGNED NOT NULL,
  `program` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kegiatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelaksanaan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sasaran` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumber_dana` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `dokumentasi` tinyint NOT NULL DEFAULT '0' COMMENT '1=dokumentasi, 0=non-dokumentasi',
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `proker_pkk`
--

INSERT INTO `proker_pkk` (`id`, `program`, `kegiatan`, `kategori`, `pelaksanaan`, `sasaran`, `sumber_dana`, `dokumentasi`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Pertemuan Rutin PKK Desa', 'Mengadakan koordinasi dan pembinaan bagi PKK RW, RT, Dasa Wisma', 'Bidang Umum', 'Setiap Bulan', 'Pengurus, RT, RW, Dasa Wisma', 'Swadaya + Dana Desa', 1, 'pertemuan rutin.jpg', '2023-04-05 20:57:48', '2023-04-05 20:57:48'),
(2, 'Posyandu Balita', 'memeriksa kesehatan dan memberikan tambahan gizi untuk balita', 'POKJA IV', 'Tiap Awal Bulan', 'Bayi umur 1-5 tahun', 'Dana Desa', 1, 'posyandu.jpg', '2023-08-13 10:40:04', '2023-08-13 10:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` tinyint NOT NULL DEFAULT '0' COMMENT '1=video, 0=gambar, 2=tab',
  `durasi` int NOT NULL DEFAULT '5000',
  `status` tinyint NOT NULL DEFAULT '0' COMMENT '1=hidden, 0=visible',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `judul`, `deskripsi`, `file`, `tipe`, `durasi`, `status`, `created_at`, `updated_at`) VALUES
(9, 'Tab Profil Desa', 'profil desa', 'profil_desa', 2, 10000, 1, '2023-05-21 23:20:11', '2023-08-12 05:09:46'),
(10, 'Tab Bidang Umum', 'profil desa bidang umum', 'bidang_umum', 2, 10000, 0, '2023-05-21 23:27:07', '2023-08-12 06:13:35'),
(11, 'Tab Data Pendidikan', 'profil desa data pendidikan', 'data_pendidikan', 2, 10000, 0, '2023-05-21 23:28:32', '2023-08-12 06:13:30'),
(12, 'Tab Data Penduduk', 'profil desa data penduduk', 'data_penduduk', 2, 10000, 0, '2023-05-21 23:29:01', '2023-08-12 06:13:24'),
(13, 'Tab Data Pekerjaan', 'profil desa data pekerjaan', 'data_pekerjaan', 2, 10000, 0, '2023-05-21 23:30:40', '2023-08-12 06:13:18'),
(14, 'Tab Data SarPras', 'profil desa data sarpras', 'data_sarpras', 2, 10000, 0, '2023-05-21 23:31:35', '2023-08-12 06:13:12'),
(15, 'Tab Struktur Desa', '-', 'struktur_desa', 2, 20000, 0, '2023-05-25 06:57:24', '2023-06-24 03:57:23'),
(16, 'Tab Proker Desa', '-', 'proker_desa', 2, 50000, 0, '2023-05-25 07:10:50', '2023-06-24 03:57:35'),
(17, 'Tab Profil Pkk', '-', 'profil_pkk', 2, 10000, 0, '2023-05-26 20:36:32', '2023-06-24 03:57:44'),
(18, 'Tab Struktur Pkk', '-', 'struktur_pkk', 2, 100000, 0, '2023-05-26 20:37:00', '2023-06-24 03:57:52'),
(19, 'Tab Proker Pkk', '-', 'proker_pkk', 2, 50000, 0, '2023-05-27 19:11:59', '2023-06-24 03:57:59'),
(24, 'papan data sekretaris', 'papan data sekretaris', 'papan_data_sekretaris', 2, 5000000, 1, '2023-08-12 06:13:02', '2023-08-12 06:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `struktur_desa`
--

CREATE TABLE `struktur_desa` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `atasan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `struktur_desa`
--

INSERT INTO `struktur_desa` (`id`, `nama`, `jabatan`, `atasan`, `link`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Ir. EDY SUNARTO', 'Kepala Desa', '-', 'link kades', '1.png', '2023-03-04 09:09:32', '2023-03-22 08:55:36'),
(11, 'SETYO PRIBOWO', 'Sekretaris Desa', 'Kepala Desa', 'link sekdes', '2.png', '2023-03-22 09:00:19', '2023-03-22 09:21:57'),
(12, 'HARIYANTO', 'Kepala Dusun', 'Kepala Desa', 'link kasun', '3.png', '2023-03-22 09:02:17', '2023-03-22 09:22:45'),
(13, 'PARYONO', 'Kasi Pemerintahan', 'Kepala Desa', 'link kasi-pemerintahan', '4.png', '2023-03-22 09:21:01', '2023-03-22 09:21:01'),
(14, 'EKO EDY SUSANTO', 'Kasi Kesejahteraan', 'Kepala Desa', 'link kasi-kesejahteraan', '6.png', '2023-03-22 09:25:41', '2023-03-22 09:25:41'),
(15, 'IKSAN', 'Kasi Pelayanan', 'Kepala Desa', 'link kasi-pelayanan', '5.png', '2023-03-22 09:31:49', '2023-03-22 09:31:49'),
(16, 'YULI PUSPITA SARI', 'Kaur Umum dan Perencanan', 'Sekretaris Desa', 'link kaur umum', '8.png', '2023-03-22 09:36:56', '2023-03-22 09:36:56'),
(17, 'LINA DWI MAWARNI', 'Kaur Keuangan', 'Sekretaris Desa', 'link kaur keuangan', '7.png', '2023-03-22 09:38:57', '2023-06-20 23:49:20');

-- --------------------------------------------------------

--
-- Table structure for table `struktur_pkk`
--

CREATE TABLE `struktur_pkk` (
  `id` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `atasan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `struktur_pkk`
--

INSERT INTO `struktur_pkk` (`id`, `nama`, `jabatan`, `atasan`, `link`, `file`, `created_at`, `updated_at`) VALUES
(2, 'Ir. Edy Sunarto', 'Penyantun', '-', 'penyantun', 'user.png', '2023-04-05 20:26:53', '2023-05-26 09:35:50'),
(3, 'Endah Yudiana. R,S.Pd', 'Ketua', 'Penyantun', 'Ketua', 'user.png', '2023-04-05 20:29:29', '2023-04-05 20:29:29'),
(4, 'Liswati', 'Wakil Ketua', 'Ketua', 'wakil ketua', 'user.png', '2023-04-05 20:30:06', '2023-04-05 20:30:06'),
(5, 'Dra. Sri Purnamawati', 'Bendahara', 'Wakil Ketua', 'bendahara', 'user.png', '2023-04-05 20:31:01', '2023-04-05 20:31:01'),
(6, 'Deny Ratnawati', 'Wakil Bendahara', 'Bendahara', 'wakil bendahara', 'user.png', '2023-04-05 20:34:28', '2023-04-05 20:34:28'),
(7, 'Fina Aqidatul Ula', 'Sekretaris', 'Wakil Ketua', 'sekretaris', 'user.png', '2023-04-05 20:35:14', '2023-04-05 20:35:14'),
(8, 'Dra. Catur Setyorini', 'Wakil Sekretaris', 'Sekretaris', 'wakil sekretaris', 'user.png', '2023-04-05 20:36:03', '2023-04-05 20:36:03'),
(9, 'Yuliatun, S.Pd', 'Ketua POKJA I', 'Wakil Ketua', 'ketua pokja 1', 'user.png', '2023-04-05 20:37:26', '2023-04-05 20:37:26'),
(10, 'Dwi Ari Yuniastutik', 'Ketua POKJA II', 'Wakil Ketua', 'ketua pokja 2', 'user.png', '2023-04-05 20:38:34', '2023-04-05 20:38:34'),
(11, 'Heni Trisnawati', 'Ketua POKJA III', 'Wakil Ketua', 'ketua pokja 3', 'user.png', '2023-04-05 20:41:38', '2023-04-05 20:41:38'),
(12, 'Agus Ina', 'Ketua POKJA IV', 'Wakil Ketua', 'ketua pokja 4', 'user.png', '2023-04-05 20:43:19', '2023-04-05 20:43:19'),
(13, 'Erna. P', 'Wakil Ketua POKJA I', 'Ketua POKJA I', 'wakil ketua pokja 1', 'user.png', '2023-04-05 20:44:21', '2023-04-05 20:44:57'),
(14, 'Tasri', 'Sekretaris POKJA I', 'Ketua POKJA I', 'sekretaris pokja 1', 'user.png', '2023-04-05 20:50:10', '2023-04-05 20:50:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$RawytukmlRKymOx1CDuRMu.OyuM/MD/yP1Y5.rXMcAB29lP38hy0u', NULL, '2023-03-20 04:47:12', '2023-03-20 04:47:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_pekerjaan`
--
ALTER TABLE `data_pekerjaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pendidikan`
--
ALTER TABLE `data_pendidikan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_pkk`
--
ALTER TABLE `data_pkk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_running_text`
--
ALTER TABLE `data_running_text`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_sarpras`
--
ALTER TABLE `data_sarpras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_umum`
--
ALTER TABLE `data_umum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `file_musik`
--
ALTER TABLE `file_musik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri_desa`
--
ALTER TABLE `galeri_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_proker_desa`
--
ALTER TABLE `kategori_proker_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_proker_pkk`
--
ALTER TABLE `kategori_proker_pkk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `papan_data`
--
ALTER TABLE `papan_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profil_desa`
--
ALTER TABLE `profil_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proker_desa`
--
ALTER TABLE `proker_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proker_pkk`
--
ALTER TABLE `proker_pkk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur_desa`
--
ALTER TABLE `struktur_desa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `struktur_pkk`
--
ALTER TABLE `struktur_pkk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_pekerjaan`
--
ALTER TABLE `data_pekerjaan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_pendidikan`
--
ALTER TABLE `data_pendidikan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_penduduk`
--
ALTER TABLE `data_penduduk`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_pkk`
--
ALTER TABLE `data_pkk`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_running_text`
--
ALTER TABLE `data_running_text`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_sarpras`
--
ALTER TABLE `data_sarpras`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_umum`
--
ALTER TABLE `data_umum`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `file_musik`
--
ALTER TABLE `file_musik`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `galeri_desa`
--
ALTER TABLE `galeri_desa`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `kategori_proker_desa`
--
ALTER TABLE `kategori_proker_desa`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori_proker_pkk`
--
ALTER TABLE `kategori_proker_pkk`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `papan_data`
--
ALTER TABLE `papan_data`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profil_desa`
--
ALTER TABLE `profil_desa`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `proker_desa`
--
ALTER TABLE `proker_desa`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `proker_pkk`
--
ALTER TABLE `proker_pkk`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `struktur_desa`
--
ALTER TABLE `struktur_desa`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `struktur_pkk`
--
ALTER TABLE `struktur_pkk`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
