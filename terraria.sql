-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-03-2025 a las 16:26:23
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
-- Base de datos: `terraria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `npc`
--

CREATE TABLE `npc` (
  `NPC_ID` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Felicidad` text DEFAULT NULL,
  `Descripcion` text DEFAULT NULL,
  `Imagen` longblob DEFAULT NULL,
  `CondicionesDeAparicion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `npc`
--

INSERT INTO `npc` (`NPC_ID`, `Nombre`, `Felicidad`, `Descripcion`, `Imagen`, `CondicionesDeAparicion`) VALUES
(1, 'Guia', '\r\nLe gusta el bosque.\r\nLe gusta la zoologa y el buhonero.\r\nNo le gusta el oceano.\r\nNo le gusta la steampunker.\r\nOdia a a el pintor', 'El Guía siempre ofrece consejos utiles y recetas de creación. Sus origenes e inusuales conexiones a este mundo aún son un misterio', 0x5249464670010000574542505650384c640100002f19400b1027c12800003367cdf8dbfd7b6c358c975183556cdb4a9ebb62bfdc1a6815ca32742181c3b0892459d53e660a5ffa6d907f0d3f6409fc7fcd7f0004fb71cce7e42212df23410b3dde341f10027ffe8ddfc86d390fc007f09ac2abb3e6a3b615dcadd2948529a58cc22527b5c40427b464788d09eefbad001a10135d3719cfdd70eeda858a72ab8681c16124db69e39802b2c2ccd47f932c557017d1ff0928de962aa8f2f3bf54278cd1092354d369343826be0d463b4b5381468363744234d8192c4da31382a5d16034d819ed4c172c0d966a7444301a4c050a7a63480fbdd1595abc4df15af9ee0604f3a8bc7803aec2d4d2d61ca0f205a6561ed4d6747ab6fa7850cf1e6c4d7770ed822d7070602e0b0eae3c98d3c0d6831b5e16e45139b575e7de9d0b2aa7ced4ca1c8e2c39f2ee06e471622d6cc905b4e129e8c33bd5dbe26d0af8aea1f83a8d826fef34e451d31734a79a393573faea9d7cbe6ddea602, 'Aparece al iniciar el juego.'),
(2, 'Mercader', '\r\nLe gusta el bosque.\r\nLe gusta la enfermera y el golfista.\r\nNo le gusta el desierto.\r\nNo le gusta el recaudador de impuestos.\r\nOdia a a el pescador', 'El Mercader actúa como una especie de tienda general, proporcionando útiles herramientas para iniciar y suministros necesarios para la exploración.', 0x524946464e010000574542505650384c410100002f1dc00a10c7c036b2ad5464440c1135d00afd871ebbdbd73ad8c8b695067aabd805bd6f829d7b25e94319d719b6010024a16bea0bf8931bb15be7d6cd75fe0300609fffbcbccaf231d3c67b6dd22c55c26e9d7a8ff6ae847f760fa0ced8fc763f3b5d90a202413cc21620c8233880a3c1cb86b9c4e03092ed36b1080e32f02d92e8bfd56cd1c05d44ff27a07b191f773f5c2380ca5d5080e029b175bda058b90bcadb20d10bbadef79562d0d19b59ab2393b87e98c8bc7abd162cde9c4d2c5ed99a09ba8fd77bf074e5666fa6fb729dc5073715b43713b40499ad3b129aa940d04e9049c08e4c05ee42d0caecabad99bb417b1b13bdff1040a6172ac5b6162f04954c50d10b6740db0a2ac5a79bdad6dde2ddf6408fee51181c5d5e06adc067478b95b6068f0e2f478f162b412b270e82fec3898913130775b4bd4f8f2fe3650b00, 'Aparece cuando el jugador tiene al menos 50 monedas de plata y hay una casa disponible.'),
(3, 'Enfermera', 'Ama a el traficante de armas.\r\nLe gusta la bendicion.\r\nLe gusta la princesa y el mago.\r\nNo le gusta la tundra.\r\nNo le gusta la chica fiestera ni la driada.\r\nOdia a la zoologa', 'La actitud mordaz de la enfermera y su pésimo trato a los pacientes pueden echar para atrás a muchos. No obstante, por el precio adecuado, puede curar todos los males.', 0x89504e470d0a1a0a0000000d49484452000000220000002e08060000004d85cbb9000000017352474200aece1ce90000000467414d410000b18f0bfc6105000000097048597300000b1100000b11017f645f91000001d7494441545847ed96b14ac35014863bb80815820fd0c9c941f009eae820e8e4d0c1c18e82e0e4e024b808b5884fa0e89ac5c5a1b88b838382b3d0c1d1c5d031d2a39f707fb8260dadb9a9fef00d37dc73cea7b94953abe548b3b1983aacb51d74ffc452bac8fa4a3d1d82c0cddea1912489834f8c7a70bb8f90d245283c684706224ff505e3fef1c5c127f6701b398c2c54ba081b294c5f5bc6b7d0d780fd93d8408435b0ffeaf413fae4160a4e84462aa422a08755ff0015aa8e085121d6cfad654307eb3edfbaba228482d54664bc1db58ce6eebc31180c0cf6f90e23ebea8b902c11ae732875509668ee942e82401a770c06fae03053c761a61f87d69d9223c18810bd358a0af0eaef9ef70c152a9c604436778ed3210cf2c1603e07fafdbea13f05da3f774a17a1f0f2face601062c0756e097588f041b5313367e89ccc0427e2fb24547c227a5de764263811fd10e256287a28a74784c79117160d389c2a06fa9853cf4f04d7759e37da2838111e63df219d5e1142a18a30581f6b3dacd4171620c188101a772f7a860ab10615d27e85138c08e15fac878fb57e2069fdd8a28375fd2fa2eb5f17e145a5eb7876cbd8ae2d195a3fb6e8605d4f5c84c6ef8d3343d72af07744b2d0fd6e97314407fad0fd6e979ff301ecf938dd6315d5eb0000000049454e44ae426082, 'Aparece si el jugador tiene mas de 100 puntos de vida, si el mercader esta presente y si hay una casa disponible'),
(4, 'Traficante de armas', 'Ama a la enfermera.\r\nLe gusta el desierto.\r\nLe gusta la steampunker.\r\nNo le gusta la tundra.\r\nNo le gusta el golfista.\r\nOdia a a el demoledor', 'El Traficante de armas tiene todo lo que cualquiera podría necesitar para disparar a cosas muertas, desde pequeñas balas redondas hasta armas hechas de tiburones.', 0x5249464680010000574542505650384c740100002f19400b103fc12600c02473975f2000fdab50005e77871a6c03004842b3813dfb856778b917b423a34903e3d8b6d2e00e4b9a8178df69222d64e9ee33f31f0000bb3e1fa8564ebbea6cd47977b887eb34b61a8da2867bf4a5cea40110b107b42efd3bb54300b798d9a14f88ceeef8a38a6ad8e189a79d3cfeeb0192219862062c541eaa3f5b628490bcfb38aebdf3cbea4ad1a7f23130406c24499174cccc33bb477fe4bf8d0bfa190b3223fa3f019ddaa2917ffc3f5dba63cac242cd4367ec58ba67c7948585e974c69e197ba62cdd33654f61ba8d4b758fc20cdd980e7463a16e2cdcb3147200bd79b24be1c88d859d9629822f2b2f87ecc92338f6a58e7c79b7309a0304ff78a9778303e646d369dfd03860eec435d15467061c78d2f3c0dc33aa39bc3df0e349ddc43cd61c7858799b47f066b42978ab0de6f0a4a295979ac7b53117d0922f255f3e6c0db5d154d0aee4edc43c3e947c6ab796e471e12868d39a89d13417565c587154b7e6d3b6acb53605, 'Aparece cuando el jugador tiene una bala o un arma de fuego en su inventario y si hay una casa disponible'),
(5, 'Duende chapucero', 'Ama a la mecanica.\r\nLe gusta las cavernas, subsuelo y el inframundo.\r\nLe gusta el mercader de tintes.\r\nNo le gusta la selva.\r\nNo le gusta el buhonero .\r\nOdia a la chica fiestera.', 'Exiliado del resto de duendes por ser un pacifista inteligente, el Duende chapucero vende herramientas para combinar accesorios en versiones mas fuertes.\r\nTiene la opción de Reforjar, lo que permite darle o cambiar los bonos a tus Armas y Accesorios.', 0x524946462a010000574542505650384c1e0100002f17400a10cfa0a86d23291006c1d01f180b649fb3fffb2814a60100a4c1e11e229177f89153dce7c9d2d446b295fcccd07e29902e2094c8259dff00001cac20c951b55e98f74e3f4e3fc63bf4b74313896c5c9db2f1fba5fbd3f9e8ff2e7eded7b028ae10801419a509c23203c446921449cb743cdbf7e0bfa98bb3166446f47f028acdd8591c3c2be86d81cede205fa02d9dbd1a7442bef766ef885ee3eb1f6f5f3c79f1314fd0f2760474108262f5aca0a577f0ad0e8e04893c10c0882a0495b5893c30119b95b53a91c891d0ca12d5dac415262a7fd1da866b3cac2dd145d03b129c072d89ada005ae01dab0e8bd8e06fd6a8e8220d190688089582dc8010918499bc5cef30205d5911f67f2cd28b87a37dfccbfa037f5ee358ee701, 'Se encuentra en las cuevas de esqueletos tras vencer al ejercito de duendes.'),
(6, 'Mecanica', 'a', 'aa', 0x52494646a4010000574542505650384c980100002f21c00a1057e126020024c2dddda500470492508084ec84607287f75f911a6e6bdb36adfd9859998df085eebf89d780adffc7701cd9b6123ddcdd2d05426147be24c2d2dd9d99f90f000059e87f76e01a8167d2bb7d57b2e84c3b15159430257ce2d90570015c00255eaf8f75fe01d55f9afef13dc18d9fe3d5dcf85bbe0ff2eb3d0f42dc860889439c04be7b00f8d3790cc12164ca3111b2f4b71a9550454572bd56e4892c1e8442cccc320688916cab8a1edcff705977c7c93fc32f0bef273013d1ff09488db963baf8f5326b96de3323031ff421a3373ebaf08e19b766a00f377ef9c027f7dc3a37332353de93bf84fac9032bda6c2ce7815f0e0c7df2d67b320ae199a31a9601facb8ea12f6ccd8de199a36139baf5b7f5c750131547c3849602daf463f88756bc0b47c3d45a46fbc637357c552b4adbf8d338e5cd67c201b5d4b194379fd18d507bb52275bedec870a26e9ca861ad22752ee39770d3186e8530fdb38c6fc36963eddb3e80eac4b113c786ca05af57314037861ba784e982d7ab18f06affea7d6bd6290a7dd293e1c93dd0a7ee7d00, 'a'),
(7, 'Steampunker', 'b', 'b', 0x52494646a4010000574542505650384c980100002f21c00a1057e126020024c2dddda500470492508084ec84607287f75f911a6e6bdb36adfd9859998df085eebf89d780adffc7701cd9b6123ddcdd2d05426147be24c2d2dd9d99f90f000059e87f76e01a8167d2bb7d57b2e84c3b15159430257ce2d90570015c00255eaf8f75fe01d55f9afef13dc18d9fe3d5dcf85bbe0ff2eb3d0f42dc860889439c04be7b00f8d3790cc12164ca3111b2f4b71a9550454572bd56e4892c1e8442cccc320688916cab8a1edcff705977c7c93fc32f0bef273013d1ff09488db963baf8f5326b96de3323031ff421a3373ebaf08e19b766a00f377ef9c027f7dc3a37332353de93bf84fac9032bda6c2ce7815f0e0c7df2d67b320ae199a31a9601facb8ea12f6ccd8de199a36139baf5b7f5c750131547c3849602daf463f88756bc0b47c3d45a46fbc637357c552b4adbf8d338e5cd67c201b5d4b194379fd18d507bb52275bedec870a26e9ca861ad22752ee39770d3186e8530fdb38c6fc36963eddb3e80eac4b113c786ca05af57314037861ba784e982d7ab18f06affea7d6bd6290a7dd293e1c93dd0a7ee7d00, 'b');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `npc`
--
ALTER TABLE `npc`
  ADD PRIMARY KEY (`NPC_ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `npc`
--
ALTER TABLE `npc`
  MODIFY `NPC_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
