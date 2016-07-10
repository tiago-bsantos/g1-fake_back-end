<footer>
    <p>&copy; Copyright 2015-2016 Organizações Tabajara | Política de Privacidade</p>
</footer>
<?php 
switch($pagina){
    case 'categorias.php':
    case 'noticias.php':
    case 'usuarios.php':
?>
<script src="../js/valida-exclusao.js"></script>
<?php 
    break;
    case 'noticia-insere.php':
    case 'noticia-altera.php':
?>
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery.mask.min.js"></script>
<script>
	// Polyfill: Pega o campo #data e habilita a máscara
	$(document).ready(function() {
		$('#data').mask('00/00/0000');
	});
</script>
<script src="//cdn.ckeditor.com/4.5.7/basic/ckeditor.js"></script>
<?php                   
    break;
} 
?>
</body>
</html>