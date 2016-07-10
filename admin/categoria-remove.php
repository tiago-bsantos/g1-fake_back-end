<?php
include "../inc/logica-acesso.php";
acessoGeral();

// Verificando se id_tipo foi transmitido via URL (se existe)
if( isset($_GET["id"]) ){
	// Conectando
	include "../inc/logica-categorias.php"; 
	
	// Recebendo o id_tipo via URL e armazenando em uma variável
	$id = (int)$_GET["id"];
		
	removeCategoria($conexao, $id)
    header("location:categorias.php");
    
// Se não houver a passagem de parâmetro via URL, apenas faça o usuário voltar à tipos.php
} else {
	header("location:categorias.php");
}