-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15-Nov-2015 às 23:07
-- Versão do servidor: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `monteiro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nomeCategoria` varchar(50) NOT NULL,
  `nomeCategoria_I` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nomeCategoria`, `nomeCategoria_I`) VALUES
(1, 'Direito Público', 'Direito Público_I'),
(2, 'Direito Privado', 'Direito Privado_I'),
(3, 'Direito Empresarial', 'Direito Empresarial I'),
(4, 'Direito Imobialiario', 'Direito Imobialiario I');

-- --------------------------------------------------------

--
-- Estrutura da tabela `newsletter`
--

CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `newsletter`
--

INSERT INTO `newsletter` (`id`, `email`) VALUES
(1, 'joseygor@planobweb.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `caminhoImagem` varchar(100) NOT NULL,
  `caminhoImagemThumb` varchar(100) NOT NULL,
  `titulo` varchar(60) NOT NULL,
  `titulo_I` varchar(60) NOT NULL,
  `por` varchar(30) NOT NULL,
  `data` date NOT NULL,
  `texto` text NOT NULL,
  `texto_I` text NOT NULL,
  `tag` varchar(250) NOT NULL,
  `tag_I` varchar(250) NOT NULL,
  `destaque` int(1) NOT NULL,
  `Idcategoria` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categoria` (`Idcategoria`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `caminhoImagem`, `caminhoImagemThumb`, `titulo`, `titulo_I`, `por`, `data`, `texto`, `texto_I`, `tag`, `tag_I`, `destaque`, `Idcategoria`) VALUES
(1, 'upload/noticias/img-noticia.jpg', 'upload/noticias/noticia.jpg', 'Titulo teste dessa noticia também que precisa ser grande', 'Titulo teste dessa noticia também que precisa ser grande Ing', 'Ygor', '2015-10-14', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker. ', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker. Ingles', 'tag1, tag2, tag3, tag4', 'tag1_I, tag2_I, tag3_I, tag4_I', 1, 2),
(2, 'upload/noticias/img-noticia.jpg', 'upload/noticias/noticia.jpg', 'Titulo teste dessa noticia também que precisa ser grande 2', 'Titulo teste dessa noticia também que precisa ser grande Ing', 'Ygor 2', '2014-11-16', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker. ', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker. Ingles', 'tag1, tag2, tag3, tag42', 'tag1_I, tag2_I, tag3_I, tag4_I2', 1, 1),
(3, '', '', 'Teste Rand', 'Teste Rand I', 'teste', '2015-10-04', 'sfasfasd', 'asfsafsa', '', '', 1, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `publicacoes`
--

CREATE TABLE IF NOT EXISTS `publicacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(200) NOT NULL,
  `titulo_I` varchar(200) NOT NULL,
  `numPubclicacao` varchar(30) NOT NULL,
  `numPubclicacao_I` varchar(30) NOT NULL,
  `por` varchar(30) NOT NULL,
  `data` date NOT NULL,
  `texto` text NOT NULL,
  `texto_I` text NOT NULL,
  `tag` varchar(250) NOT NULL,
  `tag_I` varchar(250) NOT NULL,
  `Idcategoria` tinyint(4) NOT NULL,
  `idTipo` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `categoria` (`Idcategoria`),
  KEY `idTipo` (`idTipo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `publicacoes`
--

INSERT INTO `publicacoes` (`id`, `titulo`, `titulo_I`, `numPubclicacao`, `numPubclicacao_I`, `por`, `data`, `texto`, `texto_I`, `tag`, `tag_I`, `Idcategoria`, `idTipo`) VALUES
(1, 'Titulo deste Informativo teste 1', 'Titulo deste Informativo teste 1 Ingles', 'Informativo nº 1', 'Informativo nº 1 Ing', 'ygor', '2015-11-20', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker. Ingles', 'tagInf1, tagInf2, tagInf3 ', 'tagInf1ING, tagInf2ING, tagInf3ING', 2, 1),
(2, 'Titulo deste Informativo teste 2', 'Titulo deste Informativo teste 2 Ingles', 'Informativo nº 2', 'Informativo nº 2 Ing', 'jose', '2015-11-12', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker. Ingles', 'tagInf1, tagInf2, tagInf3 ', 'tagInf1ING, tagInf2ING, tagInf3ING', 1, 2),
(3, 'Titulo deste Artigo teste  3', 'Titulo deste Artigo teste 3 Ing', 'Artigo nº 3 ', 'Artigo nº 3 Ing', 'testeee', '2015-11-12', 'teste desc', 'teste desc INg', '', '', 2, 2),
(4, 'Instruções titulo teste 1', 'Instruções titulo teste 1 Ing', 'Instruções  1', 'Instruções 1', 'ygor1', '2015-11-09', 'testeeee ', 'testeeee INg ', '', '', 3, 3),
(5, 'Instruções titulo teste 2 ', 'Instruções titulo teste 2 Ing', 'Instruções  2', 'Instruções  2', 'ygor 2', '2015-10-20', 'Testeeee 2', 'Testeeee 2 Ing', '', '', 4, 3),
(6, 'Palestra 1 titulo teste ', 'Palestra 1 titulo teste Ing', 'Palestra 1', 'Palestra 1 Ing', '', '2015-11-19', 'testee desc palestra', 'testee desc palestra INg', '', '', 4, 4),
(7, 'Palestra 2 titulo teste ', 'Palestra 2 titulo teste Ing', 'Palestra 2 ', 'Palestra 2 Ing', '', '2016-12-17', 'testee desc palestra', 'testee desc palestra INg', '', '', 1, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
(5, 'Jose ygor', 'joseygor@planobweb.com.br', '698dc19d489c4e4db73e28a713eab07b'),
(10, 'Teste', 'joseygor@planobweb2.com.br', '81dc9bdb52d04dc20036dbd8313ed055');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
