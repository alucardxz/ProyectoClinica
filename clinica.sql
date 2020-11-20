-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2020 a las 03:16:36
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

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
(11, 'cebolla cocida', 'Verduras', 1, 'taza', 53, 53, 23, 0.7, 0.1, 5.3, 0.7, 0, 2.7, 7.9, 0.1, 87, 87, 'ND', 'ND'),
(12, '', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(13, '', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(14, '', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(15, '', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `IdCita` int(11) NOT NULL,
  `Nombre` text DEFAULT NULL,
  `Telefono` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Hora` time DEFAULT NULL,
  `Servicio` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`IdCita`, `Nombre`, `Telefono`, `email`, `Fecha`, `Hora`, `Servicio`) VALUES
(1, 'Leonardo', '12345', 'dannytapia12345@gmail.com', '2020-11-10', '07:57:46', 'consulta'),
(2, 'Juan Perez', '3424210789', 'juanperez2@hotmail.com', '2020-11-06', '10:00:00', 'Maderoterapia'),
(3, 'Rodrigo Herrera', '212345678', 'Rodrigo12@hotmail.com', '2020-11-06', '10:30:00', 'Acupuntura'),
(4, 'Leonardo Daniel', '1234567889', 'leonardo15290920@itcg.edu.mx', '2020-11-11', '12:00:00', 'Maderoterapia'),
(5, 'Luz Elena Tapia', '9876543210', 'luz123@hotmail.com', '2020-11-11', '12:15:00', 'Consulta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `IdPaciente` int(11) NOT NULL,
  `Nombre` text NOT NULL,
  `Escolaridad` text NOT NULL,
  `Genero` text NOT NULL,
  `Fecha-nac` date NOT NULL,
  `Estado` text NOT NULL,
  `Ciudad` text NOT NULL,
  `Direccion` text NOT NULL,
  `Telefono` text NOT NULL,
  `email` text NOT NULL,
  `Act-labo` text NOT NULL,
  `Descripcion` text NOT NULL,
  `Vegetariano` text NOT NULL,
  `Nivel-estres` text NOT NULL,
  `Act-depor` text NOT NULL,
  `Motivo-consu` text NOT NULL,
  `Sangre` text NOT NULL,
  `Patologias` text NOT NULL,
  `Antecedentes` text NOT NULL,
  `Cirugias` text NOT NULL,
  `Alergia` text NOT NULL,
  `Vacunas` text NOT NULL,
  `Cigarro` text NOT NULL,
  `Alcohol` text NOT NULL,
  `Drogas` text NOT NULL,
  `Frecuencia-c` text NOT NULL,
  `Frecuencia-a` text NOT NULL,
  `Frecuencia-d` text NOT NULL,
  `Cantidad-c` text NOT NULL,
  `Cantidad-a` text NOT NULL,
  `Cantidad-d` text NOT NULL,
  `Estatura` double NOT NULL,
  `Peso` double NOT NULL,
  `Factor-acti` text NOT NULL,
  `Grasa-tot` double NOT NULL,
  `Grasa-sup` double NOT NULL,
  `Grasa-inf` double NOT NULL,
  `Grasa-vis` double NOT NULL,
  `Libre-grasa` double NOT NULL,
  `Masa-mus` double NOT NULL,
  `Peso-os` double NOT NULL,
  `Agua-corp` double NOT NULL,
  `Edad-met` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`IdPaciente`, `Nombre`, `Escolaridad`, `Genero`, `Fecha-nac`, `Estado`, `Ciudad`, `Direccion`, `Telefono`, `email`, `Act-labo`, `Descripcion`, `Vegetariano`, `Nivel-estres`, `Act-depor`, `Motivo-consu`, `Sangre`, `Patologias`, `Antecedentes`, `Cirugias`, `Alergia`, `Vacunas`, `Cigarro`, `Alcohol`, `Drogas`, `Frecuencia-c`, `Frecuencia-a`, `Frecuencia-d`, `Cantidad-c`, `Cantidad-a`, `Cantidad-d`, `Estatura`, `Peso`, `Factor-acti`, `Grasa-tot`, `Grasa-sup`, `Grasa-inf`, `Grasa-vis`, `Libre-grasa`, `Masa-mus`, `Peso-os`, `Agua-corp`, `Edad-met`) VALUES
(1, 'Leonardo Daniel Pérez Tapia', 'Universidad', 'Masculino', '1996-07-29', 'Jalisco', 'Sayula', 'Herculano Anguiano #150', '341', 'dannytapia77@gmail.com', 'Encargado de compras en ferreteria', 'Realizar las compras y buscar proveedores..', 'No', 'Medio', 'Croosfit', 'Bajar', 'O+', 'Ninguna', 'ninguno', 'ninguna', 'ninguna', '1', '2020-10-07', 'No', 'No', 'nunca', 'ocasionalmente', 'nunca', '0', '0', '0', 1.85, 90, '70', 17, 12, 5, 10, 20, 79, 10, 10, 23),
(2, 'Daniel Tapia', 'Universidad', 'Masculino', '2020-03-10', 'Michoacan', 'Sinaloa', 'Los Guamuchiles #107', '1234', 'danny123@hotmail.com', 'Chofer', 'Chofer de empresa de aguacates', 'No', 'Alto', 'Futbol', 'Control de peso', 'O-', 'Ninguna', 'Ninguno', 'Ninguna', 'Ninguna', 'Todas', 'No', 'Nunca', 'No', '0', '0', '0', '0', '0', '0', 1.9, 105, '40', 20, 12, 2, 10, 29, 70, 10, 5, 23),
(3, 'Pedro Ramirez', 'Universidad', 'Masculino', '2020-03-10', 'Michoacan', 'Sinaloa', 'Los Guamuchiles #107', '1234', 'danny123@hotmail.com', 'Chofer', 'Chofer de empresa de aguacates', 'No', 'Alto', 'Futbol', 'Control de peso', 'O-', 'Ninguna', 'Ninguno', 'Ninguna', 'Ninguna', 'Todas', 'No', 'Nunca', 'No', '0', '0', '0', '0', '0', '0', 1.9, 105, '40', 20, 12, 2, 10, 29, 70, 10, 5, 23),
(4, 'Yareli Isabeles', 'Universidad', 'Femenino', '2020-03-09', 'Jalisco', 'Cd. Guzman', 'Josefa Ortiz #23', '3122113232', 'Yareli1234@hotmail.com', 'Estudiante', 'Estudiante', 'No', 'Alto', 'CroosFit', 'Estetico', 'O-', 'Ninguna', 'Ninguna', 'Ninguna', 'Ninguna', 'Todas', 'No', 'No', 'No', 'Nunca', 'Nunca', 'Nunca', '0', '0', '0', 1.6, 63, '85', 12, 2, 5, 3, 60, 55, 5, 3, 18),
(5, 'Noemi Santiago', 'Universidad', 'Femenino', '2020-03-09', 'Jalisco', 'Cd. Guzman', 'Josefa Ortiz #23', '3122113232', 'Yareli1234@hotmail.com', 'Estudiante', 'Estudiante', 'No', 'Alto', 'CroosFit', 'Estetico', 'O-', 'Ninguna', 'Ninguna', 'Ninguna', 'Ninguna', 'Todas', 'No', 'No', 'No', 'Nunca', 'Nunca', 'Nunca', '0', '0', '0', 1.6, 63, '85', 12, 2, 5, 3, 60, 55, 5, 3, 18),
(6, 'Jose Valencia', 'Licenciatura', 'Masculino', '1997-03-19', 'Nuevo Leon', 'Monterrey', 'Monte nuevo #123 ', '21312312', 'jose123@hotmail.com ', 'Ninguna', 'es nini', 'No', 'bajo', 'Basketball', 'enfermedad', 'A-', 'Ninguna', 'Ninguno', 'Ninguno', 'ninguna', 'todas', 'Si', 'Si', 'Si', '75%', '50%', '0%', '20', '6', '0', 1.95, 95, '65', 16, 10, 12, 12, 10, 75, 13, 9, 21),
(8, 'Miguel Larios', 'Universidad', 'Masculino', '2006-04-09', 'Chiapas', 'sayula', 'Calle ', '12345', 'miguel123@gmail.com ', 'Obrero', 'Corte de frambuesa', 'No', 'medio', 'Ninguna', 'Control de peso', 'A+', 'Ninguna', 'Ninguno', 'Ninguno', 'ninguna', 'todas', 'No', 'No', 'No', '0%', '0%', '0%', '0', '0', '0', 1.64, 90, 'ningua', 20, 12, 8, 10, 50, 60, 10, 7, 27),
(9, 'Johny Yael Cardenas Mariscal', 'Preparatoria', 'Masculino', '2003-02-04', 'Colima', 'Colima', 'Enrique Segovianio ', '1233445', 'eljohnymijas@ferremonterrey.com ', 'Vendedor en ferreteria', 'Atender empleados en la ferreteria Monterrey', 'No', 'alto', 'Caminar', 'Control de peso', 'O-', 'Ninguna', 'Ninguno', 'Ninguno', 'ninguna', 'todas', 'No', 'Si', 'No', '0%', '25%', '0%', '0', '1', '0', 1.7, 83, '30 minutos', 8, 0.5, 2, 12, 13, 55, 5, 13, 23),
(11, 'Johny Yael Cardenas Mariscal', 'Preparatoria', 'Masculino', '2003-02-04', 'Colima', 'Colima', 'Enrique Segovianio ', '1233445', 'eljohnymijas@ferremonterrey.com ', 'Vendedor en ferreteria', 'Atender empleados en la ferreteria Monterrey', 'No', 'alto', 'Caminar', 'Control de peso', 'O-', 'Ninguna', 'Ninguno', 'Ninguno', 'ninguna', 'todas', 'No', 'Si', 'No', '0%', '25%', '0%', '0', '1', '0', 1.7, 83, '30 minutos', 8, 0.5, 2, 12, 13, 55, 5, 13, 23),
(12, 'Johny Yael Cardenas Mariscal', 'Preparatoria', 'Masculino', '2003-02-04', 'Colima', 'Colima', 'Enrique Segovianio ', '1233445', 'eljohnymijas@ferremonterrey.com ', 'Vendedor en ferreteria', 'Atender empleados en la ferreteria Monterrey', 'No', 'alto', 'Caminar', 'Control de peso', 'O-', 'Ninguna', 'Ninguno', 'Ninguno', 'ninguna', 'todas', 'No', 'Si', 'No', '0%', '25%', '0%', '0', '1', '0', 1.7, 83, '30 minutos', 8, 0.5, 2, 12, 13, 55, 5, 13, 23),
(13, 'Lucero Landeros', 'Preparatoria', 'Femenino', '0000-00-00', 'Jalisco', 'Guadalajara', 'La primavera #3124', '1234567899', ' lucero@1235.com', 'Ama de casa', 'Labores del Hogar', 'No', 'Bajo', 'Zumba', 'Mantenimiento de peso', 'O+', 'Ninguna', 'Ninguna', 'Cesarea', 'Zanahorias', 'Todas', 'No', 'No', 'No', 'Nunca', 'Nunca', 'Nunca', '0', '0', '0', 1.7, 80, 'Nada', 20, 12, 5, 3, 20, 50, 10, 12, 35);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `terapia`
--

CREATE TABLE `terapia` (
  `IdTerapia` int(11) NOT NULL,
  `Terapia` varchar(50) DEFAULT NULL,
  `Beneficios` varchar(255) DEFAULT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  `Duracion` varchar(30) DEFAULT NULL,
  `Precio` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `terapia`
--

INSERT INTO `terapia` (`IdTerapia`, `Terapia`, `Beneficios`, `Descripcion`, `Duracion`, `Precio`) VALUES
(1, 'Acupuntura', 'Mejora la digestión y ayuda a la reduccion de peso ', 'La acupuntura es una técnica de la medicina tradicional china que consiste en la inserción de pequeñas agujas en puntos claves del cuerpo, con el objetivo de favorecer o restablecer la salud y bienestar del individuo. Desde hace ya mucho tiempo, esta tera', '1 hora', 200),
(2, 'Maderoterapia', 'Se utiliza tanto para remodelar, reducir volumen, mejorar la celulitis o refirmar los tejidos, en distintas zonas del cuerpo.', 'La Maderoterapia es una técnica que aporta múltiples beneficios a la salud y estética corporal, consiste en un tratamiento de masaje intenso, con instrumental de madera diseñado especialmente para lograr efectos reductores, anticelulíticos y tonificantes.', '1.5 horas', 250),
(3, 'Aumento de masa muscular', 'Se otorga una dieta para que el paciente aumente sumasa muscular', 'Convierte la grasa en musculo y hace que estos crezcan logrando un aspecto mejor', '1 año ', 199),
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
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`IdCita`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`IdPaciente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`Id-Producto`);

--
-- Indices de la tabla `terapia`
--
ALTER TABLE `terapia`
  ADD PRIMARY KEY (`IdTerapia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alimentos`
--
ALTER TABLE `alimentos`
  MODIFY `Id-alimento` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `IdCita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `IdPaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `Id-Producto` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `terapia`
--
ALTER TABLE `terapia`
  MODIFY `IdTerapia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
