-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-04-2017 a las 17:00:57
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `traes_ipes`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id` int(11) NOT NULL,
  `apellidos` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombres` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `foto_dir` varchar(255) NOT NULL,
  `documento_tipo` varchar(30) NOT NULL,
  `documento_nro` int(9) NOT NULL,
  `cuil_cuit` int(11) DEFAULT NULL,
  `ocupacion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `lugar_de_trabajo` varchar(100) NOT NULL,
  `horario_de_trabajo` varchar(50) NOT NULL,
  `fecha_nac` date NOT NULL,
  `edad` int(3) NOT NULL,
  `pcia_nac` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nacionalidad` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `indigena` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado_civil` varchar(30) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono_nro` varchar(20) NOT NULL,
  `calle_nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `calle_nro` int(11) DEFAULT NULL,
  `barrio_id` int(11) NOT NULL,
  `asentamiento` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` text NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `pendiente` tinyint(1) NOT NULL,
  `centro_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos_mesaexamens`
--

CREATE TABLE `alumnos_mesaexamens` (
  `id` int(11) UNSIGNED NOT NULL,
  `alumno_id` int(11) NOT NULL,
  `mesaexamen_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `barrios`
--

CREATE TABLE `barrios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos`
--

CREATE TABLE `cargos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `tipo` varchar(50) CHARACTER SET latin1 NOT NULL,
  `resolucionNro` varchar(25) CHARACTER SET latin1 NOT NULL,
  `hsCatedra` int(2) NOT NULL,
  `hsReloj` varchar(11) CHARACTER SET latin1 NOT NULL,
  `area` varchar(50) CHARACTER SET latin1 NOT NULL,
  `puesto` varchar(50) CHARACTER SET latin1 NOT NULL,
  `descricpion` text CHARACTER SET latin1 NOT NULL,
  `fechaCreacion` date NOT NULL,
  `fechaCierre` date DEFAULT NULL,
  `fechaAltaPersona` date DEFAULT NULL,
  `fechaBajaPersona` date DEFAULT NULL,
  `fechaCambioSituacionPersona` date DEFAULT NULL,
  `estado` varchar(11) CHARACTER SET latin1 NOT NULL,
  `centro_id` int(11) NOT NULL,
  `curso_id` int(11) DEFAULT NULL,
  `materia_id` int(11) DEFAULT NULL,
  `estado_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos_ciclos`
--

CREATE TABLE `cargos_ciclos` (
  `id` int(11) NOT NULL,
  `cargo_id` int(11) NOT NULL,
  `ciclo_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos_docentes`
--

CREATE TABLE `cargos_docentes` (
  `id` int(11) NOT NULL,
  `cargo_id` int(11) NOT NULL,
  `docente_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargos_empleados`
--

CREATE TABLE `cargos_empleados` (
  `id` int(11) NOT NULL,
  `cargo_id` int(11) NOT NULL,
  `empleado_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centros`
--

CREATE TABLE `centros` (
  `id` int(11) NOT NULL,
  `cue` int(7) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `sigla` varchar(50) NOT NULL,
  `nivel` varchar(15) NOT NULL,
  `fechaFundacion` date NOT NULL,
  `equipoDirectivo` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `direccion` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ciudad` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `email` varchar(150) DEFAULT NULL,
  `url` varchar(150) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `centros_empleados`
--

CREATE TABLE `centros_empleados` (
  `id` int(11) NOT NULL,
  `centro_id` int(11) NOT NULL,
  `empleado_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclos`
--

CREATE TABLE `ciclos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(11) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFinal` date NOT NULL,
  `primer_periodo` date NOT NULL,
  `segundo_periodo` date NOT NULL,
  `tercer_periodo` date NOT NULL,
  `observaciones` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclos_cursos`
--

CREATE TABLE `ciclos_cursos` (
  `id` int(11) NOT NULL,
  `ciclo_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correlativas`
--

CREATE TABLE `correlativas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `alia` varchar(50) NOT NULL,
  `tipo` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `correlativas_materias`
--

CREATE TABLE `correlativas_materias` (
  `id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `correlativa_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `anio` varchar(11) NOT NULL,
  `division` varchar(11) NOT NULL,
  `turno` varchar(11) NOT NULL,
  `aula_nro` int(3) DEFAULT NULL,
  `matricula` int(2) NOT NULL,
  `organizacion_cursada` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `centro_id` int(11) NOT NULL,
  `titulacion_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos_inasistencias`
--

CREATE TABLE `cursos_inasistencias` (
  `id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `inasistencia_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos_inscripcions`
--

CREATE TABLE `cursos_inscripcions` (
  `id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `inscripcion_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id` int(11) NOT NULL,
  `primerNombre` varchar(50) CHARACTER SET latin1 NOT NULL,
  `apellido` varchar(50) CHARACTER SET latin1 NOT NULL,
  `dni` int(9) NOT NULL,
  `direccion` varchar(200) CHARACTER SET latin1 DEFAULT NULL,
  `telefono` varchar(50) CHARACTER SET latin1 NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `ciudad` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento_tipos`
--

CREATE TABLE `documento_tipos` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id` int(11) NOT NULL,
  `documento_tipo` varchar(30) NOT NULL,
  `documento_nro` int(9) NOT NULL,
  `cuit_cuil` varchar(11) NOT NULL,
  `apellidos` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `sexo` varchar(15) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `foto_dir` varchar(255) NOT NULL,
  `fecha_nac` date NOT NULL,
  `pcia_nac` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `indigena` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado_civil` varchar(30) NOT NULL,
  `calle_nombre` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `calle_nro` int(4) DEFAULT NULL,
  `telefono_nro` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `barrio` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `asentamiento` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `ciudad` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` int(11) NOT NULL,
  `nombre` varchar(20) CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_type_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `all_day` tinyint(1) NOT NULL DEFAULT '1',
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Scheduled',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `event_types`
--

CREATE TABLE `event_types` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiars`
--

CREATE TABLE `familiars` (
  `id` int(11) NOT NULL,
  `alumno_id` int(11) NOT NULL,
  `vinculo` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `nombre_completo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `cuit_cuil` varchar(12) NOT NULL,
  `nacionalidad` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ocupacion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `lugar_de_trabajo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `telefono_nro` varchar(20) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `domicilio` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `barrio` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `asentamiento` varchar(50) DEFAULT NULL,
  `ciudad` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `observaciones` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horarios`
--

CREATE TABLE `horarios` (
  `id` int(11) NOT NULL,
  `dia` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `horaInicio` time NOT NULL,
  `horaFin` time NOT NULL,
  `ciclo_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `i18n`
--

CREATE TABLE `i18n` (
  `id` int(10) NOT NULL,
  `locale` varchar(6) NOT NULL,
  `model` varchar(255) NOT NULL,
  `foreign_key` int(10) NOT NULL,
  `field` varchar(255) NOT NULL,
  `content` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inasistencias`
--

CREATE TABLE `inasistencias` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `justificado` varchar(10) NOT NULL,
  `causa` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `certificacion` varchar(255) NOT NULL,
  `observaciones` text NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `alumno_id` int(11) NOT NULL,
  `ciclo_id` int(11) NOT NULL,
  `empleado_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inasistencias_materias`
--

CREATE TABLE `inasistencias_materias` (
  `id` int(11) NOT NULL,
  `inasistencia_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcions`
--

CREATE TABLE `inscripcions` (
  `id` int(11) NOT NULL,
  `legajo_nro` varchar(11) NOT NULL,
  `tipo_alta` varchar(30) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_alta` date NOT NULL,
  `cursa` varchar(50) NOT NULL,
  `fines` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_baja` date DEFAULT NULL,
  `tipo_baja` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `motivo_baja` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `fecha_egreso` date DEFAULT NULL,
  `libro_nro` int(4) DEFAULT NULL,
  `acta_nro` int(4) DEFAULT NULL,
  `folio_nro` int(4) DEFAULT NULL,
  `titulo_nro` varchar(25) NOT NULL,
  `fecha_emision_titulo` date DEFAULT NULL,
  `recursante` tinyint(1) NOT NULL,
  `nota` int(2) DEFAULT NULL,
  `condicion_aprobacion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nota` date DEFAULT NULL,
  `fotocopia_dni` tinyint(1) NOT NULL,
  `certificado_septimo` tinyint(1) NOT NULL,
  `analitico` tinyint(1) NOT NULL,
  `observaciones` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `alumno_id` int(11) NOT NULL,
  `ciclo_id` int(11) NOT NULL,
  `centro_id` int(11) NOT NULL,
  `empleado_id` int(11) NOT NULL,
  `estado` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscripcions_materias`
--

CREATE TABLE `inscripcions_materias` (
  `id` int(11) NOT NULL,
  `inscripcion_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=FIXED;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `integracions`
--

CREATE TABLE `integracions` (
  `id` int(11) NOT NULL,
  `tipo_discapacidad` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `docente_nombre_completo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_inicio` date NOT NULL,
  `fecha_fin` date DEFAULT NULL,
  `observaciones` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `informe` varchar(255) DEFAULT NULL,
  `informe_dir` varchar(255) DEFAULT NULL,
  `creado` date NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `alumno_id` int(11) NOT NULL,
  `centro_id` int(11) NOT NULL,
  `ciclo_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventarios`
--

CREATE TABLE `inventarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) CHARACTER SET latin1 NOT NULL,
  `fechaCreacion` date NOT NULL,
  `fechaModificacion` date NOT NULL,
  `observacion` text CHARACTER SET latin1,
  `empleado_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `licencias`
--

CREATE TABLE `licencias` (
  `id` int(11) NOT NULL,
  `articulo` varchar(100) CHARACTER SET latin1 NOT NULL,
  `descripcion` varchar(200) CHARACTER SET latin1 NOT NULL,
  `fechaDesde` date NOT NULL,
  `fechaHasta` date DEFAULT NULL,
  `observacion` text CHARACTER SET latin1,
  `docente_id` int(11) DEFAULT NULL,
  `empleado_id` int(11) DEFAULT NULL,
  `cargo_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materias`
--

CREATE TABLE `materias` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `campo_formacion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `formato` varchar(25) NOT NULL,
  `comision_trayecto_formativo` varchar(25) NOT NULL,
  `trayecto_formativo` varchar(25) NOT NULL,
  `dictado` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `obligatoriedad` varchar(50) DEFAULT NULL,
  `carga_horaria_en` varchar(50) DEFAULT NULL,
  `carga_horaria_semanal` int(2) DEFAULT NULL,
  `duracion_en` varchar(50) DEFAULT NULL,
  `duracion` int(2) DEFAULT NULL,
  `escala_numerica` varchar(10) DEFAULT NULL,
  `nota_minima` varchar(2) DEFAULT NULL,
  `alia` varchar(12) DEFAULT NULL,
  `contenido` varchar(255) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesaexamens`
--

CREATE TABLE `mesaexamens` (
  `id` int(11) UNSIGNED NOT NULL,
  `mesa_especial` varchar(2) NOT NULL,
  `turno` varchar(50) NOT NULL,
  `acta_nro` int(4) NOT NULL,
  `libro_nro` int(4) NOT NULL,
  `folio_nro` int(4) NOT NULL,
  `seccion` varchar(25) NOT NULL,
  `aula` varchar(25) NOT NULL,
  `modalidad` varchar(25) NOT NULL,
  `presidente` varchar(50) NOT NULL,
  `vocal_uno` varchar(50) NOT NULL,
  `vocal_dos` varchar(50) NOT NULL,
  `observaciones` text NOT NULL,
  `ciclo_id` int(11) NOT NULL,
  `titulacion_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `alumno_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id` int(11) NOT NULL,
  `nota_uno_primer_periodo` decimal(2,2) UNSIGNED DEFAULT NULL,
  `evaluacion_tipo_nota_uno_primer_periodo` varchar(50) DEFAULT NULL,
  `nota_dos_primer_periodo` decimal(2,2) UNSIGNED DEFAULT NULL,
  `evaluacion_tipo_nota_dos_primer_periodo` varchar(50) DEFAULT NULL,
  `nota_tres_primer_periodo` decimal(2,2) UNSIGNED DEFAULT NULL,
  `evaluacion_tipo_nota_tres_primer_periodo` varchar(50) DEFAULT NULL,
  `promedio_primer_periodo` int(2) UNSIGNED DEFAULT NULL,
  `desarrollo_personalSocial_primer_periodo` varchar(1) NOT NULL,
  `fecha_promedio_primer_periodo` date DEFAULT NULL,
  `nota_uno_segundo_periodo` decimal(2,2) UNSIGNED DEFAULT NULL,
  `evaluacion_tipo_nota_uno_segundo_periodo` varchar(50) DEFAULT NULL,
  `nota_dos_segundo_periodo` decimal(2,2) UNSIGNED DEFAULT NULL,
  `evaluacion_tipo_nota_dos_segundo_periodo` varchar(50) DEFAULT NULL,
  `nota_tres_segundo_periodo` decimal(2,2) UNSIGNED DEFAULT NULL,
  `evaluacion_tipo_nota_tres_segundo_periodo` varchar(50) DEFAULT NULL,
  `promedio_segundo_periodo` int(2) UNSIGNED DEFAULT NULL,
  `desarrollo_personalSocial_segundo_periodo` varchar(1) NOT NULL,
  `fecha_promedio_segundo_periodo` date DEFAULT NULL,
  `nota_uno_tercer_periodo` decimal(2,2) UNSIGNED DEFAULT NULL,
  `evaluacion_tipo_nota_uno_tercer_periodo` varchar(50) DEFAULT NULL,
  `nota_dos_tercer_periodo` decimal(2,2) UNSIGNED DEFAULT NULL,
  `evaluacion_tipo_nota_dos_tercer_periodo` varchar(50) DEFAULT NULL,
  `nota_tres_tercer_periodo` decimal(2,2) UNSIGNED DEFAULT NULL,
  `evaluacion_tipo_nota_tres_tercer_periodo` varchar(50) DEFAULT NULL,
  `promedio_tercer_periodo` int(2) UNSIGNED DEFAULT NULL,
  `desarrollo_personalSocial_tercer_periodo` varchar(1) NOT NULL,
  `fecha_promedio_tercer_periodo` date DEFAULT NULL,
  `promedio_a_termino` decimal(2,2) UNSIGNED DEFAULT NULL,
  `fecha_promedio_a_termino` date DEFAULT NULL,
  `nota_en_diciembre` decimal(2,2) UNSIGNED DEFAULT NULL,
  `fecha_nota_en_diciembre` date DEFAULT NULL,
  `nota_en_marzo` decimal(2,2) UNSIGNED DEFAULT NULL,
  `fecha_nota_en_marzo` date DEFAULT NULL,
  `promedio_final` decimal(2,2) UNSIGNED DEFAULT NULL,
  `fecha_promedio_final` date DEFAULT NULL,
  `estado` varchar(25) NOT NULL,
  `observaciones` text CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `alumno_id` int(11) NOT NULL,
  `materia_id` int(11) NOT NULL,
  `ciclo_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) CHARACTER SET latin1 NOT NULL,
  `marca` varchar(100) CHARACTER SET latin1 NOT NULL,
  `cantidad` int(5) NOT NULL,
  `proovedor` varchar(100) CHARACTER SET latin1 NOT NULL,
  `ubicacion` text CHARACTER SET latin1 NOT NULL,
  `areaDestino` varchar(100) CHARACTER SET latin1 NOT NULL,
  `observacion` text CHARACTER SET latin1,
  `inventario_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `tipo_servicio` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_solicitud_servicio` date DEFAULT NULL,
  `estado` varchar(50) NOT NULL,
  `prestador` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `docente_profesional_acargo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `tipo_alta` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_alta` date NOT NULL,
  `tipo_baja` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `fecha_baja` date DEFAULT NULL,
  `total_dias_asistencia` int(3) NOT NULL,
  `total_dias_inasistencia` int(3) NOT NULL,
  `observaciones` varchar(200) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `informe` varchar(255) DEFAULT NULL,
  `informe_dir` varchar(255) DEFAULT NULL,
  `creado` date NOT NULL,
  `modificado` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `alumno_id` int(11) NOT NULL,
  `ciclo_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulacions`
--

CREATE TABLE `titulacions` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `certificacion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `condicion_ingreso` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `ciclo_implementacion` varchar(4) NOT NULL,
  `ciclo_finalizacion` varchar(4) DEFAULT NULL,
  `tipo_formacion` varchar(25) NOT NULL,
  `tipo` varchar(25) NOT NULL,
  `a_termino` tinyint(1) NOT NULL,
  `orientacion` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `organizacion_plan` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `plan_estudio` varchar(255) NOT NULL,
  `organizacion_cursada` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `forma_dictado` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `carga_horaria_en` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `carga_horaria` int(3) NOT NULL,
  `edad_minima` int(2) NOT NULL,
  `tiene_articulacion` varchar(50) DEFAULT NULL,
  `duracion_en` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL,
  `duracion` int(2) NOT NULL,
  `norma_aprob_jur_tipo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `norma_aprob_jur_nro` varchar(10) DEFAULT NULL,
  `norma_aprob_jur_anio` int(4) DEFAULT NULL,
  `norma_val_nac_tipo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `norma_val_nac_nro` varchar(10) DEFAULT NULL,
  `norma_val_nac_anio` int(4) DEFAULT NULL,
  `norma_ratif_jur_tipo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `norma_ratif_jur_nro` varchar(10) DEFAULT NULL,
  `norma_ratif_jur_anio` int(4) DEFAULT NULL,
  `norma_homologacion_tipo` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `norma_homologacion_nro` varchar(10) DEFAULT NULL,
  `norma_homologacion_anio` int(4) DEFAULT NULL,
  `centro_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titulos`
--

CREATE TABLE `titulos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) CHARACTER SET latin1 NOT NULL,
  `tipo` varchar(100) CHARACTER SET latin1 NOT NULL,
  `institucion` varchar(100) CHARACTER SET latin1 NOT NULL,
  `docente_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(128) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(128) NOT NULL,
  `role` varchar(64) CHARACTER SET latin1 NOT NULL,
  `puesto` varchar(50) CHARACTER SET latin1 NOT NULL,
  `centro_id` int(11) NOT NULL,
  `empleado_id` int(11) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `alumnos_mesaexamens`
--
ALTER TABLE `alumnos_mesaexamens`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `barrios`
--
ALTER TABLE `barrios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `cargos_ciclos`
--
ALTER TABLE `cargos_ciclos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cargo_id` (`cargo_id`,`ciclo_id`);

--
-- Indices de la tabla `cargos_docentes`
--
ALTER TABLE `cargos_docentes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `docente_id` (`docente_id`,`cargo_id`);

--
-- Indices de la tabla `cargos_empleados`
--
ALTER TABLE `cargos_empleados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `empleado_id` (`empleado_id`,`cargo_id`);

--
-- Indices de la tabla `centros`
--
ALTER TABLE `centros`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`),
  ADD UNIQUE KEY `sigla` (`sigla`);

--
-- Indices de la tabla `centros_empleados`
--
ALTER TABLE `centros_empleados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `empleado_id` (`empleado_id`,`centro_id`);

--
-- Indices de la tabla `ciclos`
--
ALTER TABLE `ciclos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ciclo` (`nombre`);

--
-- Indices de la tabla `ciclos_cursos`
--
ALTER TABLE `ciclos_cursos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ciclos_cursos` (`ciclo_id`,`curso_id`);

--
-- Indices de la tabla `correlativas`
--
ALTER TABLE `correlativas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `correlativas_materias`
--
ALTER TABLE `correlativas_materias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cursos_inasistencias`
--
ALTER TABLE `cursos_inasistencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cursos_inscripcions`
--
ALTER TABLE `cursos_inscripcions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dni` (`dni`);

--
-- Indices de la tabla `documento_tipos`
--
ALTER TABLE `documento_tipos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `dni` (`documento_nro`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `event_types`
--
ALTER TABLE `event_types`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `familiars`
--
ALTER TABLE `familiars`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `i18n`
--
ALTER TABLE `i18n`
  ADD PRIMARY KEY (`id`),
  ADD KEY `locale` (`locale`),
  ADD KEY `model` (`model`),
  ADD KEY `row_id` (`foreign_key`),
  ADD KEY `field` (`field`);

--
-- Indices de la tabla `inasistencias`
--
ALTER TABLE `inasistencias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inasistencias_materias`
--
ALTER TABLE `inasistencias_materias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inscripcions`
--
ALTER TABLE `inscripcions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inscripcions_materias`
--
ALTER TABLE `inscripcions_materias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `inscripcion_id` (`inscripcion_id`,`materia_id`);

--
-- Indices de la tabla `integracions`
--
ALTER TABLE `integracions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventarios`
--
ALTER TABLE `inventarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `licencias`
--
ALTER TABLE `licencias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articulo` (`articulo`);

--
-- Indices de la tabla `materias`
--
ALTER TABLE `materias`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `alia` (`alia`);

--
-- Indices de la tabla `mesaexamens`
--
ALTER TABLE `mesaexamens`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `titulacions`
--
ALTER TABLE `titulacions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indices de la tabla `titulos`
--
ALTER TABLE `titulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nombreUsuario` (`username`,`password`),
  ADD UNIQUE KEY `nombreUsuario_2` (`username`),
  ADD UNIQUE KEY `clave` (`password`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnos_mesaexamens`
--
ALTER TABLE `alumnos_mesaexamens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `barrios`
--
ALTER TABLE `barrios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT de la tabla `cargos`
--
ALTER TABLE `cargos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cargos_ciclos`
--
ALTER TABLE `cargos_ciclos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cargos_docentes`
--
ALTER TABLE `cargos_docentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cargos_empleados`
--
ALTER TABLE `cargos_empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `centros`
--
ALTER TABLE `centros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `centros_empleados`
--
ALTER TABLE `centros_empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ciclos`
--
ALTER TABLE `ciclos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `ciclos_cursos`
--
ALTER TABLE `ciclos_cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `correlativas`
--
ALTER TABLE `correlativas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `correlativas_materias`
--
ALTER TABLE `correlativas_materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `cursos_inasistencias`
--
ALTER TABLE `cursos_inasistencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `cursos_inscripcions`
--
ALTER TABLE `cursos_inscripcions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `documento_tipos`
--
ALTER TABLE `documento_tipos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `event_types`
--
ALTER TABLE `event_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `familiars`
--
ALTER TABLE `familiars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `i18n`
--
ALTER TABLE `i18n`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inasistencias`
--
ALTER TABLE `inasistencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inasistencias_materias`
--
ALTER TABLE `inasistencias_materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inscripcions`
--
ALTER TABLE `inscripcions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `inscripcions_materias`
--
ALTER TABLE `inscripcions_materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `integracions`
--
ALTER TABLE `integracions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `inventarios`
--
ALTER TABLE `inventarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `licencias`
--
ALTER TABLE `licencias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `materias`
--
ALTER TABLE `materias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT de la tabla `mesaexamens`
--
ALTER TABLE `mesaexamens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `titulacions`
--
ALTER TABLE `titulacions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `titulos`
--
ALTER TABLE `titulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
