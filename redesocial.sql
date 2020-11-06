

CREATE TABLE `amizade` (
  `id` int(11) NOT NULL,
  `de` int(11) NOT NULL,
  `para` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `amizade`
--

INSERT INTO `amizade` (`id`, `de`, `para`, `status`) VALUES
(5, 35, 33, 1),
(6, 34, 35, 1),
(7, 37, 33, 1),
(8, 37, 36, 1),
(9, 38, 36, 1),
(10, 39, 34, 1),
(11, 40, 34, 1),
(12, 41, 33, 1),
(13, 42, 35, 1),
(14, 43, 34, 1),
(15, 40, 36, 1),
(16, 44, 34, 1);

-- --------------------------------------------------------


CREATE TABLE `contato` (
  `nome` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mensagem` varchar(255) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`nome`, `email`, `mensagem`, `id`) VALUES
('Brienne', 'bri2gmail.com', 'Como funciona a rede?', 8),
('Aline', 'aline@gmail.com', 'como funciona a rede?', 9);

-- --------------------------------------------------------


CREATE TABLE `postagens` (
  `id` int(8) UNSIGNED NOT NULL,
  `titulo` text,
  `descricao` text,
  `autor` varchar(255) DEFAULT NULL,
  `datetime` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `postagens`
--

INSERT INTO `postagens` (`id`, `titulo`, `descricao`, `autor`, `datetime`) VALUES
(44, 'Odeio a Rainha Dragao', 'Bom sabado!', 'cercei@gmail.com', '2019-06-29 19:11:48'),
(45, 'Nascida da Tormenta', 'Eu sou Daenerys Nascida da Tormenta e eu terei de volta o que Ã© meu, com fogo e sangue, eu terei.', 'dany@gmail.com', '2019-06-29 19:26:32'),
(47, 'Bom domingo', 'Tudo por amor', 'jaime@gmail.com', '2019-06-30 21:40:49'),
(48, 'Que dia!', 'Lindo dia para amar...Rainha minha crush', 'daario@gmail.com', '2019-06-30 22:12:27'),
(49, 'Rainha Te amo', 'Rainha Me nota, poxa', 'jorah@gmail.com', '2019-06-30 22:23:33'),
(50, 'Boa segunda', 'Oi gente, bora pra guerra...', 'jorah@gmail.com', '2019-07-01 16:12:45'),
(51, 'que dia lindo hj', 'vamos conquistar i trono', 'dany@gmail.com', '2019-07-01 17:30:44');

-- --------------------------------------------------------

--
-- Estrutura da tabela `recados`
--

CREATE TABLE `recados` (
  `id` int(11) NOT NULL,
  `de` int(11) NOT NULL,
  `para` varchar(10) NOT NULL,
  `recado` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `recados`
--

INSERT INTO `recados` (`id`, `de`, `para`, `recado`, `status`, `data`) VALUES
(41, 35, '34', 'Oi Linda?', 1, '2019-06-29 19:25:01'),
(42, 17, '34', 'Oi dany, ta linda ', 1, '2019-06-30 00:07:57'),
(43, 34, '17', 'Obrigada Lindo bjs', 1, '2019-06-30 00:08:39'),
(45, 17, '13', 'Oi linda, boa noite.\r\nqual seus planos para este sabado?', 1, '2019-06-30 00:11:02'),
(46, 36, '37', 'Oi Jaime seu lindo....', 1, '2019-06-30 21:42:11'),
(47, 40, '34', 'Oi minha rainha, vamos tc?', 1, '2019-06-30 22:24:11'),
(48, 34, '40', 'Oi, tudo bem?', 1, '2019-06-30 22:25:26'),
(49, 34, '35', 'Oi meu lindo:)', 1, '2019-06-30 23:21:47'),
(50, 38, '36', 'Oi Brienne, podemos conversar?', 1, '2019-06-30 23:47:40'),
(51, 34, '40', 'Vamos sim, quer voar no meu dragao', 1, '2019-07-01 16:09:02'),
(52, 35, '34', 'Oi dany! me perdoa', 1, '2019-07-01 16:11:24'),
(53, 34, '44', 'Oi lindo', 1, '2019-07-01 17:29:56');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `email` varchar(64) NOT NULL,
  `senha` varchar(128) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `sobrenome` varchar(64) NOT NULL,
  `nascimento` date NOT NULL,
  `sexo` varchar(10) NOT NULL,
  `imagem` varchar(128) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `cadastro` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `email`, `senha`, `nome`, `sobrenome`, `nascimento`, `sexo`, `imagem`, `status`, `cadastro`) VALUES
(33, 'cercei@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Cercei', 'Lannister', '1988-11-21', 'feminino', '3322.jpg', 0, '2019-06-29'),
(34, 'dany@gmail.com', 'd5f12e53a182c062b6bf30c1445153faff12269a', 'Daenerys ', 'Targaryen', '1998-10-19', 'feminino', '3438.jpg', 0, '2019-06-29'),
(35, 'jon@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Jon', 'Snow', '2000-12-16', 'masculino', '3538.jpg', 0, '2019-06-29'),
(36, 'brienne@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Brienne', 'Tarth', '1982-08-17', 'feminino', '3615.jpg', 0, '2019-06-30'),
(37, 'jaime@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Jaime', 'Lannister', '1989-10-14', 'masculino', '3727.jpg', 0, '2019-06-30'),
(38, 'torm@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Tormund ', 'Giantsbane', '1981-09-18', 'masculino', '3830.jpg', 0, '2019-06-30'),
(40, 'jorah@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Jorah', 'Mormont', '1983-08-21', 'masculino', '4025.jpg', 0, '2019-06-30'),
(41, 'euron@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Euron ', 'Greyjoy', '1986-10-17', 'masculino', '4119.jpg', 0, '2019-06-30'),
(42, 'y@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Ygritte ', 'Selvagem', '1992-12-22', 'feminino', '4238.jpg', 0, '2019-06-30'),
(43, 'rion@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'Tyrion', ' Lannister', '1980-11-18', 'masculino', '4308.jpg', 0, '2019-06-30'),
(44, 'kal@gmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 'khal', 'drogo', '1988-05-18', 'masculino', '4453.jpg', 0, '2019-07-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amizade`
--
ALTER TABLE `amizade`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `postagens`
--
ALTER TABLE `postagens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recados`
--
ALTER TABLE `recados`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amizade`
--
ALTER TABLE `amizade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contato`
--
ALTER TABLE `contato`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `postagens`
--
ALTER TABLE `postagens`
  MODIFY `id` int(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `recados`
--
ALTER TABLE `recados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

