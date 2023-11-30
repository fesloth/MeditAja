-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 30, 2023 at 12:32 AM
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
-- Database: `pam`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `meditation_journals`
--

CREATE TABLE `meditation_journals` (
  `id` bigint UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `entry` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `meditation_journals`
--

INSERT INTO `meditation_journals` (`id`, `date`, `entry`, `user_id`, `created_at`, `updated_at`) VALUES
(3, '1111-11-12', 'ccc', 2, '2023-10-27 23:31:17', '2023-10-27 23:39:40'),
(4, '1111-11-11', 'bbb', 2, '2023-10-27 23:31:32', '2023-10-27 23:31:32'),
(6, '1111-11-11', '11', 2, '2023-10-27 23:44:36', '2023-10-27 23:44:36'),
(7, '1111-11-11', '1111', 2, '2023-10-27 23:53:44', '2023-10-27 23:53:44'),
(10, '2023-10-29', 'huft', 7, '2023-10-28 21:01:05', '2023-10-28 21:01:05'),
(12, '1111-11-11', 'no no', 2, '2023-10-30 02:37:56', '2023-10-30 02:38:10'),
(18, '2023-11-04', 'huft capek', 11, '2023-11-04 05:27:11', '2023-11-04 05:27:19'),
(19, '2023-11-07', 'Saya sudah ga encok lagi setelah melakukan meditasi', 12, '2023-11-06 18:01:06', '2023-11-06 18:01:06'),
(21, '2023-11-07', 'saya jadi mudah tidur', 11, '2023-11-06 18:26:06', '2023-11-06 18:26:06'),
(22, '2023-11-07', 'saya jadi mudah tidur', 11, '2023-11-06 18:26:08', '2023-11-06 18:26:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_28_070949_create_todo_table', 1),
(6, '2023_10_09_085820_create_paket_table', 1),
(7, '2023_10_09_085920_create_transaksi_table', 1),
(8, '2023_10_12_052752_create_moods_table', 2),
(9, '2023_10_28_060543_create_events_table', 3),
(10, '2023_10_28_064519_create_meditation_journals_table', 4),
(11, '2023_10_28_081625_create_morning_messages_table_v2', 5);

-- --------------------------------------------------------

--
-- Table structure for table `moods`
--

CREATE TABLE `moods` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `mood` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `moods`
--

INSERT INTO `moods` (`id`, `user_id`, `mood`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'Happy', 'Feeling great today!', NULL, NULL),
(2, 2, 'Sad', 'Not a good day.', NULL, NULL),
(3, 2, 'sad', 'hai', '2023-10-11 21:36:24', '2023-10-11 21:36:24'),
(4, 2, 'sad', 'hai', '2023-10-11 21:36:30', '2023-10-11 21:36:30'),
(5, 2, 'sad', 'huhu', '2023-10-11 21:37:55', '2023-10-11 21:37:55'),
(6, 2, 'happy', 'ndakndkas', '2023-10-11 21:41:35', '2023-10-11 21:41:35'),
(7, 2, 'buruk', 'ndasb', '2023-10-11 21:42:10', '2023-10-11 21:42:10'),
(8, 2, 'senang', 'Aku bangun tidur', '2023-10-11 21:49:58', '2023-10-11 21:49:58'),
(9, 2, 'baik', 'bdsbac', '2023-10-11 21:53:40', '2023-10-11 21:53:40'),
(10, 2, 'sedih', 'asnmad', '2023-10-11 21:55:03', '2023-10-11 21:55:03'),
(11, 2, 'baik', 'xma sx', '2023-10-11 21:56:36', '2023-10-11 21:56:36'),
(12, 2, 'baik', 'absjabd', '2023-10-11 21:57:39', '2023-10-11 21:57:39'),
(13, 2, 'biasa', 'qqq', '2023-10-12 02:16:34', '2023-10-12 02:16:34'),
(14, 2, 'buruk', 'www', '2023-10-12 02:19:11', '2023-10-12 02:19:11'),
(15, 2, 'senang', NULL, '2023-10-12 02:21:01', '2023-10-12 02:21:01'),
(16, 2, 'buruk', NULL, '2023-10-12 02:22:32', '2023-10-12 02:22:32'),
(17, 2, 'buruk', NULL, '2023-10-12 02:26:29', '2023-10-12 02:26:29'),
(18, 2, 'baik', NULL, '2023-10-12 02:27:02', '2023-10-12 02:27:02'),
(19, 2, 'sedih', NULL, '2023-10-12 02:29:03', '2023-10-12 02:29:03'),
(20, 2, 'buruk', NULL, '2023-10-12 02:29:35', '2023-10-12 02:29:35'),
(21, 2, 'buruk', NULL, '2023-10-12 02:30:05', '2023-10-12 02:30:05'),
(22, 2, 'buruk', NULL, '2023-10-12 02:31:12', '2023-10-12 02:31:12'),
(23, 2, 'buruk', NULL, '2023-10-12 02:31:37', '2023-10-12 02:31:37'),
(24, 2, 'buruk', NULL, '2023-10-12 02:31:50', '2023-10-12 02:31:50'),
(25, 2, 'sedih', NULL, '2023-10-12 02:32:19', '2023-10-12 02:32:19'),
(26, 2, 'baik', NULL, '2023-10-12 02:32:46', '2023-10-12 02:32:46'),
(27, 2, 'senang', NULL, '2023-10-12 02:33:19', '2023-10-12 02:33:19'),
(28, 2, 'biasa', NULL, '2023-10-12 02:33:37', '2023-10-12 02:33:37'),
(29, 2, 'baik', NULL, '2023-10-12 02:34:17', '2023-10-12 02:34:17'),
(30, 2, 'baik', NULL, '2023-10-12 02:34:46', '2023-10-12 02:34:46'),
(31, 2, 'baik', NULL, '2023-10-12 02:35:25', '2023-10-12 02:35:25'),
(32, 3, 'sedih', 'huhuhu', '2023-10-14 23:29:12', '2023-10-14 23:29:12'),
(33, 2, 'sedih', 'kesandung pot bunga', '2023-10-25 04:03:20', '2023-10-25 04:03:20'),
(34, 2, 'senang', 'hehe', '2023-10-26 03:36:13', '2023-10-26 03:36:13'),
(35, 2, 'baik', 'xixi', '2023-10-26 03:37:55', '2023-10-26 03:37:55'),
(36, 2, 'senang', 'xixi', '2023-10-26 04:03:14', '2023-10-26 04:03:14'),
(37, 1, 'sedih', 'huhu', '2023-10-28 02:41:56', '2023-10-28 02:41:56'),
(38, 7, 'biasa', 'yah', '2023-10-28 02:57:07', '2023-10-28 02:57:07'),
(39, 7, 'buruk', 'jatuh dari tangga', '2023-10-28 20:58:37', '2023-10-28 20:58:37'),
(40, 7, 'buruk', 'aduh', '2023-10-28 21:00:00', '2023-10-28 21:00:00'),
(41, 10, 'sedih', 'Jatuh dari gedung', '2023-10-30 02:58:20', '2023-10-30 02:58:20'),
(42, 11, 'sedih', 'sedih jatuh dari tangga', '2023-10-31 18:52:34', '2023-10-31 18:52:34'),
(43, 11, 'senang', 'xixi', '2023-10-31 18:53:02', '2023-10-31 18:53:02'),
(44, 11, 'senang', 'xixi', '2023-10-31 18:53:08', '2023-10-31 18:53:08'),
(45, 11, 'senang', 'yes', '2023-11-04 05:19:29', '2023-11-04 05:19:29'),
(46, 11, 'senang', NULL, '2023-11-04 05:25:16', '2023-11-04 05:25:16'),
(47, 12, 'buruk', 'jatuh dari tangga', '2023-11-06 17:59:39', '2023-11-06 17:59:39'),
(48, 11, 'sedih', 'gamon', '2023-11-06 18:08:00', '2023-11-06 18:08:00'),
(49, 11, 'senang', 'di chat lagi', '2023-11-06 18:22:43', '2023-11-06 18:22:43'),
(50, 12, 'sedih', 'sedih', '2023-11-07 00:03:27', '2023-11-07 00:03:27'),
(51, 12, 'sedih', 'sedih', '2023-11-07 00:03:28', '2023-11-07 00:03:28'),
(52, 12, 'sedih', 'sedih', '2023-11-07 00:03:30', '2023-11-07 00:03:30'),
(53, 12, 'sedih', 'huhu', '2023-11-17 22:42:41', '2023-11-17 22:42:41'),
(54, 12, 'sedih', 'huhu', '2023-11-18 05:24:18', '2023-11-18 05:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `morning_messages_table_v2`
--

CREATE TABLE `morning_messages_table_v2` (
  `id` bigint UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `morning_messages_table_v2`
--

INSERT INTO `morning_messages_table_v2` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Setiap pagi adalah kesempatan baru untuk mencapai impianmu.', NULL, NULL),
(2, 'Jadilah sumber inspirasi bagi dirimu sendiri dan orang lain.', NULL, NULL),
(3, 'Pagi ini adalah awal petualangan baru dalam hidupmu.', NULL, NULL),
(4, 'Salam pagi! Hari ini adalah berkah.', NULL, NULL),
(5, 'Berikan senyumanmu kepada dunia dan dunia akan tersenyum kembali padamu.', NULL, NULL),
(6, 'Kesuksesan dimulai dengan langkah pertama.', NULL, NULL),
(7, 'Kemarin adalah sejarah, hari ini adalah hadiah, dan besok adalah misteri.', NULL, NULL),
(8, 'Saat matahari terbit, berharaplah yang terbaik dan persiapkan dirimu untuk itu.', NULL, NULL),
(9, 'Saat kamu bangun, jangan lupa untuk bersyukur.', NULL, NULL),
(10, 'Kamu adalah lebih kuat daripada yang kamu pikirkan.', NULL, NULL),
(11, 'Berpikirlah positif dan hal positif akan terjadi.', NULL, NULL),
(12, 'Semua yang kamu butuhkan untuk sukses ada dalam dirimu.', NULL, NULL),
(13, 'Pagi ini, ingatkan dirimu sendiri tentang potensimu yang tak terbatas.', NULL, NULL),
(14, 'Setiap hari adalah kesempatan baru untuk menjadi lebih baik.', NULL, NULL),
(15, 'Jangan pernah menyerah pada impianmu.', NULL, NULL),
(16, 'Pesan pagi ini: Keberhasilan memerlukan ketekunan.', NULL, NULL),
(17, 'Jadilah cermin yang memantulkan kebaikan kepada dunia.', NULL, NULL),
(18, 'Hari ini adalah hadiah yang bernilai. Manfaatkan sepenuhnya.', NULL, NULL),
(19, 'Bekerja keras dan percayalah pada dirimu sendiri.', NULL, NULL),
(20, 'Pagi ini, latih dirimu untuk lebih sabar dan bijaksana.', NULL, NULL),
(21, 'Percayalah bahwa setiap kesulitan adalah peluang.', NULL, NULL),
(22, 'Keberhasilan adalah hasil dari tekad dan kerja keras.', NULL, NULL),
(23, 'Jadilah pahlawan dalam kisah hidupmu sendiri.', NULL, NULL),
(24, 'Setiap langkah membawa kita lebih dekat ke impian.', NULL, NULL),
(25, 'Salam pagi! Ingatlah untuk merenung sejenak.', NULL, NULL),
(26, 'Kamu adalah seniman hidupmu, lukislah dengan warna-warna cerah.', NULL, NULL),
(27, 'Ketika kita bersyukur, kita menemukan kebahagiaan.', NULL, NULL),
(28, 'Kemarahan dan kebencian hanya membebani jiwa. Lepaskan mereka.', NULL, NULL),
(29, 'Pagi ini, cobalah untuk menjalani hidup dengan penuh kebahagiaan.', NULL, NULL),
(30, 'Keajaiban terjadi saat kamu berani bermimpi.', NULL, NULL),
(31, 'Pesan pagi ini: Jadilah pemberani dan taklukkan ketakutanmu.', NULL, NULL),
(32, 'Setiap kesalahan adalah pelajaran berharga.', NULL, NULL),
(33, 'Saat kamu memberikan, kamu menerima lebih banyak.', NULL, NULL),
(34, 'Jangan ragu untuk mengambil risiko.', NULL, NULL),
(35, 'Selamat pagi! Hari ini adalah berkat.', NULL, NULL),
(36, 'Keberhasilan dimulai dengan tindakan.', NULL, NULL),
(37, 'Hidup adalah perjalanan yang luar biasa.', NULL, NULL),
(38, 'Ketika kamu merasa lelah, ingatlah mengapa kamu memulai.', NULL, NULL),
(39, 'Saat kamu berbagi kebaikan, kebaikan itu kembali padamu.', NULL, NULL),
(40, 'Pagi ini, bangun dengan tekad untuk membuat perbedaan.', NULL, NULL),
(41, 'Berpikirlah positif, percayalah pada dirimu sendiri, dan segalanya akan menjadi mungkin.', NULL, NULL),
(42, 'Hidupmu adalah cerita yang harus kamu tulis dengan baik.', NULL, NULL),
(43, 'Setiap pagi adalah kesempatan untuk menjadi versi terbaik dari dirimu.', NULL, NULL),
(44, 'Pesan pagi ini: Kesehatanmu adalah harta yang paling berharga.', NULL, NULL),
(45, 'Pagi ini, cobalah untuk menjaga pernapasanmu dan tenangkan pikiranmu.', NULL, NULL),
(46, 'Selamat pagi! Keberhasilan dimulai dengan tekad.', NULL, NULL),
(47, 'Saat kamu memegang kunci, kamu dapat membuka pintu menuju masa depan yang cerah.', NULL, NULL),
(48, 'Pagi ini, lupakan kesalahan kemarin dan fokus pada kemungkinan hari ini.', NULL, NULL),
(49, 'Ketika kamu percaya pada dirimu sendiri, yang lain akan mengikuti.', NULL, NULL),
(50, 'Jadilah sumber cahaya dalam kegelapan.', NULL, NULL),
(51, 'Hidup adalah petualangan yang menunggu untuk dijelajahi.', NULL, NULL),
(52, 'Keberhasilan adalah perjalanan, bukan tujuan akhir.', NULL, NULL),
(53, 'Pesan pagi ini: Jadilah bersyukur untuk hari ini.', NULL, NULL),
(54, 'Hidup ini berharga, manfaatkan setiap momennya.', NULL, NULL),
(55, 'Setiap pagi adalah kesempatan baru untuk mencapai impianmu.', NULL, NULL),
(56, 'Salam pagi! Jadilah inspirasi bagi orang lain.', NULL, NULL),
(57, 'Keberhasilan dimulai dengan tekad untuk mencoba.', NULL, NULL),
(58, 'Ketika matahari terbit, ingatkan dirimu sendiri tentang potensimu.', NULL, NULL),
(59, 'Pagi ini adalah kesempatan baru untuk membuat perubahan positif.', NULL, NULL),
(60, 'Berpikirlah positif, dan dunia akan menjadi tempat yang lebih baik.', NULL, NULL),
(61, 'Ketika kamu berbagi, kamu memberikan cinta kepada dunia.', NULL, NULL),
(62, 'Pagi ini, berikan yang terbaik yang kamu punya.', NULL, NULL),
(63, 'Ketika kamu fokus pada yang positif, hal positif terjadi.', NULL, NULL),
(64, 'Pesan pagi ini: Kesehatan adalah harta yang paling berharga.', NULL, NULL),
(65, 'Hidup ini singkat, jangan sia-siakan waktumu.', NULL, NULL),
(66, 'Pagi ini, cobalah untuk merenung dan mencari kedamaian.', NULL, NULL),
(67, 'Jangan pernah ragu pada kemampuanmu sendiri.', NULL, NULL),
(68, 'Setiap langkah adalah langkah menuju impianmu.', NULL, NULL),
(69, 'Salam pagi! Jadilah agen perubahan dalam hidupmu.', NULL, NULL),
(70, 'Keberhasilan adalah perjalanan yang mengharuskan kita untuk terus bergerak.', NULL, NULL),
(71, 'Jadilah motivator dalam hidupmu sendiri.', NULL, NULL),
(72, 'Pagi ini adalah saat yang tepat untuk memulai perjalananmu.', NULL, NULL),
(73, 'Ketika kamu memegang kunci, semua pintu terbuka untukmu.', NULL, NULL),
(74, 'Pesan pagi ini: Jadilah bersyukur untuk setiap momen.', NULL, NULL),
(75, 'Pagi ini, bersyukurlah untuk segala yang kamu miliki.', NULL, NULL),
(76, 'Keberhasilan dimulai dengan tekad untuk mencoba lagi.', NULL, NULL),
(77, 'Saat matahari terbit, berharap yang terbaik dan berusaha keras.', NULL, NULL),
(78, 'Hidup adalah petualangan yang menunggu untuk dijelajahi.', NULL, NULL),
(79, 'Jangan pernah menyerah pada impianmu.', NULL, NULL),
(80, 'Setiap langkah membawa kita lebih dekat ke impian.', NULL, NULL),
(81, 'Pesan pagi ini: Kesehatanmu adalah harta yang paling berharga.', NULL, NULL),
(82, 'Salam pagi! Jadilah inspirasi bagi dirimu sendiri dan orang lain.', NULL, NULL),
(83, 'Jadilah berkat bagi orang lain dan dunia.', NULL, NULL),
(84, 'Pagi ini adalah hari baru. Gunakan dengan bijak.', NULL, NULL),
(85, 'Pagi ini, renungkan kebaikan yang ada dalam hidupmu.', NULL, NULL),
(86, 'Jadilah pemberani dan terus bergerak maju.', NULL, NULL),
(87, 'Saat kamu memegang kendali, kamu dapat mengubah hidupmu.', NULL, NULL),
(88, 'Pagi ini, berikan senyuman dan cinta kepada dunia.', NULL, NULL),
(89, 'Keberhasilan adalah hasil dari tekad dan kerja keras.', NULL, NULL),
(90, 'Setiap pagi adalah kesempatan baru untuk menjadi versi terbaik dari dirimu.', NULL, NULL),
(91, 'Salam pagi! Ketika kamu bersyukur, kamu menemukan kebahagiaan.', NULL, NULL),
(92, 'Jadilah pahlawan dalam kisah hidupmu sendiri.', NULL, NULL),
(93, 'Pesan pagi ini: Ingatlah mengapa kamu memulai.', NULL, NULL),
(94, 'Setiap hari adalah berkat yang berharga.', NULL, NULL),
(95, 'Pagi ini, terima tantangan dengan tekad dan keyakinan.', NULL, NULL),
(96, 'Ketika kamu fokus pada yang positif, semuanya menjadi lebih mungkin.', NULL, NULL),
(97, 'Hidup adalah petualangan yang menunggu untuk dijelajahi.', NULL, NULL),
(98, 'Jangan biarkan masa lalu menghalangi masa depanmu.', NULL, NULL),
(99, 'Setiap langkah yang kamu ambil mendekatkanmu ke tujuanmu.', NULL, NULL),
(100, 'Pesan pagi ini: Kesehatan adalah harta yang paling berharga.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

CREATE TABLE `notes` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `title`, `content`, `category`, `user_id`, `created_at`, `updated_at`) VALUES
(16, 'nyahahha', 'nyahahah', 'Teknologi', 2, '2023-10-14 21:02:11', '2023-10-14 21:02:11'),
(18, 'zzz', 'zzz', 'Pekerjaan', 2, '2023-10-14 21:02:32', '2023-10-14 21:02:32'),
(19, 'haha', 'hehe', 'Kuliner', 3, '2023-10-14 21:38:16', '2023-10-14 21:38:24'),
(20, 'Musik', 'musik', 'Musik', 2, '2023-10-14 21:58:20', '2023-10-14 21:58:20'),
(21, 'huft', 'huft', 'Buku', 2, '2023-10-14 22:11:44', '2023-10-14 22:11:44'),
(22, 'Hehe', 'huhuhu', 'Musik', 3, '2023-10-14 23:26:43', '2023-10-14 23:26:55'),
(23, 'xixi', 'xixixi', 'Lainnya', 2, '2023-10-26 03:57:55', '2023-10-26 03:57:55'),
(25, 'sibuk apa yh', 'xixi', 'Olahraga', 7, '2023-10-28 02:56:55', '2023-10-28 02:56:55'),
(26, 'nyahahah', 'nyahahha', 'Seni', 8, '2023-10-28 03:25:30', '2023-10-28 03:25:30'),
(27, 'belajar', 'belajar matematika ulangan asesment', 'Belajar', 7, '2023-10-28 20:57:50', '2023-10-28 20:58:09'),
(28, 'yah', 'yahahha', 'Buku', 9, '2023-10-28 22:40:18', '2023-10-28 22:40:18'),
(29, 'Belajar Laravel', 'wlkwleawknksfkdsgfishfkdsbfksgdkzjhjkaskflgklvsidgusgfigfksf', 'Belajar', 10, '2023-10-30 02:56:02', '2023-10-30 02:56:02'),
(30, 'Nonton Harry Potter', 'movie 5', 'Film', 10, '2023-10-30 02:56:35', '2023-10-30 02:56:35'),
(31, 'Nonton Harry Potter', 'Movie 2', 'Film', 11, '2023-10-31 18:51:38', '2023-10-31 18:51:38'),
(34, 'Nonton Harry Potter', 'Movie 8', 'Film', 12, '2023-11-06 17:58:56', '2023-11-06 17:58:56'),
(36, 'Hindia times', 'pindah berkala rumah ke rumah...', 'Musik', 11, '2023-11-06 18:11:02', '2023-11-06 18:11:02'),
(37, 'membaca lookism', 'junggo vs titan', 'Buku', 11, '2023-11-06 18:19:57', '2023-11-06 18:20:19'),
(38, 'Membaca Novel', 'Novel Bumi Tere Liye', 'Tugas Sekolah', 12, '2023-11-17 22:13:46', '2023-11-18 05:22:40');

-- --------------------------------------------------------

--
-- Table structure for table `paket_premium`
--

CREATE TABLE `paket_premium` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_paket` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `paket_id` int UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paket_premium`
--

INSERT INTO `paket_premium` (`id`, `nama_paket`, `deskripsi`, `harga`, `paket_id`, `created_at`, `updated_at`) VALUES
(1, 'Paket Tahunan', 'Akses premium selama satu tahun.', '300000.00', 1, NULL, NULL),
(2, 'Paket Bulanan', 'Akses premium selama satu bulan.', '50000.00', 2, NULL, NULL),
(3, 'Paket Mingguan', 'Akses premium selama satu minggu.', '20000.00', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `priority` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `user_id`, `priority`, `description`, `deadline`, `status`, `created_at`, `updated_at`) VALUES
(12, 10, 'Tinggi', 'Meditasi di Pagi hari', '2023-10-30', 'On progress', '2023-10-30 02:47:01', '2023-10-30 02:47:14'),
(14, 10, 'Sedang', 'Pernapasan dalam', '2023-10-30', 'On progress', '2023-10-30 02:49:29', '2023-10-30 02:49:54'),
(15, 11, 'Tinggi', 'laravel', '2023-11-01', 'Done', '2023-10-31 18:50:33', '2023-10-31 18:51:13'),
(16, 11, 'Sedang', 'tidur', '2023-11-04', 'Done', '2023-11-04 05:18:27', '2023-11-06 18:08:50'),
(17, 12, 'Tinggi', 'wewewewe', '2023-11-07', 'On progress', '2023-11-06 17:58:25', '2023-11-06 17:58:25'),
(18, 11, 'Tinggi', 'membacai chat lama', '2023-11-06', 'Done', '2023-11-06 18:09:40', '2023-11-06 18:09:48'),
(19, 11, 'Tinggi', 'mandi 3 kali', '2023-11-11', 'Done', '2023-11-06 18:17:40', '2023-11-06 18:21:21');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` bigint UNSIGNED NOT NULL,
  `payment_method` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `paket_id` bigint UNSIGNED DEFAULT NULL,
  `jumlah_pembayaran` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `payment_method`, `user_id`, `paket_id`, `jumlah_pembayaran`, `created_at`, `updated_at`) VALUES
(22, 'PayPal', 10, 1, '300000.00', '2023-10-30 02:58:53', '2023-10-30 02:58:53'),
(24, 'Dana', 11, 2, '50000.00', '2023-10-31 23:37:03', '2023-10-31 23:37:03'),
(25, 'Dana', 11, 1, '300000.00', '2023-11-04 05:27:30', '2023-11-04 05:27:30'),
(26, 'PayPal', 11, 2, '50000.00', '2023-11-06 03:53:36', '2023-11-06 03:53:36'),
(27, 'PayPal', 12, 2, '50000.00', '2023-11-06 18:02:29', '2023-11-06 18:02:29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_premium` tinyint(1) DEFAULT NULL,
  `premium_start_date` timestamp NULL DEFAULT NULL,
  `premium_end_date` timestamp NULL DEFAULT NULL,
  `role` text COLLATE utf8mb4_unicode_ci,
  `report_reason` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `profile_image`, `is_premium`, `premium_start_date`, `premium_end_date`, `role`, `report_reason`, `created_at`, `updated_at`) VALUES
(10, 'presentasi', 'presentasi@gmail.com', '$2y$10$eNtYVU1Mlbr4HDOJ7wUCa.97fkchrD66z1jOJ1oWRHzPQ75nXhOe2', 'profile_images/CjYFRjmwKyBJNu47K0w8j2jUwAJWlSb0Q06pRaL6.gif', NULL, NULL, NULL, 'user', NULL, '2023-10-30 02:42:01', '2023-10-30 02:46:22'),
(11, 'syahla', 'sazzaliee@gmail.com', '$2y$10$bTcNNBEGRzRs89vYvDrmu.POkfp6rC9RghRsK64e1bHczDIpDQhKW', 'profile_images/55FMwyxL5X8uvmGZqzrwJOMNfAJvGyhXvWLg2PM5.gif', 1, '2023-10-30 03:06:30', NULL, 'admin', NULL, '2023-10-30 03:05:50', '2023-11-04 05:28:01'),
(12, 'user', 'augfkjfban@gmail.com', '$2y$10$3mgtlfQezrDC1P.g2H00me/Cg4.bBbL/RJVfxxOgdAqRjsVN8B5eq', 'profile_images/wPOtmwuQlxhnzOjhMOWTjs7YX4cEPbMxuyuBUMlT.gif', 0, '2023-10-30 03:07:31', NULL, 'user', NULL, '2023-10-30 03:07:21', '2023-11-18 05:27:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `meditation_journals`
--
ALTER TABLE `meditation_journals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moods`
--
ALTER TABLE `moods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `morning_messages_table_v2`
--
ALTER TABLE `morning_messages_table_v2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notes`
--
ALTER TABLE `notes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_premium`
--
ALTER TABLE `paket_premium`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `todo_user_id_foreign` (`user_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transaksi_user_id_foreign` (`user_id`),
  ADD KEY `transaksi_paket_id_foreign` (`paket_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `meditation_journals`
--
ALTER TABLE `meditation_journals`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `moods`
--
ALTER TABLE `moods`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `morning_messages_table_v2`
--
ALTER TABLE `morning_messages_table_v2`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `notes`
--
ALTER TABLE `notes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `paket_premium`
--
ALTER TABLE `paket_premium`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `todo`
--
ALTER TABLE `todo`
  ADD CONSTRAINT `todo_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_paket_id_foreign` FOREIGN KEY (`paket_id`) REFERENCES `paket_premium` (`id`),
  ADD CONSTRAINT `transaksi_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
