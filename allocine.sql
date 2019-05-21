-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 21 mai 2019 à 11:28
-- Version du serveur :  10.1.39-MariaDB
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `allocine`
--

-- --------------------------------------------------------

--
-- Structure de la table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `synopsis` text NOT NULL,
  `Realisateur` text NOT NULL,
  `Product` text NOT NULL,
  `Acteur` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `lien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `film`
--

INSERT INTO `film` (`id`, `titre`, `synopsis`, `Realisateur`, `Product`, `Acteur`, `image`, `lien`) VALUES
(1, 'Avengers:Endgame', 'Un film, enfin je crois', 'Les frères Russo', 'Un producteur, Un producteur, Un producteur, Un producteur, Un producteur, Un producteur, Un producteur, Un producteur.', 'Des acteurs, Des acteurs, Des acteurs, Des acteurs, Des acteurs, Des acteurs, Des acteurs, Des acteurs, Des acteurs, Des acteurs.', 'avengers.jpeg', 'https://www.youtube.com/embed/wV-Q0o2OQjQ'),
(2, 'creed II', 'Un autre film', 'Steven Caple Jr', 'Product de creed', 'Acteurs de creed', 'creed.jpeg', 'https://www.youtube.com/embed/0O3EGU1xH1o'),
(3, 'Le chant du loup', 'Le scenar du film', '3', 'Les prod du chant', 'acteurs du chant', '3.jpg', 'https://www.youtube.com/embed/0-LTTNiGgUA'),
(4, 'Avengers:Infinity war', 'Thanos blablablablablablablablablablablablablablablablablablablablablablablablablablablabla blablablablablablablabla blablablablablablablablablablablablablabla blablablablablablablablablablablabla', '0', 'esrdgthfgh', 'Mort', '4.jpg', 'https://www.youtube.com/embed/eIWs2IUr3Vs'),
(5, 'Dragon 3', 'qsdsgfdgfhgdfsgfhgjhkfdgfgdhfj', '0', 'rhtjygt,rgtkjgt', 'fgj,gktykrjtrhgfkrhjtdf', '5.jpg', 'https://www.youtube.com/embed/JiERv2rc80o'),
(6, 'A star is born', 'csfdgfhg,ndgfsds', '0', 'dhsgjntjrjtrdfhrtdfjge', 'hrtjdfgnrexdfdjrnjdj', '6.jpg', 'https://www.youtube.com/embed/jsg9NxCBzFs'),
(7, 'Asterix', 'fgdsfjgrtfgntr', '0', 'gfhjtfkhtykrhjktygkhtyo', 'hkftyghfdfjgrt\r\n\r\n\r\n\r\n', '7.jpg', 'https://www.youtube.com/embed/klnu4ps7C8w'),
(8, 'Nous finirons ensemble', 'sdsfhgkkl-ktyre', '0', 'jklhytrjgkytj', 'jfklkyjtkjjgtkru-t', '8.jpg', 'https://www.youtube.com/embed/RjfF0V5blEE'),
(9, 'La dame blanche', 'gdfhjlkm!lmjkhyjgtfh', '0', 'hrtjkumlu:iyjuylkgfb', 'hdrtjky,hu;j:khèyulgh', '9.jpg', 'https://www.youtube.com/embed/NlVWRyA8eAc'),
(10, 'Dumbo', 'vfgehrfj,trfgrcvn', '0', 'gfd,gfrbt fb,; gff', ',cgfbngf,cv\r\n\r\n\r\n', '10.jpg', 'https://www.youtube.com/embed/G-Ldfp_5lmg'),
(11, 'Matrix', 'fxc', 'lES FRERES WATCHOVSKY', 'cxbv', 'KEANU REEVES', '11.png', 'https://www.youtube.com/embed/hIjeGNy8jKc');

-- --------------------------------------------------------

--
-- Structure de la table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `realisateur`
--

CREATE TABLE `realisateur` (
  `id` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Naissance` text NOT NULL,
  `Filmographie` text NOT NULL,
  `Biographie` text NOT NULL,
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `realisateur`
--

INSERT INTO `realisateur` (`id`, `Nom`, `Naissance`, `Filmographie`, `Biographie`, `img`) VALUES
(1, 'Les frères Russo', 'Naissance', 'Filmo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n', 'russo.png'),
(2, 'Steven Caple Jr', 'Naissance2', 'Filmo2', 'Bio2', 'Caple.png'),
(11, 'Les Freres Watchovsky', '1990', '2', 'esrdtyjuiom', 'watchovsky.png');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(6, 'Admin', '$2y$12$BO.b7e0HJAYksTcrvUD2VuhkTaXQyfpMPWjrXcVCyIHBE2kh63KZO');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `realisateur`
--
ALTER TABLE `realisateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT pour la table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `realisateur`
--
ALTER TABLE `realisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
