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
        function soma ($a, $b) {
            return $a + $b;
        }
        $x=9;
        $y=15;
        $r = soma($y,$x);
        echo "A soma entre $x e $y é igual a $r";
?>  
</div>
</body>
</html>
 