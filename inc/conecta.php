<?php
define("SERVIDOR", "localhost");	
define("USUARIO", "root");			
define("SENHA", "");				
define("BANCO", "g1maisoumenos");

// Conectando ao SGBD MySQL usando a API mysqli
$conexao = new MySQLi(SERVIDOR, USUARIO, SENHA, BANCO);
$conexao -> set_charset("utf8"); // orientado a objeto

// Se houver algum erro durante a conexão, apresenta o erro
if( $conexao -> connect_errno ) {
    die("Erro ao conectar: " . $conexao -> connect_error );
} 
// remover ao término do desenvolvimento para, se ocorrer erro, não expor informações do banco
?>
