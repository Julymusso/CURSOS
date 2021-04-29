<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <title></title>
    </head>
    <body>
        <h1>Atribuições</h1>
        <?php
           $preco = $_GET["p"];
           $preco += $preco*(10/100);
           
           echo "O preço do produto com aumento é R$".number_format($preco,2,",",".");
        
        ?>
    </body>
</html>