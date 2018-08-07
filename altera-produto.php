<?php include("cabecalho.php")?>
<?php include("conexao.php")?>
<?php include("banco-produto.php")?>
<?php
$id = $_POST['id'];
$nome = $_POST['nome'];
$preco = $_POST['preco'];
$descricao = $_POST['descricao'];
$categoria_id = $_POST['categoria_id'];

if(alteraProduto($conexao, $id, $nome, $preco, $descricao, $categoria_id)){
  echo "Produto alterado!";
  }else{
  echo "Produto não alterado";
}
 ?>
 <?php include("rodape.php")?>
