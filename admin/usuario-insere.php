<?php 
include "../inc/logica-acesso.php"; 
acessoRestrito();
require_once "../inc/admin-cabecalho.php"; 
?>

<main>
    <h2>Inserir usuário</h2>
    <p>Preencha os campos abaixo para cadastrar um novo usuário.</p>
    <form method="post">
        <p>
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" required>
        </p>
        <p>
            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" required>
        </p>
        <p>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required>
        </p>
        <p>
            <label for="tipo">Tipo:</label>
            <select id="tipo" name="tipo" required>
                <option value="">[Selecione]</option>
                <option value="Comum">Comum</option>
                <option value="Supervisor">Supervisor</option>
            </select>
        </p>
        
        <p><button type="submit" name="inserir" id="inserir">Inserir novo usuário</button></p>
    </form>
    
    <?php
	if( isset($_POST["inserir"]) ){
		// Conectando
		include "../inc/logica-usuarios.php";
		
		// Validando		
		if( !empty($_POST["nome"]) && !empty($_POST["email"]) || 
			!empty($_POST["senha"]) && !empty($_POST["tipo"]) ){

			// Tratando
			$nome = htmlspecialchars($_POST["nome"]);
			$senha = hash('sha512', $_POST["senha"]);
			$tipo = htmlspecialchars($_POST["tipo"]);
			$email = strtolower(htmlspecialchars($_POST["email"]));
		
			if(insereUsuario($conexao, $nome, $email, $senha, $tipo)){
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
<?php require_once "../inc/admin-rodape.php";  ?>