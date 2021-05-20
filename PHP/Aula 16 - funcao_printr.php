<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
<?php
    $x[0] = 4;
    $x[1] = 8;
    $x[2] = 2;

    print_r($x); //últil para períodos de teste, Saída: Array ( [0] => 4 [1] => 8 [2] => 2 ) // => simbolo de associação
    var_dump($x); //Saída: matriz (3) {[0] => int (4) [1] => int (8) [2] => int (2)}
    var_export($x); //Saída: array (0 => 4, 1 => 8, 2 => 2,)
?>  
</div>
</body>
</html>
 