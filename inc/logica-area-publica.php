<?php
require_once "inc/conecta.php";

function listaDestaques($conexao){
	$noticias = array();
	$query = "SELECT noticias.id, data, categoria_id, titulo, resumo, imagem_destaque, categoria ";
	$query .= " FROM noticias INNER JOIN categorias ";
	$query .= " ON noticias.categoria_id = categorias.id WHERE ";
	$query .= " destaque = 'Sim' AND imagem_destaque <> '' ORDER BY data DESC LIMIT 0, 4 ";  
	$resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
	while( $noticia = mysqli_fetch_assoc($resultado) ){
		array_push($noticias, $noticia);
	}	
	return $noticias;	
}

function listaTodas($conexao){
	$noticias = array();
	$query = "SELECT id, data, titulo, resumo FROM noticias ORDER BY data DESC";
	$resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
	while( $noticia = mysqli_fetch_assoc($resultado) ){
		array_push($noticias, $noticia);
	}	
	return $noticias;
}

function listaNoticiaCompleta($conexao, $id){
    $query = "SELECT titulo, data, texto, imagem, categoria ";
	$query .= " FROM noticias INNER JOIN categorias ";
	$query .= " ON noticias.categoria_id = categorias.id WHERE noticias.id = {$id}";
	$resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));		
	return mysqli_fetch_assoc($resultado);
}

function listaPorCategoria($conexao, $id){
	$noticias = array();
	$query = "SELECT data, titulo, resumo, noticias.id, categoria ";
	$query .= " FROM noticias INNER JOIN categorias ";
	$query .= " ON categorias.id = noticias.categoria_id WHERE categorias.id = {$id}";
	$query .= " ORDER BY data DESC";
	
	$resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
	while( $noticia = mysqli_fetch_assoc($resultado) ){
		array_push($noticias, $noticia);
	}
	$quantidade = sizeof($noticias);	
	return array($noticias, $quantidade);
}

function listaBusca($conexao, $termo){
	$noticias = array();
	$query = "SELECT id, data, titulo, resumo ";
	$query .= " FROM noticias WHERE texto LIKE '%{$termo}%' ORDER BY data DESC";	
	$resultado = mysqli_query($conexao, $query or die(mysqli_error($conexao)));
	while( $noticia = mysqli_fetch_assoc($resultado) ){
		array_push($noticias, $noticia);
	}
	$quantidade = sizeof($noticias);	
	return array($noticias, $quantidade);
}

function formataData($data){
    return date("d/m/Y", strtotime($data));
}
