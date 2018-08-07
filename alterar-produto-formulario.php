<?php include("cabecalho.php")?>
<?php include("banco-categoria.php")?>
<?php include("conexao.php")?>
<?php include("banco-produto.php")?>
<?php
      $id = $_GET['id'];
      $produto =  buscarProduto($conexao, $id);
      $categorias = listaCategorias($conexao);

?>
      <h1>Alterar Produto</h1>
      <form action="altera-produto" method="POST">
        <input type="hidden" name="id" value="<?=$produto['id']?>">
        <table class="table">
          <tr>
            <td>Nome:</td>
            <td><input class="form-control" type="text" name="nome" value="<?=$produto['nome']?>"></td>
          </tr>
          <tr>
            <td>Valor:</td>
            <td><input class="form-control" type="number" step="0.01" name="preco" value="<?=$produto['preco']?>"></td>
          </tr>
          <tr>
            <td>Descrição:</td>
            <td><textarea class="form-control" name="descricao"><?=$produto['descricao']?></textarea></td>
          </tr>
          <tr>
            <td><input type="checkbox" name="usado" value="true">Usado</td>
          </tr>
          <tr>
            <td>Categoria</td>
            <td>
              <select name="categoria_id">
               <?php
                  foreach($categorias as $categoria) : ?>
                  <option value="<?=$categoria['id']?>">
                    <?=$categoria['nome']?><br/>
                  </option>
                  <?php endforeach ?>
              </select>
            </td>
          </tr>
          <tr>
            <td><button class="btn btn-primary" type="submit">Alterar</button></td>
          </tr>
        </table >
      </form>
<?php include("rodape.php")?>
