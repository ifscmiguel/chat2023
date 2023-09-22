create database if not exists chat2023;
use chat2023;

CREATE TABLE `msg` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `msg` varchar(255) DEFAULT NULL,
  `data` datetime DEFAULT current_timestamp(),
  `ip` char(20) DEFAULT NULL
)


INSERT INTO `msg` (`id`, `nome`, `msg`, `data`, `ip`) VALUES
(1, 'Miguel', 'bom dia Garopaba', '2023-09-22 17:08:19', '127.0.0.1');
