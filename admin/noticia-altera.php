<?php
include "../inc/logica-acesso.php"; 
acessoGeral();
ob_start(); // Ativa buffer de saída, evitando 'headers already sent...'

// Verificando se id_noticia foi transmitido via URL
if( !empty($_GET["id"]) ){
	include "../inc/logica-noticias.php"; 
	
	$id = (int)$_GET["id"];
	$noticia = listaUmaNoticia($conexao, $id);	
    require_once "../inc/admin-cabecalho.php"; 
?>

<main>
    <h2>Alterar notícia</h2>
    <p>Utilize os campos abaixo para alterar a notícia</p>
    <form id="form1" name="form1" method="post">
        <input name="id" type="hidden" id="id" value="<?=$noticia['id'];?>">
      <p>
        <label for="data">Data:</label>
        <input type="text" name="data" id="data" value="<?=formataData($noticia['data']);?>">
      </p>
      <p>
        <label for="categoria">Categoria:</label>
        <select name="categoria_id" id="categoria_id">
            <option value="">[Selecione]</option>	
            <?php 
                include ("../inc/logica-categorias.php");
                $categorias = listaCategorias($conexao);
                foreach($categorias as $categoria):
            ?>
            <option value="<?=$categoria['id']; ?>"
            <?php
             // Se id da tabela categorias for igual ao categoria_id da tabela noticias
             if($categoria['id'] == $noticia['categoria_id']){ echo " selected"; } ?>
            ><?=$categoria['categoria']; ?></option>
            <?php 
                endforeach;
            ?>
        </select>
      </p>
      <p>
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" value="<?=$noticia['titulo'];?>">
      </p>
      <p>
        <label for="resumo">Resumo:</label>
        <textarea name="resumo" id="resumo" rows="3" class="ckeditor"><?=$noticia['resumo'];?></textarea>
      </p>
      <p>
        <label for="texto">Texto:</label>
        <textarea name="texto" id="texto" rows="6" class="ckeditor"><?=$noticia['texto'];?></textarea>
      </p>
      <p>
        <label for="imagem">Imagem:</label>
        <input type="text" name="imagem" id="imagem" value="<?=$noticia['imagem'];?>">
      </p>
      <p id="rotulo-destaque">Destaque:</p>
      <p id="opcoes-destaque">
        <label>
          <input type="radio" name="destaque" value="Sim" id="destaque_sim" <?php if($noticia['destaque'] == "Sim"){ echo " checked"; } ?>>
          Sim</label>
        <br>
        <label>
          <input type="radio" name="destaque" value="Não" id="destaque_nao" <?php if($noticia['destaque'] == "Não"){ echo " checked"; } ?>>
          Não</label>
        </p>
        <p>
        <label for="imagem_destaque">Imagem de destaque:</label>
        <input type="text" name="imagem_destaque" id="imagem_destaque" value="<?=$noticia['imagem_destaque'];?>">
      </p>
      <p>
        <button type="submit" name="alterar" id="alterar">Alterar notícia</button>
      </p>
</form>
    
<?php    
if( isset($_POST["alterar"]) ){

	// Validando		
    if( !empty($_POST["data"]) && !empty($_POST["categoria_id"]) && !empty($_POST["titulo"]) && 
        !empty($_POST["resumo"]) && !empty($_POST["texto"]) && !empty($_POST["destaque"]) ){

        // Tratando
        $data = formataDataBanco($_POST["data"]);
        $categoriaId = htmlspecialchars($_POST["categoria_id"]);
        $titulo = addslashes(htmlspecialchars($_POST["titulo"]));
        $resumo = addslashes($_POST["resumo"]);
        $texto = addslashes($_POST["texto"]);
        $imagem = strtolower(htmlspecialchars($_POST["imagem"]));
        $destaque = htmlspecialchars($_POST["destaque"]);
        $imagemDestaque = strtolower(htmlspecialchars($_POST["imagem_destaque"]));

        alteraNoticia($conexao, $id, $data, $titulo, $resumo, $texto, $imagem, $destaque, $imagemDestaque, $categoriaId);
        
        header("location:noticias.php");
        
    } else {
        echo "<p>É necessário preencher pelo menos os campos: data, categoria, titulo, resumo, texto e destaque!</p>";
    }
}
?>    
    
</main>

<?php
require_once "../inc/admin-rodape.php"; 
} else {
	header("location:noticias.php");
}
ob_end_flush(); // desativa buffer de saída
?>