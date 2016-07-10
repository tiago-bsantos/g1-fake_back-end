<?php require_once("inc/logica-area-publica.php"); 
$pagina = basename($_SERVER['PHP_SELF']);
?>
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> <?php if($pagina == 'noticia-completa.php'){ echo $noticia['titulo'] ." | ";}?> G1+/- | O portal de notícias de qualquer um</title>
<link href="images/favicon.png" rel="icon" sizes="64x64">
<link rel="stylesheet" type="text/css" href="css/normalize.css">
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" type="text/css" href="slick/slick.css">
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
<link rel="stylesheet" type="text/css" href="css/icomoon/style.css">
<!--[if lt IE 9]>
<script src="js/html5shiv.min.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div id="contato-admin">
    <a href="contato.php">
    <span class="icon-envelop"></span>
    Contato</a>
    <a href="admin/">
    <span class="icon-lock"></span>
    Área Administrativa</a>
</div>
<div id="container">
<header id="topo" class="clearfix">
	<h1><a href="index.php">G1+/-</a></h1>
    <form action="resultado.php" method="get">
    	<input type="search" name="busca" placeholder="Buscar">
    	<button>OK</button>
    </form>
    <nav aria-haspopup="true" id="menu">
		<h2 class="menu-icon" onclick="void(0)">
            Menu <span class="icon-menu"></span>
        </h2>
    	<ul class="menu">
<?php 
    require_once ("inc/logica-categorias.php");
    $categorias = listaCategorias($conexao);
    foreach($categorias as $categoria):
?>    	
    		<li><a href="noticias-por-categoria.php?id=<?=$categoria['id'];?>"><?=$categoria['categoria'];?></a></li>
<?php 
    endforeach;
?>
    	</ul>
    </nav>
</header>
