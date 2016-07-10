<?php 
require_once "../inc/logica-acesso.php"; 
acessoGeral();
//ob_start();
require_once "../inc/admin-cabecalho.php"; 
?>

<main>
    <h2>Inserir notícia</h2>
    <p>Preencha os campos abaixo para cadastrar uma nova notícia.</p>
    <form method="post" class="clearfix">
      <p>
        <label for="data">Data:</label>
        <input type="text" name="data" id="data">
      </p>
      <p>
        <label for="categoria">Categoria:</label>
        <select name="categoria_id" id="categoria_id">
            <option value="">[Selecione]</option>
            <?php 
                include "../inc/logica-categorias.php";
                $categorias = listaCategorias($conexao);
                foreach($categorias as $categoria):
            ?>
            <option value="<?=$categoria['id'];?>"><?=$categoria['categoria'];?></option>
            <?php 
                endforeach;
            ?>
        </select>
      </p>
      <p>
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo">
      </p>
      <p>
        <label for="resumo">Resumo:</label>
        <textarea name="resumo" id="resumo" rows="2" class="ckeditor"></textarea>
      </p>
      <p>
        <label for="texto">Texto:</label>
        <textarea name="texto" id="texto" rows="6" class="ckeditor"></textarea>
      </p>
      <p>
        <label for="imagem">Imagem:</label>
        <input type="text" name="imagem" id="imagem">
      </p>
      <p id="rotulo-destaque">Destaque:</p>
      <p id="opcoes-destaque">
        <label>
          <input type="radio" name="destaque" value="Sim" id="destaque_sim">
          Sim</label>
        <br>
        <label>
          <input type="radio" name="destaque" value="Não" id="destaque_nao">
          Não</label>
      </p>
      <p>
        <label for="imagem_destaque">Imagem de destaque:</label>
        <input type="text" name="imagem_destaque" id="imagem_destaque">
      </p>
      <p>
        <button type="submit" name="inserir" id="inserir">Inserir nova notícia</button>
      </p>
</form>
    
<?php    
if( isset($_POST["inserir"]) ){
    include "../inc/logica-noticias.php";

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

        insereNoticia($conexao, $data, $titulo, $resumo, $texto, $imagem, $destaque, $imagemDestaque, $categoriaId);
        
        header("location:noticias.php");
        
    } else {
        echo "<p>É necessário preencher pelo menos os campos: data, categoria, titulo, resumo, texto e destaque!</p>";
    }
}
?>    
    
</main>
<?php
require_once "../inc/admin-rodape.php"; 
//ob_end_flush(); 
?>