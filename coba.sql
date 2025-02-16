CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `layanans` (
  `id` bigint UNSIGNED NOT NULL,
  `foto_sarana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `layanans` (`id`, `foto_sarana`, `created_at`, `updated_at`) VALUES
(1, 'layanans/MzBYdqAxYGSqyEobLja25u4CvkDwzv3mBUhk2LKJ.jpg', '2025-02-09 04:53:02', '2025-02-09 04:53:02'),
(2, 'layanans/AUN4PKXH1YZfbSF8FWQ2LoWNZ8vQ5tn989RUmzUE.png', '2025-02-09 05:00:05', '2025-02-09 05:00:05'),
(3, 'layanans/ZTnQTaxGKqNgllEn5k7UDZpS5hUiqRFh1FrLmgYL.png', '2025-02-09 06:16:44', '2025-02-09 06:16:44');

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_02_07_000741_create_polseks_table', 2),
(6, '2025_02_09_092251_create_layanans_table', 3),
(7, '2025_02_10_005610_create_spktkegiatan_table', 4),
(8, '2025_02_12_144032_create_skcksarana_table', 5);

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


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


CREATE TABLE `polseks` (
  `id` bigint UNSIGNED NOT NULL,
  `nama_polsek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_kapolsek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_kapolsek` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_bangunan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `polseks` (`id`, `nama_polsek`, `foto_kapolsek`, `deskripsi_kapolsek`, `foto_bangunan`, `created_at`, `updated_at`) VALUES
(2, 'Polsek Socha', 'polseks/1XpnRCEQhxHibyCarHrwZqr1pUrhvjOqbQFfsddw.jpg', '<p>Polsek Samalantan dibangun pada tahun 1971 oleh Polres Sambas dan menangani wilayah Monterado, Samalantan dan Lembah Bawang.</p>\r\n<ul>\r\n<li>Pada Tahun 1997 Wilayah Polres Sambas Mekar menjadi 3 Kabupaten diantaranya Polres Singkawang, Polres Sambas dan Polres Bengkayang. Sehingga Polsek Samalantan masuk teritorial Polres Bengkayang dan masih menangani wilayah Samalantan, Monterado dan Lembah Bawang.</li>\r\n<li>Pada Tahun 2003 Polsek Kecamatan Samalantan Mekar menjadi 2 Kecamatan yaitu Monterado memisahkan diri dari Samalantan. Dan Berdirilah Polsek Monterado sendiri.</li>\r\n<li>Pada Tahun 2005 terjadi pemekaran kembali untuk wilayah Kecamatan Lembah Bawang yang memisahkan diri dari kecamatan Samalantan dan hingga kini masih belum memiliki Polsek maupun Polsubsektor.</li>\r\n</ul>', 'polseks/P6Ah9tce7JLyqRji78aEsAPAWdJySxsK30EZkrdr.jpg', '2025-02-08 08:29:10', '2025-02-09 00:12:28');

CREATE TABLE `skcksarana` (
  `id` bigint UNSIGNED NOT NULL,
  `foto_skcksarana` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `skcksarana` (`id`, `foto_skcksarana`, `created_at`, `updated_at`) VALUES
(1, 'skcksarana/hBvL8FDAkpDSBB3GfdxLRWrz2QC1TCpnPonUZw7B.png', '2025-02-12 13:35:15', '2025-02-12 13:35:15');


CREATE TABLE `spktkegiatan` (
  `id` bigint UNSIGNED NOT NULL,
  `foto_spktkegiatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `spktkegiatan` (`id`, `foto_spktkegiatan`, `created_at`, `updated_at`) VALUES
(1, 'spktkegiatan/1q2SyCDNv6pG0RUAsPUyJerFoyrydI4cVqvRUlUh.png', '2025-02-09 21:43:35', '2025-02-09 21:43:35');

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Polres', 'adminpol@gmail.com', NULL, '$2y$12$oR8b7ASdV32aD1KAj.LT9exNhto23jNis1mgrsLCfmZ/hSr22fv5m', NULL, '2025-02-06 17:06:20', '2025-02-11 21:52:44');

ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

ALTER TABLE `layanans`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);
ALTER TABLE `polseks`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `skcksarana`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `spktkegiatan`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `layanans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `polseks`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
ALTER TABLE `skcksarana`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
ALTER TABLE `spktkegiatan`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;