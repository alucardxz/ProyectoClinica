-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2020 a las 01:00:27
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
  `IdAlimento` int(10) NOT NULL,
  `Alimento` varchar(50) DEFAULT NULL,
  `Categoria` varchar(50) DEFAULT NULL,
  `Cantidad` float DEFAULT NULL,
  `Unidad` varchar(20) DEFAULT NULL,
  `Pesobruto` int(10) DEFAULT NULL,
  `Pesoneto` int(10) DEFAULT NULL,
  `Energia` int(10) DEFAULT NULL,
  `Proteina` float DEFAULT NULL,
  `Lipidos` float DEFAULT NULL,
  `Hidratos` float DEFAULT NULL,
  `Fibra` float DEFAULT NULL,
  `VitaminaA` float DEFAULT NULL,
  `AcidoAs` float DEFAULT NULL,
  `AcidoFo` float DEFAULT NULL,
  `Hierro` float DEFAULT NULL,
  `Potasio` float DEFAULT NULL,
  `Agua` float DEFAULT NULL,
  `Indice` varchar(5) DEFAULT NULL,
  `Carga` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alimentos`
--

INSERT INTO `alimentos` (`IdAlimento`, `Alimento`, `Categoria`, `Cantidad`, `Unidad`, `Pesobruto`, `Pesoneto`, `Energia`, `Proteina`, `Lipidos`, `Hidratos`, `Fibra`, `VitaminaA`, `AcidoAs`, `AcidoFo`, `Hierro`, `Potasio`, `Agua`, `Indice`, `Carga`) VALUES
(8, 'Alcachofa mediana cocida', 'Verduras', 1, 'pieza', 120, 48, 25, 1.4, 0.2, 5.7, 4.1, 0.5, 3.6, 4.2, 0.3, 137.3, 137.3, '0', '0'),
(9, 'Berro crudo', 'Verduras', 1, 'taza', 34, 28, 4, 0.8, 0, 0.4, 0.2, 54, 14, 17.8, 0.6, 112, 112, '0', '0'),
(10, 'Betabel crudo', 'Verduras', 1, 'taza', 43, 39, 19, 0.8, 0.1, 4.3, 0.3, 0.8, 7.8, 36.4, 0.6, 131, 131, 'ND', 'ND'),
(11, 'cebolla cocida', 'Verduras', 1, 'taza', 53, 53, 23, 0.7, 0.1, 5.3, 0.7, 0, 2.7, 7.9, 0.1, 87, 87, 'ND', 'ND'),
(12, 'Tomate Verde', 'Verdura', 5, 'Pieza', 100, 86, 21, 0.9, 0.2, 3.9, 2.1, 1.7, 1.7, 0.4, 175.4, 79.5, 79.5, 'ND', 'ND'),
(15, 'Chilacayote crudo', 'Leguminosas', 150, 'gramos', 150, 135, 19, 1.6, 0.3, 3.6, 0.4, 0, 9.5, 0, 0.8, 237.6, 128, 'ND', 'ND');

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
  `Fechanac` date NOT NULL,
  `Estado` text NOT NULL,
  `Ciudad` text NOT NULL,
  `Direccion` text NOT NULL,
  `Telefono` text NOT NULL,
  `email` text NOT NULL,
  `Actlabo` text NOT NULL,
  `Descripcion` text NOT NULL,
  `Vegetariano` text NOT NULL,
  `Nivelestres` text NOT NULL,
  `Actdepor` text NOT NULL,
  `Motivoconsu` text NOT NULL,
  `Sangre` text NOT NULL,
  `Patologias` text NOT NULL,
  `Antecedentes` text NOT NULL,
  `Cirugias` text NOT NULL,
  `Alergia` text NOT NULL,
  `Vacunas` text NOT NULL,
  `Cigarro` text NOT NULL,
  `Alcohol` text NOT NULL,
  `Drogas` text NOT NULL,
  `Frecuenciac` text NOT NULL,
  `Frecuenciaa` text NOT NULL,
  `Frecuenciad` text NOT NULL,
  `Cantidadc` text NOT NULL,
  `Cantidada` text NOT NULL,
  `Cantidadd` text NOT NULL,
  `Estatura` double NOT NULL,
  `Peso` double NOT NULL,
  `Factoracti` text NOT NULL,
  `Grasatot` double NOT NULL,
  `Grasasup` double NOT NULL,
  `Grasainf` double NOT NULL,
  `Grasavis` double NOT NULL,
  `Libregrasa` double NOT NULL,
  `Masamus` double NOT NULL,
  `Pesoos` double NOT NULL,
  `Aguacorp` double NOT NULL,
  `Edadmet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`IdPaciente`, `Nombre`, `Escolaridad`, `Genero`, `Fechanac`, `Estado`, `Ciudad`, `Direccion`, `Telefono`, `email`, `Actlabo`, `Descripcion`, `Vegetariano`, `Nivelestres`, `Actdepor`, `Motivoconsu`, `Sangre`, `Patologias`, `Antecedentes`, `Cirugias`, `Alergia`, `Vacunas`, `Cigarro`, `Alcohol`, `Drogas`, `Frecuenciac`, `Frecuenciaa`, `Frecuenciad`, `Cantidadc`, `Cantidada`, `Cantidadd`, `Estatura`, `Peso`, `Factoracti`, `Grasatot`, `Grasasup`, `Grasainf`, `Grasavis`, `Libregrasa`, `Masamus`, `Pesoos`, `Aguacorp`, `Edadmet`) VALUES
(1, 'Luis Hamilton', 'Universidad', 'Masculino', '1996-07-29', 'Manchester', 'Manchester', 'The beatles #123', '341', 'lobo27@hotmail.com', 'Corredor en F1', 'Correr autos de formula 1', 'No', 'Medio', 'Croosfit', 'Aumento masa muscular', 'O+', 'Ninguna', 'Ninguna', 'ninguna', 'ninguna', 'Todas', 'No', 'No', 'No', '0%', '0%', '0%', '0', '0', '0', 1.85, 90, '70', 17, 12, 5, 10, 20, 79, 10, 10, 23),
(2, 'Lucia Hernandez Lopez', 'Secundaria', 'Femenino', '1990-11-01', 'Colima', 'Colima', 'Lopez Mateos', '523121931232', 'lucy123@hotmail.com', 'Ingeniera', 'Ingeniera en Gestion Empresarial', 'Si', 'Muy alto', 'Zumba', 'Bajar peso', 'A+', 'Diabetes', 'Papas diabeticos', 'Apendice', 'Animales', 'Hepatitis b, tetanos', 'si', 'si', 'si', '10', '10', '10', '2', '2', '2', 1.59, 80, 'bajo', 23.5, 12.4, 8.5, 10.9, 29.1, 40.3, 12.4, 5.5, 50),
(3, 'Pedro Ramirez del sagrado corazon', 'Universidad', 'Masculino', '2020-03-10', 'Michoacan', 'Sinaloa', 'Los Guamuchiles #107', '1234', 'Ped-ra123@hotmail.com', 'Chofer', 'Chofer de empresa de aguacates', 'No', 'Alto', 'Futbol', 'Control de peso', 'O-', 'Ninguna', 'Ninguna', 'Ninguna', 'Ninguna', 'Todas', 'No', 'Si', 'No', '0%', '0%', '0%', '0', '0', '0', 1.9, 105, '40', 20, 12, 2, 10, 29, 70, 10, 5.5, 30),
(4, 'María Fuentes', 'Doctorado', 'Femenino', '2000-02-13', 'Jalisco', 'Cd. Guzman', 'Las palmas #500', '3122113232', 'mary1234@hotmail.com', 'Estudiante', 'Estudiante', 'No', 'Alto', 'CroosFit', 'Estetico', 'O-', 'Ninguna', 'Ninguna', 'Ninguna', 'Ninguna', 'Todas', 'No', 'No', 'No', '0%', '0%', '0%', '0', '0', '0', 1.6, 63, '85', 12, 2, 5, 3, 60, 55, 5, 3, 18),
(5, 'Jose Chavez', 'Universidad', 'Masculino', '1990-06-13', 'Oaxaca', 'Tuxtepec', 'Leandro valle #134', '3122113232', 'ChavezJ1234@hotmail.com', 'Estudiante', 'Estudiante', 'No', 'Alto', 'CroosFit', 'Estetico', 'O-', 'Ninguna', 'Ninguna', 'Ninguna', 'Ninguna', 'Todas', 'No', 'No', 'No', '0%', '0%', '0%', '0', '0', '0', 1.6, 63, '85', 12, 2, 5, 3, 60, 55, 5, 3, 18),
(6, 'Jose Valencia', 'Licenciatura', 'Masculino', '1997-03-19', 'Nuevo Leon', 'Monterrey', 'Monte nuevo #123 ', '21312312', 'jose123@hotmail.com ', 'Ninguna', 'es nini', 'No', 'bajo', 'Basketball', 'enfermedad', 'A-', 'Ninguna', 'Ninguno', 'Ninguno', 'ninguna', 'todas', 'Si', 'Si', 'Si', '75%', '50%', '0%', '20', '6', '0', 1.95, 95, '65', 16, 10, 12, 12, 10, 75, 13, 9, 21),
(8, 'Miguel Larios', 'Universidad', 'Masculino', '2006-04-09', 'Chiapas', 'sayula', 'Calle ', '12345', 'miguel123@gmail.com ', 'Obrero', 'Corte de frambuesa', 'No', 'medio', 'Ninguna', 'Control de peso', 'A+', 'Ninguna', 'Ninguno', 'Ninguno', 'ninguna', 'todas', 'No', 'No', 'No', '0%', '0%', '0%', '0', '0', '0', 1.64, 90, 'ningua', 20, 12, 8, 10, 50, 60, 10, 7, 27),
(9, 'Johny Yael Cardenas Mariscal', 'Preparatoria', 'Masculino', '2003-02-04', 'Colima', 'Colima', 'Enrique Segovianio ', '1233445', 'eljohnymijas@ferremonterrey.com ', 'Vendedor en ferreteria', 'Atender empleados en la ferreteria Monterrey', 'No', 'alto', 'Caminar', 'Control de peso', 'O-', 'Ninguna', 'Ninguno', 'Ninguno', 'ninguna', 'todas', 'No', 'Si', 'No', '0%', '25%', '0%', '0', '1', '0', 1.7, 83, '30 minutos', 8, 0.5, 2, 12, 13, 55, 5, 13, 23),
(12, 'Plutarco Cuesta', 'Licenciatura', 'Masculino', '1980-02-04', 'Nuevo Leon', 'Monterrey', 'Calzada benito Juarez', '1234567890', 'plutarco@hotmail.com', 'Abogado', 'Brindar asesoria legal a los clientes dependiendo las necesidades de cada uno de ellos', 'No', 'alto', 'Gimnasio', 'Aumento de masa Muscular', 'AB-', 'Ninguna', 'Ninguno', 'Ninguno', 'ninguna', 'todas', 'No', 'Si', 'No', '0%', '25%', '0%', '0', '1', '0', 1.85, 80, '1.5 horas', 8, 0.5, 2, 12, 13, 55, 5, 13, 35),
(13, 'Adriana Torres', 'Preparatoria', 'Femenino', '1997-10-15', 'Jalisco', 'Guadalajara', 'La primavera #3124', '1234567899', ' torres@1235.com', 'Ama de casa', 'Labores del Hogar', 'No', 'Bajo', 'Zumba', 'Mantenimiento de peso', 'O+', 'Ninguna', 'Ninguna', 'Cesarea', 'Zanahorias', 'Todas', 'No', 'No', 'No', '0%', '0%', '0%', '0', '0', '0', 1.7, 80, 'Nada', 20, 12, 5, 3, 20, 50, 10, 12, 35);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `IdProducto` int(100) NOT NULL,
  `Producto` text DEFAULT NULL,
  `Tamaño` double DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `Existencia` int(10) DEFAULT NULL,
  `Prepro` double DEFAULT NULL,
  `Precli` double DEFAULT NULL,
  `Proveedor` text DEFAULT NULL,
  `Foto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`IdProducto`, `Producto`, `Tamaño`, `Descripcion`, `Existencia`, `Prepro`, `Precli`, `Proveedor`, `Foto`) VALUES
(50, 'Womens multi', 1, 'Kit para la Mujer incluye un Womens Multi Plus 150 cápsulas de 650 mg y un Womens Complex con 200 cápsulas de 500 mg.', 4, 400, 599, 'Herbalife', NULL),
(52, 'Vitamina D3', 301, 'La misma D3 de Siempre ahora con Aceite de Oliva Extra virgen. Disfruta de una presentación abundante de 300 cápsulas blandas de 5000 UI, pensada para ofrecerte un producto de calidad con un mayor valor. Suplementa tu alimentación y la de tu familia con nuestra Vitamina D3.', 4, 519, 719, 'B life', NULL),
(53, 'Vitamina C plus', 240, 'Cápsulas a base de Jengibre 300 mg y Vitamina C 300 mg. Disfruta de una presentación abundante de 240 cápsulas de 600 mg pensada para ofrecerte un producto de calidad con un mayor valor.', 3, 249, 379, 'B life', NULL),
(54, 'Vitamina A', 1, 'Refuerza las defensas', 10, 150, 200, 'Omnilife', NULL);

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
  ADD PRIMARY KEY (`IdAlimento`);

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
  ADD PRIMARY KEY (`IdProducto`);

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
  MODIFY `IdAlimento` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `IdProducto` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de la tabla `terapia`
--
ALTER TABLE `terapia`
  MODIFY `IdTerapia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
