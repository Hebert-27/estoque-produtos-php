<?php
function insereProduto($conexao,  $nome, $preco, $descricao, $categoria_id){
  $query = "INSERT INTO produtos(nome, preco, descricao, categoria_id) values ('{$nome}', '{$preco}', '{$descricao}', '{$categoria_id}')";
  $resultado = mysqli_query($conexao, $query);
  return $resultado;
}


function listaProdutos($conexao){
  $produtos = array();
  $query = "SELECT produtos.*, categorias.nome AS categoria_nome FROM produtos
  JOIN categorias ON produtos.categoria_id=categorias.id";
  $resultado = mysqli_query($conexao, $query);

  while($produto = mysqli_fetch_assoc($resultado)){
    array_push($produtos, $produto);
  }
  return $produtos;
}

function buscarProduto($conexao, $id){
  $query="SELECT * FROM produtos WHERE id={$id}";
  $resultado = mysqli_query($conexao, $query);
  $produto = mysqli_fetch_assoc($resultado);
  return $produto;
}

function alteraProduto($conexao,  $id, $nome, $preco, $descricao, $categoria_id){
  $query = "UPDATE produtos set nome='{$nome}', preco={$preco}, descricao='{$descricao}', categoria_id='{$categoria_id}' WHERE id='{$id}'";
  $resultado = mysqli_query($conexao, $query);
  return $resultado;
}

function removeProduto($conexao, $id){
  $query = "delete from produtos where id = {$id}";
  $resultado = mysqli_query($conexao, $query);
  return $resultado;
}
?>
