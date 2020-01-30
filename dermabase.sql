-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 30 jan. 2020 à 20:01
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP :  7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dermabase`
--

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(13, '2014_10_12_000000_create_users_table', 1),
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2020_01_20_112209_create_posts_table', 1),
(17, '2020_01_29_105248_add_user_id_to_posts', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `meta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `meta`, `path`, `created_at`, `updated_at`, `user_id`) VALUES
(1, '/storage/store/ISIC_0000000.json', '/storage/store/ISIC_0000000.jpg', '2020-01-29 08:59:42', '2020-01-29 08:59:42', 0),
(2, '/storage/store/ISIC_0000001.json', '/storage/store/ISIC_0000001.jpg', '2020-01-29 10:28:07', '2020-01-29 10:28:07', 1),
(3, '/storage/store/ISIC_0000002.json', '/storage/store/ISIC_0000002.jpg', '2020-01-29 10:33:14', '2020-01-29 10:33:14', 1),
(4, '/storage/store/ISIC_0000003.json', '/storage/store/ISIC_0000003.jpg', '2020-01-29 10:35:33', '2020-01-29 10:35:33', 1),
(5, '/storage/store/ISIC_0000004.json', '/storage/store/ISIC_0000004.jpg', '2020-01-29 10:37:33', '2020-01-29 10:37:33', 1),
(10, '/storage/store/ISIC_0000005.json', '/storage/store/ISIC_0000005.jpg', '2020-01-29 12:27:52', '2020-01-29 12:27:52', 1),
(11, '/storage/store/ISIC_0000006.json', '/storage/store/ISIC_0000006.jpg', '2020-01-29 12:28:11', '2020-01-29 12:28:11', 1),
(12, '/storage/store/ISIC_0000007.json', '/storage/store/ISIC_0000007.jpg', '2020-01-29 12:28:40', '2020-01-29 12:28:40', 1),
(13, '/storage/store/ISIC_0000008.json', '/storage/store/ISIC_0000008.jpg', '2020-01-29 12:28:55', '2020-01-29 12:28:55', 1),
(14, '/storage/store/ISIC_0000009.json', '/storage/store/ISIC_0000009.jpg', '2020-01-29 12:29:18', '2020-01-29 12:29:18', 1),
(15, '/storage/store/ISIC_0000010.json', '/storage/store/ISIC_0000010.jpg', '2020-01-29 12:29:45', '2020-01-29 12:29:45', 1),
(16, '/storage/store/ISIC_0000011.json', '/storage/store/ISIC_0000011.jpg', '2020-01-30 05:14:26', '2020-01-30 05:14:26', 2),
(17, '/storage/store/ISIC_0000012.json', '/storage/store/ISIC_0000012.jpg', '2020-01-30 13:32:03', '2020-01-30 13:32:03', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'anis', 'anisderris@gmail.com', NULL, '$2y$10$bi9Fw2gDJKGJ4X3z9CFicOwz4.CUQxcSfN8UxlkNptkxlwDpVuQei', 'ynH6HjNNh3inhN533B3FFlWZ7BPWugZWuF0GCDRBWIKqqemjEandUWelCQOY', '2020-01-29 08:24:37', '2020-01-29 08:24:37'),
(2, 'hichem', 'hlb@gmail.com', NULL, '$2y$10$HhkeVa2tPEW1qhJy5Kqf6eG5oVFF47c0Jhgb6FqgkwbgeVLevy6r6', NULL, '2020-01-29 10:47:53', '2020-01-29 10:47:53');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
