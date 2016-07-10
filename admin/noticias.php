<?php 
require_once "../inc/logica-acesso.php"; 
acessoGeral();
require_once "../inc/admin-cabecalho.php"; 
?>

<main>
    <h2>Notícias</h2>
    <p>Realize nesta página a conferência, inserção, alteração ou exclusão de notícias.</p>
    <div id="tabela-responsiva">
    <table id="gerenciamento-noticias">
        <caption>Gerenciamento de notícias</caption>
        <tr>
            <th>Data</th>
            <th>Categoria</th>
            <th>Título</th>
            <th>Destaque</th>
            <th colspan="2"><a href="noticia-insere.php">
            <span class="icon-plus"></span>
            Inserir</a></th>
        </tr>
<?php
require_once "../inc/logica-noticias.php";
$noticias = listaNoticias($conexao);
foreach($noticias as $noticia):
?>
        <tr>
            <td><?=formataData($noticia['data']);?></td>
            <td><?=$noticia['categoria'];?></td>
            <td><?=$noticia['titulo'];?></td>
            <td><?=$noticia['destaque'];?></td>
            <td><a href="noticia-altera.php?id=<?=$noticia['id'];?>">
            <span class="icon-pencil"></span>
            Alterar</a></td>
            <td>
            <a href="#" class="remover" data-href="noticia-remove.php?id=" 
            data-id="<?=$noticia['id'];?>">
            <span class="icon-bin"></span>
            Remover</a>
            </td>
        </tr>
<?php
endforeach;        
?>
    </table>
    </div>
</main>
<?php require_once "../inc/admin-rodape.php";  ?>