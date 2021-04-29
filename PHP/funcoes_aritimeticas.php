<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title></title>
    </head>
    <body>
        <h1>Funções Aritiméticas</h1>
        <?php
           $n1 = $_GET["a"];
           $n2 = $_GET["b"];
           
           echo "O valor absolto de $n1 é ".abs($n1);
           echo "<br/>O valor $n1<sup>$n2</sup> é  ".pow($n1,$n2);
           echo "<br/>A raiz de $n1 é  ".sqrt($n1);
           echo "<br/>O valor arredondado de $n1 é  ".round($n1); #ceil arrendonda pra cima e floor arredonda pra baixo
           echo "<br/>A parte inteira de  de $n1 é  ".intval($n1);
           echo "<br/>O valor de $n1 em moeda é  ".number_format($n1,2,",",".");
        
        ?>
    </body>
</html>