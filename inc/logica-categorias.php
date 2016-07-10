<?php
require_once "conecta.php";

// SELECT todos (categorias)
function listaCategorias($conexao){
    // Array vazio
	$categorias = array();
    
    // Montando a consulta
	$query = "SELECT id, categoria FROM categorias ORDER BY categoria";
    
    // Executando e armazenando o resultado
	$resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
    
    //var_dump($resultado);
    
    // Adicionando cada resultado no array categorias
	while( $categoria = mysqli_fetch_assoc($resultado) ){
		array_push($categorias, $categoria);
        //print_r($categoria);
	}	
    
    //var_dump($categorias);
    //echo "<br><br>";
    //print_r($categorias);
    
    // Devolvendo o array gerado para fora da função
	return $categorias;
}

// INSERT um (categoria-insere)
function insereCategoria($conexao, $categoria){
	$query = "INSERT INTO categorias(categoria) VALUES('{$categoria}')";
	return mysqli_query($conexao, $query) or die(mysqli_error($conexao));
}

// SELECT um (categoria-altera)
function listaUmaCategoria($conexao, $id){
	$query = "SELECT id, categoria FROM categorias WHERE id = {$id}";
	$resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
	return mysqli_fetch_assoc($resultado);
}

// UPDATE um (categoria-altera)
function alteraCategoria($conexao, $id, $categoria){
	$query = "UPDATE categorias SET categoria='{$categoria}' WHERE id = {$id}";
	return mysqli_query($conexao, $query) or die(mysqli_error($conexao));
}

// DELETE um (categoria-remove)
function removeCategoria($conexao, $id){
	$query = "DELETE FROM categorias WHERE id = {$id}";
	return mysqli_query($conexao, $query) or die(mysqli_error($conexao));
}
