<?php include("conexao.php")?>
<?php include("banco-produto.php")?>
<?php

//$produtos = listaProdutos($conexao);
$list = array
(
"Peter,Griffin,Oslo,Norway",
"Glenn,Quagmire,Oslo,Norway",
);

$produtos = listaProdutos($conexao);
var_dump($produtos);
ob_start();
  $df = fopen("php://output", 'w');
  fputcsv($df, array_keys(reset($array)));
  while($produto = mysqli_fetch_assoc($produtos)){
    array_push($produtos, $produto);
    fputcsv($df, $produto);
  }
  fclose($df);
  return ob_get_clean();

?>
