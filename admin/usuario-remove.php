<?php
include ("../inc/logica-acesso.php"); 
acessoRestrito();

// Verificando se id foi transmitido via URL (se existe)
if( isset($_GET["id"]) ){
	// Conectando
	include ("../inc/logica-usuarios.php"); 
	
	// Recebendo o id via URL e armazenando em uma variável
	$id = (int)$_GET["id"];
		
	if(removeUsuario($conexao, $id)){
		header("location:usuarios.php");
	} else {
		print mysqli_error($conexao);
	}
    
// Se não houver a passagem de parâmetro via URL, apenas faça o usuário voltar à tipos.php
} else {
	header("location:usuarios.php");
}