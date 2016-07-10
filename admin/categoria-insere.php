<?php 
include "../inc/logica-acesso.php"; 
acessoGeral();
require_once "../inc/admin-cabecalho.php"; 
?>

<main>
    <h2>Inserir categoria de notícia</h2>
    <p>Preencha os campos abaixo para cadastrar uma nova categoria.</p>
    <form method="post">
        <p>
            <label for="categoria">Nome da categoria:</label>
            <input type="text" name="categoria" id="categoria" required>
        </p>
        <p><button type="submit" name="inserir" id="inserir">Inserir nova categoria</button></p>
    </form>
    
    <?php
	if( isset($_POST["inserir"]) ){
		// Conectando
		include "../inc/logica-categorias.php";
		
		// Validando		
		if( !empty($_POST["categoria"]) ){
			// Tratando
			$categoria = htmlspecialchars(addslashes($_POST["categoria"]));
			//$categoria = mysqli_real_escape_string($_POST["categoria"]);
			insereCategoria($conexao, $categoria);
            
			//if(insereCategoria($conexao, $categoria)){
				header("location:categorias.php");
			/*} else {
				echo mysqli_error($conexao);
			}*/
		} else {
			echo "<p>É necessário preencher todos os campos!</p>";
		}
	}
?>  
    
</main>
<?php
require_once "../inc/admin-rodape.php"; 
?>