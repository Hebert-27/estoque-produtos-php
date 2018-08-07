<?php include("cabecalho.php")?>
<?php include("banco-categoria.php")?>
<?php include("conexao.php")?>
<?php
      $categorias = listaCategorias($conexao);
?>
      <h1>Formulário de Produto</h1>
      <form action="adicionar-produto" method="POST">
        <table class="table">
          <tr>
            <td>Nome:</td>
            <td><input class="form-control" type="text" name="nome"></td>
          </tr>
          <tr>
            <td>Valor:</td>
            <td><input class="form-control" type="number" step="0.01" name="preco"></td>
          </tr>
          <tr>
            <td>Descrição:</td>
            <td><textarea class="form-control" name="descricao"></textarea></td>
          </tr>
          <tr>
            <td></td>
            <td><input type="checkbox" name="usado" value="true">Usado
          </tr>
          <tr>
            <td>Categoria</td>
            <td>
              <select name="categoria_id" class="form-control">
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
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
          </tr>
        </table >
      </form>
<?php include("rodape.php")?>
