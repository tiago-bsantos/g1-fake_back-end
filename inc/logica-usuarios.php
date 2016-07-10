<?php
require_once "conecta.php";

function listaUsuarios($conexao){
	$usuarios = array();
	$query = "SELECT id, nome, email, tipo FROM usuarios ORDER BY nome";
	$resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
	while( $usuario = mysqli_fetch_assoc($resultado) ){
		array_push($usuarios, $usuario);
	}	
	return $usuarios;
}

function listaUmUsuario($conexao, $id){
	$query = "SELECT id, nome, email, senha, tipo FROM usuarios WHERE id = {$id}";
	$resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
	return mysqli_fetch_assoc($resultado);
}

function insereUsuario($conexao, $nome, $email, $senha, $tipo){
	$query = "INSERT INTO usuarios(nome, email, senha, tipo) VALUES('{$nome}', '{$email}', '{$senha}', '{$tipo}')";
	return mysqli_query($conexao, $query) or die(mysqli_error($conexao));
}

function alteraUsuario($conexao, $id, $nome, $email, $senha, $tipo){
	$query = " UPDATE usuarios SET nome = '{$nome}', email = '{$email}', ";
	$query .= " senha = '{$senha}', tipo = '{$tipo}' ";
	$query .= " WHERE id = {$id}";
	return mysqli_query($conexao, $query) or die(mysqli_error($conexao));
}

function removeUsuario($conexao, $id){
	$query = "DELETE FROM usuarios WHERE id = {$id}";
	return mysqli_query($conexao, $query) or die(mysqli_error($conexao));
}
