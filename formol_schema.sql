-- phpMyAdmin SQL Dump
-- version 4.1.11
-- http://www.phpmyadmin.net
--
-- Servidor: d232.dinaserver.com
-- Tiempo de generación: 24-06-2017 a las 21:56:00
-- Versión del servidor: 5.1.73-0ubuntu0.10.04.1-log
-- Versión de PHP: 5.4.45-0+deb7u8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE IF NOT EXISTS `formulario` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FecReg` datetime DEFAULT '0000-00-00 00:00:00',
  `Agente` varchar(50) DEFAULT NULL,
  `Proviene` varchar(50) DEFAULT NULL,
  `nombre_suc` varchar(30) NOT NULL,
  `Nombre` varchar(30) DEFAULT NULL,
  `ApellidoP` varchar(30) DEFAULT NULL,
  `ApellidoM` varchar(30) DEFAULT NULL,
  `Skype` varchar(30) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Tel1` varchar(16) NOT NULL DEFAULT '',
  `tipo1` varchar(20) NOT NULL DEFAULT '',
  `Tel2` varchar(16) NOT NULL DEFAULT '',
  `tipo2` varchar(20) NOT NULL DEFAULT '',
  `Tel3` varchar(16) NOT NULL DEFAULT '',
  `tipo3` varchar(20) NOT NULL DEFAULT '',
  `estado` varchar(40) NOT NULL,
  `pais` varchar(50) NOT NULL,
  `medio` varchar(50) NOT NULL,
  `Solicitud` varchar(50) DEFAULT NULL,
  `horario` varchar(50) NOT NULL,
  `Comentarios` varchar(255) DEFAULT NULL,
  `Aviso` bit(1) NOT NULL,
  `Duplicado` int(6) DEFAULT NULL,
  `Adwords` varchar(30) DEFAULT NULL,
  `Hispana` bit(1) NOT NULL,
  `Descartar` bit(1) DEFAULT NULL,
  `Prueba` bit(1) DEFAULT NULL,
  `Descargado` bit(1) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `tratamientos` varchar(6) DEFAULT NULL,
  `numero_tratamientos` int(11) DEFAULT NULL,
  `cp` varchar(6) DEFAULT NULL,
  `perfil` int(11) DEFAULT NULL,
  `calificacion` float DEFAULT NULL,
  `tieneEvaluacion` bit(1) DEFAULT b'0',
  `tratRealizado` int(11) DEFAULT '0',
  `Prioridad` int(11) DEFAULT '18',
  `descargadoWEB` int(11) DEFAULT '0',
  `tiempoRespuesta` float DEFAULT '0',
  `ext1` varchar(6) DEFAULT NULL,
  `ext2` varchar(6) DEFAULT NULL,
  `ext3` varchar(6) DEFAULT NULL,
  `referidor` varchar(255) DEFAULT NULL,
  `donaovu` int(3) DEFAULT '0',
  `perfilFormulario` varchar(10) DEFAULT NULL,
  `perfilPaip` varchar(10) DEFAULT NULL,
  `perfilMedico` varchar(10) DEFAULT NULL,
  `puntajeEcoPre` int(11) DEFAULT NULL,
  `puntajeEcoDef` int(11) DEFAULT NULL,
  `perfilEcoPre` varchar(20) DEFAULT NULL,
  `perfilEcoDef` varchar(20) DEFAULT NULL,
  `tarjetaCredito` varchar(20) DEFAULT NULL,
  `autopropio` varchar(20) DEFAULT NULL,
  `internet` varchar(20) DEFAULT NULL,
  `estadoCivil` varchar(20) DEFAULT NULL,
  `actividadConyuge` varchar(50) DEFAULT NULL,
  `edadElla` varchar(20) DEFAULT NULL,
  `CID` varchar(40) DEFAULT '0',
  `DID` varchar(40) DEFAULT '0',
  `Tel1_comp` varchar(16) DEFAULT NULL,
  `Tel2_comp` varchar(16) DEFAULT NULL,
  `Tel3_comp` varchar(16) DEFAULT NULL,
  `Tel4_comp` varchar(16) DEFAULT NULL,
  `tipo1_comp` varchar(20) DEFAULT NULL,
  `tipo2_comp` varchar(20) DEFAULT NULL,
  `tipo3_comp` varchar(20) DEFAULT NULL,
  `tipo4` varchar(20) DEFAULT NULL,
  `calificacion_lead` int(11) DEFAULT NULL,
  `TipoMedio` varchar(100) DEFAULT NULL,
  `BANDERA_TEL1` varchar(15) DEFAULT NULL,
  `BANDERA_TEL2` varchar(15) DEFAULT NULL,
  `BANDERA_TEL3` varchar(15) DEFAULT NULL,
  `IdPromotor` varchar(20) DEFAULT NULL,
  `IdProspectoPaciente` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `cp` (`cp`),
  KEY `fecha` (`FecReg`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=444118 ;
