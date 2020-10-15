-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 15 oct. 2020 à 15:30
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd_megane_biblio`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `id_auteur` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `nationalite` varchar(50) NOT NULL,
  `photo_auteur` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id_auteur`, `nom`, `prenom`, `nationalite`, `photo_auteur`) VALUES
(1, 'Rowling', 'Joanne Kathleen', 'Britannique', ''),
(2, 'Despain', 'Bree', 'Américaine', ''),
(3, 'Warman', 'Jessica', 'Américaine', ''),
(4, 'De Lys', 'Alexiane', 'Française', ''),
(5, 'Feist', 'Raymond E.', 'Américain', ''),
(6, 'Schmitt', 'Éric-Emmanuel', 'Franco - Belge', ''),
(7, 'Darnell', 'Melissa', 'Américaine', ''),
(8, 'Stiefvater', 'Maggie', 'Américaine', ''),
(9, 'Adornetto', 'Alexandra', 'Australienne', ''),
(10, 'Fitzpatrick', 'Becca', 'Américaine', ''),
(11, 'Smith', 'L.J.', 'Américaine', ''),
(12, 'Clark', 'Aubrey', 'Américaine', ''),
(13, 'Meyer', 'Stephenie', 'Américaine', ''),
(14, 'Despain', 'Bree', 'AmÃ©ricaine', 'uploads/breedespain.jpg'),
(15, 'Despain', 'Bree', 'AmÃ©ricaine', 'uploads/breedespain.jpg'),
(17, 'Hugo', 'Victor', 'FranÃ§ais', 'uploads/victorhugo.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `bibliotheque`
--

CREATE TABLE `bibliotheque` (
  `id_bibliotheque` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `telephone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `bibliotheque`
--

INSERT INTO `bibliotheque` (`id_bibliotheque`, `nom`, `adresse`, `telephone`) VALUES
(1, 'Biblivre', 'Quai FranÃ§ois Mirac,', '0153795959'),
(2, 'Biblio MÃ©ganes', 'Gare de Noisiel', '0420445298'),
(3, 'Alain Quillot', 'Quai de Brandley', '0153322759'),
(6, 'MalÃ©fices', 'Quai des Monstres', '0666666666'),
(7, 'Transilvabook', 'Avenue des LumiÃ¨res', '0456248595');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

CREATE TABLE `clients` (
  `id_client` int(11) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `prenom` varchar(150) NOT NULL,
  `telephone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `editeur`
--

CREATE TABLE `editeur` (
  `id_editeur` int(11) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `telephone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `editeur`
--

INSERT INTO `editeur` (`id_editeur`, `nom`, `adresse`, `telephone`) VALUES
(1, 'Guallimard', '5, rue Gaston-Gallimard', '01 49 54 42 00'),
(3, 'Flammarion', '37, quai Panhard-et-Levassor', '01 40 51 31 00'),
(4, 'Milan', '1, rond-point du gal. Eisenhower', '05 61 76 64 64'),
(5, 'Beaudelaire', '27, place Bellecour', '04 37 43 61 75'),
(6, 'Minuit', '7, rue Bernard-Palissy', '01 44 39 39 20'),
(7, 'Hachette', '58, rue Jean Bleuzen', '01 43 92 30 00'),
(8, 'Le LÃ©opard MasquÃ©', '90, rue Daguerre', '09 67 00 35 64'),
(9, 'Privat', '10, rue des arts', '05 61 33 77 00'),
(10, 'Le LÃ©opard MasquÃ©s', '90, rue Daguerre', '09 67 00 35 64'),
(11, 'Allary', '5, rue d\'Hauteville', '01 84 17 42 39'),
(12, 'Au Diable Vauvert ', 'La Laune, Vauvert', '0466731656');

-- --------------------------------------------------------

--
-- Structure de la table `emprunter`
--

CREATE TABLE `emprunter` (
  `id_emprunt` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `id_livre` int(11) NOT NULL,
  `date_emprunt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `emprunter`
--

INSERT INTO `emprunter` (`id_emprunt`, `id_client`, `id_livre`, `date_emprunt`) VALUES
(3, 2, 6, '2020-09-19'),
(5, 4, 10, '2020-09-21'),
(6, 5, 1, '2020-09-18');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `id_livre` int(11) NOT NULL,
  `id_bibliotheque` int(11) NOT NULL,
  `titre` varchar(200) NOT NULL,
  `genre` varchar(200) NOT NULL,
  `logo_livre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id_livre`, `id_bibliotheque`, `titre`, `genre`, `logo_livre`) VALUES
(1, 2, 'L\'étranger', 'Littérature Française', ''),
(2, 2, 'Les Âmes Vagabondes', 'Science fiction, Suspense', ''),
(6, 2, 'The Clann, TOME 1 Le Baiser Interdit', 'Romance, Fantastique', ''),
(8, 2, 'The Clann, TOME 2 Mortelle Attirance', 'Romance, Fantastique', ''),
(10, 2, 'Notre Secret', 'Thriller, Folie', ''),
(13, 2, 'The Clann, TOME 3 Ultime Sacrifice', 'Romance, Fantastique', ''),
(14, 2, 'The Clann, TOME 4 Capture', 'Romance, Fantastique', ''),
(15, 3, 'Les loups de Mercy Falls, TOME 1 Frisson', 'Loup-Garou, Secret', ''),
(16, 3, 'Les loups de Mercy Falls, TOME 2 Fièvre', 'Loup-Garou, Secret', ''),
(17, 3, 'Les loups de Mercy Falls, TOME 3 Fusion', 'Loup-Garou, Secret', ''),
(20, 1, 'Journal d\'un Vampire, Tome 1 Le Réveil', 'Bit-Lit, Suspense', ''),
(21, 1, 'Journal d\'un Vampire, Tome 2 Les Ténèbres', 'Bit-Lit, Suspense', ''),
(22, 1, 'Journal d\'un Vampire, Tome 3 Le Retour', 'Bit-Lit, Suspense', ''),
(23, 1, 'Journal d\'un Vampire, Tome 4 Le Royaume Des Ombres', 'Bit-Lit, Suspense', ''),
(24, 1, 'Journal d\'un Vampire, Tome 5 L\'Ultime Crépuscule', 'Bit-Lit, Suspense', ''),
(25, 1, 'Journal d\'un Vampire, Tome 6 Dévoreur', 'Bit-Lit, Suspense', ''),
(26, 1, 'Journal d\'un Vampire, Tome 7 Le Chant de la Lune', 'Bit-Lit, Suspense', ''),
(27, 1, 'Journal d\'un Vampire, Tome 8 Cruelle Destinée', 'Bit-Lit, Suspense', ''),
(28, 1, 'Le Journal d\'un Vampire, Tome 9 Le Cauchemar', 'Bit-Lit, Suspense', ''),
(29, 1, 'Le Journal d\'un Vampire, Tome 10 La Traque', 'Bit-Lit, Suspense', ''),
(30, 1, 'Le Journal d\'un Vampire, Tome 11 Rédemption', 'Bit-Lit, Suspense', ''),
(31, 3, 'Harry Potter, Tome 1 A L\'Ecole des Sorciers', 'Magie, Aventure, Fantasy', ''),
(32, 3, 'Harry Potter, Tome 2 La Chambres des Secrets', 'Magie, Aventure, Fantasy', ''),
(33, 3, 'Harry Potter, Tome 3 Le Prisonnier d\'Azkaban', 'Magie, Aventure, Fantasy', ''),
(34, 3, 'Harry Potter, Tome 4 La Coupe de Feu', 'Magie, Aventure, Fantasy', ''),
(35, 3, 'Harry Potter, Tome 5 L\'Ordre du PhÃ©nix', 'Magie, Aventure, Fantasy', 'hp5.jpg'),
(36, 3, 'Harry Potter, Tome 6 Le Prince de Sang-MÃªlÃ©', 'Magie, Aventure, Fantasy', '5f8586ca6099f-hp6.jpg'),
(37, 3, 'Harry Potter, Tome 7 Les Reliques de la Mort', 'Magie, Aventure, Fantasy', ''),
(38, 2, 'L\'Amour Interdit, Tome 1 Halo', 'Romance Paranormale, Famille', ''),
(39, 2, 'L\'Amour Interdit, Tome Hadès', 'Romance Paranormale, Famille', ''),
(40, 2, 'L\'Amour Interdit, Tome Heaven', 'Romance Paranormale, Famille', ''),
(41, 6, 'Dark Divine, TOME 1 Dark Divine', 'Malédictions, Secret', ''),
(42, 6, 'Dark Divine, TOME 2 Lost Divine', 'Malédictions, Secret', ''),
(43, 6, 'Dark Divine, TOME 3 Grace Divine', 'Malédictions, Secret', ''),
(44, 6, 'Les Anges Déchus, TOME 1 Hush Hush', 'Fantastique, Mystère', ''),
(45, 6, 'Les Anges Déchus, TOME 2 Crescendo', 'Fantastique, Mystère', ''),
(46, 6, 'Les Anges Déchus, TOME 3 Silence', 'Fantastique, Mystère', ''),
(47, 6, 'Les Anges Déchus, TOME 4 Finale', 'Fantastique, Mystère', ''),
(48, 6, 'Le Seigneur des Anneaux, Tome 1 La Communauté de l\'Anneau', 'Quête, Voyage, Guerre', ''),
(49, 6, 'Le Seigneur des Anneaux, Tome 2 Les Deux Tours', 'Quête, Voyage, Guerre', ''),
(50, 6, 'Le Seigneur des Anneaux, Tome 3 Le Retour du Roi', 'Quête, Voyage, Guerre', ''),
(51, 7, 'Hunger Games, TOME 1', 'Dystopie, Action, AmitiÃ©', 'hungergames1.jpg'),
(52, 7, 'Hunger Games, TOME 2 La RÃ©volte', 'Dystopie, Action, AmitiÃ©', 'hungergames2.jpg'),
(53, 7, 'Hunger Games, TOME 3 L\'Embrasement', 'Dystopie, Action, AmitiÃ©', 'hungergames3.jpg'),
(54, 7, 'Le Secret de Lomé, TOME 1', 'Young Adult, Fantasy, Action', ''),
(55, 7, 'Le Secret de Lomé, TOME 2 L\'Odyssée de Lomé', 'Young Adult, Fantasy, Action', ''),
(56, 7, 'Le Secret de Lomé, TOME 3 La Destinée de Lomé', 'Young Adult, Fantasy, Action', ''),
(57, 7, 'La Guerre des ténèbres : L\'Intégrale', 'Mystère, Suspense, Magie', ''),
(58, 7, 'Twilight, TOME 1 Fascination', 'Littérature Jeunesse, Famille, Fantastique, Amour', ''),
(59, 7, 'Twilight, TOME 2 Tentation', 'Littérature Jeunesse, Famille, Fantastique, Amour', ''),
(60, 7, 'Twilight, TOME 3 Hésitation', 'Littérature Jeunesse, Famille, Fantastique, Amour', ''),
(61, 7, 'Twilight, TOME 4 Révélation', 'Littérature Jeunesse, Famille, Fantastique, Amour', ''),
(66, 1, 'Les Aventures des Orphelins Beaudelaire', 'Aventure, Secret', 'beaudelaire.jpg'),
(67, 2, 'Les Misérables, TOME 1', 'Fiction, Historique, Tragédie', ''),
(68, 2, 'Les Misérables, TOME 1', 'Fiction, Historique, Tragédie', ''),
(69, 2, 'L\'Appel du Coucou', 'Policier', 'coucou.jpg'),
(70, 2, 'L\'Appel du Coucou', 'Policier', ''),
(71, 2, 'L\'Appel du Coucou', 'Policier', ''),
(72, 2, 'L\'Appel du Coucou', 'Policier', ''),
(73, 2, 'L\'Appel du Coucou', 'Policier', ''),
(74, 2, 'L\'Appel du Coucou', 'Policier', ''),
(75, 2, 'L\'Appel du Coucou', 'Policier', ''),
(76, 2, 'L\'Appel du Coucou', 'Policier', ''),
(77, 2, 'L\'Appel du Coucou', 'Policier', ''),
(78, 2, 'L\'Appel du Coucou', 'Policier', ''),
(79, 2, 'L\'Appel du Coucou', 'Policier', ''),
(80, 2, 'L\'Appel du Coucou', 'Policier', ''),
(81, 2, 'L\'Appel du Coucou', 'Policier', '');

-- --------------------------------------------------------

--
-- Structure de la table `publier`
--

CREATE TABLE `publier` (
  `id_publication` int(11) NOT NULL,
  `id_editeur` int(11) NOT NULL,
  `id_auteur` int(11) NOT NULL,
  `id_livre` int(11) NOT NULL,
  `date_de_publication` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `publier`
--

INSERT INTO `publier` (`id_publication`, `id_editeur`, `id_auteur`, `id_livre`, `date_de_publication`) VALUES
(22, 8, 7, 6, '2006-01-09'),
(23, 8, 7, 8, '2008-08-15'),
(24, 8, 7, 13, '2009-06-04'),
(25, 8, 7, 14, '2010-11-12'),
(26, 5, 8, 15, '1995-07-05'),
(27, 5, 8, 16, '1998-12-08'),
(28, 5, 8, 17, '1999-03-10'),
(29, 6, 1, 31, '2001-01-01'),
(30, 6, 1, 32, '2002-02-02'),
(31, 6, 1, 33, '2003-03-03'),
(32, 6, 1, 34, '2004-04-04'),
(33, 6, 1, 35, '2005-05-05'),
(34, 6, 1, 36, '2006-06-06'),
(35, 6, 1, 37, '0000-00-00'),
(36, 4, 2, 41, '2017-05-17'),
(37, 4, 2, 42, '2017-09-03'),
(38, 4, 2, 43, '2018-02-13'),
(39, 3, 15, 51, '2018-07-04'),
(40, 3, 15, 52, '0000-00-00'),
(41, 3, 15, 53, '2019-03-29'),
(51, 11, 11, 20, '2012-02-14'),
(52, 11, 11, 21, '2012-10-15'),
(53, 11, 11, 22, '2013-05-19'),
(54, 11, 11, 23, '2013-12-24'),
(55, 11, 11, 24, '2014-06-29'),
(56, 11, 11, 25, '2015-01-09'),
(57, 11, 11, 25, '2015-07-13'),
(58, 11, 11, 26, '2015-12-18'),
(59, 11, 11, 27, '2016-05-27'),
(61, 10, 5, 57, '2019-11-04'),
(62, 10, 12, 28, '2011-05-15'),
(63, 10, 12, 29, '2012-10-05'),
(64, 10, 12, 30, '2013-12-25'),
(65, 9, 14, 48, '1999-12-13'),
(66, 9, 14, 49, '2000-02-01'),
(67, 9, 14, 50, '2001-07-05'),
(69, 7, 1, 81, '2013-04-04');

-- --------------------------------------------------------

--
-- Structure de la table `rendre`
--

CREATE TABLE `rendre` (
  `id_retour` int(11) NOT NULL,
  `id_livre` int(11) NOT NULL,
  `id_client` int(11) NOT NULL,
  `date_retour` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `prenom` varchar(200) NOT NULL,
  `nom` varchar(200) NOT NULL,
  `naissance` date NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `pays` varchar(50) NOT NULL,
  `sexe` varchar(20) NOT NULL,
  `genres` varchar(350) NOT NULL,
  `email` varchar(50) NOT NULL,
  `identifiant` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_users`, `prenom`, `nom`, `naissance`, `telephone`, `adresse`, `pays`, `sexe`, `genres`, `email`, `identifiant`, `role`, `password`) VALUES
(6, 'RÃ©my', 'Rodrigues', '1996-02-03', '0645521425', '52 Rue du GÃ©nÃ©ral Leclerc,1er Ã©tage', 'france', 'homme', 'Ne lit pas !', 'remyrds@gmail.com', 'Captain', 'admin', 'poiuytre'),
(8, 'Anya', 'Envald', '2000-06-04', '0647861345', 'Boulevard Jean Rose', 'france', 'femme', 'Guerre, Macabre', 'anyvald@gmail.com', 'Rose des vents', 'admin', 'guerreetmacabre'),
(9, 'Sully', 'Van', '1975-07-24', '0616450849', 'Avenue LorenÃ§on', 'france', 'homme', 'Biographie, Histoire', 'sullyvanlor@gmail.com', 'Prof', 'admin', 'capitainebio'),
(10, 'Jack', 'Sparrow', '1996-02-03', '0784596231', 'BÃ¢timent Le Black Pearl', 'madagascar', 'homme', 'Aventure, Piraterie, Action', 'jspablackpearl@gmail.com', 'Capitaine Jack Sparrow', 'admin', 'immortalitÃ©'),
(11, 'Magalie', 'Johnson', '1982-08-06', '0705014695', 'Avenue de la Grande Guerre', 'benin', 'femme', 'Biographie', 'magalie.john@gmail.com', 'Magalouche', 'admin', 'huhuhuhu'),
(12, 'Camille', 'Dunon', '1986-11-19', '0689451634', '12 Avenue Rochemort', 'France', 'Femme', 'Guerre, Dystopie, Fiction', 'cam.dunon@yahoo.fr', 'Camadun', '', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id_auteur`);

--
-- Index pour la table `bibliotheque`
--
ALTER TABLE `bibliotheque`
  ADD PRIMARY KEY (`id_bibliotheque`);

--
-- Index pour la table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `editeur`
--
ALTER TABLE `editeur`
  ADD PRIMARY KEY (`id_editeur`);

--
-- Index pour la table `emprunter`
--
ALTER TABLE `emprunter`
  ADD PRIMARY KEY (`id_emprunt`),
  ADD KEY `emprunter_ibfk_1` (`id_client`),
  ADD KEY `emprunter_ibfk_2` (`id_livre`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`id_livre`),
  ADD KEY `id_bibliotheque` (`id_bibliotheque`);

--
-- Index pour la table `publier`
--
ALTER TABLE `publier`
  ADD PRIMARY KEY (`id_publication`),
  ADD KEY `publier_ibfk_2` (`id_livre`),
  ADD KEY `publier_ibfk_3` (`id_auteur`),
  ADD KEY `id_editeur` (`id_editeur`);

--
-- Index pour la table `rendre`
--
ALTER TABLE `rendre`
  ADD PRIMARY KEY (`id_retour`),
  ADD KEY `id_livre` (`id_livre`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id_auteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `bibliotheque`
--
ALTER TABLE `bibliotheque`
  MODIFY `id_bibliotheque` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `clients`
--
ALTER TABLE `clients`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `editeur`
--
ALTER TABLE `editeur`
  MODIFY `id_editeur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `emprunter`
--
ALTER TABLE `emprunter`
  MODIFY `id_emprunt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `id_livre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT pour la table `publier`
--
ALTER TABLE `publier`
  MODIFY `id_publication` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT pour la table `rendre`
--
ALTER TABLE `rendre`
  MODIFY `id_retour` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `emprunter`
--
ALTER TABLE `emprunter`
  ADD CONSTRAINT `emprunter_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `emprunter_ibfk_2` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id_livre`);

--
-- Contraintes pour la table `livre`
--
ALTER TABLE `livre`
  ADD CONSTRAINT `livre_ibfk_1` FOREIGN KEY (`id_bibliotheque`) REFERENCES `bibliotheque` (`id_bibliotheque`);

--
-- Contraintes pour la table `publier`
--
ALTER TABLE `publier`
  ADD CONSTRAINT `publier_ibfk_2` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id_livre`),
  ADD CONSTRAINT `publier_ibfk_3` FOREIGN KEY (`id_auteur`) REFERENCES `auteur` (`id_auteur`),
  ADD CONSTRAINT `publier_ibfk_4` FOREIGN KEY (`id_editeur`) REFERENCES `editeur` (`id_editeur`);

--
-- Contraintes pour la table `rendre`
--
ALTER TABLE `rendre`
  ADD CONSTRAINT `rendre_ibfk_1` FOREIGN KEY (`id_livre`) REFERENCES `livre` (`id_livre`),
  ADD CONSTRAINT `rendre_ibfk_2` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
