-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2023 at 12:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokobuku`
--

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
-- Table structure for table `kategori_produk`
--

CREATE TABLE `kategori_produk` (
  `id` int(11) NOT NULL,
  `genre` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `kategori_produk`
--

INSERT INTO `kategori_produk` (`id`, `genre`) VALUES
(1, 'action'),
(2, 'romance'),
(3, 'horor'),
(4, 'inspiratif'),
(5, 'comedy'),
(6, 'thriller'),
(7, 'fantasi');

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
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `jenis_kelamin` char(1) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `pesanan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `jenis_kelamin`, `email`, `pesanan_id`) VALUES
(2, 'Ratu', 'P', 'ratu@gmail.com', 2),
(3, 'Jale', 'L', 'Jaialeori@gmail.com', 4),
(4, 'Latia', 'P', 'latia@gmail.com', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(45) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id`, `tanggal`, `jumlah`, `harga`, `produk_id`) VALUES
(1, '2023-07-03', 2, 140000, 1);

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
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `total` double DEFAULT NULL,
  `produk_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `tanggal`, `total`, `produk_id`) VALUES
(1, '2023-04-10', 4, 6),
(2, '2023-04-21', 5, 11),
(3, '2023-05-03', 7, 5),
(4, '2023-05-08', 8, 1),
(5, '2023-05-24', 3, 9),
(6, '2023-06-04', 2, 10),
(7, '2023-06-21', 6, 12);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `judul` varchar(45) DEFAULT NULL,
  `penulis` varchar(45) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `harga_jual` double DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `min_stok` int(11) DEFAULT NULL,
  `kategori_produk_id` int(11) NOT NULL,
  `sinopsis` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `judul`, `penulis`, `image`, `harga_beli`, `harga_jual`, `stok`, `min_stok`, `kategori_produk_id`, `sinopsis`) VALUES
(1, 'Matahari Minor', 'tere liye', 'https://www.bukukita.com/babacms/displaybuku/119523_f.jpg', 50000, 75000, 15, 5, 1, 'Petualangan ini tidak kalah seru, tidak kalah menegangkan. Dan sungguh, aku mohon maaf, kalian mungkin berteriak kesal saat tiba di halaman terakhir buku ini.'),
(5, 'Harry Potter and The Sorcerer\'s Stone', 'J.K Rowling', 'https://th.bing.com/th/id/OIP.WuuMk8nSuIHsvno6C8WYngHaLH?w=204&h=306&c=7&r=0&o=5&pid=1.7', 95000, 120000, 20, 2, 7, 'HARRY POTTER belum pernah jadi bintang tim Quidditch, mencetak angka sambil terbang tinggi naik sapu. Di tempat itu dia tak hanya menemukan teman, olahraga udara, dan sihir dalam segala hal, dari pelajaran sampai makanan, melainkan juga takdirnya untuk menjadi penyihir besar kalau Harry berhasil selamat berhadapan dengan musuh bebuyutannya.'),
(6, 'Daun yang Jatuh Tidak Pernah Membenci Angin', 'Tere Liye', 'https://www.bukukita.com/babacms/displaybuku/106242_f.jpg', 60000, 85000, 18, 3, 2, 'Biarlah aku luruh ke bumi seperti sehelai daun... daun yang tidak pernah membenci angin meski harus terenggutkan dari tangkai pohonnya.'),
(9, 'Jurnal Risa', 'Risa Saraswati', 'https://www.bukukita.com/babacms/displaybuku/116062_f.jpg', 45000, 70000, 25, 2, 3, 'Tidak pernah sedikit pun terpikir, ini adalah sebuah awal yang perlahan membentuk karakter kami. Sekumpulan penakut yang mau tak mau menjadi berani karena tak bisa menutup mata dan telinga dari teror'),
(10, 'Negeri 5 Menara', 'A. Fuandi', 'https://www.bukukita.com/babacms/displaybuku/22506_f.jpg', 50000, 80000, 20, 4, 4, 'Ikuti perjalanan hidup yang inspiratif ini langsung dari mata para pelakunya. Negeri Lima Menara adalah buku pertama dari sebuah trilogi.'),
(11, 'Koala Kumal', 'Raditya Dika', 'https://www.bukukita.com/babacms/displaybuku/101537_f.jpg', 70000, 90000, 27, 5, 5, 'Mulai dari renggangnya hubungan pertemanan, perasaan yang berubah kepada orang yang sama, hubungan orangtua dan anak, hingga patah hati terhebat yang mengubah cara pandang terhadap cinta.'),
(12, 'The Good Son', 'Jeong You', 'https://www.bukukita.com/babacms/displaybuku/110825_f.jpg', 80000, 95000, 22, 5, 6, 'A shocking and addictive psychological thriller, The Good Son explores the mysteries of mind and memory, and the twisted relationship between a mother and son, with incredible urgency.'),
(13, 'Bumi', 'Tere Liye', 'https://www.bukukita.com/babacms/displaybuku/117631_f.jpg', 70000, 95000, 25, 3, 1, 'Namaku Raib, usiaku 15 tahun, Aku sama seperti remaja kebanyakan, kecuali satu hal. Sesuatu yang kusimpan sendiri sejak kecil. Sesuatu yang menakjubkan. Namaku Raib. Dan aku bisa menghilang.'),
(14, 'Harry Potter and the Chamber of Secrets', 'J.K Rolling', 'https://th.bing.com/th/id/OIP.kgRAE9oSlo0Li9zGrj0YyQHaLH?w=115&h=180&c=7&r=0&o=5&pid=1.7', 90000, 105000, 25, 3, 7, 'Ada yang mengubah murid-murid Hogwarts menjadi batu. Mungkinkah pelakunya Draco Malfoy yang jahat, pesaing utama Harry? Mungkinkah dia Hagrid, yang riwayat masa lalunya akhirnya terbongkat? Atau, mungkinkah pelakunya anak yang paling dicurigai semua orang di Hogwarts yakni Harry Potter sendiri???'),
(15, 'Pulang Pergi', 'Tere Liye', 'https://cdn.gramedia.com/uploads/items/pulang-pergi_tere_liye.jpeg', 55000, 75000, 25, 3, 2, 'Buku ini bercerita tentang Bujang yang kembali harus berpetualang setelah pergi dan pulang. Saat Bujang sedang berada di pusara mamak dan bapaknya, Bujang mendapatkan sebuah pesan dari Krestiny Otets, pemimpin brotherhood Bratva.'),
(16, 'Gerbang Dialog Danur', 'Risa Saraswati', 'https://www.bukukita.com/babacms/displaybuku/99719_f.jpg', 50000, 75000, 15, 4, 3, 'Jauh dari kehidupan \"normal\" adalah harga yang harus dibayar atas kebahagiaanku bersama mereka. Dan, semua itu harus berubah ketik persahabatan kami meminta lebih, yaitu kebersamaan selamanya. Kini aku mulai menyadari bahwa hidup ini bukan hanya milikku seorang.  Namaku Risa. Aku bisa melihat \'mereka\'.'),
(17, 'The Art of Happiness', 'Khalil A Khafari', 'https://th.bing.com/th/id/OIP.SR-yW_gEoUqwG1HGAK4mMgHaLG?w=204&h=306&c=7&r=0&o=5&pid=1.7', 65000, 70000, 10, 3, 4, 'Prof. Dr. Khavari di sini coba membantu kita meraih kebahagiaan personal di dunia dan akhirat dengan panduan psikologis yang amat praktis. Dia juga melengkapinya dengan teori-teori psikologi dan saripati ajaran-ajaran berbagai agama besar dunia. Buku ini diperuntukkan bagi siapa sajasemua pemeluk Islam, Kristen, Katolik, Yahudi, Buddha, Hinduyang sampai sekarang belum merasakan kebahagiaan.'),
(18, 'Marmut Merah Jambu', 'Raditya Dika', 'https://www.bukukita.com/babacms/displaybuku/101540_f.jpg', 60000, 75000, 22, 5, 5, 'Marmut Merah Jambu adalah kumpulan tulisan komedi Raditya Dika. Sebagian besar dari tiga belas tulisan ngawur di dalamnya adalah pengalaman dan observasi Radit dalam menjalani hal paling absurd di dunia: jatuh cinta.'),
(19, 'Have You Seen Her', 'Catherine mcKenzie', 'https://th.bing.com/th/id/OIP.7PQQUh8lDi5gU49HIDMNyAHaLL?w=113&h=180&c=7&r=0&o=5&pid=1.7', 70000, 90000, 28, 3, 6, 'When these three women cross paths, Cassie’s past catches up with her, and the shocking consequences ripple out far beyond what any could have imagined in this unputdownable thriller.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role` enum('admin','manager','pelanggan') NOT NULL DEFAULT 'pelanggan',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Azza', 'sharmaazzahrah@gmail.com', NULL, '$2y$10$X9Pa/dZPTNTbA9Q3GopCwOQEirGHFKzQ2IgBBqSapu2bA9hBouE4G', NULL, 'admin', '2023-07-04 09:44:41', '2023-07-04 09:44:41'),
(3, 'Akmal', 'akmalmaulana075@gmail.com', NULL, '$2y$10$j3CteuorlV1K6Omuplsmie98UJHpzuZzfYVu7G.n96fZal1wKfPMS', NULL, 'admin', '2023-07-11 22:20:26', '2023-07-11 22:20:26'),
(4, 'Akmal', 'akmalmaulana123@gmail.com', NULL, '$2y$10$hZqEuklQiR7KPmgouuKcc.uUXcE.Kv/8UvC2kCNU7vyYyyOabhrKC', NULL, 'pelanggan', '2023-07-14 00:16:58', '2023-07-14 00:16:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pelanggan_pesanan1_idx` (`pesanan_id`);

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pembelian_produk1_idx` (`produk_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pesanan_produk1_idx` (`produk_id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_produk_kategori_produk1_idx` (`kategori_produk_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_produk`
--
ALTER TABLE `kategori_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD CONSTRAINT `fk_pelanggan_pesanan1` FOREIGN KEY (`pesanan_id`) REFERENCES `pesanan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `fk_pembelian_produk1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `fk_pesanan_produk1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_produk_kategori_produk1` FOREIGN KEY (`kategori_produk_id`) REFERENCES `kategori_produk` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
