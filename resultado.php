<?php 
if( isset($_GET["busca"]) ){
    include "inc/logica-area-publica.php";

    // Tratando (evitando aspas, caracteres especiais e do html)
    $termo = mysqli_real_escape_string($conexao, $_GET["busca"]);
	$dados = listaBusca($conexao, $termo);
	$noticias = $dados[0];
	$qtd = $dados[1];
    include "inc/cabecalho.php"; 
?>
<main>
        <?php
// Se a quantidade de resultados for acima de 0...
if( $qtd > 0 ){
?>
    <section id="lista-de-noticias">
        <h2> Você está procurando por: &quot;<?=$termo;?>&quot;</h2>
        
    <?php
        // Exiba-os
        foreach($noticias as $noticia): 
    ?>    
            <article>
                <h3>
                <time datetime="<?=$noticia['data'];?>"> 
                  <?=formataData($noticia['data']); ?>
                </time> - 
                <a href="noticia-completa.php?id=<?=$noticia['id'];?>"> 
                <?=$noticia['titulo'];?></a>
                </h3>
                <?=$noticia['resumo'];?>
            </article>
    <?php
        endforeach;
    ?>
        
    </section>
<?php		
} else {
// Senão, diga que não tem resultados	 
?>
	<h2> Resultado da busca por: &quot;<?=$termo;?>&quot;</h2>
  	<h3>Não existem registros no Banco de Dados para a palavra-chave digitada.</h3>
<?php 
} // fim if quantidade de resultados
?>
            
    <hr>
    <?php include "inc/todas.php"; ?>
</main>
<?php 
    include "inc/rodape.php";
} else {
    header("location:index.php");
}

?>
