<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
  <h1>Operações</h1>
  <?php
      $n1 = $_GET["a"];
      $n2 = $_GET["b"];
      
      echo "A soma entre $n1 e $n2 é igual a ".($n1 + $n2);
      echo "<br/>A multiplicação entre $n1 e $n2 é igual a ".($n1*$n2);
      echo "<br/>A divisão entre $n1 e $n2 é igual a ".($n1/$n2);
      echo "<br/>A diferença entre $n1 e $n2 é igual a ".($n1-$n2);
  ?>
</div>
</body>
</html>
 