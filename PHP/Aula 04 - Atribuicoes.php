<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
  <h1>Atribuições</h1>
  <?php
      $preco = $_GET["p"];
      $preco += $preco*(10/100);
      
      echo "O preço do produto com aumento é R$".number_format($preco,2,",",".");
  
  ?>
</div>
</body>
</html>
 