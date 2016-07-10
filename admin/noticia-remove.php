<?php
include "../inc/logica-acesso.php"; 
acessoGeral();

// Verificando se id foi transmitido via URL (se existe)
if( isset($_GET["id"]) ){
	// Conectando
	include "../inc/logica-noticias.php"; 
	
	// Recebendo o id via URL e armazenando em uma variável
	$id = (int)$_GET["id"];
		
	removeNoticia($conexao, $id);
    header("location:noticias.php");
    
// Se não houver a passagem de parâmetro via URL, apenas faça o usuário voltar à tipos.php
} else {
	header("location:noticias.php");
}