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
        $num=isset($_GET["numbers"])?$_GET["numbers"]:0;
        $cont=0;
        do {
            $result = $num * $cont;
            echo "$num x $cont = $result <br/>";
            $cont++;
        } while ($cont<=10); 
    ?>
<p><a href="Aula 12 - Tabuada_index.php" class="botao">Voltar</a></p>
</div>
</body>
</html>
 