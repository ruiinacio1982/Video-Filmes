-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Mar-2024 às 17:46
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `video_filmes`
--
CREATE DATABASE IF NOT EXISTS `video_filmes` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `video_filmes`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

DROP TABLE IF EXISTS `filmes`;
CREATE TABLE IF NOT EXISTS `filmes` (
  `Codfilmes` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(50) NOT NULL,
  `Sinopse` varchar(5000) DEFAULT NULL,
  `Codgenero` int(11) DEFAULT NULL,
  `Duracao` varchar(50) NOT NULL,
  `Classificacao` varchar(50) NOT NULL,
  `Codfornecedor` int(11) DEFAULT NULL,
  `ValorAluguer` float NOT NULL,
  `Imagem` varchar(500) DEFAULT 'https://media.istockphoto.com/id/1467934174/photo/film-reel-cinema-or-photography-35mm-film-strip-tape-3d-illustration-isolated-on-the-white.webp?b=1&s=170667a&w=0&k=20&c=jfL-Qo7xDMFShvLTrmg3yEurE5p5q_6GNXp37k-LqgI=',
  PRIMARY KEY (`Codfilmes`)
) ENGINE=MyISAM AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`Codfilmes`, `Nome`, `Sinopse`, `Codgenero`, `Duracao`, `Classificacao`, `Codfornecedor`, `ValorAluguer`, `Imagem`) VALUES
(5, 'Sete Vidas', 'The story of Miguel (Domingos Montagner), a lonely and slinky man, who after escaping a tragedy from the past, goes back home and has his life turned upside down. He finds out that, in addition to having a son with the great love of his life, he is also the father of six other children. So begins Miguel\'s search for his children\'s affection and respect, as well as his attempts to win over his true love once again.\r\n—Gui Omena', 1, '120m', 'M12', 1, 2, 'sete_vidas.jpg'),
(6, 'O Regresso de Johnny English', 'Johnny English goes up against international assassins hunting down Chinese Premier Xiang Ping.', 1, '112m', 'M6', 1, 2, 'return_j_E.jpg'),
(7, 'A Saga Twilight - Amanhecer Parte 1', 'The Quileutes close in on expecting parents Edward and Bella, whose unborn child poses a threat to the Wolf Pack and the towns people of Forks.', 3, '130m', 'M12', 2, 2, 'A-Saga-Twilight-Amanhecer-Parte-1.jpg'),
(9, 'Cruz', 'Given incredible power by an ancient Celtic Cross. Callan continues to fight evil... Now, joined by a team of weapons experts, Callan battles an unstoppable empire in Los Angeles.', 2, '117m', 'M12', 6, 2, 'cross.jpg'),
(10, 'As Serviçais', 'An aspiring author during the civil rights movement of the 1960s decides to write a book detailing the African American maids\' point of view on the white families for which they work, and the hardships they go through on a daily basis.', 4, '112m', 'M12', 3, 2, 'the-help.jpg'),
(11, 'Cont?gio', 'Healthcare professionals, government officials and everyday people find themselves in the midst of a pandemic as the CDC works to find a cure.', 5, '109m', 'M12', 4, 2, 'Contagion_Poster.jpg'),
(12, 'Saw I', 'Two strangers awaken in a room with no recollection of how they got there, and soon discover they\'re pawns in a deadly game perpetrated by a notorious serial killer.', 6, '102m', 'M16', 5, 2, 'saw1.jpg'),
(13, 'Saw II', 'A detective and his team must rescue 8 people trapped in a factory by the twisted serial killer known as Jigsaw.', 6, '107m', 'M16', 5, 2, 'Saw_II_poster.jpg'),
(14, 'Saw III', 'Jigsaw abducts a doctor in order to keep himself alive while he watches his new apprentice put an unlucky citizen named Jeff through a brutal test.', 6, '98m', 'M16', 5, 2, 'Saw_iii_poster_promocional.jpg'),
(15, 'Saw IV', 'Despite Jigsaw\'s death, and in order to save the lives of two of his colleagues, Lieutenant Rigg is forced to take part in a new game, which promises to test him to the limit.', 6, '116m', 'M16', 5, 3, 'Saw4final.jpg'),
(16, 'Saw V', 'Following Jigsaw\'s grisly demise, Mark Hoffman is commended as a hero, but Agent Strahm is suspicious, and delves into Hoffman\'s past. Meanwhile, another group of people are put through a series of gruesome tests.', 6, '120m', 'M16', 5, 3, 'Saw_V_New_Poster.jpg'),
(17, 'Puro Aço', 'In the near future, robot boxing is a top sport. A struggling ex-boxer feels he\'s found a champion in a discarded robot.', 2, '130m', 'M12', 6, 3, 'gigantes-de-aco.jpg'),
(18, 'Piratas das Caraíbas:', 'Blacksmith Will Turner teams up with eccentric pirate \"Captain\" Jack Sparrow to save his love, the governor\'s daughter, from Jack\'s former pirate allies, who are now undead.', 2, '140m', 'M12', 6, 3, 'piratas_caraibas.jpg'),
(19, 'Toy Story 2 Em Busca de Woody', 'When Woody is stolen by a toy collector, Buzz and his friends set out on a rescue mission to save Woody before he becomes a museum toy property with his roundup gang Jessie, Prospector, and Bullseye.', 7, '100m', 'M6', 7, 3, 'tstory2.jpg'),
(21, 'Meia-Noite em Paris', 'While on a trip to Paris with his fiancée\'s family, a nostalgic screenwriter finds himself mysteriously going back to the 1920s every day at midnight.', 1, '130m', 'M12', 1, 3, 'midnightparis.jpg'),
(22, 'Cuidado com o que Desejas', 'Dave is a married man with three kids and a loving wife, and Mitch is a single man who is at the prime of his sexual life. One fateful night while Mitch and Dave are peeing in a fountain, lightning strikes and they switch bodies.', 1, '140M', 'M12', 1, 3, 'cuidado_com_o_que_desejas.jpg'),
(23, 'O Panda do Kung Fu 2', 'Po and his friends fight to stop a peacock villain from conquering China with a deadly new weapon, but first the Dragon Warrior must come to terms with his past.', 2, '130', 'M6', 6, 3, 'panda_kingfu.jpg'),
(24, 'As Aventuras de Tintin - O Segredo do Licorne', 'Intrepid reporter Tintin and Captain Haddock set off on a treasure hunt for a sunken ship commanded by Haddock\'s ancestor.', 2, '130m', 'M6', 6, 3, 'tintin.jpg'),
(25, 'A Fabulosa Aventura de Sharpay', 'Sharpay Evans travels to New York where she is pursuing a Broadway career but it\'s her dog who lands an acting gig first.', 1, '140m', 'M12', 1, 3, 'sharpay.jpg'),
(26, 'O Barão', 'The story of a vampire who terrorized the inhabitants of a mountainous region.', 5, '140m', 'M12', 4, 2.5, 'obarao.jpg'),
(27, 'Atividade Paranormal 3', 'In 1988, young sisters Katie and Kristi befriend an invisible entity called Toby, who resides in their home.\r\n\r\n', 6, '130m', 'M16', 5, 2.5, 'paranormal3.jpg'),
(29, 'Rom?nticos An?nimos', 'Jean-René, owner of a chocolate factory, and Angélique, a talented chocolate maker, are too shy to admit their love for each other. Will they come together thanks to their common passion?', 3, '80m', 'M12', 2, 2.5, 'romanticos_anonimos.jpg'),
(30, 'ZON KIDS Cinema Festival - Secretariat', '', 4, '90m', 'M16', 3, 2, 'filme.png'),
(31, 'Pequenas Mentiras Entre Amigos HD', 'A near-fatal accident leaves one friend in the hospital while the rest go on their annual vacation. But their secrets and personal grief threaten to drive them apart.', 1, '95m', 'M16', 1, 2, 'Pequenas-Mentiras-Entre-Amigos.jpg'),
(32, 'Lerry Crowne', '', 1, '99m', 'M12', 1, 2, 'filme.png'),
(33, 'Velocidade Furiosa 5', '', 2, '130m', 'M12', 6, 2, 'filme.png'),
(34, '50/50 (Digital)', '', 1, '80M', 'M12', 1, 2, 'filme.png'),
(35, 'A Coisa (Digital)\r\nThe Thing (II)', '', 6, '100m', 'M16', 5, 2, 'filme.png'),
(37, 'A Casa dos Sonhos\r\nDream House', '', 5, '100m', 'M16', 5, 2, 'filme.png'),
(38, 'Amor, Est?pido e Louco', '', 1, '100m', 'M12', 1, 2.5, 'filme.png'),
(39, 'A Lista dos Ex (Digital)', '', 1, '106m', 'M16', 1, 2.5, 'filme.png'),
(40, 'Chefes Intrag?veis (Digital)', '', 1, '100m', 'M16', 1, 2.5, 'filme.png'),
(41, 'Nos Idos de Mar?o', '', 4, '100m', 'M12', 3, 2.5, 'filme.png'),
(42, 'Eu sou n?mero 4', '', 5, '110m', 'M12', 4, 3, 'filme.png'),
(43, 'Another Earth(Outra terra)', '', 4, '92m', 'M12', 3, 3, 'filme.png'),
(44, 'Imortais', '', 2, '120m', 'M12', 6, 3, 'filme.png'),
(45, 'London Boulevard - Crime e Reden??o', '', 3, '130m', 'M12', 2, 3, 'filme.png'),
(46, 'Tropa de Elite 2 - O Inimigo Agora Outro e', '', 2, '120m', 'M16', 6, 3, 'filme.png'),
(47, 'N?o Tenhas Medo do Escuro', '', 6, '120M', 'M16', 5, 2, 'filme.png'),
(48, 'Abduction (2011)', '', 2, '120m', 'M12', 6, 2, 'filme.png'),
(49, 'Konferenz der Tiere (2010)', '', 7, '100m', 'M6', 7, 2, 'filme.png'),
(50, 'Hallowen I', '', 6, '120m', 'M16', 5, 2, 'filme.png'),
(53, 'Alta Golpada', '', 2, '120m', 'M12', 6, 2, 'filme.png'),
(54, 'Sem Tempo', '', 5, '120m', 'M12', 4, 2, 'filme.png'),
(55, 'O Bom Cora??o', '', 4, '100m', 'M12', 3, 2, 'filme.png'),
(56, 'Os Encantos do 6? Andar', '', 1, '106m', 'M12', 1, 2, 'filme.png'),
(57, 'Apollo 18', '', 5, '102m', 'M12', 4, 2, 'filme.png'),
(58, 'La Piel que Habito', '', 4, '120m', 'M12', 3, 1, 'filme.png'),
(59, 'Triage', '', 4, '130m', 'M12', 3, 1, 'filme.png'),
(60, 'Warrior', '', 4, '120m', 'M12', 3, 1, 'filme.png'),
(61, 'O Rei Le?o', '', 7, '100m', 'M4', 7, 1, 'filme.png'),
(63, 'Ceremony', '', 3, '95m', 'M12', 2, 1, 'filme.png'),
(64, 'Take Me Home Tonight', '', 1, '100m', 'M12', 1, 1, 'filme.png'),
(65, 'Another Perfect Stranger', '', 4, '100m', 'M12', 3, 1, 'filme.png'),
(66, 'The Son of No One', '', 5, '100m', 'M12', 4, 1, 'filme.png'),
(67, 'De repente 30', '', 3, '120m', 'M12', 2, 1, 'filme.png'),
(68, 'Como Voc? Sabe', '', 3, '90m', 'M12', 2, 1, 'filme.png'),
(69, 'Jack Goes Boating', '', 1, '96m', 'M12', 1, 1, 'filme.png'),
(70, 'Tom and Jerry & The Wizard of Oz', '', 7, '58m', 'M6', 7, 1, 'filme.png'),
(71, 'Wrong Turn 4', '', 6, '100m', 'M16', 5, 1, 'filme.png'),
(72, 'Terras do Lobos', '', 6, '90m', 'M16', 5, 1, 'filme.png'),
(73, 'Orf?o assassino', '', 6, '100m', 'M16', 5, 2, 'filme.png'),
(74, 'Persegui??o Obsessiva', '', 6, '85m', 'M16', 5, 2, 'filme.png'),
(75, 'Um Brilho na Escurid?o', '', 4, '90m', 'M12', 3, 2, 'filme.png'),
(76, 'Assalto ao Banco Central', '', 2, '100m', 'M16', 6, 2, 'filme.png'),
(77, 'Justi?a Urbana', '', 2, '100m', 'M12', 6, 2, 'filme.png'),
(78, 'Juntos ao Luar', '', 3, '1h45m', 'M12', 2, 2, 'filme.png'),
(79, 'Le Havre', '', 1, '1h33m', 'M12', 1, 2, 'filme.png'),
(80, 'Colombiana', '', 2, '1h20m', 'M12', 6, 2, 'filme.png'),
(81, 'Jumping the Broom', '', 1, '100m', 'M12', 1, 2, 'filme.png'),
(82, 'Todo o Tempo do Mundo', '', 2, '100m', 'M6', 6, 2, 'filme.png'),
(83, 'As Palavras Que Nunca Te Direi', '', 3, '90m', 'M12', 2, 2, 'filme.png'),
(84, 'Lua novo', '', 8, '90m', 'M12', 9, 3.5, 'filme.png'),
(85, 'Eclipse', '', 3, '100m', 'M12', 2, 3.5, 'filme.png'),
(86, 'Avatar 1', '', 9, '100m', 'M12', 10, 3.5, 'filme.png'),
(88, 'CAPIT?O AM?RICA', '', 8, '100m', 'M12', 9, 3.5, 'filme.png'),
(89, 'Maldita Sorte Dublado', '', 1, '100m', 'M12', 1, 3.5, 'filme.png'),
(90, 'Antes S? do que Mal Casado', '', 1, '120m', 'M12', 1, 3.5, 'filme.png'),
(91, 'Di?rio da Nossa Paix?o', '', 3, '120m', 'M12', 2, 3.5, 'filme.png'),
(92, 'Salt', '', 2, '1h30', 'M12', 6, 3.5, 'filme.png'),
(93, 'Amor Sem Fronteiras', '', 3, '120m', 'M12', 2, 3.5, 'filme.png'),
(94, 'O Turista', '', 2, '120m', 'M12', 6, 3.5, 'filme.png'),
(95, 'Dia Noite', '', 1, '120', 'M12', 1, 3.5, 'filme.png'),
(96, 'Tempestade Tropical', '', 1, '105m', 'M12', 1, 2.5, 'filme.png'),
(97, 'Miss?o Imposs?vel II', '', 2, '120m', 'M12', 6, 2.5, 'filme.png'),
(98, 'Moneyball', '', 4, '135m', 'M12', 3, 2.5, 'filme.png'),
(99, 'Contrabando', '', 4, '120m', 'M12', 3, 2.5, 'filme.png'),
(100, 'The Descendents', '', 1, '120m', 'M12', 1, 2.5, 'filme.png'),
(101, 'Sangue do Meu Sangue', '', 4, '135m', 'M12', 3, 2.5, 'filme.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `utilizadores`
--

DROP TABLE IF EXISTS `utilizadores`;
CREATE TABLE IF NOT EXISTS `utilizadores` (
  `CodUtilizador` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`CodUtilizador`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `utilizadores`
--

INSERT INTO `utilizadores` (`CodUtilizador`, `username`, `password`) VALUES
(1, 'Rui_99999', 'bb831d45f04a02dfaacbc1bd5fdfc35d8282dfcb');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
