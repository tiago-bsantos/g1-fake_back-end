<?php 
require_once "../inc/logica-acesso.php"; 
acessoRestrito();
require_once "../inc/admin-cabecalho.php"; 
?>

<main>
    <h2>Usuários</h2>
    <p>Realize nesta página a conferência, inserção, alteração ou exclusão de usuários.</p>
    <div id="tabela-responsiva">
    <table>
        <caption>Gerenciamento de usuários</caption>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Tipo</th>
            <th colspan="2"><a href="usuario-insere.php">
            <span class="icon-plus"></span>
            Inserir</a></th>
        </tr>
<?php
require_once "../inc/logica-usuarios.php";
$usuarios = listaUsuarios($conexao);
foreach($usuarios as $usuario):
?>
        <tr>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['email'];?></td>
            <td><?=$usuario['tipo'];?></td>
            <td><a href="usuario-altera.php?id=<?=$usuario['id'];?>">
            <span class="icon-pencil"></span>
            Alterar</a></td>
            <td>
            <a href="#" class="remover" data-href="usuario-remove.php?id=" 
            data-id="<?=$usuario['id'];?>">
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