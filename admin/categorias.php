<?php 
require_once "../inc/logica-acesso.php"; 
acessoGeral();
require_once "../inc/admin-cabecalho.php"; 
?>
<main>
    <h2>Categorias de Notícias</h2>
    <p>Realize nesta página a conferência, inserção, alteração ou exclusão de categorias de notícias.</p>
    <div id="tabela-responsiva">
    <table>
        <caption>Gerenciamento de categorias de notícias</caption>
        <tr>
            <th>ID</th>
            <th>Categoria</th>
            <th colspan="2"><a href="categoria-insere.php">
            <span class="icon-plus"></span>
            Inserir</a></th>
        </tr>
<?php
require_once("../inc/logica-categorias.php");
        
// Obtendo o array de categorias a partir da função listaCategorias        
$categorias = listaCategorias($conexao);

// Para cada registro de $categoria do array $categorias
foreach($categorias as $categoria):
    // Exiba-os
?>
        <tr>
            <td><?=$categoria['id'];?></td>
            <td><?=$categoria['categoria'];?></td>
            <td><a href="categoria-altera.php?id=<?=$categoria['id'];?>">
            <span class="icon-pencil"></span>
            Alterar</a></td>
            <td>
            <a href="#" class="remover" data-href="categoria-remove.php?id=" 
            data-id="<?=$categoria['id'];?>">
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
<?php
require_once "../inc/admin-rodape.php"; 
?>
