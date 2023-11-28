-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2023 at 10:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_post`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Politics', 'politics', '2023-08-12 22:31:48', '2023-08-12 22:31:48'),
(2, 'technology', 'technology', '2023-08-12 22:32:06', '2023-08-12 22:32:06'),
(3, 'education', 'education', '2023-08-12 22:32:17', '2023-08-12 22:32:17'),
(4, 'travel', 'travel', '2023-08-12 22:32:50', '2023-08-12 22:32:50');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_06_02_151405_create_categories_table', 1),
(6, '2023_06_02_151418_create_posts_table', 1),
(7, '2023_06_03_041710_create_comments_table', 1),
(8, '2023_07_01_135759_create_views_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `excerpt` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `category_id`, `title`, `slug`, `image`, `excerpt`, `body`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Ini yang Diucapkan Ganjar saat Minta Gibran Meninggalkannya', 'ini-yang-diucapkan-ganjar-saat-minta-gibran-meninggalkannya', 'post-cover-image/BpkUG6dGUxTQzeiz2ljeqOBqprHUwwB3oT7iLsPC.jpg', 'Solo - Gubernur Jawa Tengah Ganjar Pranowo tiba-tiba meminta Wali Kota Solo Gibran Rakabuming Raka untuk meninggalkan di...', '<div><br><em>Solo - Gubernur Jawa Tengah Ganjar Pranowo tiba-tiba meminta Wali Kota Solo Gibran Rakabuming Raka untuk meninggalkan dirinya. Hal itu terjadi ketika Ganjar melakukan sejumlah kunjungan kerja di Solo Raya.</em><br><em>Awalnya permintaan Capres dari PDIP itu membuat putra sulung Presiden Jokowi kaget. Meski begitu, Gibran pun lantas meninggalkan Ganjar yang akan melanjutkan kunjungan ke beberapa tempat di Solo.</em><br><em>Permintaan Gajar ini terjadi ketika sesi wawancara dengan awak media. Ganjar yang sempat ngobrol dengan Gibran tiba-tiba memintanya untuk meninggalkannya. Apa yang disampaikan Ganjar itu pun membuat Gibran kaget.</em><br><em>Mendengar permintaan itu, Gibran pun cukup kaget, dan langsung merespons.</em><br><em>\"Ha, jangan dong pak,\" jawab Gibran.</em><br><em>Kepada awak media, Gibran mengatakan jika Ganjar masih akan menemui sejumlah tokoh, usai mengunjungi panti sosial di Solo. Namun, Gibran tak nampak mendampingi Ganjar setelah itu.</em><br><em>\"Beliau (Ganjar) ke Al Muayyad ,\" kata Gibran kepada awak media.</em><br><em>Sebelum melakukan kunjungan kerja di Solo, Ganjar terlebih dahulu ke Wonogiri untuk meresmikan Bus Trans Jateng di Alun-alun Giri Krida Wonogiri.</em><br><em>Bahkan Ganjar bersama rombongan, sempat mencoba menaiki bus tersebut hingga di Terminal Sukoharjo. Setelah itu, Ganjar pindah menggunakan mobil dinasnya menuju Panti Pelayanan Sosial Wanita Wanodyatama, dan Balai Rehabilitasi Sosial Bhakti Candrasa Solo.</em><br><em>Dalam kunjungannya itu, Wali Kota Solo Gibran Rakabuming Raka terus mendampingi Ganjar.</em><br><br></div>', '2023-08-12 22:54:33', '2023-08-12 22:54:33'),
(2, 1, 2, 'Kisah Hacker Korut Bobol Perancang Rudal Rusia', 'kisah-hacker-korut-bobol-perancang-rudal-rusia', 'post-cover-image/eP58JodYElMDlDElUwZyzhQB9bjCeHD6YSDg27xZ.jpg', 'Kelompok peretasan yang disponsori oleh pemerintah Korea Utara, ScarCruft, telah dikaitkan dengan serangan siber terhada...', '<div><em>Kelompok peretasan yang disponsori oleh pemerintah Korea Utara, ScarCruft, telah dikaitkan dengan serangan siber terhadap infrastruktur IT dan email server perancang rudal asal Rusia, NPO Mashinostroyeniya.</em></div><div><em>Perusahaan ini merupakan perancang dan produsen kendaraan orbital, pesawat ruang angkasa, serta rudal pertahanan dan serangan taktis Rusia yang digunakan oleh tentara Rusia dan India.</em></div><div><br></div><div><em>Departemen Keuangan AS (OFAC) telah menjatuhkan sanksi kepada perusahaan ini sejak 2014 atas kontribusi dan perannya dalam perang Rusia-Ukraina</em></div><div><br></div><div><em>SentinelLabs kemudian melaporkan bahwa ScarCruft berada di balik peretasan server email dan sistem TI NPO Mashinostroyeniya, di mana para pelaku memasang backdoor Windows bernama \'OpenCarrot\' untuk akses jarak jauh ke jaringan.</em></div><div><br></div><div><em>Meskipun tidak jelas apa tujuan utama dari serangan ini, ScarCruft (APT37) adalah sebuah kelompok spionase siber yang dikenal melakukan survei dan mencuri data dari organisasi sebagai bagian dari kampanye siber mereka.</em></div><div><br></div><div><em>Pakar keamanan menemukan pelanggaran dari sistem mereka, setelah menganalisis kebocoran email dari NPO Mashinostroyeniya yang berisi komunikasi sangat rahasia.</em></div><div><br></div><div><em>Termasuk, laporan dari staf TI yang memperingatkan potensi insiden keamanan siber pada pertengahan Mei 2022.</em></div><div><br></div><div><em>SentinelLabs memanfaatkan informasi dalam email ini untuk melakukan penyelidikan. Mereka menemukan penyusupan yang jauh lebih signifikan daripada yang disadari oleh pembuat rudal.</em></div><div><br></div><div><em>Menurut email yang bocor, staf IT di NPO Mashinostroyeniya membahas komunikasi jaringan yang mencurigakan antara proses yang berjalan di perangkat internal dan server eksternal.</em></div><div><br></div><div><em>Hal ini pada akhirnya menyebabkan perusahaan menemukan DLL berbahaya yang diinstal pada sistem internal, sehingga menyebabkan mereka menghubungi perusahaan antivirus untuk mencari kenapa mereka terinfeksi.</em></div><div><br></div><div><em>Setelah menganalisis alamat IP dan indicators of compromise (IOCs) lainnya yang ditemukan dalam email, SentinelLabs menemukan bahwa organisasi Rusia itu terinfeksi dengan pintu belakang Windows \'OpenCarrot\'.</em></div><div><br></div>', '2023-08-12 22:59:24', '2023-08-12 22:59:24'),
(3, 1, 4, 'Keindahan Negeri Khayangan di Lereng Gunung Merbabu, Jawa Tengah', 'keindahan-negeri-khayangan-di-lereng-gunung-merbabu-jawa-tengah', 'post-cover-image/suauYrZx6lK27lEA9HG5J2dC1q7DETbfbMzhahYH.jpg', 'Ada satu tempat wisata dengan pemandangan alam yang indah di Kabupaten Magealng, Jawa Tengah, yakni Negeri Khayangan. Te...', '<div><em>Ada satu tempat wisata dengan pemandangan alam yang indah di Kabupaten Magealng, Jawa Tengah, yakni Negeri Khayangan. Tempat wisata ini bermula pada tahun 2021 saat pembangunan jalan desa. Karena pemandangannya indah, banyak pegowes dan wisatawan yang datang. Tempat ini akhirnya dikenal sebagai Tol Khayangan. Masyarakat sekitar pun langsung memanfaatkan kehadiran tempat wisata ini. Penataan dan pengembangan pun dilakukan. Tol Khayangan pun masih berlanjut hingga sekarang dan berganti nama menjadi Negeri Khayangan.</em></div><div><br><br></div><div><em>Begitu datang, pengunjung akan langsung disambut gapura berbentuk kastel. Seolah wisatawan masuk ke suatu negeri dongeng</em></div><div><br><br></div>', '2023-08-12 23:29:32', '2023-08-12 23:29:32'),
(4, 2, 3, 'Cerita Hadi, Pilot TNI AL yang Lulus S3 di Unair dengan IPK 3,97', 'cerita-hadi-pilot-tni-al-yang-lulus-s3-di-unair-dengan-ipk-3-97', 'post-cover-image/0WqpEn7YkyWsC4iPSdt788hPzZTpbYMdJX0NVwlX.jpg', 'Bergabung menjadi salah satu penerbang atau pilot Tentara Nasional Indonesia Angkatan Laut (TNI AL) tentu bukan hal yang...', '<div><em>Bergabung menjadi salah satu penerbang atau pilot Tentara Nasional Indonesia Angkatan Laut (TNI AL) tentu bukan hal yang mudah. Apalagi menjalankannya dibarengi dengan melanjutkan kuliah S3. Namun, hal itu bisa dilakukan dengan baik oleh Hadi Priyono. Karena, dia berhasil lulus kuliah S3 di Universitas Airlangga (Unair) dengan IPK 3,97, meski menjadi pilot TNI AL</em></div><div><br><br></div><div><em>Bersyukur karena prestasi ini merupakan pencapaian yang tidak serta merta prestasi pribadi. Ada doa orangtua, istri, dan anak,\" ucap dia dilansir dari laman Unair. Priyo mengungkapkan, dirinya memiliki dua tanggung jawab yang besar selama kuliah. Hal itu menjadi tantangan sendiri baginya.&nbsp;<br><br>Apalagi saat kuliah, kondisi pembelajaran terpaksa secara daring karena bersamaan pandemi Covid-19. Walaupun baginya kuliah saat pandemi justru terasa mudah. \"Tantangannya itu saat waktu saya mendapat tugas dari kesatuan dan ada tugas belajar. Tapi karena pembelajaran saat Covid-19 secara online jadi bisa belajar dimana-mana tidak harus di kampus,” tutur dia.</em></div><div><br></div><div><em>Priyo menambahkan, dukungan senantiasa diperolehnya dari Sekolah Pascasarjana Unair terhadap kelancaran studinya. \"Saya mendapat dukungan penuh dari Ketua Program Studi (KPS) utamanya terkait penugasan. Jadi saya masih tetap bisa menyelesaikan tugas meskipun sedang bertugas,\" ujarnya.</em></div><div><br></div>', '2023-08-13 01:08:46', '2023-08-13 01:08:46'),
(5, 2, 2, 'Project S TikTok Bisa Ancam UMKM RI, Menkominfo Bersiap Bentuk Satgas', 'project-s-tiktok-bisa-ancam-umkm-ri-menkominfo-bersiap-bentuk-satgas', 'post-cover-image/PESa9kBUW4edlUtYxQ5O3fhyosMzOGcPm5rzmiks.jpg', 'Menteri Komunikasi dan Informatika Budi Arie Setiadi menilai Project S TikTok berpotensi mengancam pertumbuhan pelaku Us...', '<div><em>Menteri Komunikasi dan Informatika Budi Arie Setiadi menilai Project S TikTok berpotensi mengancam pertumbuhan pelaku Usaha Mikro Kecil dan Menengah (UMKM) dalam negeri. Untuk itu, Pemerintah melalui Kementerian Komunikasi dan Informatika (Kemenkominfo) akan membentuk satuan tugas (satgas) yang bertugas melakukan percepatan dalam penyediaan akses digital serta pemantauan ekosistem digital, termasuk social commerce. Satgas nantinya bertugas untuk memberikan perlindungan terhadap pelaku UMKM dari ancaman social commerce asing.</em></div><div><br></div><div><em>Satgas ini nantinya akan melibatkan kementerian dan instansi terkait dalam merumuskan kebijakan bersama. Kementerian dan instansi yang terlibat antara lain Kementerian Perdagangan, Kementerian Koperasi dan UKM, dan lembaga terkait lainnya.&nbsp;<br><br>\"Terus terang memang kemajuan teknologi ini memerlukan cara berpikir baru untuk mengatasinya. Bukan hanya Kominfo yang ngurusin, tetapi juga antar instansi yang in-charge untuk hal-hal seperti ini,\" tutur Menkominfo Budi Arie Setiadi melalui keterangan resmi yang diterima Kompas.com, dikutip Sabtu (22/7/2023). Sebagai informasi, Project S merupakan agenda yang dijalankan platform social commerce asal China melalui Tiktok Shop untuk memperbesar bisnisnya di berbagai negara, termasuk Indonesia. Melalui Project S, Tiktok dicurigai akan menggunakan data mengenai produk yang laris di suatu negara untuk kemudian diproduksi di China.</em></div><div><br></div><div><em>\"Predatory Pricing\" Ekonom Universitas Gajah Mada (UGM) Eddy Junarsin sebelumnya menyebutkan saat ini platform e-commerce dan social commerce asing menjadikan pasar Indonesia sebagai target utama mereka. Untuk melindungi UMKM RI, Eddy mendorong pemerintah untuk merevisi Peraturan Menteri Perdagangan Nomor 50 tahun 2020 tentang Ketentuan Perizinan Usaha, Periklanan, Pembinaan dan Pengawasan Pelaku Usaha dalam Perdagangan melalui Sistem Elektronik. Eddy menilai, dalam aturan tersebut perlu adanya penyesuaian mengenai predatory pricing.</em></div><div><br></div><div><em>“Pemerintah harus tegas posisinya dalam melindungi UMKM. Selain dengan regulasi, pemerintah juga wajib memberikan bantuan teknis, seperti memperbanyak pelatihan, bantuan manajemen, pinjaman kredit lunak, dan lain sebagainya. Hal itu, akan lebih bermanfaat untuk memperkuat daya saing UMKM terhadap produk-produk impor,” kata Eddy. (Penulis Rully R. Ramli | Editor Yoga Sukmana) Dapatkan update berita pilihan dan breaking news setiap hari dari Kompas.com. Mari bergabung di Grup Telegram&nbsp;</em></div><div><br></div>', '2023-08-13 01:13:49', '2023-08-13 01:13:49'),
(6, 2, 1, 'Jokowi Sebut Pemimpin Harus Berlari, Disebut Sinyal ke Ganjar Pranowo', 'jokowi-sebut-pemimpin-harus-berlari-disebut-sinyal-ke-ganjar-pranowo', 'post-cover-image/pgJoKsnTuJrhzKw0pf8U1b5pnLFkzY5Arrx2Vuit.webp', 'Pengamat politik sekaligus Direktur Eksekutif Parameter Politik Indonesia, Adi Prayitno menilai ungkapan Presiden Joko W...', '<div><em>Pengamat politik sekaligus Direktur Eksekutif Parameter Politik Indonesia, Adi Prayitno menilai ungkapan Presiden Joko Widodo atau Jokowi bahwa pemimpin yang dibutuhkan Indonesia adalah yang mampu lari maraton, disebut mengarah kepada Bakal Calon Presiden PDI Perjuangan Ganjar Pranowo.</em></div><div><br><br></div><div><em>HomeNewsPolitik Jokowi Sebut Pemimpin Harus Berlari, Disebut Sinyal ke Ganjar Pranowo</em></div><div><em>Putu Merta Surya PutraPutu Merta Surya Putra</em></div><div><em>Diperbarui 12 Agu 2023, 22:00 WIB</em></div><div><em>Copy Link</em></div><div><em>16</em></div><div><br></div><div><em>Ganjar Gibran Bima di Pasar Citeureup</em></div><div><em>Perbesar</em></div><div><em>Ganjar Pranowo melakukan blusukan ke Pasar Citeureup usai melakukan lari pagi ditemani Wali Kota Bogor Bima Arya. (merdeka.com/Arie Basuki)</em></div><div><em>, Jakarta Pengamat politik sekaligus Direktur Eksekutif Parameter Politik Indonesia, Adi Prayitno menilai ungkapan Presiden Joko Widodo atau Jokowi bahwa pemimpin yang dibutuhkan Indonesia adalah yang mampu lari maraton, disebut mengarah kepada Bakal Calon Presiden PDI Perjuangan Ganjar Pranowo.</em></div><div><br></div><div><em>Diketahui, Presiden Jokowi mengungkapkan empat kriteria calon pemimpin yang dibutuhkan Indonesia ke depan, pada pertemuan bersama para pimpinan redaksi di Istana Kepresidenan Jakarta, Kamis (10/8/23).</em></div><div><br></div><div><em>Enam+01:05VIDEO: Ganjar Pranowo Mengajar di SMK 1 Binangun Cilacap</em></div><div><em>Kriteria tersebut di antaranya adalah Indonesia membutuhkan sosok pemimpin yang berani, konsisten, punya nyali dan mampu lari maraton.</em></div><div><br></div><div><em>\"Ya saya kira dari empat kriteria yang disampaikan oleh Jokowi mungkin calon-calon lain itu ada Anies misalnya ataupun Prabowo Subianto termasuk Ganjar adalah sosok yang saya kira punya konsistensi dan keberanian gitu ya,\" jelas Adi pada wartawan, Sabtu (12/8/2023).</em></div><div><br></div><div><em>Menurut Adi, ungkapan terkait lari maraton tersebut diduga sebagai sinyal dukungan Jokowi untuk Ganjar Pranowo.</em></div><div><br></div><div><em>Dia menjelaskan bila soal berlari, Ganjar merupakan figur yang sat-set dalam menghadapi suatu permasalahan, terutama selama menjabat sebagai Gubernur Jawa Tengah.</em></div><div><br></div><div><em>\"Tapi, ketika bicara tentang bahwa pemimpin itu adalah mereka yang mampu berlari kencang seakan-akan itu mengarah kepada Ganjar Pranowo karena selama ini capres yang terindentifikasi memiliki hobi dan kegemaran berlari, belanja masalah-masalah rakyat secara langsung hanyalah Ganjar Pranowo,\" terang dia.</em></div><div><br></div><div><em>Adi menyebut, kode Jokowi tersebut merupakan hal yang lumrah. Sebab, sebagai orang Jawa, Jokowi kerap memberikan kode-kode dukungan secara tidak langsung.</em></div><div><br></div><div><em>\"Jokowi inikan orang Jawa tentu bahasa dukungan politiknya tidak disampaikan secara eksplisit tapi menggunakan bahasa-bahasa kiasan dan bahasa-bahasa semantik,\" ucap dia.</em></div><div><br></div><div><em>Untuk itu, dia pun menegaskan bahwa Ganjar Pranowo sangat merepresentasikan kode \'lari\' tersebut sehingga memenuhi kriteria untuk melanjutkan kepemimpinan Jokowi.</em></div><div><br></div><div><em>\"Publik mengira, publik menduga ketika Jokowi menyebut bahwa pemimpin adalah mereka yang mampu berlari kencang, itu rasa-rasanya mengarah kepada Ganjar Pranowo bukan yang lain,\" tutup dia.</em></div><div><br><br></div><div><em>Pernyataan Jokowi</em></div><div><em>Presiden Joko Widodo (Jokowi) mengurai kriteria pemimpin Indonesia di masa selanjutnya. Hal itu disampaikan, saat Jokowi bertemu para pemimin redaksi (pemred) di Istana Merdeka, Jakarta, Kamis (10/8/2023).</em></div><div><br></div><div><em>Jokowi mengatakan, Indonesia membutuhkan pemimpin yang berani untuk menjaga kebijakan-kebijakan yang telah dibuat untuk memajukan bangsa, di antaranya terkait hilirisasi industri.</em></div><div><br></div><div><em>“Ke depan saya kira bukan tentang siapa presidennya, yang paling penting menurut saya, sanggup enggak (untuk) konsisten terhadap apa yang sudah kita mulai ini, berani enggak, ini butuh keberanian,” kata Presiden dalam pertemuan tersebut.</em></div><div><br></div><div><em>Kepala negara menilai, keberanian dan konsistensi diperlukan oleh pemimpin selanjutnya. Sebab, tantangan dan tekanan dihadapi oleh negara ke depan akan makin meningkat. Oleh karena itu, Jokowi ingin punya pemimpin yang bernyali, berani dan konsistensi.</em></div><div><br></div><div><em>“Konsistensi itu saja sudah karena butuh daya tahan, butuh endurance,” kata dia.</em></div><div><br></div><div><em>Jokowi mencontohkan, keberanian pemimpin yang pernah dilakukannya adalah kebijakan hilirisasi industri. Menurut dia, kebijakan itu punya tantangan besar yang berdampak global. Contohnya, saat Organisasi Perdagangan Dunia atau WTO memenangkan gugatan Uni Eropa soal keputusan Indonesia menyetop ekspor bijih nikel.</em></div><div><br></div><div><em>“Tapi kita enggak akan berhenti meskipun digugat,” ujar dia.</em></div><div><br></div><div><em>Jokowi lalu menyinggung, sosok pemimpin ideal adalah dia yang bisa berlari membawa Indonesia ke arah yang makin baik. Mantan gubernur DKI ini pun menganalogikan pernyataannya dengan situasi olahraga lari.</em></div><div><br></div><div><em>\"Larinya jangan lari pagi. Kalau lari pagi mudah, harus lari maraton, kuncinya di endurance,\" kode Jokowi menandasi.</em></div><div><br></div><div><em>Terkait lari maraton, pernyataan dari presiden itu seakan mengarah kepada salah satu bakal calon presiden yang memang gemar olahraga lari bahkan melakukan maraton, yakni Ganjar Pranowo.</em></div><div><br></div><div><em>Terkait lari maraton, pernyataan dari presiden itu seakan mengarah kepada salah satu bakal calon presiden yang memang gemar olahraga lari bahkan melakukan maraton, yakni Ganjar Pranowo.</em></div><div><br></div><div><em>Ganjar juga dalam beberapa kesempatan dengan tegas menyatakan mendukung dan akan melanjutkan program serta kebijakan yang sudah dilakukan Presiden Jokowi.Salah satunya adalah hilirisasi industri yang memang menjadi fokus Presiden Jokowi.</em></div><div><br></div><div>&nbsp;</div><div><br><br></div>', '2023-08-13 01:19:06', '2023-08-13 01:19:06'),
(7, 1, 4, '8 Tempat Belanja Murah di Singapura, Nomor 3 Mirip Tanah Abang di Jakarta', '8-tempat-belanja-murah-di-singapura-nomor-3-mirip-tanah-abang-di-jakarta', 'post-cover-image/0QCvW9nTSe70Tdwbf702P557d22jeoX8xd1bNE9O.jpg', 'Tempat belanja murah di Singapura selalu jadi incaran banyak orang. Bahkan tempat belanja ini kerap dikunjungi para wisa...', '<div>Tempat belanja murah di Singapura selalu jadi incaran banyak orang. Bahkan tempat belanja ini kerap dikunjungi para wisatawan, khususnya kaum perempuan yang gemar berburu barang-barang murah.&nbsp; Memang tak dipungkiri, Singapura sendiri menjadi negara yang banyak dikunjungi oleh wisatawan khususnya wisatawan dari Indonesia. <br><br>Terlebih Singapura dikenal sebagai negara yang bersih, nyaman, dan teratur.<br>Tak hanya negara yang teratur dan bersih, Singapura juga menjadi surganya orang belanja. Tidak perlu khawatir jika kamu memiliki bujet yang terbatas, karena di Singapura barang-barang di sini super murah dan bikin kalap.&nbsp; Penasaran apa saja nama tempatnya?<br>&nbsp;<br><strong>Berikut 8 tempat belanja murah di Singapura :<br></strong><br>1. Mustafa Centre Tempat belanja murah di Singapura yang ada Mustafa Centre. Tempat ini begitu dikenal sebagai surganya belanja murah di Singapura karena banyak aneka barang seperti barang elektronik, suvenir, dan cokelat yang dapat dibeli sebagai oleh-oleh. Uniknya, tempat belanja ini buka 24 jam sehingga kamu dapat belanja kapanpun kamu mau. Tak perlu khawatir atau takut karena di setiap tikungan jalan akan ada polisi yang berjaga. Mustafa Centre berlokasi di 145 Syed Alwi Rd, Singapura 207704&nbsp;<br><br>2. Orchard Road Tempat ini dikenal sebagai surga bagi para pecinta fashion karena di sepanjang jalan terdapat mal-mal serta toko yang menjual pakaian, perhiasan, hingga furnitur. Barang yang dijual di Orchard Road ini merupakan barang branded dengan harga yang terjangkau. Bagi kamu yang suka barang branded dengan harga yang terjangkau, tempat ini dapat menjadi pilihan kamu. Tempat ini berlokasi di Orchard Road, Singapore.&nbsp;<br><br>3. Bugis Street Tempat belanja murah di Singapura salah satunya Bugis Street. Tempat ini dikenal sebagai Tanah Abangnya Singapura. Di sini kamu dapat menemukan berbagai barang, pakaian, dan suvenir Singapura dengan harga terjangkau bahkan di sini kamu dapat menawar barang yang ingin kamu beli. Kamu juga dapat membeli oleh-oleh di tempat ini seperti gantungan kunci, magnet kulkas, kaos, tas, dompet, hingga makanan seperti cokelat. Tempat ini berlokasi di 3 New Bugis Street, Singapura 188867.&nbsp;<br><br>4. Chinatown Bagi kamu yang ingin membeli barang dalam jumlah yang banyak kamu wajib datang ke Chinatown. Chinatown merupakan pusat perbelanjaan aneka toko menjual beragam barang seperti pakaian, sepatu, tas, hingga aksesori berkualitas dengan harga yang murah. Di sini juga banyak toko yang menjual suvenir bertuliskan Singapura, seperti gantungan kunci, kaos, dan lain-lain sehingga cocok untuk kamu jadikan sebagai oleh-oleh. &nbsp;<br><br>5. Lucky Plaza<br>Tempat belanja murah di Singapura salah satunya Lucky Plaza. Tempat belanja ini berbentuk seperti pasar yang menjual aneka makanan ringan, aksesori, suvenir, pakaian, barang elektronik, makeup dan lain-lain dengan harga terjangkau. Bahkan di sini kamu dapat tawar menawar sehingga skill menawarmu sangat dibutuhkan jika ingin berbelanja ke tempat ini. Di sini juga banyak menjual makanan Indonesia seperti ayam penyet, ayam bakar, sayur asem hingga sop iga. Tempat ini berlokasi di 304 Orchard Rd, Singapura 238863. &nbsp;<br><br>6. Cineleisure Orchard Tempat ini selalu ramai dikunjungi oleh anak-anak muda yang memburu fashion dengan harga yang murah. Walaupun tempatnya tergolong kecil, tempat ini terkenal di kalangan wisatawan. Bahkan di tempat ini menjual barang-barang branded dengan harga yang murah seperti Charles &amp; Keith, G2000, Giordano, Cotton On, Pedro dan masih banyak lagi. Karena tempatnya selalu ramai dikunjungi maka kamu perlu berhati-hati saat berkunjung ke tempat ini karena kamu akan berdesak-desakan dengan pengunjung yang lain. Tempat ini berlokasi di 8 Grange Rd, Singapura 239695.<br><br></div>', '2023-08-23 00:29:23', '2023-08-23 00:29:23'),
(8, 1, 2, 'Indonesia Darurat Judi Online, 4 Juta Lebih Situs Pemerintah Jadi Korban', 'indonesia-darurat-judi-online-4-juta-lebih-situs-pemerintah-jadi-korban', 'post-cover-image/2YmxzGjrViZCh76ThQhED9tS2iQFl5oBtN6kKZ6k.jpg', 'Indonesia darurat judi online. Terbaru ada sekitar empat juta lebih situs pemerintah Indonesia yang menjadi korban dan d...', '<div><br><br>Indonesia darurat judi online. Terbaru ada sekitar empat juta lebih situs pemerintah Indonesia yang menjadi korban dan diambil alih iklan judi online. Bagaimana bisa?<br><br>Fakta itu disampaikan oleh pendiri Drone Emprit dan Media Kernels Indonesia, Ismail Fahmi dalam akun X pribadinya, Selasa (22/8/2023). Dia menyatakan Indonesia tengah berada dalam kondisi darurat judi online karena judi online benar-benar berupaya masuk ke pikiran masyarakat dengan segala cara.<br><br>Tidak hanya berani tampil lewat aplikasi, promosi judi online kini justru menyusup ke situs-situs pemerintahan kota yang ada di seluruh wilayah Indonesia. Tidak main-main kata Ismail ada hampir empat juta halaman web judi online mengambil alih situs-situs resmi milik pemerintahan berbagai kota di Indonesia.<br><br>\"Sudah 846.047 situs judi diblokir sejak 2018. Masih ada tiga juta lagi hanya di situs-situs pemerintahan,\" cuit Ismail Fahmi di akun X miliknya.<br><br>Dia melanjutkan situs-situs judi online tersebut berhasil mengambil alih situs-situs milik pemerintah kota itu karena beberapa hal. Rata-rata penyebabnya adalah pengelola situs tidak sadar adanya pengambil alihan situs. Selain itu situs juga tidak dirawat atau tidak lagi ada pihak yang dikontrak untuk mengelola situs tersebut.<br><br>\"ASN dan masyarakat yang mengunjungi situs pemerintah, langsung disuguhi informasi judi,\" keluh Ismail Fahmi.<br><br>Dari informasi itu MNC Portal Indonesia mencoba melakukan pencarian yang disarankan oleh Ismail Fahmi yakni dengan keyword gacor sites:go.id. Hasilnya terdapat 4.640.000 situs yang bisa ditelusuri.<br><br>Sesuai dengan klaim Ismail Fahmi, sebanyak 10 situs pemerintahan yang keluar di halaman pertama memang sudah berhasil diambil alih oleh iklan judi online. Begitu juga dengan hasil pencarian paling akhir yang juga telah diambil alih oleh iklan judi online.<br><br>Kalau pun ada situs yang tidak menampilkan iklan judi online, situs itu justru statusnya \"404 Not Found\". Bisa jadi situs itu sudah distop karena memang url yang dipakai sudah tidak berlaku lagi.<br><br><br></div>', '2023-08-23 00:36:08', '2023-08-23 00:36:08'),
(9, 1, 2, 'Puluhan Aplikasi Berisi Malware Ditemukan di Google Play Store, Ini Cara Mengeceknya!', 'puluhan-aplikasi-berisi-malware-ditemukan-di-google-play-store-ini-cara-mengeceknya', 'post-cover-image/7q2gdgOdRUMVZZyqEIWBc23bTRyemFNv9PtyQIwn.jpg', 'McAfee melaporkan bahwa Google Play Store telah disusupi oleh 43 aplikasi berisi malware. Mirisnya, jajaran aplikasi ter...', '<div><br>McAfee melaporkan bahwa Google Play Store telah disusupi oleh 43 aplikasi berisi malware. Mirisnya, jajaran aplikasi tersebut telah mendapat lebih dari 2,5 juta pemasangan. <br><br>Sebagaimana dilansir dari Bleeping Computer, Rabu (23/8/2023), sebagian besar aplikasi adalah aplikasi streaming media dan agregator berita. Diungkapkan bahwa target audiensnya sebagian besar adalah orang Korea.<br><br>McAfee menyebut, meskipun aplikasi berisikan adware, aplikasi tersebut masih menimbulkan risiko bagi para pngguna karena mampu membuka pintu bagi potensi risiko pembuatan profil pengguna.<br><br>Selain itu aplikasi juga bisa menghabiskan masa pakai baterai perangkat, mengonsumsi data internet yang signifikan, dan melakukan penipuan terhadap pengiklan.<br><br>Laporan McAfee mengatakan adware disembunyikan di aplikasi Google Play yang menyamar sebagai aplikasi TV/DMB Player, Pengunduh Musik, Berita, dan Kalender.<br><br>Setelah dipasang di perangkat, aplikasi adware menunggu beberapa minggu sebelum mengaktifkan aktivitas penipuan iklan mereka untuk menipu pengguna dan menghindari deteksi oleh peninjau Google.<br><br>McAfee mengatakan konfigurasi adware dapat dimodifikasi dan diperbarui dari jarak jauh melalui Firebase Storage atau Messaging, sehingga operatornya dapat menyesuaikan periode dormansi dan parameter lainnya.<br>Untuk diketahui, Android menggunakan fitur hemat daya yang menempatkan aplikasi ke mode siaga saat perangkat tidak digunakan, mencegahnya berjalan di latar belakang dan menggunakan CPU, memori, dan sumber daya jaringan.<br><br>Saat aplikasi adware berbahaya diinstal, pengguna akan diminta untuk menambahkannya sebagai pengecualian untuk sistem hemat daya Android, yang memungkinkan aplikasi berbahaya berjalan di latar belakang.<br><br>Pengecualian ini memungkinkan aplikasi adware untuk mengambil dan memuat iklan bahkan ketika layar perangkat mati, secara curang menghasilkan pendapatan dan pengguna untuk menyadari apa yang sedang terjadi.<br><br><strong>Bagaimana cara mengeceknya?</strong><br><br>Untuk memeriksa aplikasi mana yang paling banyak mengonsumsi energi di perangkat Android, McAfee memberitahu caranya adalah buka Pengaturan &gt; Baterai &gt; Penggunaan Baterai, di mana penggunaan \"total\" dan \"latar belakang\" ditunjukkan.<br><br>McAfee mengatakan bahwa aplikasi adware juga meminta izin untuk memanfaatkan aplikasi lain, biasanya digunakan oleh trojan perbankan yang melapisi halaman phishing di atas aplikasi e-banking yang sah.&nbsp;<br><br>Dikatakan Google kemudian menghapus aplikasi tersebut dari toko resmi Android. Pengguna disarankan untuk selalu membaca ulasan sebelum memasang aplikasi dan meneliti izin yang diminta saat memasang aplikasi baru sebelum mengizinkannya dipasang</div>', '2023-08-23 00:42:06', '2023-08-23 00:42:06'),
(10, 2, 1, 'Jokowi Tak Hadirkan Ahli Sidang Gugatan Batas Usia Capres-Cawapres', 'jokowi-tak-hadirkan-ahli-sidang-gugatan-batas-usia-capres-cawapres', 'post-cover-image/u5iWiGk6msemZqdNuSuQnOmxCfjPlV50vwvJ2ICZ.webp', 'Presiden Joko Widodo ( Jokowi ) meminta pihaknya tidak menghadirkan saksi ahli dalam sidang gugatan Undang-Undang Nomor...', '<div><br>Presiden Joko Widodo ( Jokowi ) meminta pihaknya tidak menghadirkan saksi ahli dalam sidang gugatan Undang-Undang Nomor 7 Tahun 2017 tentang Pemilihan Umum (Pemilu) terkait batas usia minimal calon presiden ( capres ) dan calon wakil presiden (cawapres) di Mahkamah Konstitusi (MK). Hal tersebut disampaikan oleh kuasa Presiden Jokowi dalam sidang lanjutan perkara tersebut, Selasa (22/8/2023).<br><br>&nbsp;Ketua MK Anwar Usman mengatakan agenda sidang lanjutan perkara itu yakni mendengar keterangan ahli dari pemohon nomor 51. Saksi ahli tersebut bernama Dr H Abdul Khair Ramadhan SH, MH. Saksi ahli itu diajukan sebagai tertulis tapi tidak dihadir dalam sidang perkara nomor 29/PUU-XXI/2023, 51/PUU-XXI/2023 dan 55/PUU-XXI/2023 itu. \"Kemudian untuk pemohon 55 tidak jadi mengajukan ahli begitu juga untuk Kuasa Presiden. Bagaimana konsep presiden?\" kata Anwar saat memimpin sidang di gedung MK, Jakarta Pusat, Selasa, (22/8/2023).<br><br>Kuasa presiden menuturkan, sebenarnya Jokowi ingin mengahdirkan saksi ahli. Namun, niat Jokowi kata kuasanya urung dilakukan. Anwar Usman lalu menanyakan apakah perintah tersebut dari Jokowi atau bukan. \"Ya, terima kasih yang mulia berdasarkan dari tim kuasa kemarin kita diskusi kemudian menghasilkan keputusan yang untuk tidak jadi menghadirkan ahli. Jadi ini atas keputusan kuasa presiden yang mulia,\" kata Kuasa Presiden. Ketua MK mengatakan bahwa apa yang telah disampaikan oleh kuasa presiden sudah jelas.&nbsp;<br><br>\"Jadi hari ini, sekali lagi agenda sidang sudah selesai. Karena tadi berdasarkan pemberitahuan dari Kuasa Presiden, ahli yang sedianya akan dihadirkan tidak jadi. Begitu juga untuk pemohon, cukup dengan keterangan tertulis. Baik, sekali lagi juga mungkin ada permohonan lain yang juga akan diberitahu secara tertulis oleh panitera,\" katanya<br><br>Anwar menuturkan sidang selanjutnya beragendakan mendengarkan keterangan pihak terkait. Kata dia sudah ada tiga permohonan untuk menjadi pihak terkait, yakni atas nama Evi Anggita Rahmah dan kawan-kawan; Raihan Vicky Fansuri dan Sultan Badarsah; dan Oktavianus Rasulbala.<br><br></div>', '2023-08-23 00:47:57', '2023-08-23 00:47:57'),
(11, 2, 1, 'Bongkar Pasang Koalisi Jelang Pesta Demokrasi', 'bongkar-pasang-koalisi-jelang-pesta-demokrasi', 'post-cover-image/jb3MmCDpnOD8Qa8Wml9vjy2h86MBMdkcOGVpn4jD.jpg', 'KEPUTUSAN Partai Persatuan Pembangunan (PPP) mengusung Ganjar Pranowo sebagai Capres 2024 membuat Koalisi Indonesia Bers...', '<div><br>KEPUTUSAN Partai Persatuan Pembangunan (PPP) mengusung Ganjar Pranowo sebagai Capres 2024 membuat Koalisi Indonesia Bersatu (KIB) terbelah. KIB yang beranggotakan Golkar, Partai Amanat Nasional (PAN), dan PPP pun disebut tinggal nama.<br><br>Ganjar Pranowo resmi diumumkan sebagai Calon Presiden (Capres) 2024 oleh Ketua Umum DPP PDIP Megawati Soekarnoputri pada Jumat, 21 April 2023 di Istana Batu Tulis, Bogor, Jawa Barat. Lima hari kemudian, giliran PPP memutuskan mengusung Gubernur Jawa Tengah tersebut sebagai Capres 2024. Hal itu merupakan hasil Rapat Pimpinan Nasional V PPP yang digelar di Sleman, Yogyakarta, Rabu (26/4/2023).<br><br>Pengamat Politik dari Universitas Islam Negeri (UIN) Syarif Hidayatullah Adi Prayitno mengatakan, membelotnya PPP dari KIB menunjukkan bahwa saat ini koalisi tersebut telah bubar. \"KIB tinggal nama. Karena PPP sudah memutuskan yang tidak dari KIB. Itu artinya KIB pilihan politik sudah terbelah,\" ujar Adi saat dihubungi MNC Portal, Jumat (28/4/2023).<br><br>Adi mengatakan, meski pembubaran terhadap KIB belum disampaikan secara resmi, tetapi dengan adanya dukungan PPP kepada Ganjar membuktikan secara formil KIB telah bubar. \"Jadi bagi saya secara prinsip secara praktik sudah bubar jalan meski secara formal belum menyatakan bubar,\" jelasnya.<br><br>ebelumnya, tiga ketua umum partai politik (parpol) yang tergabung dalam mengatakan akan menggelar pertemuan lanjutan untuk membicarakan nasib KIB dalam Pilpres 2024. Ketua Umum DPP Partai Golkar Airlangga Hartarto menyampaikan, KIB tentu akan menampung aspirasi dari masing-masing parpol.<br><br>Diketahui, hanya Golkar dan PPP yang sudah memutuskan capres yang akan diusung. Golkar tetap mengusung Airlangga<br>Hartarto. Sementara, PPP mengusung Ganjar Pranowo. Satu anggota KIB lainnya, PAN, belum memutuskan capres yang diusung.<br><br>\"Nah untuk ke depannya, KIB masih melihat, masih diperlukan pembicaraan-pembicaraan lanjutan,\" kata Airlangga dalam jumpa pers di kediamannya di Jalan Widya Chandra, Jakarta, Kamis (27/4/2023).<br><br>Zulkifli Hasan juga menyampaikan pada saatnya PAN akan mengumumkan siapa capres yang akan diusung untuk tampil di Pilpres 2024. Keputusan itu nantinya akan dibawa ke dalam pertemuan lanjutan bersama KIB. \"Masing-masing partai itu akan bisa sama bisa tidak. Jika tidak kita akan berembuk, apakah ada kesepakatan ataukah tidak. Pada akhirnya nanti, masih panjang perjalanannya,\" ujar Zulhas.<br><br>PPP tampaknya mantap mengusung Ganjar. Bahkan, setelah memutuskan mengusung Ganjar dan melakukan pertemuan dengan KIB, petinggi PPP bertemu dengan petinggi PDIP. Kedua parpol bertemu di Kantor DPP PDIP, Menteng, Jakarta Pusat, Minggu (30/4/2023).<br>\"Antara PDIP dengan PPP ini dekat, bukan hanya lokasinya yang bertetangga di Jalan Diponegoro, Menteng ini. Dari sejarah kelahirannya, PPP ini lahir pada 5 Januari 1973. Sementara PDI, 10 Januari 1973. Jadi PPP ini saudara tua kita, lima hari lebih tua dari PDIP,\" kata Sekjen PDIP Hasto Kristiyanto. Erfan Ma\'ruf, Felldy Utama, Kiswondari<br><br></div>', '2023-08-23 00:50:39', '2023-08-23 00:50:39'),
(12, 2, 3, 'Misi Ulang Sejarah Emas Sepak Bola di SEA Games 2023', 'misi-ulang-sejarah-emas-sepak-bola-di-sea-games-2023', 'post-cover-image/U3mek0idBosuLLlFcsB3yaiMtQ6HZi2sHl14QQ53.jpg', 'Ayo Garuda Muda! Timnas Indonesia U-22 memiliki misi mengulang merebut medali emas di SEA Games 2023. Kapten Rizky Ridho...', '<div><br>Ayo Garuda Muda! Timnas Indonesia U-22 memiliki misi mengulang merebut medali emas di SEA Games 2023. Kapten Rizky Ridho dkk ditarget meraih medali emas SEA Games 2023 yang saat ini berlangsung di Kamboja.<br><br>Kali terakhir Timnas Indonesia meraih medali emas di SEA Games 1991. Timnas Indonesia U-22 masuk Grup A bersama Filipina, Myanmar, Kamboja, dan Timor Leste. Armada Indra Sjafri cukup diunggulkan dalam fase grup. Meski demikian, dukungan tetap dibutuhkan.<br><br>Kiper Persib Bandung Satrio Azhar tidak mau ketinggalan untuk memberikan dukungan kepada Indonesia U-22 pada SEA Games 2023. Walau gagal masuk skuad utama tim itu karena tersisih dalam pemusatan latihan (TC) yang berlangsung di Jakarta beberapa waktu lalu, dia mendoakan tim Merah Putih meraih emas. \'\'Dukung terus pasti untuk teman-teman yang bermain. Semoga mendapatkan medali emas untuk Indonesia,\" ucap Satrio dilansir dari laman Persib.<br><br>Pemain jebolan akademi Persib itu mengaku sebenarnya kecewa tidak bisa membela Indonesia U-22 di event olahraga Asia Tenggara itu. Namun, Satrio akan tetap semangat berlatih agar potensinya terus meningkat demi berpeluang kembali memperkuat tim sepak bola negaranya. \"Sedih pastinya ada. Tapi, saya coba introspeksi juga. Mungkin masih harus belajar lebih keras dan bisa bersaing dengan kiper lainnya yang bagus-bagus dan punya pengalaman karena tampil reguler bersama klubnya,\" ucapnya.<br><br>Satrio juga menegaskan tidak akan menyia-nyiakan jika ada kesempatan kembali membela skuad Indonesia U-22. Dia akan berusaha menunjukkan seluruh kemampuannya. Tetapi, paling terpenting bisa tampil reguler bersama Persib di Liga 1 2023/2024. Sebab, dia ingin tampil lebih baik lagi.<br><br></div><h1><strong>Kilas Balik Prestasi Timnas Indonesia di SEA Games</strong></h1><div><br>Timnas Indonesia meraih dua emas selama penampilan di SEA Games/PSSI instagram<br><br>Kilas balik prestasi Timnas Indonesia di SEA Games yang menghasilkan 2 medali emas, 5 perak dan 5 perunggu sejak pertama kali tampil pada 1977. Nah, Timnas Indonesia U-22 membidik emas cabang sepak bola SEA Games 2023 di Kamboja.<br><br>Sebelum bicara peluang Garuda meraih hasil terbaik di ajang ini, ada baiknya membaca kilas balik prestasi Merah Putih di ajang multievent olahraga terbesar se-Asia Tenggara. Sejauh ini, Tim Merah-Putih telah berpartisipasi dalam 23 edisi SEA Games. Pencapaian terbaik mereka adalah meraih dua kali medali emas, lima perak, dan lima perunggu.<br><br>Emas pertama Indonesia diraih pada 1987 setelah mengalahkan seteru abadi, Malaysia, dengan skor 1-0 di Stadion Utama Senayan (kini Stadion Utama Gelora Bung Karno). Indonesia juga berhasil menghentikan dominasi juara bertahan Thailand. Adapun gol kemenangan Indonesia dicetak oleh gelandang sayap PSIS Semarang, Ribut Waidi, pada menit ke-91.<br><br>Empat tahun berselang, Indonesia kembali menjadi yang terbaik di SEA Games dengan meraih emas kedua seusai melibas Thailand 4-3 lewat drama adu penalti di Stadion Rizal Memorial, Manila, pada Desember 1991. Namun, prestasi terakhir tersebut terjadi hampir 32 tahun yang lalu dan sejak itu, Tim Garuda gagal membawa pulang medali emas di ajang tersebut.<br><br>Timnas Indonesia berhasil melenggang ke babak final sebanyak tujuh kali selama keikutsertaan mereka di SEA Games pada 1979, 1987, 1991, 1997, 2011, 2013, dan 2019. Pada partai puncak 1979, Indonesia dikalahkan oleh Malaysia dengan skor 1-0. Kekalahan ini kembali terjadi di edisi 1997 ketika skuad Garuda dipermalukan Thailand 4-2 lewat adu penalti.<br><br>Rentetan hasil buruk ini terus berlanjut di 2011 ketika Tim Merah-Putih kembali kalah dari Malaysia melalui drama adu penalti dengan skor 4-3. Pada 2013, Indonesia menyerah 0-1 dari Thailand, dan pada SEA Games 2019, Vietnam menjadi pelengkap kegagalan Indonesia di partai final setelah menang 3-0 di Stadion Rizal Memorial, Manila.<br><br>Di edisi SEA Games 2021, Timnas Indonesia U-23 gagal memenuhi ekspektasi di SEA Games 2021. Ditargetkan meraih medali emas, Tim Garuda Muda hanya dapat menduduki podium ketiga alias medali perunggu. Tak heran, ekspektasi tinggi masyarakat Indonesia berada di pundak Timnas Indonesia U-22 untuk merebut medali emas di SEA Games 2023.</div>', '2023-08-23 00:54:45', '2023-08-23 00:54:45'),
(13, 1, 3, 'Perangi Berita Hoax, Edukasi dan Sosialisasi Perlu Digenjot', 'perangi-berita-hoax-edukasi-dan-sosialisasi-perlu-digenjot', 'post-cover-image/bxK32MZKt91lIvwk8Dh2OmOElwZjqssOY7ysmpBT.jpg', 'JAKARTA - Berita hoax belakangan ini merajalela di Tanah Air. Kehadiran berita hoax tentu membuat pemerintah ikut memuta...', '<div><br>JAKARTA - Berita hoax belakangan ini merajalela di Tanah Air. Kehadiran berita hoax tentu membuat pemerintah ikut memutar otak untuk memberantas berita hoax yang bisa mengganggu masyarakat Indonesia.<br><br>Selain memblokir situs-situs yang dianggap menyebarkan berita hoax, pemerintah melalui Kementerian Komunikasi dan Informatika (Kominfo) memberantas berita hoax dengan menggandeng beberapa perusahaan jejaring sosial seperti Facebook dan Twitter yang cukup berpotensi digunakan menyebarkan berita hoax.<br><br>&nbsp;<br><br>Namun, dalam memberantas berita hoax, pemerintah tak bisa melakukan sendirian. Pengamat Keamanan Siber, Pratama Persadha, mengatakan, saat jumlah pengguna baru smartphone meningkat seperti saat ini, berita hoax lebih mudah tersebar karena kurangnya edukasi dan sosialisasi.<br><br>Oleh sebab itu, pemeritah dinilai juga perlu menggandeng masyarakat untuk berpartisipasi memerangi penyebaran berita hoax.<br><br>\"Pemerintah tidak bisa bekerja sendiri karena tidak bisa masuk ke grup-grup WhatsApp. Oleh karena itu, harus menggandeng masyarakat,\" kata Pengamat Keamanan Siber, Pratama Persadha.<br><br>Ia juga menyoroti sistem dan sarana pengaduan masyarakat untuk berita hoax. Menurutnya, saat ini masyarakat membutuhkan aplikasi atau cara yang dapat memudahkan masyarakat dalam melaporkan situs penyebar hoax.<br><br><br></div>', '2023-08-23 01:33:38', '2023-08-23 01:33:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `profilImage` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `alamat`, `phone`, `birthday`, `profilImage`, `password`, `is_admin`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Muhammad Ediefanto', 'ediefanto778@gmail.com', 'ediefanto', 'Getassrabi, gebog, kudus', '085852286595', '2003-05-22', 'image-profile/uJEmPm5kzZmXo4rOZmnceYr8p1ueDJxCqE2gHltv.jpg', '$2y$10$EFuIlU7XXobUlZkeQhk27.sFSwq6oPmZK9lSISI3d6zBWs9MFuvEC', 1, NULL, NULL, '2023-08-12 22:27:52', '2023-08-12 23:58:14'),
(2, 'Nizar Afif', 'nizarkenzi50@gmail.com', 'nizarafif', 'gebog, kudus, jawa tengah', '081535490963', '2004-07-14', 'image-profile/ferwS0WmAPr4j2WAhGRDHJRCtkLiJFA4jQvdRSd4.jpg', '$2y$10$FIqEhDZG4TBAru7ZZz8y7ODEQDMYo4YE3W0vw0g.iZOd23rMWeb4C', 0, NULL, NULL, '2023-08-13 01:01:25', '2023-08-13 01:21:01');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`id`, `user_id`, `post_id`, `created_at`, `updated_at`) VALUES
(1, 1, 8, '2023-08-23 00:37:39', '2023-08-23 00:37:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_user_id_foreign` (`user_id`),
  ADD KEY `posts_category_id_foreign` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD KEY `views_user_id_foreign` (`user_id`),
  ADD KEY `views_post_id_foreign` (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `views`
--
ALTER TABLE `views`
  ADD CONSTRAINT `views_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `views_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
