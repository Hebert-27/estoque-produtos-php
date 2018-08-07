<?php include("cabecalho.php")?>
<?php include("conexao.php")?>
<?php include("banco-produto.php")?>
<?php

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];

if(insereProduto($conexao, $nome, $preco, $descricao, $categoria_id)){?>
  <p class="text-success">O produto foi adicionado no banco!"</p><?php
}else{
  $erro = mysqli_error($conexao);?>
  <p class="alert-danger">O produto não foi adicionado no banco! Erro <?= $erro; ?>"</p><?php
}
mysqli_close($conexao);
?>

<?php include("rodape.php")?>
