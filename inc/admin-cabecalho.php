<?php
$pagina = basename($_SERVER['PHP_SELF']);
//$paginaAnterior = htmlspecialchars($_SERVER['HTTP_REFERER']); 
// ou usar no link javascript:history.back()

if( isset($_SERVER['HTTP_REFERER']) ){
    $paginaAnterior = htmlspecialchars($_SERVER['HTTP_REFERER']); 
} else {
    $paginaAnterior = "javascript:history.back()";
}
?>
<!doctype html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title> Área Administrativa | G1+/-</title>
<link href="images/favicon.png" rel="icon" sizes="64x64">
<link rel="stylesheet" type="text/css" href="../css/normalize.css">
<link rel="stylesheet" type="text/css" href="../css/estilos-admin.css">
<link rel="stylesheet" type="text/css" href="../css/icomoon/style.css">
<!--[if lt IE 9]>
<script src="../js/html5shiv.min.js"></script>
<script src="../js/respond.min.js"></script>
<![endif]-->
</head>
<body>

<header id="topo" class="clearfix">
	<div>
	    <h1><a href="index.php">G1+/-</a></h1>
        <nav>
        <?php if( $pagina != 'index.php'):?>
            <a href="index.php">
            <span class="icon-home"></span>
            Home</a>
            <?php if( $pagina != 'categorias.php' && $pagina != 'usuarios.php' && $pagina != 'noticias.php' && $pagina != 'upload.php'):?>
            <a href="<?=$paginaAnterior?>">
            <span class="icon-circle-left"></span>
            Voltar</a>
            <?php endif ?>
        <?php endif ?>
            <a href="sair.php">
            <span class="icon-switch"></span>
            Sair</a>
        </nav>
	</div>
</header>