<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h1>Atribuições e Operdores</h1>
    <?php
    $preco = $_GET["p"];
    echo "O preço do produto é R$ $preco";
    $preco += ($preco*(10/100));
    echo "<br/>O preço do produto com 10% de aumento é R$".number_format($preco,2,",",".");
    ?>
</div>
</body>
</html>
 