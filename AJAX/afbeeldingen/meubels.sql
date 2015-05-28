-- phpMyAdmin SQL Dump
-- version 2.6.0-pl3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generatie Tijd: 08 Jan 2008 om 11:20
-- Server versie: 4.1.9
-- PHP Versie: 5.0.4
-- 
-- Database: `oophp`
-- 

-- --------------------------------------------------------

-- 
-- Tabel structuur voor tabel `meubels`
-- 

CREATE TABLE `meubels` (
  `artikelnr` int(11) NOT NULL default '0',
  `naam` varchar(50) NOT NULL default '',
  `type` varchar(50) NOT NULL default '',
  `omschrijving` varchar(255) NOT NULL default '',
  `prijs` float(5,2) NOT NULL default '0.00',
  PRIMARY KEY  (`artikelnr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- 
-- Gegevens worden uitgevoerd voor tabel `meubels`
-- 

INSERT INTO `meubels` VALUES (10084532, 'Hamra', '3-zitsbank', 'Zacht soepel en onderhoudsvriendelijk leer (ivoorkleurig)', 799.00);
INSERT INTO `meubels` VALUES (10085305, 'Vreta', '3-zitsbank', 'Slijtvaste bank, poten van massief beuken.', 799.00);
INSERT INTO `meubels` VALUES (10108335, 'Lervik', '2,5 zitsbank', 'Praktisch voor gezinnen met kinderen', 720.00);
INSERT INTO `meubels` VALUES (40074107, 'Kramfors', '2-zitsbank', 'Poten: gelakt staal', 699.00);
INSERT INTO `meubels` VALUES (40084724, 'Arild', '2-zitsbank', 'Stevig slijtvast, poten van vernikkeld staal', 799.00);
INSERT INTO `meubels` VALUES (50121189, 'Arild', '3-zitsbank', 'Stevig slijtvast en gemakkelijk te onderhouden leer', 999.99);
