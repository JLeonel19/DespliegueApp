CREATE DATABASE nba_store;
USE nba_store;

CREATE TABLE `tenis` (
  `id_tenis` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `estilo` varchar(20) NOT NULL,
  `precio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `tenis` (`id_tenis`, `nombre`, `marca`, `estilo`, `precio`) VALUES
(101, 'LEBRON', 'NIKE', 'BASQUETBOL', 3200),
(102, 'CURRY', 'UNDER ARMOUR', 'BASQUETBOL', 2700),
(103, 'COBE', 'NIKE', 'BASQUETBOL', 3100),
(104, 'WADE', 'ADIDAS', 'BASQUETBOL', 2800);


ALTER TABLE `tenis`
  ADD PRIMARY KEY (`id_tenis`);
COMMIT;