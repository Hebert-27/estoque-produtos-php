<?php include("cabecalho.php")?>
<?php include("conexao.php")?>
<?php include("banco-produto.php")?>
<?php
$id = $_POST['id'];
removeProduto($conexao, $id);
?>
<?php
header("Location: produto-lista.php?removido=true");
die();
?>
<?php include("rodape.php")?>
