-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3308
-- Tiempo de generación: 22-04-2021 a las 17:41:31
-- Versión del servidor: 5.7.31
-- Versión de PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebas_final`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acta_brigadas_de_emergencia`
--

DROP TABLE IF EXISTS `acta_brigadas_de_emergencia`;
CREATE TABLE IF NOT EXISTS `acta_brigadas_de_emergencia` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `HORA` time DEFAULT NULL,
  `NOMBRE_EMPRESA` varchar(100) DEFAULT NULL,
  `NOMBRE_DIRECTOR_BRIGADISTA` varchar(100) DEFAULT NULL,
  `CEDULA_DIRECTOR_BRIGADISTA` varchar(100) DEFAULT NULL,
  `NUMERO_BRIGADISTAS` varchar(100) DEFAULT NULL,
  `NOMBRE_BRIGADISTAS` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acta_conformacion`
--

DROP TABLE IF EXISTS `acta_conformacion`;
CREATE TABLE IF NOT EXISTS `acta_conformacion` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `NOMBRES_EMPLEADOS` varchar(100) DEFAULT NULL,
  `CARGO` varchar(100) DEFAULT NULL,
  `FIRMA` longblob,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acta_de_nombramiento_responsable`
--

DROP TABLE IF EXISTS `acta_de_nombramiento_responsable`;
CREATE TABLE IF NOT EXISTS `acta_de_nombramiento_responsable` (
  `ID` varchar(5) NOT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NOMBRE_RESPONSABLE` varchar(100) DEFAULT NULL,
  `CEDULA` varchar(15) DEFAULT NULL,
  `LUGAR_EXPEDICION_CEDULA` varchar(100) DEFAULT NULL,
  `CARGO` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acta_induccion_y_reinduccion`
--

DROP TABLE IF EXISTS `acta_induccion_y_reinduccion`;
CREATE TABLE IF NOT EXISTS `acta_induccion_y_reinduccion` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `LUGAR` varchar(100) DEFAULT NULL,
  `DURACION` varchar(50) DEFAULT NULL,
  `NUM_PARTICIPANTES` int(11) DEFAULT NULL,
  `NOMBRE_PARTICIPANTE` varchar(100) DEFAULT NULL,
  `CARGO_PARTICIPANTE` varchar(50) DEFAULT NULL,
  `FIRMA_PARTICIPANTE` longblob,
  `ASPECTOS` text,
  `ESTADO` varchar(70) DEFAULT NULL,
  `FIRMA` longblob,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acta_mensual_vigia`
--

DROP TABLE IF EXISTS `acta_mensual_vigia`;
CREATE TABLE IF NOT EXISTS `acta_mensual_vigia` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `TEMA_CAPACITACION` varchar(100) DEFAULT NULL,
  `OBJETIVO` text,
  `DESCRIPCION` text,
  `ENCARGO` text,
  `DURACION` int(11) DEFAULT NULL,
  `EVALUACION_EFICACIA` text,
  `METODO_EVALUACION` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acta_nombramiento_vigia`
--

DROP TABLE IF EXISTS `acta_nombramiento_vigia`;
CREATE TABLE IF NOT EXISTS `acta_nombramiento_vigia` (
  `ID` varchar(5) NOT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `NOMBRE_VIGIA` varchar(50) DEFAULT NULL,
  `APELLIDO_VIGIA` varchar(50) DEFAULT NULL,
  `CEDULA` varchar(15) DEFAULT NULL,
  `NOMBRE_SUPLENTE` varchar(50) DEFAULT NULL,
  `APELLIDO_SUPLENTE` varchar(50) DEFAULT NULL,
  `CEDULA_SUPLENTE` varchar(50) DEFAULT NULL,
  `FIRMA` longblob,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `archivos_subidos`
--

DROP TABLE IF EXISTS `archivos_subidos`;
CREATE TABLE IF NOT EXISTS `archivos_subidos` (
  `ID` int(11) NOT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `ESTANDAR` int(11) DEFAULT NULL,
  `NOMBRE_DOCUMENTO` varchar(150) DEFAULT NULL,
  `ITEM` float DEFAULT NULL,
  `OBSERVACIONES` text,
  `ARCHIVO` blob,
  PRIMARY KEY (`ID`),
  KEY `FK_USUARIO_ARCHIVOSS` (`NIT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `archivos_subidos`
--

INSERT INTO `archivos_subidos` (`ID`, `NIT`, `ESTANDAR`, `NOMBRE_DOCUMENTO`, `ITEM`, `OBSERVACIONES`, `ARCHIVO`) VALUES
(11, '123456-8', 2, 'Bitacora semana 7.docx', 2.1, 'nada', 0x30),
(10, '1122', 7, 'Andres molinares 1.jpg', 7.2, 'nada', 0x30);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auditoria_anual`
--

DROP TABLE IF EXISTS `auditoria_anual`;
CREATE TABLE IF NOT EXISTS `auditoria_anual` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `ELABORO` varchar(100) DEFAULT NULL,
  `ANO` varchar(100) DEFAULT NULL,
  `PROCESO` varchar(100) DEFAULT NULL,
  `NUMERO_AUDITORIA` varchar(100) DEFAULT NULL,
  `ALCANSE` varchar(100) DEFAULT NULL,
  `PROCESO_A_AUDITAR` varchar(100) DEFAULT NULL,
  `AUDITORES` varchar(100) DEFAULT NULL,
  `MES_EJECUCION` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cronograma_actividades`
--

DROP TABLE IF EXISTS `cronograma_actividades`;
CREATE TABLE IF NOT EXISTS `cronograma_actividades` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `NUMERO_ACTIVIDADES` int(11) DEFAULT NULL,
  `OBJETIVOS_GENERALES` text,
  `NUMERO` varchar(10) DEFAULT NULL,
  `OBJETIVO_ESPECIFICO` text,
  `MES_INICIAL` varchar(50) DEFAULT NULL,
  `MES_FINAL` varchar(50) DEFAULT NULL,
  `RESPONSABLES` text,
  `ESTADO_ACTIVIDAD` varchar(70) DEFAULT NULL,
  `FIRMA` blob,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

DROP TABLE IF EXISTS `documentos`;
CREATE TABLE IF NOT EXISTS `documentos` (
  `ID` varchar(5) NOT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_USUARIO_DOCUMENTO` (`NIT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estilo_de_vida_y_entorno_saludable`
--

DROP TABLE IF EXISTS `estilo_de_vida_y_entorno_saludable`;
CREATE TABLE IF NOT EXISTS `estilo_de_vida_y_entorno_saludable` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `NOMBRE_EMPRESA` varchar(100) DEFAULT NULL,
  `OBJETIVO_GENERAL` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichas_de_indicadores`
--

DROP TABLE IF EXISTS `fichas_de_indicadores`;
CREATE TABLE IF NOT EXISTS `fichas_de_indicadores` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `NOMBRE_INDICADOR` varchar(100) DEFAULT NULL,
  `RESPONSABLE` varchar(100) DEFAULT NULL,
  `ULTILIDAD_DEL_INDICADOR` varchar(100) DEFAULT NULL,
  `TENDENCIA_ESPERADA` varchar(100) DEFAULT NULL,
  `META` varchar(100) DEFAULT NULL,
  `NIVEL_SATISFACTORIO` varchar(100) DEFAULT NULL,
  `MES` varchar(100) DEFAULT NULL,
  `LOGRO` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato_de_epp`
--

DROP TABLE IF EXISTS `formato_de_epp`;
CREATE TABLE IF NOT EXISTS `formato_de_epp` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `NOMBRE_FUNCIONARIO` varchar(100) DEFAULT NULL,
  `CARGO` varchar(100) DEFAULT NULL,
  `NUMERO_ENTREGA` varchar(100) DEFAULT NULL,
  `ELEMENTO_PROTECCION` varchar(100) DEFAULT NULL,
  `UNIDADES` varchar(100) DEFAULT NULL,
  `TALLA` varchar(100) DEFAULT NULL,
  `FECHA_ENTREGA` date DEFAULT NULL,
  `INDICACION_USO` varchar(100) DEFAULT NULL,
  `FECHA_CADUCIDAD` date DEFAULT NULL,
  `OBSERVACIONES` text,
  `FIRMA_RESPONSABLE_EPP` varchar(100) DEFAULT NULL,
  `FIRMA_PROFESIONAL_SST` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato_evaluacion_proveedores`
--

DROP TABLE IF EXISTS `formato_evaluacion_proveedores`;
CREATE TABLE IF NOT EXISTS `formato_evaluacion_proveedores` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `DOC_NIT` varchar(20) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `NOMBRE_PROVEEDOR` varchar(100) DEFAULT NULL,
  `TELEFONO` varchar(15) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `PUNTOS` int(11) DEFAULT NULL,
  `TOTAL` float DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato_gestion_de_cambio`
--

DROP TABLE IF EXISTS `formato_gestion_de_cambio`;
CREATE TABLE IF NOT EXISTS `formato_gestion_de_cambio` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `DESCRIPCION_CAMBIO` text,
  `ANALISIS_RIESGO` text,
  `RECOMENDACIONES_SALUD` text,
  `RIESGOS` text,
  `REQUISITOS_LEGALES` text,
  `PROGRAMA_GESTION` text,
  `CONTROL_OPERATIVO` text,
  `PROCEDIMIENTO_TRABAJO` text,
  `OTROS` text,
  `FIRMA` longblob,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato_pausas_activas`
--

DROP TABLE IF EXISTS `formato_pausas_activas`;
CREATE TABLE IF NOT EXISTS `formato_pausas_activas` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `APELLIDO` varchar(50) DEFAULT NULL,
  `CARGO` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formato_seleccion_proveedores`
--

DROP TABLE IF EXISTS `formato_seleccion_proveedores`;
CREATE TABLE IF NOT EXISTS `formato_seleccion_proveedores` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `DOC_NIT` varchar(20) DEFAULT NULL,
  `NOMBRE_PROVEEDOR` varchar(100) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `TELEFONO` varchar(15) DEFAULT NULL,
  `FECHA_EVALUACION` date DEFAULT NULL,
  `PUNTOS_CALIDAD_PRECIO` int(11) DEFAULT NULL,
  `PUNTOS_EXPERIENCIA` int(11) DEFAULT NULL,
  `PUNTOS_REFERENCIACION` int(11) DEFAULT NULL,
  `PUNTOS_ENTREGA` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listado_maestro_informacion_documentada`
--

DROP TABLE IF EXISTS `listado_maestro_informacion_documentada`;
CREATE TABLE IF NOT EXISTS `listado_maestro_informacion_documentada` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `PROCESO_RELACIONADO` text,
  `NOMBRE_TAREA` text,
  `ORIGEN` varchar(100) DEFAULT NULL,
  `MEDIO_DISTRIBUCION` text,
  `CONSULTOR` varchar(70) DEFAULT NULL,
  `VERSION` int(11) DEFAULT NULL,
  `FECHA_VIGENCIA` date DEFAULT NULL,
  `ACCESO` text,
  `ALMACENAMIENTO` text,
  `RECUPERACION` text,
  `ELABORADO_POR` text,
  `REVISADO_POR` varchar(100) DEFAULT NULL,
  `APROBADO_POR` varchar(100) DEFAULT NULL,
  `ESTADO_DOCUMENTO` varchar(70) DEFAULT NULL,
  `FECHA_ACTUALIZACION` date DEFAULT NULL,
  `DESCRIPCION_CAMBIOS` text,
  `UBICACION_ARCHIVO` text,
  `PROTECCION` text,
  `TIEMPO_RETENCION` varchar(70) DEFAULT NULL,
  `DISPOSICION` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matrices`
--

DROP TABLE IF EXISTS `matrices`;
CREATE TABLE IF NOT EXISTS `matrices` (
  `ID` varchar(5) NOT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `FK_MATRICES_USUARIO` (`NIT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriz_capacitacion_anual`
--

DROP TABLE IF EXISTS `matriz_capacitacion_anual`;
CREATE TABLE IF NOT EXISTS `matriz_capacitacion_anual` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `TEMA` text,
  `FECHA` date DEFAULT NULL,
  `OBJETIVO` text,
  `DESCRIPCION` text,
  `ENCARGADO` varchar(100) DEFAULT NULL,
  `DURACION` varchar(25) DEFAULT NULL,
  `EVALUACION_EFICACIA` text,
  `METODO_EVALUACION` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriz_de_peligros_y_evaluacion_de_riesgos`
--

DROP TABLE IF EXISTS `matriz_de_peligros_y_evaluacion_de_riesgos`;
CREATE TABLE IF NOT EXISTS `matriz_de_peligros_y_evaluacion_de_riesgos` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `AREA` varchar(100) DEFAULT NULL,
  `CARGO` text,
  `RUTINA` text,
  `DESCRIPCION_PELIGRO` text,
  `CLASIFICACION_PELIGRO` varchar(100) DEFAULT NULL,
  `FUENTE` text,
  `CONSECUENCIAS` text,
  `NUM_PERSONAS_EXPUESTAS` int(11) DEFAULT NULL,
  `MEDIDAS_RECOMENDADAS` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriz_de_rendicion_de_cuentas`
--

DROP TABLE IF EXISTS `matriz_de_rendicion_de_cuentas`;
CREATE TABLE IF NOT EXISTS `matriz_de_rendicion_de_cuentas` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `ITEM` varchar(100) DEFAULT NULL,
  `RESPONSABLE` varchar(100) DEFAULT NULL,
  `A_QUIEN` varchar(100) DEFAULT NULL,
  `COMO` varchar(100) DEFAULT NULL,
  `FRECUENCIA_REPORTE` varchar(100) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriz_evaluacion_inical`
--

DROP TABLE IF EXISTS `matriz_evaluacion_inical`;
CREATE TABLE IF NOT EXISTS `matriz_evaluacion_inical` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `NUMERAL` varchar(3) DEFAULT NULL,
  `MARCO_LEGAL` text,
  `CRITERIO` text,
  `MODO_VERIFICACION` text,
  `CUMPLE_TOTALMENTE` tinyint(1) DEFAULT NULL,
  `EVIDENCIAS` text,
  `PLAN_DE_ACCION` text,
  `RESPONSABLE` varchar(100) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriz_indicadores`
--

DROP TABLE IF EXISTS `matriz_indicadores`;
CREATE TABLE IF NOT EXISTS `matriz_indicadores` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `TEMA_ESTRATEGICO` text,
  `OBJETIVO_DESARROLLO` text,
  `TIPO_INDICADOR` varchar(100) DEFAULT NULL,
  `NOMBRE_INDICADOR` varchar(100) DEFAULT NULL,
  `DEFINICION` text,
  `MEDICION` varchar(100) DEFAULT NULL,
  `FUENTE_INFO` text,
  `RESPONSABLE` varchar(100) DEFAULT NULL,
  `FRECUENCIA_MEDICION` varchar(70) DEFAULT NULL,
  `UNIDAD` varchar(100) DEFAULT NULL,
  `INTERPRETACION` text,
  `META` text,
  `DIVULGACION` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriz_legal_de_riesgos`
--

DROP TABLE IF EXISTS `matriz_legal_de_riesgos`;
CREATE TABLE IF NOT EXISTS `matriz_legal_de_riesgos` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `TEMA` text,
  `SUBTEMA` text,
  `NORMA` text,
  `URL` text,
  `DESCRIPCION` text,
  `AUTORIDAD` text,
  `DERROGADA` varchar(1) DEFAULT NULL,
  `NOTAS_VIGENCIA` text,
  `PORCENTAJE_CUMPLIMIENTO` float DEFAULT NULL,
  `REFERENTE` varchar(50) DEFAULT NULL,
  `ARTICULO` varchar(70) DEFAULT NULL,
  `EXIGENCIA` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriz_legal_normas`
--

DROP TABLE IF EXISTS `matriz_legal_normas`;
CREATE TABLE IF NOT EXISTS `matriz_legal_normas` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `MARCO_LEGAL` varchar(100) DEFAULT NULL,
  `NUMERO` int(11) DEFAULT NULL,
  `ANO` int(11) DEFAULT NULL,
  `ARTICULOS` text,
  `EMISOR` text,
  `ASPECTO_REGULADO` text,
  `DOCUMENTO_SOPORTE` text,
  `CUMPLE` tinyint(1) DEFAULT NULL,
  `PLAN_ACCION` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriz_recomendacion_restricciones`
--

DROP TABLE IF EXISTS `matriz_recomendacion_restricciones`;
CREATE TABLE IF NOT EXISTS `matriz_recomendacion_restricciones` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `NUMERO` varchar(10) DEFAULT NULL,
  `FECHA_EXAMEN` date DEFAULT NULL,
  `TIPO_EXAMEN` varchar(70) DEFAULT NULL,
  `NUM_IDENTIFICACION` varchar(15) DEFAULT NULL,
  `NOMBRE_COMPLETO` varchar(100) DEFAULT NULL,
  `RECOMENDACIONES_PERSONALES` text,
  `RECOMENDACIONES_SST` text,
  `SVE` text,
  `RECOMENDACIONES_MEDICAS` text,
  `ACCION` text,
  `SEGUIMIENTO` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matriz_responsabilidades`
--

DROP TABLE IF EXISTS `matriz_responsabilidades`;
CREATE TABLE IF NOT EXISTS `matriz_responsabilidades` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `ROL` text,
  `NOMBRE_EMPLEADO_ROL` text,
  `RESPONSABILIDADES` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mecanismos_comunicacion`
--

DROP TABLE IF EXISTS `mecanismos_comunicacion`;
CREATE TABLE IF NOT EXISTS `mecanismos_comunicacion` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `ETAPA` text,
  `ACTIVIDAD` text,
  `RESPONSABLE` text,
  `DOCUMENTOS_SOPORTE` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo_inspeccion`
--

DROP TABLE IF EXISTS `modelo_inspeccion`;
CREATE TABLE IF NOT EXISTS `modelo_inspeccion` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `PERIODICIDAD_INSPECCION` varchar(100) DEFAULT NULL,
  `FECHA_INSPECCION` date DEFAULT NULL,
  `PARTICIPANTES_INSPECCION` text,
  `AREA_EVALUACION` text,
  `ASPECTO_EVALUAR` text,
  `CALIFICACION` varchar(100) DEFAULT NULL,
  `OBSERVACIONES` text,
  `PRIORIDAD` varchar(70) DEFAULT NULL,
  `PLAN_TRABAJO` text,
  `RESPONSABLE` varchar(70) DEFAULT NULL,
  `SEGUIMIENTO` text,
  `CIERRE_ACTIVIDAD` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plan_de_mejora`
--

DROP TABLE IF EXISTS `plan_de_mejora`;
CREATE TABLE IF NOT EXISTS `plan_de_mejora` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `FECHA_INICIO` date DEFAULT NULL,
  `PROCESO` varchar(100) DEFAULT NULL,
  `ASPECTO_POR_MEJORAR` varchar(100) DEFAULT NULL,
  `TIPO` varchar(100) DEFAULT NULL,
  `ORIGEN` varchar(100) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `CORRECCION` varchar(100) DEFAULT NULL,
  `ANALISIS_DE_CAUSAS` varchar(100) DEFAULT NULL,
  `FECHA_ACCION` date DEFAULT NULL,
  `ACTIVIDA_ACCION` varchar(100) DEFAULT NULL,
  `TIPO_ACCION` varchar(100) DEFAULT NULL,
  `RESPONSABLE_ACCION` varchar(100) DEFAULT NULL,
  `FECHA_SEGUIMIENTO1` varchar(100) DEFAULT NULL,
  `COMENTARIO_SEGUIMIENTO1` text,
  `EFICAZ_SEGUIMIENTO1` varchar(100) DEFAULT NULL,
  `ESTADO_SEGUIMIENTO1` varchar(100) DEFAULT NULL,
  `FECHA_SEGUIMIENTO2` varchar(100) DEFAULT NULL,
  `COMENTARIOS_SEGUIMIENTO2` text,
  `EFICAZ_SEGUIMIENTO2` varchar(100) DEFAULT NULL,
  `ESTADO_SEGUIMIENTO2` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `politica_sg_sst`
--

DROP TABLE IF EXISTS `politica_sg_sst`;
CREATE TABLE IF NOT EXISTS `politica_sg_sst` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `NOMBRE_EMPRESA` varchar(100) DEFAULT NULL,
  `ESPECIALIDAD_EMPRESA` text,
  `FIRMA` blob,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro_accidentes`
--

DROP TABLE IF EXISTS `registro_accidentes`;
CREATE TABLE IF NOT EXISTS `registro_accidentes` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `FECHA` date DEFAULT NULL,
  `EVENTO` text,
  `FECHA_OCURRENCIA` date DEFAULT NULL,
  `AREA` text,
  `EQUIPOS` text,
  `INSTALACIONES` text,
  `AMBIENTE` text,
  `AFECTADOS` int(11) DEFAULT NULL,
  `LESIONADOS` int(11) DEFAULT NULL,
  `FALLECIDOS` int(11) DEFAULT NULL,
  `APOYO_INSTITUCIONAL` varchar(10) DEFAULT NULL,
  `DESCRIPCION_MEDIDAS_IMPLEMENTADAS` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte_accidentes`
--

DROP TABLE IF EXISTS `reporte_accidentes`;
CREATE TABLE IF NOT EXISTS `reporte_accidentes` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `CENTRO_TRABAJO_ACCIDENTE` varchar(100) DEFAULT NULL,
  `ID_ACCIDENTADO` varchar(15) DEFAULT NULL,
  `INFORMACION_ACCIDENTE` text,
  `LUGAR_ACCIDENTE` text,
  `PARTECUERPO_AFECTADA` text,
  `TIPO_LESION` text,
  `FORMA_ACCIDENTE` text,
  `DESCRIPCION_ACCIDENTE` text,
  `TESTIGOS_ACCIDENTE` varchar(10) DEFAULT NULL,
  `NOMBRE_TESTIGO` varchar(70) DEFAULT NULL,
  `CARGO_TESTIGO` varchar(100) DEFAULT NULL,
  `NOMBRE_RESPONSABLE_INFORME` varchar(70) DEFAULT NULL,
  `APELLIDO_RESPONSABLE_INFORME` varchar(70) DEFAULT NULL,
  `CEDULA_RESPONSABLE` varchar(15) DEFAULT NULL,
  `CARGO_RESPONSABLE` text,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reporte_mantenimiento`
--

DROP TABLE IF EXISTS `reporte_mantenimiento`;
CREATE TABLE IF NOT EXISTS `reporte_mantenimiento` (
  `ID` varchar(5) NOT NULL,
  `ESTANDAR` varchar(100) DEFAULT NULL,
  `ITEM_PERTENECE` varchar(10) DEFAULT NULL,
  `NIT` varchar(20) DEFAULT NULL,
  `FECHA_PROPUESTA` date DEFAULT NULL,
  `FECHA_REALIZADA` date DEFAULT NULL,
  `EQUIPOS` text,
  `CANT_EQUIPOS` int(11) DEFAULT NULL,
  `FRECUENCIA` text,
  `HABITACIONES` text,
  `AREAS_COMUNES` text,
  `MUESTRAS_LABORATORIO` text,
  `TOTAL_MANTENIMIENTOP_MES` float DEFAULT NULL,
  `TOTAL_MANTENIMIENTOR_MES` float DEFAULT NULL,
  `PORCENTAJE_TOTAL` float DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `NIT` varchar(20) NOT NULL,
  `contrasena` varchar(100) NOT NULL,
  `NOMBRE` varchar(50) DEFAULT NULL,
  `DESCRIPCION` text,
  `DIRECCION` text,
  `CORREO` varchar(100) DEFAULT NULL,
  `TELEFONO` varchar(15) DEFAULT NULL,
  `NUMERO_EMPLEADOS` int(11) DEFAULT NULL,
  `N_SEDES` varchar(100) DEFAULT NULL,
  `CIUDAD` varchar(100) DEFAULT NULL,
  `PAIS` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`NIT`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`NIT`, `contrasena`, `NOMBRE`, `DESCRIPCION`, `DIRECCION`, `CORREO`, `TELEFONO`, `NUMERO_EMPLEADOS`, `N_SEDES`, `CIUDAD`, `PAIS`) VALUES
('123456-8', '1234', 'empresaxyz', 'empresa dedicada a acadasdsd', 'manga', 'empresaxyz@gmail.com', '658974556', 100, 'Sede central', 'cartagena', 'colombia'),
('1122', '1234', 'empresa2', 'empresa dedicada a acadasdsd', 'manga', 'empresa2@gmail.com', '658974556', 100, 'Sede central', 'cartagena', 'colombia');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
