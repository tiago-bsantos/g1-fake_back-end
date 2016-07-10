<?php
// Se o formulário for acionado via método POST
if($_SERVER['REQUEST_METHOD'] == 'POST') {
	// Pegue e trate os dados preenchidos no formulário
    $nome    = stripslashes(trim($_POST['nome']));
    $email   = stripslashes(trim($_POST['email']));
    $telefone   = stripslashes(trim($_POST['telefone']));
    $assunto = stripslashes(trim($_POST['assunto']));
    $mensagem = stripslashes(trim($_POST['mensagem']));

    // Carregando a biblioteca PHPMailer
    require("inc/phpmailer/PHPMailerAutoload.php");

    // Criando um mail a ser enviado
    $mail = new PHPMailer();

    // Configurando os dados do servidor para envio
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = 'email ou usuario';
    $mail->Password = 'senha';

    // Quem envia
    $mail->setFrom('email@dominio.com.br', "Site XYZ");

    // Quem recebe
    $mail->addAddress('email@dominio.com.br');
    
    // Responder para
    $mail->addReplyTo("{$email}", "{$nome}");


    // Titulo da mensagem
    $mail->Subject = 'Contato do site';

    // Corpo da mensagem
    $mail->msgHTML("<html>de: {$nome}<br/>email: {$email}<br/>telefone: {$telefone}<br/>assunto: {$assunto}<br/>mensagem: {$mensagem}</html>");
    $mail->AltBody = "de: {$nome}\nemail: {$email}\nmensagem: {$mensagem}";	
    
    if($mail->send()){
        $emailEnviado = true;
    } else {
        $deuErro = true;
    }
}
include "inc/cabecalho.php"; 
?>
<main>
    <h2>Contato</h2>
<?php // Se emailEnviado existe e for TRUE...
if(isset($emailEnviado) && $emailEnviado){ ?>
	<p>Sua mensagem foi enviada com sucesso.</p>
<?php 
} else {
	// Senão, se deuErro existe e for TRUE...
    if(isset($deuErro) && $deuErro){ ?>
        <p>Houve um erro no envio, tente novamente mais tarde.</p>
<?php 
	} 
?>        
        <p>Entre em contato conosco pelo e-mail email@provedor.com.br ou preenchendo o formulário abaixo.</p>  
  
        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post" id="contato">
            <p>
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>            
            </p>
          
            <p>
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </p>
          
            <p>
                <label for="telefone">Telefone:</label>
                <input type="tel" id="telefone" name="telefone">
            </p>
            
            <p>
                <label for="assunto">Assunto:</label>
                <select id="assunto" name="assunto" required>
                    <option value="">xx Escolha xx</option>
                    <option>Informações</option>
                    <option>Reclamações</option>
                    <option>Sugestões</option>
                    <option>Outros</option>
                </select>
            </p>
            
            <p>
                <label for="mensagem">Mensagem:</label>
                <textarea rows="6" id="mensagem" name="mensagem" required></textarea>
            </p>
            <p><button type="submit" id="enviar" name="enviar">Enviar mensagem</button></p>
    </form>
<?php } ?>      
</main>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.mask.min.js"></script>
<script>
    // Polyfill: Pega o campo #data e habilita a máscara
	$(document).ready(function() {
		$('#telefone').mask('00-00000-0000');
	});
</script>
<?php include "inc/rodape.php"; ?>