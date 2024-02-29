-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Maio-2023 às 15:21
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `maquiagem`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `acesso`
--

CREATE TABLE `acesso` (
  `idAcesso` int(11) NOT NULL,
  `nivel` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `acesso`
--

INSERT INTO `acesso` (`idAcesso`, `nivel`) VALUES
(1, 'Administrador'),
(2, 'Funcionario'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `idAgenda` int(11) NOT NULL,
  `idUsuario` int(11) DEFAULT NULL,
  `funcionario` varchar(30) DEFAULT NULL,
  `dataAgenda` varchar(20) DEFAULT NULL,
  `horario` varchar(5) DEFAULT NULL,
  `fotoAtual` varchar(100) DEFAULT NULL,
  `fotoDesejo` varchar(100) DEFAULT NULL,
  `maquiagem` varchar(30) DEFAULT NULL,
  `pagamento` varchar(30) DEFAULT NULL,
  `situacao` varchar(30) DEFAULT 'Pendente',
  `valor` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`idAgenda`, `idUsuario`, `funcionario`, `dataAgenda`, `horario`, `fotoAtual`, `fotoDesejo`, `maquiagem`, `pagamento`, `situacao`, `valor`) VALUES
(14, 11, 'Eduardo', '2022-09-28', '15:00', 'aa2ebd6989c218bdbe7271f0f3d0fec2.png', 'da234c9ddb1dbfab9b8313a6bb759604.png', 'Artistica', 'Boleto', 'Pago', '400'),
(15, 16, 'joao', '2023-05-26', '09:00', '31d13c10872f1e824db1332235f4f642.jpg', '183cbd126ce846ca283bda5db862beb8.jpg', 'Artistica', NULL, 'Pendente', '400'),
(16, 16, 'joao', '2023-05-11', '09:00', 'f57e5617f22848b92837efb8c04f5c9b.jpg', 'eaf541ebcac8b3822aadc81cfb49b176.jpg', 'Social', NULL, 'Pendente', '150'),
(17, 16, 'Edu Paulo', '2023-05-12', '09:00', '3dbe9f8272b0103865b80127d7b5b578.jpg', '42a40064d54cd193e90d714398d86984.jpg', 'Artistica', NULL, 'Pendente', '400'),
(28, 1, 'Edu Paulo', '2023-06-30', '09:00', 'c88becb8a55ac598d9d52785ed95b2c3jpeg', '5baf1906ddb9bc51129461d0b4fec067jpeg', 'Artistica', NULL, 'Pendente', '400'),
(29, 1, 'joao', '2023-05-30', '09:00', 'adcb8976aec0d0dbee0ba4ed71e7149djpeg', '7a8283585d61e57bea940116258834ccjpeg', 'Artistica', NULL, 'Pendente', '400'),
(30, 1, 'joao', '2023-05-26', '09:00', '17fecf1423ce94d00d999cc0af927e96jpeg', '578ba3ad49e7dbdb787769a852213e0e.jpg', 'Artistica', NULL, 'Pendente', '400'),
(31, 1, 'joao', '2023-05-05', '09:00', '96c0109692869ec45a84f37767783d71.jpg', '4429acd7a7f3df1cd313c9c15b9e2c5f.jpg', 'Artistica', NULL, 'Pendente', '400'),
(32, 1, 'joao', '', '09:00', '55c2031bebf6bbcce830638c6c7ab4c1.jpg', 'fdfcb5bf24f7ec48be0155c95731a596.jpg', 'Artistica', NULL, 'Pendente', '400'),
(33, 1, 'joao', '', '09:00', '8ce5bbf5e8f5ee0cd21213155d26e63fjpeg', '21774bdbd37eb8fbc590458bb7361a73jpeg', 'Artistica', NULL, 'Pendente', '400'),
(34, 1, 'joao', '', '09:00', '10d7b13a8982373cb1185fa55b6709c6jpeg', '6a11fa98924bbf1769b5122f81017d47jpeg', 'Artistica', NULL, 'Pendente', '400'),
(35, 16, 'joao', '2023-05-29', '09:00', '599026721157d2d57eb2d490b5e56df1jpeg', 'b89ad9b0653f229fe4af23205d1b3dc6jpeg', 'Artistica', NULL, 'Pendente', '400');

-- --------------------------------------------------------

--
-- Estrutura da tabela `horarios`
--

CREATE TABLE `horarios` (
  `idHr` int(11) NOT NULL,
  `hora` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `horarios`
--

INSERT INTO `horarios` (`idHr`, `hora`) VALUES
(1, '9hr'),
(2, '11hr'),
(3, '13hr'),
(4, '15hr');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imgbanner`
--

CREATE TABLE `imgbanner` (
  `idBanner` int(11) NOT NULL,
  `urlbanner` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `imgbanner`
--

INSERT INTO `imgbanner` (`idBanner`, `urlbanner`) VALUES
(1, 'banner1.png'),
(2, 'banner2.jpg'),
(4, 'banner3.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `maquiagem`
--

CREATE TABLE `maquiagem` (
  `idMaquiagem` int(11) NOT NULL,
  `nomeMaquiagem` varchar(30) DEFAULT NULL,
  `valor` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `maquiagem`
--

INSERT INTO `maquiagem` (`idMaquiagem`, `nomeMaquiagem`, `valor`) VALUES
(1, 'Artistica', 400),
(2, 'Debutante', 800),
(3, 'Social', 150),
(4, 'Noiva', 1500),
(5, 'Madrinha/Acompanhantes', 250),
(6, 'Infantil', 25);

-- --------------------------------------------------------

--
-- Estrutura da tabela `mensagem`
--

CREATE TABLE `mensagem` (
  `idMensagem` int(11) NOT NULL,
  `nome` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `assunto` varchar(50) NOT NULL,
  `mensagem` varchar(300) NOT NULL,
  `situacao` varchar(30) DEFAULT 'Pendente'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `mensagem`
--

INSERT INTO `mensagem` (`idMensagem`, `nome`, `email`, `assunto`, `mensagem`, `situacao`) VALUES
(1, 'Felipe', 'felipe@gmail.com', 'serviço', 'Nao gostei do serviço', 'Vizualizado'),
(3, 'Debora Botelho', 'deborasantana822@gmail.com', 'Teste', 'teste', 'Vizualizado'),
(5, 'Paulo', 'paulo@gmail.com', 'ServiÃ§o', 'Detestei o serviÃ§o de voces\r\n', 'Pendente');

-- --------------------------------------------------------

--
-- Estrutura da tabela `temporario`
--

CREATE TABLE `temporario` (
  `id` int(11) DEFAULT NULL,
  `funcionario` varchar(120) DEFAULT NULL,
  `dataA` varchar(10) DEFAULT NULL,
  `horario` varchar(10) DEFAULT NULL,
  `fotoAtual` varchar(100) DEFAULT NULL,
  `fotoDesejo` varchar(120) DEFAULT NULL,
  `maquiagem` varchar(30) DEFAULT NULL,
  `pagamento` varchar(30) DEFAULT NULL,
  `idTemp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL,
  `nomeUsuario` varchar(150) NOT NULL,
  `telefoneUsuario` varchar(14) NOT NULL,
  `emailUsuario` varchar(100) NOT NULL,
  `senhaUsuario` varchar(15) NOT NULL,
  `cpfUsuario` varchar(14) NOT NULL,
  `idAcesso` int(11) DEFAULT 3
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`idUsuario`, `nomeUsuario`, `telefoneUsuario`, `emailUsuario`, `senhaUsuario`, `cpfUsuario`, `idAcesso`) VALUES
(1, 'Paulo', '(21)99272-4487', 'paulo@gmail.com', '12345pc', '111.111.111-22', 3),
(2, 'joao', '(21)99272-4487', 'joao@gmail.com', '12345jo', '111.111.111-33', 2),
(5, 'Felipe', '(34) 2534-6344', 'felipe@gmail.com', '1234fi', '543.543.242-34', 1),
(7, 'Edu Paulo', '(43) 4241-4324', 'edu@gmial.com', '123edu', '342.343.253-23', 2),
(11, 'jorge luiz', '(53) 96342-141', 'jorgeluiz@g.com', '1234jo', '321.324.235-35', 3),
(16, 'Pc', '2143432', 'pc@gmail.com', '1234', '', 3),
(18, 'fc', '(23) 1342-4324', 'fc@gma.com', '423432432', '424.332.432-43', 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `acesso`
--
ALTER TABLE `acesso`
  ADD PRIMARY KEY (`idAcesso`);

--
-- Índices para tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`idAgenda`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Índices para tabela `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`idHr`);

--
-- Índices para tabela `imgbanner`
--
ALTER TABLE `imgbanner`
  ADD PRIMARY KEY (`idBanner`);

--
-- Índices para tabela `maquiagem`
--
ALTER TABLE `maquiagem`
  ADD PRIMARY KEY (`idMaquiagem`);

--
-- Índices para tabela `mensagem`
--
ALTER TABLE `mensagem`
  ADD PRIMARY KEY (`idMensagem`);

--
-- Índices para tabela `temporario`
--
ALTER TABLE `temporario`
  ADD PRIMARY KEY (`idTemp`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD UNIQUE KEY `emailUsuario` (`emailUsuario`),
  ADD KEY `idAcesso` (`idAcesso`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `acesso`
--
ALTER TABLE `acesso`
  MODIFY `idAcesso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `idAgenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de tabela `horarios`
--
ALTER TABLE `horarios`
  MODIFY `idHr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `imgbanner`
--
ALTER TABLE `imgbanner`
  MODIFY `idBanner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `maquiagem`
--
ALTER TABLE `maquiagem`
  MODIFY `idMaquiagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `mensagem`
--
ALTER TABLE `mensagem`
  MODIFY `idMensagem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `temporario`
--
ALTER TABLE `temporario`
  MODIFY `idTemp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuario`);

--
-- Limitadores para a tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `idAcesso` FOREIGN KEY (`idAcesso`) REFERENCES `acesso` (`idAcesso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
