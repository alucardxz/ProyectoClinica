-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-10-2020 a las 02:36:38
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `clinica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alimentos`
--

CREATE TABLE `alimentos` (
  `Id-alimento` int(10) NOT NULL,
  `Alimento` varchar(50) DEFAULT NULL,
  `Categoria` varchar(50) DEFAULT NULL,
  `Cantidad` float DEFAULT NULL,
  `Unidad` varchar(20) DEFAULT NULL,
  `P-bruto` int(10) DEFAULT NULL,
  `P-neto` int(10) DEFAULT NULL,
  `Energia` int(10) DEFAULT NULL,
  `Proteina` float DEFAULT NULL,
  `Lipidos` float DEFAULT NULL,
  `Hidratos` float DEFAULT NULL,
  `Fibra` float DEFAULT NULL,
  `Vitamina-a` float DEFAULT NULL,
  `Acido-as` float DEFAULT NULL,
  `Acido-fo` float DEFAULT NULL,
  `Hierro` float DEFAULT NULL,
  `Potasio` float DEFAULT NULL,
  `Agua` float DEFAULT NULL,
  `Indice` varchar(5) DEFAULT NULL,
  `Carga` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alimentos`
--

INSERT INTO `alimentos` (`Id-alimento`, `Alimento`, `Categoria`, `Cantidad`, `Unidad`, `P-bruto`, `P-neto`, `Energia`, `Proteina`, `Lipidos`, `Hidratos`, `Fibra`, `Vitamina-a`, `Acido-as`, `Acido-fo`, `Hierro`, `Potasio`, `Agua`, `Indice`, `Carga`) VALUES
(8, 'Alcachofa mediana cocida', 'Verduras', 1, 'pieza', 120, 48, 25, 1.4, 0.2, 5.7, 4.1, 0.5, 3.6, 4.2, 0.3, 137.3, 137.3, '0', '0'),
(9, 'Berro crudo', 'Verduras', 1, 'taza', 34, 28, 4, 0.8, 0, 0.4, 0.2, 54, 14, 17.8, 0.6, 112, 112, '0', '0'),
(10, 'Betabel crudo', 'Verduras', 1, 'taza', 43, 39, 19, 0.8, 0.1, 4.3, 0.3, 0.8, 7.8, 36.4, 0.6, 131, 131, 'ND', 'ND'),
(11, 'Cebolla cocida', 'Verduras', 1, 'taza', 53, 53, 23, 0.7, 0.1, 5.3, 0.7, 0, 2.7, 7.9, 0.1, 87, 87, 'ND', 'ND');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `Id-Producto` int(100) NOT NULL,
  `Nombre Producto` text DEFAULT NULL,
  `Tamaño` double DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `Existencia` int(10) DEFAULT NULL,
  `Pre-pro` double DEFAULT NULL,
  `Pre-cli` double DEFAULT NULL,
  `Proveedor` text DEFAULT NULL,
  `Foto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`Id-Producto`, `Nombre Producto`, `Tamaño`, `Descripcion`, `Existencia`, `Pre-pro`, `Pre-cli`, `Proveedor`, `Foto`) VALUES
(8, 'vitamina b12', 500, 'la vitamina sirve para....', 2, 500, 599, 'onmilife', NULL),
(9, '', 0, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 0, 0, 0, 'Proveedor', NULL),
(10, '', 0, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 0, 0, 0, 'pro', NULL),
(11, 'nombre', 0, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 0, 0, 0, 'pro', NULL),
(12, 'nombre', 0, 'producto', 0, 0, 0, 'pro', NULL),
(13, 'nombre', 0, 'producto', 0, 0, 0, 'Proveedor', NULL),
(14, 'nombre', 0, 'producto', 0, 0, 0, 'Proveedor', NULL),
(15, '', 0, 'Ayuda a bla bla bla ', 0, 0, 0, '', NULL),
(16, '', 0, 'Ayuda a bla bla bla ', 0, 0, 0, '', NULL),
(17, 'Vitamina A', 0, 'Ayuda a bla bla bla ', 0, 0, 0, '', NULL),
(18, 'Vitamina A', 1, 'Ayuda a bla bla bla ', 20, 0, 0, '', NULL),
(19, 'Vitamina A', 1, 'Ayuda a bla bla bla ', 20, 1000, 1100, 'Omnilife', NULL),
(20, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(21, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(22, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(23, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(24, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(25, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(26, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(27, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(28, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(29, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(30, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(31, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(32, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(33, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(34, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(35, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(36, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(37, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(38, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(39, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(40, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(41, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(42, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(43, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(44, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(45, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(46, 'Womens multi +', 1500, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 10, 1000, 1100, 'life', NULL),
(47, 'Vitamina A', 300, 'es un producto.....', 1, 200, 500, 'Herbalife', NULL),
(48, 'Womens multi', 350, 'Ayuda a bla bla bla ', 2, 200, 250, 'Omnilife', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terapia`
--

CREATE TABLE `terapia` (
  `Id_terapia` int(11) NOT NULL,
  `Nombre terapia` varchar(50) DEFAULT NULL,
  `Beneficios` varchar(255) DEFAULT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  `Duracion` varchar(30) DEFAULT NULL,
  `Precio` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `terapia`
--

INSERT INTO `terapia` (`Id_terapia`, `Nombre terapia`, `Beneficios`, `Descripcion`, `Duracion`, `Precio`) VALUES
(1, 'Acupuntura', 'Baja de peso', 'La acupuntura es una técnica de la medicina tradicional china que consiste en la inserción de pequeñas agujas en puntos claves del cuerpo, con el objetivo de favorecer o restablecer la salud y bienestar del individuo. Desde hace ya mucho tiempo, esta tera', '30 min', 150),
(2, 'Maderoterapia', 'baja de peso, mejora la digestion', 'ayudaa....', '1 hora', 200),
(3, 'Maderoterapia', 'baja de peso, mejora la digestion', 'ayudaa....', '1 hora', 200),
(4, 'Maderoterapia', 'baja de peso, mejora la digestion', 'ayudaa....', '1 hora', 200),
(5, 'Dieta cenogenica', 'Ayuda a bajar de peso ', 'es un metodo....', '1 año', 100);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alimentos`
--
ALTER TABLE `alimentos`
  ADD PRIMARY KEY (`Id-alimento`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id-Producto`);

--
-- Indices de la tabla `terapia`
--
ALTER TABLE `terapia`
  ADD PRIMARY KEY (`Id_terapia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alimentos`
--
ALTER TABLE `alimentos`
  MODIFY `Id-alimento` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id-Producto` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `terapia`
--
ALTER TABLE `terapia`
  MODIFY `Id_terapia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
