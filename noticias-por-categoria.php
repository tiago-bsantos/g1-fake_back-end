<?php 
if( isset($_GET["id"]) ){
    include "inc/logica-area-publica.php";
    $id = $_GET["id"];
    $dados = listaPorCategoria($conexao, $id);
	
	$noticias = $dados[0];
	$qtd = $dados[1];
    
    $i = 0;
    include "inc/cabecalho.php"; 
?>
<main>
        <section id="lista-de-noticias">
<?php
if( $qtd > 0 ){
    foreach( $noticias as $noticia ):
        if( $i == 0 ) {
            echo "<h2>Notícias sobre {$noticia['categoria']}:</h2>";
        }    
?>
            <article class="noticia clearfix">
               <a href="noticia-completa.php?id=<?=$noticia['id']; ?>">
                <h3>
                <?=$noticia['titulo'];?></h3>
                <p><time datetime="<?=$noticia['data']; ?>">
                    <?=formataData($noticia['data']);?></time></p>
                <?=$noticia['resumo'];?>
                </a>
            </article>
            <hr>
<?php
    $i++;
    endforeach;
?>
</section>
<?php
} else {
	$categoria = listaUmaCategoria($conexao, $id);
?>      <h2>Notícias sobre <?=$categoria['categoria'];?>:</h2>  
        <h3>Sem notícias deste tipo no momento.</h3>
        </section>
<?php
}
?>
            
    <?php include "inc/todas.php"; ?>
</main>
<?php 
    include "inc/rodape.php";
} else {
    header("location:index.php");
}

?>
