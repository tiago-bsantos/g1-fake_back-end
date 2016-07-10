<?php
require_once "conecta.php";

function listaNoticias($conexao){
	$noticias = array();
	$query = "SELECT noticias.id, data, titulo, destaque, categoria_id, categoria FROM noticias INNER JOIN categorias ON noticias.categoria_id = categorias.id ORDER BY data DESC";
	
    $resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
    while( $noticia = mysqli_fetch_assoc($resultado) ){
        array_push($noticias, $noticia);
    }	
	return $noticias;
}


function insereNoticia($conexao, $data, $titulo, $resumo, $texto, $imagem, $destaque, $imagemDestaque, $categoriaId){
	$query = "INSERT INTO noticias(data, titulo, resumo, texto, imagem, destaque, imagem_destaque, categoria_id) ";
	$query .= " VALUES('{$data}', '{$titulo}', '{$resumo}', '{$texto}', '{$imagem}', '{$destaque}', '{$imagemDestaque}', '{$categoriaId}')";
	return mysqli_query($conexao, $query) or die(mysqli_error($conexao));
}

function listaUmaNoticia($conexao, $id){    
    $query = "SELECT noticias.*, categorias.categoria FROM noticias INNER JOIN categorias ON noticias.categoria_id = categorias.id WHERE noticias.id = {$id}";    
    
	$resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
       
    return mysqli_fetch_assoc($resultado);
}

function alteraNoticia($conexao, $id, $data, $titulo, $resumo, $texto, $imagem, $destaque, $imagemDestaque, $categoriaId){
    $query = " UPDATE noticias SET data = '{$data}', categoria_id = '{$categoriaId}', titulo = '{$titulo}', resumo = '{$resumo}', texto = '{$texto}', imagem = '{$imagem}', destaque = '{$destaque}', imagem_destaque = '{$imagemDestaque}' WHERE id = {$id}";
    
    return mysqli_query($conexao, $query) or die(mysqli_error($conexao));    
}

function removeNoticia($conexao, $id){
	$query = "DELETE FROM noticias WHERE id={$id}";
	return mysqli_query($conexao, $query) or die(mysqli_error($conexao));
}

function formataData($data){
    return date("d/m/Y", strtotime($data));
}

function formataDataBanco($data){
    return date('Y-m-d', strtotime(str_replace('/', '-', $data)));
}