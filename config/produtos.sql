-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Set-2022 às 08:00
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crudphp`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome_produto` varchar(100) NOT NULL,
  `marca` varchar(30) NOT NULL,
  `valor` float NOT NULL,
  `quantidade` int(11) NOT NULL,
  `img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome_produto`, `marca`, `valor`, `quantidade`, `img`) VALUES
(9, 'Nike Air Force 1 Low By You', 'Nike', 712.57, 1, 'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/3940069f-4f7c-44e9-86f3-4f6a4416b398/custom-nike-air-force-1-low-by-you-shoe.png'),
(10, ' Nike Air Force 1', 'Nike', 483.51, 1, 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/98995ec9-ddac-4329-b54c-18302a8d0c9d/sapatilhas-air-force-1-crater-flyknit-junior-zgWJnk.png'),
(24, 'Nike Air Force 1 Kid', 'Nike', 488.43, 1, 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/1fc75580-0868-42cf-9fd6-7f9aa371bb3e/sapatilhas-air-force-1-junior-65f76v.png'),
(25, 'Nike Force 1 LV8 Utility', 'Nike', 385.95, 2, 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/wvvtfcenlnriadxdqewi/sapatilhas-force-1-lv8-utility-xmbjjD.png'),
(26, 'TÊNIS GRAND COURT BASE', 'Adidas', 239.99, 1, 'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/905e7edc0cfc46d7b504aa4300cca484_9366/Tenis_Grand_Court_Base_Branco_EE7901_01_standard.jpg'),
(27, 'Tênis NMD_R1 V2 Originals', 'Adidas', 549.99, 1, 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSSKUvWxt-JztOHZtifWNnDkAVY1zTP7B6qjqsoI3ZtJG13HgEnA-6-1awgry9lLhPWnUQ4wvuMugzBSGcBLmXPpTXD5BvVyTkip77w5sXDAMiUclROpwV_adw&usqp=CAE'),
(28, 'Tênis NMD_R1 V2 Originals', 'Adidas', 1.099, 1, 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcSH-JQ84lWuBILx6mcCB1EqJ_nDp_ugXJ7HDjSV-JgzxPiZQeL0hKntLjJZwR_JSiqaApoRv6sO5ddR-O-PJ-0U8ByVZ4npLCQiZA4kYaUWvUqEB7hSxi0Q&usqp=CAE'),
(29, 'Tênis Forum Mid Basquete', '	 Adidas', 699.99, 1, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcRkC5YAfguWldME8D5ID6zYB7FQUhXEjLEObMYgwQno6jIk6XHjE0Sdkfe98dS56ZRwG4XAWDFB7PTzoO0X_g1VrFNjUnLYQJeahXKRuG8CAHmJxwaTukrz&usqp=CAE'),
(30, 'Tênis Run Falcon 2.0 Tr Running', '	 Adidas', 360.91, 1, 'https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcRa7-dYg21xmavhDUd7pHlR_CIkVRWM2J2S9ufKKdRtsF0t6v9K-IhBew23XxrXUWsWYQXxfTf5os5HAo4nUSasrv5fUQr5b0iz7SAat6XzBWSSjpJNQ8uImQ&usqp=CAE'),
(31, '	 Tênis Gamecourt 2.0', 'Adidas', 449.91, 1, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSkzyRkJJ5q6I2njYAnCPRDQt3coNS1yi8ug1pFFAOUEnQnHFMwf4kEMRYabQ9pQh7oLN9fv4OZQXlFUOOS4LtrSvAiyxwtA5Xp6AIBal_wnaCnsTeTKGci&usqp=CAE'),
(32, 'Tênis Day Jogger (unissex) Originals', '	 Adidas', 329.99, 3, 'https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcRluRgwbWeps1Zt4-w_UAre6XX2ZhnvIGVCSp58yqyDjvZWOjwk-cBES_h3vAIRMXFtzllcy_TczeKMycvzg-oVEswfYvzaL1qOI2xKProWhdtLTmWxaZBm&usqp=CAE'),
(33, 'Tênis Swift Run 22 Originals', 'Adidas', 599.99, 4, 'https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSCNo4NF6mmA1O-UIHPZ3n4KqR0gjdh-mvniqUp7WpgeLc76As3CnUlqnKl3uOFhFJ7rbSXzrr4Xm5bg-HANvNR_sHB9AxGQ5DpbKN8kFyZtNvRZCzig2nJ2A&usqp=CAE');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
