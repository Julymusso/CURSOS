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

    function soma () {
        $p = func_get_args(); /*pega todos os parametros e coloca dentro de um vetor*/
        $tot = func_num_args(); /*retorna o numero de argumentos*/
        $s=0;
        for ($i=0; $i<$tot; $i++) {
            $s=$s+$p[$i];
        }
        return $s;
    }
   
    $r = soma(5,10,6,3,89);
    echo "A soma entre dos valore é $r";
?>  
</div>
</body>
</html>
 