<?php
include("conexao.php");

$tabela = "<meta charset=utf-8>";
$tabela .= "<table border='1'>
                <tr>
                    <td colspan='2'>Tabela de Produtos</tr>
                </tr>
                <tr>
                    <td><b>Nome</b></td>
                    <td><b>Preço</b></td>
                </tr>";

$produtos = array();
$query = "SELECT * FROM produtos";
$resultado = mysqli_query($conexao, $query);
while($produto = mysqli_fetch_array($resultado)){
  $tabela .= "<tr>
                  <td>{$produto['nome']}</td>
                  <td>{$produto['preco']}</td>
              </tr>";
}


$tabela .= "</table>";

// Força o Download do Arquivo Gerado
header("Content-Type: application/xls");
header ("Content-Disposition: attachment; filename = relatorio.xls");
echo $tabela;
?>
