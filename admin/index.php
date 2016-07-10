<?php 
require_once "../inc/logica-acesso.php"; 
acessoGeral();
require_once "../inc/admin-cabecalho.php"; 
?>
<main>
    <h2>Olá <?=$_SESSION["nome"]; ?>!</h2>
    <p>Você está na área administrativa do site FZero!</p>
    <p>Escolha uma tarefa para administrar:</p>
    <p class="opcoes">
        <a href="categorias.php">
            <img src="../images/icones/icone-categorias.png" alt="Categorias">  
        </a>
        <a href="noticias.php">
            <img src="../images/icones/icone-noticias.png" alt="Notícias">  
        </a>
        <?php // Se o usuario for supervisor, mostre a opção de Usuários
        if( $_SESSION["tipo"] == 'Supervisor' ){ ?>
        <a href="usuarios.php">
            <img src="../images/icones/icone-usuarios.png" alt="Usuários">  
        </a>
        <?php } ?>
        <a href="upload.php">
        <img src="../images/icones/icone-upload.png" alt="Upload de Fotos">  
        </a>
    </p>
    
</main>
<?php
require_once "../inc/admin-rodape.php"; 
?>