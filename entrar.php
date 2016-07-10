<?php
include "inc/cabecalho.php"; 
if(isset($_POST["entrar"])){
	require_once ("inc/logica-acesso.php");

	if(!empty($_POST["email"]) && !empty($_POST["senha"])){
		$usuarioOK = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);
		//var_dump($usuarioOK);
		
		if( $usuarioOK == null ){
			/*echo "<script>alert('nao ok')</script>";*/
			header("location:acesso-negado.php");
		} else {
			/*echo "<script>alert('ok')</script>";*/
			login($usuarioOK["email"], $usuarioOK["nome"], $usuarioOK["tipo"]);
			header("location:admin/index.php");
		}
	} else {
        echo "<p>Por favor preencha todos os campos </p>";
    }
}
?>
<main>
    <h2>Acesso à área administrativa</h2>
    <p>Entre com seus dados usando o formulário abaixo:</p>
    <form method="post" id="login" action="#">
        <p>
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" > 
        </p>

        <p>
            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" >
        </p>

        <p><button type="submit" name="entrar" id="entrar">Entrar na área administrativa</button></p>
    </form>    
</main>
<?php include "inc/rodape.php"; ?>