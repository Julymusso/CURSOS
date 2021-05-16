<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h1>Situação</h1>
    <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $m = ($n1+$n2)/2;
    echo "A média da nota é $m<br/>";
    echo "Aluno ".($m>6 ? "Aprovado" : "Reprovado");
    ?>
</div>
</body>
</html>
 