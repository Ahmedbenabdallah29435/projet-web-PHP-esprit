-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 21 mai 2021 à 19:35
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `webmaster1`
--

-- --------------------------------------------------------

--
-- Structure de la table `access`
--

CREATE TABLE `access` (
  `ida` int(11) NOT NULL,
  `noma` varchar(11) NOT NULL,
  `prixa` int(11) NOT NULL,
  `idc` int(11) NOT NULL,
  `image` blob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `access`
--

INSERT INTO `access` (`ida`, `noma`, `prixa`, `idc`, `image`) VALUES
(5, 'ahmed', 3, 4, 0x67616c6c6572792d362e706e67),
(159, 'ess', 68, 0, 0x646f6320283135292e706466),
(555, 'hh', 11, 122, 0x70726f647563742d362e6a7067);

-- --------------------------------------------------------

--
-- Structure de la table `accessoire`
--

CREATE TABLE `accessoire` (
  `id` int(20) NOT NULL,
  `categories` varchar(20) NOT NULL,
  `matiere` varchar(20) NOT NULL,
  `prix` int(20) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `accessoire`
--

INSERT INTO `accessoire` (`id`, `categories`, `matiere`, `prix`, `image`) VALUES
(16, 'Animaux', 'hdhdb', 200, 'collier chien.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `accessoires`
--

CREATE TABLE `accessoires` (
  `id` int(20) NOT NULL,
  `categories` varchar(20) NOT NULL,
  `matiere` varchar(20) NOT NULL,
  `prix` int(20) NOT NULL,
  `image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `accessoires`
--

INSERT INTO `accessoires` (`id`, `categories`, `matiere`, `prix`, `image`) VALUES
(16, 'Animaux', 'hdhdb', 200, 'collier chien.jpg'),
(123545, 'fdssdf', 'dffds', 2222, ''),
(0, '', '', 0, ''),
(12354, 'fdssdf', 'drgg', 222, '');

-- --------------------------------------------------------

--
-- Structure de la table `anim`
--

CREATE TABLE `anim` (
  `id` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `age` int(11) NOT NULL,
  `couleur` varchar(11) NOT NULL,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `anim`
--

INSERT INTO `anim` (`id`, `name`, `age`, `couleur`, `image`) VALUES
(22, 'll', 2, 'kk', 0x67616c6c6572792d332e706e67),
(88, 'll', 55, 'll', 0x67616c6c6572792d31302e706e67),
(414, 'hamza', 4, 'yuyu', 0x67616c6c6572792d362e706e67),
(555, 'jj', 22, 'jj', 0x67616c6c6572792d392e706e67);

-- --------------------------------------------------------

--
-- Structure de la table `animaux`
--

CREATE TABLE `animaux` (
  `id_animaux` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `typee` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `couleur` varchar(20) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `animaux`
--

INSERT INTO `animaux` (`id_animaux`, `sex`, `typee`, `age`, `prix`, `categorie`, `couleur`, `image`) VALUES
(2, 'male', 'un chat blanc hybride', 11, 3500, 'chat', 'noir et blanc', 'chat.png'),
(3, 'male', 'labrador', 12, 500, 'chien', 'noir et feu', 'labrador.png');

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `type` varchar(150) NOT NULL,
  `description` longtext NOT NULL,
  `nom` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `datef` date NOT NULL,
  `categorie` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `type`, `description`, `nom`, `date`, `datef`, `categorie`, `image`) VALUES
(105, 'ARTICLE DE RECHERCHE', 'Enter text here... 5', 'azfzda', '2021-05-08', '2021-05-21', 'lies aux animaux', 'album3.jpg'),
(110, 'Article sur une Promotion', 'un chat blanc veut trouver une famille pour l\'adopter\r\nazeazzae  ze aze  zae za eza zea eazezaeza azezaez aze zea ze\r\n ae za aez aze\r\n eza zeaazeze a\r\n zae zezez eazea zea\r\nez zaee zaaz e', 'ENORME PROMTION 100', '2021-05-06', '2021-05-14', 'lies aux animaux', 'chat.png');

-- --------------------------------------------------------

--
-- Structure de la table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `book_name` varchar(25) NOT NULL,
  `book_publisher` varchar(20) DEFAULT NULL,
  `book_price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `cat`
--

CREATE TABLE `cat` (
  `idc` int(11) NOT NULL,
  `nomc` varchar(11) NOT NULL,
  `occ` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `cat`
--

INSERT INTO `cat` (`idc`, `nomc`, `occ`) VALUES
(122, 'Nichegggggg', 0),
(222, 'food', 12);

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `nbrP` int(11) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `evenement`
--

INSERT INTO `evenement` (`id`, `nom`, `nbrP`, `date`, `type`) VALUES
(56, 'ahmed', 0, '2021-05-21', 'terrte');

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE `lieu` (
  `lieu` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `lieu`
--

INSERT INTO `lieu` (`lieu`, `adress`, `id`) VALUES
('gfdgfd', 'fgdgf', 56);

-- --------------------------------------------------------

--
-- Structure de la table `plante`
--

CREATE TABLE `plante` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `longeur` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `type` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `plante`
--

INSERT INTO `plante` (`id`, `nom`, `longeur`, `prix`, `type`, `image`) VALUES
(1, 'rose', 20, 7, 'Plante', 'rose.jpg'),
(2, 'Cactus', 35, 30, 'Plante', 'cactus.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `promoanimaux`
--

CREATE TABLE `promoanimaux` (
  `id_promoanimaux` int(11) NOT NULL,
  `id_animaux` int(11) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `typee` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `couleur` varchar(20) NOT NULL,
  `image` varchar(150) NOT NULL,
  `dated` date NOT NULL,
  `datef` date NOT NULL,
  `prix_promotions` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `promoanimaux`
--

INSERT INTO `promoanimaux` (`id_promoanimaux`, `id_animaux`, `sex`, `typee`, `age`, `prix`, `categorie`, `couleur`, `image`, `dated`, `datef`, `prix_promotions`) VALUES
(31, 2, 'male', 'un chat blanc hybride', 3, 150, 'chat', 'blanc', 'chat.png', '2021-05-16', '2021-05-27', 100),
(33, 3, 'male', 'labrador', 12, 500, 'chien', 'noir et feu', 'labrador.png', '2021-05-07', '2021-05-30', 10),
(34, 3, 'male', 'labrador', 12, 500, 'chien', 'noir et feu', 'labrador.png', '2021-05-08', '2021-05-30', 20);

-- --------------------------------------------------------

--
-- Structure de la table `promoplante`
--

CREATE TABLE `promoplante` (
  `id_promo` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `longeur` int(11) NOT NULL,
  `prix` int(11) NOT NULL,
  `type` varchar(150) NOT NULL,
  `image` varchar(150) NOT NULL,
  `dated` date NOT NULL,
  `datef` date NOT NULL,
  `prix_promoplante` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `promoplante`
--

INSERT INTO `promoplante` (`id_promo`, `id`, `nom`, `longeur`, `prix`, `type`, `image`, `dated`, `datef`, `prix_promoplante`) VALUES
(8, 2, 'plante1', 50, 200, 'Plante', 'cactus.jpg', '2021-05-18', '2021-05-30', 20),
(10, 1, 'rose', 20, 7, 'Plante', 'rose.jpg', '2021-05-10', '2021-05-30', 7);

-- --------------------------------------------------------

--
-- Structure de la table `reclamation`
--

CREATE TABLE `reclamation` (
  `id_reclamation` int(11) NOT NULL,
  `date_reclamation` date NOT NULL,
  `objet_reclamation` text CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET latin1 NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `reclamation`
--

INSERT INTO `reclamation` (`id_reclamation`, `date_reclamation`, `objet_reclamation`, `description`, `id_client`) VALUES
(19, '2021-05-07', 'reclamation liéé au plante', 'moetaz mdagdeg', 30),
(20, '2021-05-16', 'reclamation liéé au accessoires', 'mamamama', 30),
(22, '2021-05-07', 'reclamation liéé au animaux', 'sfddsxfsfsd', 0),
(23, '2021-05-07', 'reclamation liéé au accessoires', 'zree', 6),
(24, '2021-05-09', 'reclamation liéé au accessoires', 'efssffe', 16),
(25, '2021-05-19', 'reclamation liéé au plante', 'drgdrr', 16),
(26, '2021-05-07', 'reclamation liéé au plante', 'dgfg', 40),
(27, '2021-05-14', 'reclamation liéé au accessoires', 'ssds', 0),
(28, '2021-05-29', 'reclamation liéé au plante', 'vhgv', 0),
(29, '2021-05-09', 'reclamation liéé au plante', 'szzss', 0),
(30, '2021-05-21', 'reclamation liéé au animaux', 'erretertr', 122);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `ID` int(11) NOT NULL,
  `Nom` text CHARACTER SET latin1 NOT NULL,
  `Prenom` text CHARACTER SET latin1 NOT NULL,
  `Date_de_naissance` date NOT NULL,
  `Email` text CHARACTER SET latin1 NOT NULL,
  `Adresse` text CHARACTER SET latin1 NOT NULL,
  `Telephone` int(11) NOT NULL,
  `Login` text CHARACTER SET latin1 NOT NULL,
  `Password` text CHARACTER SET latin1 NOT NULL,
  `Role` text CHARACTER SET latin1 NOT NULL,
  `Active` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID`, `Nom`, `Prenom`, `Date_de_naissance`, `Email`, `Adresse`, `Telephone`, `Login`, `Password`, `Role`, `Active`) VALUES
(38, 'wessim', 'dhaw', '2018-07-22', 'mohamedamine.teyeb@esprit.tn', 'bizerte rue panoramique corniche, bizerte corniche klol', 29425402, 'wessim', 'wesssim', 'Client', 1),
(40, 'ahmedee', 'eee', '2018-07-19', 'benabdallah.ahmed@esprit.tn', 'bizertaftt', 21212112, 'ahmedba', '123456', 'Client', 1),
(122, 'Ahmed', 'b', '2021-05-13', 'benabdallahahmed@esprit.tn', '454666', 27684240, 'ahmed', 'admin1', 'Admin', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`ida`),
  ADD KEY `idc` (`idc`);

--
-- Index pour la table `accessoire`
--
ALTER TABLE `accessoire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `anim`
--
ALTER TABLE `anim`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `animaux`
--
ALTER TABLE `animaux`
  ADD PRIMARY KEY (`id_animaux`);

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`idc`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lieu`
--
ALTER TABLE `lieu`
  ADD PRIMARY KEY (`lieu`),
  ADD KEY `id` (`id`);

--
-- Index pour la table `plante`
--
ALTER TABLE `plante`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `promoanimaux`
--
ALTER TABLE `promoanimaux`
  ADD PRIMARY KEY (`id_promoanimaux`);

--
-- Index pour la table `promoplante`
--
ALTER TABLE `promoplante`
  ADD PRIMARY KEY (`id_promo`);

--
-- Index pour la table `reclamation`
--
ALTER TABLE `reclamation`
  ADD PRIMARY KEY (`id_reclamation`),
  ADD KEY `ID` (`id_client`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `accessoire`
--
ALTER TABLE `accessoire`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `animaux`
--
ALTER TABLE `animaux`
  MODIFY `id_animaux` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT pour la table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `plante`
--
ALTER TABLE `plante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4525;

--
-- AUTO_INCREMENT pour la table `promoanimaux`
--
ALTER TABLE `promoanimaux`
  MODIFY `id_promoanimaux` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT pour la table `promoplante`
--
ALTER TABLE `promoplante`
  MODIFY `id_promo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `reclamation`
--
ALTER TABLE `reclamation`
  MODIFY `id_reclamation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `lieu`
--
ALTER TABLE `lieu`
  ADD CONSTRAINT `lieu_ibfk_1` FOREIGN KEY (`id`) REFERENCES `evenement` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
