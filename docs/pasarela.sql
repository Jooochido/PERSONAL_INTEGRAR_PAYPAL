-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-09-2025 a las 21:46:22
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pasarela`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_categoria`
--

CREATE TABLE `tm_categoria` (
  `cat_id` int(11) NOT NULL,
  `cat_nom` varchar(50) DEFAULT NULL,
  `est` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_categoria`
--

INSERT INTO `tm_categoria` (`cat_id`, `cat_nom`, `est`) VALUES
(1, 'Electrónicos', 1),
(2, 'Ropa', 1),
(3, 'Hogar', 1),
(4, 'Alimentos', 1),
(5, 'Belleza', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_detalle`
--

CREATE TABLE `tm_detalle` (
  `det_id` int(11) NOT NULL,
  `vent_id` int(11) NOT NULL,
  `det_cant` int(11) NOT NULL,
  `prod_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `prod_nom` varchar(150) NOT NULL,
  `prod_precio` decimal(8,2) NOT NULL,
  `det_total` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_detalle`
--

INSERT INTO `tm_detalle` (`det_id`, `vent_id`, `det_cant`, `prod_id`, `cat_id`, `prod_nom`, `prod_precio`, `det_total`) VALUES
(3, 2, 2, 1, 1, 'Televisor LED 50', 500.00, 1000.00),
(4, 2, 1, 7, 4, 'Arroz Blanco 2 Kg', 9.00, 9.00),
(5, 3, 2, 1, 1, 'Televisor LED 50', 500.00, 1000.00),
(6, 3, 1, 7, 4, 'Arroz Blanco 2 Kg', 9.00, 9.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_producto`
--

CREATE TABLE `tm_producto` (
  `prod_id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  `prod_nom` varchar(50) DEFAULT NULL,
  `prod_precio` decimal(10,2) DEFAULT NULL,
  `prod_moneda` varchar(50) DEFAULT NULL,
  `prod_img` varchar(200) DEFAULT NULL,
  `est` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_producto`
--

INSERT INTO `tm_producto` (`prod_id`, `cat_id`, `prod_nom`, `prod_precio`, `prod_moneda`, `prod_img`, `est`) VALUES
(1, 1, 'Televisor LED 50', 500.00, 'USD', 'https://cdn-icons-png.flaticon.com/512/1312/1312307.png', 1),
(2, 1, 'Tablet Android 10', 100.00, 'USD', 'https://cdn-icons-png.flaticon.com/512/1312/1312307.png', 1),
(3, 2, 'Polo Manga Corta', 20.00, 'USD', 'https://cdn-icons-png.flaticon.com/512/1312/1312307.png', 1),
(4, 2, 'Jeans Talla 34x32', 40.00, 'USD', 'https://cdn-icons-png.flaticon.com/512/1312/1312307.png', 1),
(5, 3, 'Juego de Cubiertos 16 Pzas.', 20.00, 'USD', 'https://cdn-icons-png.flaticon.com/512/1312/1312307.png', 1),
(6, 3, 'Juego de Sábanas King Size', 70.00, 'USD', 'https://cdn-icons-png.flaticon.com/512/1312/1312307.png', 1),
(7, 4, 'Arroz Blanco 2 Kg', 9.00, 'USD', 'https://cdn-icons-png.flaticon.com/512/1312/1312307.png', 1),
(8, 4, 'Leche Descremada 1 Lt', 10.00, 'USD', 'https://cdn-icons-png.flaticon.com/512/1312/1312307.png', 1),
(9, 5, 'Lápiz Labial Rojo', 90.00, 'USD', 'https://cdn-icons-png.flaticon.com/512/1312/1312307.png', 1),
(10, 5, 'Crema Facial Antiarrugas', 20.00, 'USD', 'https://cdn-icons-png.flaticon.com/512/1312/1312307.png', 1),
(11, 1, 'Equipo de Sonido 5.1', 200.00, 'USD', 'https://cdn-icons-png.flaticon.com/512/1312/1312307.png', 1),
(12, 1, 'Smartwatch con GPS', 100.00, 'USD', 'https://cdn-icons-png.flaticon.com/512/1312/1312307.png', 1),
(13, 2, 'Vestido Negro Talla M', 50.00, 'USD', 'https://cdn-icons-png.flaticon.com/512/1312/1312307.png', 1),
(14, 2, 'Zapatillas Deportivas Talla 9', 60.00, 'USD', 'https://cdn-icons-png.flaticon.com/512/1312/1312307.png', 1),
(15, 3, 'Juego de Toallas 6 Pzas.', 20.00, 'USD', 'https://cdn-icons-png.flaticon.com/512/1312/1312307.png', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_venta`
--

CREATE TABLE `tm_venta` (
  `vent_id` int(11) NOT NULL,
  `vent_nom` varchar(50) DEFAULT NULL,
  `vent_ape` varchar(50) DEFAULT NULL,
  `vent_telf` varchar(50) DEFAULT NULL,
  `vent_email` varchar(50) DEFAULT NULL,
  `vent_pais` varchar(50) DEFAULT NULL,
  `vent_dire` varchar(50) DEFAULT NULL,
  `vent_depa` varchar(50) DEFAULT NULL,
  `vent_codpostal` varchar(50) DEFAULT NULL,
  `paymentId` varchar(150) NOT NULL,
  `token` varchar(150) NOT NULL,
  `payerID` varchar(150) NOT NULL,
  `json_data` longtext NOT NULL,
  `vent_total` decimal(8,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `tm_venta`
--

INSERT INTO `tm_venta` (`vent_id`, `vent_nom`, `vent_ape`, `vent_telf`, `vent_email`, `vent_pais`, `vent_dire`, `vent_depa`, `vent_codpostal`, `paymentId`, `token`, `payerID`, `json_data`, `vent_total`) VALUES
(2, 'Jonathan', 'Ramirez', '1234567890', 'ejemplo@gmail.com', 'Mexico', 'Calle y numero', 'Depa', '00000', 'PAYID-NC5TYAI5P492006MR9895220', 'EC-45S04880FX077105B', 'UUA2MGM7L3X4Q', '{\"id\":\"PAYID-NC5TYAI5P492006MR9895220\",\"intent\":\"sale\",\"state\":\"approved\",\"cart\":\"45S04880FX077105B\",\"payer\":{\"payment_method\":\"paypal\",\"status\":\"VERIFIED\",\"payer_info\":{\"email\":\"sb-5qqgj45880883@personal.example.com\",\"first_name\":\"John\",\"last_name\":\"Doe\",\"payer_id\":\"UUA2MGM7L3X4Q\",\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"},\"country_code\":\"ES\"}},\"transactions\":[{\"amount\":{\"total\":\"1009.00\",\"currency\":\"USD\",\"details\":{\"subtotal\":\"1009.00\",\"tax\":\"0.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payee\":{\"merchant_id\":\"ETM963RCRMAUJ\",\"email\":\"sb-43gqxu45891734@business.example.com\"},\"description\":\"Payment description\",\"invoice_number\":\"68bb3bff3256e\",\"item_list\":{\"items\":[{\"name\":\"Televisor LED 50\",\"price\":\"500.00\",\"currency\":\"USD\",\"tax\":\"0.00\",\"quantity\":2},{\"name\":\"Arroz Blanco 2 Kg\",\"price\":\"9.00\",\"currency\":\"USD\",\"tax\":\"0.00\",\"quantity\":1}],\"shipping_address\":{\"recipient_name\":\"John Doe\",\"line1\":\"calle Vilamari 76993- 17469\",\"city\":\"Albacete\",\"state\":\"Albacete\",\"postal_code\":\"02001\",\"country_code\":\"ES\"}},\"related_resources\":[{\"sale\":{\"id\":\"3TJ69695BA526480H\",\"state\":\"completed\",\"amount\":{\"total\":\"1009.00\",\"currency\":\"USD\",\"details\":{\"subtotal\":\"1009.00\",\"tax\":\"0.00\",\"shipping\":\"0.00\",\"insurance\":\"0.00\",\"handling_fee\":\"0.00\",\"shipping_discount\":\"0.00\",\"discount\":\"0.00\"}},\"payment_mode\":\"INSTANT_TRANSFER\",\"protection_eligibility\":\"ELIGIBLE\",\"protection_eligibility_type\":\"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE\",\"transaction_fee\":{\"value\":\"34.61\",\"currency\":\"USD\"},\"receivable_amount\":{\"value\":\"809.95\",\"currency\":\"EUR\"},\"exchange_rate\":\"0.831235585560976\",\"parent_payment\":\"PAYID-NC5TYAI5P492006MR9895220\",\"create_time\":\"2025-09-05T19:39:11Z\",\"update_time\":\"2025-09-05T19:39:11Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/3TJ69695BA526480H\",\"rel\":\"self\",\"method\":\"GET\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/sale/3TJ69695BA526480H/refund\",\"rel\":\"refund\",\"method\":\"POST\"},{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-NC5TYAI5P492006MR9895220\",\"rel\":\"parent_payment\",\"method\":\"GET\"}]}}]}],\"create_time\":\"2025-09-05T19:37:36Z\",\"update_time\":\"2025-09-05T19:39:11Z\",\"links\":[{\"href\":\"https://api.sandbox.paypal.com/v1/payments/payment/PAYID-NC5TYAI5P492006MR9895220\",\"rel\":\"self\",\"method\":\"GET\"}],\"failed_transactions\":[]}', 1009.00),
(3, 'Jonathan', 'Ramirez', '1234567890', 'ejemplo@gmail.com', 'Mexico', 'Calle y numero', 'Depa', '00000', '', '', '', '', 1009.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tm_categoria`
--
ALTER TABLE `tm_categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `tm_detalle`
--
ALTER TABLE `tm_detalle`
  ADD PRIMARY KEY (`det_id`);

--
-- Indices de la tabla `tm_producto`
--
ALTER TABLE `tm_producto`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indices de la tabla `tm_venta`
--
ALTER TABLE `tm_venta`
  ADD PRIMARY KEY (`vent_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tm_detalle`
--
ALTER TABLE `tm_detalle`
  MODIFY `det_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tm_venta`
--
ALTER TABLE `tm_venta`
  MODIFY `vent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
