<?php include "inc/cabecalho.php"; ?>
<main>
    <section id="carousel">
		<h2>Destaques</h2>
        <div class="carousel-destaques">
<?php
$noticiasEmDestaque = listaDestaques($conexao);
foreach ($noticiasEmDestaque as $destaque) :  
?>	
        <article>
           <h3><?=$destaque['categoria'];?> </h3>
            <a href="noticia-completa.php?id=<?=$destaque['id'];?>">
                <img src="images/<?=$destaque['imagem_destaque'];?>" alt="">
                <h4><time datetime="<?=$destaque['data'];?>"><?=formataData($destaque['data']); ?></time> - <?=$destaque['titulo'];?></h4>
                <?=$destaque['resumo'];?>
            </a>
        </article>      
<?php
endforeach;
?>
        </div>
    </section>
	
  <?php include "inc/todas.php"; ?>
</main>
<?php include "inc/rodape.php"; ?>
