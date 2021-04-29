<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title></title>
    </head>
    <body>
        <h1>Operações</h1>
        <?php
           $n1 = $_GET["a"];
           $n2 = $_GET["b"];
           
           echo "A soma entre $n1 e $n2 é igual a ".($n1 + $n2);
           echo "<br/>A multiplicação entre $n1 e $n2 é igual a ".($n1*$n2);
           echo "<br/>A divisão entre $n1 e $n2 é igual a ".($n1/$n2);
           echo "<br/>A diferença entre $n1 e $n2 é igual a ".($n1-$n2);
        
        ?>
    </body>
</html>