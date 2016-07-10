<?php
if( isset($_GET["id"]) ){
    include "inc/logica-area-publica.php";
    $id = $_GET["id"];
	$noticia = listaNoticiaCompleta($conexao, $id);  
    include "inc/cabecalho.php"; 
?>
<main>
    <article class="clearfix">
        <h2> <?=$noticia['categoria'];?> </h2>
        <h3> <?=$noticia['titulo'];?> </h3>
        <p><time datetime="<?=$noticia['data'];?>">
            <?=formataData($noticia['data']);?>
        </time></p>
        <?php if( $noticia['imagem'] != '' || $noticia['imagem'] != null ) {?>
        <img src="images/<?=$noticia['imagem'];?>" alt="Foto da notícia" class="alinha-esquerda">
        <?php } ?>
        <?=$noticia['texto']; ?>
    </article>     
    
    <?php include "inc/todas.php"; ?>
</main>
<?php 
    include "inc/rodape.php";
} else {
    header("location:index.php");
}

?>
