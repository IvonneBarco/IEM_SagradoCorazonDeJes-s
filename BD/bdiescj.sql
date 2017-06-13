-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-03-2017 a las 16:42:54
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bdiescj`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificado`
--

CREATE TABLE `certificado` (
  `codcertificado` int(11) NOT NULL,
  `numlibro` varchar(3) DEFAULT NULL,
  `numfolio` varchar(3) DEFAULT NULL,
  `idestudiante` varchar(15) NOT NULL,
  `fecha` date DEFAULT NULL,
  `iddocente` varchar(15) NOT NULL,
  `agrado` varchar(10) DEFAULT NULL,
  `tipodoc` varchar(10) DEFAULT NULL,
  `lugarexp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `certificado`
--

INSERT INTO `certificado` (`codcertificado`, `numlibro`, `numfolio`, `idestudiante`, `fecha`, `iddocente`, `agrado`, `tipodoc`, `lugarexp`) VALUES
(2, '105', '10', '09876543221', '2017-03-18', '1085308112', '2014', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `ip` int(11) NOT NULL,
  `usuario` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `comentario` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`ip`, `usuario`, `email`, `comentario`) VALUES
(0, 'laura', 'lauritammm', 'bbbbbbbbbbbbbbbbbbb'),
(1, 'marcela', 'lisam@gmail.com', 'sddsfsdfsdf'),
(2, 'juan', 'juan@gmail.com', 'esta es una segunda prueba'),
(3, 'luisa', 'luisa@hotmail.com', 'fffff'),
(4, 'fdjdfjdd', 'sfdf', 'sfgdfg'),
(5, 'ggg', 'dddd', 'fgggg'),
(6, 'vvvv', 'vvvv', 'vvvvvvv'),
(7, 'jorge', 'jorge@gmail.com', 'esta es una prueba'),
(8, 'Ivonne', 'user@user.com', 'texto de comentario'),
(9, 'Carolina', 'user@user.com', 'Mi primer comentario\r\n                                                \r\n                                            ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `idcontactos` varchar(15) NOT NULL,
  `nomcontactos` varchar(80) NOT NULL,
  `correocontactos` varchar(150) DEFAULT NULL,
  `telcontactos` varchar(30) DEFAULT NULL,
  `sugerencias` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`idcontactos`, `nomcontactos`, `correocontactos`, `telcontactos`, `sugerencias`) VALUES
('10784280', 'Carlos', 'user@user.com', '7852', 'qwerty     '),
('1085308112', 'Ivonne', 'user@user.com', '789456', 'qqqqq'),
('11111', 'Jose', 'ttt@hotmail.com', '4444', 'sugerencia 1'),
('111111', 'carlos', 'sss@gmail.com', '66655', 'alslsfff'),
('18053081122', 'Alex', 'user@user.com', '315578505', 'qwerty                        '),
('180530812', 'Alex', 'user@user.com', '315578505', 'qwerty                        '),
('598888', 'Jose', 'jose@user.com', '789456', '**************');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `iddocente` varchar(15) NOT NULL,
  `nomdocente` varchar(80) DEFAULT NULL,
  `espedocente` varchar(200) DEFAULT NULL,
  `cargodocente` varchar(80) DEFAULT NULL,
  `foto` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`iddocente`, `nomdocente`, `espedocente`, `cargodocente`, `foto`) VALUES
('1085308112', 'Ivonne Carolina', 'Sistemas', 'Docente', '8.png'),
('1085308113', 'Ana Lucia', 'Docente', 'Licenciada en Preescolar', '8.png'),
('1085308114', 'Marcos Lopez', 'Sistemas', 'Docente', 'icono38.png'),
('1085308115', 'Catalina Barco', 'Licenciada en Preescolar', 'Docente', '2.png'),
('1085308116', 'Maria', 'Licenciada en Preescolar', 'Docente', '3.jpg'),
('1085308117', 'Julieta', 'Licenciada en Preescolar', 'Docente', '5.png'),
('1085308119', 'Teresa', 'Licenciada en Preescolar', 'Docente', '8.png'),
('1085308120', 'Adriana', 'Licenciada en Preescolar', 'Docente', '7.png'),
('1085308212', 'Luz', 'Licenciada en Preescolar', 'Docente', '5.png'),
('13061473', 'Humberto Ortega RodrÃ­guez', 'Esp. en administraciÃ³n', 'Rector', 'foto11.jpg'),
('27436077', 'Martha Ligia Cabrera GarcÃ­a', 'Lic. en BÃ¡sica Primaria', 'Docente', 'foto9.jpg'),
('30737985', 'Omayra OrdoÃ±ez', 'Lic. en BÃ¡sica Primaria', 'Docente', 'foto8.jpg'),
('52068577', 'Patricia Chamorro Burbano', 'Lic. en BiologÃ­a', 'Docente', 'foto7.jpg'),
('5333692', 'Antonio MartÃ­nez Fajardo', 'Lic. en BÃ¡sica Primaria', 'Docente', 'foto1.jpg'),
('59815767', 'Magaly MorÃ¡n ChÃ¡ves', 'Lic. en Lenguas Modernas', 'Docente', 'magalymoran.jpg'),
('59819795', 'Mercedes Benavides Cabrera', 'Lic. en QuÃ­mica', 'Docente', 'foto3.jpg'),
('59828834', 'Patricia Enriquez', 'Licenciada en Preescolar', 'Docente', '8.png'),
('87570072', 'Favio Meneses Guerrero', 'Lic. en matemÃ¡ticas', 'Docente', 'foto10.jpg'),
('87570393', 'Luis RodrÃ­guez PabÃ³n ', 'Lic. en EducaciÃ³n FÃ­sica', 'Docente', 'foto6.jpg'),
('87571251', 'Pedro Burbano Rosas', 'Mg. en Etnoliteratura', 'Docente', 'foto4.jpg'),
('87571398', 'Hector Pantoja Guzman', 'Lic. en Comercio y ContadurÃ­a', 'Docente', 'foto2.jpg'),
('87571400', 'Oswaldo MartÃ­nez MorÃ¡n', 'Lic. en Ciencias Sociales', 'Docente', 'foto5.jpg'),
('98385367', 'Adilson Barahona Riascos', 'Lic. en FÃ­sica', 'Docente', 'foto12.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `idestudiante` varchar(15) NOT NULL,
  `tipodocumento` varchar(30) NOT NULL,
  `lugarexpedicion` varchar(30) NOT NULL,
  `nomestudiante` varchar(80) DEFAULT NULL,
  `direstudiante` varchar(50) DEFAULT NULL,
  `correoestudiante` varchar(40) DEFAULT NULL,
  `telestudiante` varchar(15) DEFAULT NULL,
  `estado` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`idestudiante`, `tipodocumento`, `lugarexpedicion`, `nomestudiante`, `direstudiante`, `correoestudiante`, `telestudiante`, `estado`) VALUES
('09876543221', 'C.C.', 'Pasto', 'Juan Pablo OrtÃ­z', 'SandonÃ¡', 'juanpa@gmail.com', '3125667890', 'Estudiante'),
('10853081130', 'C.C.', 'Pasto', 'Ivonne Carolina', 'Mz 3', 'user@user.com', '315774411', 'Estudiante'),
('1085551213', 'C.C.', '22/10/1992', 'MarÃ­a Jose', 'Mz 3', 'user@user.com', '3155555', 'Estudiante'),
('123456', 'T.I.', 'Pedro', 'Andrade', 'Mz 2', 'myuser@user.com', '12345', 'Egresado'),
('1234567890', 'T.I.', 'SandonÃ¡', 'MarÃ­a Fernanda LÃ³pez', 'El Ingenio', 'maria@gmail.com', '3126789900', 'Estudiante'),
('22222', 'T.I.', 'Sandona', 'MarÃ­a Fernanda Ortega Torres', 'Sandona', 'ggg@hotmail.com', '3554455', 'Egresado'),
('55555', 'T.I.', 'Sandona', 'Lorena', 'Sandona', 'ggg@gmail.com', '44458', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material`
--

CREATE TABLE `material` (
  `idmat` varchar(20) NOT NULL,
  `titulo` varchar(200) DEFAULT NULL,
  `grado` varchar(30) DEFAULT NULL,
  `area` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  `archivo` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `material`
--

INSERT INTO `material` (`idmat`, `titulo`, `grado`, `area`, `archivo`) VALUES
('0000', 'Material 1', '7', 'TecnologÃ­a e informÃ¡tica', 'documentos/Material1.docx'),
('0001', 'Material 3', '6', 'Ciencias naturales y educaciÃ³n ambiental', 'documentos/Carta Informativa David.pdf'),
('0002', 'Mterial4', '6', 'Ciencias sociales, historia, geografÃ­a, constituciÃ³n polÃ­tica y democracia', 'documentos/franzy.pdf'),
('0003', 'Material 4', '6', 'Humanidades, lengua castellana e idiomas extranjeros', 'documentos/banner.jpg'),
('0004', 'qq', '6', 'Ciencias naturales y educaciÃ³n ambiental', 'documentos/');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `idnoticia` int(11) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `descripcion` text NOT NULL,
  `estado` varchar(10) NOT NULL,
  `orden` int(2) NOT NULL,
  `imagen` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`idnoticia`, `titulo`, `descripcion`, `estado`, `orden`, `imagen`) VALUES
(1, 'Banner', 'a                                                                                            ', 'Activa', 1, 'banner2.jpg'),
(2, 'q', 'q                                                \r\n                                            ', 'Activa', 1, '0be88317-50aa-4766-b689-63270a925582.jpg'),
(3, 'Noticia', 'Noticia                                                \r\n                                            ', 'Activa', 1, '16904943_1367507169986607_1554031571567872473_o.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagmision`
--

CREATE TABLE `pagmision` (
  `titulo` varchar(300) DEFAULT NULL,
  `texto` text,
  `seccion` int(11) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pagmision`
--

INSERT INTO `pagmision` (`titulo`, `texto`, `seccion`, `imagen`) VALUES
('', '', 0, ''),
('MISIÃ“N', 'MISIÃ“N Somos una InstituciÃ³n educativa de carÃ¡cter oficial, ubicada en el corregimiento de el Ingenio, municipio de Sandona que se caracteriza por el profesionalismo, compromiso y responsabilidad, lo cual permite formar personas criticas, competentes y Ã¡rticas capaces de transformar su contexto.Somos una InstituciÃ³n educativa de carÃ¡cter oficial, ubicada en el corregimiento de el Ingenio, municipio de Sandona que se caracteriza por el profesionalismo, compromiso y responsabilidad, lo cual permite formar personas criticas, competentes y Ã¡rticas capaces de transformar su contexto. esta es una prueba para la misiÃ³n                                                \r\n                                            ', 1, 'imgPrueba.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagobjetivos`
--

CREATE TABLE `pagobjetivos` (
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  `seccion` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pagobjetivos`
--

INSERT INTO `pagobjetivos` (`titulo`, `texto`, `seccion`, `imagen`) VALUES
('Objetivos EspecÃ­ficos Institucionales', '<h4>Proceso Administrativo</h4>\r\n*Ejecutar ,controlar y evaluar el programa del PEI.<br>\r\n*Ampliar los medios y mecanismos de informaciÃ³n y comunicaciÃ³n entre los diferentes estamentos de la instituciÃ³n.<br>\r\n<h4>Proceso Academico</h4>\r\n*Garantizar el funcionamiento de los comitÃ©s AcadÃ©micos, Directivos del Consejo de Padres de Familia, ComitÃ© de evaluaciÃ³n y promociÃ³n del Consejo Estudiantil.<br>\r\n*Incrementar la comunicaciÃ³n efectiva y productiva entre Padres de Familia, estudiantes, profesores y directivos, de comÃºn acuerdo con la reforma pedagÃ³gica y la Ley General de EducaciÃ³n.<br>\r\n*Propiciar el desarrollo de procesos cognoscitivo, socio - afectivo, psicomotor y las habilidades comunicativas de los estudiantes.<br>\r\n<h4>Proceso Financiero</h4>\r\n*Presentar al inicio del aÃ±o lectivo, el proyecto de presupuesto de Ingresos y gastos de la instituciÃ³n.<br>\r\n*Presentar a planeaciÃ³n de la Secretaria de EducaciÃ³n Departamental el proyecto de presupuesto para el aÃ±o fiscal.<br>\r\n*Presentar un informe trimestral de ingresos, gastos y egresos.<br>\r\n*Organizar un mecanismo efectivo de control de contabilidad.\r\nGestiÃ³n del Bienestar, OrientaciÃ³n y AsesorÃ­a.<br>\r\n*Mejorar los servicios de Bienestar Estudiantil: Ã©tica y moral.<br>\r\n*Mejorar los ambientes y oportunidades de recreaciÃ³n , cultura y deporte para el empleo del tiempo libre.<br>\r\n*Mejorar la integraciÃ³n familiar ,institucional, acadÃ©mica y formativa.<br>\r\n*Mejorar los servicios de bienestar del personal docente y administrativo.<br>\r\n*Nombrar una secretaria habilitada para el manejo del presupuesto de la instituciÃ³n .', 1, '8.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagprincipios`
--

CREATE TABLE `pagprincipios` (
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  `seccion` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pagprincipios`
--

INSERT INTO `pagprincipios` (`titulo`, `texto`, `seccion`, `imagen`) VALUES
('PRINCIPIOS', 'La InstituciÃ³n Educativa Sagrado CorazÃ³n de JesÃºs tiene como principios de la educaciÃ³n que imparte, los siguientes:\r\n*Antes que un producto la educaciÃ³n es un proceso de desarrollo y madurez integrales.\r\n*El educando es gestor de su propia formaciÃ³n, y la InstituciÃ³n Educativa le ofrecerÃ¡ orientaciÃ³n y asesorÃ­a, y un tiempo, un espacio y un ambiente adecuado a su formaciÃ³n.\r\n*Todos los componentes curriculares, los recursos humanos, materiales educativos y la administraciÃ³n estarÃ¡n en funciÃ³n de la formaciÃ³n integral del educando.\r\n*El proceso educativo se entenderÃ¡ como el conjunto de acciones mentales psicomotrices, afectivas que desarrollarÃ¡ cada educando para formarse integralmente. \r\n*Siendo el educando el primer responsable de su formaciÃ³n, el educador serÃ¡ el animador, dinamizador y asesor pedagÃ³gico del proceso de formaciÃ³n integral. \r\n*La formaciÃ³n impartida por la InstituciÃ³n Educativa SAGRADO CORAZON DE JESUS, no debe servir solamente para vivir o sobrevivir, sino principalmente para el crecimiento, para ser capaces de producir transformaciones.\r\n*En el trabajo, en el AULA se pretenderÃ¡ por hacer: REFLEXION -PRODUCCION - REFLEXION.', 1, '8.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagresena`
--

CREATE TABLE `pagresena` (
  `titulo` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  `seccion` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pagresena`
--

INSERT INTO `pagresena` (`titulo`, `texto`, `seccion`, `imagen`) VALUES
('RESEÃ‘A HISTORICA', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis lectus lorem. Sed placerat urna mi, bibendum posuere nibh vulputate vel. Etiam sodales justo id dolor lacinia egestas. Aenean magna nisl, maximus eu elit sit amet, posuere luctus lectus. Proin malesuada orci in leo euismod imperdiet. Proin et nulla eu felis hendrerit faucibus ac id urna. Morbi vestibulum a velit id pellentesque. Pellentesque tempor, nunc vitae malesuada accumsan, neque elit aliquam ipsum, a commodo ante arcu eu orci.', 1, '8.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagsimbolos`
--

CREATE TABLE `pagsimbolos` (
  `titulo` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  `seccion` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pagsimbolos`
--

INSERT INTO `pagsimbolos` (`titulo`, `texto`, `seccion`, `imagen`) VALUES
('EL ESCUDO', 'Este emblema de la instituciÃ³n educativa consta de los siguientes elementos: \r\nÃguila: dicha figura herÃ¡ldica fue inspirada por las caracterÃ­sticas naturales que el ave posee: es el sÃ­mbolo de la astucia, viveza, agilidad, siendo la mÃ¡s importante su agudeza visual; despliega sus alas como sÃ­mbolo de abrirse al mundo.\r\nEl nombre de la instituciÃ³n estÃ¡ ubicado en la parte superior, sobre una cinta color azul celeste, color principal de la bandera del instituto santo tomas de Aquino, de la cual fuimos extensiÃ³n, en dicha se lee: â€œColegio Sagrado CorazÃ³n de JesÃºsâ€.\r\nUn poco mÃ¡s abajo y en forma semicircular, aparecen tres franjas al lado y lado del Ã¡guila y a distinta longitud la una de la otra, cuyos colores representan en forma descendente, la bandera de la instituciÃ³n educativa: amarillo, rojo y verde significados que serÃ¡n descritos posteriormente. En el centro del escudo aparece un sol naciente con siete rayos luminosos, sÃ­mbolo del origen del plantel.\r\nEl Ã¡guila carga en su pecho dos ramas de laurel con diez y siete (17) hojas alternas, rememorando los estudiantes pioneros que creyeron e iniciaron sus primeros pasos a la par con el plantel. En su interior aparece una estrella roja e 5 picos, sÃ­mbolo del trabajo comunitario, y un libro abierto como caracterÃ­stica Ãºnica del saber, la ciencia y la tecnologÃ­a.\r\nFinalmente, y bordeando el color verde, caracterÃ­stico de la naturaleza que nos rodea aparece una cinta en forma de graduador, en cuyo espacio horizontal, situado arriba se lee: â€œEl ingenio-SandonÃ â€ y en su semicÃ­rculo estÃ¡ el emblema institucional que dice: â€œDios, ciencia y trabajoâ€.\r\nNOTA: los bordes de las alas del Ã¡guila coinciden con la cinta azul celeste y el campo verde natural (graduador) con uno de los tres semicÃ­rculos.', 1, 'escudo.png'),
('LA BANDERA', '\r\nLa Bandera\r\n\r\n\r\nLa bandera de la instituciÃ³n educativa, adoptada en 1993 cuando la extensiÃ³n paso a ser Colegio Departamental Sagrado CorazÃ³n de JesÃºs, formada por tres franjas: roja, amarilla y blanca, con un triÃ¡ngulo equilÃ¡tero verde prÃ³ximo al asta. El rojo y amarillo como colores propios de la bandera del sagrado corazÃ³n de JesÃºs y el verde sÃ­mbolo ecolÃ³gico. En la franja central de color blanco hay una estrella roja de cinco picos iguales, sÃ­mbolo del trabajo.', 2, 'bandera.jpg'),
('EL LEMA', 'Se ha tomado como lema central â€œSIEMPRE SIRVIENDO CON LA AYUDA DE DIOSâ€, porque solo con el apoyo de Ã©l, se lograra las mÃ¡ximas metas que el hombre se propone, ademÃ¡s porque trabajamos con una comunidad educativa religiosa y catÃ³lica por excelencia.', 3, 'img22.gif');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagvalores`
--

CREATE TABLE `pagvalores` (
  `titulo` varchar(100) NOT NULL,
  `texto` text NOT NULL,
  `seccion` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pagvalores`
--

INSERT INTO `pagvalores` (`titulo`, `texto`, `seccion`, `imagen`) VALUES
('Valores Institucionales', 'La InstituciÃ³n Educativa Sagrado CorazÃ³n de JesÃºs tiene como principios de la educaciÃ³n que imparte, los siguientes:<br> \r\nâ€¢Antes que un producto la educaciÃ³n es un proceso de desarrollo y madurez integrales. <br>\r\nâ€¢El educando es gestor de su propia formaciÃ³n , y la InstituciÃ³n Educativa le ofrecerÃ¡ orientaciÃ³n, asesorÃ­a, y un tiempo, un espacio y un ambiente adecuado a su formaciÃ³n.<br>\r\nâ€¢Todos los componentes curriculares, los recursos humanos, materiales educativos y la administraciÃ³n estarÃ¡n en funciÃ³n de la formaciÃ³n integral del educando. <br>\r\nâ€¢El proceso educativo se entenderÃ¡ como el conjunto de acciones mentales psicomotrices, afectivas que desarrollarÃ¡ cada educando para formarse integralmente.<br> \r\nâ€¢Siendo el educando el primer responsable de su formaciÃ³n, el educador serÃ¡ el animador, dinamizador y asesor pedagÃ³gico del proceso de formaciÃ³n integral. <br>\r\nâ€¢La formaciÃ³n impartida por la InstituciÃ³n Educativa SAGRADO CORAZON DE JESUS , no debe servir solamente para vivir o sobrevivir, sino principalmente para el crecimiento, para ser capaces de producir transformaciones.<br> \r\nâ€¢En el trabajo , en el AULA se pretenderÃ¡ por hacer : REFLEXION -PRODUCCION - REFLEXION.', 1, 'fotos/valores.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagvision`
--

CREATE TABLE `pagvision` (
  `titulo` varchar(100) DEFAULT NULL,
  `texto` text,
  `seccion` int(11) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pagvision`
--

INSERT INTO `pagvision` (`titulo`, `texto`, `seccion`, `imagen`) VALUES
('VISIÃ“N', 'â€œLa educaciÃ³n con el corazÃ³n es la mejor inversiÃ³nâ€. Lograr que la InstituciÃ³n ofrezca una educaciÃ³n de impacto y de calidad que promueva el desarrollo personal y comunitario, enfatizado en los principios y valores para afrontar nuevos retos con el compromiso de todos sus estamentos.', 1, '8.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `titulo` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  `seccion` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `archivo` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`titulo`, `texto`, `seccion`, `imagen`, `archivo`) VALUES
('Proyecto1', 'Este es un proyecto de prueba', 1, 'programas3.png', 'formato_tesis_apa.pdf'),
('Proyecto2', 'Proyecto 2 de prueba', 2, 'banner2.jpg', ' '),
('Proyecto3', 'Proyecto 3 de prueba', 3, 'fondo.jpg', ' '),
('Proyecto4', 'Prueba proyecto 4', 4, 'DSC00216.JPG', ' '),
('Proyecto 2', 'aaaaaaaaaaaaaaaaaaaaaaaaa                 ', 5, 'DSC00220.JPG', 'formato_tesis_apa.pdf');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedealto`
--

CREATE TABLE `sedealto` (
  `titulo` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  `seccion` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sedealto`
--

INSERT INTO `sedealto` (`titulo`, `texto`, `seccion`, `imagen`) VALUES
('Sede Alto Ingenio', '<h3>MisiÃ³n</h3>\r\n<br>\r\nSomos un centro Educativo de carÃ¡cter oficial ubicado en la vereda Alto Ingenio, caracterizado por el profesionalismo, compromiso y responsabilidad, para formar personas competentes y Ã©ticas capaces de transformar su contexto.<br>\r\n\r\n<h3>VisiÃ³n</h3>\r\n\r\nEl centro Educativo Alto Ingenio ofrece una educaciÃ³n de calidad que promueve el desarrollo personal y comunitario haciendo Ã©nfasis en los principios y valores, para afrontar nuevos retos, con el compromiso de todos sus estamentos. <br>\r\n<h3>Objetivos Centro Educativo</h3>\r\n\r\n1. Formar personas capaces de tomar determinaciones respectivas, responsables, racionales y justas para que puedan enfrentar la realidad social actual con acierto y practicar la democracia.<br>\r\n2. Preparar personas para que aprecien y defiendan los valores culturales, para que adquieran los conocimientos cientÃ­ficos y tecnolÃ³gicos necesarios para vincularse al proceso socioeconÃ³mico y regional.<br>\r\n3. Operacionalizar los propÃ³sitos y mandatos educativos seÃ±alados por la constituciÃ³n polÃ­tica, la ley general y otras disposiciones con el fin de propiciar una educaciÃ³n integral de calidad para la vida y la democracia.<br>\r\n4. DiseÃ±ar mecanismos para la superaciÃ³n, el control y la evaluaciÃ³n de todas las actividades curriculares con la finalidad de asegurar la calidad educativa, el buen desempeÃ±o profesional de los docentes, los administrativos, la participaciÃ³n de los estudiantes, padres de familia en el gobierno escolar y el desarrollo de los procesos educativos.\r\n\r\n<h3>ReseÃ±a HistÃ³rica</h3>\r\nEn el aÃ±o 1910 la vereda alto ingenio estaba formado por las familias Bastidas Fajardo, Cajigas Fajardo, GÃ³mez Benavides, Navarro Batidas, Navarro Fajardo, poco se fue poblando hasta el aÃ±o 1935, 1945, la poblaciÃ³n se multiplica y fue entonces como se piensa en comprar una casa para que allÃ­ funcione la escuela se contaba en ese entonces con bastantes niÃ±os los cuales tenÃ­an que irse a estudiar a la escuela del Ingenio. Y fue como en el aÃ±o de 1950 la escuela se encuentra en una situaciÃ³n propicia para dar clases donde los profesores venÃ­an desde la ciudad de pasto.<br>\r\nEn el aÃ±o de 1961 se organiza la junta y en el aÃ±o de 1962 fue donde se da el nombre de Junta de AcciÃ³n Comunal, los integrantes de la JAC, piensan en distribuir la escuela en cursos, lo mismo que en la parte religiosa con el pÃ¡rroco del corregimiento del ingenio, el pÃ¡rroco Francisco Mora, por la distancia que habÃ­a y el mal camino para desplazarse en el aÃ±o de 1967, se reÃºnen los habitantes en casas familiares para tomar una decisiÃ³n un compromiso para pedir al gobierno departamental la realizaciÃ³n de una vÃ­a de penetraciÃ³n carretera, o la electrificaciÃ³n, debido a que las juntas de acciÃ³n comunal tenÃ­an la oficina en la gobernaciÃ³n departamental.<br>\r\nEn el aÃ±o 1968, se comienza con mingas hacer las brechas, en 1975 caminos vecinales desplaza la maquinaria y se lleva acabo la carretera. Como en Junio 30 del mismo aÃ±o se da por terminada la carretera, en Agosto del aÃ±o 1979 se la firma, la vereda se une y hace parte de la empresa Cenar. Y con ayuda polÃ­tica se planea la electrificaciÃ³n ese entonces como en 1982 se electrifica y en 1985 la comunidad se reÃºne y pide ayuda a la federaciÃ³n de cafeteros para el acueducto para la escuela que es prioridad en 1991 se construyen los acueductos de la parte alta de la vereda, en el aÃ±o 2006, 2007 se construye la segunda planta de de la escuela y en el aÃ±o 2009 se celebra con jÃºbilo y buen humor los 50 aÃ±os de la capilla y de la vereda esperamos seguir pensando y construyendo lo mejor para nuestra vereda.\r\n\r\n', 1, 'DSC00215.JPG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedebohorques`
--

CREATE TABLE `sedebohorques` (
  `titulo` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  `seccion` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sedebohorques`
--

INSERT INTO `sedebohorques` (`titulo`, `texto`, `seccion`, `imagen`) VALUES
('Sede Bohorques', 'contenido', 1, 'DSC00215.JPG');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sedesanantonio`
--

CREATE TABLE `sedesanantonio` (
  `titulo` varchar(300) NOT NULL,
  `texto` text NOT NULL,
  `seccion` int(11) NOT NULL,
  `imagen` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `sedesanantonio`
--

INSERT INTO `sedesanantonio` (`titulo`, `texto`, `seccion`, `imagen`) VALUES
('Sede San Antonio', '<h3>ReseÃ±a HistÃ³rica</h3>\r\n\r\n\r\nEl Centro Educativo funciona desde el 11 de junio de 1973 en una casa de tapia, techo de teja y madera, puertas grandes de madera, llaves grandes de hierro, sin patios, solo bordos en tierra. El alcalde de esta Ã©poca, el seÃ±or, Misael Meza compro esta casa a los esposos Otilia y AsaÃ©l MartÃ­nez en $ 20 pesos. A partir del aÃ±o de 1.999 el ideal fue arreglar la planta fÃ­sica y los diferentes espacios para mejorar la calidad educativa, poco a poco se ha conseguido muchos logros con la gestiÃ³n realizada por parte del director, con la ayuda de los niÃ±os, padres de familia y comunidad educativa. Es importante mencionar que tambiÃ©n hemos recibido ayuda por parte de la alcaldÃ­a, la FederaciÃ³n Nacional de Cafeteros, Empresas de NariÃ±o, La gobernaciÃ³n de NariÃ±o, recursos de la NaciÃ³n, Secretaria de EducaciÃ³n y muchas entidades y personas. Nuestro Centro Educativo consta de dos salones de clases, Biblioteca, una sala de informÃ¡tica, cocina y comedor, servicios higiÃ©nicos, un mini parque infantil, una bodega, patios, huerta, jardÃ­n y cerrado en malla.\r\n', 1, 'bkg.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tcalendario`
--

CREATE TABLE `tcalendario` (
  `id` int(255) NOT NULL,
  `fecha` date DEFAULT NULL,
  `evento` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tcalendario`
--

INSERT INTO `tcalendario` (`id`, `fecha`, `evento`) VALUES
(1, '2016-10-28', 'este es un evento'),
(2, '2016-10-28', 'este es un segundo evento hoy'),
(3, '2016-10-31', 'nuevo evento maÃ±ana'),
(4, '2017-02-15', 'Evento de prueba'),
(5, '2017-03-20', 'EVENTO 1'),
(6, '2017-03-24', 'rg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `codusuario` varchar(12) NOT NULL,
  `nomusuario` varchar(80) DEFAULT NULL,
  `correousuario` varchar(40) DEFAULT NULL,
  `conusuario` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`codusuario`, `nomusuario`, `correousuario`, `conusuario`) VALUES
('admin', 'Mary David', 'kamila.david4@gmail.com', '58b1216b06850385d9a4eadbedc806c4'),
('Ivonne', 'Ivonne Barco', 'user@user.com', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('marce', 'Marcela MartÃ­nez', 'lisamar04@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `certificado`
--
ALTER TABLE `certificado`
  ADD PRIMARY KEY (`codcertificado`),
  ADD KEY `fk_certificado_docentes1_idx` (`iddocente`),
  ADD KEY `fk_certificado_estudiante1_idx` (`idestudiante`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`ip`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`idcontactos`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`iddocente`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`idestudiante`);

--
-- Indices de la tabla `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`idmat`);

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`idnoticia`);

--
-- Indices de la tabla `pagmision`
--
ALTER TABLE `pagmision`
  ADD PRIMARY KEY (`seccion`);

--
-- Indices de la tabla `pagobjetivos`
--
ALTER TABLE `pagobjetivos`
  ADD PRIMARY KEY (`seccion`);

--
-- Indices de la tabla `pagprincipios`
--
ALTER TABLE `pagprincipios`
  ADD PRIMARY KEY (`seccion`);

--
-- Indices de la tabla `pagvision`
--
ALTER TABLE `pagvision`
  ADD PRIMARY KEY (`seccion`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`seccion`);

--
-- Indices de la tabla `sedealto`
--
ALTER TABLE `sedealto`
  ADD PRIMARY KEY (`seccion`);

--
-- Indices de la tabla `sedebohorques`
--
ALTER TABLE `sedebohorques`
  ADD PRIMARY KEY (`seccion`);

--
-- Indices de la tabla `sedesanantonio`
--
ALTER TABLE `sedesanantonio`
  ADD PRIMARY KEY (`seccion`);

--
-- Indices de la tabla `tcalendario`
--
ALTER TABLE `tcalendario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`codusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `certificado`
--
ALTER TABLE `certificado`
  MODIFY `codcertificado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `idnoticia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tcalendario`
--
ALTER TABLE `tcalendario`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `certificado`
--
ALTER TABLE `certificado`
  ADD CONSTRAINT `certificado_ibfk_1` FOREIGN KEY (`iddocente`) REFERENCES `docentes` (`iddocente`),
  ADD CONSTRAINT `fk_certificado_estudiante1` FOREIGN KEY (`idestudiante`) REFERENCES `estudiante` (`idestudiante`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
