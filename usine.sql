-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 13 déc. 2023 à 20:56
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `usine`
--

-- --------------------------------------------------------

--
-- Structure de la table `bon`
--

CREATE TABLE `bon` (
  `idb` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `lieuCharge` varchar(20) NOT NULL,
  `tonnage` double NOT NULL,
  `prixkilo` double NOT NULL,
  `prixtotale` double NOT NULL,
  `idch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `bon`
--

INSERT INTO `bon` (`idb`, `type`, `date`, `lieuCharge`, `tonnage`, `prixkilo`, `prixtotale`, `idch`) VALUES
(12, 'semi', '2023-12-11', 'Nabeul', 20, 360, 7920, 17),
(14, 'petite piece', '2023-12-11', 'Nabeul', 11, 360, 4078.8, 19),
(15, 'poid lourd', '2023-12-11', 'Mahdia', 35, 420, 15729, 17);

-- --------------------------------------------------------

--
-- Structure de la table `camion`
--

CREATE TABLE `camion` (
  `idc` int(11) NOT NULL,
  `typc` varchar(20) NOT NULL,
  `marquec` varchar(20) NOT NULL,
  `matriculec` varchar(20) NOT NULL,
  `dispo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `camion`
--

INSERT INTO `camion` (`idc`, `typc`, `marquec`, `matriculec`, `dispo`) VALUES
(28, 'semi', 'VOLVO', '147 TN 47', 0),
(29, 'semi', 'IVECO', '150 TN 07', 0),
(33, 'poid lourd', 'DAF', '147 TN 70', 0);

-- --------------------------------------------------------

--
-- Structure de la table `chauffeur`
--

CREATE TABLE `chauffeur` (
  `idchauf` int(11) NOT NULL,
  `cinCh` int(8) NOT NULL,
  `numTelCh` int(8) NOT NULL,
  `nomCh` varchar(20) NOT NULL,
  `prenomCh` varchar(20) NOT NULL,
  `adresseCh` varchar(20) NOT NULL,
  `idc` int(11) NOT NULL,
  `idf` int(11) NOT NULL,
  `dispo` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `chauffeur`
--

INSERT INTO `chauffeur` (`idchauf`, `cinCh`, `numTelCh`, `nomCh`, `prenomCh`, `adresseCh`, `idc`, `idf`, `dispo`) VALUES
(17, 12365478, 45632178, 'iyed', 'bencheikh', 'sidi madhkour', 28, 6, 1),
(19, 12365478, 45632178, 'iyed', 'gebsi', 'ariana', 33, 8, 1),
(20, 12233665, 77899555, 'iyed', 'bencheikh', 'nabeul', 28, 8, 1);

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `idf` int(11) NOT NULL,
  `cinf` int(8) NOT NULL,
  `numTelf` int(8) NOT NULL,
  `nomf` varchar(20) NOT NULL,
  `prenomf` varchar(20) NOT NULL,
  `adressef` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`idf`, `cinf`, `numTelf`, `nomf`, `prenomf`, `adressef`) VALUES
(6, 78965412, 12365478, 'hacen', 'aidi', 'gafsa'),
(8, 78965412, 12365478, 'achref', 'tahri', 'kelibia');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bon`
--
ALTER TABLE `bon`
  ADD PRIMARY KEY (`idb`),
  ADD KEY `idch` (`idch`);

--
-- Index pour la table `camion`
--
ALTER TABLE `camion`
  ADD PRIMARY KEY (`idc`);

--
-- Index pour la table `chauffeur`
--
ALTER TABLE `chauffeur`
  ADD PRIMARY KEY (`idchauf`),
  ADD KEY `idc` (`idc`),
  ADD KEY `chauffeur_ibfk_2` (`idf`);

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`idf`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bon`
--
ALTER TABLE `bon`
  MODIFY `idb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `camion`
--
ALTER TABLE `camion`
  MODIFY `idc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT pour la table `chauffeur`
--
ALTER TABLE `chauffeur`
  MODIFY `idchauf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `idf` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `bon`
--
ALTER TABLE `bon`
  ADD CONSTRAINT `bon_ibfk_1` FOREIGN KEY (`idch`) REFERENCES `chauffeur` (`idchauf`);

--
-- Contraintes pour la table `chauffeur`
--
ALTER TABLE `chauffeur`
  ADD CONSTRAINT `chauffeur_ibfk_1` FOREIGN KEY (`idc`) REFERENCES `camion` (`idc`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chauffeur_ibfk_2` FOREIGN KEY (`idf`) REFERENCES `fournisseur` (`idf`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
