<?php 
include "../inc/logica-acesso.php"; 
acessoGeral();
if( isset($_GET["id"]) ){ 
	include "../inc/logica-categorias.php"; 
	
	$id = (int)$_GET["id"];
	$categoria = listaUmaCategoria($conexao, $id);
    
    require_once "../inc/admin-cabecalho.php"; 
?>

<main>
    <h2>Alterar categoria de notícia</h2>
    <p>Utilize os campos abaixo para alterar a categoria.</p>
    <form method="post">
        <input type="hidden" name="id" value="<?=$categoria['id'];?>">
        <p>
            <label for="categoria">Nome da categoria:</label>
            <input type="text" name="categoria" id="categoria" value="<?=$categoria['categoria'];?>" required>
        </p>
        <p><button type="submit" name="alterar" id="alterar">Alterar categoria</button></p>
    </form>
    
    <?php
	if( isset($_POST["alterar"]) ){
		
		// Validando		
		if( !empty($_POST["categoria"]) ){
			// Tratando
			$categoria = htmlspecialchars($_POST["categoria"]);
			
			alteraCategoria($conexao, $id, $categoria);
            header("location:categorias.php");
			
		} else {
			echo "<p>É necessário preencher todos os campos!</p>";
		}
	}
?>  
    
</main>
<?php
require_once "../inc/admin-rodape.php"; 
    
// (tem que ser depois do html) Se não houver a passagem via URL, faça o usuário voltar à categorias.php
} else {
	header("location:categorias.php");
}
?>