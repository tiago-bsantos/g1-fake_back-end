-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 04-Maio-2016 às 13:35
-- Versão do servidor: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fzero_ok`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE IF NOT EXISTS `categorias` (
  `id` smallint(6) NOT NULL,
  `categoria` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`) VALUES
(1, 'Ciência'),
(2, 'Educação'),
(3, 'Entretenimento'),
(4, 'Esportes'),
(5, 'Internacional'),
(6, 'Música'),
(7, 'Tecnologia');

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticias`
--

CREATE TABLE IF NOT EXISTS `noticias` (
  `id` smallint(6) NOT NULL,
  `data` date NOT NULL,
  `titulo` tinytext NOT NULL,
  `resumo` mediumtext NOT NULL,
  `texto` longtext NOT NULL,
  `imagem` varchar(30) DEFAULT NULL,
  `destaque` enum('Sim','Não') NOT NULL,
  `imagem_destaque` varchar(30) DEFAULT NULL,
  `categoria_id` smallint(6) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticias`
--

INSERT INTO `noticias` (`id`, `data`, `titulo`, `resumo`, `texto`, `imagem`, `destaque`, `imagem_destaque`, `categoria_id`) VALUES
(1, '2016-04-27', 'SpaceX pretende enviar primeira missão a Marte em 2018', '<p>A SpaceX planeja enviar uma nave não tripulada a Marte em 2018, afirmou a companhia de exploração espacial nesta quarta-feira, em um primeiro passo para cumprir o objetivo de seu fundador bilionário, Elon Musk, de levar pessoas para outro planeta.</p>', '<p>O programa, conhecido como Red Dragon, tem como objetivo desenvolver tecnologias necessárias para o transporte de seres humanos para Marte, uma meta de longo prazo da SpaceX e da agência espacial norte-americana, a Nasa.</p>\r\n    <p>"A (nave) Dragon 2 é projetada para ser capaz de pousar em qualquer lugar do Sistema Solar", disse Musk no Twitter. "O programa Red Dragon a Marte é o primeiro teste de voo."</p>\r\n    <p>O anúncio marcou a primeira vez que a SpaceX definiu uma data para a missão não tripulada a Marte, afirmou a porta-voz da companhia Emily Shanklin, em nota à Reuters.</p>\r\n    <p>A companhia informou que vai fornecer detalhes do programa para Marte durante o Congresso Internacional de Astronáutica, em setembro.</p>\r\n    <p>Musk fundou a SpaceX em 2002 com objetivo de reduzir os custos de lançamento para permitir que a uma viagem à Marte seja acessível. A SpaceX pretende lançar seu foguete Mars antes do final do ano.</p>', 'dragon-spacex.jpg', 'Sim', 'dragon-spacex-destaque.jpg', 1),
(2, '2016-05-02', 'Centro Paula Souza diz que 100% das Etecs passam a oferecer merenda', '<p>Falta de merenda &eacute; uma das queixas de alunos que ocupam pr&eacute;dio em SP. Juiz diz que PM entrou em ocupa&ccedil;&atilde;o sem mandado e mandou pol&iacute;cia sair.</p>', '<p>O Centro Paula Souza, que administra as escolas t&eacute;cnicas (Etecs) e faculdades tecnol&oacute;gicas (Fatecs) de S&atilde;o Paulo, informou que a partir desta segunda-feira (2) 100% das Etecs passam a oferecer alimenta&ccedil;&atilde;o escolar. A falta de merenda &eacute; uma das principais queixas dos estudantes que invadiram a sede administrativa do centro na quinta-feira (28).</p><p>&quot;A partir de hoje, 100% das Etecs oferecem alimenta&ccedil;&atilde;o escolar. Est&aacute; sendo criada uma Comiss&atilde;o Intersetorial de Governan&ccedil;a da Alimenta&ccedil;&atilde;o Escolar com o objetivo de discutir e implementar propostas de melhorias imediatas na distribui&ccedil;&atilde;o e oferta de alimenta&ccedil;&atilde;o escolar&quot;, diz a nota.</p><p>Segundo a administra&ccedil;&atilde;o, o fornecimento de t&iacute;quetes ou vales-alimenta&ccedil;&atilde;o reivindicado pelos alunos &eacute; invi&aacute;vel, uma vez que o Centro Paula Souza n&atilde;o pode inovar em mat&eacute;ria regulada por Lei Federal que disp&otilde;e sobre os par&acirc;metros m&iacute;nimos da alimenta&ccedil;&atilde;o escolar, al&eacute;m de n&atilde;o dispor, em seu or&ccedil;amento, de previs&atilde;o para essa finalidade.</p><p>O governador Geraldo Alckmin considera que o problema da merenda foi resolvido. &quot;O curso t&eacute;cnico &eacute; m&eacute;dio ou p&oacute;s-m&eacute;dio, ent&atilde;o, quando foi concebido l&aacute; atr&aacute;s, n&atilde;o tinha merenda. Mas n&oacute;s resolvemos fazer. Das 212 [unidades], faltavam sete. Hoje n&oacute;s completamos a s&eacute;tima. Ent&atilde;o n&atilde;o h&aacute; raz&otilde;es para essas ocupa&ccedil;&otilde;es&quot;, disse Alckmin.</p>', 'estudantes.jpg', 'Sim', 'estudantes-destaque.jpg', 2),
(3, '2016-05-02', 'Batman vs Superman - A Origem da Justiça não deve superar Deadpool na bilheteria dos EUA', '<p>Segundo o THR, Batman vs Superman: A Origem da&nbsp;Justi&ccedil;a&nbsp;deve encerrar sua arrecada&ccedil;&atilde;o mundial com um valor aproximado de US$ 875 milh&otilde;es, tornando-se o&nbsp;7&ordm; maior filme de super-her&oacute;is de todos os tempos.</p>', '<p>Nos EUA, a bilheteria do longa est&aacute; em US$ 325, o que o deixa apenas como o 11&ordm; filme da categoria, com chances de alcan&ccedil;ar o 10&ordm; lugar de Guardi&otilde;es da Gal&aacute;xia (US$ 333 milh&otilde;es) e Homem-Aranha 3 (US$ 336). Apesar disso, os n&uacute;meros n&atilde;o devem ultrapassar os de Deadpool, que arrecadou US$ 361 milh&otilde;es nos EUA.</p><p>O site tamb&eacute;m ressalta que, entre os lan&ccedil;amentos de 2016, Batman vs Superman: A Origem da Justi&ccedil;a est&aacute; atr&aacute;s de Zootopia, que conquistou o valor de US$ 931 milh&otilde;es at&eacute; agora (02/05).</p><p>Em termos de pa&iacute;ses, o Brasil representa a quinta melhor arrecada&ccedil;&atilde;o do filme, com US$ 35 milh&otilde;es, atr&aacute;s de M&eacute;xico (US$ 36), Reino Unido (US$ 52), China (US$ 95) e EUA (US$ 325).</p><p>Neste final de semana, a produ&ccedil;&atilde;o conquistou o quarto lugar nacional, com R$ 2,4 milh&otilde;es - saiba mais na nossa bilheteria.</p><p>Batman vs Superman - A Origem da Justi&ccedil;a est&aacute; em cartaz nos cinemas brasileiros.&nbsp;</p>', 'bvs.jpg', 'Sim', 'bvs-destaque.jpg', 3),
(4, '2016-05-02', 'Astrônomos descobrem planetas ''potencialmente habitáveis'' em órbita de estrela anã fria', '<p>Os tr&ecirc;s planetas foram descobertos em constela&ccedil;&atilde;o de Aqu&aacute;rio, a &#39;apenas&#39; 40 anos-luz de dist&acirc;ncia; para cientistas, trata-se de melhor aposta para buscar vida fora do Sistema Solar.</p>', '<p>Astr&ocirc;nomos do ESO (Observat&oacute;rio Europeu do Sul) localizaram tr&ecirc;s planetas potencialmente habit&aacute;veis a apenas 40 anos-luz da Terra.</p><p>Os planetas t&ecirc;m tamanhos e temperaturas semelhantes aos de V&ecirc;nus e da Terra e, de acordo com os astr&ocirc;nomos, s&atilde;o a melhor aposta na busca por vida fora do Sistema Solar. Os planetas orbitam uma estrela an&atilde; muito fria - s&atilde;o os primeiros planetas descobertos em torno de uma estrela t&atilde;o pequena e de brilho t&atilde;o fraco.</p><p>A pesquisa, liderada por Micha&euml;l Gillon, do Instituto de Astrof&iacute;sica e Geof&iacute;sica da Universidade de Li&egrave;ge, na B&eacute;lgica, foi publicada na edi&ccedil;&atilde;o desta segunda-feira da revista cient&iacute;fica Nature.</p><p>Os astr&ocirc;nomos suspeitaram da exist&ecirc;ncia de planetas no entorno da estrela, quando, usando o telesc&oacute;pio rob&oacute;tico TRAPPIST, de La Silla, no Chile - operado de uma sala de controle na Universidade de Li&egrave;ge, na B&eacute;lgica -, perceberam que a luz da estrela diminu&iacute;a um pouco em intervalos regulares, indicando que havia objetos passando entre a estrela e a Terra.</p><p>Ap&oacute;s outras observa&ccedil;&otilde;es feitas com o supertelesc&oacute;pio VLT, tamb&eacute;m no Chile, os astr&ocirc;nomos descobriram que a estrela an&atilde;, rebatizada de Trappist-1, &eacute; muito mais gelada e vermelha que o Sol, por&eacute;m pequena, um pouco maior do que J&uacute;piter.</p><p>Eles descobriram tamb&eacute;m que os planetas que orbitam a Trappist-1 s&atilde;o de tamanhos parecidos aos da Terra. A &oacute;rbita de dois deles &eacute; de 1,5 dia e 2,4 dias, respectivamente. J&aacute; o terceiro planeta tem um &oacute;rbita menos constante, que varia de 4,5 a 7,3 dias.</p><p>&quot;Com tempos de &oacute;rbitas t&atilde;o curtos, eles est&atilde;o enter 20 e 100 vezes mais perto da estrela do que a Terra do Sol. A estrutura deste sistema planet&aacute;rio est&aacute; muito mais pr&oacute;xima em escala do sistema das luas de J&uacute;piter do que do Sistema Solar&quot;, diz Micha&euml;l Gillon.</p>', 'planeta.jpg', 'Não', 'planeta-destaque.jpg', 1),
(5, '2016-04-30', 'Simulado do Enem será repetido nos dias 7 e 8 com acesso livre', '<p>Primeira prova promovida pelo MEC em parceria com o Geekie Games teve 584 mil participantes; Organizadores dizem que esperavam 280 mil.</p>', '<p>O ministro da Educa&ccedil;&atilde;o, Aloizio Mercadante, disse que o primeiro simulado do Exame Nacional do Ensino M&eacute;dio (Enem) ser&aacute; repetido no pr&oacute;ximo s&aacute;bado (7) e domingo (8) sem restri&ccedil;&atilde;o de acesso. A proposta inicial do Minist&eacute;rio da Educa&ccedil;&atilde;o (MEC) &eacute; que os simulados fossem liberados apenas aos concluintes do ensino m&eacute;dio.</p><p>Neste fim de semana, o site do simulado apresentou congestionamento e, ap&oacute;s reclama&ccedil;&otilde;es dos estudantes nas redes sociais, o MEC decidiu aumentar o prazo. A prova estava prevista para ser encerrada &agrave;s 20h de s&aacute;bado, mas foi ampliada at&eacute; o mesmo hor&aacute;rio do domingo.</p><p>Ao todo, 584 mil estudantes concluintes do terceiro ano de escolas p&uacute;blicas e particulares se inscreveram. A expectativa dos organizadores, segundo o ministro, era ter 280 mil participantes. Segundo o ministro, apenas 16% dos candidatos come&ccedil;aram a prova e n&atilde;o conclu&iacute;ram. Entre os participantes, 79% eram de escolas p&uacute;blicas e 21% de escolas particulares.</p><p>Em m&eacute;dia, o tempo de prova foi de duas horas e vinte e cinco minutos de prova. Segundo o MEC, os cursos mais desejados pelos inscritos foram: medicina, direito, administra&ccedil;&atilde;o, psicologia, engenharia civil, enfermagem e arquitetura.</p>', '', 'Não', '', 2),
(6, '2016-04-25', 'MECFlix libera acesso a videoaulas preparatórias para o Enem', '<p>Iniciativa &eacute; parte da plataforma Hora do Enem. Minist&eacute;rio fez parceria para exibi&ccedil;&atilde;o de 500 videoaulas.</p>', '<p>O Minist&eacute;rio da Educa&ccedil;&atilde;o (MEC) lan&ccedil;ou nesta segunda-feira (2) a plataforma online de v&iacute;deoaulas &lsquo;MECFlix&rsquo;, que servir&aacute; como ferramenta de prepara&ccedil;&atilde;o para o Exame Nacional do Ensino M&eacute;dio (Enem). De acordo com o minist&eacute;rio, cerca de 500 v&iacute;deos produzidos por parceiros poder&atilde;o ser utilizados por todos os estudantes que realizarem cadastro gratuito no site. O nome do conjunto de videoaulas faz refer&ecirc;ncia ao &lsquo;Netflix&rsquo;, que transmite filmes e s&eacute;ries via streaming.</p><p>A iniciativa faz parte do projeto &quot;Hora do Enem&quot;, que &eacute; uma plataforma de estudos na qual os estudantes podem se cadastrar para acompanhar o MECFlix, montar um plano de estudos e realizar simulados online. Entretanto, ao contr&aacute;rio do MECFlix que tem acesso irrestrito, os simulados s&oacute; s&atilde;o liberados para alunos concluintes do 3&ordm; ano do ensino m&eacute;dio.</p><p>No MECFlix, os usu&aacute;rios podem organizar os v&iacute;deos por meio de playlists tem&aacute;ticas e compartilh&aacute;-las com outras pessoas.Tamb&eacute;m &eacute; poss&iacute;vel fazer anota&ccedil;&otilde;es em v&iacute;deos e coment&aacute;rios.</p><p><strong>Parceria</strong><br />O MEC afirma que os v&iacute;deos dispon&iacute;veis foram produzidos pelos parceiros Geekie Game, Descomplica, FGV, Kroton e QG do Enem. Haver&aacute; a possibilidade de que novos interessados enviem seus v&iacute;deos para que eles sejam exibidos na plataforma.</p><p><strong>Programas e plataforma</strong><br />Al&eacute;m dos v&iacute;deos online, a &quot;Hora do Enem&quot; vai contar com um programas na TV que ser&aacute; transmitido pela TV Escola e 40 emissoras parceiras (sobretudo educativas e comunit&aacute;rias). A grade prev&ecirc; matem&aacute;tica &agrave;s segundas-feiras, ci&ecirc;ncias humanas &agrave;s ter&ccedil;as-feiras, linguagens &agrave;s quarta-feiras, ci&ecirc;ncias da natureza &agrave;s quintas-feiras, e reda&ccedil;&atilde;o &agrave;s sextas-feiras. Os programas come&ccedil;am em maio.</p>', 'mecflix.jpg', 'Não', 'mecflix-destaque.jpg', 2),
(7, '2016-05-01', 'Space Jam 2'' terá LeBron James e diretor de ''Velozes e Furiosos'', diz site', '<p>Primeiro filme da franquia &eacute; de 1996 e foi sucesso com Michael Jordan.<br />Justin Lin vai dirigir longa com astros da NBA e desenhos como Pernalonga.</p>', '<p>O filme &quot;Space Jam 2&quot; ter&aacute; o diretor Justin Lin, de filmes da franquia &quot;Velozes e Furiosos&quot;, e o jogador LeBron James, do Cleveland Cavaliers, como protagonista.</p><p>A informa&ccedil;&atilde;o foi dada pelo site da revista &quot;Hollywood Reporter&quot; nesta segunda-feira.</p><p>Estrelado por Michael Jordan, &quot;Space Jam, o jogo do s&eacute;culo&quot; foi sucesso de bilheteria em 1996 misturando astros do basquete dos Estados Unidos com personagens do Looney Tunes, como Pernalonga e Patolino.</p><p>LeBron assinou contrato com a Warner no ano passado para produzir projetos de fic&ccedil;&atilde;o com o est&uacute;dio. Ele atuou na com&eacute;dia &quot;Descompensada&quot; (2015), estrelada por Amy Schumer e dirigida por Judd Apatow (&quot;O virgem de 40 anos&quot; e &quot;Ligeiramente gr&aacute;vidos&quot;).</p>', 'lebron.jpg', 'Não', 'lebron-destaque.jpg', 3),
(8, '2016-04-29', 'Pearl Jam toca na íntegra ''Ten'', disco de 1991, pela 1ª vez em show nos EUA', '<p>Banda nunca tinha mostrado faixas na ordem em que aparecem no &aacute;lbum.&nbsp;Apresenta&ccedil;&atilde;o de quase 3 horas teve m&uacute;sicas de outros trabalhos.</p>', '<p>Em show nesta quinta-feira (28) em Filad&eacute;lfia, Estados Unidos, o Pearl Jam tocou ao vivo, pela primeira vez, todas as faixas do disco de estreia da banda, &quot;Ten&quot; (1991), e na ordem em que elas aparecem no &aacute;lbum.</p><p>Considerado um cl&aacute;ssico do grunge &ndash; principal movimento do rock da d&eacute;cada de 1990 e que tinha bandas como Nirvana, Soundgarden, Alice in Chains e Mudhoney &ndash;, o CD tem hits como &quot;Even flow&quot;, &quot;Alive&quot; e &quot;Black&quot;.</p><p>Com dura&ccedil;&atilde;o de 2&nbsp; horas e 53 minutos, a apresenta&ccedil;&atilde;o desta quinta teve faixas de outros &aacute;lbuns do Pearl Jam.</p><p>Embora seja rar&iacute;ssimo que a banda dedique um segmento inteiro de um show a &uacute;nico disco, esta foi a segunda vez, na atual turn&ecirc;, em que isso aconteceu, informa a revista americana &quot;Rolling Stone&quot;. Em uma apresenta&ccedil;&atilde;o em Greenvile no dia 16 de abril, o escolhido foi &quot;Vs.&quot; (1993), o sucessor de &quot;Ten&quot;.</p><p>Antes disso, em outubro de 2014, o Pearl Jam tinha tocado inteiro &quot;No code&quot; (1966), quarto CD de est&uacute;dio do grupo de Seattle, e &quot;Yield&quot; (1998), quinto CD de est&uacute;dio.&nbsp;</p><p>Sobre aquela ocasi&atilde;o, o baixista da banda, Jeff Ament, afirmou &agrave; &quot;Rolling Stone&quot;: &quot;n&oacute;s est&aacute;vamos no avi&atilde;o, e Ed [Vedder, vocalista] disse: &#39;Ei, o que voc&ecirc;s acham de tocarmos &#39;No code&#39; nesta noite?&#39;. N&oacute;s basicamente ficamos balan&ccedil;ados e, logo antes do show, aprendemos as cinco m&uacute;sicas [do disco] que n&atilde;o v&iacute;nhamos tocando nos &uacute;ltimos 10 anos. Isso criou meio que uma boa tens&atilde;o. L&aacute; pela segunda ou terceira m&uacute;sica, os f&atilde;s come&ccedil;aram a perceber o que estava acontecendo. N&oacute;s pod&iacute;amos sentir isso. Eu acho que o fato de termos feito isso em Milwaukee e Moline foi incr&iacute;vel. Aquilo foi a melhor coisa que j&aacute; aconteceu&quot;.</p>', 'pearl-jam.jpg', 'Não', 'pearl-jam-destaque.jpg', 6),
(9, '2016-03-25', 'Iron Maiden chega a São Paulo no avião da banda, Ed Force One', '<p>Grupo toca no s&aacute;bado (26) com ingressos esgotados no Allianz Parque.<br />Bruce Dickinson pilota avi&atilde;o em turn&ecirc;; f&atilde;s esperaram banda em Guarulhos.</p>', '<p>O Iron Maiden chegou no final da tarde desta sexta-feira (25) ao aeroporto de Guarulhos, em S&atilde;o Paulo, no avi&atilde;o pr&oacute;prio da banda. O Boeing 747-400 Jumbo, chamado de Ed Force One, &eacute; pilotado pelo vocalista Bruce Dickinson. Veja o v&iacute;deo acima.</p><p>A banda se apresenta no s&aacute;bado (26) em S&atilde;o Paulo, no Allianz Parque. Os 42 mil ingressos disponibilizados j&aacute; foram todos vendidos, informou a assessoria do evento. V&aacute;rios f&atilde;s esperavam a banda no aeroporto.</p><p>Al&eacute;m da banda, o avi&atilde;o, que &eacute; customizado com o logo do grupo e artes do novo &aacute;lbum, transporta a equipe, a produ&ccedil;&atilde;o de placo e 12 toneladas de equipamentos.</p><p>O Iron Maiden encerra em SP a turn&ecirc; brasileira que passou pelo Rio de Janeiro (em 17 de mar&ccedil;o); Belo Horizonte (19 de mar&ccedil;o); Bras&iacute;lia (22 de mar&ccedil;o) e Fortaleza (24 de mar&ccedil;o).</p>', 'iron-maiden.jpg', 'Não', '', 6),
(10, '2016-05-03', 'Corinthians vende 42 mil ingressos e pode ter recorde contra o Nacional', '<p>Clube s&oacute; vai vender entradas para visitantes nesta quarta-feira e fica perto de maior p&uacute;blico do ano na arena. M&eacute;dia em 2016 supera os 33 mil pagantes</p>', '<p>O Corinthians anunciou na noite desta ter&ccedil;a-feira que comercializou 42 mil ingressos destinados &agrave; torcida alvinegra para o jogo de quarta-feira contra o Nacional, &agrave;s 21h45 (hor&aacute;rio de Bras&iacute;lia), pelas oitavas de final da Ta&ccedil;a Libertadores. N&atilde;o haver&aacute; mais venda aos corintianos no dia do jogo.</p><p>O n&uacute;mero possibilita a quebra de recorde de p&uacute;blico da Arena Corinthians em 2016. Isso porque h&aacute; 750 entradas dispon&iacute;veis para os visitantes, que v&atilde;o compr&aacute;-las na porta do est&aacute;dio em bilheteria especial. O pre&ccedil;o &eacute; de R$ 140.</p><p>O maior p&uacute;blico da temporada foi de 42.403 pagantes na vit&oacute;ria por 2 a 0 sobre o Cerro Porte&ntilde;o, pela fase de grupos da Libertadores.&nbsp;</p><p>Em 13 jogos em casa na temporada, o Corinthians teve m&eacute;dia de 33.287 pagantes. Foram 12 vit&oacute;rias e um empate, contra o Audax, que resultou na elimina&ccedil;&atilde;o alvinegra do Campeonato Paulista.</p>', 'corinthians.jpg', 'Sim', 'corinthians-destaque.jpg', 4),
(11, '2016-05-02', 'Diniz pede que jogadores ouçam dono do Audax-SP antes de saírem', '<p>T&eacute;cnico admite sondagens de grandes clubes a seus jogadores, mas acredita que<br />seria importante ouvir o investidor M&aacute;rio Teixeira antes de tomar qualquer decis&atilde;o</p>', '<p>A boa impress&atilde;o causada pelo Audax-SP no Campeonato Paulista neste ano chamou a aten&ccedil;&atilde;o principalmente de outros clubes, que mesmo antes da final da competi&ccedil;&atilde;o j&aacute; est&atilde;o de olhos em poss&iacute;veis refor&ccedil;os vindos do clube de Osasco. Mas, restando ainda o segundo jogo da decis&atilde;o entre Audax-SP e Santos, o t&eacute;cnico do pequeno clube mandou um recado para seus comandados, e se incluiu nele. Fernando Diniz pediu que os jogadores ou&ccedil;am primeiro o que tem a dizer o investidor do clube, M&aacute;rio Teixeira.</p><p>- Por ora, n&atilde;o ouvi ningu&eacute;m e nem vou ouvir at&eacute; o final do campeonato. T&ecirc;m alguns jogadores que est&atilde;o sendo sondados, at&eacute; muita gente de times grandes j&aacute; me ligou para saber de cinco, seis jogadores, e &eacute; natural. Agora, a gente tem que ouvir seu M&aacute;rio primeiro, n&atilde;o custa ouvir o que ele tem para propor em termos de futuro, depois cada um decide - afirmou o t&eacute;cnico no&nbsp;Bem, Amigos!.</p><p>Na semana passada, o meia Tch&ecirc; Tch&ecirc; foi um dos jogadores mais comentados do Audax. Ele acertou transfer&ecirc;ncia para o Palmeiras e&nbsp;recebeu bronca p&uacute;blica de M&aacute;rio Teixeira. Fernando Diniz viu com normalidade o interesse de grandes clubes por jogadores do Audax, mas citou que a bronca do &ldquo;seu M&aacute;rio&rdquo; foi em fun&ccedil;&atilde;o da atua&ccedil;&atilde;o dos empres&aacute;rios.</p><p>- Esse que &eacute; o problema que ele ficou irritado com o neg&oacute;cio do Palmeiras. Podia esperar como outros, como muita gente que me ligou, inclusive do Santos que tem interesse mesmo no Yuri. Se ele jogar bem vai ter Santos, Palmeiras... Yuri tem interesse de times de Portugal, e &eacute; super tranquilo. E cai naquela quest&atilde;o de voc&ecirc; desenvolver bem as rela&ccedil;&otilde;es com os jogadores, porque tudo que est&aacute; acontecendo na vida de todo mundo, e na minha inclusive, foi por conta da constru&ccedil;&atilde;o do time. Isso &eacute; uma coisa de moral, vamos ficar com o time e preservar o time at&eacute; o final. Esse time foi assim ontem e, independente do resultado do jogo (do pr&oacute;ximo domingo), a gente vai jogar pelo time que constru&iacute;mos ao longo do semestre.</p><p>O treinador ainda elogiou a atua&ccedil;&atilde;o de M&aacute;rio Teixeira &agrave; frente do investimento no Audax-SP.</p><p>- &Eacute; uma pessoa que o futebol precisava mais, uma pessoa apaixonada por futebol. Assiste jogo do sub-11 ao profissional. Ele n&atilde;o est&aacute; no futebol para ganhar dinheiro. Ele fala que se ganhar dinheiro do futebol quer devolver ao futebol.</p><p>Ap&oacute;s o 1 a 1 no primeiro jogo, em Osasco, Santos e Audax-SP jogam no pr&oacute;ximo domingo na Vila Belmiro. Em caso de novo empate, o t&iacute;tulo ser&aacute; decidido nos p&ecirc;naltis, e se houver um vencedor fica com a ta&ccedil;a do Paulist&atilde;o.</p>', '', 'Não', '', 4),
(12, '2016-04-25', 'CBF divulga tabela das 11 primeiras rodadas do Brasileirão 2016', '<p>Competi&ccedil;&atilde;o come&ccedil;a 14 de maio com jogos &agrave;s 16h no s&aacute;bado e ter&aacute; o campe&atilde;o Corinthians estreando domingo contra Gr&ecirc;mio. Partidas pela manh&atilde; est&atilde;o mantidas</p>', '<p>A CBF divulgou na tarde desta segunda-feira parte da tabela do Campeonato Brasileiro da S&eacute;rie A 2016, com as primeiras 11 rodadas. A competi&ccedil;&atilde;o come&ccedil;a dia 14 de maio, num s&aacute;bado, com Palmeiras x Atl&eacute;tico-PR e Flamengo x Sport, &agrave;s 16h - hor&aacute;rio novo para jogos nesse dia. O Corinthians, atual campe&atilde;o, vai estrear em casa num cl&aacute;ssico contra o Gr&ecirc;mio, no domingo, &agrave;s 16h. As partidas pela manh&atilde;, &agrave;s 11h, ser&atilde;o mantidas. Botafogo x S&atilde;o Paulo e Santa Cruz x Vit&oacute;ria ser&atilde;o as primeiras. Uma atra&ccedil;&atilde;o na 11&ordf; rodada ser&aacute; o Fla-Flu na matin&ecirc; - ser&aacute; fora do Rio pelo fato de o Maracan&atilde; estar guardado para as Olimp&iacute;adas.</p><p>Ainda no s&aacute;bado de estreia, haver&aacute; outro cl&aacute;ssico, entre Atl&eacute;tico-MG e Santos, no est&aacute;dio Independ&ecirc;ncia, &agrave;s 18h30. O outro jogo do dia ser&aacute; Coritiba x Cruzeiro, &agrave;s 21h, no Couto Pereira. Flamengo x Sport ainda n&atilde;o tem local definido, j&aacute; que o rubro-negro carioca deve ter o mando de campo fora do Rio.</p><p>As outras partidas que fechar&atilde;o a primeira rodada no domingo ser&atilde;o Figueirense x Ponte Preta e Am&eacute;rica-MG x Fluminense, &agrave;s 16h,&nbsp; e Internacional x Chapecoense, &agrave;s 18h30. Pelo mesmo motivo da interdi&ccedil;&atilde;o do Maracan&atilde; para os Jogos Ol&iacute;mpicos, n&atilde;o h&aacute; ainda est&aacute;dio definido para Botafogo x S&atilde;o Paulo, pela manh&atilde;, &agrave;s 11h.</p><p>O novo hor&aacute;rio de s&aacute;bado &agrave;s 16h ficar&aacute; praticamente simult&acirc;neo &agrave;s partidas disputadas na S&eacute;rie B no mesmo dia, que costumam ser realizadas &agrave;s 16h20.</p><p><strong>Jogos &agrave;s 11h de domingo</strong></p><p>Alvo de discuss&atilde;o na disputa do &uacute;ltimo Brasileir&atilde;o, os jogos &agrave;s 11h est&atilde;o mantidos. Na segunda rodada, ser&aacute; a vez de Santos x Coritiba e Atl&eacute;tico-PR x Atl&eacute;tico-MG. Na quarta rodada, Ponte Preta x Flamengo e Sport x Corinthians. Na sexta, Am&eacute;rica-MG x Figueirense e Santos x Botafogo. Na s&eacute;tima, Santa Cruz x Santos e Figueirense x Flamengo. Na nona rodada, Corinthians x Botafogo e Atl&eacute;tico-MG x Ponte Preta. E na 11&ordf;, Vit&oacute;ria x Ponte Preta e o tradicional Fla-Flu, que ser&aacute; fora do Rio de Janeiro.</p>', '', 'Não', '', 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` tinyint(4) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `senha` char(128) NOT NULL,
  `tipo` enum('Supervisor','Comum') NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `tipo`) VALUES
(1, 'Tiago Santos', 'tiago.bsantos@sp.senac.br', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'Supervisor'),
(2, 'Programador Web', 'prog@web.br', 'f6b07b6c1340e947b861def5f8b092d8ee710826dc56bd175bdc8f3a16b0b8acf853c64786a710dedf9d1524d61e32504e27d60de159af110bc3941490731578', 'Comum');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noticias`
--
ALTER TABLE `noticias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `noticias`
--
ALTER TABLE `noticias`
  MODIFY `id` smallint(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `noticias`
--
ALTER TABLE `noticias`
  ADD CONSTRAINT `noticias_ibfk_1` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
