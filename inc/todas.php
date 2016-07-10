	<section id="todas">
<?php
$noticias = listaTodas($conexao);
$qtd = sizeof($noticias);
?>
<h2>Todas as notícias (<?=$qtd;?>)</h2>
<?php
foreach ($noticias as $noticia):
?>  
        <article>
            <a href="noticia-completa.php?id=<?=$noticia['id']; ?>">
                <h4>
                <time datetime="<?=$noticia['data'];?>">
                <?=formataData($noticia['data']);?>
                </time> - 
                <?=$noticia['titulo'];?>
                </h4>
                <?=$noticia['resumo'];?>
            </a>
		</article>
<?php
endforeach;        
?>
    </section>