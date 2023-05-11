-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 12 avr. 2023 à 15:08
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `meetbasic`
--

-- --------------------------------------------------------

--
-- Structure de la table `amities`
--

CREATE TABLE `amities` (
                           `id` bigint(20) UNSIGNED NOT NULL,
                           `demandeur_id` bigint(20) UNSIGNED NOT NULL,
                           `receveur_id` bigint(20) UNSIGNED NOT NULL,
                           `accepter` int(11) NOT NULL DEFAULT 0,
                           `created_at` timestamp NULL DEFAULT NULL,
                           `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `amities`
--

INSERT INTO `amities` (`id`, `demandeur_id`, `receveur_id`, `accepter`, `created_at`, `updated_at`) VALUES
                                                                                                        (2, 10, 6, 1, NULL, NULL),
                                                                                                        (3, 8, 2, 0, NULL, NULL),
                                                                                                        (4, 3, 5, 1, NULL, NULL),
                                                                                                        (5, 3, 1, 0, NULL, NULL),
                                                                                                        (6, 1, 7, 0, NULL, NULL),
                                                                                                        (7, 4, 7, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `interets`
--

CREATE TABLE `interets` (
                            `id` bigint(20) UNSIGNED NOT NULL,
                            `nomInteret` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
                            `created_at` timestamp NULL DEFAULT NULL,
                            `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `interets`
--

INSERT INTO `interets` (`id`, `nomInteret`, `created_at`, `updated_at`) VALUES
                                                                            (1, 'Sport', NULL, NULL),
                                                                            (2, 'CinÃ©ma', NULL, NULL),
                                                                            (3, 'Musique', NULL, NULL),
                                                                            (4, 'Mode', NULL, NULL),
                                                                            (5, 'Jeux Video', NULL, NULL),
                                                                            (6, 'Cuisine', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `interet_user`
--

CREATE TABLE `interet_user` (
                                `id` bigint(20) UNSIGNED NOT NULL,
                                `user_id` bigint(20) UNSIGNED NOT NULL,
                                `interet_id` bigint(20) UNSIGNED NOT NULL,
                                `created_at` timestamp NULL DEFAULT NULL,
                                `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `interet_user`
--

INSERT INTO `interet_user` (`id`, `user_id`, `interet_id`, `created_at`, `updated_at`) VALUES
                                                                                           (1, 7, 4, NULL, NULL),
                                                                                           (2, 7, 1, NULL, NULL),
                                                                                           (3, 2, 4, NULL, NULL),
                                                                                           (4, 2, 6, NULL, NULL),
                                                                                           (5, 3, 2, NULL, NULL),
                                                                                           (6, 3, 3, NULL, NULL),
                                                                                           (7, 4, 1, NULL, NULL),
                                                                                           (8, 4, 5, NULL, NULL),
                                                                                           (9, 1, 3, NULL, NULL),
                                                                                           (10, 1, 5, NULL, NULL),
                                                                                           (11, 1, 1, NULL, NULL),
                                                                                           (12, 5, 1, NULL, NULL),
                                                                                           (13, 6, 4, NULL, NULL),
                                                                                           (14, 6, 2, NULL, NULL),
                                                                                           (15, 8, 6, NULL, NULL),
                                                                                           (16, 8, 4, NULL, NULL),
                                                                                           (17, 9, 5, NULL, NULL),
                                                                                           (18, 9, 1, NULL, NULL),
                                                                                           (19, 10, 3, NULL, NULL),
                                                                                           (20, 10, 6, NULL, NULL),
                                                                                           (21, 10, 5, NULL, NULL);

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
                                                          (1, '2014_10_12_000000_create_users_table', 1),
                                                          (2, '2014_10_12_100000_create_password_resets_table', 1),
                                                          (3, '2019_08_19_000000_create_failed_jobs_table', 1),
                                                          (4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
                                                          (5, '2023_03_10_143650_create_interets_table', 1),
                                                          (6, '2023_03_10_144249_create_interet_user_table', 1),
                                                          (7, '2023_03_10_145103_create_amities_table', 1);

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
                         `role` int(11) NOT NULL DEFAULT 0,
                         `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'img/default.png',
                         `dateNaissance` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `localisation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `sexe` enum('femme','homme','autre') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `orientation` enum('femme','homme','autre') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `biographie` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
                         `created_at` timestamp NULL DEFAULT NULL,
                         `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `photo`, `dateNaissance`, `localisation`, `sexe`, `orientation`, `biographie`, `remember_token`, `created_at`, `updated_at`) VALUES
                                                                                                                                                                                                                      (1, 'Stella', 'stella.m@gmail.com', NULL, '$2y$10$yfcnEiviiYgPl1rnE4.iQeLrRYJ.EDmSCmS4KfLO9TNkGM18ZE2aW', 1, 'http://localhost:8000/img/default.png', '20/01/1998', 'Paris', 'femme', 'homme', 'Je suis un peu comme Wonder Woman', NULL, NULL, '2023-03-26 13:26:44'),
                                                                                                                                                                                                                      (2, 'Klea', 'klea@gmail.com', NULL, '$2y$10$.gs2OahwKc4ljErUPvYK2ul5RXe5g/xOBpcHiJvIqNCUaZHLj6mIe', 0, 'img/default.png', '05/09/2003', 'Paris', 'femme', 'femme', NULL, NULL, NULL, NULL),
                                                                                                                                                                                                                      (3, 'Marc', 'marcDevile@gmail.com', NULL, '1234', 1, 'img/default.png', '30/11/2004', 'Bordeaux', 'homme', 'femme', NULL, NULL, NULL, NULL),
                                                                                                                                                                                                                      (4, 'Laura', 'laura.F@gmail.com', NULL, '1234', 0, 'img/default.png', '02/09/2000', 'Deauville', 'femme', 'homme', NULL, NULL, NULL, NULL),
                                                                                                                                                                                                                      (5, 'Sarah', 'sarah_merldi@gmail.com', NULL, '1234', 0, 'img/default.png', '13/12/2001', 'Clichy', 'femme', 'homme', NULL, NULL, NULL, NULL),
                                                                                                                                                                                                                      (6, 'Ben', 'ben@gmail.com', NULL, '1234', 0, 'img/default.png', '22/03/1992', 'Marseille', 'homme', 'homme', NULL, NULL, NULL, NULL),
                                                                                                                                                                                                                      (7, 'Jordan', 'jordan@gmail.com', NULL, '1234', 1, 'img/default.png', '12/06/1998', 'Lyon', 'homme', 'femme', NULL, NULL, NULL, NULL),
                                                                                                                                                                                                                      (8, 'Arthur', 'Arthur@gmail.com', NULL, '1234', 0, 'img/default.png', '25/11/1989', 'OrlÃ©ans', 'autre', 'femme', NULL, NULL, NULL, NULL),
                                                                                                                                                                                                                      (9, 'Celine', 'Celine.D@gmail.com', NULL, '1234', 0, 'img/default.png', '25/09/1985', 'Toulouse', 'autre', 'femme', NULL, NULL, NULL, NULL),
                                                                                                                                                                                                                      (10, 'Pierre', 'Pierre.M@gmail.com', NULL, '1234', 0, 'img/default.png', '15/09/1996', 'Nice', 'homme', 'homme', NULL, NULL, NULL, NULL),
                                                                                                                                                                                                                      (12, 'test', 'dfvm.1310@hotmail.com', NULL, '$2y$10$GdD0Yzh28lkPhwJRg4.JtOagA09H.lzdLMqr/0bAihX6RwSpeDisW', 0, 'img/default.png', NULL, NULL, NULL, NULL, NULL, NULL, '2023-04-05 10:00:31', '2023-04-05 10:00:31'),
                                                                                                                                                                                                                      (30, 'aaaa', 'sss@sss', NULL, '$2y$10$Qb1HFyW/JQ3JsdUhz6hQYOsfcokYajU3TTpv52c/gI5s7lJzS9wmO', 0, 'img/default.png', '2023-04-04', NULL, NULL, NULL, NULL, NULL, '2023-04-07 12:19:22', '2023-04-07 12:19:22'),
                                                                                                                                                                                                                      (31, 'gagnant', 'fdfdgf@rfft', NULL, '$2y$10$yfcnEiviiYgPl1rnE4.iQeLrRYJ.EDmSCmS4KfLO9TNkGM18ZE2aW', 0, 'img/default.png', '1999-03-28', NULL, NULL, NULL, NULL, NULL, '2023-04-07 12:24:23', '2023-04-07 12:24:23'),
                                                                                                                                                                                                                      (32, 'Feur', 'euhjonasarrete@j', NULL, '$2y$10$gBNAz/Y.cDtwCHiujPo7BOtQS9zU6UQ0xpAJTRU.d9zRPT15OyNiG', 0, 'img/default.png', '2003-10-13', NULL, NULL, NULL, NULL, NULL, '2023-04-07 12:27:14', '2023-04-07 12:27:14'),
                                                                                                                                                                                                                      (33, 'pessi', 'feurefjio@gf', NULL, '$2y$10$dqg3Vkg1W6JdqW2Js4PpRe/j1OBe3oguDl86mQG8WJCGAwnisdC9K', 0, 'http://localhost:8000/img/default.png', '2004-10-13', NULL, 'femme', 'homme', NULL, NULL, '2023-04-12 08:00:37', '2023-04-12 10:00:17'),
                                                                                                                                                                                                                      (34, 'Gorille', 'gorrille@gmail.com', NULL, '$2y$10$6fH8B3yfDYDG2VosMg/fzeeJyXUl.81TrcBkqbLt5KwVOC.Vzahqy', 0, 'img/default.png', '2004-10-13', NULL, 'homme', 'autre', NULL, NULL, '2023-04-12 08:04:52', '2023-04-12 08:04:52'),
                                                                                                                                                                                                                      (35, '4Test8585', 'feurtert@gmail.com', NULL, '$2y$10$9YUYdfI1U6bLiJgMhIhpB.h6291omBxm79ic0kW110cZkQ9sZbTYu', 0, 'img/default.png', '2004-10-13', NULL, 'femme', 'homme', NULL, NULL, '2023-04-12 08:14:12', '2023-04-12 08:14:12');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `amities`
--
ALTER TABLE `amities`
    ADD PRIMARY KEY (`id`),
  ADD KEY `amities_demandeur_id_foreign` (`demandeur_id`),
  ADD KEY `amities_receveur_id_foreign` (`receveur_id`);

--
-- Index pour la table `interets`
--
ALTER TABLE `interets`
    ADD PRIMARY KEY (`id`);

--
-- Index pour la table `interet_user`
--
ALTER TABLE `interet_user`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`,`interet_id`),
  ADD UNIQUE KEY `user_id_2` (`user_id`,`interet_id`),
  ADD KEY `interet_user_interet_id_foreign` (`interet_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT pour la table `amities`
--
ALTER TABLE `amities`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `interets`
--
ALTER TABLE `interets`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `interet_user`
--
ALTER TABLE `interet_user`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
    MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
    MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `amities`
--
ALTER TABLE `amities`
    ADD CONSTRAINT `amities_demandeur_id_foreign` FOREIGN KEY (`demandeur_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `amities_receveur_id_foreign` FOREIGN KEY (`receveur_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `interet_user`
--
ALTER TABLE `interet_user`
    ADD CONSTRAINT `interet_user_interet_id_foreign` FOREIGN KEY (`interet_id`) REFERENCES `interets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `interet_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
