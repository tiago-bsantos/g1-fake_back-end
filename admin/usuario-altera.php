<?php 
include ("../inc/logica-acesso.php"); 
acessoRestrito();

ob_start();
// Validando a entrada na página com id_usuario via URL (GET)
if( !empty($_GET["id"]) ){
	// Abre conexão
	include ("../inc/logica-usuarios.php"); 
	
	// Tratando
	$id = $_GET["id"];
    
	$usuario = listaUmUsuario($conexao, $id);    
    require_once "../inc/admin-cabecalho.php"; 
?>

<main>
    <h2>Alterar usuário</h2>
    <p>Utilize os campos abaixo para alterar dados do usuário.</p>
    <form method="post">
       <input type="hidden" name="id" id="id" value="<?=$usuario['id'];?>">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required value="<?=$usuario['nome'];?>">
        </p>
        <p>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" required value="<?=$usuario['email'];?>">
        </p>
        <p>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required value="<?=$usuario['senha'];?>">
        </p>
        <p>
            <label for="tipo">Tipo:</label>
            <select id="tipo" name="tipo" required>
                <option value="">[Selecione]</option>
                <option value="comum" <?php if( $usuario['tipo'] == "Comum" ) { echo "selected"; }?>>Comum</option>
                <option value="supervisor" <?php if($usuario['tipo'] == "Supervisor"){echo "selected";}?>>Supervisor</option>
            </select>
        </p>
        
        <p><button type="submit" name="alterar" id="alterar">Alterar usuário</button></p>
    </form>
    
    <?php
	if( isset($_POST["alterar"]) ){
		
		// Validando		
		if( !empty($_POST["nome"]) && !empty($_POST["email"]) || 
			!empty($_POST["senha"]) && !empty($_POST["tipo"]) ){

			// Tratando
			$nome = htmlspecialchars($_POST["nome"]);
			$_POST["senha"] == $usuario['senha'] ? $senha = $_POST["senha"] : $senha = hash('sha512', $_POST["senha"]);
			$tipo = htmlspecialchars($_POST["tipo"]);
			$email = strtolower(htmlspecialchars($_POST["email"]));
		
			if(alteraUsuario($conexao, $id, $nome, $email, $senha, $tipo)){
				header("location:usuarios.php");
			} else {
				echo mysqli_error($conexao);
			}
		} else {
			echo "<p>É necessário preencher todos os campos!</p>";
		}
	}
?>  
    
</main>
<?php
require_once "../inc/admin-rodape.php"; 
// Se não houver a passagem de parâmetro via URL, faça o usuário voltar à usuarios.php
} else {
	header("location:usuarios.php");
}
ob_end_flush();
?>