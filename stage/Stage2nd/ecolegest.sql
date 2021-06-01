drop database if exists stage;
create database stage;
  use stage;
-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 20 nov. 2020 à 15:58
-- Version du serveur :  5.7.26
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
-- Base de données :  `ecolegest`
--

-- --------------------------------------------------------

--
-- Structure de la table `classe`


CREATE TABLE etudiant (
  IdEtudiant int(2) NOT NULL AUTO_INCREMENT,
  nom varchar(80) NOT NULL,
  prenom varchar(80) NOT NULL,
  mail varchar(200) NOT NULL,
  mdp varchar(20) NOT NULL,
  PRIMARY KEY (IdEtudiant));

insert into etudiant values 
  (null,'Rebecca','Armand','t@gmail.com','azerty');





  CREATE TABLE aetudiant (
  aIdEtudiant int(2) NOT NULL AUTO_INCREMENT,
  anom varchar(80) NOT NULL,
  aprenom varchar(80) NOT NULL,
  amail varchar(200) NOT NULL,
  amdp varchar(20) NOT NULL,
  PRIMARY KEY (aIdEtudiant));

insert into aetudiant values 
  (null,'Rob','Bert','ROB@gmail.com','azerty');






  CREATE TABLE prof (
  IdProf int(2) NOT NULL AUTO_INCREMENT,
  pnom varchar(80) NOT NULL,
  pprenom varchar(80) NOT NULL,
  pmail varchar(200) NOT NULL,
  pmdp varchar(20) NOT NULL,
  PRIMARY KEY (IdProf));

insert into prof values 
  (null,'Chauve','Man','Super_prof@gmail.com','azerty');