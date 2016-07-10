<?php
session_start();

function buscaUsuario($conexao, $email, $senha){
	$email = mysqli_real_escape_string($conexao, $email);
	$senhaSHA512 = hash('sha512', $senha);
	$query = "SELECT * FROM usuarios WHERE email = '{$email}' AND senha = '{$senhaSHA512}'";
	$resultado = mysqli_query($conexao, $query) or die(mysqli_error($conexao));
	return mysqli_fetch_assoc($resultado);
}

function login($email, $nome, $tipo){
	// Se a sessão não existir, inicia uma
	if (!isset($_SESSION)) { session_start(); }		

	// Salva os dados na sessão
	$_SESSION["email"] = $email;
	$_SESSION["nome"] = $nome;
	$_SESSION["tipo"] = $tipo;
}

function acessoGeral(){
	// Inicia uma sessão
	if( !isset($_SESSION) ){ session_start(); }
	
    // Se não existe uma variável de sessão chamada email, significa que não houve um processo de login com sucesso por parte de um usuário...
    if( !isset($_SESSION['email']) ){
        // ... portanto, destrua qualquer sessão
        session_destroy();

        // ... faça o usuário voltar para o formulário de entrada
        header("location:../entrar.php");

        // Forçar a saída do script evitando a execução de qualquer outro código
        exit;
    }
}


function acessoRestrito(){
	if( !isset($_SESSION) ){ session_start(); }

    // Se não estiver logado na sessão, vai para entrar.php
    if( !isset($_SESSION["email"]) ){
        session_destroy();
        header("location:../entrar.php");
        exit;
    }

    // Se estiver logado (ou seja, SESSION email existe) e não for um supervisor
    if( isset($_SESSION["email"]) && $_SESSION["tipo"] != 'Supervisor'){
        // ... vá para nao-autorizado
        header("location:nao-autorizado.php");
        exit;
    }
}

function logout(){
	session_start();
	session_destroy();
	header("Location: ../index.php");
	exit;	
}