<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="Aula 12 - Tabuada.php">
        Valor: 
        <select name="numbers">
            <?php
                $number = 1; 
                do {
                    echo "<option value=$number>$number</option>";
                    $number++;
                } while ($number <= 10);   
            ?>    
        </select>
        <br/><input type="submit" value="Calcular"/>
    </form>

</div>
</body>
</html>
