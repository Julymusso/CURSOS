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
        $val=isset($_GET["value"])?$_GET["value"]:1;
        $c=$val;
        $fat = 1;
        do{
            $fat = $fat*$c;
            $c--;
        } while ($c>=1);
        echo "<h1> O Fatorial de $val! é $fat </h1>"
    ?>
<p><a href="Aula 12 - Fatorial.html" class="botao">Voltar</a></p>
</div>
</body>
</html>
 