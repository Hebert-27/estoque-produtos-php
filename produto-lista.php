<?php include("cabecalho.php");?>
<?php include("conexao.php");?>
<?php include("banco-produto.php")?>
<?php
if(array_key_exists("removido", $_GET) && $_GET['removido'] == TRUE){
?>
    <p class="alert-success">Produto apagado com sucesso!</p>
<?php
}
?>

<table class="table table-striped table-bordered">
<?php
$produtos = listaProdutos($conexao);
foreach ($produtos as $produto) {
  ?>
  <tr>
    <td><?=$produto['nome']?></td>
    <td><?=$produto['preco']?></td>
    <td><?=substr($produto['descricao'], 0, 15)?></td>
    <td><?=$produto['categoria_nome']?></td>
    <td><a class="btn btn-primary" href="alterar-produto-formulario.php?id=<?=$produto['id']?>">Alterar</a></td>
    <td>
      <form action="remove-produto" method="POST">
        <input type="hidden" name="id" value="<?=$produto['id']?>">
        <button class="btn btn-danger">Remover</button>
      </form>
    </td>
  </tr>
<?php
}
?>
</table>
  <form action="download.php" method="POST">
    <button class="btn btn-success">Gerar Excel</button>
  </form>
  <form action="download-csv.php" method="POST"><br/>
    <button class="btn btn-success">Gerar CSV</button>
  </form>
  <form action="download.php" method="POST"><br/>
    <button class="btn btn-success">Gerar JSON</button>
  </form>
<?php include("rodape.php");?>
