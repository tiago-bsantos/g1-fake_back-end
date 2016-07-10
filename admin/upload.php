<?php 
include "../inc/logica-acesso.php"; 
acessoGeral();
require_once "../inc/admin-cabecalho.php"; 
?>

<main>
    <h2>Upload de fotos para notícias</h2>
    <p>Utilize o formulário para selecionar e enviar uma foto para notícia.</p>       
    <form enctype="multipart/form-data" method="post">
        <p>
            <label for="upload">Selecione uma foto para upload: </label>
            <input type="file" id="upload" name="upload">
        </p>
        <p><button type="submit" id="enviar" name="enviar">Enviar foto</button></p>
    </form>
        <?php
if ( isset($_POST['enviar']) ) {
	// Configuração para recebimento do nome do arquivo
	$nome = $_FILES['upload']['name'];
	$nomeTemporario = $_FILES['upload']['tmp_name'];	
    
    // Obtendo a extensão
    $tipoDeArquivo = pathinfo($nome,PATHINFO_EXTENSION);
		
	// Definição do diretório/pasta e armazenamento pela variável
	$pasta = "../images/$nome";
		
	switch($tipoDeArquivo){
        case 'jpg':
        case 'jpeg':
        case 'gif':
        case 'png':
        case 'svg':
            // Mover arquivo do diretorio temp do servidor para o destino
            move_uploaded_file($nomeTemporario, $pasta); 
            $operacao = true;
        break;
        
        default:
            $operacao = false;
        break;
    }
		
	if($operacao){
        // Redirecionar para a página admin/index.php
        header("location:index.php");
    } else {
        echo "<p>Ops! Algo deu errado!</p>";
    }
}
?>    
</main>
<?php require_once "../inc/admin-rodape.php";  ?>